<?php

    require('../inc/db_config.php');
    require('../inc/essentials.php');

    date_default_timezone_set("Asia/Ho_Chi_Minh");

    session_start();

    if(isset($_GET['fetch_rooms']))
    {
        // check availability data decode
        $chk_avail = json_decode($_GET['chk_avail'],true);

        // checkin and checkout filter validations
        if($chk_avail['checkin']!='' && $chk_avail['checkout']!=''){
            $today_date = new DateTime(date("Y-m-d"));
            $checkin_date = new DateTime($chk_avail['checkin']);
            $checkout_date = new DateTime($chk_avail['checkout']);

            if($checkin_date == $checkout_date){
                echo"<h3 class='text-center text-danger'>Ngày nhập vào không hợp lệ!</h3>";
                exit;
            }
            else if ($checkout_date < $checkin_date){
                echo"<h3 class='text-center text-danger'>Ngày nhập vào không hợp lệ!</h3>";
                exit;
            }
            else if ($checkin_date < $today_date){
                echo"<h3 class='text-center text-danger'>Ngày nhập vào không hợp lệ!</h3>";
                exit;
            }
        }

        // guests data decode
        $guests = json_decode($_GET['guests'],true);
        $adults = ($guests['adults']!='') ? $guests['adults'] : 0;
        $children = ($guests['children']!='') ? $guests['children'] : 0;


        // facilities data decode
        $facility_list = json_decode($_GET['facility_list'],true);


        // count no. of room and output variable to store room cards
        $count_rooms = 0;
        $output = "";



        // fetching settings table to check website is shutdown or not
        $settings_q = "SELECT * FROM `settings` WHERE `sr_no`=1"; 
        $settings_r = mysqli_fetch_assoc(mysqli_query($con,$settings_q));



        // query for room cards with guests filter
        $room_res = select("SELECT * FROM `rooms` WHERE `adult`>=? AND `children`>=? AND `status`=? AND `removed`=?", [$adults,$children,1,0], 'iiii');

        while($room_data = mysqli_fetch_assoc($room_res)) {


            // check availability filter

            if($chk_avail['checkin']!='' && $chk_avail['checkout']!='')
            {
                $tb_query = "SELECT COUNT(*) AS `total_bookings` FROM `booking_order`
                    WHERE booking_status=? AND room_id=?
                    AND check_out > ? AND check_in < ?";

                $values = ['thành công',$room_data['id'],$chk_avail['checkin'],$chk_avail['checkout']];
                $tb_fetch = mysqli_fetch_assoc(select($tb_query,$values,'siss'));


                if(($room_data['quantity']-$tb_fetch['total_bookings'])==0){
                   continue;
                }
            }

            
            // get facilitites of rooms with filters
            $fac_count=0;

            $fac_q = mysqli_query($con, "SELECT f.name, f.id FROM `facilities` f INNER JOIN `rooms_facilities` rfac ON rfac.facilities_id = f.id WHERE rfac.room_id = '$room_data[id]'");
            $facilities_data = "";
            while($fac_row = mysqli_fetch_assoc($fac_q)) 
            {
                [1, 2, 3, 5];
                [3,4,5,6];
                if(in_array($fac_row['id'],$facility_list['facilities'])){
                    $fac_count++;
                }

                $facilities_data .= "<span class='badge rounded-pill text-dark text-wrap bg-light me-1 mb-1'>
                                        $fac_row[name]
                                    </span>";
                              
            }

            if(count($facility_list['facilities'])!=$fac_count){
                continue;
            }


            // get features of rooms

            $fea_q = mysqli_query($con, "SELECT f.name FROM `features` f INNER JOIN `rooms_features` rfea ON f.id = rfea.features_id WHERE rfea.room_id = '$room_data[id]'");

            $features_data = "";
            while($fea_row = mysqli_fetch_assoc($fea_q)) {
                $features_data .= "<span class='badge rounded-pill text-dark text-wrap bg-light me-1 mb-1'>
                                        $fea_row[name]
                                    </span>";
                              
            }


            

            // get thumbnail of images

            $room_thumb = ROOMS_IMG_PATH."thumbnail.jpg";
            $thumb_q = mysqli_query($con, "SELECT * FROM `room_images` WHERE `room_id`='$room_data[id]' AND `thumb`='1'");

            if (mysqli_num_rows($thumb_q) > 0) {
                $thumb_res = mysqli_fetch_assoc($thumb_q);
                $room_thumb = ROOMS_IMG_PATH.$thumb_res['image'];
            }


            // print room card

            $output.="
                <div class='card mb-4 border-0 shadow'>
                    <div class='row g-0 p-3 align-items-center'>
                    <div class='col-md-5 mb-lg-0 mb-md-0 mb-3'>
                        <img src='$room_thumb' class='img-fluid rounded'>
                    </div>
                    <div class='col-md-5 px-lg-3 px-md-3 px-0'>
                        <h5 class='mb-3'>$room_data[name]</h5>
                        <div class='features mb-3'>
                            <h6 class='mb-1'>Đặc điểm</h6>
                            $features_data
                        </div>
                        <div class='facilities mb-3'>
                            <h6 class='mb-1'>Đặc điểm khác</h6>
                            $facilities_data
                        </div>
                        <div class='guests'>
                            <h6 class='mb-1'>Khách</h6>
                            <span class='badge rounded-pill text-dark text-wrap bg-light'>
                                $room_data[adult] Người lớn
                            </span>
                            <span class='badge rounded-pill text-dark text-wrap bg-light'>
                                $room_data[children] Trẻ em
                            </span>
                        </div>
                    </div>
                    <div class='col-md-2 mt-lg-0 mt-md-0 mt-4 text-center'>
                        <h6 class='mb-4'>$room_data[price].000VND/đêm</h6>
                        <a href='confirm_booking.php?id=$room_data[id]' class='btn btn-sm w-100 text-white custom-bg shadow-none mb-2'>Đặt phòng</a>
                        <a href='room_details.php?id=$room_data[id]' class='btn btn-sm w-100 btn-outline-dark shadow-none' >Thông tin chi tiết</a>
                    </div>
                    </div>
                </div>
            ";

            $count_rooms++;
        }

        if($count_rooms>0){
            echo $output;
        }
        else{
            echo"<h3 class='text-center text-danger'>No rooms to show!</h3>";
        }
    }



?>
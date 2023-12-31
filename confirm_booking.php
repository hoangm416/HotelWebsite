<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php'); ?>
    <title><?php echo $settings_r['site_title']; ?> - Đặt phòng</title>
</head>
<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <?php
        if (!isset($_GET['id'])) {
            redirect('rooms.php');
        }


        $data = filteration($_GET);

        $room_res = select("SELECT * FROM `rooms` WHERE `id`=? AND `status`=? AND `removed`=?", [$data['id'],1,0], 'iii');

        if(mysqli_num_rows($room_res) == 0) {
            redirect('rooms.php');
        }

        $room_data = mysqli_fetch_assoc($room_res);

        $_SESSION['room'] = [
            "id" => $room_data['id'],
            "name" => $room_data['name'],
            "price" => $room_data['price'],
            "payment" => null,
            "available" => false,
        ];

        
    
    ?>

    <div class="container">
        <div class="row">

            <div class="col-12 my-5 mb-4 px-4">
                <h2 class="fw-bold">Xác Nhận Đặt Phòng</h2>
                <div style="font-size: 14px;">
                    <a href="index.php" class="text-secondary text-decoration-none">Trang chủ</a>
                    <span class="text-secondary"> > </span>
                    <a href="rooms.php" class="text-secondary text-decoration-none">Phòng</a>
                    <span class="text-secondary"> > </span>
                    <a href="#" class="text-secondary text-decoration-none">Xác Nhận</a>
                </div>
            </div>

            <div class="col-lg-7 col-md-12 px-4">
                <?php
                
                    $room_thumb = ROOMS_IMG_PATH."thumbnail.jpg";
                    $thumb_q = mysqli_query($con, "SELECT * FROM `room_images` WHERE `room_id`='$room_data[id]' AND `thumb`='1'");

                    if (mysqli_num_rows($thumb_q) > 0) {
                        $thumb_res = mysqli_fetch_assoc($thumb_q);
                        $room_thumb = ROOMS_IMG_PATH.$thumb_res['image'];
                    }

                    echo<<<data
                        <div class="card p-3 shadow-sm rounded">
                        <img src="$room_thumb" class="img-fluid rounded mb-3">
                        <h5>$room_data[name]</h5>
                        <h6>$room_data[price].000VND/đêm</h6>
                        </div>
                    data;
                
                ?>
            </div>

            <div class="col-lg-5 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow-sm rounded-3">
                    <div class="card-body">
                        <form action="pay_now.php" id="booking_form">
                            <h6 class="mb-3">Chi tiết đặt phòng</h6>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Họ và tên</label>
                                    <input name="name" type="text" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Số điện thoại</label>
                                    <input name="phonenum" type="number" value="<?php echo $user_data['phonenum'] ?>" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nhận phòng</label>
                                    <input name="checkin" onchange="check_availability()" type="date" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="form-label">Trả phòng</label>
                                    <input name="checkout" onchange="check_availability()" type="date" class="form-control shadow-none" required>
                                </div>

                                <div class="col-12">
                                    <div class="spinner-border text-info mb-3 d-none" id="info_loader" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>

                                    <h6 class="mb-3 text-danger" id="pay_info">Cung cấp ngày nhận phòng và trả phòng !</h6>

                                    <button name="pay_now" class="btn w-100 text-white custom-bg shadow-none mb-1" disabled >Thanh Toán</button>
                                </div>
                            </div>
                        </form>
                    </div>         
                </div>
            </div>

        </div>
     </div>

     <?php require('inc/footer.php'); ?>
    <script>
        let booking_form = document.getElementById('booking_form');
        let info_loader = document.getElementById('info_loader');
        let pay_info = document.getElementById('pay_info');

        function check_availability()
        {
            let checkin_val = booking_form.elements['checkin'].value;
            let checkout_val = booking_form.elements['checkout'].value;

            booking_form.elements['pay_now'].setAttribute('disabled', true);

            if(checkin_val != '' && checkout_val != ''){

                let data = new FormData();

                data.append('check_availability', '');
                data.append('check_in', checkin_val);
                data.append('check_out', checkout_val);

                let xhr = new XMLHttpRequest();
                xhr.open("POST", "admin/ajax/confirm_booking.php", true);

                xhr.onload = function() {
                    let data = JSON.parse(this.responseText);
                    if(data.status == 'check_in_out_equal'){
                        pay_info.innerText= "Bạn không thể trả phòng cùng ngày với ngày đặt phòng!";
                    }
                    else if(data.status == 'check_out_earlier'){
                        pay_info.innerText= "Ngày trả phòng của bạn không thể sớm hơn ngày nhận phòng!";
                    }
                    else if(data.status == 'check_in_earlier'){
                        pay_info.innerText= "Bạn không thể đặt phòng trước ngày hôm nay!";
                    }
                    else if(data.status == 'unavailable'){
                        pay_info.innerText= "Phòng đã được đặt vào ngày này!";
                    }
                    else{
                        pay_info.innerHTML = "Số ngày: "+data.days+"<br>Tổng tiền: "+data.payment+"VND";
                        pay_info.classList.replace('text-danger', 'text-dark');
                        booking_form.elements['pay_now'].removeAttribute('disabled');
                    }

                    pay_info.classList.remove('d-none');
                    info_loader.classList.add('d-none');
                }

                xhr.send(data);
            }

        }

    </script>

</body>
</html>
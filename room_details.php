<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php'); ?>
    <title><?php echo $settings_r['site_title']; ?> - Chi tiết phòng</title>
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

    
    ?>

    <div class="container">
        <div class="row">

            <div class="col-12 my-5 mb-4 px-4">
                <h2 class="fw-bold"><?php echo $room_data['name'] ?></h2>
                <div style="font-size: 14px;">
                    <a href="index.php" class="text-secondary text-decoration-none">Trang chủ</a>
                    <span class="text-secondary"> > </span>
                    <a href="rooms.php" class="text-secondary text-decoration-none">Phòng</a>
                </div>
            </div>

            <div class="col-lg-7 col-md-12 px-4">
                <div id="roomCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                            $room_img = ROOMS_IMG_PATH."thumbnail.jpg";
                            $img_q = mysqli_query($con, "SELECT * FROM `room_images` WHERE `room_id`='$room_data[id]'");
        
                            if (mysqli_num_rows($img_q) > 0) {
                                $active_class = 'active';
                                while($img_res = mysqli_fetch_assoc($img_q)) {
                                    echo "
                                        <div class='carousel-item $active_class'>
                                            <img src='".ROOMS_IMG_PATH.$img_res['image']."' class='d-block w-100 rounded'>
                                        </div>
                                    ";
                                    $active_class = ''; 
                                }
                            }
                            else {
                                echo "<div class='carousel-item active'>
                                        <img src='$room_img' class='d-block w-100'>
                                      </div>";
                            }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#roomCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#roomCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-lg-5 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow-sm rounded-3">
                    <div class="card-body">
                        <?php
                            echo <<< price
                                <h4>$room_data[price]VND/đêm</h4>
                            price;

                            $rating_q = "SELECT AVG(rating) AS `avg_rating` FROM  `rating_review` 
                             WHERE `room_id` = '$room_data[id]' ORDER BY `sr_no` DESC LIMIT 20";

                            $rating_res = mysqli_query($con,$rating_q);
                            $rating_fetch = mysqli_fetch_assoc($rating_res);

                            $rating_data = "";

                            if($rating_fetch['avg_rating']!=NULL)
                            {
                                for($i=1; $i <= $rating_fetch['avg_rating']; $i++){
                                    $rating_data .="<i class='bi bi-star-fill text-warning'></i>";
                            }
                            }

                            echo <<< rating
                                <div class="mb-3">
                                    $rating_data
                                </div>
                            rating;

                            $fea_q = mysqli_query($con, "SELECT f.name FROM `features` f INNER JOIN `rooms_features` rfea ON f.id = rfea.features_id WHERE rfea.room_id = '$room_data[id]'");
                            $features_data = "";
                            while($fea_row = mysqli_fetch_assoc($fea_q)) {
                                $features_data .= "<span class='badge rounded-pill text-dark text-wrap bg-light me-1 mb-1'>
                                                        $fea_row[name]
                                                    </span>";           
                            }

                            echo <<< features
                                <div class="mb-3">
                                    <h6 class="mb-1">Features</h6>
                                    $features_data
                                </div>
                            features;

                            $fac_q = mysqli_query($con, "SELECT f.name FROM `facilities` f INNER JOIN `rooms_facilities` rfac ON rfac.facilities_id = f.id WHERE rfac.room_id = '$room_data[id]'");
                            $facilities_data = "";
                            while($fac_row = mysqli_fetch_assoc($fac_q)) {
                                $facilities_data .= "<span class='badge rounded-pill text-dark text-wrap bg-light me-1 mb-1'>
                                                    $fac_row[name]
                                                    </span>";                      
                            }
                            echo<<<facilities
                                <div class="facilities mb-3">
                                    <h6 class="mb-1">Facilities</h6>
                                    $facilities_data
                                </div>
                            facilities;

                            echo<<<guests
                                <div class="mb-3">
                                    <h6 class="mb-1">Khách</h6>
                                    <span class="badge rounded-pill text-dark text-wrap bg-light">
                                        $room_data[adult] Người lớn
                                    </span>
                                    <span class="badge rounded-pill text-dark text-wrap bg-light">
                                        $room_data[children] Trẻ em
                                    </span>
                                </div>
                            guests;

                            echo<<<area
                                <div class="facilities mb-3">
                                    <h6 class="mb-1">Area</h6>
                                    <span class='badge rounded-pill text-dark text-wrap bg-light me-1 mb-1'>
                                        $room_data[area] m²
                                    </span>   
                                </div>
                            area;

                            echo<<<book
                                <a href="confirm_booking.php?id=$room_data[id]" class="btn w-100 text-white custom-bg shadow-none mb-1">Đặt phòng</a>
                            book;
                        ?>
                    </div>         
                </div>
            </div>
            

            <div class="col-12 mt-4 px-4">
                <div class="mb-5">
                    <h5>Description</h5>
                    <p>
                        <?php echo $room_data['description']?>
                    </p>
                </div>

                <div>
                    <h5 class="mb-3">Phản hồi & đánh giá</h5>
                    <?php 
                
                        $review_q = "SELECT rr.*,u.full_name AS uname, r.name AS rname FROM `rating_review` rr
                            INNER JOIN `users` u ON rr.user_id = u.id
                            INNER JOIN `rooms` r ON rr.room_id = r.id
                            WHERE rr.room_id = '$room_data[id]'
                            ORDER BY `sr_no` DESC LIMIT 15";

                        $review_res = mysqli_query($con, $review_q);

                            // Kiểm tra số lượng đánh giá và phản hồi
                        if (mysqli_num_rows($review_res) == 0) {
                                echo "<div class='text-center'>Chưa có đánh giá nào!</div>";
                            } 
                        else {
                            while ($row = mysqli_fetch_assoc($review_res)) 
                            {
                                $stars = "<i class='bi bi-star-fill text-warning'></i>";
                                for ($i = 1; $i < $row['rating']; $i++) {
                                    $stars .= "<i class='bi bi-star-fill text-warning'></i>";
                                }
                                echo <<<reviews
                                <div class="mb-4">
                                <div class="profile d-flex align-items-center mb-2">
                                <h6 class="m-0">Người dùng:$row[uname]</h6>
                                </div>
                                <p class = "mb-1">
                                $row[review]
                                </p>
                                <div class="rating" style="padding-bottom: 12px;">
                                    $stars
                                </div> 
                            </div>
                        reviews;
                            } 
                            }
                    ?>
                    
                </div>
            </div>

        </div>
     </div>

     <?php require('inc/footer.php'); ?>

</body>
</html>
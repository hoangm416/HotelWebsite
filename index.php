<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BK Hotel </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/common.css">
    <style>
        .availablility-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and(max-width: 575px) {
            .availablility-form{
                margin-top: 25px;
                padding: 0 35px;
            }
        }
    </style>
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">BK Hotel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active me-2" aria-current="page" href="#">Trang chủ</a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-2" href="#">Phòng</a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-2" href="#">Tiện ích</a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-2" href="#">Liên hệ</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Về chúng tôi</a>
                </li>
                
            </ul>
            <div class="d-flex">
                
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Đăng nhập
                </button>
                <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Đăng ký
                </button>
            </div>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i> Đăng nhập tài khoản
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Địa chỉ Email</label>
                            <input type="email" class="form-control shadow-none" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control shadow-none" >
                        </div>
                        <div class="d-flex align-items-center justify-content-between ">
                            <button type="submit" class="btn btn-dark shadow-none">ĐĂNG NHẬP</button>
                            <a href= "javascipts: void(0)" class="text-secondary text-decoration-none">Quên mật khẩu?</a>
                        </div>
                    </div> 
                </form>
            
            </div>
        </div>
    </div>

    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i>
                            Đăng ký tài khoản
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge rounded-pill bg-info text-dark mb-3 text-wrap lh-base">
                            Chú ý: Nhập đúng thông tin cá nhân, khi check-in trực tiếp tại sảnh chúng tôi sẽ kiểm tra
                        </span>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Họ và tên</label>
                                    <input type="text" class="form-control shadow-none" >
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Số CCCD</label>
                                    <input type="number" class="form-control shadow-none" >
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Số điện thoại</label>
                                    <input type="number" class="form-control shadow-none" >
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Ảnh</label>
                                    <input type="file" class="form-control shadow-none" >
                                </div>
                                <div class="col-md-12 p-0 mb-3">
                                    <label class="form-label">Địa chỉ</label>
                                    <textarea class="form-control shadow-none" rows="1"></textarea>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Ngày sinh</label>
                                    <input type="date" class="form-control shadow-none" >
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control shadow-none" >
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Mật khẩu</label>
                                    <input type="password" class="form-control shadow-none" >
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Nhập lại mật khẩu</label>
                                    <input type="password" class="form-control shadow-none" >
                                </div>
                            </div>
                        
                        </div>

                        <div class="text-center my-1">
                            <button type="submit" class="btn btn-dark shadow-none">ĐĂNG KÝ</button>
                        </div>
                    </div> 
                </form>
            
            </div>
        </div>
    </div>

    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="images/carousel/5.png" class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/6.png" class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/7.png" class="w-100 d-block"/>
            </div>
            </div>
        </div>
    </div>
    
    <!--Our Rooms-->
    <h2 class = "mt-5 pt-4 mb-4 text-center fx-bold h-font ">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">200.000VND/đêm</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill text-dark text-wrap bg-light">
                            2 phòng
                            </span>
                            <span class="badge rounded-pill text-dark text-wrap bg-light">
                            1 phòng tắm
                            </span>
                            <span class="badge rounded-pill text-dark text-wrap bg-light">
                            1 ban công
                            </span>
                            <span class="badge rounded-pill text-dark text-wrap bg-light">
                            3 ghế sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill text-dark text-wrap bg-light">
                            Wifi 
                            </span>
                            <span class="badge rounded-pill text-dark text-wrap bg-light">
                            Tivi 
                            </span>
                            <span class="badge rounded-pill text-dark text-wrap bg-light">
                            Máy sưởi
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>  
                            </span>
                           
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Đặt phòng</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none" >Thông tin chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">200.000VND/đêm</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill text-dark text-wrap bg-light">
                            2 phòng
                            </span>
                            <span class="badge rounded-pill text-dark text-wrap bg-light">
                            1 phòng tắm
                            </span>
                            <span class="badge rounded-pill text-dark text-wrap bg-light">
                            1 ban công
                            </span>
                            <span class="badge rounded-pill text-dark text-wrap bg-light">
                            3 ghế sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill text-dark text-wrap bg-light">
                            Wifi 
                            </span>
                            <span class="badge rounded-pill text-dark text-wrap bg-light">
                            Tivi 
                            </span>
                            <span class="badge rounded-pill text-dark text-wrap bg-light">
                            Máy sưởi
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>  
                            </span>
                           
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Đặt phòng</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none" >Thông tin chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">200.000VND/đêm</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill text-dark text-wrap bg-light">
                            2 phòng
                            </span>
                            <span class="badge rounded-pill text-dark text-wrap bg-light">
                            1 phòng tắm
                            </span>
                            <span class="badge rounded-pill text-dark text-wrap bg-light">
                            1 ban công
                            </span>
                            <span class="badge rounded-pill text-dark text-wrap bg-light">
                            3 ghế sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill text-dark text-wrap bg-light">
                            Wifi 
                            </span>
                            <span class="badge rounded-pill text-dark text-wrap bg-light">
                            Tivi 
                            </span>
                            <span class="badge rounded-pill text-dark text-wrap bg-light">
                            Máy sưởi
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>  
                            </span>
                           
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Đặt phòng</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none" >Thông tin chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>></a>
                
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      }
    });
    </script>
</body>
</html>
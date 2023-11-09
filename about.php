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
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
        <style>
            .box {
                border-top-color: teal !important;
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
                    <a class="nav-link active me-2" aria-current="page" href="index.php">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link me-2" href="#">Phòng</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link me-2" href="facilities.php">Tiện ích</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link me-2" href="#">Liên hệ</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="about.php">Về chúng tôi</a>
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

        <div class="my-5 px-4">
            <h2 class="fw-bold h-font text-center">VỀ CHÚNG TÔI</h2>
            <div class="h-line bg-dark"></div>
            <p class="text-center mt-3">
                Lorem síossl ssssssssssssssssssssssssss
                <br>ssssssssssssssssssssssssssssssssssssssssssssssss
            </p>
        </div>

        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                    <h3 class="mb-3">Lorem ipsum dolor sit</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit
                        Officiis esse iusto ad laudantium maxime eos harum?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit
                        Officiis esse iusto ad laudantium maxime eos harum?
                    </p>
                </div>

                <div class="col-lg-5 col-md-4 mb-4 order-lg-2 order-md-2 order-1">
                    <img src="https://t3.ftcdn.net/jpg/00/57/04/58/240_F_57045887_HHJml6DJVxNBMqMeDqVJ0ZQDnotp5rGD.jpg" width="500px">
                </div>


            </div>
        </div>

        <div class="container mt-5">
            <div class="row justify-content-evenly">
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box h-100">
                        <img src="images/about/hotel.svg" width="70px">
                        <h4 class="mt-4">100+ PHÒNG</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box h-100">
                        <img src="images/about/customers.svg" width="70px">
                        <h4 class="mt-3">2000+ KHÁCH HÀNG</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box h-100">
                        <img src="images/about/rating.svg" width="70px">
                        <h4 class="mt-4">150+ ĐÁNH GIÁ</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box h-100">
                        <img src="images/about/staff.svg" width="70px">
                        <h4 class="mt-4">50+ NHÂN VIÊN</h4>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="my-5 fw-bold h-font text-center">NHÓM QUẢN LÝ</h3>
        <div class="container px-4">
            <div class="swiper mySwiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                <div class="swiper-wrapper mb-5" id="swiper-wrapper-dc64d9daf684fd29" aria-live="polite">
                    <div class="swiper-slide swiper-slide-active bg-white text-center overflow-hidden rounded" role="group" aria-label="1 / 8" style="width: 888px;">
                        <img src="https://t3.ftcdn.net/jpg/00/57/04/58/240_F_57045887_HHJml6DJVxNBMqMeDqVJ0ZQDnotp5rGD.jpg" class="w-100">
                        <h5 class="mt-2">Random Name</h5>
                    </div>

                    <div class="swiper-slide swiper-slide-active bg-white text-center overflow-hidden rounded" role="group" aria-label="2 / 8" style="width: 888px;">
                        <img src="https://t3.ftcdn.net/jpg/00/57/04/58/240_F_57045887_HHJml6DJVxNBMqMeDqVJ0ZQDnotp5rGD.jpg" class="w-100">
                        <h5 class="mt-2">Random Name</h5>
                    </div>

                    <div class="swiper-slide swiper-slide-active bg-white text-center overflow-hidden rounded" role="group" aria-label="3 / 8" style="width: 888px;">
                        <img src="https://t3.ftcdn.net/jpg/00/57/04/58/240_F_57045887_HHJml6DJVxNBMqMeDqVJ0ZQDnotp5rGD.jpg" class="w-100">
                        <h5 class="mt-2">Random Name</h5>
                    </div>

                    <div class="swiper-slide swiper-slide-active bg-white text-center overflow-hidden rounded" role="group" aria-label="4 / 8" style="width: 888px;">
                        <img src="https://t3.ftcdn.net/jpg/00/57/04/58/240_F_57045887_HHJml6DJVxNBMqMeDqVJ0ZQDnotp5rGD.jpg" class="w-100">
                        <h5 class="mt-2">Random Name</h5>
                    </div>

                    <div class="swiper-slide swiper-slide-active bg-white text-center overflow-hidden rounded" role="group" aria-label="5 / 8" style="width: 888px;">
                        <img src="https://t3.ftcdn.net/jpg/00/57/04/58/240_F_57045887_HHJml6DJVxNBMqMeDqVJ0ZQDnotp5rGD.jpg" class="w-100">
                        <h5 class="mt-2">Random Name</h5>
                    </div>

                    <div class="swiper-slide swiper-slide-active bg-white text-center overflow-hidden rounded" role="group" aria-label="6 / 8" style="width: 888px;">
                        <img src="https://t3.ftcdn.net/jpg/00/57/04/58/240_F_57045887_HHJml6DJVxNBMqMeDqVJ0ZQDnotp5rGD.jpg" class="w-100">
                        <h5 class="mt-2">Random Name</h5>
                    </div>

                    <div class="swiper-slide swiper-slide-active bg-white text-center overflow-hidden rounded" role="group" aria-label="7 / 8" style="width: 888px;">
                        <img src="https://t3.ftcdn.net/jpg/00/57/04/58/240_F_57045887_HHJml6DJVxNBMqMeDqVJ0ZQDnotp5rGD.jpg" class="w-100">
                        <h5 class="mt-2">Random Name</h5>
                    </div>

                    <div class="swiper-slide swiper-slide-active bg-white text-center overflow-hidden rounded" role="group" aria-label="8 / 8" style="width: 888px;">
                        <img src="https://t3.ftcdn.net/jpg/00/57/04/58/240_F_57045887_HHJml6DJVxNBMqMeDqVJ0ZQDnotp5rGD.jpg" class="w-100">
                        <h5 class="mt-2">Random Name</h5>
                    </div>
                </div>

                <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal">
                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active" aria-current="true"></span>
                    <span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span>
                    <span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span>
                    <span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span>
                    <span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 4,
                spaceBetween: 40,
                pagination: {
                    el: ".swiper-pagination",
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                    },
                    640: {
                        slidesPerView: 1,
                    },
                    768: {
                        slidesPerView: 3,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                }
            });
        </script>
    </body>
</html>


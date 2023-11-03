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

        .custom-bg{
            background-color: #2ec1ac;
        }
        .custom-bg:hover{
            background-color: #279e8c;
        }

        .availablility-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px) {
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

    <!-- check availability form -->

    <div class="container availablility-form">
        <div class=row>
            <div class="col-lg-12 bg-white shadow p-4 rounder">
                <h5 class="mb-4">Đặt phòng</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Nhận phòng</label>
                            <input type="date" class="form-control shadow-none" >  
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Trả phòng</label>
                            <input type="date" class="form-control shadow-none" >  
                        </div>
                        <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Người lớn</label>
                            <select class="form-select shadow-none">
                                <option value="1">Một</option>
                                <option value="2">Hai</option>
                                <option value="3">Ba</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                        <label class="form-label" style="font-weight: 500;">Trẻ em</label>
                            <select class="form-select shadow-none">
                                <option value="1">Một</option>
                                <option value="2">Hai</option>
                                <option value="3">Ba</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Hoàn tất</button>
                        </div>
                    </div>
                </form>
            </div> 
        </div>
    </div>


<br><br><br>

    <!--Our Rooms-->
    <h2 class = "mt-5 pt-4 mb-4 text-center fx-bold h-font ">Thông tin các phòng</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Phòng 1 người</h5>
                        <h6 class="mb-4">200.000VND/đêm</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Đặc điểm</h6>
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
                            <h6 class="mb-1">Đặc điểm khác</h6>
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
                            <h6 class="mb-1">Đánh giá</h6>
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
                        <h5>Phòng 2 người</h5>
                        <h6 class="mb-4">300.000VND/đêm</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Đặc điểm</h6>
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
                            <h6 class="mb-1">Đặc điểm khác</h6>
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
                            <h6 class="mb-1">Đánh giá</h6>
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
                        <h5>Phòng 4 người</h5>
                        <h6 class="mb-4">500.000VND/đêm</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Đặc điểm</h6>
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
                            <h6 class="mb-1">Đặc điểm khác</h6>
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
                            <h6 class="mb-1">Đánh giá</h6>
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
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Các phòng khác>>></a>
                
            </div>
        </div>
    </div>

    <h2 class = "mt-5 pt-4 mb-4 text-center fx-bold h-font ">Dịch vụ</h2>

    <div class = "container">
        <div class = "row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class = "col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src = "https://itnow.vn/wp-content/uploads/2022/03/cach-mo-rong-vung-phu-song-wifi-luon-5-vach-cang-det-4.jpg" width = "100px" class = "mt-4">
                <h5 class = "mt-md-3"> Wifi </h5>
            </div>
            <div class = "col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src = "https://thenounproject.com/api/private/icons/5052787/edit/" width = "98px">
                <h5 class = "mt-2"> Buffet sáng </h5>
            </div>
            <div class = "col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src = "https://cdn-icons-png.flaticon.com/512/3621/3621198.png?ga=GA1.1.1652207904.1694049656" width = "85px">
                <h5 class = "mt-md-4"> Bể bơi ngoài trời </h5>
            </div>
            <div class = "col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src = "https://cdn-icons-png.flaticon.com/512/3202/3202964.png" width = "100px">
                <h5 class = "mt-md-2"> Xe đưa đón </h5>
            </div>
            <div class = "col-lg-2 col-md-2 btn btn-outline-dark text-center border-light rounded shadow py-4 my-3 ">
                <h5 class = "mt-5 mt-sm-12"> Các dịch vụ khác <br> >>></h5>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Ðánh giá của khách hàng</h2>

    <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">

                <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-items-center mb-3">
                    <img src="images/features/star.svg" width="30px">
                    <h6 class="m-0 ms-2">Người dùng 69</h6>
                </div>
                <p>
                Tôi rất hài lòng về dịch vụ phục vụ chu đáo và nụ cười niềm nở của nhân viên tại khách sạn này, đây quả là một trong những khách sạn tốt nhất tôi từng ở.
                </p>
                <div class="rating"></div>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i> 
                </div>
                <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-items-center mb-3">
                    <img src="images/features/star.svg" width="30px">
                    <h6 class="m-0 ms-2">Người dùng 829</h6>
                </div>
                <p>
                Khách sạn này mang đến những trải nghiệm ở nơi nghỉ ngơi tuyệt vời. Phòng rộng rãi sạch sẽ, cảnh quan xanh mát, và đặc biệt là nhân viên phục vụ rất nhiệt tình, luôn sẵn lòng hỗ trợ khách hàng mọi yêu cầu. Tôi sẽ cân nhắc lựa chọn khách sạn này nếu lại ghé qua vùng này trong tương lai.
                </p>
                <div class="rating"></div>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i> 
                </div>
                <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-items-center mb-3">
                    <img src="images/features/star.svg" width="30px">
                    <h6 class="m-0 ms-2">Người dùng 666</h6>
                </div>
                <p>
                Tôi không thể nhắc đến khách sạn này mà không nói lên sự hài lòng của mình. Ngôi khách sạn có vị trí đắc địa với view hướng biển rất đẹp. Dịch vụ ở đây chuyên nghiệp và trách nhiệm, đặc biệt là thái độ nhiệt tình, vui vẻ của nhân viên bốc xếp hành lý khi tôi đến và đi. Tôi sẽ chia sẻ khách sạn này với bạn bè và mong trở lại trong tương lai.
                </p>
                <div class="rating"></div>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i> 
                </div>

            <div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Tìm hiểu thêm >>></a>
        </div>
    </div>
    <br><br>

    <!-- Reach us -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TÌM CHÚNG TÔI</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7449.419251202785!2d105.84588999999998!3d21.0042738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac768ffe1abd%3A0x22b136bcf1c08e2a!2zQsOhY2ggS2hvYSwgSGFpIELDoCBUcsawbmcsIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1698153719874!5m2!1svi!2s" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Liên hệ</h5>
                    <a href="tel: +84123456789" class="d-inline-block mb-2 text-decoration-none text-dark">
                      <i class="bi bi-telephone-fill"></i> +84123456789
                    </a>
                    <br>
                    <a href="tel: +84123456789" class="d-inline-block text-decoration-none text-dark">
                      <i class="bi bi-telephone-fill"></i> +84123456789
                    </a>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Theo dõi</h5>
                    <a href="#" class="d-inline-block mb-3">
                      <span class="badge bg-light text-dark fs-6 p-2">
                      <i class="bi bi-twitter-x"></i> X
                      </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                      <span class="badge bg-light text-dark fs-6 p-2">
                      <i class="bi bi-facebook"></i> Facebook
                      </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                      <span class="badge bg-light text-dark fs-6 p-2">
                      <i class="bi bi-instagram"></i> Instagram
                      </span>
                    </a>
                </div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

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
    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
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
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        }
      }
    });
    </script>
</body>
</html>

<?php
    require('admin/inc/db_config.php'); 
    require('admin/inc/essentials.php');
    //require('inc/connection.php');
    session_start();

    $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?"; 
    $values = [1];
    $contact_r = mysqli_fetch_assoc(select($contact_q,$values, 'i'));
?>

<nav id="nav-bar" class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">BK Hotel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link me-2" href="index.php">Trang chủ</a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-2" href="rooms.php">Phòng</a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-2" href="facilities.php">Tiện ích</a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-2" href="contact.php">Liên hệ</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="about.php">Về chúng tôi</a>
                </li>
                
            </ul>
            <div class="d-flex">  
                <?php 
                    if (isset($_SESSION["user"]) && $_SESSION["user"]==true)
                    {
                        // $fullname = $_SESSION["fullname"];
                        echo <<< data
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-dark shadow-none dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                    Người dùng
                                </button>
                                <ul class="dropdown-menu dropdown-menu-lg-end">
                                    <li><a class="dropdown-item" href="profile.php">Thông tin</a></li>
                                    <li><a class="dropdown-item" href="bookings.php">Đặt phòng</a></li>
                                    <li><a class="dropdown-item" href="logout.php">Đăng xuất</a></li>
                                </ul>
                            </div>
                        data;
                    }
                    else
                    {
                        echo <<< data
                            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" onclick="window.location.href='login.php'">
                                Đăng nhập
                            </button>
                            <button type="button" class="btn btn-outline-dark shadow-none" onclick="window.location.href='registration.php'">
                                Đăng ký
                            </button>
                        data;
                    }
                ?>  
            </div>
        </div>
    </div>
</nav>

    <!-- <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="login_register.php">
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
    </div> -->

    <!-- <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="register-form" method="POST" action="login_register.php">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i>
                            Đăng ký tài khoản
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge rounded-pill bg-info text-dark mb-3 text-wrap lh-base">
                            Chú ý: Nhập đúng thông tin cá nhân, khi check-in trực tiếp chúng tôi sẽ kiểm tra
                        </span>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Họ và tên</label>
                                    <input name="name" type="text" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Số CCCD</label>
                                    <input name="pincode" type="number" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Số điện thoại</label>
                                    <input name="phonenum" type="number" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Ngày sinh</label>
                                    <input name="dob" type="date" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Email</label>
                                    <input name="email" type="email" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Mật khẩu</label>
                                    <input name="pass" type="password" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Nhập lại mật khẩu</label>
                                    <input name="cpass" type="password" class="form-control shadow-none" required>
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
    </div> -->


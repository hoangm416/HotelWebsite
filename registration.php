<?php 
    // require('inc/connection.php');
    // session_start();

    // if (isset($_POST['login']))
    // {
    //     $query = "SELECT * FROM `user_cred` WHERE `email`='$_POST[email_phonenum]' OR `phonenum`='$_POST[email_phonenum]' ";
    //     $result = mysqli_query($con, $query);

    //     if ($result)
    //     {
    //         if(mysqli_num_rows($result) == 1) // tài khoản đã tồn tại
    //         {
    //             $result_fetch = mysqli_fetch_assoc($result);
    //             if(password_verify($_POST['password'], $result_fetch['password']))
    //             {
    //                 $_SESSION['logged-in'] = true;
    //                 $_SESSION['phonenum'] = $result_fetch['phonenum'];
    //                 header("location: index.php");
    //             }
    //             else
    //             {
    //                 echo "
    //                     <script>
    //                     alert('Mật khẩu không đúng');
    //                     window.location.href='index.php';
    //                     </script>
    //                     ";
    //             }
    //         }

    //         else // tài khoản chưa tồn tại 
    //         {
    //             echo "
    //             <script>
    //                alert('SĐT hoặc email chưa đăng ký');
    //                window.location.href='index.php';
    //             </script>
    //             ";
    //         }
    //     }
    // }

    // else if(isset($_POST['register']))
    // {
    //     $user_exist = "SELECT * FROM `user_cred` WHERE `email`='$_POST[email]' OR `phonenum`='$_POST[phonenum]' ";
    //     $result = mysqli_query($con, $user_exist);

    //     if ($result)
    //     {
    //         if(mysqli_num_rows($result) == 1) // tài khoản đã tồn tại
    //         {
    //             $result_fetch = mysqli_fetch_assoc($result);
    //             if($result_fetch['email'] == $_POST['email'])
    //             {
    //                 // email đã tồn tại
    //                 echo "
    //                     <script>
    //                        alert('$result_fetch[email] - Địa chỉ email đã tồn tại');
    //                        window.location.href='index.php';
    //                     </script>
    //                     ";
    //             }
    //             else
    //             {
    //                 // SDT đã tồn tại
    //                 echo "
    //                     <script>
    //                        alert('$result_fetch[phonenum] - Số điện thoại đã tồn tại');
    //                        window.location.href='index.php';
    //                     </script>
    //                     ";
    //             }
    //         }

    //         else // tài khoản chưa tồn tại 
    //         {
    //             $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    //             $query = "INSERT INTO `user_cred`(`pincode`, `full_name`, `phonenum`, `email`, `password`, `dob`) 
    //                  VALUES ('$_POST[pincode]', '$_POST[fullname]', '$_POST[phonenum]', '$_POST[email]', '$password', '$_POST[dob]')";

    //             if(mysqli_query($con, $query))
    //             {
    //                 // tài khoản được thêm thành công
    //                 echo "
    //                     <script>
    //                        alert('Đăng ký thành công');
    //                        window.location.href='index.php';
    //                     </script>
    //                     ";
    //             }
    //             else 
    //             {
    //                 // thất bại
    //                 echo "
    //                     <script>
    //                        alert('Đăng ký thất bại');
    //                        window.location.href='index.php';
    //                     </script>
    //                     ";
    //             }
    //         }
    //     }

    //     else 
    //     {
    //         echo "
    //             <script>
    //               alert('Không thể chạy truy vấn');
    //               window.location.href='index.php';
    //             </script> ";
    //     }
    // }

    session_start();
    if (isset($_SESSION["user"])) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Đăng ký</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $idencard = $_POST["idencard"]; // Số cccd
           $phonenum = $_POST["phonenum"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
       
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($fullName) OR empty($idencard) OR empty($phonenum) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors, "Yêu cầu nhập đủ thông tin");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email không hợp lệ");
           }
           if (strlen($password) < 6) {
            array_push($errors, "Mật khẩu phải có ít nhất 6 ký tự");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors, "Mật khẩu không khớp");
           }
           require_once "database.php";
           
           $sql = "SELECT * FROM users WHERE email = '$email'";      
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount > 0) {
                array_push($errors,"Email đã tồn tại!");
           }
           $sql2 = "SELECT * FROM users WHERE phonenum = '$phonenum'";
           $result2 = mysqli_query($conn, $sql2);
           $rowCount2 = mysqli_num_rows($result2);
           if ($rowCount2 > 0) {
                array_push($errors,"SĐT đã tồn tại!");
            }
           
            if (count($errors)>0) 
           {
                foreach ($errors as  $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
           } 
           
           else
           { 
                $sql = "INSERT INTO users (full_name, idencard, phonenum, email, password) VALUES ( ?, ?, ?, ?, ? )";
                $stmt = mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt,"sssss",$fullName, $idencard, $phonenum, $email, $passwordHash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>Đăng ký thành công.</div>";
                } else{
                    die("Đã có sự cố");
                }
           }
          

        }
        ?>
        
        <form action="registration.php" method="post">
            <span class="badge rounded-pill bg-info text-dark mb-3 text-wrap lh-base">
                Chú ý: Nhập đúng thông tin cá nhân, khi check-in trực tiếp chúng tôi sẽ kiểm tra
            </span>
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Họ và tên:">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="idencard" placeholder="Số CCCD:">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="phonenum" placeholder="Số điện thoại:">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Mật khẩu:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Nhập lại mật khẩu:">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Đăng ký" name="submit">
            </div>
        </form>
        <div>
            <div>
                <p>Đã đăng ký? <a href="login.php">Đăng nhập tại đây</a></p>
            </div>
        </div>
    </div>
</body>
</html>
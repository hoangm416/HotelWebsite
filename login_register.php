<?php 
    require('admin/inc/db_config.php');
    require('admin/inc/essentials.php');
    //require('inc/connection.php');
    session_start();

    if(isset($_POST['register']))
    {
        // $data = filteration($_POST);

        // // match password and confirm password field
        // if($data['pass'] != $data['cpass']) {
        //     echo 'Mật khẩu không khớp';
        //     exit;
        // }

        // // kiểm tra tài khoản tồn tại hay không
        // $u_exist = select("SELECT * FROM `user_cred` WHERE `email` = ? AND `phonenum` = ? LIMIT 1",
        //     [$data['email'], $data['phonenum']], "ss");
        // if (mysqli_num_rows($u_exist) != 0) {
        //     $u_exist_fetch = mysqli_fetch_assoc($u_exist);
        //     echo ($u_exist_fetch['email'] == $data['email']) ? 'Email đã tồn tại' : 'SDT đã tồn tại';
        //     exit;
        // }

        // // đẩy ảnh chân dung lên server
        // $img = uploadUserImage($_FILES['profile']);
        // if ($img == 'Ảnh không hợp lệ') {
        //     echo 'Ảnh không hợp lệ';
        //     exit;
        // }
        // else if ($img == 'Đẩy ảnh thất bại') {
        //     echo 'Đẩy ảnh thất bại';
        //     exit;
        // }

        // // xác thực tài khoản
        // $token = bin2hex(random_bytes(16));
        // $enc_pass = password_hash($data['pass'], PASSWORD_BCRYPT);
        
        // $query = "INSERT INTO `user_cred`(`name`, `email`, `address`, `phonenum`, `pincode`, `dob`, `profile`, `password`, `is_verified`, `token`) 
        //             VALUES (?,?,?,?,?,?,?,?,?,?)";
        // $values = [$data['name'], $data['email'], $data['address'], $data['phonenum'], $data['pincode'],
        //             $img, $enc_pass, '0', $token];
        
        // if (insert($query, $values, 'ssssssssss')) {
        //     echo 1;
        // }
        // else {
        //     echo 'Thêm dữ liệu thất bại';
        // }

        $user_exist = "SELECT * FROM `user_cred` WHERE `email`='$_POST[email]' OR `phonenum`='$_POST[phonenum]' ";
        $result = mysqli_query($con, $user_exist);

        if ($result)
        {
            if(mysqli_num_rows($result) == 1) // tài khoản đã tồn tại
            {
                $result_fetch = mysqli_fetch_assoc($result);
                if($result_fetch['email'] == $_POST['email'])
                {
                    // email đã tồn tại
                    echo "
                        <script>
                           alert('$result_fetch[email] - Địa chỉ email đã tồn tại');
                           window.location.href='index.php';
                        </script>
                        ";
                }
                else
                {
                    // SDT đã tồn tại
                    echo "
                        <script>
                           alert('$result_fetch[phonenum] - Số điện thoại đã tồn tại');
                           window.location.href='index.php';
                        </script>
                        ";
                }
            }

            else // tài khoản chưa tồn tại 
            {
                // đẩy ảnh chân dung lên server
                $img = uploadUserImage($_FILES['profile']);
                if ($img == 'Ảnh không hợp lệ') {
                    echo 'Ảnh không hợp lệ';
                    exit;
                }
                else if ($img == 'Đẩy ảnh thất bại') {
                    echo 'Đẩy ảnh thất bại';
                    exit;
                }

                // // match password and confirm password field
                // if($_POST['pass'] != $_POST['cpass']) {
                //     echo 'Mật khẩu không khớp';
                //     exit;
                // }

                //$enc_pass = password_hash($data['pass'], PASSWORD_BCRYPT);
                $token = bin2hex(random_bytes(16));
                $query = "INSERT INTO `user_cred`(`name`, `email`, `address`, `phonenum`, `pincode`, `dob`, `profile`, `password`, `is_verified`, `token`) 
                     VALUES ('$_POST[name]', '$_POST[email]', '$_POST[address]', '$_POST[phonenum]', '$_POST[pincode]',
                     '$_POST[dob]', '$img', '$_POST[password]', '0', '$token')";

                if(mysqli_query($con, $query))
                {
                    // tài khoản được thêm thành công
                    echo "
                        <script>
                           alert('Đăng ký thành công');
                           window.location.href='index.php';
                        </script>
                        ";
                }
                else 
                {
                    // thất bại
                    echo "
                        <script>
                           alert('Đăng ký thất bại');
                           window.location.href='index.php';
                        </script>
                        ";
                }
            }
        }

        else 
        {
            echo "
                <script>
                  alert('Không thể chạy truy vấn');
                  window.location.href='index.php';
                </script> ";
        }
    }

?>
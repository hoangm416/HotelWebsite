<?php 
    require('../admin/inc/db_config.php');
    require('../admin/inc/essentials.php');

    if(isset($_POST['register']))
    {
        $data = filteration($_POST);

        // match password and confirm password field
        if($data['pass'] != $data['cpass']) {
            echo 'Mật khẩu không khớp';
            exit;
        }

        // kiểm tra tài khoản tồn tại hay không
        $u_exist = select("SELECT * FROM `user_cred` WHERE `email` = ? AND `phonenum` = ? LIMIT 1",
            [$data['email'], $data['phonenum']], "ss");
        if (mysqli_num_rows($u_exist) != 0) {
            $u_exist_fetch = mysqli_fetch_assoc($u_exist);
            echo ($u_exist_fetch['email'] == $data['email']) ? 'Email đã tồn tại' : 'SDT đã tồn tại';
            exit;
        }

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
        
        // $query = "INSERT INTO `user_cred`(`name`, `email`, `address`, `phonenum`, `cccd`, `dob`, `profile`, `password`, `is_verified`, `token`) 
        //             VALUES (?,?,?,?,?,?,?,?,?,?)";
        // $values = [$data['name'], $data['email'], $data['address'], $data['phonenum'], $data['cccd'],
        //             $img, $enc_pass, $token];
        
        // if (insert($query, $values, 'ssssssssss')) {
        //     echo 1;
        // }
        // else {
        //     echo 'Thêm dữ liệu thất bại';
        // }
    }


?>
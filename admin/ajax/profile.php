<?php 
    require('../inc/db_config.php');
    require('../inc/essentials.php');

    if (isset($_POST['info_form'])) {
        $frm_data = filteration($_POST);
        session_start();

        $u_exist = select("SELECT * FROM `users` WHERE `phonenum` = ? AND `id` != ? LIMIT 1",
            [$frm_data['phonenum'], $_SESSION['uId']], "ss");
        
        if (mysqli_num_rows($u_exist)!=0) {
            echo 'phone_already';
            exit;
        }
        else {
            echo 0;
            exit;
        }
    }
?>
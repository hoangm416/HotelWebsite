<?php
    
    require('admin/inc/db_config.php');
    require('admin/inc/essentials.php');

    date_default_timezone_set('Asia/Ho_Chi_Minh');

    session_start();
    unset($_SESSION['room']);

    function regenrate_session($uid)
    {
        $user_q=select("SELECT * FROM `users` WHERE `id`=? LIMIT 1",[$uid],'i');
        $user_fetch = mysqli_fetch_assoc($user_q);

        $_SESSION["user"] = "yes";
        $_SESSION['uId'] = $user_fetch['id'];
        $_SESSION["uName"] = $user_fetch['full_name'];
        $_SESSION["uIdencard"] = $user_fetch['idencard'];
        $_SESSION["uPhone"] = $user_fetch['phonenum'];
    }

    if(isset($_GET['vnp_Amount']))
    {
        $slct_query = "SELECT `booking_id`, `user_id` FROM `booking_order` WHERE `order_id`='$_GET[vnp_TxnRef]'";

        $slct_res = mysqli_query($con, $slct_query);

        if (mysqli_num_rows($slct_res)==0){
            redirect('index.php');
        }

        $sltc_fetch = mysqli_fetch_assoc($slct_res);

        if(!(isset($_SESSION['user']) && $_SESSION['user']==true))
        {
            regenrate_session($sltc_fetch['user_id']);
        }

        if($_GET['vnp_TransactionStatus'] == 00){
            $upd_query = "UPDATE `booking_order` SET `booking_status`='thành công',
            `trans_id`='$_GET[vnp_TransactionNo]',`trans_amt`='$_GET[vnp_Amount]',
            `trans_status`='$_GET[vnp_TransactionStatus]',`tran_resp_code`='$_GET[vnp_ResponseCode]'
             WHERE `booking_id`='$sltc_fetch[booking_id]'";

            mysqli_query($con, $upd_query);
            
        }
        else
        {
            $upd_query = "UPDATE `booking_order` SET `booking_status`='thất bại',
            `trans_id`='$_GET[vnp_TransactionNo]',`trans_amt`='$_GET[vnp_Amount]',
            `trans_status`='$_GET[vnp_TransactionStatus]',`trans_resp_code`='$_GET[vnp_ResponseCode]'
             WHERE `booking_id`='$sltc_fetch[booking_id]'";
            mysqli_query($con, $upd_query);


        }
        redirect('pay_status.php?order='.$_GET['vnp_TxnRef']);
    }
    else{
        redirect('index.php');
    };

?>
<?php 
    $con = mysqli_connect("localhost", "root", "", "hotelwebsite");
    if (mysqli_connect_error())
    {
        echo "<script> alert('Không thể kết nối tới database'); </script>";
        exit();
    }
?>
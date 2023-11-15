<?php 
    require('inc/essentials.php');
    adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản lý</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
    <div class="container-fluid bg-primary text-light p-3 d-flex align-item-center justify-content-between">
        <h3 class="mb-0">BẢNG ĐIỀU KHIỂN</h3>
        <a href="logout.php" class="btn btn-light btn-sm">Đăng xuất</a>
    </div>
    
    <?php require('inc/scripts.php'); ?>
</body>
</html>
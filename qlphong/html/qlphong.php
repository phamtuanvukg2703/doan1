<?php 
    require("/xampp/htdocs/doan1/php/conn.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Phòng Thực Hành</title>
    <link rel="stylesheet" href="../css/qlphong.css">
</head>
<body>
    <div class = "main">
        <div class = "menu">
            <a href="../../index.php">< Quay lại</a>
            <h2>Quản Lý Phòng Thực Hành</h2>
        </div>
        <div class = 'add-search'>
            <div class = 'search'><?php require("/xampp/htdocs/doan1/php/timphong.php")?></div>
            <a href="../../qlphong/html/add-phong.php">thêm phòng</a>
        </div>
        <div class = "container">
            <h3>Danh sách các phòng thực hành</h3>
            <?php require("/xampp/htdocs/doan1/php/hienthiphong.php") ?>
        </div>
    </div>
</body>
</html>
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
    <a href="javascript:history.back()">< Quay lại</a>
        <div class = "title">
            <h2>Quản Lý Phòng Thực Hành</h2>
        </div>
        <h3>Tìm kiếm phòng</h3>
        <div class = 'add-search'>
            <?php require("/xampp/htdocs/doan1/php/timphong.php")?>
            <a href="../../qlphong/html/add-phong.html">thêm phòng</a>
        </div>
        <div class = "container">
            <h3>Danh sách các phòng thực hành</h3>
            <?php require("/xampp/htdocs/doan1/php/hienthiphong.php") ?>
        </div>
    </div>
</body>
</html>
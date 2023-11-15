<?php
    require("/xampp/htdocs/doan1/php/conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý người dùng</title>
    <link rel="stylesheet" href="../css/qlnguoidung.css">
</head>
<body>
    <div class = "main">
    <a href="javascript:history.back()">< Quay lại</a>
        <div class = "title">
            <h2>Quản Lý Người Dùng</h2>
        </div>
        <h3>Tìm kiếm người dùng</h3>
        <div class = add-search>
            <?php  require("/xampp/htdocs/doan1/php/timnguoidung.php")?>
            <a href="add-user.html">Thêm người dùng</a>
        </div>
        <div class = "container">
            <h3>Danh sách các người dùng</h3>
            <?php  require("/xampp/htdocs/doan1/php/hienthiuser.php")?>
        </div>
    </div>
</body>
</html>
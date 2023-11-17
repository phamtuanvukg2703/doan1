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
        <div class = "menu">
            <a href="../../index.php">< Quay lại</a>
            <h2>Quản Lý Người Dùng</h2>
        </div>
        <div class = add-search>
            <div class = 'search'><?php  require("/xampp/htdocs/doan1/php/timnguoidung.php")?></div>
            <a href="add-user.html">Thêm người dùng</a>
        </div>
        <div class = "container">
            <h3>Danh sách các người dùng</h3>
            <?php  require("/xampp/htdocs/doan1/php/hienthiuser.php")?>
        </div>
    </div>
</body>
</html>
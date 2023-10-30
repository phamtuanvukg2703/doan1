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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Roboto:ital,wght@0,100;0,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class = "main">
    <a href="javascript:history.back()">< Quay lại</a>
        <div class = "title">
            <h2>Quản Lý Người Dùng</h2>
        </div>
        <div class = search-add>
            <div class = "search">
            <?php  require("/xampp/htdocs/doan1/php/timnguoidung.php")?>
            </div>
            <div class = "add">
                <a href="add-user.html">Thêm người dùng</a>
            </div>
        </div>
        <div class = "container">
            <h3>Danh sách các người dùng</h3>
            <?php  require("/xampp/htdocs/doan1/php/hienthiuser.php")?>
        </div>
    </div>
</body>
</html>
<?php
    require("/xampp/htdocs/doan1/php/conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Khu</title>
    <link rel="stylesheet" href="../css/qlkhu.css">
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
            <h2>Quản Lý Khu</h2>
        </div>
        <div class = search-add>
            <div class = "search">
                <?php require("/xampp/htdocs/doan1/php/timkhu.php")?>
            </div>
            <div class = "add">
                <a href="add-khu.html">Thêm khu</a>
            </div>
        </div>
        <div class = "container">
            <h3>Danh sách các khu</h3>
            <?php require("/xampp/htdocs/doan1/php/hienthikhu.php")?>
        </div>
    </div>
</body>
</html>
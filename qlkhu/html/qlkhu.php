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
</head>
<body>
    <div class = "main">
        <div class = "menu">
            <a href="../../index.php">< Quay lại</a>
            <h2>Quản Lý Khu</h2>
        </div>
        <div class = 'add-search'>
                <div class = 'search'>
                    <?php require("/xampp/htdocs/doan1/php/timkhu.php")?>
                </div>
                <a href="add-khu.html">Thêm khu</a>
        </div>
        <div class = "container">
            <h3>Danh sách các khu</h3>
            <?php require("/xampp/htdocs/doan1/php/hienthikhu.php")?>
        </div>
    </div>
</body>
</html>
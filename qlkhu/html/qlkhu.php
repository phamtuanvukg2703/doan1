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
    <a href="javascript:history.back()">< Quay lại</a>
        <div class = "title">
            <h2>Quản Lý Khu</h2>
        </div>
        <h3>Tìm kiếm Khu</h3>
        <div class = 'add-search'>
                <?php require("/xampp/htdocs/doan1/php/timkhu.php")?>
                <a href="add-khu.html">Thêm khu</a>
        </div>
        <div class = "container">
            <h3>Danh sách các khu</h3>
            <?php require("/xampp/htdocs/doan1/php/hienthikhu.php")?>
        </div>
    </div>
</body>
</html>
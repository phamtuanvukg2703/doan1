<?php require("/xampp/htdocs/doan1/php/conn.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý mượn phòng</title>
    <link rel="stylesheet" href="../css/qlmuonphong.css">
</head>
<body>
    <div class ="main">
        <h3>Tìm kiếm lịch mượn phòng</h3>
        <div class = add-search>
            <!-- PHP -->
            <?php require("/xampp/htdocs/doan1/php/timmuonphong.php") ?>
            <a href="/doan1/qlmuonphong/html/add-muonphong.html">Thêm lịch mượn phòng</a>
        </div>
        <div class = container>
            <h3>Danh sách các mượn phòng</h3>
            <?php require("/xampp/htdocs/doan1/php/hienthimuonphong.php") ?>
            <!-- PHP -->
        </div>
    </div>
    <div></div>
</body>
</html>
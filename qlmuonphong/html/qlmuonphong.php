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
        <div class = add-search>
            <!-- PHP -->
            <div class = 'search'><?php require("/xampp/htdocs/doan1/php/timmuonphong.php") ?></div>
            <a href="/doan1/qlmuonphong/html/add-muonphong.php">Đặt lịch phòng</a>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Quản Lý Phòng Thực Hành</title>
</head>
<body>
    <div class = "menu">
        <!-- <h2>Quản Lý Phòng Thực Hành</h2> -->
        <ul>
            <li><a href="qlkhu/html/qlkhu.php">Quản lý khu</a></li>
            <li><a href="qlphong/html/qlphong.php">Quản lý phòng</a></li>
            <li><a href="qlnguoidung/html/qlnguoidung.php">Quản lý người dùng</a></li>
        </ul> 
    </div>
    <div id = 'container'>
        <?php require_once('/xampp/htdocs/doan1/qlmuonphong/html/qlmuonphong.php') ?>
    </div>
</body>
</html>
<?php
require_once("conn.php");
$conn = connectDB();
$maphong = $_GET['id'];
$sql = "SELECT * FROM phong WHERE id = '$maphong'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa phòng thực hành</title>
    <link rel="stylesheet" href="../css/add-up.css">
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
        <div class = "title"><h2>Chỉnh sửa phòng thực hành</h2></div>
        <form action="/doan1/php/suaphong.php" method = "POST" enctype="multipart/form-data">
            <div class ="container">
                <div class ="ip">
                    <div class = "Makhu">
                        <!--Dữ liệu từ sql có sẵn muốn chỉnh sửa-->
                        <input type="text" name="makhu" id="makhu" value ="<?php echo $row['makhu'] ?>">
                    </div>
                    <div class = "Maphong">
                        <!--Dữ liệu từ sql có sẵn muốn chỉnh sửa-->
                        <input type="text" name="maphong" id="maphong" value ="<?php echo $row['maphong'] ?>">
                    </div>
                    <div class = "Tenphong">
                        <!--Dữ liệu từ sql có sẵn muốn chỉnh sửa-->
                        <input type="text" name="tenphong" id="tenphong" value ="<?php echo $row['tenphong'] ?>">
                    </div>
                    <div class = "hinh">
                        <input type="file" name="hinh" id="hinh">
                    </div>
                </div>
                <div class ="sub_update">
                    <button type="submit" id="submit_up">Chỉnh sửa</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
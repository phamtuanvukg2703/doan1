<?php
require_once("/xampp/htdocs/doan1/php/conn.php");
$conn = connectDB();
$id = $_GET['id'];  
$sql = "SELECT * FROM muonphong where mamuonphong ='$id'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $mamuonphong =$row['mamuonphong'];
    $manguoidung =$row['manguoidung'];
    $maphong =$row['maphong'];
    $ngaymuon =$row['ngaymuon'];
    $ngaytra =$row['ngaytra'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin mượn phòng</title>
    <link rel="stylesheet" href="../css/up-muonphong.css">
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
        <div class = "title"><h2>Chỉnh sửa người dùng</h2></div>
        <form action="../../php/suamuonphong.php" method="">
            <div class ="container">
                <div class ="ip">
                    <div class = "mamuonphong">
                        <label for="mamuonphong">Mã mượn phòng:</label>
                        <input type="text" name="mamuonphong" id="mamuonphong" value ="<?php echo $mamuonphong ?>" readonly>
                    </div>
                    <div class = "manguoidung">
                        <label for="manguoidung">Mã người dùng:</label>
                        <input type="text" name="manguoidung" id="manguoidung"value ="<?php echo $manguoidung ?>">
                    </div>
                    <div class = "maphong">
                        <label for="maphong">Mã phòng:</label>
                        <input type="text" name="maphong" id="maphong"value ="<?php echo $maphong ?>">
                    </div>
                    <div class = "ngaymuon">
                        <label for="ngaymuon">Ngày mượn:</label>
                        <input type="date" name="ngaymuon" id="ngaymuon" value ="<?php echo $ngaymuon ?>">
                    </div>
                    <div class = "ngaytra">
                        <label for="ngaytra">Ngày mượn:</label>
                        <input type="date" name="ngaytra" id="ngaytra" value ="<?php echo $ngaytra ?>">
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
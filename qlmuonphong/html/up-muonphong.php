<?php
require_once("/xampp/htdocs/doan1/php/conn.php");
require_once('/xampp/htdocs/doan1/php/func.php');
$conn = connectDB();
//lấy id
$id = $_GET['id'];  
$sql = "SELECT * FROM muonphong where mamuonphong ='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$phongs = getPhongOptions($row['maphong']);
$nguoidungs = getNguoidungOptions($row['manguoidung']);
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin mượn phòng</title>
    <link rel="stylesheet" href="../css/up-muonphong.css">
</head>
<body>
    <div class = "main">
        <a href="javascript:history.back()">< Quay lại</a>
        <div class = "title"><h2>Chỉnh sửa người dùng</h2></div>
        <form action="../../php/suamuonphong.php" method="">
            <div class ="container">
                <div class ="ip">
                    <div class = "manguoidung">
                        <label for="manguoidung">Tên người dùng:</label>
                        <select name="manguoidung">
                            <?php echo $nguoidungs ?>
                        </select>
                    </div>
                    <div class = "maphong">
                        <label for="maphong">Tên phòng:</label>
                        <select name="maphong">
                            <?php echo $phongs ?>
                        </select>
                    </div>
                    <div class = "ngaymuon">
                        <label for="ngaymuon">Ngày mượn:</label>
                        <input type="date" name="ngaymuon" id="ngaymuon" value ="<?php echo $row['ngaymuon'] ?>">
                    </div>
                    <div class = "ngaytra">
                        <label for="ngaytra">Ngày trả:</label>
                        <input type="date" name="ngaytra" id="ngaytra" value ="<?php echo $row['ngaytra'] ?>">
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
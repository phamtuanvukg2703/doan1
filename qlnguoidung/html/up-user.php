<?php
require_once("/xampp/htdocs/doan1/php/conn.php");
$conn = connectDB();
$id = $_GET['id'];  
$sql = "SELECT * FROM nguoidung where manguoidung ='$id'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $manguoidung =$row['manguoidung'];
    $ten = $row['ten'];
    $username = $row['username'];
    $pass = $row['pass'];
    $sdt = $row['sdt'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa người dùng</title>
    <link rel="stylesheet" href="../css/up-user.css">
</head>
<body>
    <div class = "main">
        <a href="javascript:history.back()">< Quay lại</a>
        <div class = "title"><h2>Chỉnh sửa người dùng</h2></div>
        <form action="/doan1/php/suanguoidung.php" method="">
            <div class ="container">
                <div class ="ip">
                <div class = "manguoidung">
                        <!--Dữ liệu từ sql có sẵn muốn chỉnh sửa-->
                        <label for="manguoidung">Mã Người Dùng:</label>
                        <input type="text" name="manguoidung" id="manguoidung" value ="<?php echo $manguoidung ?>" readonly>
                    </div>
                    <div class = "Username">
                        <!--Dữ liệu từ sql có sẵn muốn chỉnh sửa-->
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="Username" value ="<?php echo $username ?>">
                    </div>
                    <div class = "Password">
                        <!--Dữ liệu từ sql có sẵn muốn chỉnh sửa-->
                        <label for="password">Password:</label>
                        <input type="password" name="pass" id="password" value ="<?php echo $pass ?>">
                    </div>
                    <div class = "Ten">
                        <!--Dữ liệu từ sql có sẵn muốn chỉnh sửa-->
                        <label for="ten">Tên:</label>
                        <input type="text" name="ten" id="ten"value ="<?php echo $ten ?>">
                    </div>
                    <div class = "Sdt">
                        <!--Dữ liệu từ sql có sẵn muốn chỉnh sửa-->
                        <label for="sdt">SĐT:</label>
                        <input type="tel" name="sdt" id="sdt"value ="<?php echo $sdt ?>">
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
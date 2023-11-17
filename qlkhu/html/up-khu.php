<?php
require_once("/xampp/htdocs/doan1/php/conn.php");
$conn = connectDB();
$id = $_GET['id'];  
$sql = "SELECT * FROM khu where makhu ='$id'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $makhu =$row['makhu'];
    $tenkhu =$row['tenkhu'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa khu</title>
    <link rel="stylesheet" href="../css/add-up.css">
</head>
<body>
    <div class = "main">
        <a href="javascript:history.back()">< Quay lại</a>
        <div class = "title"><h2>Chỉnh sửa khu</h2></div>
        <form  method = "" action="../../php/suakhu.php">
            <div class ="container">
                <div class ="ip">
                    <div class = "ma-khu">
                        <label for="makhu">Mã Khu:</label>
                        <!--Dữ liệu từ sql có sẵn muốn chỉnh sửa-->
                        <input type="text" name="makhu" id="makhu" value ="<?php echo $makhu ?>" readonly>
                    </div>
                    <div class = "ten-khu">
                        <label for="tenkhu">Tên khu:</label>
                        <!--Dữ liệu từ sql có sẵn muốn chỉnh sửa-->
                        <input type="text" name="tenkhu" id="tenkhu" value ="<?php echo $tenkhu ?>">
                    </div>
                </div>
                <div class ="sub_update">
                    <button type="submit" id="submit_add">Chỉnh sửa</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
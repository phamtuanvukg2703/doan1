<?php
require_once("/xampp/htdocs/doan1/php/conn.php");
require_once("/xampp/htdocs/doan1/php/func.php");
$conn = connectDB();
$id = $_GET['id'];  
$sql = "SELECT * FROM phong where maphong ='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$makhus = getKhuOptions($row['makhu']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa phòng thực hành</title>
    <link rel="stylesheet" href="../css/add-up.css">
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
                        <select name="makhu">
                            <?php echo $makhus ?>
                        </select>
                    </div>
                    <div class = "Maphong">
                        <!--Dữ liệu từ sql có sẵn muốn chỉnh sửa-->
                        <input type="text" name="maphong" id="maphong" value ="<?php echo $row['maphong'] ?>" readonly>
                    </div>
                    <div class = "Tenphong">
                        <!--Dữ liệu từ sql có sẵn muốn chỉnh sửa-->
                        <input type="text" name="tenphong" id="tenphong" value ="<?php echo $row['tenphong'] ?>">
                    </div>
                    <div class = "hinh">
                        <input type="file" name="hinh" id="hinh" value ="<?php echo $row['hinh'] ?>">
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
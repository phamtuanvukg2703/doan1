<?php
require_once('/xampp/htdocs/doan1/php/conn.php');
require_once('/xampp/htdocs/doan1/php/func.php');
$conn = connectDB();
$cbkhu = getcomboboxkhu($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Phòng mới</title>
    <link rel="stylesheet" href="../css/add-up.css">
</head>
<body>
    <div class = "main">
        <a href="javascript:history.back()">< Quay lại</a>
        <div class = "title"><h2>Thêm phòng thực hành mới</h2></div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class ="container">
                <div class ="ip">
                    <div class = "ma-khu">
                        <select name="makhu">
                            <?php while($row = mysqli_fetch_array($cbkhu)) {
                            ?>
                                <option value="<?php echo $row['makhu'] ;?>"><?php echo $row['tenkhu']; ?> </option>
                            <?php }
                            ?>
                        </select>
                    </div>
                    <div class = "ma-phong">
                        <input type="text" name="maphong" id="maphong" placeholder="Nhập mã phòng" required>
                    </div>
                    <div class = "ten-phong">
                        <input type="text" name="tenphong" id="tenphong" placeholder="Nhập tên phòng">
                    </div>
                    <div class ="hinh">
                        <label for="hinh">Chọn hình ảnh</label>
                        <input type="file" name="hinh" id="hinh">
                    </div>
                </div>
                <div class ="sub_add">
                    <button type="submit" name="submit_add">Thêm phòng thực hành</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
<?php  
    if(isset($_POST['submit_add'])){
    // Lấy dữ liệu từ biểu mẫu
        $makhu = $_POST['makhu'];
        $maphong = $_POST['maphong'];
        $tenphong = $_POST['tenphong'];
        $hinh = $_FILES['hinh']['name'];
        move_uploaded_file($_FILES['hinh']["tmp_name"],"/xampp/htdocs/doan1/png/".$_FILES['hinh']['name']);
        // SQL để chèn dữ liệu vào bảng
        $sql ="INSERT INTO phong(makhu,maphong,tenphong, hinh, trangthai, trangthaixoa) VALUES ('$makhu','$maphong','$tenphong','$hinh','trống', '1')";
        if ($conn->query($sql) == TRUE) {
            echo '<script type="text/javascript">';
            echo 'alert("Thêm phòng thành công!");';
            echo 'window.location.href ="/doan1/qlphong/html/qlphong.php";'; // Thay "trang-chu.php" bằng URL trang chủ thực tế của bạn
            echo '</script>';
        } else {
            echo "Lỗi: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
?>

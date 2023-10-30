<?php  
    require_once("conn.php");
    $conn = connectDB();
    // Lấy dữ liệu từ biểu mẫu
    $mamuonphong = $_POST['mamuonphong'];
    $manguoidung = $_POST['manguoidung'];
    $maphong = $_POST['maphong'];
    $ngaymuon = $_POST['ngaymuon'];
    $ngaytra = $_POST['ngaytra'];
    $trangthai = $_POST['trangthai'];
    // SQL để chèn dữ liệu vào bảng
    $sql = "INSERT INTO muonphong (mamuonphong, manguoidung, maphong, ngaymuon, ngaytra, trangthai) VALUES ('$mamuonphong', '$manguoidung','$maphong','$ngaymuon','$ngaytra','1')";
    if ($conn->query($sql) == TRUE) {
        echo '<script type="text/javascript">';
        echo 'alert("Thêm khu thành công!");';
        echo 'window.location.href ="/doan1/qlmuonphong/html/qlmuonphong.php";'; // Thay "trang-chu.php" bằng URL trang chủ thực tế của bạn
        echo '</script>';
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>

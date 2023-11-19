<?php  
    // Lấy dữ liệu từ biểu mẫu
    $manguoidung = $_POST['manguoidung'];
    $maphong = $_POST['maphong'];
    $ngaymuon = $_POST['ngaymuon'];
    $ngaytra = $_POST['ngaytra'];
    // SQL để chèn dữ liệu vào bảng
    $sql = "INSERT INTO muonphong ( manguoidung, maphong, ngaymuon, ngaytra, trangthai) VALUES ( '$manguoidung','$maphong','$ngaymuon','$ngaytra','1')";
    if ($conn->query($sql) === TRUE){
        $sqlUpdate = "UPDATE phong SET trangthai = 'Đã mượn' WHERE maphong = '$maphong'";
        if ($conn->query($sqlUpdate) === TRUE){
            echo '<script type="text/javascript">';
            echo 'alert("Thêm thành công!");';
            echo 'window.location.href ="/doan1/index.php";'; // Thay "trang-chu.php" bằng URL trang chủ thực tế của bạn
            echo '</script>';
        }
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
}
    $conn->close();
?>

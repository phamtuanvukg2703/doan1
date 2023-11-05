<?php  
    require_once("conn.php");
    $conn = connectDB();
    // Lấy dữ liệu từ biểu mẫu
    $makhu = $_POST['makhu'];
    $maphong = $_POST['maphong'];
    $tenphong = $_POST['tenphong'];
    $hinh = $_FILES['hinh']['name'];
    move_uploaded_file($_FILES['hinh']["tmp_name"],"../png/".$_FILES['hinh']['name']);
    // SQL để chèn dữ liệu vào bảng
    $sql ="INSERT INTO phong(makhu,maphong,tenphong, hinh, trangthai, trangthaixoa) VALUES ('$makhu','$maphong','$tenphong','$hinh', '0', '1')";
    if ($conn->query($sql) == TRUE) {
        echo '<script type="text/javascript">';
        echo 'alert("Thêm phòng thành công!");';
        echo 'window.location.href ="/doan1/qlphong/html/qlphong.php";'; // Thay "trang-chu.php" bằng URL trang chủ thực tế của bạn
        echo '</script>';
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>

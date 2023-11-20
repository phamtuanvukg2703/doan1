<?php  
    require_once("conn.php");
    $conn = connectDB();
    // Lấy dữ liệu từ biểu mẫu
    $manguoidung = $_POST['manguoidung'];
    $ten = $_POST['ten'];
    $user = $_POST['username'];
    $pass = $_POST['pass'];
    $sdt = $_POST['sdt'];
    // SQL để chèn dữ liệu vào bảng
    $sql = "INSERT INTO nguoidung(manguoidung, ten, username, pass, sdt, trangthai) VALUES ('$manguoidung', '$ten','$user','$pass','$sdt','1')";
    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">';
        echo 'alert("Thêm người dùng thành công!");';
        echo 'window.location.href ="/doan1/qlnguoidung/html/qlnguoidung.php";'; // Thay "trang-chu.php" bằng URL trang chủ thực tế của bạn
        echo '</script>';
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>

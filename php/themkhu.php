<?php  
    require_once("conn.php");
    $conn = connectDB();
    // Lấy dữ liệu từ biểu mẫu
    $makhu = $_POST['makhu'];
    $tenkhu = $_POST['tenkhu'];
    $trangthai = $_POST['trangthai'];
    // SQL để chèn dữ liệu vào bảng
    $sql = "INSERT INTO khu (makhu, tenkhu, trangthai) VALUES ('$makhu', '$tenkhu','1')";
    if ($conn->query($sql) == TRUE) {
        echo '<script type="text/javascript">';
        echo 'alert("Thêm khu thành công!");';
        echo 'window.location.href ="/doan1/qlkhu/html/qlkhu.php";'; // Thay "trang-chu.php" bằng URL trang chủ thực tế của bạn
        echo '</script>';
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>

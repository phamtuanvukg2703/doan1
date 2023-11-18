<?php

// Kết nối với cơ sở dữ liệu
$conn = new mysqli("localhost", "root", "", "doan1");

// Lấy dữ liệu từ form
$manguoidung = $_POST["manguoidung"];

// Kiểm tra ràng buộc duy nhất
$sql = "SELECT COUNT(*) AS count FROM muonphong WHERE manguoidung = $manguoidung";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$count = $row["count"];

if ($count > 0) {
    // Người dùng đã mượn một phòng
    echo '<script type="text/javascript">';
    echo 'alert("Thêm thành công!");';
    echo 'window.location.href ="/doan1/index.php";'; // Thay "trang-chu.php" bằng URL trang chủ thực tế của bạn
    echo '</script>';
} else {
    
}

// Đóng kết nối với cơ sở dữ liệu
$conn->close();

?>
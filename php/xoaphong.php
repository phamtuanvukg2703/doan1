<?php
    require_once("conn.php");
    $conn = connectDB();
    $maphong = $_GET['id'];
    $sql = "update phong set trangthaixoa ='0'where maphong = '$maphong' ";
    $result = $conn->query($sql);
    if ($conn->query($sql) == TRUE) {
        $sqlUpdate = "update muonphong set trangthai = 0 where maphong = '$maphong'";
        if ($conn->query($sqlUpdate) == TRUE) {
        echo '<script type="text/javascript">';
        echo 'alert("Xóa thành công!");';
        echo 'window.location.href = "../qlphong/html/qlphong.php";'; // Thay "trang-chu.php" bằng URL trang chủ thực tế của bạn
        echo '</script>';
        }
    }
    $conn->close();
?>
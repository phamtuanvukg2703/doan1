<?php
    require_once("conn.php");
    $conn = connectDB();
    $mamuonphong = $_GET['id'];
    $sql = "update muonphong set trangthai ='0'where mamuonphong = '$mamuonphong' ";
    $result = $conn->query($sql);
    if ($conn->query($sql) == TRUE) {
        echo '<script type="text/javascript">';
        echo 'alert("Xóa thành công!");';
        echo 'window.location.href = "../qlmuonphong/html/qlmuonphong.php";'; // Thay "trang-chu.php" bằng URL trang chủ thực tế của bạn
        echo '</script>';
    }
    $conn->close();
?>
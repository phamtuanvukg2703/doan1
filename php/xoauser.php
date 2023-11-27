<?php
    require_once("conn.php");
    $conn = connectDB();
    $manguoidung = $_GET['id'];
    $sql = "update nguoidung set trangthai ='0' WHERE manguoidung = '$manguoidung' ";
    $result = $conn->query($sql);
    if ($conn->query($sql) == TRUE) {
        $sqlUpdate = "UPDATE muonphong set trangthai = 0 WHERE manguoidung ='$manguoidung'";
        if($conn->query($sqlUpdate) === TRUE){
            echo '<script type="text/javascript">';
            echo 'alert("Xóa thành công!");';
            echo 'window.location.href = "../qlnguoidung/html/qlnguoidung.php";'; // Thay "trang-chu.php" bằng URL trang chủ thực tế của bạn
            echo '</script>';
        }
    }
    $conn->close();
?>
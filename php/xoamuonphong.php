<?php
    require_once("conn.php");
    $conn = connectDB();
    $mamuonphong = $_GET['id'];
    $sql = "update muonphong set trangthai ='0'where mamuonphong = '$mamuonphong' ";
    if ($conn->query($sql)) {
        $update = "UPDATE phong SET trangthai = 'trống' WHERE maphong = (SELECT maphong FROM muonphong WHERE mamuonphong = '$mamuonphong')";
        if ($conn->query($update) === TRUE){
            echo '<script type="text/javascript">';
            echo 'alert("Xóa thành công!");';
            echo 'window.location.href ="/doan1/index.php";'; // Thay "trang-chu.php" bằng URL trang chủ thực tế của bạn
            echo '</script>';
    }else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
}
}
    $conn->close();
?>
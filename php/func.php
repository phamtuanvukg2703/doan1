<?php
    require_once("conn.php");
    $conn = connectDB();
//Phòng
    function layphong($conn) {
        $sql = "select * from phong";
        return mysqli_query($conn, $sql);
    }
    function layctphong($conn, $id) {
        $sql = "select * from phong where maphong = '$id'";
        return mysqli_query($conn, $sql);
    }
//Khu
//người dùng
//mượn phòng
?>
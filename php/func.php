<?php
    require_once("conn.php");
    $conn = connectDB();
    function getcomboboxkhu($conn){
        $sql = "SELECT * FROM khu where trangthai ='1'";
        return mysqli_query($conn, $sql);
    };
    function getcomboboxuser($conn) {
        $sql = "SELECT * FROM nguoidung WHERE trangthai = '1'";
        return mysqli_query($conn, $sql);
    };
    function getcomboboxroom($conn) {
        $sql = "SELECT * FROM phong WHERE trangthaixoa = '1'";
        return mysqli_query($conn, $sql);
    };
    function isRoomBooked($maphong, $ngaymuon, $conn) {
        $sql = "SELECT * FROM muonphong WHERE maphong = '$maphong' AND '$ngaymuon' BETWEEN ngaymuon AND ngaytra";
        $result = $conn->query($sql);
        return $result->num_rows > 0;
    }
?>
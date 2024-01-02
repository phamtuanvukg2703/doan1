<?php
    require_once("conn.php");
    $conn = connectDB();
    function getcomboboxkhu($conn){
        $sql = "SELECT * FROM khu where trangthai ='1'";
        return mysqli_query($conn, $sql);
    };
    //add combobox người dùng
    function getcomboboxuser($conn) {
        $sql = "SELECT * FROM nguoidung WHERE trangthai = '1'";
        return mysqli_query($conn, $sql);
    };
    //add combobox phòng
    function getcomboboxroom($conn) {
        $sql = "SELECT * FROM phong WHERE trangthaixoa = '1'";
        return mysqli_query($conn, $sql);
    };
    //update combobox khu
    function getKhuOptions($selectedMakhu){
        global $conn;
        $sql = "SELECT makhu, tenkhu FROM khu where trangthai = 1";
        $result = $conn->query($sql);
        $options = "";
        while ($row = $result->fetch_assoc()) {
            $isSelected = ($row['makhu'] == $selectedMakhu) ? "selected" : "";
            $options .= "<option value='{$row['makhu']}' $isSelected>{$row['tenkhu']}</option>";
        }
        return $options;
    }
    //update combobox phòng
    function getPhongOptions($selectedMaphong) {
        global $conn;
        $sql = "SELECT maphong, tenphong FROM phong where trangthaixoa = 1";
        $result = $conn->query($sql);
        $options = "";
        while ($row = $result->fetch_assoc()) {
            $isSelected = ($row['maphong'] == $selectedMaphong) ? "selected" : "";
            $options .= "<option value='{$row['maphong']}' $isSelected>{$row['tenphong']}</option>";
        }
        return $options;
    }
    //update combobox người dùng
    function getNguoidungOptions($selectedManguoidung) {
        global $conn;
        $sql = "SELECT manguoidung, ten FROM nguoidung where trangthai = 1";
        $result = $conn->query($sql);
    
        $options = "";
        while ($row = $result->fetch_assoc()) {
            $isSelected = ($row['manguoidung'] == $selectedManguoidung) ? "selected" : "";
            $options .= "<option value='{$row['manguoidung']}' $isSelected>{$row['ten']}</option>";
        }
    
        return $options;
    }
    //
    function isRoomBooked($maphong, $ngaymuon, $conn) {
        $sql = "SELECT * FROM muonphong WHERE maphong = '$maphong' AND '$ngaymuon' BETWEEN ngaymuon AND ngaytra";
        $result = $conn->query($sql);
        return $result->num_rows > 0;
    }
?>
<?php
require_once('conn.php');
$conn = connectDB();
$manguoidung= $_GET['manguoidung'];
$ten = $_GET['ten'];
$username = $_GET['username'];
$pass = $_GET['pass'];
$sdt = $_GET['sdt'];
$sql = "UPDATE nguoidung SET ten = '$ten', username = '$username', pass = '$pass', sdt = '$sdt' where manguoidung ='$manguoidung' ";
if ($conn->query($sql) == TRUE) {
    echo '<script type="text/javascript">';
    echo 'alert("Sửa thành công!");';
    echo 'window.location.href = "../qlnguoidung/html/qlnguoidung.php";'; 
    echo '</script>';
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
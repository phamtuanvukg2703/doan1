<?php
require_once('conn.php');
$conn = connectDB();
$makhu = $_GET['makhu'];
$tenkhu = $_GET['tenkhu'];
$sql = "UPDATE khu SET makhu ='$makhu', tenkhu ='$tenkhu' WHERE makhu = '$makhu'";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">';
    echo 'alert("Sửa thành công!");';
    echo 'window.location.href = "../qlkhu/html/qlkhu.php";'; 
    echo '</script>';
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
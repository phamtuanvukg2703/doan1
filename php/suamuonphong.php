<?php
require_once('conn.php');
$conn = connectDB();
$mamuonphong = $_GET['mamuonphong'];
$manguoidung = $_GET['manguoidung'];
$maphong = $_GET['maphong'];
$ngaymuon = $_GET['ngaymuon'];
$ngaytra = $_GET['ngaytra'];

$sql = "UPDATE muonphong SET manguoidung ='$manguoidung',maphong ='$maphong',ngaymuon ='$ngaymuon',ngaytra ='$ngaytra' WHERE mamuonphong = '$mamuonphong'";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">';
    echo 'alert("Sửa thành công!");';
    echo 'window.location.href = "../index.php";'; 
    echo '</script>';
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
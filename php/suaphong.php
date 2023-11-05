<?php
require_once('conn.php');
$conn = connectDB();
$makhu = $_POST['makhu'];
$maphong = $_POST['maphong'];
$tenphong = $_POST['tenphong'];
$hinh = "";
if(isset($_FILES['hinh'])){
  $hinh = $_FILES['hinh']['name'];
  move_uploaded_file($_FILES['hinh']['tmp_name'],"/xampp/htdocs/doan1/png/".$_FILES['hinh']['name']);
}
else
  $hinh = $_POST['hinhtamp'];
$sql = "UPDATE phong SET makhu ='$makhu', tenphong = '$tenphong', hinh = '$hinh' WHERE maphong = '$maphong'";

if ($conn->query($sql) == TRUE) {
    echo '<script type="text/javascript">';
    echo 'alert("Sửa thành công!");';
    echo 'window.location.href = "../qlphong/html/qlphong.php";'; 
    echo '</script>';
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
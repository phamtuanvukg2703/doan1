<?php
    require_once("conn.php");
    $conn = connectDB();
    $makhu = $_GET['id'];
    $sql = "update khu set trangthai ='0'where makhu = '$makhu'";
    $result = $conn->query($sql);
    if ($conn->query($sql) == TRUE) {
            $sqlUpdate = "UPDATE phong set trangthaixoa = 0 where makhu = '$makhu'";
            if ($conn->query($sqlUpdate) === TRUE){
                $query ="UPDATE muonphong set trangthai = 0 where maphong IN (SELECT maphong FROM phong WHERE makhu = '$makhu')";
                if($conn ->query($query) === TRUE) {
                    echo '<script type="text/javascript">';
                    echo 'alert("Xóa thành công!");';
                    echo 'window.location.href = "../qlkhu/html/qlkhu.php";'; // Thay "trang-chu.php" bằng URL trang chủ thực tế của bạn
                    echo '</script>';
                }
            }
        }

    $conn->close();
?>
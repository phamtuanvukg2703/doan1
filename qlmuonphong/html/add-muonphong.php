<?php
require_once('/xampp/htdocs/doan1/php/conn.php');
require_once('/xampp/htdocs/doan1/php/func.php');
$conn = connectDB();
$cbuser = getcomboboxuser($conn);
$cbroom = getcomboboxroom($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mượn phòng mới</title>
    <link rel="stylesheet" href="../css/add-muongphong.css">
</head>
<body>
    <div class = "main">
        <a href="javascript:history.back()">< Quay lại</a>
        <div class = "title"><h2>Thêm mượn phòng mới</h2></div>
        <form action="" method="post">
            <div class ="container">
                <div class ="ip">
                    <div class = "manguoidung">
                    <select name="manguoidung">
                        <?php while($row = mysqli_fetch_array($cbuser)) {
                        ?>
                            <option value="<?php echo $row ['manguoidung'];?>"><?php echo $row['ten']; ?> </option>
                        <?php }
                        ?>
                    </select>
                    </div>
                    <div class = "maphong">
                    <select name="maphong">
                        <?php while($row = mysqli_fetch_array($cbroom)) {
                        ?>
                            <option value="<?php echo $row ['maphong'];?>"><?php echo $row['tenphong']; ?> </option>
                        <?php }
                        ?>
                    </select>
                    </div>
                    <div class = "ngaymuon">
                        <input type="date" name="ngaymuon" id="ngaymuon" placeholder="Nhập ngày mượn" required>
                    </div>
                    <div class = "ngaytra">
                        <input type="date" name="ngaytra" id="ngaytra" placeholder="Nhập ngày trả" required>
                    </div>
                </div>
                <div class ="sub_add">
                    <!--đưa dữ liệu lên SQL-->
                    <button type="submit" name="submit_add">Thêm </button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

<?php  
    if(isset($_POST['submit_add'])){
    // Lấy dữ liệu từ biểu mẫu
    $manguoidung = $_POST['manguoidung'];
    $maphong = $_POST['maphong'];
    $ngaymuon = $_POST['ngaymuon'];
    $ngaytra = $_POST['ngaytra'];
    $check = "SELECT mamuonphong FROM muonphong WHERE maphong='$maphong' AND ngaymuon='$ngaymuon' and trangthai = 1";
    $result = mysqli_query($conn, $check);
        if (mysqli_num_rows($result) > 0) {
            // Đã mượn rồi
            echo '<script type="text/javascript">';
            echo 'alert("Phòng này đã có người mượn");';
            echo 'window.location.href ="/doan1/index.php";'; // Thay "trang-chu.php" bằng URL trang chủ thực tế của bạn
            echo '</script>';
        }else {
    // SQL để chèn dữ liệu vào bảng
            $sql = "INSERT INTO muonphong ( manguoidung, maphong, ngaymuon, ngaytra, trangthai) VALUES ( '$manguoidung','$maphong','$ngaymuon','$ngaytra','1')";
            if ($conn->query($sql) === TRUE){
                $sqlUpdate = "UPDATE phong SET trangthai = 'Đã mượn' WHERE maphong = '$maphong'";
                if ($conn->query($sqlUpdate) === TRUE){
                    echo '<script type="text/javascript">';
                    echo 'alert("Thêm thành công!");';
                    echo 'window.location.href ="/doan1/index.php";'; // Thay "trang-chu.php" bằng URL trang chủ thực tế của bạn
                    echo '</script>';
                }
            }
            else  {
                echo "Lỗi: " . $sql . "<br>" . $conn->error;
            }   
        }
    }
    $conn->close();
?>


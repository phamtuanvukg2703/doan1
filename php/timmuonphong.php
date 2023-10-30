<?php
// Xử lý khi người dùng tìm kiếm
$conn = connectDB();
if(isset($_GET['search'])) {
    $search = $_GET['search'];
    // Truy vấn dữ liệu từ database
    $sql = "SELECT * FROM muonphong WHERE mamuonphong = '$search'";
    $result = $conn->query($sql);
}
?>
    <h2>Tìm kiếm người dùng</h2>
    <form method="GET">
        <input type="text" name="search" id="box-search" placeholder="Nhập mã mượn phòng" required>
        <button type="submit">Tìm kiếm</button>
    </form> 
<?php
    // Hiển thị kết quả tìm kiếm
    if(isset($_GET['search'])) {
        if ($result->num_rows > 0) {
            echo "<h2>Kết quả tìm kiếm:</h2>";
            require_once("hienthimuonphong.php");
        } else {
            echo "<p>Không tìm thấy kết quả.</p>";
        }
    }
?>     
<?php
// Xử lý khi người dùng tìm kiếm
$conn = connectDB();
if(isset($_GET['search'])) {
    $search = $_GET['search'];
    // Truy vấn dữ liệu từ database
    $sql = "SELECT * FROM phong WHERE maphong = '$search'";
    $result = $conn->query($sql);
}
?>
    <h2>Tìm kiếm phòng</h2>
    <form method="GET">
        <input type="text" name="search" id="box-search" placeholder="Nhập mã phòng" required>
        <button type="submit">Tìm kiếm</button>
    </form> 
<?php
    // Hiển thị kết quả tìm kiếm
    if(isset($_GET['search'])) {
        if ($result->num_rows > 0) {
            echo "<h2>Kết quả tìm kiếm:</h2>";
            while($row = $result->fetch_assoc()) {
                // Hiển thị thông tin từ database
                echo "<p>Mã khu: " . $row['makhu'] . "</p>";
                echo "<p>Mã phòng: " . $row['maphong'] . "</p>";
                echo "<p>tên phòng: " . $row['tenphong'] . "</p>";
                echo "<img src='/doan1/png/{$row['hinh']}'>";
            }
        } else {
            echo "<p>Không tìm thấy kết quả.</p>";
        }
    }
?>     
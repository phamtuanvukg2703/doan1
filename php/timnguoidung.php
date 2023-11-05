<?php
// Xử lý khi người dùng tìm kiếm
$conn = connectDB();
if(isset($_GET['search'])) {
    $search = $_GET['search'];
    // Truy vấn dữ liệu từ database
    $sql = "SELECT * FROM nguoidung WHERE manguoidung = '$search'";
    $result = $conn->query($sql);
}
?>
    <h2>Tìm kiếm người dùng</h2>
    <form method="GET">
        <input type="text" name="search" id="box-search" placeholder="Nhập mã người dùng" required>
        <button type="submit">Tìm kiếm</button>
    </form> 
<?php
    // Hiển thị kết quả tìm kiếm
    if(isset($_GET['search'])) {
        if ($result->num_rows > 0) {
            echo "<h2>Kết quả tìm kiếm:</h2>";
            while($row = $result->fetch_assoc()) {
                // Hiển thị thông tin từ database
                echo "<p>Mã người dùng: " . $row['manguoidung'] . "</p>";
                echo "<p>Tên: " . $row['ten'] . "</p>";
                echo "<p>:username: " . $row['username'] . "</p>";
                echo "<p>pass: " . $row['pass'] . "</p>";
                echo "<p>sdt: " . $row['sdt'] . "</p>";
            }
        } else {
            echo "<p>Không tìm thấy kết quả.</p>";
        }
    }
?>     
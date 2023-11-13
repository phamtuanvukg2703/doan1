<?php
// Xử lý khi người dùng tìm kiếm
$conn = connectDB();
if(isset($_GET['search'])) {
    $search = $_GET['search'];

    // Truy vấn dữ liệu từ database
    $sql = "SELECT * FROM khu WHERE makhu LIKE '$search%' and trangthai = '1' or tenkhu like '%$search%'";
    $result = $conn->query($sql);
}
?>
    <h2>Tìm kiếm Khu</h2>
    <form method="GET">
        <input type="text" name="search" id="box-search" placeholder="Nhập mã khu" required>
        <button type="submit">Tìm kiếm</button>
    </form> 
<?php
    // Hiển thị kết quả tìm kiếm
    if(isset($_GET['search'])) {
        if ($result->num_rows > 0) {
            echo "<h2>Kết quả tìm kiếm:</h2>";
            while($row = $result->fetch_assoc()) {
                // Hiển thị thông tin từ database 
            ?>
            <table>
                <tr>
                    <th>Mã khu</th>
                    <th>Tên khu</th>
                </tr>
                <tr>
                    <td><?php echo $row['makhu']; ?></td>
                    <td><?php echo $row['tenkhu']; ?></td>
                    <td>
                    <!-- Button Sửa -->
                    <a href="/doan1/qlkhu/html/up-khu.php?id=<?php echo $row['makhu'] ?>">Sửa</a>
                    </td>
                    <td>
                        <a href="/doan1/php/xoakhu.php?id=<?php echo $row['makhu'] ?>">Xóa</a>
                    </td>
                </tr>
            </table>
            <?php
            }
        } else {
            echo "<p>Không tìm thấy kết quả.</p>";
        }
    }
?>     
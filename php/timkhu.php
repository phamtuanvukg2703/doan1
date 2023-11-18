<?php
// Xử lý khi người dùng tìm kiếm
$conn = connectDB();
if(isset($_GET['search'])) {
    $search = $_GET['search'];
    // Truy vấn dữ liệu từ database
    $sql = "SELECT * FROM khu WHERE makhu = '$search%' and trangthai = '1' or tenkhu like '%$search%' and trangthai='1'";
    $result = $conn->query($sql);
}
?>
    <form method="GET">
        <input type="text" name="search" id="box-search" placeholder="Nhập mã khu" required>
        <button type="submit">Tìm kiếm</button>
    </form> 
<?php
    // Hiển thị kết quả tìm kiếm
    if(isset($_GET['search'])) {
        if ($result->num_rows > 0) {
            echo "<h3>Kết quả tìm kiếm:</h3>";
            ?>
            <table>
                <tr>
                    <th>Mã khu</th>
                    <th>Tên khu</th>
                </tr>
            <?php
            while($row = $result->fetch_assoc()) {
                // Hiển thị thông tin từ database 
            ?>
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
                <?php
                } 
                ?>
            </table>
        <?php
        } else {
            echo "<p>Không tìm thấy kết quả.</p>";
        }
    }
?>     
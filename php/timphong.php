<?php
// Xử lý khi người dùng tìm kiếm
$conn = connectDB();
if(isset($_GET['search'])) {
    $search = $_GET['search'];
    // Truy vấn dữ liệu từ database
    $sql = "SELECT *
    FROM phong p, khu k
    WHERE p.makhu = k.makhu and k.trangthai = '1'
        and p.maphong LIKE '$search%' and p.trangthaixoa = '1'";
    $result = $conn->query($sql);
}
?>
    <form method="GET">
        <input type="text" name="search" id="box-search" placeholder="Nhập mã phòng" required>
        <button type="submit">Tìm kiếm</button>
    </form> 
<?php
    // Hiển thị kết quả tìm kiếm
    if(isset($_GET['search'])) {
        if ($result->num_rows > 0) {
            echo "<h2>Kết quả tìm kiếm:</h2>";
            ?>
            <table>
                <tr>
                    <th>Mã Khu</th>
                    <th>Mã phòng</th>
                    <th>Tên phòng</th>
                    <th>Hình ảnh</th>
                </tr>
            <?php
            while($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['makhu']; ?></td>
                    <td><?php echo $row['maphong']; ?></td>
                    <td><?php echo $row['tenphong']; ?></td>
                    <td><?php echo "<img src='/doan1/png/{$row['hinh']}'>"?></td>
                    <td>
                    <!-- Button Sửa -->
                    <a href="/doan1/qlphong/html/up-phong.php?id=<?php echo $row['maphong']; ?>">Sửa</a>
                    </td>
                    <td>
                        <a href="/doan1/php/xoaphong.php?id=<?php echo $row['maphong'] ?>">Xóa</a>
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
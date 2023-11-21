<?php
// Xử lý khi người dùng tìm kiếm
$conn = connectDB();
if(isset($_GET['search'])) {
    $search = $_GET['search'];
    // Truy vấn dữ liệu từ database
    $sql = "SELECT muonphong.mamuonphong, phong.tenphong, nguoidung.ten, muonphong.ngaymuon, muonphong.ngaytra
    FROM muonphong
    INNER JOIN phong ON muonphong.maphong = phong.maphong
    INNER JOIN nguoidung ON muonphong.manguoidung = nguoidung.manguoidung
    WHERE muonphong.mamuonphong LIKE '$search%' and muonphong.trangthai = '1'
    or phong.maphong LIKE '%$search%' and muonphong.trangthai = '1'
    or nguoidung.ten LIKE '%$search%' and muonphong.trangthai = '1'
    or '$search' BETWEEN muonphong.ngaymuon and muonphong.ngaytra and muonphong.trangthai = '1'";
    $result = $conn->query($sql);
}
?>
    <form method="GET">
        <input type="text" name="search" id="box-search" placeholder="Nhập mã mượn phòng" required>
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
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Tên phòng</th>
                    <th>Ngày mượn</th>
                    <th>Ngày trả</th>
                </tr>
            <?php
            while($row = $result->fetch_assoc()) {
                // Hiển thị thông tin từ database
                ?>
                    <tr>
                        <td><?php echo $row['mamuonphong']; ?></td>
                        <td><?php echo $row['ten']; ?></td>
                        <td><?php echo $row['tenphong']; ?></td>
                        <td><?php echo $row['ngaymuon']; ?></td>
                        <td><?php echo $row['ngaytra']; ?></td>
                        <td>
                        <!-- Button Sửa -->
                        <a href="/doan1/qlmuonphong/html/up-muonphong.php?id=<?php echo $row['mamuonphong']; ?>">Sửa</a>
                        </td>
                        <td>
                            <a href="/doan1/php/xoamuonphong.php?id=<?php echo $row['mamuonphong'] ?>">Xóa</a>
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
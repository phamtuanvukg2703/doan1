<?php
// Xử lý khi người dùng tìm kiếm
$conn = connectDB();
if(isset($_GET['search'])) {
    $search = $_GET['search'];
    // Truy vấn dữ liệu từ database
    $sql = "SELECT * FROM nguoidung WHERE manguoidung LIKE '$search%' and trangthai = '1' or ten LIKE '%$search%' and trangthai = '1' or username LIKE '$search%' and trangthai = '1'";
    $result = $conn->query($sql);
}
?>
    <form method="GET">
        <input type="text" name="search" id="box-search" placeholder="Nhập mã người dùng" required>
        <button type="submit">Tìm kiếm</button>
    </form> 
<?php
    // Hiển thị kết quả tìm kiếm
    if(isset($_GET['search'])) {
        if ($result->num_rows > 0) {
            echo "<h2>Kết quả tìm kiếm:</h2>"
            ?>
            <table>
                    <tr>
                        <th>Mã người dùng</th>
                        <th>Tên</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Số điện thoại</th>
                    </tr>
            <?php
            while($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?php echo $row['manguoidung']; ?></td>
                        <td><?php echo $row['ten']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['pass']; ?></td>
                        <td><?php echo $row['sdt']; ?></td>
                        <td>
                        <!-- Button Sửa -->
                        <a href="/doan1/qlnguoidung/html/up-user.php?id=<?php echo $row['manguoidung']; ?>">Sửa</a>
                        </td>
                        <td>
                            <a href="/doan1/php/xoauser.php?id=<?php echo $row['manguoidung'] ?>">Xóa</a>
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
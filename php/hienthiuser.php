<?php
$conn = connectDB();
$sqlSelectAll = 'SELECT * FROM nguoidung where trangthai = "1"';
$result = mysqli_query($conn,$sqlSelectAll);
$data = [];
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $data[] = array( // sử dụng biến tự tăng để làm dữ liệu cột STT
    'manguoidung' => $row['manguoidung'],
    'ten' => $row['ten'],
    'username' => $row['username'],
    'pass' => $row['pass'],
    'sdt' => $row['sdt'],
    );
}
$conn->close();
?>
<table class="table table-borderd">
    <thead>
        <tr>
            <th>Mã người dùng</th>
            <th>Tên</th>
            <th>Username</th>
            <th>Password</th>
            <th>Số điện thoại</th>
        </tr>
    </thead>
    <tbody>
    
    <?php
    if (count($data)==0) { ?>
        <tr>
            <td colspan="10">không có dữ liệu</td>
        </tr>
    <?php }
    else 
        foreach ($data as $row) {?>
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
        <?php } ?>
    </tbody>
</table>
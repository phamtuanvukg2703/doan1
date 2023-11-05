<?php
$conn = connectDB();
$sqlSelectAll = 'SELECT * FROM khu where trangthai = "1"';
$result = mysqli_query($conn,$sqlSelectAll);
$data = [];
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $data[] = array( // sử dụng biến tự tăng để làm dữ liệu cột STT
    'makhu' => $row['makhu'],
    'tenkhu' => $row['tenkhu'],
    );
}
$conn->close();
?>
<table class="table table-borderd">
    <thead>
        <tr>
            <th>Mã Khu</th>
            <th>Tên Khu</th>
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
        <?php } ?>
    </tbody>
</table>
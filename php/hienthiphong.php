<?php
$conn = connectDB();
$sqlSelectAll = 'SELECT * FROM phong where trangthaixoa = "1"';
$result = mysqli_query($conn,$sqlSelectAll);
$data = [];
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $data[] = array( // sử dụng biến tự tăng để làm dữ liệu cột STT
    'maphong' => $row['maphong'],
    'tenphong' => $row['tenphong'],
    'hinh' => $row['hinh'],
    'makhu' => $row['makhu'],
    );
}
$conn->close();
?>
<table class="table table-borderd">
    <thead>
        <tr>
            <th>Mã Khu</th>
            <th>Mã phòng</th>
            <th>Tên phòng</th>
            <th>Hình ảnh</th>
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
        <?php } ?>
    </tbody>
</table>
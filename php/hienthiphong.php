<?php
$conn = connectDB();
$sqlSelectAll = "SELECT p.maphong, p.tenphong, p.hinh, k.tenkhu, p.trangthai FROM phong p, khu k WHERE p.makhu = k.makhu and p.trangthaixoa = '1' and k.trangthai = '1' ";
$result = mysqli_query($conn,$sqlSelectAll);
$data = [];
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $data[] = array( // sử dụng biến tự tăng để làm dữ liệu cột STT
    'maphong' => $row['maphong'],
    'tenphong' => $row['tenphong'],
    'hinh' => $row['hinh'],
    'tenkhu' => $row['tenkhu'],
    'trangthai' => $row['trangthai'],
    );
}
$conn->close();
?>
<table class="table">
    <thead>
        <tr>
            <th>Tên khu</th>
            <th>Mã phòng</th>
            <th>Tên phòng</th>
            <th>Hình ảnh</th>
            <th>Trạng thái</th>
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
            <td><?php echo $row['tenkhu']; ?></td>
            <td><?php echo $row['maphong']; ?></td>
            <td><?php echo $row['tenphong']; ?></td>
            <td><?php echo "<img src='/doan1/png/{$row['hinh']}'>"?></td>
            <td><?php echo $row['trangthai'] ?></td>
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
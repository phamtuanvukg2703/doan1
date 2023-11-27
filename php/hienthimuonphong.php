<?php
$conn = connectDB();
$sqlSelectAll = 'SELECT * FROM muonphong INNER JOIN phong ON muonphong.maphong = phong.maphong INNER JOIN nguoidung ON muonphong.manguoidung = nguoidung.manguoidung where muonphong.trangthai = "1"';
$result = mysqli_query($conn,$sqlSelectAll);
$data = [];
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $data[] = array( // sử dụng biến tự tăng để làm dữ liệu cột STT
    'mamuonphong' => $row['mamuonphong'],
    'ten' => $row['ten'],
    'tenphong' => $row['tenphong'],
    'ngaymuon' => $row['ngaymuon'],
    'ngaytra' => $row['ngaytra'],
    );
}
$conn->close();
?>
<table class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Tên phòng</th>
            <th>Ngày mượn</th>
            <th>Ngày trả</th>
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
        <?php } ?>
    </tbody>
</table>
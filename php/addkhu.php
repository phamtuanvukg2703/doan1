<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm khu mới</title>
    <link rel="stylesheet" href="../css/form-add-up.css">
    <link rel="stylesheet" href="../../php/addkhu.php">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Roboto:ital,wght@0,100;0,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class = "main">
        <div class = "title"><h2>Thêm Khu mới</h2></div>
        <form action="<?php echo $_SERVER['PHP_SELF'] ; ?> ">
            <div class ="container">
                <div class ="ip">
                    <div class = "ma-khu">
                        <input type="text" name="makhu" id="makhu" placeholder="Nhập mã khu">
                    </div>
                    <div class = "ten-khu">
                        <input type="text" name="makhu" id="tenkhu" placeholder="Nhập tên khu">
                    </div>
                </div>
                <div class ="sub_add">
                    <!--đưa dữ liệu lên SQL-->
                    <button type="submit" id="submit_add">Thêm Khu</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
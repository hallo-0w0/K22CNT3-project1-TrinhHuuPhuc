<?php
include("ketnoi-THP.php");

if(isset($_GET["user_id_thp"])){
    $user_id_thp = $_GET["user_id_thp"];
    
    $sql_thp = "SELECT * FROM `user_thp` WHERE 1=1";
    $result_thp = $conn_thp->query($sql_thp);

    if($result_thp->num_rows > 0){
        $row_thp = $result_thp->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết người dùng</title>
    <link rel="stylesheet" type="text/css" href="danhmuc-THP.css">
</head>
<body>
    <section class="container">
        <h1>Chi tiết người dùng</h1>
        <hr/>
        <p><strong>ID người dùng:</strong> <?php echo $row_thp["USER_ID_THP"];?></p>
        <p><strong>Tên đăng nhập:</strong> <?php echo $row_thp["USER_NAME_THP"];?></p>
        <p><strong>Email:</strong> <?php echo $row_thp["EMAIL_THP"];?></p>
        <p><strong>Họ và tên:</strong> <?php echo $row_thp["FULL_NAME_THP"];?></p>

        <a href="danhmuc-THP.php" class="btn">Quay lại danh sách người dùng</a>
    </section>
</body>
</html>
<?php
    } else {
        echo "<p>Không tìm thấy thông tin cho ID người dùng: $user_id_thp</p>";
    }
} else {
    echo "<p>Không có ID người dùng được cung cấp.</p>";
}
?>

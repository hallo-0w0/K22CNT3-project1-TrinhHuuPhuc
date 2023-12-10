<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa người dùng</title>
    <link rel="stylesheet" type="text/css" href="danhmuc-THP.css">
</head>
<body>
    <?php
        include("ketnoi-THP.php");

        if(isset($_GET["user_id_thp"])){
            $user_id_thp = $_GET["user_id_thp"];

            $sql_detail_user_thp = "SELECT * FROM user_thp WHERE USER_ID_THP='$user_id_thp'";
            $result_detail_user_thp = $conn_thp->query($sql_detail_user_thp);

            if($result_detail_user_thp->num_rows > 0){
                $row_detail_user_thp = $result_detail_user_thp->fetch_assoc();
    ?>
    <section class="container">
        <h1>Xóa người dùng</h1>
        <hr/>
        <p>Bạn có chắc chắn muốn xóa người dùng có Mã: <?php echo $row_detail_user_thp["USER_ID_THP"]; ?>?</p>
        <form action="process-delete-user-THP.php" method="POST">
            <input type="hidden" name="user_id" value="<?php echo $row_detail_user_thp["USER_ID_THP"]; ?>">
            <button type="submit" name="submit_delete_user" class="btn-delete">Xóa người dùng</button>
        </form>
        <a href="danhmuc-THP.php" class="btn">Quay lại danh sách người dùng</a>
    </section>
    <?php
            } else {
                echo "<p>Không tìm thấy thông tin cho ID người dùng: $user_id_thp</p>";
            }
        } else {
            echo "<p>Không có ID người dùng được cung cấp.</p>";
        }
    ?>
</body>
</html>

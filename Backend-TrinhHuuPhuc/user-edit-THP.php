<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin người dùng</title>
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
        <h1>Sửa thông tin người dùng</h1>
        <hr/>
        <form action="process-edit-user-THP.php" method="POST">
            <label for="user_id">Mã người dùng:</label>
            <input type="text" id="user_id" name="user_id" value="<?php echo $row_detail_user_thp["USER_ID_THP"]; ?>" required>
    
            <label for="user_name">Tên đăng nhập:</label>
            <input type="text" id="user_name" name="user_name" value="<?php echo $row_detail_user_thp["USER_NAME_THP"]; ?>" required>
            
            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" value="<?php echo $row_detail_user_thp["PASSWORD_THP"]; ?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $row_detail_user_thp["EMAIL_THP"]; ?>" required>
            
            <label for="full_name">Họ và tên:</label>
            <input type="text" id="full_name" name="full_name" value="<?php echo $row_detail_user_thp["FULL_NAME_THP"]; ?>" required>
        
            <button type="submit" name="submit_edit_user" class="btn">Lưu thay đổi</button>
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

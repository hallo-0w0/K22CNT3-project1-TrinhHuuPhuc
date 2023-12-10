<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QLNV-Trịnh Hữu Phúc_2210900054</title>
    <link rel="stylesheet" type="text/css" href="danhmuc-THP.css">
</head>
<body>
    <?php
        include("ketnoi-THP.php");
        
        if(isset($_POST["submit_add_user"])){
            $user_name = $_POST["user_name"];
            $password = $_POST["password"];
            $email = $_POST["email"];
            $full_name = $_POST["full_name"];

            $sql_add_user = "INSERT INTO user_thp (USER_NAME_THP, PASSWORD_THP, EMAIL_THP, FULL_NAME_THP) 
                             VALUES ('$user_name', '$password', '$email', '$full_name')";

            if($conn_thp->query($sql_add_user)){
                echo "<script>alert('Thêm người dùng thành công');</script>";
            } else {
                echo "<script>alert('Lỗi khi thêm người dùng');</script>";
            }
        }

        $sql_thp = "SELECT * FROM `user_thp` WHERE 1 =1";

        $result_thp = $conn_thp->query($sql_thp);
    ?>

    <header>
        <h1> QlNV Trịnh Hữu Phúc - 2210900054 </h1>
    </header>
    <section>
        <table border="1px" width="80%" align="center">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã </th>
                    <th>Tên</th>
                    <th>Mật khẩu</th>
                    <th>Email</th>
                    <th>Tên đầy đủ</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $stt_thp=0;
                    while($row_thp= $result_thp->fetch_array()){
                        $stt_thp ++;
                ?>
                <tr>
                    <td><?php echo $stt_thp; ?></td>
                    <td><?php echo $row_thp["USER_ID_THP"]; ?></td>
                    <td><?php echo $row_thp["USER_NAME_THP"]; ?></td>
                    <td><?php echo $row_thp["PASSWORD_THP"]; ?></td>
                    <td><?php echo $row_thp["EMAIL_THP"] ;?></td>
                    <td><?php echo $row_thp["FULL_NAME_THP"] ;?></td>
                    <td>
                        <a href="user-detail-THP.php?user_id_thp=<?php echo $row_thp["USER_ID_THP"]; ?>" class="btn detail">Chi tiết</a>
                        <a href="user-edit-THP.php?user_id_thp=<?php echo $row_thp["USER_ID_THP"]; ?>" class="btn edit">Sửa</a>
                        <a href="user-delete-THP.php?user_id_thp=<?php echo $row_thp["USER_ID_THP"]; ?>" 
                           onclick="return confirm('Bạn chắc chắn muốn xóa?')" class="btn delete">Xóa</a>
                    </td>    
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>

        <a href="add-user-THP.php" class="btn">Thêm mới người dùng</a>
        
    </section>
</body>
</html>

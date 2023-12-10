<?php
include("ketnoi-THP.php");

if(isset($_POST["submit_add_user"])){
    $user_id = $_POST["user_id"];
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $full_name = $_POST["full_name"];

    $sql_add_user = "INSERT INTO user_thp (USER_ID_THP, USER_NAME_THP, PASSWORD_THP, EMAIL_THP, FULL_NAME_THP) 
                     VALUES ('$user_id', '$user_name', '$password', '$email', '$full_name')";

    if($conn_thp->query($sql_add_user)){
        echo "<script>alert('Thêm người dùng thành công');</script>";
        header("Location: danhmuc-THP.php"); // Chuyển về trang danh sách người dùng sau khi thêm
    } else {
        echo "<script>alert('Lỗi khi thêm người dùng');</script>";
    }
}
?>

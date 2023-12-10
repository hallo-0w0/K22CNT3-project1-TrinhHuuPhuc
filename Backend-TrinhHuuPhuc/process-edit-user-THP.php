<?php
include("ketnoi-THP.php");

if(isset($_POST["submit_edit_user"])){
    $user_id_thp = $_POST["user_id"];
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $full_name = $_POST["full_name"];

    $sql_edit_user = "UPDATE user_thp 
                      SET USER_NAME_THP='$user_name', PASSWORD_THP='$password', EMAIL_THP='$email', FULL_NAME_THP='$full_name' 
                      WHERE USER_ID_THP='$user_id_thp'";

    if($conn_thp->query($sql_edit_user)){
        echo "<script>alert('Sửa thông tin người dùng thành công');</script>";
        header("Location: danhmuc-THP.php");
    } else {
        echo "<script>alert('Lỗi khi sửa thông tin người dùng');</script>";
    }
}
?>

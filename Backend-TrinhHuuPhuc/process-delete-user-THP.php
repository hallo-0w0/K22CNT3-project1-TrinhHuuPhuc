<?php
include("ketnoi-THP.php");

if(isset($_POST["submit_delete_user"])){
    $user_id_thp = $_POST["user_id"];

    $sql_delete_user = "DELETE FROM user_thp WHERE USER_ID_THP='$user_id_thp'";

    if($conn_thp->query($sql_delete_user)){
        echo "<script>alert('Xóa người dùng thành công');</script>";
        header("Location: danhmuc-THP.php");
    } else {
        echo "<script>alert('Lỗi khi xóa người dùng');</script>";
    }
}
?>

<?php
    $conn_thp= new mysqli("localhost","root","","k22cnt3-project1-trinhhuuphuc");
    if(!$conn_thp){
        echo "<h2> Lỗi: ". mysqli_error($conn_thp). "</h2>";
    }else{
        echo "<h2> Trịnh Hữu Phúc-2210900054 </h2>";
    }
?>
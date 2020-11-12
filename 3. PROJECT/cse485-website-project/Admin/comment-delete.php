<?php
    include 'Config/config.php';
    $sql = "delete from comments where Comment_ID = '".$_GET['del_id']."'";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        header('location:comments-index.php');
    }
?>
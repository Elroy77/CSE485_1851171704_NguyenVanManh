<?php
    include 'Config/config.php';
    $sql = "delete from posts where ID = '".$_GET['del_id']."'";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        header('location:posts-index.php');
    }
?>
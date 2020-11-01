<?php
    include 'Config/config.php';
    $sql = "delete from categoris where ID = '".$_GET['del_id']."'";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        header('location:categoris-posts-index.php');
    }
?>
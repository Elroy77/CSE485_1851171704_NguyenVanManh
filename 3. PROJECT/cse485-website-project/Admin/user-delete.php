<?php
    include 'Config/config.php';
    $sql = "delete from users where ID = '".$_GET['del_id']."'";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        header('location:users-index.php');
    }
?>
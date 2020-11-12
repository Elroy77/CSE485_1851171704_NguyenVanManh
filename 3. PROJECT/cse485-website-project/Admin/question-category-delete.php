<?php
    include 'Config/config.php';
    $sql = "delete from categoris_questions where ID = '".$_GET['del_id']."'";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        header('location:questions-categoris-index.php');
    }
?>
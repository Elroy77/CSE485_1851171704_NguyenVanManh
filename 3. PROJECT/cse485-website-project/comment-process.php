<?php
    include 'Config/config.php';
    $username = $_POST['username'];
    $comment = $_POST['comment'];
    $id = $_POST['id'];
    $sql = "INSERT INTO comments (Content, Question_ID, UserName,Created) VALUES ('$comment', '$id', '$username', NOW())";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if (mysqli_query($conn,$sql))
    {
        header("location:forum-detail.php?id=$id");            
    }
?>
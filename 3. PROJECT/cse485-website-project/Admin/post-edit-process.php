<?php
    include 'Config/config.php';
    $ID = $_POST['ID'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $Contents = $_POST['contents'];
    $image = $_POST['image'];
    $status = $_POST['status'];
    $sql = "UPDATE posts SET Title = '$title', Contents = '$Contents', CategoryID = '$category', Image = '$image', Status = '$status', Updated = Now() where ID ='$ID'";
    if (mysqli_query($conn,$sql))
      {
        header('location:posts-index.php');
      }
?>
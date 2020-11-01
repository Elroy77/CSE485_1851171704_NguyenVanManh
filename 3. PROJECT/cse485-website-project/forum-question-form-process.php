<?php
    include 'Config/config.php';
    $title_question = $_POST['title_question'];
    $Contents = $_POST['Contents'];
    $target = "Upload/images/".basename($_FILES['image']['name']);
    $image = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    $categoryID = $_POST['categoryID'];
    $username = $_POST['username'];
    $sql = "INSERT INTO questions (Title, Contents, Image, CategoryID_question, UserName)
    VALUES ('$title_question', '$Contents', '$image', '$categoryID','$username')";
    if (mysqli_query($conn,$sql))
    {
        header('location:forum-index.php');            
    }
?>
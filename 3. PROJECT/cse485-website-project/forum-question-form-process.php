<?php
    include 'Config/config.php';
    $title_question = $_POST['title_question'];
    $Contents = $_POST['Contents'];
    $categoryID = $_POST['categoryID'];
    $username = $_POST['username'];
    $sql = "INSERT INTO questions (Title, Contents, Image, CategoryID_question, UserName)
    VALUES ('$title_question', '$Contents', '', '$categoryID','$username')";
    if (mysqli_query($conn,$sql))
    {
        header('location:forum-index.php');            
    }
?>
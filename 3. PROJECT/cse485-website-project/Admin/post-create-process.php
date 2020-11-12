<?php
    include 'Config/config.php';
    $title = $_POST['title'];
    $category = $_POST['category'];
    $Contents = $_POST['contents'];
    $status = $_POST['status'];
    $sql = "select * from posts where Title = '$title'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if ($num > 0)
    {
        header("Location: post-create.php");
    }
    // File upload path
    $targetDir = "Assets/images/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif','pdf');
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                // Insert image file name into database
                $sql = "INSERT INTO posts (Title, Contents, CategoryID , Image, Status,  Created)
                VALUES ('$title', '$Contents','$category', '".$fileName."', '$status', NOW())";
                if (mysqli_query($conn,$sql))
                {
                    header('location:posts-index.php');
                }
            }
        }
    }
?>
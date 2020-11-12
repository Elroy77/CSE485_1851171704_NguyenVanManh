<?php
    include 'Config/config.php';
    $username = $_POST['username'];
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $optionsRole = $_POST['optionsRole'];
    $sql = "select * from users where Username = '$username'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if ($num > 0)
    {
        header("Location: user-create.php");
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
                $password_hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (Username, Gmail, Password , Status, Role,  Created_date, Image)
                VALUES('$username', '$gmail','$password_hash', '$status', '$optionsRole', NOW(), '$fileName')";
                if (mysqli_query($conn,$sql))
                {
                    header('location:users-index.php');
                }
            }
        }
    }
?>
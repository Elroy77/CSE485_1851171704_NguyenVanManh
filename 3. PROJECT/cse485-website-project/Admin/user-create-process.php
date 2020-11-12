<?php
    $username = $_POST['username'];
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $optionsRole = $_POST['optionsRole'];
	{
        include 'Config/config.php';
		$sql = "select * from users where Username = '$username'";
		$result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
		if ($num > 0)
		{
			header("Location: user-create.php");
		}
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
		$sql = "INSERT INTO users (Username, Gmail, Password , Status, Role,  Created_date, Image)
        VALUES('$username', '$gmail','$password_hash', '$status', '$optionsRole', NOW(), '$image')";
        if (mysqli_query($conn,$sql))
        {
            header('location:users-index.php');
        }
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
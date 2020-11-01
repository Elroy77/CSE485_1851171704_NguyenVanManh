<?php
    $username = $_POST['username'];
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $optionsRole = $_POST['optionsRole'];
    $target = "Assets/images/".basename($_FILES['image']['name']);
    $image = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
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
?>
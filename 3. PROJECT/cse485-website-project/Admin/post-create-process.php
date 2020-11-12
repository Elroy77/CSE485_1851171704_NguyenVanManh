<?php
    $title = $_POST['title'];
    $category = $_POST['category'];
    $Contents = $_POST['contents'];
    $image = $_POST['image'];
    $status = $_POST['status'];

	{
        include 'Config/config.php';
		$sql = "select * from posts where Title = '$title'";
		$result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
		if ($num > 0)
		{
			header("Location: post-create.php");
		}
		$sql = "INSERT INTO posts (Title, Contents, CategoryID , Image, Status,  Created)
		VALUES('$title', '$Contents','$category', '$image', '$status', NOW())";
        if (mysqli_query($conn,$sql))
        {
            header('location:posts-index.php');
            ?>
            
        <?php
        }
	}
?>
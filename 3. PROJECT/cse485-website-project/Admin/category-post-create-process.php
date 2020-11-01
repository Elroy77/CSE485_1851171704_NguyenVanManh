<?php
    $categoryName = $_POST['CategoryName'];
	{
        include 'Config/config.php';
		$sql = "select * from categoris where CategoryName = '$categoryName'";
		$result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
		if ($num > 0)
		{
			header("Location: category-post-create.php");
		}
		$sql = "INSERT INTO categoris (CategoryName, Created) VALUES ('$categoryName',Now())";
        if (mysqli_query($conn,$sql))
        {
            header('location:categoris-posts-index.php');
            ?>
            
        <?php
        }
	}
?>
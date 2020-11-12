<?php
    $categoryName = $_POST['categoryName'];
	{
        include 'Config/config.php';
		$sql = "select * from categoris_questions where CategoryName = '$categoryName'";
		$result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
		if ($num > 0)
		{
			header("Location: question-category-create.php");
		}
		$sql = "INSERT INTO categoris_questions (CategoryName, Created) VALUES ('$categoryName',Now())";
        if (mysqli_query($conn,$sql))
        {
            header('location:questions-categoris-index.php');
            ?>
            
        <?php
        }
	}
?>
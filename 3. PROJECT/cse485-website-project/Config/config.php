<?php 	
	// connect to database
	$conn = mysqli_connect("localhost", "root", "", "cse485-website-project");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
?>
<?php
    $errors = array(); 
	$username = trim($_POST['username']);
	if (empty($username)) {
		$errors[] = 'Please enter your user name.';
	}

	$email = trim($_POST['email']);
	if (empty($email)) {
		$errors[] = 'Please enter your email.';
	}

	$password = trim($_POST['password']);
	if (empty($password)) {
		$errors[] = 'Please enter your password.';
	}

	$comfirmPassword = trim($_POST['comfirmPassword']);
	if (!empty($password)) {
		if ($password !== $comfirmPassword) { 
			$errors[] = 'Your two password did not match.';
		} 
	} else {
		$errors[] = 'You forgot to enter your password.';
	}
	if (empty($errors))
	{
		include 'Config/config.php';
		$sql = "select * from users where Username = '$username'";
		$result = mysqli_query($conn,$sql);
		$num = mysqli_num_rows($result);
		if ($num > 0)
		{
			header("Location: register.php");
		}
		$password_hash = password_hash($password, PASSWORD_DEFAULT);
		$activation_code = substr(md5(uniqid(rand(), true)), 16, 16);
		$sql = "INSERT INTO users (Username, Gmail, Password, Verification_Code , Created_date)
		VALUES('$username', '$email','$password_hash', '$activation_code', NOW())";
		if (mysqli_query($conn,$sql))
		{
			include 'Config/contact.php';
			$m = new sendMail();
            $from='Errorused1.2612@gmail.com';
            $tieudethu = '[Error.vn] Please verify your email address';
            $noidungthu = 'we just need to verify your email address: Errorused1.2612@gmail.com';
            $noidungthu = '<a href="http://localhost/cse485-website-project/admin/config/active.php?code='.$activation_code.'">Click Here</a>';
            $p = 'iammanh2612';
            $error = '';
            $m -> sendMailFromLocalhost($email, $from, $tennguoigui="Error.vn", $tieudethu, $noidungthu, $from, $p, $error);
            header("Location: login.php");
            exit();
        }else{
            header("Location: register.php");
            exit();
        }
	}
?>
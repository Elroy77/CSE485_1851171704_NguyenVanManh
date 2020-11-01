<?php
    $errors = array(); 
	$usernamesignup = trim($_POST['usernamesignup']);
	if (empty($usernamesignup)) {
		$errors[] = 'Please enter your user name.';
	}

	$emailsignup = trim($_POST['emailsignup']);
	if (empty($emailsignup)) {
		$errors[] = 'Please enter your email.';
	}

	$passwordsignup = trim($_POST['passwordsignup']);
	if (empty($passwordsignup)) {
		$errors[] = 'Please enter your password.';
	}

	$password = trim($_POST['passwordsignup']);
	$password_comfirm = trim($_POST['passwordsignup_confirm']);
	if (!empty($password)) {
		if ($password !== $password_comfirm) { 
			$errors[] = 'Your two password did not match.';
		} 
	} else {
		$errors[] = 'You forgot to enter your password.';
	}
	if (empty($errors))
	{
		include 'Config/config.php';
		$sql = "select * from users where Username = '$usernamesignup'";
		$result = mysqli_query($conn,$sql);
		$num = mysqli_num_rows($result);
		if ($num > 0)
		{
			header("Location: login-register.php#toregister");
		}
		$password_hash = password_hash($password, PASSWORD_DEFAULT);
		$activation_code = substr(md5(uniqid(rand(), true)), 16, 16);
		$sql = "INSERT INTO users (Username, Gmail, Password, Verification_Code , Created_date)
		VALUES('$usernamesignup', '$emailsignup','$password_hash', '$activation_code', NOW())";
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
            $m -> sendMailFromLocalhost($emailsignup, $from, $tennguoigui="Error.vn", $tieudethu, $noidungthu, $from, $p, $error);
            header("Location: login-register.php");
            exit();
        }else{
            header("Location: login-register.php#toregister");
            exit();
        }
	}
?>
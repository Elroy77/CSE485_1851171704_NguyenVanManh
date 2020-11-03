<?php
    session_start();
    include 'Config/config.php';
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM users WHERE Username = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
    if ($row > 0)
    {
        $_SESSION['username'] = $username;
        header('location:index.php');
        if ($username == 'admin' || $username == 'Nguyễn Văn Mạnh' || $username == 'Nguyễn Quốc Tỉnh')
        {
            header('location: admin/index.php');
        }
        
    }
?>
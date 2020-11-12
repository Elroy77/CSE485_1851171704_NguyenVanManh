<?php
    if(isset($_GET['code'])){
        $code = $_GET['code'];
    }
    include 'config.php';
    $sql = "SELECT * FROM users WHERE Verification_Code = '$code'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $sql = "UPDATE users SET status = '1' WHERE Verification_Code = '$code'";
        if(mysqli_query($conn,$sql)){
            exit();
        }
    }
?>
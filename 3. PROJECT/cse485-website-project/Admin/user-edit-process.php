<?php
    include 'Config/config.php';
    $ID = $_POST['ID'];
    $username = $_POST['username'];
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $optionsRole = $_POST['optionsRole'];
    $updated = $_POST['Updated'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $target = "Assets/images/".basename($_FILES['image']['name']);
    $image = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    if (empty($password) || $password == $password_hash)
    {
    $sql = "UPDATE users SET Username = '$username',Gmail = '$gmail', Status = '$status', Role = '$optionsRole',Image = '$image', Updated = Now() where ID ='$ID' ";
    }
    else
    {
    $sql = "UPDATE users SET Username = '$username',Gmail = '$gmail', Password ='$password_hash', Status = '$status', Role = '$optionsRole',Image = '$image', Updated = Now() where ID ='$ID' ";
    }
    if (mysqli_query($conn,$sql))
      {
        header('location:users-index.php');
      }
?>
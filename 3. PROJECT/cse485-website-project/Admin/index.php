<!DOCTYPE html>
<html>

<?php include '../Layouts/css-link.php'; ?>
<?php
include 'Config/config.php';
$sql = "select * from users";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if (!isset($_SESSION['username']) && $row['Role'] == 'admin') {
    header('location:../Login.php');
}
?>

<body style="background-image: url(Assets/images/bgLogin.jpg)">
    <?php include '../Layouts/header-admin.php'; ?>
    <div class="container" >
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-center" style="margin-top:100px; color:white"></h1>
            </div>
        </div>
        <div class="row">
        </div>
    </div>

</body>

</html>
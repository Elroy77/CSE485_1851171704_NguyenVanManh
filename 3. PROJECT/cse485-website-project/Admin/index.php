<!DOCTYPE html>
<html>

<?php include '../Layouts/css-link.php'; ?>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:../Login.php');
}
?>

<body>
    <?php include '../Layouts/header-admin.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-center">Trang chủ</h1>
            </div>
        </div>
        <div class="row">
            Hello World
        </div>
    </div>

</body>

</html>
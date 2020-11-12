<!DOCTYPE html>
<html>

<?php include '../Layouts/css-link.php'; ?>
<?php
include 'Config/config.php';
if (!isset($_SESSION['username'])) {
    header('location:../Login.php');
}
?>

<body>
    <?php include '../Layouts/header-admin.php'; ?>

    <section class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mt-2">
                <h1 class="page-header text-center" style="margin-top:20px;">Quản lý bình luận</h1>
            </div>
        </div>
        <div class="row">
            <form action="comments-index-process.php" method="GET">
                <div class="row">
                    <div class="col-md-12 mb-2">
                    </div>
                </div>
            </form>
        </div>
        <h3>
        </h3>

        <div>
            <table class="table table-bordered table-hover" id="dataTables-example" aria-describedby="dataTables-example_info">
                <thead>
                    <tr>
                        <th>UserName</th>
                        <th>Content</th>
                        <th>Question</th>
                        <th>Created</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'comments-index-process.php';
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>
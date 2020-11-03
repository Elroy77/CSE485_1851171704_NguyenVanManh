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
            <div class="col-lg-12">
                <center>
                <h1 class="page-header" style="margin-top:20px;">Quản lý người dùng</h1>
                </center>
            </div>
        </div>
        <div class="row">
            <form action="users-index.php" method="GET">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <div class="input-group">
                            <input type="text" class="form-control" value="<?php if (isset($_GET['searchString']) && !empty($_GET['searchString'])) {
                                                                                echo $_GET['searchString'];
                                                                            } ?>" placeholder="Tên người dùng" name="searchString">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <h3>
            <a href="user-create.php" class="fa fa-user btn btn-primary"> Thêm mới người dùng</a>
        </h3>

        <div>
            <table class="table table-bordered table-hover" id="dataTables-example" aria-describedby="dataTables-example_info">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User name</th>
                        <th>Gmail</th>
                        <th>Password</th>
                        <th>Status</th>
                        <th>Role</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'users-index-process.php';
                    ?>
                </tbody>
            </table>
        </div>
    </section>

</body>

</html>
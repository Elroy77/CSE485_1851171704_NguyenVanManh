<!DOCTYPE html>
<html>

<?php include '../Layouts/css-link.php'; ?>
<?php
include 'Config/config.php';
if (!isset($_SESSION['username']) && $_SESSION['username'] == 'admin') {
    header('location:../Login.php');
}
?>

<body>
    <?php include '../Layouts/header-admin.php'; ?>

    <section class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-center" style="margin-top:20px;">Quản lý thể loại bài viết</h1>
            </div>
        </div>
        <div class="row">
            <form action="questions-categoris-index.php" method="GET">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <div class="input-group">
                            <input type="text" class="form-control" value="<?php if (isset($_GET['searchString']) && !empty($_GET['searchString'])) {
                                                                                echo $_GET['searchString'];
                                                                            } ?>" placeholder="Tên thể loại" name="searchString">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <h3>
            <a href="questions-categoris-create.php" class="fa fa-user btn btn-primary"> Thêm mới thể loại</a>
        </h3>

        <div>
            <table class="table table-bordered table-hover" id="dataTables-example" aria-describedby="dataTables-example_info">
                <thead>
                    <tr role="row">
                        <th class="text-center">ID</th>
                        <th class="text-center">Category name</th>
                        <th class="text-center">Created</th>
                        <th class="text-center">Updated</th>
                        <th class="text-center">Edit</th>
                        <th class="text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'questions-categoris-index-process.php';
                    ?>
                </tbody>
            </table>
        </div>
    </section>

</body>

</html>
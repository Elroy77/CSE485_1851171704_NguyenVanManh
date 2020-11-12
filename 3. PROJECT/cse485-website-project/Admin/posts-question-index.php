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
                <h1 class="page-header text-center" style="margin-top:20px;">Quản lý bài viết</h1>
            </div>
        </div>
        <div class="row">
            <form action="posts-question-index.php" method="GET">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <div class="input-group">
                            <input type="text" class="form-control" value="<?php if (isset($_GET['searchString']) && !empty($_GET['searchString'])) {
                                                                                echo $_GET['searchString'];
                                                                            } ?>" placeholder="Tên bài viết" name="searchString">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
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
                        <th>ID</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>User name</th>
                        <th>Contents</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Views</th>
                        <th>Created</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'posts-question-index-process.php';
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>
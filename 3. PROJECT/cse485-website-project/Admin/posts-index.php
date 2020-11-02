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
                <h1 class="page-header text-center">Quản lý bài viết</h1>
            </div>
        </div>
        <div class="row">
            <form action="posts-index.php" method="GET">
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
            <a href="post-create.php" class="fa fa-user btn btn-primary"> Thêm mới bài viết</a>
        </h3>

        <div>
            <table class="table table-bordered table-hover" id="dataTables-example" aria-describedby="dataTables-example_info">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Contents</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Views</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Link</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'posts-index-process.php';
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>
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


    <section class="container">
        <div class="row">
            <div class="col-lg-12 mt-2">
                <h1 class="page-header text-center">Thêm mới thể loại</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form role="form" method="post" action="category-post-create-process.php">
                    <div class="form-group">
                        <label>Category Name</label>
                        <input class="form-control" placeholder="Ex: category..." name="categoryName">
                    </div>
                    <button type="submit" class="btn btn-success" name="submit">Thêm mới</button>
                    <button type="reset" class="btn btn-danger" name="reset">Nhập lại</button>
                    <a href="categoris-posts-index.php" class="btn btn-secondary" name="reset">Quay lại</a>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
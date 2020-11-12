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
                <h1 class="page-header text-center">Cập nhật thông tin thể loại</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form role="form" method="post" action="question-category-edit-process.php">
                    <?php
                    $sql = "select * from categoris_questions where ID = " . $_GET['ID'];
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    ?>
                    <input type="hidden" name="ID" id="ID" value="<?php echo $row['ID'] ?>">
                    <div class="form-group">
                        <label>Category name</label>
                        <input class="form-control" name="categoryName" value="<?php echo $row['CategoryName'] ?>">
                    </div>
                    <input type="hidden" name="updated" id="updated" value="<?php echo $row['Updated'] ?>">
                    <button type="submit" class="btn btn-success" name="submit">Cập nhật</button>
                    <button type="reset" class="btn btn-danger" name="reset">Nhập lại</button>
                    <a href="categoris-posts-index.php" class="btn btn-secondary" name="reset">Quay lại</a>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
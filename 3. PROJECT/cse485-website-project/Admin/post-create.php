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
                <h1 class="page-header text-center">Thêm mới bài viết</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-2">
                <form role="form" method="post" action="post-create-process.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" placeholder="Ex: title..." name="title">
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select name="category" id="category" class="form-control">
                            <option value="0">-- Lựa chọn --</option>
                            <?php
                                $sql = "SELECT * FROM categoris";
                                mysqli_set_charset($conn, "UTF8");
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($result)) { ?>
                            <option value="<?php echo $row['ID'] ?>"> <?php echo $row['CategoryName'] ?> </option>
                            <?php }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Contents</label>
                        <textarea class="form-control" name="contents" rows="10" cols="30" placeholder="Ex: Contents..."></textarea>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="file">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1">Kích hoạt</option>
                            <option value="0">Ẩn</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success" name="submit">Thêm mới</button>
                    <button type="reset" class="btn btn-danger" name="reset">Nhập lại</button>
                    <a href="posts-index.php" class="btn btn-secondary" name="reset">Quay lại</a>
                </form>
            </div>
        </div>
    </section>

</body>

</html>
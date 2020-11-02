<!DOCTYPE html>
<html>

<?php include '../Layouts/css-link.php'; ?>
<?php
    include 'Config/config.php';
    if(!isset($_SESSION['username']))
    {
        header('location:../Login.php');
    }
?>
<body>
<?php include '../Layouts/header-admin.php'; ?>

    <section class="container">
        <div class="row">
            <div class="col-lg-12 mt-2">
                <h1 class="page-header text-center">Cập nhật thông tin bài viết</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-2">
                <form role="form" method="post" action="post-edit-process.php">
                    <?php
                    $sql = "select * from posts where ID = " . $_GET['id'];
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    ?>
                    <input type="hidden" name="ID" id="ID" value="<?php echo $row['ID'] ?>">
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" placeholder="Ex: title..." name="title" value="<?php echo $row['Title'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select name="category" id="category" class="form-control">
                            <option value="1">1</option>
                            <option value="Category 1">Category 1</option>
                            <option value="Category 2">Category 2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Contents</label>
                        <textarea class="form-control" name="contents" rows="10" cols="30" placeholder="Ex: Contents..."><?php echo $row['Contents'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" <?php if ($row["Status"] == '1') {
                                                    echo "selected";
                                                } ?>>Kích hoạt</option>
                            <option value="0" <?php if ($row["Status"] == '0') {
                                                    echo "selected";
                                                } ?>>Ẩn</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success" name="submit">Cập nhật</button>
                    <button type="reset" class="btn btn-danger" name="reset">Nhập lại</button>
                    <a href="posts-index.php" class="btn btn-secondary" name="reset">Quay lại</a>
                </form>
            </div>
        </div>
    </section>  
</body>

</html>

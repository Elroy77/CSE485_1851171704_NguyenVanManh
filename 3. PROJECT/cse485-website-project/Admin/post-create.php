<!DOCTYPE html>
<html>

<?php include 'Layouts/css-link.php'; ?>
<?php
    include 'Config/config.php';
    if(!isset($_SESSION['username']))
    {
        header('location:../Login.php');
    }
?>
<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <?php include 'Layouts/header.php'; ?>
            <!-- /.navbar-top-links -->

            <?php include 'Layouts/menu.php'; ?>         
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thêm mới bài viết</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <form role="form" method="post" action="post-create-process.php">
                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" placeholder="Ex: title..." name="title">
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
                            <textarea class="form-control" name="contents" rows="10" cols="30" placeholder="Ex: Contents..."></textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1">kích hoạt</option>
                                <option value="0">chưa kích hoạt</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success" name="submit">Thêm mới</button>
                        <button type="reset" class="btn btn-danger" name= "reset">Nhập lại</button>
                        <a href="posts-index.php" class="btn btn-default" name= "reset">Quay lại</a>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include 'Layouts/js-link.php'; ?>         
</body>

</html>

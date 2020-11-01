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
                    <h1 class="page-header">Thêm mới thể loại</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <form role="form" method="post" action="category-post-create-process.php">
                        <div class="form-group">
                            <label>Category Name</label>
                            <input class="form-control" placeholder="Ex: category..." name="categoryName">
                        </div>
                        <button type="submit" class="btn btn-success" name="submit">Thêm mới</button>
                        <button type="reset" class="btn btn-danger" name= "reset">Nhập lại</button>
                        <a href="categoris-posts-index.php" class="btn btn-default" name= "reset">Quay lại</a>
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

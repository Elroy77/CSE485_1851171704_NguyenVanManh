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
                    <h1 class="page-header">Cập nhật thông tin thể loại</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <form role="form" method="post" action="category-post-edit-process.php">
                        <?php
                            $sql = "select * from categoris where ID = ".$_GET['id'];
                            $result = mysqli_query($conn,$sql);
                            $row = mysqli_fetch_array($result);
                        ?> 
                        <input type="hidden" name="ID" id="ID" value="<?php echo $row['ID'] ?>">
                        <div class="form-group">
                            <label>Category name</label>
                            <input class="form-control" name="categoryName" value="<?php echo $row['CategoryName'] ?>">
                        </div>
                        <input type="hidden" name="updated" id="updated" value="<?php echo $row['Updated'] ?>">
                        <button type="submit" class="btn btn-success" name="submit">Cập nhật</button>
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

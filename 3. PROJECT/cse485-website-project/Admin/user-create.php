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
                    <h1 class="page-header">Thêm mới người dùng</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <form role="form" method="post" action="user-create-process.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>User name</label>
                            <input class="form-control" placeholder="Ex: User1" name="username">
                        </div>
                        <div class="form-group">
                            <label>Gmail</label>
                            <input class="form-control" placeholder="Ex: a@gmail.com" name="gmail">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" placeholder="Ex: userpassword123" name="password">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1">kích hoạt</option>
                                <option value="0">chưa kích hoạt</option>
                            </select>
                            <!-- <input class="form-control" placeholder="" name="status"> -->
                        </div>
                        <div class="form-group">
                            <label>Role</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRole" id="optionsRole" value="admin" checked>admin
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRole" id="optionsRole" value="user">user
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image">
                        </div>
                        <button type="submit" class="btn btn-success" name="submit">Thêm mới</button>
                        <button type="reset" class="btn btn-danger" name= "reset">Nhập lại</button>
                        <a href="users-index.php" class="btn btn-default" name= "reset">Quay lại</a>
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

<!DOCTYPE html>
<html>

<?php include 'Layouts/css-link.php'; ?>
<?php
    include 'Config/config.php';
    if(!isset($_SESSION['username']))
    {
        header('location:..Login.php');
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
                    <h1 class="page-header">Cập nhật thông tin người dùng</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <form role="form" method="post" action="user-edit-process.php">
                        <?php
                            $sql = "select * from users where ID = ".$_GET['id'];
                            $result = mysqli_query($conn,$sql);
                            $row = mysqli_fetch_array($result);
                        ?> 
                        <input type="hidden" name="ID" id="ID" value="<?php echo $row['ID'] ?>"> 
                        <div class="form-group">
                            <label>User name</label>
                            <input class="form-control" name="username" value="<?php echo $row['Username'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Gmail</label>
                            <input class="form-control" value="<?php echo $row['Gmail'] ?>" name="gmail">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" value="<?php echo $row['Password'] ?>" name="password">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1"  <?php if($row["Status"] == '1') { echo "selected";} ?> >kích hoạt</option>
                                <option value="0" <?php if($row["Status"] == '0') { echo "selected";} ?> >chưa kích hoạt</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Role</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRole" id="optionsRole" value="admin" <?php if($row["Role"] == 'admin') { echo "checked";} ?> >admin
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRole" id="optionsRole" value="user"<?php if($row['Role'] == "user") { echo "checked";} ?> >user
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" value="<?php echo $row['Image'] ?>">
                        </div>
                        <input type="hidden" name="updated" id="updated" value="<?php echo $row['Updated'] ?>">
                        <button type="submit" class="btn btn-success" name="submit">Cập nhật</button>
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

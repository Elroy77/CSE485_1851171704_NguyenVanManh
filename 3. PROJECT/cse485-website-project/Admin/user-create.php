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
                <h1 class="page-header text-center">Thêm mới người dùng</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-2">
                <form role="form" method="post" action="user-create-process.php">
                    <div class="form-group">
                        <label>User name</label>
                        <input class="form-control" type="text" placeholder="Ex: User1" name="username">
                    </div>
                    <div class="form-group">
                        <label>Gmail</label>
                        <input class="form-control" type="email" placeholder="Ex: a@gmail.com" name="gmail">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" placeholder="Ex: userpassword123" name="password">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1">Kích hoạt</option>
                            <option value="0">Ẩn</option>
                        </select>
                        <!-- <input class="form-control" placeholder="" name="status"> -->
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRole" id="optionsRole" value="admin" checked> admin
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRole" id="optionsRole" value="user"> user
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file">
                    </div>
                    <button type="submit" class="btn btn-success" name="submit">Thêm mới</button>
                    <button type="reset" class="btn btn-danger" name="reset">Nhập lại</button>
                    <a href="users-index.php" class="btn btn-secondary" name="reset">Quay lại</a>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </section>

</body>

</html>
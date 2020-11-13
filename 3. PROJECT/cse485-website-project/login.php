<!DOCTYPE html>
<html lang="en">

<?php include 'Layouts/css-link.php';
?>
<body>
    <section class="login_area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form action="login-process.php" id="login" method="POST">
                        <div class="cardify login">
                            <div class="login--header">
                                <h3>Đăng nhập</h3>
                            </div>
                            <div class="login--form">
                                <div class="form-group">
                                    <label>Tài khoản</label>
                                    <input type="text" name="username" class="text_field" placeholder="Nhập tài khoản">
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input type="password" name="password" class="text_field" placeholder="Nhập mật khẩu">
                                </div>
                                </div>
                                <div style="display: flex; justify-content: center;">
                                    <button class="btn btn--md btn-primary" type="submit">Đăng nhập</button>
                                </div>

                                <div class="login_assist">
                                    <p class="signup" style="margin-left:20px;"> Chưa có tài khoản ?
                                    <a href="register.php">Đăng ký</a></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include 'layouts/footer.php'; ?>
</body>

</html>
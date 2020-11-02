<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php include 'Layouts/css-link.php'; ?>

<body>
    <section class="login_area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form action="#" id="register">
                        <div class="cardify login">
                            <div class="login--header">
                                <h3>Tạo tài khoản</h3>
                            </div>

                            <div class="login--form">
                                <div class="form-group">
                                    <label>Họ tên</label>
                                    <input type="text" name="name" class="text_field" placeholder="Nhập họ và tên">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" id="email" class="text_field" placeholder="Nhập Email">
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input type="password" name="password" class="text_field" placeholder="Nhập mật khẩu">
                                </div>
                                <div class="form-group">
                                    <label>Xác định lại mật khẩu</label>
                                    <input type="password" name="comfirmPassword" class="text_field" placeholder="Nhập lại mật khẩu">
                                </div>
                                <div style="display: flex; justify-content: center;">
                                    <button class="btn btn--md register_btn btn-primary" type="submit">Đăng kí</button>
                                </div>
                                <div class="login_assist">
                                    <p>Bạn đã có tài khoản ?
                                        <a href="login.php">Đăng nhập</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
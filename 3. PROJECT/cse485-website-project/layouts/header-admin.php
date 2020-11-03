
<nav class="menu-area">
    <div class="top-menu-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-fullwidth">
                        <div class="logo-wrapper">
                            <div class="logo logo-top">
                                <a href="index.php"><img src="../Assets/images/log.png" style="height:50px;width:100px;" alt="logo image" class="img-fluid"></a>
                            </div>
                        </div>

                        <div class="menu-container">
                            <div class="d_menu">
                                <nav class="navbar navbar-expand-lg mainmenu__menu">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon icon-menu"></span>
                                    </button>
                                    <div class="nav">
                                        <ul class="navbar-nav">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="../index.php">Trang chủ</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="users-index.php">Quản lý người dùng</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="categoris-posts-index.php">Quản lý thể loại</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="posts-index.php">Quản lý bài viết</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="users-index.php">Quản lý diễn đàn</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>

                        <div class="login-menu">
                            <?php if (isset($_SESSION['username']) && ($_SESSION['username'] == 'Nguyễn Văn Mạnh') || ($_SESSION['username'] == 'admin')) { ?>
                                <img style="width: 50px; height: 50px; border-radius: 50%;" src="../Admin/Assets/images/nvm.error.jpg">&nbsp;
                                <a href=""><?php echo '<strong>' . $_SESSION['username'] . '</strong>'; ?></a>
                                <a href="">|</a>
                                <a style="font-size:16px;" href="../logout.php"> Đăng xuất</a>
                            <?php } ?>
                            <?php if (isset($_SESSION['username']) && $_SESSION['username'] == 'Nguyễn Quốc Tỉnh') { ?>
                                <img style="width: 50px; height: 50px; border-radius: 50%;" src="../Admin/Assets/images/tinh.lol.jpg">&nbsp;
                                <a href=""><?php echo '<strong>' . $_SESSION['username'] . '</strong>'; ?></a>
                                <a href="">|</a>
                                <a style="font-size:16px;" href="../logout.php"> Đăng xuất</a>
                            <?php } ?>
                            <?php if (!isset($_SESSION['username'])) { ?>
                                <a style="font-size:16px;" href="login.php"> Đăng nhập</a>
                                <a href="">|</a>
                                <a style="font-size:16px;" href="register.php"> Đăng kí</a>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
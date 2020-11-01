<!DOCTYPE html>
<html lang="en">
<?php include 'layouts/css-link-forum.php'; ?>
<body>
<?php include 'layouts/header.php'; ?>

<?php include 'layouts/title-forum.php'; ?>
    <section class="support_threads_area section--padding2">

        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="question-form">
                    <center><h1>Tạo câu hỏi</h1></center>  
                        <form action="forum-question-form-process.php" method="POST">
                            <input type="hidden" name="username" value= "<?php echo $_SESSION['username'] ?>"> 
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input type="text" placeholder="Nhập tiêu đề" required name="title_question"> 
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea class="form-control" name="Contents" id="Contents" rows="3"></textarea>

                            </div>
                            <div class="form-group">
                                <label>Thể loại</label>
                                <div class="select-wrap select-wrap2">
                                    <select name="categoryID" id="categoryID">
                                        <option value="0">-- Lựa chọn --</option>
                                        <?php 
                                            include 'Config/config.php';
                                            $sql = "SELECT * FROM categoris_questions";
                                            mysqli_set_charset($conn,"UTF8");
                                            $result = mysqli_query($conn,$sql);
                                            while($row = mysqli_fetch_array($result))
                                            {?>
                                                <option value="<?php echo $row['ID'] ?>"> <?php echo $row['CategoryName'] ?> </option>
                                            <?php }
                                        ?>
                                    </select>
                                    <span class="icon-arrow-down"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="attachments">
                                    <label>Tệp đính kèm</label>
                                    <label>
                                        <span class="icon-paper-clip"></span> Thêm ảnh
                                        <input type="file" style="display:none;" name="image">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn--md btn-primary">Đăng câu hỏi</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-3">
                    <aside class="sidebar support--sidebar">
                        <a href="https://www.facebook.com/daihocthuyloi1959" class="login_promot">Hỗ trợ từ fanpage</a>

                        <?php include 'layouts/menu-right.php'; ?>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <?php include 'layouts/go-top.php'; ?>

    <?php include 'layouts/footer.php'; ?>
</body>
</html>
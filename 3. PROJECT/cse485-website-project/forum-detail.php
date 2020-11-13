<!DOCTYPE html>
<html lang="en">
<?php include 'Layouts/css-link.php'; ?>

<body>
    <?php include 'Layouts/header.php'; ?>

    <?php include 'Layouts/title-forum.php'; ?>
    <section class="support_details_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="forum-container">
                        <div class="forum-single-question">
                        <?php
                            include 'Config/config.php';
                            $sql = "SELECT * FROM questions WHERE ID = ".$_GET['id'];
                            $result = mysqli_query($conn,$sql);
                            $row = mysqli_fetch_array($result);
                            $sqlview = "UPDATE questions SET Views = Views+1 WHERE ID = ".$_GET['id'];
                            $resultview = mysqli_query($conn,$sqlview);
                        ?> 
                        <h1 style="font-size:30px;"><?php echo $row['Title'] ?></h1>
                            <div class="forum-question-item">
                                <div class="forum-question-meta">
                                    <span>
                                    <?php

                                        ?>
                                        <a href="#">
                                            <img alt="" src="Admin/Assets/images/user.jpg" class="avatar avatar-48 photo"
                                                height="48" width="48"><?php echo $row['UserName'] ?><br></a> Câu hỏi từ <?php echo $row['Created'] ?></span>
                                    <span class="forum-question-actions"></span>
                                </div>
                                <div class="forum-question-content">
                                    <p><?php echo $row['Contents'] ?>
                                    </p>
                                </div>
                                <img src="Upload/images/<?php echo $row['Image'] ?>" alt="">
                            </div>

                            <div class="forum-answers">

                            </div>
                            <?php if(isset($_SESSION['username'])) { ?>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Viết bình luận ...</h4>
                                </div>
                                <form class="card-body" action="comment-process.php" method="POST">
                                <input type="hidden" name="username" value= "<?php echo $_SESSION['username'] ?>"> 
                                <input type="hidden" name="id" value= "<?php echo $_GET['id']; ?>"> 
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3" placeholder="bình luận" name="comment"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Gửi</button>
                                </form>
                            </div>
                            <?php } ?>
                            <?php include 'comment-index-process.php'; ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <aside class="sidebar support--sidebar">
                        <a href="http://fb.com/NVM.Error" class="login_promot">Nhóm facebook</a>

                        <?php include 'Layouts/menu-right.php'; ?>

                    </aside>
                </div>
            </div>
        </div>
    </section>

    <?php include 'Layouts/go-top.php'; ?>

    <?php include 'Layouts/footer.php'; ?>


</body>

</html>
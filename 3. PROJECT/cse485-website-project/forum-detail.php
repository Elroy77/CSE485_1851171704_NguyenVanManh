<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="IDStack Forum Tutorial">
    <meta name="keywords" content="idstack, online, course">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-32x32.png">
    <title>Website</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"
        type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="Assets/js/main.js"></script>
</head>

<body>
    <?php include 'layouts/header.php'; ?>

    <?php include 'layouts/title-forum.php'; ?>
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
                                        <a href="#">
                                            <img alt="" src="Admin/Assets/images/nguyen-van-manh.jpg" class="avatar avatar-48 photo"
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

                        <?php include 'layouts/menu-right.php'; ?>

                    </aside>
                    <!-- end .sidebar -->
                </div>
                <!-- end .col-lg-3 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>

    <?php include 'layouts/go-top.php'; ?>

    <?php include 'layouts/footer.php'; ?>

    <!-- inject:js -->
    <script src="js/plugins.min.js"></script>
    <script src="js/script.min.js"></script>
    <!-- endinject -->
</body>

</html>
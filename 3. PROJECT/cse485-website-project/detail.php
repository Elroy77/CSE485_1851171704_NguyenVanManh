<!DOCTYPE html>
<html lang="en">
<?php include 'Layouts/css-link.php'; ?>

<body>
    <?php include './Layouts/header.php'; ?>
    <div class="container">
        <?php
        include 'Config/config.php';
        $sql = "select * from posts where ID = " . $_GET['id'];
        mysqli_set_charset($conn, "UTF8");
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result); ?>
        <div class="row">
            <div class="col-lg-8">
                <h1 ><?php echo $row['Title']; ?></h1>
                <img class="img-responsive" src="Admin/Assets/images/<?php echo $row['Image'] ?>" style="height: 250px; width: 100%;" alt="">
                <hr>

                <p class="lead"><?php echo $row['Contents']; ?></p>
                <hr>
                <h5>Link : <a href="<?php echo $row['Link']; ?>">tại đây</a></h5>
                <div class="media">

                    <div class="media-body">
                        <h4 class="media-heading">Bài đăng từ :
                            <small><?php echo $row['Created']; ?></small>
                        </h4>
                    </div>
                    <?php
                    include 'Config/config.php';
                    $sql = "SELECT * FROM posts WHERE ID = " . $_GET['id'];
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    $sqlview = "UPDATE posts SET Views = Views+1 WHERE ID = " . $_GET['id'];
                    $resultview = mysqli_query($conn, $sqlview);
                    ?>
                    <h6><?php echo $row['Views'] ?> lượt xem</h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sidebar-card card--forum_categories">
                    <!-- <div class="card-title">
                        <h4>Tin liên quan</h4>
                    </div> -->
                    <?php include 'Layouts/menu-right-index.php'; ?>
                </div>
            </div>
        </div>
        <?php
        ?>
    </div>
    <?php include 'layouts/footer.php'; ?>
    <?php include 'layouts/go-top.php'; ?>
</body>

</html>
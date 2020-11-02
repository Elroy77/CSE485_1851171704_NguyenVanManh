<!DOCTYPE html>
<html lang="en">

<?php include './Layouts/css-link.php'; ?>



<body>
    <?php include 'Layouts/header.php'; ?>
    <div class="container mt-2">
        <div class="row carousel-holder">
            <div class="col-md-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="transition: 0.7s;">
                            <img class="d-block w-100" style="height: 470px;" src="Assets/images/slide1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item" style="transition: 0.7s;">
                            <img class="d-block w-100" style="height: 470px;" src="Assets/images/slide2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item" style="transition: 0.7s;">
                            <img class="d-block w-100" style="height: 470px;" src="Assets/images/slide3.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item" style="transition: 0.7s;">
                            <img class="d-block w-100" style="height: 470px;" src="Assets/images/slide4.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item" style="transition: 0.7s;">
                            <img class="d-block w-100" style="height: 470px;" src="Assets/images/slide5.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <div class="alert-primary">
                    <h2 class="text-center"> Tin Tức</h2>
                </div>

                <div class="panel-body mt-3">
                    <div class="row-item row">
                        <div class="col-md-8 border-right">
                            <div class="row">
                                <div class="col-md-5">
                                    <a href="detail.php">
                                        <img class="img-responsive" src="Assets/images/2.jpg" alt="">
                                    </a>
                                </div>

                                <div class="col-md-7">
                                    <h3>Sinh viên Khoa CNTT giao lưu với công ty Qualica Nhật Bản</h3>
                                    <p style="overflow-x:hidden">Chiều 23/04/2018, tại Trường Đại học Thủy lợi diễn
                                        ra buổi giao lưu giữa sinh viên Khoa CNTT với các lãnh đạo...</p>
                                    <a class="btn btn-primary" href="detail.php">Xem thêm<span class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sidebar-card card--forum_categories">
                                <div class="card-title">
                                    <h4>Tin mới nhất</h4>
                                </div>
                                <div class="collapsible-content">
                                    <div class="news-right">
                                        <img class="img-thumbnail" src="Assets/images/1.jpg" height="50" width="150" alt="">
                                        <a href="detail.html"><span>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</span></a>
                                    </div>
                                    <div class="news-right">
                                        <img class="img-thumbnail" src="Assets/images/1.jpg" height="50" width="150" alt="">
                                        <a href="detail.html"><span>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</span></a>
                                    </div>
                                </div>
                            </div>


                            <div class="sidebar-card card--forum_categories">
                                <div class="card-title">
                                    <h4>Chuyên mục</h4>
                                </div>
                                <div class="collapsible-content">
                                    <ul class="card-content">
                                        <li>
                                            <a href="#">
                                                Wordpress
                                                <span class="item-count">35</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar-card card--top_discussion">
                                <div class="card-title">
                                    <h4>Popular Questions</h4>
                                </div>
                                <div class="collapsible-content">
                                    <ul class="card-content">
                                        <li>
                                            <a href="#">How can I delete more than one post at a time?
                                                <span>2 Weeks Ago</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php include 'Layouts/footer.php'; ?>
    <?php include 'Layouts/go-top.php'; ?>
</body>

</html>
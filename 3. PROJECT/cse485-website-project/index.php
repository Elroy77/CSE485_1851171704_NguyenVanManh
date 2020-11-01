<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <div class="container mt-2">
        <div class="row carousel-holder">
            <div class="col-md-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" >
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
                                    <a class="btn btn-primary" href="detail.php">Xem thêm<span
                                            class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sidebar-card card--forum_categories">
                                <div class="card-title">
                                    <h4>Chuyên mục</h4>
                                </div>
                                <div class="collapsible-content">
                                    <div class="news-right">
                                        <img class="img-thumbnail" src="Assets/images/1.jpg" height="50" width="150"
                                            alt="">
                                        <a href="detail.html"><span>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</span></a>
                                    </div>
                                    <div class="news-right">
                                        <img class="img-thumbnail" src="Assets/images/1.jpg" height="50" width="150"
                                            alt="">
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
        <?php include 'layouts/go-top.php'; ?>


</body>

</html>
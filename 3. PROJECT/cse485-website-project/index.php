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

                                <?php include 'index-process.php'; ?>
                                <hr/>  
                            </div>
                        </div>
                        <div class="col-md-4">
                            <?php include 'Layouts/menu-right-index.php'; ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php include 'Layouts/go-top.php'; ?>
    <?php include 'Layouts/footer.php'; ?>
</body>

</html>
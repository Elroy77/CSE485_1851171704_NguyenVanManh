<!DOCTYPE html>
<html lang="en">

<?php include 'Layouts/css-link.php'; ?>


<body>
<?php include './Layouts/header.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>Blog Post Title</h1>
                <img class="img-responsive" src="./images/bg2.jpg" style="height: 250px; width: 100%;" alt="">
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>
                <hr>

                <!-- Post Content -->
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>
                <hr>

                <div class="well">
                    <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="bình luận"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi</button>
                    </form>
                </div>

                <hr>
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="avatar avatar-48 photo"
                        height="48" width="48">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>
                
            </div>
            <div class="col-md-4">
                <div class="sidebar-card card--forum_categories">
                    <div class="card-title">
                        <h4>Tin liên quan</h4>
                    </div>
                    <div class="collapsible-content">
                        <div class="news-right">
                            <img class="img-thumbnail" src="./images/blog2.jpg" height="50" width="150"
                                alt="">
                            <a href="detail.html"><span>Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit.</span></a>
                        </div>
                        <div class="news-right">
                            <img class="img-thumbnail" src="./images/blog2.jpg" height="50" width="150"
                                alt="">
                            <a href="detail.html"><span>Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit.</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

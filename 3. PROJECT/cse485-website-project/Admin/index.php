<!DOCTYPE html>
<html>

<?php include 'Layouts/css-link.php'; ?>
<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header('location:../Login.php');
    }
?>
<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <?php include 'Layouts/header.php'; ?>
            <!-- /.navbar-top-links -->

            <?php include 'Layouts/menu.php'; ?>         
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@header</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                @Contents
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include 'Layouts/js-link.php'; ?>         
</body>

</html>

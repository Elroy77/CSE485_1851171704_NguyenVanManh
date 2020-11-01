<!DOCTYPE html>
<html>

<?php include 'Layouts/css-link.php'; ?>
<?php
    include 'Config/config.php';
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
                    <h1 class="page-header">Quản lý bài viết</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="row">
                    <form action="posts-index.php" method="GET">
                    <div class="row">
                        <div class="col-lg-11">
                            <div class="col-md-5 input-group">
                                <input type="text" class="form-control" style="height:45px; margin-left:30px;" value= "<?php if (isset($_GET['searchString']) && !empty($_GET['searchString'])) { echo $_GET['searchString']; } ?>" placeholder="Tên bài viết" name="searchString">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit" style="height:45px;width:45px;margin-left:30px;">
                                        <i class="glyphicon glyphicon-search" ></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
                <h3 style="padding:20px;font-size:20px;background-color:#f5f5f5;border-radius:20px;width: 253px;">
                    <a href="post-create.php" class="fa fa-user"> Thêm mới bài viết</a>
                </h3>

                <div>
                    <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                        <thead>
                            <tr role="row">
                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 50px;">ID</th>
                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 150px;">Title</th>
                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 150px;">Category</th>
                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 267px;">Contents</th>
                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 70px;">Image</th>
                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 150px;">Status</th>
                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 50px;">Views</th>
                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 183px;">Created</th>
                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 183px;">Updated</th>
                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 50px;">link</th>
                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 50px;">Edit</th>
                                <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 50px;">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include 'posts-index-process.php';
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include 'Layouts/js-link.php'; ?>         
</body>

</html>

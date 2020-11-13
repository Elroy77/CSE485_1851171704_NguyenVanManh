<?php
include 'Config/config.php';
$sql = "select * from posts";
mysqli_set_charset($conn, "UTF8");
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) { ?>
    <div class="noidung-index">
        <div class="row" style="margin-bottom:10px;">
            <div class="col-md-5">
                <a href="detail.php?id=<?php echo $row['ID'] ?>">
                    <img class="img-responsive" style="height: 170px; width: 300px" src="Admin/Assets/images/<?php echo $row['Image'] ?>" alt="">
                </a>
            </div>

            <div class="col-md-7">
                <a href="detail.php?id=<?php echo $row['ID'] ?>" class="title-index"><?php echo $row['Title']; ?></a>
                <p class="tieude"><?php echo $row['Contents']; ?></p>
                <a href="detail.php?id=<?php echo $row['ID'] ?>" name="ID">Xem thêm >></a>
            </div>
        </div>
        <hr />
    </div>
<?php } ?>
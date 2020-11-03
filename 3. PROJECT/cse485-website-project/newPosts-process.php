<?php
    include 'Config/config.php';
    $sql = "SELECT * FROM posts order by Created DESC LIMIT 2";
    mysqli_set_charset($conn, "UTF8");
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
?>
<div class="news-right">
    <img class="img-thumbnail" src="Assets/images/1.jpg" height="50" width="150" alt="">
    <a href="detail.php"><span><?php echo $row['Title'] ?></span></a>
</div>
<?php } ?>
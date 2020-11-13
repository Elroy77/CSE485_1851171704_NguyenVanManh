<?php
    include 'Config/config.php';
    $sql = "select * from posts";
    mysqli_set_charset($conn,"UTF8");
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)) 
    {?>
    <div class="row" style="margin-bottom:10px;">
        <div class="col-md-5">
            <a href="detail.php?id=<?php echo $row['ID'] ?>">
                <img class="img-responsive" src="Admin/Assets/images/<?php echo $row['Image']?>" alt="" >
            </a>
        </div>
        
        <div class="col-md-7">
            <h3><?php echo $row['Title']; ?></h3>
            <p class="tieude"><?php echo $row['Contents']; ?></p>
            <a href="detail.php?id=<?php echo $row['ID'] ?>" name="ID">Xem thêm >></a>
        </div>
        <hr/>  
    </div>
<?php } ?>
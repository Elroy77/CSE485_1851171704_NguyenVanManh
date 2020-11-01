<?php
    include 'Config/config.php';
    $ID = $_POST['ID'];
    $categoryName = $_POST['categoryName'];
    $updated = $_POST['Updated'];
    $Contents = $_POST['contents'];
    $image = $_POST['image'];
    $status = $_POST['status'];
    if ($categoryName == "")
    { ?>
        <script> alert("Bạn chưa nhập category name") </script>
        <?php header('location: category-post-edit.php?id= $row["ID"]') ?>
    <?php }
    else 
    {
        $sql = "UPDATE categoris SET CategoryName = '$categoryName', Updated = now() where ID ='$ID'";
        if (mysqli_query($conn,$sql))
          {
            header('location:categoris-posts-index.php');
          }
    }
?>
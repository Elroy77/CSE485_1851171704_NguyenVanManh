<?php
    include 'Config/config.php';
    $ID = $_POST['ID'];
    $categoryName = $_POST['categoryName'];
    $updated = $_POST['Updated'];
    if ($categoryName == "")
    { ?>
        <script> alert("Bạn chưa nhập category name") </script>
        <?php header('location: question-category-edit.php?id= $row["ID"]') ?>
    <?php }
    else 
    {
        $sql = "UPDATE categoris_questions SET CategoryName = '$categoryName', Updated = now() where ID ='$ID'";
        if (mysqli_query($conn,$sql))
          {
            header('location:questions-categoris-index.php');
          }
    }
?>
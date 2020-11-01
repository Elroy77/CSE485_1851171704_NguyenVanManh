<?php 
    include 'Config/config.php';
    $sql = "SELECT * FROM categoris_questions";
    mysqli_set_charset($conn,"UTF8");
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result))
    {?>
        <option value="<?php echo $row['ID'] ?>" name="categoryID"> <?php echo $row['CategoryName'] ?> </option>
    <?php }
?>
                                        
<?php
    error_reporting(0);
    $nameSearch = $_GET['searchString'];
    if (isset($nameSearch) && !empty($nameSearch))
    {
        $sql = "select * from posts where Title like '$nameSearch'";
    }
    else
    {
        $sql = "select * from posts";
    }
    mysqli_set_charset($conn,"UTF8");
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result))
    {?>
        <tr>
            <td><?php echo $row['ID'] ?></td>
            <td><?php echo $row['Title'] ?></td>
            <td>
            <?php
                $sqlCategory = "SELECT CategoryName FROM categoris,posts where categoris.ID =".$row['CategoryID'];
                mysqli_set_charset($conn, "UTF8");
                $resultCategory = mysqli_query($conn, $sqlCategory);
                $rowCategory = mysqli_fetch_array($resultCategory);
                echo $rowCategory['CategoryName'] ?></td>
            <td><?php echo $row['Contents'] ?></td>
            <td></td>
            <td>
                <?php
                    if($row['Status'] == '1') { echo "Kích hoạt";}   
                    if($row['Status'] == '0') { echo "Chưa kích hoạt";}
                ?>
            </td>
            <td><?php echo $row['Views'] ?></td>
            <td><?php echo $row['Created'] ?></td>
            <td><?php echo $row['Updated'] ?></td>
            <td><?php echo $row['link'] ?></td>
            <td><a href="post-edit.php?id=<?php echo $row['ID'] ?>" name="ID" class="fa fa-edit"></a></td>
            <td class="text-center"><a class="fas fa-trash-alt" style="color:red;" onClick="deletePost(<?php echo $row['ID']; ?>)"></a></td>


            <script>
                function deletePost(delid)
                {
                    if (confirm("Bạn có chắc chắn muốn xóa bài viết này?"))
                    {
                        window.location.href='post-delete.php?del_id='+delid+'';
                        return true; 
                    }
                }
            </script>
            </tr>
    <?php
    }
?> 
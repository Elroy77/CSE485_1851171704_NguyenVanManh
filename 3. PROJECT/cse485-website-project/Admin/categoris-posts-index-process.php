<?php
    error_reporting(0);
    $nameSearch = $_GET['searchString'];
    if (isset($nameSearch) && !empty($nameSearch))
    {
        $sql = "select * from categoris where CategoryName like '$nameSearch'";
    }
    else
    {
        $sql = "select * from categoris";
    }
    mysqli_set_charset($conn,"UTF8");
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result))
    {?>
        <tr>
            <td><?php echo $row['ID'] ?></td>
            <td><?php echo $row['CategoryName'] ?></td>
            <td><?php echo $row['Created'] ?></td>
            <td><?php echo $row['Updated'] ?></td>
            <td><a href="category-post-edit.php?id=<?php echo $row['ID'] ?>" name="ID" class="fa fa-edit"></a></td>
            <td><p class="fa fa-trash-o" style="color:#428bca; cursor: pointer" onClick="deleteCategory(<?php echo $row['ID']; ?>)"></p></td>
            <script>
                function deleteCategory(delid)
                {
                    if (confirm("Bạn có chắc chắn muốn xóa người dùng?"))
                    {
                        window.location.href='category-post-delete.php?del_id='+delid+'';
                        return true; 
                    }
                }
            </script>
            </tr>
    <?php
    }
?> 
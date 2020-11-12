<?php
    error_reporting(0);
    $nameSearch = $_GET['searchString'];
    if (isset($nameSearch) && !empty($nameSearch))
    {
        $sql = "select * from categoris_questions where CategoryName like '$nameSearch'";
    }
    else
    {
        $sql = "select * from categoris_questions";
    }
    mysqli_set_charset($conn,"UTF8");
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result))
    {?>
        <tr>
            <td><?php echo $row['ID'] ?></td>
            <td><?php echo $row['CategoryName'] ?></td>
            <td><?php echo $row['Created'] ?></td>
            <td><?php echo $row['Updated'] ?></td>
            <td><a href="question-category-edit.php?id=<?php echo $row['ID'] ?>" name="ID" class="fa fa-edit"></a></td>
            <td class="text-center"><a class="fas fa-trash-alt" style="color:red;" onClick="deleteCategory(<?php echo $row['ID']; ?>)"></a></td>
            <script>
                function deleteCategory(delid)
                {
                    if (confirm("Bạn có chắc chắn muốn xóa thể loại này?"))
                    {
                        window.location.href='question-category-delete.php?del_id='+delid+'';
                        return true; 
                    }
                }
            </script>
            </tr>
    <?php
    }
?> 
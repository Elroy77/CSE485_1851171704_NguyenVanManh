<?php
    error_reporting(0);
    $sql = "select * from comments";
    mysqli_set_charset($conn,"UTF8");
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result))
    {?>
        <tr>
            <td><?php echo $row['UserName'] ?></td>
            <td><?php echo $row['Content'] ?></td>    
            <td>
            <?php
                $sqlCategory = "SELECT * FROM comments,questions where questions.ID =".$row['Comment_ID'];
                mysqli_set_charset($conn, "UTF8");
                $resultCategory = mysqli_query($conn, $sqlCategory);
                $rowCategory = mysqli_fetch_assoc($resultCategory);
                echo $rowCategory['Title'] ?></td>
            <td><?php echo $row['Created'] ?></td>
            <td class="text-center"><a class="fas fa-trash-alt" style="color:red;" onClick="deletePost(<?php echo $row['Comment_ID']; ?>)"></a></td>


            <script>
                function deletePost(delid)
                {
                    if (confirm("Bạn có chắc chắn muốn xóa bình luận này?"))
                    {
                        window.location.href='comment-delete.php?del_id='+delid+'';
                        return true; 
                    }
                }
            </script>
            </tr>
    <?php
    }
?> 
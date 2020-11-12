<?php
    error_reporting(0);
    $nameSearch = $_GET['searchString'];
    if (isset($nameSearch) && !empty($nameSearch))
    {
        $sql = "select * from questions where Title like '$nameSearch'";
    }
    else
    {
        $sql = "select * from questions";
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
                $sqlCategory = "SELECT CategoryName FROM questions,categoris_questions where categoris_questions.ID =".$row['CategoryID_question'];
                mysqli_set_charset($conn, "UTF8");
                $resultCategory = mysqli_query($conn, $sqlCategory);
                $rowCategory = mysqli_fetch_array($resultCategory);
                echo $rowCategory['CategoryName'] ?></td>
            <td><?php echo $row['UserName'] ?></td>    
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
            <td class="text-center"><a class="fas fa-trash-alt" style="color:red;" onClick="deletePost(<?php echo $row['ID']; ?>)"></a></td>


            <script>
                function deletePost(delid)
                {
                    if (confirm("Bạn có chắc chắn muốn xóa bài viết này?"))
                    {
                        window.location.href='posts-question-delete.php?del_id='+delid+'';
                        return true; 
                    }
                }
            </script>
            </tr>
    <?php
    }
?> 
<?php
    error_reporting(0);
    $UsernameSearch = $_GET['searchString'];
    if (isset($UsernameSearch) && !empty($UsernameSearch))
    {
        $sql = "select * from users where Username like '$UsernameSearch'";
    }
    else
    {
        $sql = "select * from users";
    }
    mysqli_set_charset($conn,"UTF8");
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result))
    {?>
        <tr>
            <td><?php echo $row['ID'] ?></td>
            <td><?php echo $row['Username'] ?></td>
            <td><?php echo $row['Gmail'] ?></td>
            <td><?php echo $row['Password'] ?></td>
            <td>
                <?php
                    if($row['Status'] == '1') { echo "Kích hoạt";}   
                    if($row['Status'] == '0') { echo "Chưa kích hoạt";}
                ?>
            </td>
            <td><?php echo $row['Role'] ?></td>
            <td><?php echo $row['Created_date'] ?></td>
            <td><?php if ($row['Updated'] != null) echo $row['Updated'] ?></td>
            <td><img src="Assets/images/<?php echo $row['Image'] ?>" alt="" style="height:40px;"></td>
            <td><a href="user-edit.php?id=<?php echo $row['ID'] ?>" name="ID" class="fa fa-edit"></a></td>
            <td class="text-center"><a class="fas fa-trash-alt" style="color:red;" onClick="deleteUser(<?php echo $row['ID']; ?>)"></a></td>

            <script>
                function deleteUser(delid)
                {
                    if (confirm("Bạn có chắc chắn muốn xóa người dùng?"))
                    {
                        window.location.href='user-delete.php?del_id='+delid+'';
                        return true; 
                    }
                }
            </script>
            </tr>
    <?php
    }
?> 
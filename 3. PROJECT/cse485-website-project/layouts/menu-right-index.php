<div class="sidebar-card card--forum_categories">
    <div class="card-title">
        <h4>Tin mới nhất</h4>
    </div>
    <div class="collapsible-content">
        <?php include 'newPosts-process.php'; ?>
    </div>
</div>


<div class="sidebar-card card--forum_categories">
    <div class="card-title">
        <h4>Chuyên mục</h4>
    </div>
    <div class="collapsible-content">
        <ul class="card-content">
            <li>
                <?php
                    $sql = "select categoris.CategoryName,count(CategoryID)
                    as quantity from posts,categoris where 
                    categoris.ID = posts.CategoryID GROUP BY CategoryName";
                    mysqli_set_charset($conn,"UTF8");
                    $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_array($result))
                    {?>
                        <li>
                            <a href="#">
                                <?php echo $row['CategoryName'] ?>
                            <span class="item-count"><?php echo $row['quantity'] ?></span>
                            </a>
                        </li>
                    <?php }
                ?>
            </li>
        </ul>
    </div>
</div>

<div class="sidebar-card card--top_discussion">
    <div class="card-title">
        <h4>PAGE FACEBOOK</h4>
    </div>
    <div class="collapsible-content">
            <!-- <ul class="card-content">
                <li>
                    <a href="#">How can I delete more than one post at a time?
                        <span>2 Weeks Ago</span>
                    </a>
                </li>
            </ul> -->
            <a href="https://www.facebook.com/cse.tlu.edu.vn/"><img src="Assets/images/page-facebook.jpg" alt=""></a>
    </div>
</div>
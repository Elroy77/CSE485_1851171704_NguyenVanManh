       <h4>Trang facebook</h4>
       <div class="fanpage">
           <div class="small-logo" style="display: flex;">
                <img src="./Assets/images/small-logo.jpg" alt="">
                <a href="https://www.facebook.com/cse.tlu.edu.vn" class="small-title pl-3 mt-3">Khoa công nghệ thông tin</a>
            </div>
           <a href="https://www.facebook.com/cse.tlu.edu.vn" class="btn btn-secondary liked-fanpage"><i class="fab fa-facebook pr-2"></i>Liked</a>
           <a href="https://www.facebook.com/cse.tlu.edu.vn" class="btn btn-secondary send-fanpage"><i class="fab fa-facebook-messenger pr-2"></i>Send Messenger</a>
       </div>
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
                        mysqli_set_charset($conn, "UTF8");
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result)) { ?>
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
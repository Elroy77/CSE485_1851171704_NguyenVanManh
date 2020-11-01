<div class="sidebar-card card--forum_categories">
    <div class="card-title">
        <h4>Chuyên mục</h4>
    </div>
    <div class="collapsible-content">
        <ul class="card-content">
            <li>
                <?php
                    include 'Config/config.php';
                    $sql = "select categoris_questions.CategoryName,count(CategoryID_question)
                    as quantity from questions,categoris_questions where 
                    categoris_questions.ID = questions.CategoryID_question GROUP BY CategoryName";
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
        <h4>Câu hỏi phổ biến</h4>
    </div>
    <div class="collapsible-content">
        <ul class="card-content" >
            <li>
                <a href="#">How to có người yêu.
                    <span>1 phút trước</span>
                </a>
            </li>
            <li>
                <a href="#">How to lấy vợ xinh.
                    <span>5 phút trước</span>
                </a>
            </li>
            <li>
                <a href="#">How to giàu.
                    <span>10 phút trước</span>
                </a>
            </li>
        </ul>
    </div>
</div>
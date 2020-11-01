<div class="forum-answers">
    <?php

    ?>
    <div class="forum-answers-title">
    <?php 
    $sqlgetcountComment = "SELECT COUNT(Comment_ID) as count_comment FROM `comments`,questions WHERE comments.Question_ID =".$_GET['id'];
    $resultcountComment = mysqli_query($conn,$sqlgetcountComment);
    $row = mysqli_fetch_assoc($resultcountComment)
    ?>
        <h5>Câu trả lời</h5>
    </div>
    <div class="forum-answers-list">
    <?php
        $sqlgetComment = "select DISTINCT comments.UserName,comments.Created,comments.Content from comments,questions where comments.Question_ID =".$_GET['id'];
        $resultComment = mysqli_query($conn,$sqlgetComment);
        while($row = mysqli_fetch_assoc($resultComment))
        {?>
        <div class="forum-answer-item">
            <div class="forum-answer-meta">
                <span><a href="#"><!--<img alt="" src="images/dw-avatar2.png"
                            class="avatar avatar-48 photo" height="48"
                            width="48">--><?php echo $row['UserName']; ?></a> câu trả lời từ <?php echo $row['Created']; ?></span>
            </div>
            <div class="forum-answer-content">
                <p><?php echo $row['Content']; ?></p>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php
include 'Config/config.php';
error_reporting(0);
// $param ="";
$orderCondition ='';
$orderField = isset($_GET['field']) ? $_GET['field'] : "";
$orderSort = isset($_GET['sort']) ? $_GET['sort'] : "";
$titleSearch = $_GET['searchString'];
$sotin1trang = 5;
if (isset($_GET["page"])) {
    $trang = $_GET["page"];
    settype($trang, "int");
} else {
    $trang = 1;
}

if(!empty($orderField) && !empty($orderSort)){
    $orderCondition = " ORDER BY `questions`.`".$orderField."` ".$orderSort ;
    // $param = "field=".$orderField."&sort=".$orderSort."&";
}


if (isset($titleSearch) && !empty($titleSearch)) {
    $sql = "select * from questions where Title like '%$titleSearch%'";
} else {
    $from = ($trang - 1) * $sotin1trang;
    $sql = "select * from questions ".$orderCondition." limit $from, $sotin1trang";
}

mysqli_set_charset($conn, "UTF8");
$result = mysqli_query($conn, $sql);
?>
<div class="forum-question-filter shadow p-3 mb-3  rounded">
    <span>Lọc:</span>
    <a href="forum-index.php" class="active">Tất cả</a>

    <select id="forum-sort-by" class="forum-sort-by" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value)">
        <option selected="">Sắp xếp</option>
        <option value="?field=Created&sort=desc">Mới nhất</option>
        <option value="?field=Created&sort=asc">Cũ nhất</option>
        <option value="?field=Views&sort=desc">Lượt xem</option>
    </select>
</div>


<div class="forum-question-filter shadow p-3 mb-3  rounded" style="background-color: #3399FF; color: white;">
    <span>Danh sách các câu hỏi</span>
</div>
<?php
while ($row = mysqli_fetch_assoc($result)) { ?>
    <div class="noidung-index forum-questions-list shadow p-3 mb-3 bg-white rounded ">
        <div class="forum-question-item">
            <div class="forum-question-title">
                <a href="forum-detail.php?id=<?php echo $row['ID']; ?>" name="title" class="tieude" id="title"><?php echo $row['Title'] ?></a>
            </div>
            <div class="forum-question-meta">
                <span title="Open" class="forum-status forum-status-open">Open</span>
                <span>
                    <a href="#">
                        <?php
                        $sqlgetImage = "select users.Image from users,questions where users.Username = 'Admin'";
                        $resultImage = mysqli_query($conn, $sqlgetImage);
                        $rowImage = mysqli_fetch_assoc($resultresultImage)
                        ?>
                        <img alt="" src="Admin/Assets/images/<?php echo $rowImage['Image'] ?>" style="width:30px;border-radius:30px;" class="avatar avatar-48 photo avatar-default"> <?php echo $row['UserName'] ?></a> Câu hỏi từ <?php echo $row['Created'] ?>
                </span>
            </div>
            <div class="forum-question-meta mt-3">
                <a class="forum-keyword">Sinh viên</a>
            </div>
            <div class="forum-question-stats">
                <span class="forum-views-count">
                    <strong><?php echo $row['Views'] ?></strong>Views</span>
                <span class="forum-votes-count">
                    <?php
                    $sqlgetcountComment = "SELECT COUNT(Question_ID) as count_comment 
                        FROM comments,questions WHERE comments.Question_ID = questions.ID and Question_ID = " . $row['ID'];

                    $resultcountComment = mysqli_query($conn, $sqlgetcountComment);
                    $row = mysqli_fetch_assoc($resultcountComment)
                    ?>
                    <strong><?php echo $row['count_comment']; ?></strong>Trả lời </span>
            </div>
        </div>
    </div>

<?php }

?>

<div class="forum-questions-footer">
    <?php
    $ds = mysqli_query($conn, "select id from questions");
    $tongsotin = mysqli_num_rows($ds);
    $sotrang = ceil($tongsotin / $sotin1trang);
    for ($t = 1; $t <= $sotrang; $t++) { ?>
        <div class="forum-pagination">
            <a class="forum-page-numbers " href='forum-index.php?page=<?php echo $t ?>'><?php echo $t ?> </a>&nbsp;
        </div>
    <?php }

    ?>
</div>
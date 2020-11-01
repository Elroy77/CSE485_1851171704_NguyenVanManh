<!DOCTYPE html>
<html lang="en">

<?php include 'layouts/css-link-forum.php'; ?>

<body>
    
<?php include 'layouts/header.php'; ?>

<?php include 'layouts/title-forum.php'; ?>

    <section class="support_threads_area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="forum-container">
                        <div class="forum-questions-archive">
                            <form id="forum-search" class="forum-search shadow rounded">
                                <input data-nonce="8c3dbe4be6" type="text" placeholder="Tìm kiếm ..." name="searchString" value=""
                                    class="ui-autocomplete-input">
                            </form>
                            <div class="forum-question-filter shadow p-3 mb-3  rounded">
                                <span>Lọc:</span>
                                <a href="forum-index.php" class="active">Tất cả</a>
                                <select id="forum-sort-by" class="forum-sort-by" name="optionIndex">
                                    <option selected="" disabled="">Sắp xếp</option>
                                    <option value="Latest">Mới nhất</option>
                                    <option value="oldest">Cũ nhất</option>
                                    <option value="like">Thích</option>
                                    <option value="Views">Lượt xem</option>
                                </select>
                            </div>
                            <div class="forum-question-filter shadow p-3 mb-3  rounded"
                                style="background-color: #0000ff; color: white;">
                                <span>Danh sách các câu hỏi</span>
                            </div>
                            <?php include 'forum-index-process.php'; ?>
                            <div class="forum-questions-footer">
                                <div class="forum-pagination">
                                    <span class="forum-page-numbers forum-current">1</span>
                                    <a class="forum-page-numbers" href="#">2</a>
                                    <a class="forum-page-numbers" href="#">3</a>
                                    <span class="forum-page-numbers forum-dots">…</span>
                                    <a class="forum-page-numbers" href="#">5</a>
                                    <a class="forum-next forum-page-numbers" href="#">Tiếp »</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <aside class="sidebar support--sidebar">
                        <?php if(isset($_SESSION['username'])) { ?>
                        <a href="forum-question-form.php" class="login_promot ">đăng câu hỏi</a>
                        <?php } ?>

                        <?php include 'layouts/menu-right.php'; ?>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <?php include 'layouts/go-top.php'; ?>

    <?php include 'layouts/footer.php'; ?>

</body>

</html>
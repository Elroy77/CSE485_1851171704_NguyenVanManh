<!DOCTYPE html>
<html lang="en">

<?php include './Layouts/css-link.php'; ?>

<body>

    <?php include './Layouts/header.php'; ?>

    <?php include './Layouts/title-forum.php'; ?>

    <section class="support_threads_area section--padding">
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-8">
                    <div class="forum-container">
                        <div class="forum-questions-archive">
                            <form id="forum-search" class="forum-search shadow rounded">
                                <input data-nonce="8c3dbe4be6" type="text" placeholder="Tìm kiếm ..." name="searchString" value="" class="ui-autocomplete-input">
                            </form>
                            <div class="forum-question-filter shadow p-3 mb-3  rounded">
                                <span>Lọc:</span>
                                <a href="forum-index.php" class="active">Tất cả</a>
                                <select id="forum-sort-by" class="forum-sort-by" name="optionIndex">
                                    <option selected="" disabled="">Sắp xếp</option>
                                    <option value="Latest">Mới nhất</option>
                                    <option value="oldest">Cũ nhất</option>
                                    <option value="like">Trả lời</option>
                                    <option value="Views">Lượt xem</option>
                                </select>
                            </div>
                            <div class="forum-question-filter shadow p-3 mb-3  rounded" style="background-color: #3399FF; color: white;">
                                <span>Danh sách các câu hỏi</span>
                            </div>
                            <?php include 'forum-index-process.php'; ?>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <aside class="sidebar support--sidebar">
                        <?php if (isset($_SESSION['username'])) { ?>
                            <a href="forum-question-form.php" class="login_promot ">Đăng câu hỏi</a>
                        <?php } ?>

                        <?php include './Layouts/menu-right.php'; ?>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <?php include './Layouts/go-top.php'; ?>

    <?php include './Layouts/footer.php'; ?>

</body>

</html>
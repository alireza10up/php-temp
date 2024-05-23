<?php

require "./config/config.php";

$loggedInUserId = getUserLoginId();

if (!$loggedInUserId) {
    redirect('login.php');
}

$userData = \Models\User::where(['id', '=', $loggedInUserId])->first();

$posts = $userData->getPostsFollowing();

$title = 'شبکه اجتماعی x';
?>

<!DOCTYPE html>
<html lang="en">
<?php
inc('view/head');
?>
<body>
<!-- ==============================================
 Navigation Section
 =============================================== -->
<?php
inc('view/header');
?>
<!-- Page Header -->

<!-- ==============================================
 Navbar Second Section
 =============================================== -->
<?php
inc('view/navbar');
?>
<!-- ==============================================
	 News Feed Section
	 =============================================== -->
<section class="newsfeed">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <a href="return false">
                    <div class="storybox"
                         style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('view/assets/img/posts/2.gif') no-repeat;background-size: cover;background-position: center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;">
                        <div class="story-body text-center">
                            <div class=""><img class="img-circle" src="view/assets/img/users/10.jpg" alt="user"></div>
                            <h4>حمید حمیدی</h4>
                            <p style="direction:rtl">2 ساعت قبل</p>
                        </div>
                    </div>
                </a>
                <div class="trending-box hidden-xs hidden-md hidden-sm">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="photo_stories.html"><h4>داستان های بیشتر</h4></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ col-lg-3 -->
            <div class="col-lg-6">
                <?php foreach ($posts as $post) : ?>
                    <div class="cardbox">
                        <div class="cardbox-heading">
                            <!-- START dropdown-->
                            <div class="dropdown pull-left">
                                <button class="btn btn-secondary btn-flat btn-flat-icon dropdownMenu" type="button"
                                        data-toggle="dropdown" aria-expanded="false">
                                    <em class="fa fa-ellipsis-h"></em>
                                </button>
                                <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu"
                                     style="position: absolute; transform: translate3d(0px, 34px, 0px); top: 0px; left: 0px; will-change: transform;padding-right: 10px;">
                                    <a class="dropdown-item" href="return false">عدم نمایش پست</a>
                                    <a class="dropdown-item" href="return false">آنفالو کردن</a>
                                </div>
                            </div>
                            <!--/ dropdown -->
                            <!-- END dropdown-->
                            <div class="media m-0 pull-right">
                                <a href="profile.php?username=hamid">
                                    <div class="media-body">
                                        <p class="m-0"><?= $post->user->fullName() ?></p>
                                        <small><p><?= $post->user->created_at ?></p></small>
                                    </div>
                                </a>
                                <div class="d-flex mr-3">
                                    <a href="return false"><img class="img-responsive img-circle"
                                                                src="<?= $post->user->picture ?? '/view/img/no-image.png' ?>"
                                                                alt="User"></a>
                                </div>
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ cardbox-heading -->

                        <div class="cardbox-item">
                            <a href="" data-toggle="modal">
                                <img class="img-responsive filter-charmes"
                                     src="<?= $post->file ?? '/view/img/image.png' ?>" alt="MaterialImg">
                            </a>
                        </div>
                        <!--/ cardbox-item -->
                        <div class="cardbox-base">
                            <p style="text-align:right;padding: 0 10px 0 10px;font-family:web-vazir"><?= $post->description ?></p>
                        </div>
                        <!--/ cardbox-base -->
                        <div class="cardbox-like">
                            <ul>
                                <li>
                                    <a href="#aa">
                                        <i id="like-<?= $post->id ?>"
                                           class="fa fa-heart <?= $post->isLikeByUser($loggedInUserId) ? 'text-danger' : ''; ?>"
                                           onclick="toggleLike(`<?= $post->id ?>`);"></i>
                                    </a>
                                    <span id="placeholder-like-<?= $post->id ?>"> <?= $post->getLike() ?> </span>
                                </li>
                                <li><a href="return false" title="" class="com1"><i class="fa fa-comments"
                                                                                    onclick="return false"></i></a>
                                    <span class="span-last"> <?= $post->getCommentCount() ?></span></li>
                            </ul>
                        </div>
                        <!--/ cardbox-like -->
                    </div>
                <?php endforeach; ?>
            </div>
            <!--/ col-lg-6 -->

            <div class="col-lg-3">
                <div class="trending-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>تصاویر پر بازدید</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ container -->
</section>
<!--/ newsfeed -->

<!-- ==============================================
 Modal Section
 =============================================== -->

<!-- ==============================================
 Scripts
 =============================================== -->
<script src="view/assets/js/jquery.min.js"></script>
<script src="view/assets/js/bootstrap.min.js"></script>
<script src="view/assets/plugins/slimscroll/jquery.slimscroll.js"></script>
<script src="view/assets/plugins/carousel/js/owl.carousel.js"></script>
<script src="view/assets/js/base.js"></script>
<script>


    function toggleLike(postId) {
        $('#like-' + postId).toggleClass('text-danger');
        $.ajax({
            url: "./Controller/Like.php",
            method: "POST",
            data: {
                user_id: `<?=$loggedInUserId?>`,
                post_id: postId
            },
            success: (data) => {
                $('#placeholder-like-' + postId).html(JSON.parse(data).likeCount);
            }
        });
    }

    $('#Slim,#Slim2').slimScroll({
        height: "auto",
        position: 'right',
        railVisible: true,
        alwaysVisible: true,
        size: "8px",
    });
    $(document).ready(() => {
        var pageName = "index.php";
        $(".nav-sec .d-flex .p-2 a[href='" + pageName + "']").parent().addClass("mint-green");
    });
</script>
</body>

</html>

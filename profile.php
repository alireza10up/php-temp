<?php

require "./config/config.php";

$loggedInUserId = getUserLoginId();

if (!$loggedInUserId) {
    redirect('login.php');
}

$user = \Models\User::where(['id', '=', $loggedInUserId])->first();

$title = 'پروفایل کاربری';
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

<!-- ==============================================
 Navbar Second Section
 =============================================== -->
<?php
inc('view/navbar');
?>
<!-- ==============================================
     News Feed Section
     =============================================== -->

<!--/ newsfeed -->
<section class="profile-two">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <aside id="leftsidebar" class="sidebar">
                    <ul class="list">
                        <li>
                            <div class="user-info">
                                <div class="image">
                                    <a href="photo_profile_two.html">
                                        <img src="<?= $user->picture ?>" class="img-responsive img-circle"
                                             alt="User" style="height: 180px;">
                                        <span class="online-status online"></span>
                                    </a>
                                </div>
                                <div class="detail">
                                    <h4> <?= $user->fullName() ?> </h4>
                                    <small><?= $user->username ?></small>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <a title="facebook" href="#" class=" waves-effect waves-block"><i
                                                    class="fab fa-facebook"></i></a>
                                        <a title="twitter" href="#" class=" waves-effect waves-block"><i
                                                    class="fab fa-twitter"></i></a>
                                        <a title="instagram" href="#" class=" waves-effect waves-block"><i
                                                    class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <small class="text-muted"><?= $user->postsCount() ?> پست </small>
                            <br/>
                            <small class="text-muted"><?= $user->followersCount() ?> دنبال کننده</small>
                            <br/>
                            <small class="text-muted"><?= $user->followingsCount() ?> دنبال شونده </small>
                            <hr>
                            <small class="text-muted" style="float: right;">بیوگرافی: </small>
                            <p style=""><?= $user->bio ?></p>
                            <hr>
                            <small class="text-muted" style="float: right;">وبسایت: </small>
                            <p style=""> <?= $user->website ?> </p>
                            <hr>
                        </li>
                    </ul>
                </aside>
            </div>

            <!--/ col-lg-3-->
            <div class="col-lg-6" style="padding-top: 22px;background: #fff;">
                <div class="row">
                    <?php foreach ($user->posts()->get() as $post): ?>
                        <div class="col-lg-6">
                            <a class="modalClass" post-id="16" style="cursor:pointer">

                                <div class="explorebox filter-amaro"
                                     style="background: url('<?= $post->file ?>') no-repeat;background-size: cover;background-position: center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;">
                                    <div class="explore-top">
                                        <div class="explore-like"><i class="fa fa-heart"></i> <span>
                                                    <?= $post->likes()->count() ?> </span></div>
                                        <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
            <!--/ col-lg-3-->
            <div class="col-lg-3">
                <div class="suggestion-box full-width">
                    <div class="suggestions-list">
                        <?php
                        $suggestionsUser = $user->suggestionsUser();
                        if ($suggestionsUser):
                            foreach ($suggestionsUser as $suggestionUser):
                                ?>
                                <div class="suggestion-body">
                                    <img class="img-responsive img-circle"
                                         src="<?= $suggestionUser->user->picture ?>">
                                    <div class="name-box">
                                        <h4><?= $suggestionUser->user->fullName() ?></h4>
                                        <span>@<?= $suggestionUser->user->username ?></span>
                                    </div>
                                    <span id="user-<?= $suggestionUser->user->id ?>" class="btn btn-sm btn-primary"
                                          onclick="toggleFollow(`<?= $suggestionUser->user->id ?>`)">
                                            <?php $followStatus = $suggestionUser->user->isFollowedBy($loggedInUserId);
                                            echo match ($followStatus->accept ?? -1) {
                                                0, '0', false => 'ارسال شد',
                                                default => 'دنبال کردن'
                                            };
                                            ?>
                                    </span>
                                </div>
                            <?php
                            endforeach;
                        else:
                            ?>
                            <div class="suggestion-body">
                                <span>موردی یافت نشد</span>
                            </div>
                        <?php
                        endif;
                        ?>


                    </div>
                    <!--suggestions-list end-->
                </div>
            </div>
        </div>
        <!--/ row-->
    </div>
    <!--/ container -->
</section>

<!--/ profile -->

<!-- ==============================================
 Modal Section
 =============================================== -->
<div id="myModal" class="modal fade" post-id="">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">

                <div class="row">

                    <div class="col-md-8 modal-image postfile">

                    </div>
                    <!--/ col-md-8 -->
                    <div class="col-md-4 modal-meta">
                        <div class="modal-meta-top">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"
                                    style="margin-top: 5px;">
                                <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                            </button>
                            <!--/ button -->
                            <div class="img-poster clearfix">
                                <a href="return false"><img class="img-responsive img-circle user-post-picture"
                                                            alt="Image"/></a>
                                <strong><a href="return false"
                                           style="  margin-top: 6px;margin-right: 6px;"><?= $user->fullName() ?></a></strong>
                                <br/>
                            </div>
                            <!--/ img-poster -->

                            <ul class="img-comment-list">

                                <li>

                                </li>
                                <!--/ li -->
                            </ul>
                            <!--/ comment-list -->

                            <div class="modal-meta-bottom">
                                <ul>
                                    <li><span class="modal-one likes-number"> 0</span><a
                                                class="modal-like like-post" style="cursor:pointer"><i
                                                    class="fa fa-heart"></i></a>
                                        <a class="modal-comment"><span> 0</span><i class="fa fa-comments"></i></a>
                                    </li>
                                    <li>
                                        <span class="thumb-xs"></span>
                                        <form action="Control.comment.php" method="POST" id="comment-post"></form>
                                        <div class="col-md-12">
                                            <input name="post_id" form="comment-post" id="form-post-id"
                                                   style="display:none">
                                            <input name="text" form="comment-post"
                                                   class="form-control input-sm comment" style="margin-bottom: 9px"
                                                   type="text" placeholder="نظر خود را بنویسید..." required>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="form-control bnt btn-success create-comment"
                                                    form="comment-post">ثبت نظر
                                            </button>
                                        </div>
                                        <!--/ comment-body -->
                                    </li>
                                </ul>
                            </div>
                            <!--/ modal-meta-bottom -->
                        </div>
                        <!--/ modal-meta-top -->
                    </div>
                    <!--/ col-md-4 -->

                </div>
                <!--/ row -->
            </div>
            <!--/ modal-body -->

        </div>
        <!--/ modal-content -->
    </div>
    <!--/ modal-dialog -->
</div> <!--/ modal -->

<!-- ==============================================
 Scripts
 =============================================== -->
<script src="view/assets/js/jquery.min.js"></script>
<script src="view/assets/js/bootstrap.min.js"></script>
<script src="view/assets/plugins/slimscroll/jquery.slimscroll.js"></script>
<script src="view/assets/plugins/carousel/js/owl.carousel.js"></script>
<script src="view/assets/js/base.js"></script>
<script>
    $('#Slim,#Slim2').slimScroll({
        height: "auto",
        position: 'right',
        railVisible: true,
        alwaysVisible: true,
        size: "8px",
    });
    $(document).ready(() => {
        var pageName = "profile.php?username=malekfar";
        $(".nav-sec .d-flex .p-2 a[href='" + pageName + "']").parent().addClass("mint-green");
    });
</script>
<script>
    $("#myModal").on("hidden.bs.modal", function () {
        $(".postfile").html("");
    });

    function toggleFollow(userId) {
        $.ajax({
            url: "./Controller/Follow.php",
            method: "POST",
            data: {
                user_id: `<?=$loggedInUserId?>`,
                target_user_id: userId
            },
            success: (data) => {
                $('#user-' + userId).html(JSON.parse(data).result);
            }
        });
    }

    $(document).on('click', '.modalClass', function () {
        $(".modal .fa-heart").css({'color': '#848484'});
        $(".img-comment-list").html("");
        let id = $(this).attr('post-id');
        fetch(`Control.post.php?post-id=${id}`, {
            method: "GET",
            credentials: "same-origin",
            headers: {
                "Content-Type": "application/json",
            },
        }).then(function (response) {
            response.json().then(function (data) {
                data.comments.forEach((comment) => {
                    $(".img-comment-list").append(`<li>
                            <div class="comment-img" style="width:13%">
                                <img src="${comment.picture}" class="img-responsive img-circle comment-user-picture" alt="Image" />
                            </div>
                            <div class="comment-text" style="float:left;width:80%">
                                <strong><a href="#" class="comment-user-name">${comment.name} ${comment.family}</a></strong>
                                <p>` + comment.text + `</p> <span class="date sub-text">on December 5th, 2016</span>
                            </div>
                        </li>`);
                });
                $(".modal-comment span").html(data.comments.length);
                $(".likes-number").html(data.likes);
                $("#form-post-id").val(data.post.id);
                $("#myModal").attr('post-id', data.post.id);
                $(".user-post-picture").attr('src', data.user.picture)
                if (data.liked)
                    $("#myModal .fa-heart").css({'color': 'red'});
                if (data.post.type == "image")
                    $(".postfile").html("<img class='img-responsive filter-" + data.filter.name + "' src='" + data.post.file + "' alt='Image' />");
                if (data.post.type == "video")
                    $(".postfile").html("<video width='100' height='100' class='filter-" + data.filter.name + "' style='width: 100% !important;height: 100% !important;' src='" + data.post.file + "' autoplay></video>");
                $('#myModal').modal('show');
            });
        })
    });

    $(document).on('click', '.like-post', function () {
        let id = $('#myModal').attr('post-id');
        fetch(`Control.like.php?post-id=${id}`, {
            method: "GET",
            credentials: "same-origin",
            headers: {
                "Content-Type": "application/json",
            },
        }).then(function (response) {
            response.json().then(function (data) {
                if (data.like == "true") {
                    var curentLikes = $(`div[post-id=${data.liked_post}] .likes-number`);
                    $(`div[post-id=${data.liked_post}] .fa-heart`).css({'color': 'red'});
                    $(`div[post-id=${data.liked_post}] .likes-number`).html(Number($(`div[post-id=${data.liked_post}] .likes-number`).html()) + 1);
                }
            });
        })
    })

    $('.home-menu').css({'min-height': ($(window).height() - 400) + 'px'});
</script>
</body>

</html>
<?php

require "./config/config.php";

$loggedInUserId = 3;

$user = \Models\User::where(['id', '=', $loggedInUserId])->first();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ==============================================
        Title and Meta Tags
        =============================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پروفایل کاربری</title>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta property="og:title" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:description" content=""/>

    <!-- ==============================================
        Favicons
        =============================================== -->
    <link rel="icon" href="view/assets/img/logo.html">
    <link rel="apple-touch-icon" href="view/img/favicons/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="view/img/favicons/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="view/img/favicons/apple-touch-icon-114x114.html">

    <!-- ==============================================
        CSS
        =============================================== -->
    <link type="text/css" href="view/assets/css/demos/photo.css" rel="stylesheet"/>
</head>

<body>
<!-- ==============================================
 Navigation Section
 =============================================== -->

<header class="tr-header">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><i class="fab fa-instagram"></i> </a>
            </div>
            <!-- /.navbar-header -->
            <div class="navbar-left" style="display:none">
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a><span>تنظیمات</span></a></li>
                        <li><a href="Control.logout.php">خروج</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.navbar-left -->
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li>
                        <div class="search-dashboard">
                            <form method="GET" action="Control.search.php">
                                <input name="text" placeholder="جستجو کنید" type="text">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <span class="badge badge-danger badge-pill noti-icon-badge">6</span>
                            <i class="fa fa-bell noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <div class="dropdown-item noti-title">
                                <h6 class="m-0">
                                        <span class="pull-right">
                                            <a class="text-dark"><small> پاک کردن </small></a>
                                        </span> اعلان ها
                                </h6>
                            </div>

                            <div class="slimScrollDiv"
                                 style="position: relative; overflow: hidden; width: auto; height: 416.983px;">
                                <div class="slimscroll"
                                     style="max-height: 230px; overflow: hidden; width: auto; height: 416.983px;">
                                    <div id="Slim">
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon" style="background-color:red"><i
                                                        class="fa fa-heart"></i></div>
                                            <p class="notify-details">مجتبی ملک فر پست شما را لایک کرد. <small
                                                        class="text-muted">3 دقیقه قبل</small></p>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon" style="background-color:red"><i
                                                        class="fa fa-heart"></i></div>
                                            <p class="notify-details">مجتبی ملک فر پست شما را لایک کرد. <small
                                                        class="text-muted">0 دقیقه قبل</small></p>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon" style="background-color:red"><i
                                                        class="fa fa-heart"></i></div>
                                            <p class="notify-details">مجتبی ملک فر پست شما را لایک کرد. <small
                                                        class="text-muted">58 دقیقه قبل</small></p>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon" style="background-color:red"><i
                                                        class="fa fa-heart"></i></div>
                                            <p class="notify-details">مجتبی ملک فر پست شما را لایک کرد. <small
                                                        class="text-muted">57 دقیقه قبل</small></p>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon" style="background-color:red"><i
                                                        class="fa fa-heart"></i></div>
                                            <p class="notify-details">مجتبی ملک فر پست شما را لایک کرد. <small
                                                        class="text-muted">56 دقیقه قبل</small></p>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon" style="background-color:red"><i
                                                        class="fa fa-comment"></i></div>
                                            <p class="notify-details">مجتبی ملک فر برای پست شما کامنت نوشت. <small
                                                        class="text-muted">27 دقیقه قبل</small></p>
                                        </a>
                                    </div>
                                    <!--/ .Slim-->
                                    <div class="slimScrollBar"
                                         style="background: rgb(158, 165, 171) none repeat scroll 0% 0%; width: 8px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;">
                                    </div>
                                    <div class="slimScrollRail"
                                         style="width: 8px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;">
                                    </div>
                                </div>
                                <!--/ .slimscroll-->
                            </div>
                            <!--/ .slimScrollDiv-->
                            <a href="notification" class="dropdown-item text-center notify-all">
                                نمایش همه<i class="fa fa-arrow-left"></i>
                            </a>
                            <!-- All-->
                        </div>
                        <!--/ dropdown-menu-->
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown"
                           role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="badge badge-success badge-pill noti-icon-badge">6</span>
                            <i class="fa fa-envelope noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg dropdown-new">
                            <div class="dropdown-item noti-title">
                                <h6 class="m-0">
                                        <span class="float-right">
                                            <a class="text-dark"><small> پاک کردن </small></a>
                                        </span>گفتگوها
                                </h6>
                            </div>

                            <div class="slimScrollDiv"
                                 style="position: relative; overflow: hidden; width: auto; height: 416.983px;">
                                <div class="slimscroll"
                                     style="max-height: 230px; overflow: hidden; width: auto; height: 416.983px;">
                                    <div id="Slim2">
                                        <a href="javascript:void(0);" class="dropdown-item notify-item nav-user">
                                            <div class="notify-icon"><img src="view/assets/img/users/1.jpg"
                                                                          class="img-responsive img-circle" alt="">
                                            </div>
                                            <p class="notify-details">Cristina Pride</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about
                                                our next meeting</p>
                                        </a>
                                        <!--/ dropdown-item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item nav-user">
                                            <div class="notify-icon"><img src="view/assets/img/users/2.jpg"
                                                                          class="img-responsive img-circle" alt="">
                                            </div>
                                            <p class="notify-details">Sam Garret</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                        </a>
                                        <!--/ dropdown-item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item nav-user">
                                            <div class="notify-icon"><img src="view/assets/img/users/3.jpg"
                                                                          class="img-responsive img-circle" alt="">
                                            </div>
                                            <p class="notify-details">Karen Robinson</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Wow that's great</p>
                                        </a>
                                        <!--/ dropdown-item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item nav-user">
                                            <div class="notify-icon"><img src="view/assets/img/users/4.jpg"
                                                                          class="img-responsive img-circle" alt="">
                                            </div>
                                            <p class="notify-details">Sherry Marshall</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about
                                                our next meeting</p>
                                        </a>
                                        <!--/ dropdown-item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item nav-user">
                                            <div class="notify-icon"><img src="view/assets/img/users/5.jpg"
                                                                          class="img-responsive img-circle" alt="">
                                            </div>
                                            <p class="notify-details">Shawn Millard</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                        </a>
                                        <!--/ dropdown-item-->
                                    </div>
                                    <!--/ .Slim-->
                                    <div class="slimScrollBar"
                                         style="background: rgb(158, 165, 171) none repeat scroll 0% 0%; width: 8px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;">
                                    </div>
                                    <div class="slimScrollRail"
                                         style="width: 8px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;">
                                    </div>
                                </div>
                                <!--/ slimscroll-->
                            </div>
                            <!--/ slimScrollDiv-->
                            <a href="photo_chat.html" class="dropdown-item text-center notify-all">
                                نمایش همه<i class="fa fa-arrow-left"></i>
                            </a>
                        </div>
                        <!--/ dropdown-menu-->
                    </li>

                    <li class="dropdown mega-avatar">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"
                           href="./profile.php">
                            <span class="avatar w-32"><img src="<?= $user->picture ?>" class="img-resonsive img-circle"
                                                           width="25" height="25" alt="..."></span>
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs"> <?= $user->fullName() ?> </span>
                        </a>
                        <div class="dropdown-menu w dropdown-menu-scale pull-right">
                            <a class="dropdown-item" href="setting"><span>تنظیمات</span></a>
                            <a class="dropdown-item" href="Control.logout.php"><span>خروج</span></a>
                        </div>
                    </li>
                    <!-- /navbar-item -->

                </ul>
                <!-- /.sign-in -->
            </div>
            <!-- /.nav-right -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
</header> <!-- Page Header -->

<!-- ==============================================
 Navbar Second Section
 =============================================== -->
<section class="nav-sec">
    <div class="d-flex justify-content-between">
        <div class="p-2 nav-icon-lg dark-black">
            <a class="nav-icon" href='index.php'><em class="fa fa-align-left"></em>
                <span>صفحه اصلی</span>
            </a>
        </div>
        <div class="p-2 nav-icon-lg clean-black">
            <a class="nav-icon" href='Control.search.php?text='><em class="fa fa-crosshairs"></em>
                <span>جستجو</span>
            </a>
        </div>
        <div class="p-2 nav-icon-lg dark-black">
            <a class="nav-icon" href='post.php'><em class="fab fa-instagram"></em>
                <span>پست جدید</span>
            </a>
        </div>
        <div class="p-2 nav-icon-lg dark-black">
            <a class="nav-icon" href='profile.php?username=malekfar'><em class="fa fa-user"></em>
                <span>پروفایل</span>
            </a>
        </div>
    </div>
</section> <!-- ==============================================
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
                            <small class="text-muted"><?= $user->followingCount() ?> دنبال شونده </small>
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
                                                0 ,'0' , false => 'ارسال شد',
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
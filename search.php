
<!DOCTYPE html>
<html lang="en">
<head>
    
<!-- ==============================================
    Title and Meta Tags
    =============================================== -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>شبکه اجتماعی</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta property="og:title" content="" />
<meta property="og:url" content="" />
<meta property="og:description" content="" />

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
<link type="text/css" href="view/assets/css/demos/photo.css" rel="stylesheet" /></head>
<body>
    <!-- ==============================================
     Navigation Section
     =============================================== -->
    <header class="tr-header">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><i class="fab fa-instagram"></i> </a>
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
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="badge badge-danger badge-pill noti-icon-badge">0</span>
                            <i class="fa fa-bell noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <div class="dropdown-item noti-title">
                                <h6 class="m-0">
                                    <span class="pull-right">
                                        <a class="text-dark"><small> پاک کردن  </small></a> 
                                    </span> اعلان ها 
                                </h6>
                            </div>

                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 416.983px;">
                                <div class="slimscroll" style="max-height: 230px; overflow: hidden; width: auto; height: 416.983px;">
                                    <div id="Slim">
                                                                            </div>
                                    <!--/ .Slim-->
                                    <div class="slimScrollBar" style="background: rgb(158, 165, 171) none repeat scroll 0% 0%; width: 8px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
                                    <div class="slimScrollRail" style="width: 8px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div>
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
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false">
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

                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 416.983px;">
                                <div class="slimscroll" style="max-height: 230px; overflow: hidden; width: auto; height: 416.983px;">
                                    <div id="Slim2">
                                        <a href="javascript:void(0);" class="dropdown-item notify-item nav-user">
                                            <div class="notify-icon"><img src="view/assets/img/users/1.jpg" class="img-responsive img-circle" alt=""> </div>
                                            <p class="notify-details">Cristina Pride</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                        </a>
                                        <!--/ dropdown-item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item nav-user">
                                            <div class="notify-icon"><img src="view/assets/img/users/2.jpg" class="img-responsive img-circle" alt=""> </div>
                                            <p class="notify-details">Sam Garret</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                        </a>
                                        <!--/ dropdown-item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item nav-user">
                                            <div class="notify-icon"><img src="view/assets/img/users/3.jpg" class="img-responsive img-circle" alt=""> </div>
                                            <p class="notify-details">Karen Robinson</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Wow that's great</p>
                                        </a>
                                        <!--/ dropdown-item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item nav-user">
                                            <div class="notify-icon"><img src="view/assets/img/users/4.jpg" class="img-responsive img-circle" alt=""> </div>
                                            <p class="notify-details">Sherry Marshall</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                        </a>
                                        <!--/ dropdown-item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item nav-user">
                                            <div class="notify-icon"><img src="view/assets/img/users/5.jpg" class="img-responsive img-circle" alt=""> </div>
                                            <p class="notify-details">Shawn Millard</p>
                                            <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                        </a>
                                        <!--/ dropdown-item-->
                                    </div>
                                    <!--/ .Slim-->
                                    <div class="slimScrollBar" style="background: rgb(158, 165, 171) none repeat scroll 0% 0%; width: 8px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
                                    <div class="slimScrollRail" style="width: 8px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div>
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
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" href="profile">
                            <span class="avatar w-32"><img src="view/uploads/images/users/0.057052001555682879.JPG" class="img-resonsive img-circle" width="25" height="25" alt="..."></span>
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">مجتبی ملک فر</span>
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
</header>    <!-- Page Header -->
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
		<div class="p-2 nav-icon-lg clean-black mint-green">
			<a class="nav-icon" href='search.php'><em class="fa fa-crosshairs"></em>
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
</section>    <!-- ==============================================
	 News Feed Section
	 =============================================== -->
    <section class="upload">
        <div class="container">
            <div class="row top-row">

                                <div class="col-lg-3">
                    <div class="tr-section">
                        <div class="tr-post">
                            <div class="entry-header">
                                <div class="entry-thumbnail">
                                    <a href="#"><img class="img-fluid" src="view/uploads/images/users/0.391154001555683683.JPG" alt="Image"></a>
                                </div>
                                <!-- /entry-thumbnail -->
                            </div>
                            <!-- /entry-header -->
                            <div class="post-content">
                                <!-- /author -->
                                <div class="card-content">
                                    <h4><a style="color:#abacae" href="profile.php?username=mohammad">محمد قلعه نویی</a></h4>
                                    <span>mohammad</span>
                                </div>
                                <a href="#" class="kafe-btn kafe-btn-mint-small full-width"> Follow</a>
                            </div>
                            <!-- /.post-content -->
                        </div>
                        <!-- /.tr-post -->
                    </div>
                    <!-- /.tr-post -->
                </div>
                <!-- /col-sm-3 -->
                            </div>
        </div>
        <!--/ container -->
    </section>
    <!--/ newsfeed -->

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
    $(document).ready( () => {
        var pageName = "Control.search.php?text=%D9%82%D9%84%D8%B9%D9%87";
        $(".nav-sec .d-flex .p-2 a[href='"+pageName+"']").parent().addClass("mint-green");
    });
</script>    <script>
        
    </script>
</body>
</html>
<?php
global $userData;
?>
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
                <a class="navbar-brand" href="index.html"><i class="fab fa-instagram"></i> </a>
            </div>
            <!-- /.navbar-header -->
            <div class="navbar-left" style="display:none">
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a><span>تنظیمات</span></a></li>
                        <li><a href="Controllers/Logout.php">خروج</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.navbar-left -->
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li>
                        <div class="search-dashboard">
                            <form method="GET" action="Controllers/Search.php">
                                <input name="text" placeholder="جستجو کنید" type="text">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false"
                           aria-expanded="false">
                            <span class="badge badge-danger badge-pill noti-icon-badge">6</span>
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

                            <div class="slimScrollDiv"
                                 style="position: relative; overflow: hidden; width: auto; height: 416.983px;">
                                <div class="slimscroll"
                                     style="max-height: 230px; overflow: hidden; width: auto; height: 416.983px;">
                                    <div id="Slim">
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon" style="background-color:red"><i
                                                    class="fa fa-heart"></i></div>
                                            <p class="notify-details">مجتبی ملک فر پست شما را لایک کرد. <small
                                                    class="text-muted">1 دقیقه قبل</small></p>
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
                                                    class="text-muted">55 دقیقه قبل</small></p>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon" style="background-color:red"><i
                                                    class="fa fa-heart"></i></div>
                                            <p class="notify-details">مجتبی ملک فر پست شما را لایک کرد. <small
                                                    class="text-muted">54 دقیقه قبل</small></p>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon" style="background-color:red"><i
                                                    class="fa fa-heart"></i></div>
                                            <p class="notify-details">مجتبی ملک فر پست شما را لایک کرد. <small
                                                    class="text-muted">54 دقیقه قبل</small></p>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon" style="background-color:red"><i
                                                    class="fa fa-comment"></i></div>
                                            <p class="notify-details">مجتبی ملک فر برای پست شما کامنت نوشت. <small
                                                    class="text-muted">24 دقیقه قبل</small></p>
                                        </a>
                                    </div>
                                    <!--/ .Slim-->
                                    <div class="slimScrollBar"
                                         style="background: rgb(158, 165, 171) none repeat scroll 0% 0%; width: 8px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
                                    <div class="slimScrollRail"
                                         style="width: 8px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div>
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
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" role="button"
                           aria-haspopup="false" aria-expanded="false">
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
                                            <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our
                                                next meeting</p>
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
                                            <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our
                                                next meeting</p>
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
                                         style="background: rgb(158, 165, 171) none repeat scroll 0% 0%; width: 8px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
                                    <div class="slimScrollRail"
                                         style="width: 8px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div>
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
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" href="./profile.php">
                            <span class="avatar w-32"><img src="view/uploads/images/users/0.057052001555682879.JPG"
                                                           class="img-resonsive img-circle" width="25" height="25"
                                                           alt="..."></span>
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs"><?= $userData->fullName() ?></span>
                        </a>
                        <div class="dropdown-menu w dropdown-menu-scale pull-right">
                            <a class="dropdown-item" href="setting"><span>تنظیمات</span></a>
                            <a class="dropdown-item" href="Controllers/Logout.php"><span>خروج</span></a>
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
</header>

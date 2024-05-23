<?php
require "./config/config.php";

$title = 'ثبت نام';
?>

<!DOCTYPE html>
<html lang="en">

<?php
inc('view/head');
?>

<body>

<!-- ==============================================
 Header Section
 =============================================== -->
<section class="login">
    <div class="container">
        <div class="banner-content">
            <h1><i class="fa fa-smile"></i> P-Instagram</h1>
            <form method="post" action="Controllers/Register.php" class="form-signin">
                <h3 class="form-signin-heading">ثبت نام</h3>
                <div class="form-group">
                    <input name="name" type="text" class="form-control" placeholder="نام" value="" >
                </div>
                <div class="form-group">
                    <input name="family" type="text" class="form-control" placeholder="نام خانوادگی" value="" >
                </div>
                <div class="form-group">
                    <input name="phone" type="text" class="form-control" placeholder="تلفن همراه" value="" >
                </div>
                <div class="form-group">
                    <input name="username" type="text" class="form-control" placeholder="نام کاربری" value="" >
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="رمز ورود" >
                </div>
                <button class="kafe-btn kafe-btn-mint btn-block" type="submit">ثبت نام</button>
                <br/>
                <a class="btn btn-dark " href="login.php" role="button">قبلا اکانت ساخته اید؟ وارد شوید</a>
                <a class="btn btn-dark " href="photo_register.html" role="button">رمز عبور خود را فراموش کرده اید؟</a>
            </form>

        </div>
        <!--/. banner-content -->
    </div>
    <!-- /.container -->
</section>

<!-- ==============================================
 Scripts
 =============================================== -->
<script src="view/assets/js/jquery.min.js"></script>
<script src="view/assets/js/bootstrap.min.js"></script>
<script src="view/assets/js/base.js"></script>

</body>

</html>
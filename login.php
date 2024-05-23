<?php
require "./config/config.php";

$title = 'ورود';
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
            <form method="post" class="form-signin" action="Controllers/Login.php">

                <h3 class="form-signin-heading">لطفا وارد شوید</h3>
                <div class="form-group">
                    <input name="username" type="text" class="form-control" placeholder="نام کاربری یا تلفن همراه">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="رمز عبور">
                </div>
                <button class="kafe-btn kafe-btn-mint btn-block" type="submit">ورود</button>
                <br/>
                <a class="btn btn-dark " href="register.php" role="button">برای اولین بار وارد میشوید؟ ثبت نام کنید</a>
                <a class="btn btn-dark " onclick="alert('coming soon')" role="button">رمز عبور خود را فراموش کرده
                    اید؟</a>
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
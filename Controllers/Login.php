<?php

try {
    require "../config/config.php";

    # basic validation

    if (
        empty($_POST['username']) ||
        empty($_POST['password'])
    ) {
        $errors = 'لطفا فیلدی را خالی نگذارید';
        redirect('../login.php?messages=' . $errors);
    }

    extract($_POST);

    # authenticate

    $user = \Models\User::where(['username', '=', $username])->where(['password', '=', md5($password)])->first();

    if (!$user) {
        $errors = 'نام کاربری یا رمز عبور اشتباه است';
        redirect('../login.php?messages=' . $errors);
    }

    # create session for user
    $_SESSION['user_id'] = $user->getId();

    $message = 'با موفقیت وارد شدید';
    redirect('../index.php?messages=' . $message);
} catch (Exception $exception) {
    redirect('../login.php?messages=' . $exception->getMessage());
}



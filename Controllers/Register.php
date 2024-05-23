<?php

try {
    require "../config/config.php";

    # basic validation

    if (
        empty($_POST['name']) ||
        empty($_POST['family']) ||
        empty($_POST['phone']) ||
        empty($_POST['username']) ||
        empty($_POST['password'])
    ) {
        $errors = 'لطفا فیلدی را خالی نگذارید';
        redirect('../register.php?messages=' . $errors);
    }

    extract($_POST);

    # check user exist

    $user = \Models\User::where(['username', '=', $username])->first();

    if ($user) {
        $errors = 'این نام کاربری قبلا ثبت شده است';
        redirect('../register.php?messages=' . $errors);
    }

    # create user

    $user = \Models\User::create(['name' => $name,
        'family' => $family,
        'phone' => $phone,
        'username' => $username,
        'password' => md5($password),
        'picture' => '',
        'account_type' => 'public',
        'created_at' => date('Y-m-d h:m:s'),
        'updated_at' => date('Y-m-d h:m:s')
    ]);

    if (!$user) {
        $errors = 'مشکلی رخ داد در ثبت نام';
        redirect('../register.php?messages=' . $errors);
    }

    $message = 'با موفقیت ثبت نام شده اید وارد شوید';
    redirect('../login.php?messages=' . $message);
} catch (Exception $exception) {
    redirect('../register.php?messages=' . $exception->getMessage());
}

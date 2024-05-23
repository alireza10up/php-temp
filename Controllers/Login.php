<?php

require "../config/config.php";

if (
    empty($_POST['username']) ||
    empty($_POST['password'])
) {
    $errors = 'لطفا فیلدی را خالی نگذارید';
    redirect('../login.php?messages=' . $errors);
}

dd($_POST);
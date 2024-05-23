<?php

require "../config/config.php";

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
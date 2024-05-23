<?php
try {
    require "../config/config.php";

    # logout
    session_destroy();

    redirect('../login.php');
} catch (Exception $exception) {
    redirect('../index.php?messages=' . $exception->getMessage());
}
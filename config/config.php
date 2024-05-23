<?php

/**
 * errors
 */
 
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);

/**
 * constant
 */

define("BASE_PATH",dirname(__DIR__));

/**
 * basic include func
 */

function inc(string $path): void
{
    $fullPath = BASE_PATH . DIRECTORY_SEPARATOR . $path . ".php";
    include str_replace('\\' , '/' , $fullPath);
}

/**
 * sessions
 */

session_start();

/**
 * load utils
 */

inc('config/autoload');
inc('config/database');
inc('config/helpers');

/**
 * messages handle
 */

if(isset($_GET['messages'])) {
    echo "<script>alert(`{$_GET['messages']}`)</script>";
}
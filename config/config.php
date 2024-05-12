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

function inc(string $path)
{
    $fullPath = BASE_PATH . DIRECTORY_SEPARATOR . $path . ".php";
    include str_replace('\\' , '/' , $fullPath);
} 

/**
 * load utils
 */

inc('config/autoload');
inc('config/database');
inc('config/helpers');
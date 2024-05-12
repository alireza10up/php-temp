<?php

require __DIR__."/database.php";

function dd(...$data)
{
    var_dump($data);
    die;
}

function dump(...$data) 
{
    var_dump($data);
}

spl_autoload_register(function ($class_name) {
    $class_file = dirname(__DIR__) . DIRECTORY_SEPARATOR . $class_name . '.php';
    $class_file = str_replace('\\' , '/' , $class_file);
    if (!file_exists($class_file) or !is_readable($class_file)) die($class_name . ' Error To Inc');
    include $class_file;
});
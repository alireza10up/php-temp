<?php

require __DIR__."/database.php";

function dd(...$data)
{
    var_dump($data);
    die;
}

spl_autoload_register(function ($class) {
    require __DIR__."/../$class.php";
});


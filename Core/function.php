<?php

function dd($value)
{

    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function base_path($path){
    return BASE_PATH."{$path}";
}

function view($path, $attributes = [])
{
    extract($attributes);
    require base_path('view/' . $path); // views/index.view.php
}

function abort($statusCode = 404){
    http_response_code($statusCode);
    require base_path('view/404.php');
}
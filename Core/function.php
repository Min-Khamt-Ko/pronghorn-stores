<?php

use Core\Session;

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

function redirect($path){
    header("Location: {$path}");
    exit();
}

function previouseUrl(){
    return $_SERVER['HTTP_REFERER'];
}

function login($user_name,$user_email){
    $_SESSION['user']=[
        'user_name' => $user_name,
        'user_email' => $user_email
    ];
}

function old($key,$default = ""){
    return Session::get('old')[$key] ?? $default;
}
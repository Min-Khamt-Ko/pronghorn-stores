<?php

use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];
$errors=[];


if(!Validator::email($email)){
    $errors['email'] = 'Email is invalid';
}
if(!Validator::isString($password,4,100)){
    $errors =[
        'password' => "Please enter a valid password"
    ];
    require view('/registration/create.view.php',['errors'=>$errors]);
}

redirect('/');
dd("hello world");
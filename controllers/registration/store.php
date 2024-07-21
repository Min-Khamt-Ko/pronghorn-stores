<?php

use Core\Validator;

$user_name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$errors=[];


if(!Validator::isString($user_name,1,20)){
//    $errors['name'] =[
//        "User Name can't be empty or more than 20 characters"
//    ];
    $errors['name'] = "User Name can't be empty or more than 20 characters";
}
if(!Validator::email($email)){
//    $errors[] =[
//        'email' => "Email is invalid"
//    ];
    $errors['email'] = "Email is invalid";
}
if(!Validator::isString($password,4,100)){
//    $errors[''] =[
//        'password' => "Please enter a valid password"
//    ];
    $errors['password'] = "Please enter a valid password";
}
if(count($errors)){
    return view('/registration/create.view.php',['errors'=>$errors]);
}

redirect('/');

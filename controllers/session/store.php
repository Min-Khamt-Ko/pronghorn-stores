<?php

use Core\Authenticator;
use Form\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];


$form = LoginForm::validate($attributes = [
    'email' => $email,
    'password' => $password
]);

$signIn = (new Authenticator())->attempt($attributes['email'], $attributes['password']);

if(!$signIn){
    $form->error('email', "No matching account found for that email address and password.") ->throw();
}
redirect('/');


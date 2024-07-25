<?php

use Core\Authenticator;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];
$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = "Email is invalid";
}
if (!Validator::isString($password, 1, 100)) {
    $errors['password'] = "Please enter a valid password";
}
if (count($errors)) {
    return view('/session/login.view.php', ['errors' => $errors]);
}

$login = new Authenticator($email, $password);

$login->attempt($email, $password);


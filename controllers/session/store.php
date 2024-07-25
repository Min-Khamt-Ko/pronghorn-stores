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
//$config = require base_path('config.php');
//$db = new Database($config['database']);
//
//$user = $db->query("select * from users where email=:email", [
//    ":email" => $email
//])->fetch();
//
//if ($user) {
//    redirect('/login');
//}
//
//$db->query("INSERT INTO users (email, password,name) VALUES (:email, :password,:name)",[
//    ':email' => $email,
//    ':password' => password_hash($password, PASSWORD_DEFAULT),
//    ':name' => $user_name
//]);
//
//login($user_name, $email);
//redirect('/');

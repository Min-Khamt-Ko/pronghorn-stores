<?php

use Core\Authenticator;
use Core\Database;
use Core\Validator;

$user_name = $_POST['name'];
$user_email = $_POST['email'];
$password = $_POST['password'];
$errors = [];


if (!Validator::isString($user_name, 1, 20)) {
    $errors['name'] = "User Name can't be empty or more than 20 characters";
}
if (!Validator::email($user_email)) {
    $errors['email'] = "Email is invalid";
}
if (!Validator::isString($password, 4, 100)) {
    $errors['password'] = "Please enter a valid password";
}
if (count($errors)) {
    return view('/registration/create.view.php', ['errors' => $errors]);
}

$config = require base_path('config.php');
$db = new Database($config['database']);

$user = $db->query("select * from users where email=:email", [
    ":email" => $user_email
])->fetch();

if ($user) {
    redirect('/login');
}

$db->query("INSERT INTO users (email, password,name) VALUES (:email, :password,:name)",[
    ':email' => $user_email,
    ':password' => password_hash($password, PASSWORD_DEFAULT),
    ':name' => $user_name
]);

$current_userID = $db->query('select id from users where email=:email', [
    ':email' => $user_email
])->fetch();

$user_id = $current_userID['id'];

(new Authenticator())->login(['user_email'=>$user_email,'user_id'=>$user_id,'user_name'=>$user_name]);
dd($_SESSION);
login($user_name, $user_email);
redirect('/');

<?php

use Core\Database;
use Core\Validator;

$user_name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$errors = [];


if (!Validator::isString($user_name, 1, 20)) {
    $errors['name'] = "User Name can't be empty or more than 20 characters";
}
if (!Validator::email($email)) {
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
    ":email" => $email
])->fetch();

if ($user) {
    redirect('/login');
}

$db->query("INSERT INTO users (email, password,name) VALUES (:email, :password,:name)",[
    ':email' => $email,
    ':password' => password_hash($password, PASSWORD_DEFAULT),
    ':name' => $user_name
]);

login($user_name, $email);
redirect('/');

<?php

use Core\Authenticator;
use Core\Database;
use Form\RegisterForm;

$user_name = $_POST['name'];
$user_email = $_POST['email'];
$password = $_POST['password'];
$cf_password = $_POST['cf_password'];
$errors = [];

$form = RegisterForm::validate($attributes = [
    'user_name' => $user_name,
    'email' => $user_email,
    'password' => $password
]);

$config = require base_path('config.php');
$db = new Database($config['database']);

$user = $db->query("select * from users where email=:email", [
    ":email" => $user_email
])->fetch();

if ($user) {
    redirect('/login');
}

if(!Authenticator::password_checking($password, $cf_password)){
    $form->error('cf_password',"confirm password should be same with password")->throw();
}

$db->query("INSERT INTO users (email, password,name) VALUES (:email, :password,:name)", [
    ':email' => $user_email,
    ':password' => password_hash($password, PASSWORD_DEFAULT),
    ':name' => $user_name
]);

$current_userID = $db->query('select id from users where email=:email', [
    ':email' => $user_email
])->fetch();

$user_id = $current_userID['id'];

(new Authenticator())->login(['user_email' => $user_email, 'user_id' => $user_id, 'user_name' => $user_name]);
login($user_name, $user_email);
redirect('/');

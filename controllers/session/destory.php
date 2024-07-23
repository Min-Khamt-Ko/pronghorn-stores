<?php

$_SESSION = [];
session_destroy();
$cookie = session_get_cookie_params();
setcookie('PHPSESSID', '', time() - 3600, $cookie['path'], $cookie['domain'], $cookie['secure'], $cookie['httponly']);

redirect('/');


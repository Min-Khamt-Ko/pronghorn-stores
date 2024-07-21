<?php

$config = require base_path('config.php');

$db = new \Core\Database($config['database']);

$users = $db->getAllUsers();
dd($users);

view('index.view.php');

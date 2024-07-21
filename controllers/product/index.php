<?php

$db = new \Core\Database();

$users = $db->getAllUsers();
dd($users);

view('index.view.php');

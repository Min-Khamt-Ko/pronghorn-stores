<?php

use Core\Database;

$productId = $_POST['id'];


$config = require base_path('config.php');
$db = new Database($config['database']);

$product = $db->query("delete from products where id = $productId");

redirect('/collections');
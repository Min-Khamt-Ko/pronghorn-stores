<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);


$products = $db->query("SELECT * FROM products")->get();

view('collections.view.php',[
    'products' => $products
]);
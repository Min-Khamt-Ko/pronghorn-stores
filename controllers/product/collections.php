<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$productId= 1;

$products = $db->query("SELECT * FROM products")->get();

view('collections.view.php',[
    'products' => $products
]);
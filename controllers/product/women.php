<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$products = $db->query("select * from products where category=:category", [
    ":category" => 'women'
])->get();

view('men.view.php',[
    'products' => $products
]);
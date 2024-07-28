<?php

use Core\Database;

$productId= $_GET['id'];
$config = require base_path('config.php');
$db = new Database($config['database']);


$product = $db->query("select * from products where id=:id", [
    ":id" => $productId
])->fetch();

view('product/index.view.php',[
    'product' => $product
]);



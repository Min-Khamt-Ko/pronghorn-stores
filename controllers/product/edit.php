<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);
$productId = $_GET['id'];
$product = $db->query("SELECT * FROM products WHERE id = :id",[
    ':id' => $productId
])->fetch();
view('product/edit.view.php',[
    'product' => $product,
]);

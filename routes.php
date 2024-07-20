<?php


$router->get('/', 'controllers/product/index.php');
$router->get('/men', 'controllers/product/men.php');
$router->get('/women', 'controllers/product/women.php');
$router->get('/bags', 'controllers/product/bags.php');
$router->get('/collections', 'controllers/product/collections.php');

$router->get('/login', 'controllers/registration/create.php');
$router->post('/login', 'controllers/registration/store.php');






<?php


$router->get('/', 'controllers/product/index.php');
$router->get('/men', 'controllers/product/men.php');
$router->get('/women', 'controllers/product/women.php');
$router->get('/bags', 'controllers/product/bags.php');
$router->get('/collections', 'controllers/product/collections.php')->only('auth');

$router->get('/register', 'controllers/registration/create.php')->only('guest');
$router->post('/register', 'controllers/registration/store.php')->only('guest');

$router->get('/login', 'controllers/session/login.php')->only('guest');
$router->post('/login', 'controllers/session/store.php');
$router->delete('/session', 'controllers/session/destory.php');

$router->get('/add-product', 'controllers/product/addProduct.php')->only('auth');
$router->post('/product-info', 'controllers/product/product-info.php')->only('auth');

$router->get('/product', 'controllers/product/product.php');
$router->get('/edit', 'controllers/product/edit.php')->only('auth');
$router->patch('/update', 'controllers/product/update.php')->only('auth');
$router->delete('/destory', 'controllers/product/destory.php')->only('auth');






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






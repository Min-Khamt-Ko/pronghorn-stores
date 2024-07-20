<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . "Core/function.php";

require BASE_PATH . "Core/routes.php";

$uri = $_SERVER['REQUEST_URI'];

//if(array_key_exists($uri,$routes)){
//    return require base_path($routes[$uri]);
//    exit();
//}

require base_path('Core/Router.php');
$router = new Core\Router();

$router->get('/', 'controllers/product/index.php');
$router->get('/men', 'controllers/product/men.php');
$router->get('/women', 'controllers/product/women.php');

$router->getter();

abort();








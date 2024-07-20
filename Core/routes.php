<?php


//$routes = [
//    '/' => 'controllers/product/index.php',
//    '/men' => 'controllers/product/men.php',
//    '/women' => 'controllers/product/women.php',
//    '/bags' => 'controllers/product/bags.php',
//    '/collections' => 'controllers/product/collections.php',
//];

$router = new Core\Router();

$router->get('/', 'controllers/product/index.php');

$router->getter();




<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . "Core/function.php";

spl_autoload_register(function ($class) {
    $class = str_replace("\\", "/", $class) . ".php";
    require BASE_PATH . $class;
});

require base_path('Core/Router.php');
$router = new Core\Router();
$routes = require base_path('routes.php');

$url = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
$router->route($url, $method);


//$router->getter();
//
//abort();








<?php

use Core\Session;
use Core\ValidationException;

session_start();
const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . "Core/function.php";

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
//     var_dump($class);
    require base_path("{$class}.php");
});


$router = new Core\Router();

$routes = require base_path('routes.php');

$url = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

try {
$router->route($url, $method);
}
catch(ValidationException $exception){
    Session::flash('errors', $exception->errors);
    Session::flash('old',$exception->old);

    return redirect($_SERVER['HTTP_REFERER']);
}

Session::unflash();










<?php

namespace Core;

class Router
{
    protected $routes = [];
//    $routes=[
//        '/' => [
//            'url'=>'/',
//            'controllers' => 'controllers/product/index.php',
//            'method' => 'GET',
//            'middleware' => null
//]
    public function add($url, $controller, $method)
    {
        $this->routes[] = [
            'url' => $url,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null
        ];
        return $this;
    }

    public function get($url, $controller)
    {
        return $this->add($url, $controller, 'GET');
    }

    public function post($url, $controller)
    {
        return $this->add($url, $controller, 'POST');
    }

    public function put($url, $controller)
    {
        return $this->add($url, $controller, 'PUT');
    }

    public function delete($url, $controller)
    {
        return $this->add($url, $controller, 'DELETE');
    }

    public function patch($url, $controller)
    {
        return $this->add($url, $controller, 'PATCH');
    }

    public function abort($statusCode = 404){
        http_response_code($statusCode);
        require base_path('view/404.php');
        exit();
    }

    public function only($key){
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;
    }

    public function route($url, $method)
    {
        foreach ($this->routes as $route){
            if ($route['url'] === $url && $route['method'] === strtoupper($method)) {
                if($route['middleware'] == 'guest'){
                    if($_SESSION['user'] ?? false){
                        redirect('/');
                    }
                }
                return require base_path($route['controller']);
            }
        }
        $this -> abort();
    }

}
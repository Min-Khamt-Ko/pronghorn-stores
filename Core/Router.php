<?php

namespace Core;

class Router
{
    public $routes=[];
//    $routes=[
//        '/' => [
//            'url'=>'/',
//            'controllers' => 'controllers/product/index.php',
//            'method' => 'GET',
//            'middleware' => null
//]

    public function get($url,$controller){
        $this -> routes[$url] = [
            'url' => $url,
            'controllers' => $controller,
            'method' => 'GET'
        ];
    }

    public function getter(){
        dd($this->routes);
    }

}
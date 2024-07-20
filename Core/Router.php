<?php

namespace Core;

class Router
{
    public $routes=[];
    public function get($url,$controller){
        $this -> routes =[
            $url => $controller,
        ];
    }

    public function getter(){
        return $this->routes;
    }

}
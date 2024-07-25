<?php

namespace Core\Middleware;

class Middleware
{
    private const MAP = [
        'guest' => Guest::class,
        'auth'  => Auth::class
    ];

    public static function resolve ($key){
        if(!$key){
            return;
        }
        $middleware = static::MAP[$key];

        if(!$middleware ?? false){
            throw new \Exception('Not found related middleware');
        }
        (new $middleware()) -> handle();
    }


}
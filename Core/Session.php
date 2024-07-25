<?php

namespace Core;

class Session
{
    public static function get($key, $default = null){
        return $_SESSION['_flash'][$key] ?? $_SESSION['key'] ?? $default;
    }

    public static function set($key, $value){
        $_SESSION[$key] = $value;
    }

    public static function flash($key, $value){
        $_SESSION['_flash'][$key] = $value;
    }

    public static function unflash(){
        unset($_SESSION['_flash']);
    }

    public static function flush(){
        $_SESSION = [];
    }

}
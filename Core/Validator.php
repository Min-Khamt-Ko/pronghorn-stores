<?php

namespace Core;

class Validator
{
    public static function isString($value,$min=1,$max= INF){
        if(strlen(trim($value))>=$min && strlen(trim($value)) <= $max ){
            return true;
        }
        else{
            return false;
        }
    }

    public static function email($value){
        if(filter_var($value, FILTER_VALIDATE_EMAIL)){
            return true;
        }
    }
}
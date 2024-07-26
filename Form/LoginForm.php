<?php

namespace Form;

use Core\ValidationException;
use Core\Validator;

class LoginForm
{
    public $attributes;
    private $errors = [];

    public function __construct($attributes)
    {
        $this -> attributes = $attributes;
        if (!Validator::email($attributes['email'])) {
            $this->errors['email'] = "Email is invalid";
        }
        if (!Validator::isString($attributes['password'], 1, 100)) {
            $this->errors['password'] = "Please enter a valid password";
        }
    }

    public static function validate($attributes)
    {
        $instance = new static($attributes);

        return $instance -> failed() ? $instance->throw() : $instance;
    }

    public function throw(){
        ValidationException::throw($this->errors(), $this->attributes);
    }

    public function failed(): bool
    {
        return count($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }

    public function error($field, $message)
    {
        $this->errors[$field] = $message;
        return $this;
    }


}
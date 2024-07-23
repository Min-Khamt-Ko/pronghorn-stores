<?php

namespace Core;

class Authenticator
{
    protected $db;
    public function __construct(){
        $config = require base_path('config.php');
        $this -> db = new Database($config['database']);
    }

    public function attempt($email, $password){
        $user = $this ->db ->query('select * from users where email = :email',[
            'email' => $email
        ])->fetch();
        if($user){
            if(password_verify($password, $user['password'])){
                $this -> login(['email'=>$user['email'],'user_id'=>$user['id'],'user_name'=>$user['name']]);
                return true;
            }
        }
            return false;

    }

    public function login($user){

    }



}
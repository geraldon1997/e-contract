<?php

require 'db.php';

class Log extends Connect{
    public function login($user,$pass){
        header('location:'.URL.'pages');
    }

    public function logout(){
        session_destroy();
        header('location:'.URL.'');
    }
}
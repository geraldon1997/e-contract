<?php

class Log extends Connect{
    public function login($user,$pass){
        $sql = "SELECT * FROM `user` WHERE `username` = '$user' AND `password` = '$pass' ";
        $result = $this->link->query($sql);
        if ($result->num_rows > 0) {
            header('location:'.URL.'pages');
            session_start();
            $_SESSION['user'] = $user;
        }
    }

    public function logout(){
        session_destroy();
        header('location:'.URL.'');
    }
}
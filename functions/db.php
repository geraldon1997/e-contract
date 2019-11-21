<?php

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','econtract');
define('URL','http://localhost/e-contract/');

class Connect{

    public function __construct(){
        $this->link = new mysqli(HOST,USER,PASS,DB);

        if(!$this->link){
            return "error in connection, please contact webmaster".mysqli_errno;
        }
    }
}

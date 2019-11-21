<?php
require 'db.php';

class Contractor extends Connect{
    public function __construct(){
        parent::__construct();
    }

    public function insert($data){
        $val = implode("','", $data);
        $val = "'".$val."'";

    $sql = "INSERT INTO `contractor` 
        (
            `company_name`,
            `tax_number`,
            `cert_no_of_inc`,
            `address`,
            `phone`,
            `email`,
            `business_type`,
            `business_nature`,
            `approved`
        ) VALUES (
            $val,
            true
        )";

    $this->link->query($sql);
    header('location: ../pages/');
    }
}
<?php 

require 'db.php';

class Seed extends Connect{
    
    public function __construct(){
        self::createDatabase();
    }

    public function seeder(){
        parent::__construct();
        self::createRole();
        self::createUser();
        self::createContract();
        self::createContractor();
    }

    public function createDatabase(){
        $con = new mysqli('localhost','root','');
        $sql = "CREATE DATABASE IF NOT EXISTS econtract";
        $con->query($sql);
        
    }

    public function createRole(){
        $sql = "CREATE TABLE IF NOT EXISTS `role` (
            `role_id` INT(11) PRIMARY KEY,
            `name` CHAR(45)
        )";
        $this->link->query($sql);
    }

    public function createUser(){
        $sql = "CREATE TABLE IF NOT EXISTS `user` (
            `user_id` INT(11) PRIMARY KEY,
            `role_id` INT(11),
            `name` CHAR(145),
            `email` CHAR(45),
            `phone` CHAR(11),
            `username` CHAR(12),
            `password` CHAR(18),
            `enabled` BOOLEAN,
            FOREIGN KEY(`role_id`) REFERENCES `role`(`role_id`)
        )";
        $this->link->query($sql);
    }

    public function createContract(){
        $sql = "CREATE TABLE IF NOT EXISTS `contract` (
            `contract_id` INT(11) PRIMARY KEY,
            `contract_no` CHAR(10),
            `type` CHAR(45),
            `date-created` DATE,
            `expire-date` DATE,
            `sender` CHAR(135),
            `receipients` TEXT,
            `subject` CHAR(175),
            `message` TEXT,
            `state` BOOLEAN,
            `status` CHAR(45),
            `originating_department` CHAR(45),
            `bid_document` CHAR(255)
        )";
        $this->link->query($sql);
    }

    public function createContractor(){
        $sql = "CREATE TABLE IF NOT EXISTS `contractor` (
            `contractor_id` INT(11) PRIMARY KEY,
            `user_id` INT(11),
            `company_name` CHAR(145),
            `tax_number` CHAR(45),
            `cert_no_of_inc` CHAR(20),
            `address` CHAR(255),
            `phone` CHAR(25),
            `email` CHAR(45),
            `business_type` CHAR(45),
            `business_nature` CHAR(45),
            `approved` BOOLEAN,
            FOREIGN KEY(`user_id`) REFERENCES `user`(`user_id`)
        )";
        $this->link->query($sql);
    }

    public function createBids(){
        $sql = "CREATE TABLE IF NOT EXISTS bids (
            `bid_id` INT(11) PRIMARY KEY,
            `contracted` INT(11),
            `contractor_id` INT(11),
            `amount` DECIMAL(10,2),
            `date_received` DATE,
            `envelope_content` CHAR(255),
            `enabled` BOOLEAN,
            FOREIGN KEY(`contractor_id`) REFERENCES `contractor`(`contractor_id`)
        )";
        $this->link->query($sql);
    }

    public function createBidMember(){
        $sql = "CREATE TABLE IF NOT EXISTS `bidmember` (
            `member_name` CHAR(145),
            `member_id`
        )";
    }
}


$a = new Seed();
$a->seeder();
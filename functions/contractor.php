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
        header('location:'.URL.'pages');
    }

    public function read(){
        $sql = "SELECT * FROM `contractor`";
        $result = $this->link->query($sql);

        while ($row = $result->fetch_assoc()) {
            $id = $row['contractor_id'];
            $cn = $row['company_name'];
            $tn = $row['tax_number'];
            $ad = $row['address'];
            $bt = $row['business_type'];
            $bn = $row['business_nature'];

            echo "<tr>
                    <td>$id</td>
                    <td>$cn</td>
                    <td>$tn</td>
                    <td>$ad</td>
                    <td>$bt</td>
                    <td>$bn</td>
                </tr>";
        }
    }
}
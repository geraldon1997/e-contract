<?php

require 'db.php';

class Contract extends Connect{
    public function __construct(){
        parent::__construct();
    }

    public function insert($data){
        $val = implode("','",$data);
        $val = "'".$val."'";

        $sql = "INSERT INTO `contract` 
        (
            `contract_no`,
            `type`,
            `date-created`,
            `expire-date`,
            `subject`,
            `originating_department`,
            `status`,
            `sender`
        ) VALUES ($val,'ongoing','ministry of works')";

        $this->link->query($sql);
        
    }

    public function read(){
        $sql = "SELECT * FROM `contract`";
        $result= $this->link->query($sql);

        while ($row = $result->fetch_assoc()) {
            $cn = $row['contract_no'];
            $ty = $row['type'];
            $ed = $row['expire-date'];
            $se = $row['sender'];
            $st = $row['status'];
            $su = $row['subject'];

            echo "<tr>
                    <td>$cn</td>
                    <td>$su</td>
                    <td>$se</td>
                    <td>$ed</td>
                    <td>$ty</td>
                    <td>$st</td>
                </tr>";
        }
    }
}
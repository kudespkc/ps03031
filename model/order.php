<?php

    class Oder {
    public function __construct() {
    }
    public function CreateOder($UserID){
        $db= new connect();
        $date = new DateTime("now");
        $dateCreate = $date->format("Y-m-d");
        $select = "INSERT INTO `order` values('NULL','$dateCreate','0','$UserID')";
        $db->exec($select);
        $int = $db->getInstance("SELECT `orderId` from `order` order by `orderId` DESC limit 1");
        return $int[0];
    }
    function insertOderDetail($oderID,$proID,$proName,$price,$Quantily,$Total){
        $db = new connect();
        $strQuery = "INSERT INTO `order_detail` values ('$oderID','$proID','$proName','$price','$Quantily','$Total')";
        $result = $db->exec($strQuery);
    }
     public function updateOderTotal($oderID,$Total){
        $db = new connect();
        $strQuery = "UPDATE `order` SET `total` = $Total WHERE `orderId` = $oderID";
        $result = $db->exec($strQuery);
    }
    public function getOrder($oderID){
        $db= new connect();
        $select = "SELECT * FROM `order` WHERE `OrderId`= '$oderID'";
        $result = $db->getInstance($select);
        return $result;
    }
    public function getOderDetail($orderId){
        $db= new connect();
        $select= "SELECT `order`.`OrderId`, `Date`, `order`.`Total`, `UserId`, `ProPrice`, `Qty`, `ProName` FROM `order` INNER JOIN `order_detail` ON `order`.`OrderId` = `order_detail`.`OrderId` WHERE `order`.`OrderId` = '$orderId'";
        $result = $db->getList($select);
        return $result;
    }
    function getlistorder(){
        $db = new connect();
        $select = "select * from `order`";
        $result = $db->getList($select);
        return $result;
    }
}
?>

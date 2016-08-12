<?php
class product {
    var $ProId = null;
    var $ProName = null;
    var $ProImage = "../view/website/images";
    var $ProDes = null;
    var $ProPrice = null;
    public function __construct() {}
    // Lay ds san pham
    function getProlist(){
        $db = new connect();
        $select = "SELECT * FROM product ORDER BY ProId DESC";
        $result = $db->getList($select);
        return $result;
    }
    function getProId($id){
     $db= new connect();
     $select="select * from product where ProId=$id";        
     $result = $db->getInstance($select);
     return $result;
    }
    function deletePro($id){
        $db = new connect();
        $select="delete from product where ProId=$id";
        $result = $db->exec($select);
    }
    function update($name,$hinhanhsp,$des,$price,$id){
        $db = new connect();
        $select="update product set ProName = '$name', ProImage = '$hinhanhsp', ProDes = '$des', ProPrice = '$price' where ProId='$id'";
        $result = $db->exec($select);
        return $result;
    }
}

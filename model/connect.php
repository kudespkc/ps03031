<?php
class connect {
    function __construct() {
    $dsn = "mysql:host=localhost;dbname=ps03031_shophoa";
    $user = "root";
    $passwd = "";
    $this->db=new PDO($dsn,$user,$passwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }
    public function getList($select){
    $results = $this->db->query($select);
    return $results;
    }
    public function exec($query)
    {
    $result = $this->db->exec($query);
    return $result; 
    }
    function getInstance($select){
       $results = $this -> db -> query($select);
       $result = $results -> fetch();
       return $result;
   }
}


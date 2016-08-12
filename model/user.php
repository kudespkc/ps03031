<?php

class user {
   
    var $UserID = null;
    var $UserName = null;
    var $Password = null;
    var $FullName = null;
    var $Email = null;
    var $Address = null;
    var $Phone = null;
    var $Avatar = null;
    
    public function __construct() {}
    
    function login($user,$pass){
        $db=new connect();
        $str="select * from `user` where `UserName`='$user' and `Password`='$pass'";
        $r=$db->getInstance($str);
        return $r;
    }
    function getUserId($id){
        $db = new connect();
        $str = "select * from user where UserID = '$id'";
        $result = $db->getInstance($str);
        return $result;
    }
    function updateUser($Name,$Password,$Email,$Address,$Phone,$Avatar,$id){
        $db = new connect();
        $str = "update user set FullName = '$Name', Password = '$Password', Email = '$Email', Address = '$Address', Phone = '$Phone', Avatar = '$Avatar' where UserId = '$id'";
        $result = $db->exec($str);
        return $result;
    }
}

?>


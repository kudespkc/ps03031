<?php
include '../model/connect.php';
include '../model/classPro.php';
include '../model/order.php';
include '../model/cart.php';
include '../model/user.php';


session_start();


if (isset($_GET["action"]))
    $action = $_GET["action"];

elseif (isset($_POST['action'])) {
    $action = $_POST["action"];
} else
    $action = "home";
switch ($action) {
    // Gọi trang home
    case "home":
        include '../view/website/home.php';
        break;
    case "addproduct":
        include '../view/website/addProduct.php';
        break;
    case "addproducts":
        $name = $_POST["txtName"];
        $hinhanhsp = $_FILES["file"]["name"];
        $des = $_POST["txtDes"];
        $price = $_POST["txtPrice"];
        move_uploaded_file($_FILES["file"]["tmp_name"],"../view/website/images/" . $_FILES["file"]["name"]);
        $db = new connect();
        $query = "INSERT INTO product(ProName,ProImage,ProDes,ProPrice)VALUES ('$name','$hinhanhsp','$des','$price')";
        $db->exec($query);
        echo "<script>alert('Thêm thành công');</script>";
        include '../view/website/admin.php';
        break;
    case "updateproduct":
        $id = $_POST['txtId'];
        $name = $_POST["txtName"];
        $hinhanhsp = $_FILES["file"]["name"];
        $des = $_POST["txtDes"];
        $price = $_POST["txtPrice"];
        if($_FILES['file']['name'] != NULL)
            {
            $image = $_FILES["file"]["name"];
            move_uploaded_file($_FILES["file"]["tmp_name"],"../view/website/images/" . $_FILES["file"]["name"]);
            }
        else {
            $db = new product();
            $hinhanh = $db->getProId($id);
            $hinhanhsp = $hinhanh['ProImage'];
        }
        $db = new product();
        $update = $db->update($name, $hinhanhsp, $des, $price, $id);
        include '../view/website/admin.php';
        break;
    case "product_detail":
        include '../view/website/productdetail.php';
        break;
    case 'order':
        if (!isset($_SESSION['cus_to_mer'])) {
            echo '<script> alert("Quý khách vui lòng đăng nhập để thanh toán!");</script>';
            include '../view/website/login.php';
        } else {
            $o = new Oder();
            $orderId = $o->CreateOder($_SESSION['cus_to_mer']);
            $_SESSION['oder_id'] = $orderId;
            $total = 0;
            foreach ($_SESSION['cart'] as $key => $item) {
                $o->insertOderDetail($orderId, $key, $item['name'],$item['cost'], $item['qty'], $item['total']);
                $total+=$item['total'];
            }
            $o->updateOderTotal($orderId, $total);
            include '../view/website/order.php';
        }
    break;
    case "login":
        include '../view/website/login.php';
        break;
    case "register":
        include '../view/website/register.php';
        break;
    case "registerpro":
        $User = $_POST["txtUser"];
        $Password = $_POST["txtPassword"];
        $FullName = $_POST["txtFullName"];
        $Email = $_POST['txtEmail'];
        $Address = $_POST['txtAddress'];
        $Phone = $_POST['txtPhone'];
        $Avatar = $_FILES["file"]["name"];
        move_uploaded_file($_FILES["file"]["tmp_name"],"../view/website/images/" . $_FILES["file"]["name"]);
        $db = new connect();
        $query = "INSERT INTO user (UserId,UserName,Password,FullName,Email,Address,Phone,Avatar) VALUES ('','$User','$Password','$FullName','$Email','$Address','$Phone','$Avatar')";
        $db->exec($query);
        echo "<script>alert('Đăng ký thành công');</script>";
        include '../view/website/login.php';
        break;
    case "dangnhap":
        $user = $_POST['txtUser'];
        $pass = $_POST['txtPass'];
        $u = new user();
        $us = $u->login($user, $pass);
        if (count($us) != 1) {
            $_SESSION['cus_to_mer'] = $us[0];
            include '../view/website/home.php';
        } else {
            echo '<script> alert("Sai user hoac pass!");</script>';
            include '../view/website/login.php';
        }
        break;
    case "logout":
        if (isset($_SESSION['cus_to_mer'])){
        $_SESSION = array();
        session_destroy();
        include '../view/website/home.php';
        }
        break;
        
    case "update_cart":
        $new_list = $_POST['newqty']; // array
        foreach ($new_list as $key => $qty) { // $key = id ( [?] ) 
            if ($_SESSION['cart'][$key] != $qty) {
                update_item($key, $qty);
            }
        }
        include '../view/website/cartview.php';
        break;
    case "empty_cart":
        unset($_SESSION['cart']);
        include '../view/website/cartview.php';
        break;
    case "remove_item":
        $id = $_GET['id'];
        break;
    case "add_cart":
        add_item($_POST['productkey'], $_POST['itemqty']);
        header("Location:index.php?action=giohang_view");
        break;
    case "giohang_view":
        include "../view/website/cartview.php";        
        break;
    case "admin":
        include '../view/website/admin.php';
        break;
    case "orderlist":
        include '../view/website/orderlist.php';
        break;
    case "order_detail":
        include '../view/website/order_detail.php';
        break;
    case "editpro":
       include '../view/website/editPro.php';
       break;
    case "delete":
       $id = $_GET['id'];
       $pro = new product();
       $pro->deletePro($id);
       header ("Location:../controller/index.php?action=admin");
       break;
    case "userprofile":
       include '../view/website/userprofile.php';
       break;
    case "userupdate":
       include '../view/website/userupdate.php';
       break;
    case "updateprofile":
        $id = $_POST['txtId'];
        $Name = $_POST['txtName'];
        $Password = $_POST['txtPassword'];
        if($_FILES['file']['name'] != NULL)
            {
            $Avatar = $_FILES["file"]["name"];
            move_uploaded_file($_FILES["file"]["tmp_name"],"../view/website/images/" . $_FILES["file"]["name"]);
            }
        else {
            $db = new user();
            $Avat = $db->getUserId($id);
            $Avatar = $Avat['Avatar'];
        }
        $Email = $_POST['txtEmail'];
        $Address = $_POST['txtAddress'];
        $Phone = $_POST['txtPhone'];
        $up = new user();
        $update = $up->updateUser($Name, $Password, $Email, $Address, $Phone, $Avatar, $id);
        include '../view/website/userprofile.php';
        
     }
    

?>
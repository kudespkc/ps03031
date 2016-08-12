<?php 
    if(!isset($_SESSION['cus_to_mer'])){
    header("Location:".$_SERVER['SCRIPT_NAME']."?action=login");
}?>
<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop hoa tươi</title>
    <!-- Bootstrap -->
    <link href="../view/website/css/bootstrap.min.css" rel="stylesheet">
    <link href="../view/website/css/style.css" rel="stylesheet">
    <link href="../view/website/css/animate.css" rel="stylesheet">    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../view/website/css/font-awesome.min.css">
    <!-- Slide -->
    <script type="text/javascript" src="../view/website/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="../view/website/js/jssor.slider.mini.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="header">
     <div class="top">
      <div class="container">
          <div class="row">
            <div class="col-lg-6">
            </div>
                <div class="col-lg-6">
                    <ul class="nav nav-top navbar-right">
                        <li><a href="?action=home" title="Home"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="?action=userprofile" title="Tài khoản"><i class="fa fa-user"></i> Tài khoản</a></li>
                        <li><a href="?action=giohang_view" title="Giỏ hàng"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                        <?php if(isset($_SESSION['cus_to_mer']))
                        {
                            $username = $_SESSION['cus_to_mer'];
       
                            echo '<li><a href="?action=admin"><i class="fa fa-user"></i> Xin chào! (Admin)</a></li>';
                            echo '<li><a href="?action=logout"><i class="fa fa-sign-out"></i> Thoát</a></li>';
                        }
                            else {
                                echo '<li><a href="?action=login" title="Đăng nhập"><i class="fa fa-sign-in"></i> Đăng nhập</a></li>';
                            }
                                
                        ?>
                    </ul>
               </div>
          </div>
      </div>
     </div>
    </div>
      <?php
        $pro = new user();
        $profile = $pro->getUserId($_SESSION['cus_to_mer']);
//        print_r($profile);
      ?>
<script>
            function change(){
                document.getElementById('file').click();
            }
</script>
<div class="container">
    <h2>Sửa thông tin</h2>
    <form action="?action=updateprofile" method="post" enctype='multipart/form-data'>
        <input type="hidden" class="form-control" id="name" name="txtId" value="<?php echo $profile['UserId'] ?>">
        <div class="form-group"">
            <label for="name">Tên User:</label>
            <input type="text" class="form-control" id="name" name="txtName" value="<?php echo $profile['FullName'] ?>">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="txtPassword" value="<?php echo $profile['Password'] ?>">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" id="txtEmail" name="txtEmail" value="<?php echo $profile['Email'] ?>">
        </div>
        <div class="form-group">
            <label for="image">Avatar:</label>
            <img class="img-thumbnail img-responsive" src="../view/website/images/<?php echo $profile['Avatar'] ?>" onclick="change()" style="cursor: pointer; max-height: 150px;"><br/>
            <input type="file" id="file" name="file" style="opacity:0; height:0px;width:0px;">
        </div>
        <div class="form-group">
            <label for="Address">Địa chỉ:</label>
            <input type="text" class="form-control" id="Address" name="txtAddress" value="<?php echo $profile['Address'] ?>">
        </div>
        <div class="form-group">
            <label for="Phone">Điện thoại:</label>
            <input type="text" class="form-control" id="price" name="txtPhone" value="<?php echo $profile['Phone'] ?>">
        </div>
        <button type="submit" class="btn btn-success" value="submit">Sửa thông tin</button>
    </form>
</div>

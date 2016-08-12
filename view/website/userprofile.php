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
      <div class="container profile-content">
          <div class="row">
            <div class="col-md-6">
                <div class="grow pic fadeIn animated"><img src="../view/website/images/<?php echo $profile['Avatar']?>" title="That`s me!" alt="My Profile" class="img-responsive center-block img-thumbnail" style="max-width: 300px;"></div>
                <h1 class="text-center fadeIn animated" style="color: darkcyan; font-weight: 700;"><?php echo $profile['FullName'] ?></h1>
            </div>
            <div class="col-md-6 profile fadeIn animated">
                    <ul>
                            <li><i class="fa fa-user-secret"></i> <?php echo $profile['FullName'] ?></li>
                            <li><i class="fa fa-home"></i> <?php echo $profile['Address'] ?></li>
                            <li><i class="fa fa-envelope"></i> <?php echo $profile['Email'] ?></li>
                            <li><i class="fa fa-phone-square"></i> <?php echo $profile['Phone'] ?></li>
                            <a href="https://fb.com/destinypkc" class="social"><i class="fa fa-facebook-official fa-lg"></i></a>
                            <a href="https://google.com" class="social"><i class="fa fa-google-plus fa-lg"></i></a>
                            <a href="https://youtube.com" class="social"><i class="fa fa-youtube-play fa-lg"></i></a></li>
                            <li><a href="?action=userupdate" class="btn btn-info">Sửa thông tin</a></li>
                    </ul>
            </div>	
          </div>
      </div>

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
            <div class="col-lg-7">
            </div>
                <div class="col-lg-5">
                    <ul class="nav nav-top navbar-right">
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
        <div class="header-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 fadeInLeft animated">
                        <img src="../view/website/images/logo.png" class="img-responsive" style="max-height: 89px; margin-top: 10px;">
                    </div>
                    <div class="col-lg-5">
                        <img src="../view/website/images/ads.jpg" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
      <div id="nav">
        <nav class="nav nav-container">
            <div class="container">
                <div class="navbar-header">
                    <ul class="nav navbar-nav fadeInDown animated">
                        <li><a href="?action=home">Trang chủ</a></li>
                        <li><a href="?action=home">Sản phẩm</a></li>
                        <li><a href="?action=home">Giới thiệu</a></li>
                        <li><a href="?action=home">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </nav>
      </div>
    <section class="col-lg-12 slide">
        <div class="container">
            <div id="main-carousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper For Slides Starts -->
                    <div class="carousel-inner">
                            <div class="item">
                                <img src="../view/website/images/01.jpg" alt="Slider" class="img-responsive" style="max-height: 348px;">
                            </div>
                            <div class="item active">
                                <img src="../view/website/images/02.jpg" alt="Slider" class="img-responsive" style="max-height: 348px;">
                            </div>
                            <div class="item">
                                <img src="../view/website/images/03.jpg" alt="Slider" class="img-responsive" style="max-height: 348px;">
                            </div>
                    </div>
            <!-- Wrapper For Slides Ends -->
            <!-- Controls Starts -->
                    <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
            <!-- Controls Ends -->
            </div>	
        </div>
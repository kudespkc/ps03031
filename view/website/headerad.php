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
  <div id="nav">
        <nav class="nav nav-container">
            <div class="container">
                <div class="navbar-header">
                    <ul class="nav navbar-nav">
                        <li><a href="?action=home">Home</a></li>
                        <li><a href="?action=admin">DS sản phẩm</a></li>
                        <li><a href="?action=addproduct">Thêm sản phẩm</a></li>
                        <li><a href="?action=orderlist">Danh sách Order</a></li>
                        <?php if(isset($_SESSION['cus_to_mer']))
                        {
                            $username = $_SESSION['cus_to_mer'];
       
                            echo '<li><a href="?action=logout"><i class="fa fa-sign-out"></i> Thoát</a></li>';
                        }
                            else {
                                echo '<li><a href="?action=login" title="Đăng nhập"><i class="fa fa-sign-in"></i> Đăng nhập</a></li>';
                            }
                                
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
  </div>
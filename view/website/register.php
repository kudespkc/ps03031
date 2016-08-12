<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Register Account</title>
    <link rel="stylesheet" href="../view/website/css/login.css">
  </head>
  <body>
    <div class="login-page">
  <div class="form">
      <form class="register-form" action="?action=registerpro" method="post">
      <input type="text" id="txtUser" placeholder="name"/>
      <input type="password" id="txtPass" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="?action=login">Sign Up</a></p>
    </form>
    <form class="login-form" action="?action=registerpro" method="post" enctype='multipart/form-data'>
      <input type="text" id="txtUser" name="txtUser" placeholder="Nhập User Name"/>
      <input type="password" id="txtPass" name="txtPassword" placeholder="Nhập Password"/>
      <input type="text" id="txtPass" name="txtFullName" placeholder="Nhập Họ Tên"/>
      <input type="text" id="txtPass" name="txtEmail" placeholder="Nhập Email"/>
      <input type="text" id="txtPass" name="txtAddress" placeholder="Nhập Địa Chỉ"/>
      <input type="text" id="txtPass" name="txtPhone" placeholder="Nhập SĐT"/>
      <input type="file" class="form-control" id="file" name="file">
      <button>Đăng ký</button>
      <p class="message">Have Account? <a href="?action=login">Login</a></p>
    </form>
  </div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="../view/website/js/index.js"></script> 
  </body>
</html>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Shop</title>
    <link rel="stylesheet" href="../view/website/css/login.css">
  </head>
  <body>
    <div class="login-page">
  <div class="form">
      <form class="register-form" action="?action=dangnhap" method="post">
      <input type="text" id="txtUser" placeholder="name"/>
      <input type="password" id="txtPass" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="?action=login">Sign In</a></p>
    </form>
    <form class="login-form" action="?action=dangnhap" method="post">
      <input type="text" id="txtUser" name="txtUser" placeholder="username"/>
      <input type="password" id="txtPass" name="txtPass" placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="?action=register">Create an account</a></p>
    </form>
  </div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="../view/website/js/index.js"></script> 
  </body>
</html>

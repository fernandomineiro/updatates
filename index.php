<?php
session_start();
include "config.php";

if (@$_SESSION['nome']!= ""){
  echo "<script>window.location = 'principal.php'</script>";
}


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CICS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="segunda.png" style="max-width:200px;
    max-height:150px;
    width: auto;
    height: auto;">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Entre com seu email e senha</p>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="senha" placeholder="Senha">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember"> Me lembre
            </label>
          </div>
        </div>
        <?php
        echo @$_SESSION['message'];
        ?>
        <!-- /.col -->
        <div class="col-xs-4">
          <input type="submit"class="btn btn-primary btn-block btn-flat" value="Entrar" name="login" >
             </div>
        <!-- /.col -->
      </div>
    </form>

    
    <!-- /.social-auth-links -->

    <a href="recuperarsenha.php">Eu perdi minha senha</a><br>
    

  </div>
  <!-- /.login-box-body -->
</div>
<?php
if(isset($_POST['login'])){
 
  

  $username=$_POST['email'];
  $password=$_POST['senha'];

  $query=mysqli_query($conn,"select * from `usuario` where email='$username' && senha='$password'");

  if (mysqli_num_rows($query) == 0){
    $_SESSION['message']="Email ou senha incorretos";
    header('location:index.php');
  }
  else{
    $row=mysqli_fetch_array($query);

    if (isset($_POST['remember'])){
      //set up cookie
      
      setcookie('sistema', time() + (86400 * 30)); // cookie will expire in a month, 86400 = 1 day
    }

    $_SESSION['id']=$row['id'];
    $_SESSION['nome']=$row['nome'];
    $_SESSION['tipo']=$row['tipo'];

    
    header('location:principal.php');
  }
}

?>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>



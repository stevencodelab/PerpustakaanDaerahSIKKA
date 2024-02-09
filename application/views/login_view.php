<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title_web;?></title>
 
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" href="" />
  <link rel="stylesheet" href="<?php echo base_url('assets_style/assets/bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets_style/assets/bower_components/font-awesome/css/font-awesome.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets_style/assets/bower_components/Ionicons/css/ionicons.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets_style/assets/dist/css/AdminLTE.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets_style/assets/dist/css/responsivelogin.css');?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"><style type="text/css">
        .navbar-inverse{
        background-color:#333;
         }
         .navbar-color{
        color:#fff;
         }
          blink, .blink {
                animation: blinker 3s linear infinite;
            }

           @keyframes blinker {
                50% { opacity: 0; }
           }
</style>
</head>
<body class="hold-transition login-page" style="overflow-y: hidden;background:url('<?php echo base_url('assets_style/image/login-background/hd-background.jpg');?>')no-repeat;background-size:100%;">
<div class="login-box">
<br/>
<div class="login-logo">
<a href="index.php" style="color: white;">Sistem Informasi<br/><b>PERPUSTAKAAN DAERAH KABUPATEN SIKKA</b></a>
</div>
<div id="tampilalert"></div>
<div class="login-box-body" style="border: 4px solid #9e7540;">
<p class="login-box-msg" style="font-size:16px;"></p>
<form action="<?= base_url('login/auth');?>" method="POST">
<div class="form-group has-feedback">
<input type="text" class="form-control" placeholder="Masukkan Username" id="user" name="user" required="required" autocomplete="off">
<span class="glyphicon glyphicon-user form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
<input type="password" class="form-control" placeholder="Masukkan Password" id="pass" name="pass" required="required" autocomplete="off">
<span class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>
<div class="row">
<div class="col-xs-8">
</div>
<div class="col-xs-4">
<button type="submit" id="loding" class="btn btn-primary btn-block btn-flat">LOGIN</button>
<div id="loadingcuy"></div>
</div>
</div>
</form>
</div>
<br/>
<footer>
<div class="login-box-body  text-center bg-white" style="border: 4px solid #9e7540 ;">
<a style="color: navy;"> Copyright &copy; <a href="https://www.instagram.com/ls_morizon/">Steven Morison</a>- <?php echo date("Y");?>
</div>
</footer>
</div>
<div id="tampilkan"></div>
<script src="<?php echo base_url('assets_style/assets/bower_components/jquery/dist/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets_style/assets/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets_style/assets/plugins/iCheck/icheck.min.js');?>"></script>
</body>
</html>

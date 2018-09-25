<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>Instituto DCM | Inicio de Sesión</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
  <link rel="apple-touch-icon" href="assets/pages/ico/60.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/pages/ico/76.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/pages/ico/120.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/pages/ico/152.png">
  <link rel="icon" type="image/x-icon" href="assets/assets/img/logo_dcm_3.png" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta content="Plataforma de administración y control escolar desarrollado para el Instituto de Estudios Superiores DCM" name="description" />
  <meta content="Rosvel Servicios Multimedia SA de CV" name="author" />
  <link href="assets/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
  <link href="assets/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
  <link href="assets/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="assets/assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="assets/assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="assets/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
  <link class="main-stylesheet" href="assets/pages/css/pages.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript">
    window.onload = function()
    {
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="assets/pages/css/windows.chrome.fix.css" />'
    }
  </script>
</head>
<body class="fixed-header ">
  <div class="login-wrapper ">
    <div class="bg-pic">
      <img src="assets/assets/img/bg_login.png" data-src="assets/assets/img/bg_login.png" data-src-retina="assets/assets/img/bg_login.png" alt="" class="lazy">
      <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
        <img src="assets/assets/img/somos_tigres.png" alt="logo" data-src="assets/assets/img/somos_tigres.png" data-src-retina="assets/assets/img/somos_tigres.png" >
      </div>
    </div>
    <div class="login-container bg-white">
      <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
        <h3>Bienvenid@ a la plataforma</h3>
        <img src="assets/assets/img/logo_dcm_2.png" alt="logo" data-src="assets/assets/img/logo_dcm_2.png" data-src-retina="assets/assets/img/logo_dcm_2.png" >
        <form id="form-login" class="p-t-15" role="form" action="" method="POST">
          <div class="form-group form-group-default" style="margin-top: 30px;">
            <label>Usuario</label>
            <div class="controls">
              <input type="text" name="username" placeholder="" id="txtUsuario" class="form-control" autofocus="autofocus" required>
            </div>
          </div>
          <div class="form-group form-group-default">
            <label>Contraseña</label>
            <div class="controls">
              <input type="password" class="form-control" name="password" placeholder="" id="txtPassword" required>
            </div>
          </div>
          <div class="row">
            <button class="btn btn-warning btn-cons m-t-10" type="submit"><b>Iniciar Sesión</b></button>
          </div>
          <div class="row" style="margin-top: 70px;">
            <center>
              <img src="assets/assets/img/logo_dcm_1.png" alt="logo" data-src="assets/assets/img/logo_dcm_1.png" data-src-retina="assets/assets/img/logo_dcm_1.png" >
            </center>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="assets/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="assets/assets/plugins/modernizr.custom.js" type="text/javascript"></script>
<script src="assets/assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
<script src="assets/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="assets/assets/plugins/jquery-bez/jquery.bez.min.js"></script>
<script src="assets/assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
<script src="assets/assets/plugins/jquery-actual/jquery.actual.min.js"></script>
<script src="assets/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script type="text/javascript" src="assets/assets/plugins/bootstrap-select2/select2.min.js"></script>
<script type="text/javascript" src="assets/assets/plugins/classie/classie.js"></script>
<script src="assets/assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
<script src="assets/assets/plugins/jquery-validation/js/jquery.validate.js" type="text/javascript"></script>
<script src="assets/pages/js/pages.min.js"></script>
<script type="text/javascript" src="api/js/util.js"></script>
<script type="text/javascript" src="api/js/login.js"></script>
</body>
</html>
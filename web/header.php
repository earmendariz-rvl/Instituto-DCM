<body class="fixed-header ">
  <nav class="page-sidebar" data-pages="sidebar">
    <div class="sidebar-overlay-slide from-top" id="appMenu"   <div class="row">
      <div class="col-xs-6 no-padding">
        <a href="#" class="p-l-40"><img src="../../assets/assets/img/demo/social_app.svg" alt="socail">
        </a>
      </div>
      <div class="col-xs-6 no-padding">
        <a href="#" class="p-l-10"><img src="../../assets/assets/img/demo/email_app.svg" alt="socail">
        </a>
      </div>
    </div>
    <div class="row">
    </div>
    <div class="sidebar-header">
      <div class="sidebar-header-controls">
        <img src="../../assets/assets/img/logo_dcm_3.png" alt="logo" class="brand" data-src="../../assets/assets/img/logo_dcm_3.png" data-src-retina="../../assets/assets/img/logo_dcm_3.png" style="max-height: 50px;">
        <div class="sidebar-header-controls">
          <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
          </button>
          <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
          </button>
        </div>
      </div>
    </div>
    <div class="sidebar-menu">
      <ul class="menu-items">
        <li class="m-t-30 ">
        <?php
          echo $menu;
        ?>
        </li>
      </ul>
    </div>
  </nav>
  <div class="page-container ">
    <div class="header ">
      <div class="container-fluid relative">
        <div class="pull-left full-height visible-sm visible-xs">
          <div class="header-inner">
            <a href="#" class="btn-link toggle-sidebar visible-sm-inline-block visible-xs-inline-block padding-5" data-toggle="sidebar">
              <span class="icon-set menu-hambuger"></span>
            </a>
          </div>
        </div>
        <div class="pull-center hidden-md hidden-lg">
          <div class="header-inner">
            <div class="brand inline">
              <img src="../../assets/assets/img/logo_dcm_2.png" alt="logo" data-src="../../assets/assets/img/logo_dcm_2.png" data-src-retina="../../assets/assets/img/logo_dcm_2.png" style="max-height: 30px;">
            </div>
          </div>
        </div>
        <div class="pull-right full-height visible-sm visible-xs">
          <div class="header-inner">
            <a href="#" class="btn-link visible-sm-inline-block visible-xs-inline-block" data-toggle="quickview" data-toggle-element="#quickview"> 
             <span class="icon-set menu-hambuger-plus"></span>
           </a>
         </div> 
       </div> 
     </div>
     <div class=" pull-left sm-table hidden-xs hidden-sm">
      <div class="header-inner">
        <div class="brand inline">
          <img src="../../assets/assets/img/logo_dcm_2.png" alt="logo" data-src="../../assets/assets/img/logo_dcm_2.png" data-src-retina="../../assets/assets/img/logo_dcm_2.png" style="max-height: 50px;">
        </div>
        <!--<label class="inline" position="text-center">Instituto de Estudios Superiores DCM</label>-->
      </div>
    </div>
    <div class=" pull-right">
      <div class="visible-lg visible-md m-t-10">
        <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
          <span class="semi-bold"><?php echo $_SESSION["USR_NMBR"]; ?><span class="text-master"></span>
        </div>
        <div class="dropdown pull-right">
          <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="thumbnail-wrapper d32 circular inline m-t-5">
              <img src="../../assets/assets/img/user.png" alt="" data-src="../../assets/assets/img/user.png" data-src-retina="../../assets/assets/img/user.png" width="32" height="32">
            </span>
          </button>
          <ul class="dropdown-menu profile-dropdown" role="menu">
            <li><a href="#"><i class="fa fa-info"></i> Ayuda</a>
            </li>
            <li class="bg-master-lighter">
              <a href="../../api/ph/logout.php" class="clearfix">
                <span class="pull-left">Cerrar Sesión</span>
                <span class="pull-right"><i class="pg-power"></i></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
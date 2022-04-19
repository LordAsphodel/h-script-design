
<!DOCTYPE html>
<html>
    <head>
      <title>{if $title}{$title} | {/if}{$_cfg.Sys_SiteName}</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="description" content="">
<meta name="keywords" content="admin, bootstrap,admin template, bootstrap admin, simple, awesome">
<meta name="author" content="">

<!-- Bootstrap -->
<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="/assets/css/style.css" rel="stylesheet">
<link href="/assets/css/style-responsive.css" rel="stylesheet">
<link href="/assets/css/animate.css" rel="stylesheet">
<link href="/assets/css/powerange.css" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/intlTelInput.css">
<link rel="stylesheet" href="/assets/css/jquery.Jcrop.css">
<link href="/assets/third/morris/morris.css" rel="stylesheet">
<link rel="stylesheet" href="/assets/third/nifty-modal/css/component.css">
<link rel="stylesheet" href="/assets/third/sortable/sortable-theme-bootstrap.css">
<link rel="stylesheet" href="/assets/third/icheck/skins/square/blue.css">
<link rel="stylesheet" href="/assets/third/select/bootstrap-select.min.css">
<link rel="stylesheet" href="/assets/third/summernote/summernote.css" />
<link rel="stylesheet" href="/assets/third/magnific-popup/magnific-popup.css">
<!--<link rel="stylesheet" href="/assets/third/pace/pace-theme-minimal.css">-->
<link rel="stylesheet" href="/assets/third/pace/pace-loader.css">
<link rel="stylesheet" href="/assets/third/datepicker/css/datepicker.css"/>
<link rel="stylesheet" href="/assets/css/chartist.css"/>
<link rel="stylesheet" href="/assets/css/chartist-plugin-tooltip.css"/>
<link rel="stylesheet" href="/assets/css/alertify.css">
<link rel="stylesheet" href="/assets/css/nice-select.css">
<link rel="stylesheet" href="/assets/css/themes/default.min.css">
<link rel="stylesheet" href="/assets/css/themes/bootstrap.min.css">
<link rel="stylesheet" href="/assets/css/themes/semantic.css">
<script src="/assets/js/jquery.js"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="/assets/img/favicon.ico">

    </head>
    <body class="tooltips">

    <!-- Begin page -->
    <div class="container">

    <!-- Modal Dialog -->

    <!-- Modal Logout Primary -->
    <div class="md-modal md-fall" id="logout-modal">
        <div class="md-content">
            <h3>Выход из аккаунта</h3>
            <div>
                <p class="text-center">Вы уверены, что хотите выйти?</p>
                <p class="text-center">
                <button class="btn btn-danger md-close">Нет</button>
                <a href="/login?out" class="btn btn-success md-close">Выйти</a>
                </p>
            </div>
        </div>
    </div>
    
    {include file='sidebar.tpl'}



        <!-- Start right content -->
        <div class="right content-page">
            <div class="header content rows-content-header">

<!-- Button mobile view to collapse sidebar menu -->
<button class="button-menu-mobile show-sidebar">
    <i class="fa fa-bars"></i>
</button>

 <div class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <i class="fa fa-angle-double-down"></i>
          </button>
        </div>
        <div class="navbar-collapse collapse">

          <ul class="nav navbar-nav navbar-left top-navbar">

        <li class="dropdown">
              <a href="/#" class="dropdown-toggle clearfix" data-toggle="dropdown" style="">
                <div class="pull-left" style="margin-top: -4px;">
                  <div class="round-photo">
                    <img width="40" height="40" id="navbar_profile_photo" src="/img/lang/ru.svg">
                  </div>
                </div>
                <div class="pull-left">
                  <strong>Русский</strong> <i class="fa fa-chevron-down i-xs"></i>
                </div>
              </a>
              <ul class="dropdown-menu animated half fadeIn">
                <li> <a href="/interface?lang=en" align="left">English <img align="right" width="20" height="20" src="img/lang/en.svg"> </a> </li>
				<li> <a href="/interface?lang=ru" align="left">Русский <img align="right" width="20" height="20" src="img/lang/ru.svg"></a> </li>
              </ul>
            </li>
            
        </ul>

        <ul class="nav navbar-nav navbar-right top-navbar">

          <li class="dropdown" align="left">
              <a style="font-size: 16px; font-weight: 700; color: #1ab15e;">Мой баланс: ${_z($curr1.wBal, 2)}</a>
        </li>


            <li class="dropdown">
              <a href="/#" class="dropdown-toggle clearfix" data-toggle="dropdown" style="">
                <div class="pull-left" style="margin-top: -4px;">
                  <div class="round-photo">
                    <img width="40" height="40" id="navbar_profile_photo" src="/img/ava.jpg">
                  </div>
                </div>
                <div class="pull-left">
                  <strong>{$user.uLogin}</strong> <i class="fa fa-chevron-down i-xs"></i>
                </div>
              </a>
              <ul class="dropdown-menu animated half fadeIn">
                <li><a href="/cabinet">Мой профиль</a></li>
                <li><a href="/changepass">Сменить пароль</a></li>
                <li class="divider"></li>
                <li><a class="md-trigger" data-modal="logout-modal">Выйти</a></li>
              </ul>
            </li>

          </ul>

          <ul class="nav navbar-nav navbar-right">
            <!--<li><a><i class="fa fa-cog"></i></a></li>-->
            <!-- <li class="dropdown">
              <a href="/#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-globe"></span> RU <i class="fa fa-chevron-down i-xs"></i></a>
              <ul class="dropdown-menu animated half fadeIn">
                <li><a href="/al/lang_set.php?lang=en&redirect=cabinet/index">English (EN)</a></li>
                <li><a href="/al/lang_set.php?lang=ru&redirect=cabinet/index">Русский (RU)</a></li>
              </ul>
            </li> -->
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </div>
</div>

            <!-- ============================================================== -->
            <!-- Start Content here -->
            <!-- ============================================================== -->
            <div class="body content rows scroll-y">
              <div id="content">
<!--               <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: rgb(243, 230, 142);padding: 20px;margin-bottom: 20px;border-left: 5px solid rgb(241, 210, 0);font-size: 15px; color: #000;">У Вас не заполнены платежные реквизиты!<br /> Перейдите в раздел "Мой профиль" и заполните их!</p>
              <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display: none;background: rgb(243, 230, 142);padding: 20px;margin-bottom: 20px;border-left: 5px solid rgb(241, 210, 0);font-size: 15px; color: #000;"></p> -->
<!-- Page header -->

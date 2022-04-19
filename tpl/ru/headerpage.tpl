{strip}

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->

<head>

	<meta charset="utf-8">

	<title>{if $title}{$title} | {/if}{$_cfg.Sys_SiteName}</title>
	<meta name="description" content="">

	<link rel="shortcut icon" href="/img/favicon/favicon.ico" type="image/x-icon">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="/libs/bootstrap/bootstrap-grid.min.css">
	<link rel="stylesheet" href="/libs/awesome/font-awesome.min.css">
	<link rel="stylesheet" href="/libs/slick/slick.css">
	<link rel="stylesheet" href="/libs/slick/slick-theme.css">
	<link rel="stylesheet" href="/libs/animate/animate.css">
	<link rel="stylesheet" href="/libs/magnific/magnific-popup.css">

	<link rel="stylesheet" href="/css/head.css">
	<link rel="stylesheet" href="/css/fonts.css">
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/media.css">

	<script src="/libs/modernizr/modernizr.js"></script>
	<script src="/libs/jquery/jquery.min.js"></script>
	<script src="/js/jquery.cookie.js"></script>

</head>

<body>
	<div id="top"><img src="img/up.png" alt=""></div>
	<header class="header-cabinet">
		<div class="header__top">
			<div class="line">
				<iframe src="https://informers.mt5.com/ru/quotes_online/running_string_iframe/sz=100p_60&ss=14&sf=m&ticker=&c1=47721f&c2=47721f&c3=ffffff&c4=ffffff&cn=6&u_jq=0&us=1&ua=ffffff&da=ffffff&uc=ffffff&dc=ffffff" frameborder="0" width="100%" height="60" scrolling="no" title="MT5 - универсальный Форекс (Forex) портал для трейдеров"></iframe><noframes><a href="https://www.mt5.com/ru/">Форекс портал</a></noframes>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-7 col-xs-offset-5 col-sm-5 col-sm-offset-0 col-md-5 col-lg-5">
						<div class="header__auth auth">
							{if $user.uID}
							<a href="/cabinet" class="auth__signin">Кабинет</a>
							<a href="/login?out" class="auth__signup">Выйти</a>
							{else}
							<a href="/login" class="auth__signin">Войти</a>
							<a href="/registration" class="auth__signup">Регистрация</a>
							{/if}
						</div>
					</div>
					<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
						<div class="langselect">
							<div class="langselect__selected">
								<a class="RU" href="#">Русский<img src="img/lang/ru.svg"></a>
							</div>
							<ul class="langselect__list">
								<li><a class="EN" href="/interface?lang=en">English<img src="img/lang/en.svg"></a></li>
								<li><a class="RU" href="/interface?lang=ru">Русский<img src="img/lang/ru.svg"></a></li>
							</ul>
						</div>
						<div class="toggle-mnu hidden-md hidden-lg">
							<span></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-5 hidden-xs hidden-sm">
						<nav class="menu">
							<li><a href="/">Главная</a></li>
							<li><a href="/about">О Нас</a></li>
						
							<li><a href="/news">Новости</a></li>
						</nav>
					</div>
					<div class="col-xs-4 col-sm-4 col-sm-offset-4 col-md-2 col-md-offset-0">
						<a href="/" class="logo">
							<img src="/img/logo.png" alt="">
						</a>
					</div>
					<div class="col-sm-5 hidden-xs hidden-sm">
						<nav class="menu">
							
							<li><a href="#faq">Faq</a></li>
							<li><a href="/support">Контакты</a></li>
							<li><a href="/rules">Правила</a></li>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col-xs-12 hidden-md hidden-lg">
					<div class="respond-menu hidden">
						<ul>
							<li><a href="/">Главная</a></li>
							<li><a href="/about">О Нас</a></li>
							
							<li><a href="/news">Новости</a></li>
							<li><a href="/support">Контакты</a></li>
							<li><a href="#faq">Faq</a></li>
							
							<li><a href="/rules">Правила</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>

{/strip}

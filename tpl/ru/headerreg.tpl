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
	<link rel="stylesheet" href="/libs/scroll/jquery.mCustomScrollbar.css">

	<link rel="stylesheet" href="/css/head.css">
	<link rel="stylesheet" href="/css/fonts.css">
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/media.css">

	<script src="/libs/modernizr/modernizr.js"></script>
	<script src="/libs/jquery/jquery.min.js"></script>
	<script src="/js/jquery.cookie.js"></script>

</head>
<style>
	.page {
		background: url(../img/background-reg.jpg) center top no-repeat fixed;
		min-height: 100vh;
	}
	.page h2 {
		color: #fff;
	}
	.page h3 {
		margin: 0;
	}
	.form {
		padding: 20px;
		border-radius: 8px;
		background: #fff;
	}
	.scroll-block {
		display: block;
		border-radius: 15px;
		border: 3px solid rgba(46, 88, 6, 0.08);
		background: rgba(46, 88, 6, 0.16);
		overflow: hidden;
		color: #fff;
		padding: 15px 10px 15px 20px;
		height: 600px;
	}
	.mCSB_scrollTools .mCSB_draggerRail {
	    background: rgb(169, 169, 169);
	    filter: "alpha(opacity=100)";
	    -ms-filter: "alpha(opacity=100)";
	}
	div#uReg {
		font-family: tahoma,arial,verdana,sans-serif,Lucida Sans;
		font-size: 13px;
		background: #edeef0;
		color: #000;
		width: 100%;
		height: 100%;
		position: fixed;
		z-index: 9999;
		left: 0px;
		top: 0px;
	}
	div#uReg-cont {
		margin: 20% auto 0px auto;
		max-width: 900px;
		text-align: center;
	}
	div#uReg-cont div {
		cursor: pointer;
		margin: 20px;
		display: inline-block;
		clear: both;
		background: #507299;
		color: #fff;
		padding: 10px;
		border-radius: 2px;
	}
	div#uReg-cont div:last-child {
		background: red;
	}
	div#uReg h1 {
		font-size: 2em;
		font-weight: 900;
		margin-bottom: 20px;
	}

</style>

<body>

{/strip}
{strip}
{include file='headerreg.tpl' title='Вход'}

	<section class="page">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<a href="/" class="page__btn page__btn_l hidden-xs"><i class="fa fa-arrow-circle-o-left"></i> На главную</a>
					<a href="/registration" class="page__btn page__btn_r hidden-xs">Регистрация <i class="fa fa-arrow-circle-o-right"></i></a>

					<a href="/" class="page__btn page__btn_l hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-left"></i></a>
					<a href="/registration" class="page__btn page__btn_r hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-right"></i></a>
					<h2>Вход</h2>
				</div>
				<div class="col-md-6">

{if isset($smarty.get.ip_changed)}

	<h2>Система безопасности</h2>
	<p class="info">
		Вы пытаетесь войти в аккаунт с другого IP-адреса.<br>
		Для продолжения <a href="{_link module='confirm'}">введите код подтверждения</a><br>
		или перейдите по ссылке, которые были высланы на Ваш e-mail
	</p>

{elseif isset($smarty.get.brute_force)}

	<h2>Система безопасности</h2>
	<p class="info">
		До этого пароль был неверно введен несколько раз подряд.<br>
		Для продолжения <a href="{_link module='confirm'}">введите код подтверждения</a><br>
		или перейдите по ссылке, которые были высланы на Ваш e-mail
	</p>

{else}

	{if $url}
		Страница "<i>...{$url}</i>" требует авторизации<br><br>
	{/if}
	{if $_cfg.Sys_LockSite}
		<p class="info">
			В настоящее время на сайте идут технические работы.<br>
			Вход <b>только</b> для обслуживающего персонала
		</p>
	{/if}
	
	{include file='account/login/box.tpl'}

	{if !$_cfg.Sys_LockSite}
		<br>
		<a href="{_link module='account/reset_pass'}">Забыл пароль</a><br>
		{if $_cfg.Account_RegMode >= 0}<a href="{_link module='account/register'}">Еще нет регистрации</a><br>{/if}
		<br>
	{/if}

{/if}

				</div>
				<div class="col-md-6">

					<div class="scroll-block scroll">
						<h3><b>ПРОЧТИ МЕНЯ</b></h3>

	<b> Перед тем, как регистрироваться на нашем сайте, прочитайте, пожалуйста, <a href="{'/rules'}">правила</a> проекта. </b><br>
</div>

				</div>
			</div>
		</div>
	</section>

{include file='footerreg.tpl'}
{/strip}

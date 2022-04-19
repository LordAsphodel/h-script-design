{strip}
{include file='headerpage.tpl' title='Сброс пароля'}

	<section class="page">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">

					<a href="/" class="page__btn page__btn_l hidden-xs"><i class="fa fa-arrow-circle-o-left"></i> Главная</a>
					<a href="/login" class="page__btn page__btn_r hidden-xs">Войти <i class="fa fa-arrow-circle-o-right"></i></a> 

					<a href="/" class="page__btn page__btn_l hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-left"></i></a>
					<a href="/login" class="page__btn page__btn_r hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-right"></i></a>

					<h2><b>Сброс</b> пароля</h2>
				</div>
				<div class="col-md-6 col-md-offset-3">

{if isset($smarty.get.done)}

	<h2>Операция завершена!</h2>
	<p class="info">
		Теперь Вы можете <a href="{_link module='account/login'}">войти</a> в свой аккаунт, используя <b>новый</b> пароль.<br>
		После этого его можно будет сменить на другой
	</p>

{elseif isset($smarty.get.need_confirm)}

	<h2>Операция НЕ завершена!</h2>
	<p class="info">
		Для получения временного пароля <a href="{_link module='confirm'}">введите код подтверждения</a><br>
		или перейдите по ссылке, которые были высланы на Ваш e-mail.<br><br>
		Если письмо долго не приходит, то попробуйте <a href="{_link module='account/change_mail'}">сменить e-mail</a>
	</p>

{elseif isset($squest)}

	{include file='sqa.tpl'}

{else}
<p align='center'>
	{$txt_login=valueIf($_cfg.Const_NoLogins, 'e-mail', 'Логин')}
	{include file='edit.tpl' 
		url='*'
		fields=
		[
			'Login'=>
				[
					'T', 
					"$txt_login!!",
					[
						'login_empty'=>"укажите $txt_login",
						'login_not_found'=>'неверная пара Логин/e-mail',
						'mail_not_found'=>'e-mail не найден'
					]
				],
			'Mail'=>
				[
					'T',
					'e-mail!!',
					[
					],
					'skip'=>$_cfg.Const_NoLogins
				]
		]
		captcha=$_cfg.Account_ResetPassCaptcha
		btn_text='Далее'
	}
</p>
{/if}
</div>
			</div>
		</div>
	</section>
{include file='footer.tpl'}
{/strip}

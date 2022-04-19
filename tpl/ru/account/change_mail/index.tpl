{strip}
{include file='headercabinet.tpl' title='Смена e-mail'}

<div class="page-heading animateed fadeInDown">
    <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;">
        <h1>Смена e-mail</h1>
    </div>
    <div class="clear"></div>
</div>

<div class="box-info full animated fadeInDown">
  <div class="settings-content clearfix">
  	<div class="col-xs-12">
  	<h2><i class="fa fa-cogs"></i> Смена e-mail</h2>
  	<div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div>

{if isset($smarty.get.done)}

	<h2>Е-mail заменен на новый!</h2>

{elseif isset($smarty.get.need_confirm)}

	<h2>Операция НЕ завершена!</h2>
	<p class="info">
		Для завершения операции Вы должны подтвердить свой e-mail.<br>
		Для этого <a href="{_link module='confirm'}">введите код подтверждения</a><br>
		или перейдите по ссылке, которые были высланы на Ваш e-mail.<br><br>
		Если письмо долго не приходит, то попробуйте <a href="{_link module='account/change_mail'}">сменить e-mail</a>
	</p>

{elseif isset($smarty.get.already_used)}

	<h2>Операция не может быть завершена!</h2>
	<p class="info">
		Этот e-mail не может быть подтвержден Вами,<br>
		т.к. он уже используется другим пользователем
	</p>

{elseif isset($squest)}

	{include file='sqa.tpl'}

{else}

	{$txt_login=valueIf($_cfg.Const_NoLogins, 'e-mail', 'Логин')}
	{include file='medit.tpl' 
		url='*'
		form_class='form-horizontal'
		row_wrap='settings-form-group form-group'
		label_class='col-sm-3 control-label'
		input_class='form-control'
		input_wrap='col-sm-6'
		btn_class='btn btn-primary col-sm-12'
		btn_wrapp='col-sm-6 col-sm-offset-3'
		fields=
		[
			'Login'=>
				[
					'T', 
					"$txt_login!!",
					[
						'login_empty'=>"укажите $txt_login/Пароль", 
						'login_not_found'=>"неверная пара $txt_login/Пароль", 
						'banned'=>"доступ в аккаунт приостановлен до $ban_date", 
						'blocked'=>'аккаунт заблокирован'
					],
					'skip'=>_uid()
				],
			'Pass'=>
				[
					'*',
					'Пароль!!',
					[
						'pass_not_found'=>'неверный Пароль'
					]
				],
			'NewMail'=>
				[
					'T',
					valueIf($_cfg.Account_ChangeMailConfirm, 'Новый e-mail!! <<будет выслано подтверждение>>', 'Новый e-mail!!'),
					[
						'mail_empty'=>'укажите e-mail',
						'mail_wrong'=>'неверный e-mail',
						'mail_used'=>'e-mail уже используется'
					]
				]
		]
		captcha=$_cfg.Account_ChangeMailCaptcha
		btn_text='Далее'
	}

{/if}

		</div>
	</div>
</div>

{include file='footercabinet.tpl'}
{/strip}
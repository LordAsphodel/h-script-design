{strip}
{include file='headercabinet.tpl' title='E-mail change'}

<div class="page-heading animateed fadeInDown">
    <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;">
        <h1>E-mail change</h1>
    </div>
    <div class="clear"></div>
</div>

<div class="box-info full animated fadeInDown">
  <div class="settings-content clearfix">
  	<div class="col-xs-12">
  	<h2><i class="fa fa-cogs"></i> E-mail change</h2>
  	<div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div>

{if isset($smarty.get.done)}

	<h2>Е-mail is changed to new one!</h2>

{elseif isset($smarty.get.need_confirm)}

	<h2>Operation is NOT complete!</h2>
	<p class="info">
		In order to complete operation you should confirm your e-mail.<br>
		To manage this <a href="{_link module='confirm'}"> enter the confirmation code</a><br>
		or follow the link that were sent to your E-mail<br><br>
		If there is no letter for long period of time try to <a href="{_link module='account/change_mail'}">change E-mail</a>
	</p>

{elseif isset($smarty.get.already_used)}

	<h2>Operation can NOT be completed!</h2>
	<p class="info">
		This E-mail can not be confirmed by you<br>
		as it is used by another user.
	</p>

{elseif isset($squest)}

	{include file='sqa.tpl'}

{else}

	{$txt_login=valueIf($_cfg.Const_NoLogins, 'e-mail', 'Login')}
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
						'login_empty'=>"Set $txt_login/Password", 
						'login_not_found'=>"Incorrect couple $txt_login/Password", 
						'banned'=>"Account access is suspended till$ban_date", 
						'blocked'=>'Account is blocked'
					],
					'skip'=>_uid()
				],
			'Pass'=>
				[
					'*',
					'Password!!',
					[
						'pass_not_found'=>'Incorrect password'
					]
				],
			'NewMail'=>
				[
					'T',
					valueIf($_cfg.Account_ChangeMailConfirm, 'New E-mail!! <<a confirmation will be sent>>', 'New E-mail!!'),
					[
						'mail_empty'=>'Set E-mail',
						'mail_wrong'=>'Incorrect E-mail',
						'mail_used'=>'E-mail is used'
					]
				]
		]
		captcha=$_cfg.Account_ChangeMailCaptcha
		btn_text='Next'
	}

{/if}

		</div>
	</div>
</div>

{include file='footercabinet.tpl'}
{/strip}

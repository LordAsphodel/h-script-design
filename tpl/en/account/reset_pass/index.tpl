{strip}
{include file='headerpage.tpl' title='Reset password'}

	<section class="page">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">

					<a href="/" class="page__btn page__btn_l hidden-xs"><i class="fa fa-arrow-circle-o-left"></i> Main</a>
					<a href="/login" class="page__btn page__btn_r hidden-xs">Log in <i class="fa fa-arrow-circle-o-right"></i></a> 

					<a href="/" class="page__btn page__btn_l hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-left"></i></a>
					<a href="/login" class="page__btn page__btn_r hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-right"></i></a>

					<h2><b>Reset</b> password</h2>
				</div>
				<div class="col-md-6 col-md-offset-3">

{if isset($smarty.get.done)}

	<h2>Operation is complete!</h2>
	<p class="info">
		You are able to <a href="{_link module='account/login'}">log into</a> your account using <b>new</b> paasword.<br>
		Later you can change it.
	</p>

{elseif isset($smarty.get.need_confirm)}

	<h2>Operation is NOT complete!</h2>
	<p class="info">
		In order to get temporary password <a href="{_link module='confirm'}">enter confirmation code</a><br>
		or follow the link that were sent to your E-mail.<br><br>
		If there is no letter for long period of time try to <a href="{_link module='account/change_mail'}">change E-mail</a>
	</p>

{elseif isset($squest)}

	{include file='sqa.tpl'}

{else}
<p align='center'>
	{$txt_login=valueIf($_cfg.Const_NoLogins, 'E-mail', 'Login')}
	{include file='edit.tpl' 
		url='*'
		fields=
		[
			'Login'=>
				[
					'T', 
					"$txt_login!!",
					[
						'login_empty'=>"Set $txt_login",
						'login_not_found'=>'Incorrect couple Login/E-mail',
						'mail_not_found'=>'E-mail not found'
					]
				],
			'Mail'=>
				[
					'T',
					'E-mail!!',
					[
					],
					'skip'=>$_cfg.Const_NoLogins
				]
		]
		captcha=$_cfg.Account_ResetPassCaptcha
		btn_text='Next'
	}
</p>
{/if}
</div>
			</div>
		</div>
	</section>
{include file='footer.tpl'}
{/strip}

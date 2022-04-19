{strip}
{include file='headerreg.tpl' title='Regstration'}

	<section class="page">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<a href="/" class="page__btn page__btn_l hidden-xs"><i class="fa fa-arrow-circle-o-left"></i> To homepage</a>
					<a href="/login" class="page__btn page__btn_r hidden-xs">Log in <i class="fa fa-arrow-circle-o-right"></i></a>

					<a href="/" class="page__btn page__btn_l hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-left"></i></a>
					<a href="/login" class="page__btn page__btn_r hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-right"></i></a>
					<h2>Registration</h2>
				</div>
				<div class="col-md-6">

					<div id="uReg">
						<div id="uReg-cont">
							<h1 style="color:#FF0000;">Attention!!!</h1>
							<b>Any investment means taking risk at your own. If you are not ready to take risk you are advised to not doing investment. Otherwise click the button "I take the risk" and registration will be continued.</b><br>
							<div {literal}onclick="$('#uReg').hide();$.cookie('uCookie','uRhide');"{/literal}>I take the risk</div>
							<div {literal}onclick="location.href='/'"{/literal}>I do NOT take the risk</div>
						</div>
					</div>

{if isset($smarty.get.done)}

	<h2>Registration is complete!</h2>
	<p class="info">
		You are able to <a href="{_link module='account/login'}">log into</a> your account.
	</p>

{elseif isset($smarty.get.need_confirm)}

	<h2>Registration is NOT complete!</h2>
	<p class="info">
		In order to complete registration you must confirm your E-mail.<br>
		To manage this <a href="{_link module='confirm'}">enter confirmation code</a><br>
		or follow the link that were sent to your E-mail.<br><br>
		If there is no letter with your confirmation code try to <a href="{_link module='account/change_mail'}">change E-mail</a>
	</p>

{elseif isset($smarty.get.need_confirm_sms)}

	<h2>Registration is NOT complete!</h2>
	<p class="info">
		In order to complete registration you must confirm your phone number.<br>
		To manage this <a href="{_link module='confirm'}">enter confirmation code</a><br>
		that was sent to your phone number.
	</p>

{elseif $_cfg.Account_RegMode == 0}

	<h2>Registration is suspended!</h2>
	<p class="info">
		Registration is temporary suspended.<br>
		If  you have any questions <a href="{_link module='message/support'}">contact us</a>
	</p>

{else}

	{$txt_login=valueIf($_cfg.Const_NoLogins, 'E-mail', 'Login')}
	{if ($_cfg.Account_RegMode == 2) and !$valid_ref}

		<h2>Attention!</h2>
		<p class="info">
			Registration is <b>only</b> available <a href="{_link module='udp/about'}">by invitation</a>.<br>
			You should visit our site<br>
			using special refferal link of an existing member or set his {$txt_login} to register.
		</p>
		
	{elseif $_cfg.Account_RegMode == 3}

		<h2>Attention!</h2>
		<p class="info">
			Registration is <b>only</b> available <a href="{_link module='udp/about'}">by invitation</a>.<br>
			You must enter invitation code to register.
		</p>
		
	{/if}

	{if $_cfg.Account_Loginza and (($_cfg.Account_RegMode == 1) or (($_cfg.Account_RegMode == 2) and $valid_ref)) and ($_cfg.Sec_MinSQA == 0)}
		{include file='account/loginza/box.small.tpl'}
		<br>
		<h3>or</h3>
	{/if}

	{include file='medit.tpl'
		url="{_link module='account/register'}"
		form='register_frm'
		form_class='form'
		row_wrap='form__row'
		label_class='form__label'
		btn_class='form__btn'
		fields=
		[
			'aName'=>
				[
					'T',
					'Your name',
					[
						'name_empty'=>'Set you name'
					],
					'skip'=>($_cfg.Account_UseName != 1)
				],
			'uLogin'=>
				[
					'T', 
					'Set your login!!',
					[
						'login_empty'=>'Your login',
						'login_short'=>"Login is too short [not less than {$_cfg.Account_MinLogin} symbols]",
						'login_wrong'=>'Incorrect login format',
						'login_used'=>'Login is used'
					],
					'skip'=>$_cfg.Const_NoLogins,
					'comment'=>' <span id="login_check" class="err"></span>'
				],
			'uMail'=>
				[
					'T',
					valueIf($_cfg.Account_RegConfirm, 'E-mail!! <<A confirmation will be sent>>', 'E-mail!!'),
					[
						'mail_empty'=>'Set E-mail',
						'mail_wrong'=>'Incorrect E-mail',
						'mail_used'=>'E-mail is used'
					],
					'comment'=>' <span id="mail_check" class="err"></span>'
				],
			'uPass'=>
				[
					'*',
					'Set password!!',
					[
						'pass_empty'=>'Set password',
						'pass_short'=>"Password is too short [not less than {$_cfg.Account_MinPass} symbols]",
						'pass_wrong'=>'Password does not match format'
					]
				],
			'Pass2'=>
				[
					'*',
					'Retype password!!',
					[
						'pass_not_equal'=>'Passwords does not match'
					]
				],
			'aTel'=>
				[
					'T',
					'Phone number!! <<country code>>',
					[
						'tel_wrong'=>'Wrong format'
					],
					'skip'=>!$_cfg.SMS_REG
				],
			'uRef'=>
				[
					'T',
					"Your refferer{if $_cfg.Account_RegMode == 2}!!{/if}{if $_cfg.Const_NoLogins} <<enter E-mail>>{/if}",
					[
						'ref_empty'=>"Set $txt_login",
						'ref_not_found'=>"$txt_login is not found"
					],
					'default'=>$smarty.session._ref,
					'skip'=>(($_cfg.Account_RegMode == 3) or !$_cfg.Ref_Word),
					'readonly'=>$valid_ref
				],
			'Invite'=>
				[
					'T',
					'Invitation code!!',
					[
						'inv_empty'=>'Enter code',
						'inv_not_found'=>'Incorrect code',
						'inv_used'=>'Code is already used'
					],
					'skip'=>($_cfg.Account_RegMode != 3)
				],
			'aSQuestion'=>
				[
					'T',
					'Checking question!!',
					[
						'secq_empty'=>'Set question',
						'secq_short'=>"Question is too short [not less than {$_cfg.Sec_MinSQA} symbols]"
					],
					'skip'=>($_cfg.Sec_MinSQA == 0),
					'size'=>40
				],
			'aSAnswer'=>
				[
					'T',
					'Checking answer!!',
					[
						'seca_empty'=>'Set answer',
						'seca_short'=>"Answer is too short [not less than {$_cfg.Sec_MinSQA} symbols]",
						'seqa_equal_secq'=>'Answer can not be equal to question'
					],
					'skip'=>($_cfg.Sec_MinSQA == 0),
					'size'=>40
				],
			'Agree'=>
				[
					'CC',
					"I accept <a href=\"{_link module='udp/rules'}\" target=\"_blank\">regulations</a> of the project",
					[
						'must_agree'=>'You must accept the regulations of the project'
					]
				]
		]
		errors=['multi_reg'=>'Multiregistration is forbidden']
		captcha=$_cfg.Account_RegCaptcha
		btn_text='Sign up'
	}

{/if}

{if !$_cfg.Const_NoLogins}

	<script type="text/javascript">
		function chkLogin()
		{
			$('#register_frm_uLogin').removeClass('error');
			$('#login_check').html('');
			$.ajax(
				{
					type: 'POST',
					url: 'ajax',
					data: 'module=account/register&do=chklogin&login='+
						encodeURIComponent($('#register_frm_uLogin').val()),
					success: 
						function(ex)
						{
							if (ex == 1)
							{
								$('#register_frm_uLogin').addClass('error');
								$('#login_check').html('занят');
							}
						}
				}
			);
		}
		tid2=0;
		$('#register_frm_uLogin').keypress(
			function()
			{
				clearTimeout(tid2);
				tid2=setTimeout(function(){ chkLogin(); }, 1000);
			}
		);
		chkLogin();
	</script>
	
{/if}

	<script type="text/javascript">
		function chkMail()
		{
			$('#register_frm_uMail').removeClass('error');
			$('#mail_check').html('');
			$.ajax(
				{
					type: 'POST',
					url: 'ajax',
					data: 'module=account/register&do=chkmail&mail='+
						encodeURIComponent($('#register_frm_uMail').val()),
					success: 
						function(ex)
						{
							if (ex == 1)
							{
								$('#register_frm_uMail').addClass('error');
								$('#mail_check').html('занят');
							}
						}
				}
			);
		}
		tid=0;
		$('#register_frm_uMail').keypress(
			function()
			{
				clearTimeout(tid);
				tid=setTimeout(function(){ chkMail(); }, 1000);
			}
		);
		chkMail();
	</script>

				</div>
				<div class="col-md-6">

					<div class="scroll-block scroll">
						<h3><b>READ ME</b></h3>

	<b> Before regestering on our site please read <a href="{'/rules'}">regulations</a> of the project. </b><br>
	
</div>

				</div>
			</div>
		</div>
	</section>

{include file='footerreg.tpl'}
{/strip}

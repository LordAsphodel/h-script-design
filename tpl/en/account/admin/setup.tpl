{strip}
{include file='admin/header.tpl' title='Settings'}

{include file='edit.tpl' 
	values=$cfg
	fields=[
		'LockData'=>['C', 'Forbid personal data changing'],
		'Loginza'=>['C', 'Allow "fast" registration and log in,<br>using other services accounts <<Loginza.ru provider>>'],
		
		1=>'Registration',
		'RegMode'=>['S', 'Mode', 0, [0=>'Forbidden', 1=>'Allowed', 2=>'Only affiliate', 3=>'Only with invitations']],
		'RegCheck'=>['S', 'Multireg check', 0, [0=>'No', 1=>'IP-address', 2=>'Cookie', 3=>'IP-address and cookie']],
		'UseName'=>['S', 'Name request', 0, [0=>'No (=login)', 1=>'Yes', 2=>'At personal data']],
		'UseAvatar'=>['S', 'Use avatar', 0, [0=>'No', 1=>'Yes'], 'comment'=>'using  <a href="https://ru.gravatar.com/">gravatar.com</a>'],
		'MinLogin'=>['I', 'Minimum login length'],
		'LoginRegx'=>['T', 'Login format <<regular statement>>'],
		'MinPass'=>['I', 'Minimum password length'],
		'PassRegx'=>['T', 'Password format <<regular statement>>'],
		'RegCaptcha'=>['S', '"Captcha" protection', 0, [0=>'No', 1=>'Auto', 2=>'Always']],
		'RegConfirm'=>['C', 'Action confirmation with SMS/e-mail'],
		'RegLogin'=>['C', 'Login after registration is complete'],
		
		'Log in',
		'LoginCaptcha'=>['S', '"Captcha" protection', 0, [0=>'No', 1=>'Auto', 2=>'Always']],
		
		'E-mail change',
		'ChangeMailCaptcha'=>['S', '"Captcha" protection', 0, [0=>'No', 1=>'Auto', 2=>'Always']],
		'ChangeMailConfirm'=>['C', 'Action confirmation with  e-mail'],
		
		'Password reset',
		'ResetPassCaptcha'=>['S', '"Captcha" protection', 0, [0=>'No', 1=>'Auto', 2=>'Always']]
	]
}
	
{include file='admin/footer.tpl'}
{/strip}

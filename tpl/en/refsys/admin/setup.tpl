{strip}
{include file='admin/header.tpl' title='Settings'}

{include file='edit.tpl'
	values=$cfg
	fields=[
		'Word'=>['T', 'To <b>enable</b> referral system set<br>parameter name in the invitation link', 'comment'=>'../?<u>ref</u>=..'],
		'Levels'=>['I', 'Number of visible levels <<for multi-level system>>'],
		1=>'Recharge',
		'Type'=>['S', 'Mode', '', [
			'Multi-level'=>'',
			0=>'<percent> to upline', 
			'single level'=>'',
			2=>'< from number of active referrals >-< percent >', 
			3=>'< from referrals deposits sum >-< percent >',
			4=>'< from referrals active deposits sum >-< percent >'
		]],
		'_Perc'=>['A', 'Values', 'size'=>5],
		'Deposit',
		'DType'=>['S', 'Mode', '', [
			'Multi-level'=>'',
			0=>'<percent> to upline', 
			'single level'=>'',
			2=>'< from number of active referrals >-< percent >', 
			3=>'< from referrals deposits sum >-< percent >',
			4=>'< from referrals active deposits sum >-< percent >'
		]],
		'_DPerc'=>['A', 'Values', 'size'=>5],
		'Accrual',
		'PType'=>['S', 'Mode', '', [
			'Multi-level'=>'',
			0=>'< percent > to upline', 
			'single level'=>'',
			2=>'< from number of active referrals >-< percent >', 
			3=>'< from referrals deposits sum >-< percent >',
			4=>'< from referrals active deposits sum >-< percent >'
		]],
		'_PPerc'=>['A', 'Values', 'size'=>5]
	]
}

{include file='admin/footer.tpl'}
{/strip}

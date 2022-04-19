{strip}
{include file='admin/header.tpl' title='Settings'}

{if ($_cfg.Depo_ChargeMode == 1) and !$_cfg.Cron_Enabled}

	<p class="info">
		For automatical accrual <a href="{_link module='cron/admin/setup'}">scheduler</a> must be <b>enabled</b>
	</p>
	
{/if}

{include file='edit.tpl' 
	values=$cfg
	fields=[
		'OneFromGroup'=>['C', 'Only one <<any>> of group plans is available'],
		'AutoDepo'=>['C', 'Create deposit automatically when a recharge is complete'],
		'Interval'=>['I', 'Activate deposits not more often than once in N minutes<br><<0 - no limits>>'],
		'LastTime'=>['X', 'last account activation date', 0, $depolasttime, 'comment'=>valueIf($depolast < 0, "after {-$depolast} minutes", "$depolast minutes ago"), 'skip'=>(abs($depolast) >= 60)],
		'ChargeMode'=>['S', 'Accrual', 0, [0=>'disabled', 1=>'Everyone at his time (automatical)', 2=>'Everyone at the same time (manually)']],
		1=>'Manual accrual',
		'ManualPeriod'=>['S', 'Make accrual once a', 0, [0=>'day', 1=>'week', 2=>'month']],
		'ManualDay'=>['I', 'Day of week number <<1..7>> or of the month <<1..31>>', 'comment'=>'0 = last day'],
		'Calc',
		'_Compnd'=>['A', 'Reinvestment<br><<one line is equal one value>>', 'size'=>5],
		'Statistics',
		'ShowStat'=>['C', 'Show statistics'],
		'S0'=>['DT', 'Started at <<YYYYMMDDhhmmss>>', 'comment'=>20170728130000],
		'S1'=>['I', 'Total members'],
		'S2'=>['$', 'Got funds'],
		'S3'=>['$', 'Withdrawn funds'],
		'S4'=>['$', 'including refferal bonus'],
		'S5'=>['$', 'Funds reinvested'],
		'S6'=>['I', 'Deposits pending'],
		'S7'=>['I', 'Deposits ended'],
		'S8'=>['$', 'New deposit <<sum>>'],
		'S9'=>['T', 'New deposit <<user>>'],
		'S11'=>['$', 'Last payout <<sum>>'],
		'S12'=>['T', 'Last payout <<user>>']
	]
}
	
{include file='admin/footer.tpl'}
{/strip}

{strip}
{include file='admin/header.tpl' title='Настройки'}

{if $_cfg.Cron_Enabled}

	<p class="info">
		The scheduler is called <b>when a page is opened</b>,<br>
		but triggers not more often than <b>once a minute</b>
	</p>
	<p class="info">
		In order for the scheduler to be called <b>independently</b>,
		<br>it is necessary to register its call from <b>hosting scheduler</b>:<br>
		<br>
			<i>wget -q -O /dev/null "{fullURL(moduleToLink('cron'))}" > /dev/null</i>
		<br>
			<i>curl "{fullURL(moduleToLink('cron'))}"</i>
		<br><br>or (depending on server settings) some cases are possible:<br><br>
			<i>/usr/bin/fetch -q -O /dev/null "{fullURL(moduleToLink('cron'))}" > /dev/null</i>
		<br>
			<i>/usr/bin/php -q {$cronpath} /dev/null</i>
		<br>
			<i>/usr/local/bin/php -q $HOME/cron.php /dev/null</i>
	</p>
	
	<a href="{fullURL(moduleToLink('cron'))}" target="_blank" class="button-green">Call manually</a><br><br>
	
{/if}

{$f = [
	'Enabled'=>['C', 'Enabled'],
	'ByHost'=>['C', 'Is called by hosting']
]}
{if $cfg.Enabled and $cronlist}
	{$f[] = 'Last calls'}
	{foreach $cronlist as $m => $s}
		{$f[$m] = ['X', "Module $m", 'comment'=> valueIf($s < 1440, "$s minutes ago")]}
	{/foreach}
{/if}
	
{include file='edit.tpl' 
	values=$cfg
	fields=$f
}

{include file='admin/footer.tpl'}
{/strip}

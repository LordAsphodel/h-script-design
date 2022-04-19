{strip}
{include file='headerreg.tpl' title='Log in'}

	<section class="page">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<a href="/" class="page__btn page__btn_l hidden-xs"><i class="fa fa-arrow-circle-o-left"></i>To homepage</a>
					<a href="/registration" class="page__btn page__btn_r hidden-xs">Sign up <i class="fa fa-arrow-circle-o-right"></i></a>

					<a href="/" class="page__btn page__btn_l hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-left"></i></a>
					<a href="/registration" class="page__btn page__btn_r hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-right"></i></a>
					<h2>Log in</h2>
				</div>
				<div class="col-md-6">

{if isset($smarty.get.ip_changed)}

	<h2>Security system</h2>
	<p class="info">
		You are trying to log into account from different IP-address.<br>
		To confirm <a href="{_link module='confirm'}">enter confirmation code</a><br>
		or follow the link that were sent to your E-mail
	</p>

{elseif isset($smarty.get.brute_force)}

	<h2>Security system</h2>
	<p class="info">
		Incorrect password has been entered several times in succession.<br>
		To continue <a href="{_link module='confirm'}">enter confirmation code</a><br>
		or follow the link that were sent to your E-mail
	</p>

{else}

	{if $url}
		Page "<i>...{$url}</i>" requires authorization<br><br>
	{/if}
	{if $_cfg.Sys_LockSite}
		<p class="info">
			The site is under maintance.<br>
			Login is available <b>only</b> for stuff.
		</p>
	{/if}
	
	{include file='account/login/box.tpl'}

	{if !$_cfg.Sys_LockSite}
		<br>
		<a href="{_link module='account/reset_pass'}">Forgot your password?</a><br>
		{if $_cfg.Account_RegMode >= 0}<a href="{_link module='account/register'}">Not registered yet</a><br>{/if}
		<br>
	{/if}

{/if}

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

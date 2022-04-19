{if !$user.aGA}
	<input name="GAKey" value="{$GACode}" type="hidden">
	<div class="settings-form-group form-group">							
		<label for="account_frm_$f" class="col-sm-6 control-label">Для активиции <a href="https://www.google.com/landing/2step/" target="_blank">Google Authenticator</a> используйте ключ:</label>
		<div class="col-sm-6">
			<span class="form-control">{$GACode}</span>
		</div>
	</div>
	<div class="settings-form-group form-group">
		<div class="col-sm-6 col-sm-offset-6">	
			<img class="pull-right" src="{$GAQR}">
		</div>
	</div>
{else}
	Для отключения Google Authenticator
{/if}
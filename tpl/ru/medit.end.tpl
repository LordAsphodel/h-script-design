{strip}
{*
	captcha: show captcha mode = 0..2
	errors: errors_array
	btn_text: ' ' to hide
	btns: [name => 'button caption']
	hide_cancel:
*}

								{*** CERT & CAPTCHA ***}
	{_getFormSecurity form=$edit_form_name captcha=$captcha}
	{if $__Capt}
		{include file='captcha.tpl' form=$edit_form_name star=$edit_descr_star}
	{/if}
								{*** LOST ERRORS ***}
	{if $errors}
		{include file='err.tpl' form=$edit_form_name errs=$errors}
		{$error_text}
	{/if}
	{if $tpl_errors[$edit_form_name]}
		{$lost_err = ''}
		{foreach from=$tpl_errors[$edit_form_name] key=i item=e}
			{if $e}
				{$lost_err = "$lost_err$e<br>"}
			{/if}
		{/foreach}
		{if $lost_err}
			<span class="err">{$lost_err}</span>
		{/if}
	{/if}
	<br>
	
	{if $row_wrap}							{*** BUTTONS ***}
	<div class="{$row_wrap}">
	{/if}
	{if $btn_wrapp}
		<div class="{$btn_wrapp}">
	{/if}
	{if $btn_text !== ' '}
		<input name="{$edit_form_name}_btn" value="{if $btn_text}{$btn_text}{elseif !$edit_is_new}Сохранить{else}Создать{/if}" type="submit" {if $btn_class} class="{$btn_class}"{/if}>
	{/if}

	{if is_array($btns)}
		{foreach from=$btns key=f item=v}
			<input name="{$edit_form_name}_btn{$f}" onClick="return confirm('Подтвердите операцию \'{$v}\'');" type="submit" value="{$v}" {if $btn_class}class="{$btn_class}"{/if}>
		{/foreach}
	{/if}
	{if $btn_wrapp}
		</div>
	{/if}


	{*if !$hide_cancel and !$_IN}
		&nbsp;<a href="javascript:history.go(-1)" class="button-gray">Назад</a>
	{/if*}
	{if $row_wrap}
	</div>
	{/if}
</form>

{/strip}
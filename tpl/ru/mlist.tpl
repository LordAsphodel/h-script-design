{strip}
{*
	title:
	url: (* = selfurl)
	form: form name
	form_class: class for form
	fields: [name => 'text in header']
	values:
	table_class: class for table
	row_class: class for table row
	row: (* = default "row file")
	include_code:
	btns: [name => 'button caption']
*}
	
<script type="text/javascript" src="js/lists.js"></script>

{if $title}
	<h2>{$title}</h2>
{/if}

{if count($values)}
	{if is_array($btns)}
		{$list_form_name=getFormName($form)}
		{include file='info.tpl' _info=getInfoData($list_form_name)}
		<form method="post"{if $url} action="{if $url == '*'}{$_selfLink}{else}{$url}{/if}"{/if} name="{$list_form_name}">
	{/if}
	<table class="{if $table_class}{$table_class}{else}list{/if}">
	<thead>
	<tr>
		{if is_array($btns)}
			<th>
				<input type="checkbox" id="swall" onclick="setchkbox('swall','b')" title="Отметить все">
			</th>
		{/if}
		{foreach from=$fields key=f item=v}
			<th>
				{if $pl_params.Orders[$f]}
					{if textLeft($pl_params.Order, -1) == $f}
						{$z = 1 + textRight($pl_params.Order, 1)}
						
					{else}
						{$z = ''}
					{/if}
					<a href="{$_selfLink}?sort={$f}{$z}">
						{$v[0]}
					</a>
					{$zn}
				{else}
					{$v[0]}
				{/if}
			</th>
		{/foreach}
	</tr>
	</thead>
	{if $row_class}
		{$row_class = "{$row_class} "}
	{/if}
	{foreach name=list from=$values key=id item=l}
	<tr class="{$row_class}{if $id == $smarty.get.id}marked{elseif ($smarty.foreach.list.iteration % 2)}odd{else}even{/if}"{if $l._Marked} style="font-weight: bold;"{/if}>
		{if is_array($btns)}
			<td>
				<input name="ids[]" value="{$id}" id="b{$smarty.foreach.list.iteration}" type="checkbox">
			</td>
		{/if}
		{if $row == '*'}
			{include file="$tpl_filename.row.tpl"}
		{elseif $row}
			{include file=$row}
		{else}
			{foreach from=$fields key=f item=v}
				<td>
					{$l[$f]}
				</td>
			{/foreach}
		{/if}
	</tr>
	{/foreach}
	</table>
	{include file='pl.tpl' linkparams=$linkparams}
	{if is_array($btns)}
			{_getFormSecurity form=$list_form_name}

			{if $btn_wrapp}
				<div class="{$btn_wrapp}">
			{/if}

				Отмеченные: {$include_code}
				{foreach from=$btns key=f item=v}
					&nbsp;<input name="{$list_form_name}_btn{$f}" value="{$v}" onClick="return confirm('Подтвердите операцию \'{$v}\'');" type="submit" class="{if $btn_class}{$btn_class}{/if}">
				{/foreach}

			{if $btn_wrapp}
				</div>
			{/if}

		</form>
	{/if}
{else}
	- Нет записей -<br>
{/if}
<br>

{/strip}
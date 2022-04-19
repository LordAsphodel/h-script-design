{strip}
{include file='admin/header.tpl' title='Accounts'}

{include file='account/admin/_statuses.tpl'}

{include file='edit.begin.tpl' form='users_filter' url='*'}
<table class="formatTable">
<tr>
	{include file='edit.row.tpl' f='uGroup' v=['T', 'Group', 'size'=>10] 
		vv=$smarty.session[$edit_form_name].uGroup l_width='0%' r_width='0%'}
	<td>&nbsp;</td>
	{include file='edit.row.tpl' f='uLogin' v=['T', '<i>Login</i>', 'size'=>10] 
		vv=$smarty.session[$edit_form_name].uLogin l_width='0%' r_width='0%'}
	<td>&nbsp;</td>
	{include file='edit.row.tpl' f='aName' v=['T', '<i>Name</i>', 'size'=>10] 
		vv=$smarty.session[$edit_form_name].aName l_width='0%' r_width='0%'}
	<td>&nbsp;</td>
	{include file='edit.row.tpl' f='uMail' v=['T', '<i>e-mail</i>', 'size'=>15] 
		vv=$smarty.session[$edit_form_name].uMail l_width='0%' r_width='0%'}
<tr>
</tr>
	<td colspan="3"></td>
	{include file='edit.row.tpl' f='uState' v=['S', 'State', 0, [9=>'- all -'] + $usr_statuses]
		vv=valueIf(isset($smarty.session[$edit_form_name]), $smarty.session[$edit_form_name].uState, 9) l_width='0%' r_width='0%'}
	<td>&nbsp;</td>
	{include file='edit.row.tpl' f='RefLogin' v=['T', 'Refferer', 'size'=>10] 
		vv=$smarty.session[$edit_form_name].RefLogin l_width='0%' r_width='0%'}
</tr>
</table>
{include file='edit.end.tpl' btn_text='Filter' btns=valueIf(isset($smarty.session[$edit_form_name]), ['clear'=>'Show all'])}

{include file='list.tpl' 
	title="Users{valueIf(isset($smarty.session[$edit_form_name]), ' (filtered)')}"
	url='*'
	fields=[
		'uID'=>['ID'],
		'uGroup'=>['Group'],
		'uLogin'=>['Login'],
		'aName'=>['Name'],
		'uMail'=>['E-mail'],
		'uState'=>['State'],
		'uLevel'=>['Access level'],
		'RefLogin'=>['Refferer'],
		'uBal'=>['Balance']
	]
	values=$list
	row='*'
	include_code='<input name="Group" type="text">'
	btns=['setgroup'=>'Set group', 'del'=>'Delete']
}

<a href="{_link module='account/admin/user'}?add" class="button-green">Add user</a><br>

{include file='admin/footer.tpl'}
{/strip}

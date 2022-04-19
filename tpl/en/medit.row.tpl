{strip}
{*
	f: field name
	v: [ // field description
		0: type
			'' = hidden, 
			U = include [1]
			
			Y = wysiwyg textarea [10 = rows]
			W = textarea [4 = rows]
			L = wide text 
			CC = centred checkbox
			
			X = [3 = values_array] or [=3] 
			A = textarea [4 = cols]
			E = file
			C = checkbox
			R = radiogroup
			S = select [3 = select_array]
			I[Z] = edit (int)
			F[Z.D] = edit (float)
			$ = edit (money = 9.2)
			% = edit (percent = 5.1)
			DT = edit (date time)
			D = edit (date)
			* = password
		1: description or include file_name // <<remark>>/!! = *(required)
		2: errors_array
		3: select_array or values_array
		comment:
		readonly:
		disabled:
		size:
		default: default create value
		hint: desc.text (placeholder)
		skip:
		row_class: class for table row
		text_class: class for text
		class: class for inputs
	]
	vv: field value
	l_width:
	r_width:
*}

{if $v[0] == 'U'}				{*** INCLUDE ***}
	<td colspan="2" align="center">
		{include file=$v[1]}
	</td>
{else}							{*** PREPARE (FOR ALL) ***}
	{if isset_IN($f)}
		{$cv=_IN($f)}
	{else}
		{$cv=firstNotEmpty(array($vv, $v.default))}
	{/if}
	{include file='err.tpl' form=$edit_form_name errs=$v[2]}
	{if ($v[0] == '*') and $vv and (strpos($v[1], '!!') !== false)}
		{$v[1] = "{$v[1]} <<fill to change>>"}
	{/if}
	{*if $label!='0'*}
		{$l=
			str_replace('!!', $edit_descr_star, 
				str_replace('<<', $edit_descr_rem, 
					str_replace('>>', ')</span>', $v[1])
				)
			)
		}
	{*/if*}
	{if strpos($v[1], '!!') !== false}
		{if $label!='0'}
			{$l="<span class=\"descr_req\">$l</span>"}
		{/if}
	{/if}
	{if $v.text_class}
		{if $label!='0'}
			{$l = "<span class=\"{$v.text_class}\">$l</span>"}
		{/if}
	{/if}
	{if !$v.readonly and ($v[0] != 'X')}
		{$l="$l"}
		{$n=valueIf($v.multiple, '[]')}
		{$n=" name=\"$f$n\" id=\"{$edit_form_name}_$f\" "}
	{else}
		{$n=" id=\"{$edit_form_name}_$f\" disabled=\"disabled\" "}
	{/if}
	{$hint = valueIf($v.hint, "placeholder=\"{$v.hint}\" ")}
	{$class = valueIf($v.class, " {$v.class}")}
	{$error_class = valueIf($error_class, " {$error_class}")}
	{$hf="<input name=\"$f\" value=\"$cv\" type=\"hidden\">"}
	{if $v[0] == 'CC' or $v[0] == 'RR' or $v[0] == 'Y' or $v[0] == 'W' or $v[0] == 'XX' or $v[0] == 'L'}
		<td colspan="2" align="center">
			{if $v[0] == 'CC'}
				{$error_text}
				<label for="{$edit_form_name}_$f" {if $label_class} class="{$label_class}"{/if}>{$l}</label>
				{if $input_wrap}
					<div class="{$input_wrap}">
						<input {$n} {if $cv} checked="checked"{/if} type="checkbox" class="checkbox{$class}{$error_class}"> 
					</div>
				{else}
					<input {$n} {if $cv} checked="checked"{/if} type="checkbox" class="checkbox{$class}{$error_class}"> 
				{/if}
			{elseif $v[0] == 'RR'}
				{$error_text}
				<input{$n}value="{$v[3]}"{if $cv == $v[3]} checked="checked"{/if} type="radio" class="radio{$class}{$error_class}"> {$l}
			{else}
				{if $v[1]}<label for="{$edit_form_name}_$f" {if $label_class} class="{$label_class}"{/if}>{$l}</label>{/if}
				{$error_text}
				{if $v[0] == 'Y'}
					<textarea{$n}{$hint}cols="80" rows="{$v.size|default: 10}" wrap="off" {if $input_class} class="{$input_class}"{/if}>{$cv}</textarea>
					<script type="text/javascript">
						CKEDITOR.replace('{$edit_form_name}_{$f}');
					</script>
				{elseif $v[0] == 'W'}
					{if $input_wrap}
						<div class="{$input_wrap}">
							<textarea{$n}{$hint}cols="60"{if $v.size > 0} rows="{$v.size}"{/if} wrap="off" {if $input_class} class="{$input_class}"{/if} >{$cv}</textarea>
						</div>
					{else}
						<textarea{$n}{$hint}cols="60"{if $v.size > 0} rows="{$v.size}"{/if} wrap="off" {if $input_class} class="{$input_class}"{/if}>{$cv}</textarea>
					{/if}

				{elseif $v[0] == 'XX'}
					<span class="value{$class}">
						{if is_array($v[3])}
							{$v[3][$cv]}
						{elseif $v[3]}
							{$v[3]}
						{else}
							{$cv}
						{/if}
					</span>
				{else}
					{if $input_wrap}
						<div class="{$input_wrap}">
							<input{$n}{$hint}value="{$cv}" size="{if $v.size > 0}{$v.size}{else}60{/if}" type="text" {if $input_class} class="{$input_class}"{/if}>
						</div>
					{else}
						<input{$n}{$hint}value="{$cv}" size="{if $v.size > 0}{$v.size}{else}60{/if}" type="text" {if $input_class} class="{$input_class}"{/if}>
					{/if}
				{/if}
			{/if}
	{else}
			<label for="{$edit_form_name}_$f" {if $label_class} class="{$label_class}"{/if}>{$l}</label>
		<td align="left"{if $r_width} width="{$r_width}"{/if}>
			{$error_text}
			{if $v[0] == 'X'}
				{*$hf*}
				{if $input_wrap}
					<div class="{$input_wrap}">
						<input disabled {if $input_class} class="{$input_class}"{/if} value='{if is_array($v[3])}{$v[3][$cv]|strip_tags}{elseif $v[3]}{$v[3]|strip_tags}{else}{$cv|strip_tags}{/if}'>
					</div>	
				{else}
					<input disabled {if $input_class} class="{$input_class}"{/if} value='{if is_array($v[3])}{$v[3][$cv]|strip_tags}{elseif $v[3]}{$v[3]|strip_tags}{else}{$cv|strip_tags}{/if}'>
				{/if}	

			{elseif $v[0] == 'A'}
				<textarea{$n}{$hint}{if $v.size > 0} cols="{$v.size}"{/if} rows="5" class="text_small"{$class}{$error_class}>{$cv}</textarea>
			{elseif $v[0] == 'E'}
				<input{$n}value="{$cv}" size="{if $v.size > 0}{$v.size}{else}20{/if}"type="file" class="file{$class}{$error_class}">

			{elseif $v[0] == 'C'}
				{if $input_wrap}
					<div class="{$input_wrap}">
						<input{$n}value="1"{if $cv}  checked="checked"{/if} type="checkbox" class="checkbox_small{$class}{$error_class}">
					</div>
				{else}
					<input{$n}value="1"{if $cv} checked="checked"{/if} type="checkbox" class="checkbox_small{$class}{$error_class}">
				{/if}

			{elseif $v[0] == 'R'}
				{if $input_wrap}
					<div class="{$input_wrap}">
						<input{$n}value="{$v[3]}"{if $cv == $v[3]} checked="checked"{/if} type="radio" class="radio{$class}{$error_class}">
					</div>
				{else}
					<input{$n}value="{$v[3]}"{if $cv == $v[3]} checked="checked"{/if} type="radio" class="radio{$class}{$error_class}">
				{/if}

			{elseif $v[0] == 'S'}
				{if $input_wrap}
					<div class="{$input_wrap}">
						<select{$n}{if $v.size > 0} size="{$v.size}"{/if}{if $v.multiple} multiple="multiple"{/if} {if $input_class} class="{$input_class}"{/if}>
					
						{foreach from=$v[3] key=i item=iv}
							{if $iv === ''}
								<optgroup label="&nbsp;{$i}">
							{else}
								<option value="{$i}"{if ($cv == $i) or ($v.multiple and is_array($cv) and in_array($i, $cv))} selected{/if}>
									{$iv}
								</option>
							{/if}
						{/foreach}
						</select>
					</div>
				{else}	
					<select{$n}{if $v.size > 0} size="{$v.size}"{/if}{if $v.multiple} multiple="multiple"{/if} {if $input_class} class="{$input_class}"{/if}>
					{foreach from=$v[3] key=i item=iv}
						{if $iv === ''}
							<optgroup label="&nbsp;{$i}">
						{else}
							<option value="{$i}"{if ($cv == $i) or ($v.multiple and is_array($cv) and in_array($i, $cv))} selected{/if}>
								{$iv}
							</option>
						{/if}
					{/foreach}
					</select>
				{/if}

			{elseif $v[0] == 'I'}
				{if $input_wrap}
				<div class="{$input_wrap}">
					<input{$n}value="{$cv}" size="{if $v.size > 0}{$v.size}{else}4{/if}"type="text" {if $input_class} class="{$input_class}"{/if}>
				</div>
				{else}
					<input{$n}value="{$cv}" size="{if $v.size > 0}{$v.size}{else}4{/if}"type="text" {if $input_class} class="{$input_class}"{/if}>
				{/if}

			{elseif in_array($v[0], array('F', '$', '%'))}
				{if $input_wrap}
				<div class="{$input_wrap}">
					<input{$n}value="{$cv}" size="{if $v.size > 0}{$v.size}{else}10{/if}"type="text" {if $input_class} class="{$input_class}"{/if}>
				</div>
				{else}
					<input{$n}value="{$cv}" size="{if $v.size > 0}{$v.size}{else}10{/if}"type="text" {if $input_class} class="{$input_class}"{/if}>
				{/if}

			{elseif $v[0] == '*'}
				{if $input_wrap}
				<div class="{$input_wrap}">
					<input{$n}{$hint}value="{_IN($f)}" size="{if $v.size > 0}{$v.size}{else}20{/if}"type="password" {if $input_class} class="{$input_class}"{/if}>
				</div>
				{else}
					<input{$n}{$hint}value="{_IN($f)}" size="{if $v.size > 0}{$v.size}{else}20{/if}"type="password" {if $input_class} class="{$input_class}"{/if}>
				{/if}

			{else}
				{if $input_wrap}
				<div class="{$input_wrap}">
					<input{$n}{$hint}value="{$cv}" size="{if $v.size > 0}{$v.size}{else}20{/if}"type="text" {if $input_class} class="{$input_class}"{/if}>
				</div>
				{else}
					<input{$n}{$hint}value="{$cv}" size="{if $v.size > 0}{$v.size}{else}20{/if}"type="text" {if $input_class} class="{$input_class}"{/if}>
				{/if}

			{/if}
			{/if}

								{*** COMMENTS ***}
			{if $v.readonly}
				{$hf}
			{/if}
			{if !$v.comment}
				{if $v[0] == '*'}
					{if $vv}
						&nbsp;<small>[is set]</small>
					{/if}
				{elseif $v[0] == 'DT'}
					{$v.comment = $InputDateFormatLong}
				{elseif $v[0] == 'D'}
					{$v.comment = $InputDateFormat}
				{/if}
			{/if}
			{if substr($v.comment, 0, 1) == ' '}
				{$v.comment}
			{elseif $v.comment}
				&nbsp;<i><small>[{$v.comment}]</small></i>
			{/if}
		</td>
{/if}

{/strip}

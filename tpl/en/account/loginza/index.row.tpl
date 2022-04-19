{strip}
<td>
	<image src="//favicon.yandex.net/favicon/{getDomain($l.url)}">
</td>
<td>
	<a href="{$l.url}" target="_blank">{getDomain($l.url)}</a>
</td>
<td>
	<a href="{$_selfLink}?sub={base64_encode($l.url)}" onClick="return confirm('Confirm account deallocation \'{getDomain($l.url)}\'');"><small>deallocate</small></a>
</td>
{/strip}

{strip}
{include file='headercabinet.tpl' title='Исходящие сообщения'}

<div class="page-heading animateed fadeInDown">
    <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;">
        <h1>Исходящие сообщения</h1>
    </div>
    <div class="clear"></div>
</div>
<div class="box-info full animated fadeInDown">
	<div class="col-xs-12">
		<div class="settings-nav clearfix">
			<a href="/{_link module='message/show'}?new" class=""><i class="fa fa-envelope"></i> Написать новое сообщение</a>
			<a href="/messages" class=""><i class="fa fa-level-down"></i> Входящие</a>
			<a href="/messages/outbox" class="active"><i class="fa fa-level-up"></i> Исходящие</a>
		</div>
		<h2 class="text-left"><i class="fa fa-level-up"></i> Исходящие сообщения</h2>
		<div class="s-divider" style="margin-top: 20px; margin-bottom: 40px;"></div>

{if $list}

	{include file='mlist.tpl' 
		url='*'
		table_class='table table-striped'
		fields=[
			'mID'=>['ID'],
			'mTS'=>['Дата'],
			'uLogin'=>['Получатель'],
			'mTopic'=>['Тема'],
			'mText'=>['Текст']
		]
		values=$list
		row='*'
	}
	
{else}

	Сообщений нет

{/if}


		<br><br>
	</div>
</div>

{include file='footercabinet.tpl'}
{/strip}

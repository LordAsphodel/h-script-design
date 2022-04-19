{strip}

{include file='headercabinet.tpl' title='Баланс'}

<div class="page-heading">
    <div class="col-lg-9 col-sm-12 col-md-9 col-xs-12" style="padding-left: 0px;">
        <h1>Информация о балансе</h1>
    </div>
    <div class="clear"></div>
</div>

{if isset($smarty.get.fail)}

	<h2>Операция НЕ завершена!</h2>
	<p class="info">
		Процедура пополнения была прервана или произошла ошибка.<br>
		Попробуйте <a href="{$_selfLink}">повторить операцию</a> позже
	</p>

{else}

	{include file='balance/_bal.tpl'}
	<br>
    <div class="box-info full animated fadeInDown">
    <h2 class="text-left"> <i class="fa fa-history"></i> Мои операции</h2> <br>
	{if $list}
		{include file='balance/_statuses.tpl'}

		{include file='mlist.tpl' 
            url='*'
            table_class='table table-striped'
			fields=[
				'oTS'=>['Дата/Исполнено'],
				'oOper'=>['Операция'],
				'oCID'=>['Плат.система'],
				'oSum1'=>['Приход'],
				'oSum2'=>['Расход'],
				'oBatch'=>['Batch-номер'],
				'oState'=>['Статус'],
				'oMemo'=>['Примечание']
			]
			values=$list
			row='*'
		}
		        <p align="center"><a href="{_link module='balance/oper'}?add=CASHIN" class="btn btn-primary">          <b><u>Пополнить</u></b>          </a>
		        &nbsp;<a href="{_link module='balance/oper'}?add=CASHOUT" class="btn btn-primary"><b><u>Вывести*</u></b> </a></p>
        *Вывод доступен только по воскресеньям в соответствии с <a href="/rules">регламентом</a> проекта.

	</div>
	
		
	{/if}

{/if}

{include file='footercabinet.tpl'}
{/strip}

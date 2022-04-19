{strip}
{include file='headerpage.tpl' title='Новость'}

	<section class="page">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">

					<a href="/about" class="page__btn page__btn_l hidden-xs"><i class="fa fa-arrow-circle-o-left"></i> О нас</a>
					<a href="/support" class="page__btn page__btn_r hidden-xs">Контакты <i class="fa fa-arrow-circle-o-right"></i></a>

					<a href="/about" class="page__btn page__btn_l hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-left"></i></a>
					<a href="/support" class="page__btn page__btn_r hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-right"></i></a>

					<h2><b>Новость</h2>
				</div>
				<div class="col-xs-12">
					<div class="news">
					<h3>{$el.nTopic}</h3>
					<small>{$el.nTS}</small>
					<p>
						<b>{$el.nText}</b>
					</p>
				</div>
				</div>
			</div>
		</div>
	</section>

{include file='footer.tpl'}
{/strip}

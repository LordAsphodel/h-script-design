{strip}
{include file='headerpage.tpl' title='Announcements'}

	<section class="page">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">

					<a href="/about" class="page__btn page__btn_l hidden-xs"><i class="fa fa-arrow-circle-o-left"></i> About us</a>
					<a href="/support" class="page__btn page__btn_r hidden-xs">Contact us <i class="fa fa-arrow-circle-o-right"></i></a>

					<a href="/about" class="page__btn page__btn_l hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-left"></i></a>
					<a href="/support" class="page__btn page__btn_r hidden-sm hidden-md hidden-lg"><i class="fa fa-arrow-circle-o-right"></i></a>

					<h2><b>Announcements</b> of project</h2>
				</div>

{if $list}

	<div class="col-xs-12">

	{foreach name=list from=$list key=id item=l}


				<div class="news">
					<h3><a href="{_link module='news/show' chpu=[$l.nID, $l.nTopic]}">{$l.nTopic}</a></h3>
					<small>{$l.nTS}</small>
					<p>
						<b>{$l.nAnnounce|nl2br}</b>
					</p>
				</div>

	{/foreach}

	{include file='pl.tpl'}

	</div>

{/if}

			</div>
		</div>
	</section>

{include file='footer.tpl'}
{/strip}

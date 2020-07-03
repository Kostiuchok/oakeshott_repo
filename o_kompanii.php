<?php $x=row_id(company_text,1); ?>
<h1 class="main-header">О компании</h1>

	<div class="container">
		<hr class="line-header">
	<div class="main">
		<div style="float:left;">
			<img style="margin: 40px 25px;" src="img/publications_logo.png" alt="Компания Oakeshott Insurance Consultants Ltd.">
		</div>
		<div style="margin-left:160px;">
			<h2 style="font-weight: bold; font-size:14px;padding-top:35px;"><?=$x->title;?></h2>
			<br>
			<?=$x->text;?>
		</div>
	</div>
	</div>
	
	
	<!-- далее редактировать -->
	<aside class="sidebarRight">
		<h2>Документы</h2>
		<hr class="line-header">
		<ul class="books-list">
<?php 
	$d_ar=company_doc();
	foreach($d_ar as $d){
?>
			<li>
				<a id="single_1" href="docs/<?=$d->filename;?>" title="Документы компании"><?=$d->name;?></a>
				<p><?=$d->title;?></p>
			</li>
<?php 
	}
?>				
		</ul>
	</aside>
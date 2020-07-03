		<div class="breadcrumbs">
			<ul>
				<li><a href="#">конференции/семинары</a></li>
				<li><a class="is-active" href="#">семинары</a></li>
			</ul>
		</div>
	<div class="container">
		<hr class="line-header">
	<div class="main">
		<ul class="seminar-list">
<?php 
	$d_ar=seminars();
	foreach($d_ar as $d){
?>			
			<li class="seminar">
				<div class="seminar__title"><?=$d->name;?></div>
				<p><?=$d->address;?></p>
				<ul class="seminar__docs">
<?php 
	$d_ar=seminars_doc($d->id);
	foreach($d_ar as $d1){
?>
					<li class="seminar__item">
						<a href="seminars_doc/<?=$d1->filename;?>">
							<i class="doc-icon"></i>
							<span><?=$d1->url_name;?></span>
						</a>
						<span>(<?=$d1->size;?>KB)</span>
					</li>
					
<?php }	?>					
				</ul>
				<p><?=$d->text;?></li>
<?php }	?>				
		</ul>
		<!--
		<div class="pagination">
			<ul>
				<li class="is-active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">Следующая</a></li>
				<li><a href="#">Последняя</a></li>
			</ul>
		</div>
		-->
	</div>
	</div>
	<aside class="sidebarRight">
		<h2>ВСЕ КОНФЕРЕНЦИИ И СЕМИНАРЫ</h2>
		<hr class="line-header">
		<ul class="conference-list">
<?php 
	$d_ar=seminars();
	foreach($d_ar as $d){
?>			
			<li>
				<p><?=$d->date;?></p>
				<ul>
					<li><a href="#"><?=$d->name;?></a></li>
				</ul>
			</li>
<?php }	?>			
		</ul>
	</aside>
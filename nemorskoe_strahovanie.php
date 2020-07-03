<?php 
$x=row_id(nemorskoe_strahovanie,1); 
?>
<div class="breadcrumbs">
	<ul>
		<li><a href="#">виды деятельности</a></li>
		<li><a class="is-active" href="#">неморское страхование</a></li>
	</ul>
</div>

<div class="container">
	<hr class="line-header">
	<div class="main">
		<article class="ins-type">
			<h1 class="ins-type__title"><?=$x->name;?></h1>
			<h2 class="ins-type__sub-title"><?=$x->title;?></h2>
			
				<?=$x->text;?>
			
			<div class="ins-inquirer">
				<div class="ins-inquirer__title">Некторые опросники страхования неморских рисков:</div>
				<ul class="publication__docs">
					<?php 
						$d_ar=nemorskoe();
						foreach($d_ar as $d){
					?>	
								<li><a href="docs/<?=$d->filename;?>" title="Опросник страхования неморских рисков"><?=$d->name;?></a> <?=$d->title;?> ( <?=$d->size;?> КБ )</li>
					<?php }	?>						
					
				</ul>
				<p>Базовые условия страхование неморских рисков:</p>
				<ul class="publication__docs">
					<?php 
						$d_ar=nemorskoe1();
						foreach($d_ar as $d){
					?>	
								<li><a href="docs/<?=$d->filename;?>" title="Условия страхования неморских рисков"><?=$d->name;?></a> <?=$d->title;?> ( <?=$d->size;?> КБ )</li>
					<?php }	?>					
				</ul>
			</div>
			<div class="i-logotype">
				<span>
					<i></i>
					<strong>Оукшотт Іншуренс Консалтантс Лімітед</strong><br>
					Страховые консультанты брокеры
				</span>
			</div>	
		</article>
	</div>
</div>
<?php 
include_once "right_menu.php";
?>

	
	
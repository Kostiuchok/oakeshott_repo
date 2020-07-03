<?php 
$x=row_id(morskoe_strahovanie,1); 
?>
<div class="breadcrumbs">
	<ul>
		<li><a href="#">виды деятельности</a></li>
		<li><a class="is-active" href="#">морское страхование</a></li>
	</ul>
</div>

	<div class="container">
		<hr class="line-header">
		<div class="main">
			<article class="ins-type">
				<h1 class="ins-type__title"><?=$x->name;?></h1>
				<h2 class="ins-type__sub-title"><?=$x->title;?></h2>	
			
					<?=$x->text;?>			

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
	
	<aside class="sidebarRight">
		<h2>ПЕРЕЧЕНЬ ОСНОВНЫХ ОПРОСНИКОВ</h2>
		<hr class="line-header">
		<?php 
			$d_ar=ar_obj(morskoe_strahovanie_doc_1);
		?>
		<ul class="docs-list">
			<?php 
			 foreach($d_ar as $d){	?>
						<li><a href="docs/<?=$d->filename;?>" title="Опросник по страхованию"><?=$d->name;?></a></li>
			<?php }	?>		
			
		</ul>
	</aside>
	<aside class="sidebarRight">
		<h2>БАЗОВЫЕ УСЛОВИЯ СТРАХОВАНИЯ МОРСКИХ РИСКОВ</h2>
		<hr class="line-header">
		<?php 
			$d_ar=ar_obj(morskoe_strahovanie_doc_2);
		?>
		<ul class="docs-list">
		<?php 
			 foreach($d_ar as $d){	?>
						<li><a href="docs/<?=$d->filename;?>" title="Условия страхования морских рисков"><?=$d->name;?></a></li>
		<?php }	?>
		</ul>
	</aside>
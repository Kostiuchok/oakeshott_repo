<?php 
$x=row_id(nestandartnoe,1); 
?>
		<div class="breadcrumbs">
			<ul>
				<li><a href="#">виды деятельности</a></li>
				<li><a class="is-active" href="#">нестандартные и новые продукты</a></li>
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
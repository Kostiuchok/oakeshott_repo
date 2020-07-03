<?php 
$id=strip_tags(trim($_GET['id']));
$x=row_id(news,$id);

?>
		<div class="breadcrumbs">
			<ul>
				<li><a href="index.php?i=news">новости</a></li>
				<li><a class="is-active" href="#"><?=$x->name;?></a></li>
			</ul>
		</div>

	<div class="container container_bg">
	<div class="main">
		<div class="main-new main-new_single">
			<h1 class="main-new__title"><?=$x->name;?></h1>
			<div class="new__text">
				<h2 class="news__sub-title"><?=$x->title;?></h2>
				<?php 
				if(($x->filename)!="no")
				{?>
				<img src="news/<?=$x->filename;?>" alt="" style="max-width: 350px;">
				<?php }?>
				
				<?=$x->text;?>
			</div>
			<div class="i-logotype">
				<span>
					<i></i>
					<strong>Оукшотт Іншуренс Консалтантс Лімітед</strong><br>
					<?=date_format(date_create($x->date),'Y');?>
				</span>
			</div>
		</div>
	</div>
	</div>
		<h1 class="main-header">Новости</h1>
<?php 
$y=news_1();
?>
	<div class="container container_bg">
	<div class="main">
		<div class="main-new">
			<a href="index.php?i=news1&id=<?=$y->id;?>" class="main-new__title"><?=$y->name;?></a>
			<p class="new__text">
				<?php 
				if(($y->filename)!="no")
				{?>
				<img src="news/<?=$y->filename;?>" alt="" width="75"/>
				<?php }?>
				<?=$y->title;?>
			</p>
			<div class="i-logotype i-logotype_left">
				<span>
					<i></i>
					<strong>Оукшотт Іншуренс Консалтантс Лімітед</strong><br>
					<?=date_format(date_create($y->date),'d.m.Y');?>
				</span>
			</div>
		</div>
		<div class="news-list">
			<a href="#" class="news-list__link">ВСЕ НОВОСТИ</a>
			
			
			<ul class="news-list__content">
<?php 
	$d_ar=news();
	foreach($d_ar as $x){
		if($y->id==$x->id) continue;
?>
				<li class="news-list__item">
					<hr class="line-header">
					<a href="index.php?i=news1&id=<?=$x->id;?>">
						<h1 class="new-list__title"><?=$x->name;?></h1>
						<p class="new__text">
							<?php 
							if(($x->filename)!="no")
							{?>
							<img src="news/<?=$x->filename;?>" alt="" width="75" >
							<?php }?>
							<span><?=date_format(date_create($x->date),'d.m.Y');?></span>
							<?= mb_substr($x->title,0,250,'UTF-8').'...';?>
						</p>	
					</a>
				</li>
<?php }	?>
				
			</ul>
		</div>
	</div>
	</div>
<?php 
$id=strip_tags(trim($_GET['id']));
$x=row_id(books,$id);

?>

		<div class="breadcrumbs">
			<ul>
				<li><a href="index.php?i=publications" title="Статьи о страховании и перестраховании">публикации</a></li>
				<li><a href="index.php?i=books" title="Книги компании Оукшотт Иншуренс Лимитед">книги</a></li>
				<li><a class="is-active" href="">«<?=$x->name;?>»</a></li>
			</ul>
		</div>
	<div class="container">
		<hr class="line-header">
	<div class="main">
		<div class="single-book">
			<div class="single-book__img">
				<img src="books/<?=$x->book_img;?>" alt="Обложка книги по страхованию">
			</div>
			<div class="single-book__content">
				<h1 class="single-book__title">«<?=$x->name;?>»</h1>
				<div class="single-book__info">
					<p>Автор. <?=$x->author;?></p>
					<p>Публикация: <?=date_format(date_create($x->date),'Y');?> год</p>
				</div>
				<div class="single-book__text">	<?=$x->title;?>	</div>	
			</div>	
		</div>
	</div>
	</div>
	<aside class="sidebarRight">
		<h2>О КНИГЕ</h2>
		<hr class="line-header">
		<ul class="books-list">
			<li>
				<p><b>«<?=$x->name;?>»</b></p>
				<p>Автор <?=$x->author;?></p>
				<p>Издательство: <?=$x->editor;?></p>
				<p>Публикация: <?=date_format(date_create($x->date),'Y');?> год</p>
				<p>К-во страниц: <?=$x->copies;?> шт.</p>
				<p>Стоимость: <?=$x->price;?> у.е.</p>
			</li>
		</ul>
	</aside>
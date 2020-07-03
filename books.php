		<div class="breadcrumbs">
			<ul>
				<li><a href="index.php?i=publications" title="Статьи о страховании и перестраховании">публикации</a></li>
				<li><a class="is-active" href="index.php?i=books" title="Книги компании Оукшотт Иншуренс Лимитед">книги</a></li>
			</ul>
		</div>
	<div class="container">
		<hr class="line-header">
	<div class="main">
		<ul class="books">
<?php $d_ar=ar_obj(books,date);
	foreach($d_ar as $d){
?>			
			
			<li class="book">
				<div class="book__img">
					<img src="books/<?=$d->book_img;?>" width="100" alt="Обложка книги по страхованию">
				</div>		
				
				<div class="book__content">
					<a href="index.php?i=books1&id=<?=$d->id;?>" class="book__title" title="Название книги"><?=$d->name;?></a>
					<p><?=mb_substr($d->title,0,250,'UTF8')."...";?></p>
				</div>
			</li>
			
<?php 
	}
?>				
			
		</ul>
	</div>
	</div>
	<aside class="sidebarRight">
		<h2>СПИСОК КНИГ</h2>
		<hr class="line-header">
		<ul class="books-list">
<?php $d_ar=ar_obj(books,date);
	foreach($d_ar as $x){
?>				
			<li>
				<a href="#">«<?=$x->name;?>»</a>
				<p>Автор <?=$x->author;?></p>
				<p>Издательство: <?=$x->editor;?></p>
				<p>Публикация: <?=date_format(date_create($x->date),'Y');?> год</p>
			</li>
<?php }?>				
		</ul>
	</aside>
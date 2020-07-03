<?php 
$id=strip_tags($_GET['id']);
$x=row_id(books,$id);
?>
<!-- Grid row -->
				<div class="row">
				
					<!-- Data block -->
					<article class="span12 data-block">
						<div class="data-container" >
							<header>
								<h2><span class="awe-star"></span> Публикации - книги - редактирование информации </h2>

							</header>
							
	<!-- ***************************************** Content ************************************************* -->

<form action="router.php" method="POST" name="" enctype="multipart/form-data">
	<fieldset>
		 <div class="control-group">
			<label class="control-label" for="input">Название книги</label>
			<div class="controls">
					<input  class="input-xlarge span8" type="text" name="name" value="<?=$x->name;?>"/>
					<p class="help-block">Добавьте название книги</p>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="textarea"> Описание книги</label>
			<div class="controls">
					<textarea  class="input-xlarge span8" rows="12" name="title"><?=$x->title;?></textarea>
					<p class="help-block">Добавьте описание книги </p>
			</div>
		</div> 
		

		
		<div class="control-group">
			<label class="control-label" for="input"> Название файла в базе: 
				<span style="color: #ff0000; font-size: 15px; margin-left: 15px;">
					<?=$x->book_img;?> 
				</span> 
			</label>
				 <input type="file" name="filename" class="btn btn-info" accept="image/jpeg,image/png,image/gif" >
				 <input type="hidden" name="filename_old" value="<?=$x->book_img;?>"/>
				 <input type="hidden" name="id" value="<?=$id;?>"/>
				 <p class="help-block"> при необходимости выберите другое изображение для обложки книги ( расширение файла с маленькой буквы - пример name.jpg )</p>
		</div>
		
		
		<div class="control-group">
			<label class="control-label" for="input">Автор книги</label>
			<div class="controls">
					<input  class="input-xlarge span8" type="text" name="author" value="<?=$x->author;?>"/>
					<p class="help-block">укажите автора книги</p>
			</div>
		</div> 
		
		<div class="control-group">
			<label class="control-label" for="input"> Издательство </label>
			<div class="controls">
					<input  class="input-xlarge span8" type="text" name="editor" value="<?=$x->editor;?>"/>
					<p class="help-block">укажите издательство</p>
			</div>
		</div> 
		
		<div class="control-group">
			<label class="control-label" for="input">Год публикации книги</label>
			<div class="controls">
						<input id="datepicker" class="input-xlarge" type="text" name="date" value="<?=$x->date;?>"/> 
						<p class="help-block">Выберите дату публикации книги</p>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="input"> Количество страниц </label>
			<div class="controls">
					<input  class="input-xlarge" type="number" name="copies"   value="<?=$x->copies;?>" />
					<p class="help-block">укажите количество страниц книги ( только целое число )</p>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="input">Стоимость книги</label>
			<div class="controls">
					<input  class="input-xlarge" type="text" name="price" value="<?=$x->price;?>" />
					<p class="help-block">укажите стоимость книги ( только число, дробную часть отделять точкой - пример  100.50 )</p>
			</div>
		</div>
		 
		 <div class="form-actions">
			<button class="btn btn-alt btn-large btn-success" type="submit" name="books_edit"> Обновить информацию в базе </button>
		</div>
		 
	</fieldset>
</form>

		
	<!-- ***************************************** Content ************************************************* -->
						
							
						</div>
					</article>
					<!-- /Data block -->
			</div>
				<!-- /Grid row -->
					
				<div class="alert alert-inverse">
					<button class="close" type="button" data-dismiss="alert">×</button>
					<strong> Публикации </strong> - книги - редактирование информации
				</div>

<!--	********************************** 	календарь	**************************************	-->
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script>
		  $(function() {
		    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
		  });
		jQuery(function($){
	$.datepicker.regional['ru'] = {
		closeText: 'Закрыть',
		prevText: '&#x3C;Пред',
		nextText: 'След&#x3E;',
		currentText: 'Сегодня',
		monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
		'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
		monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
		'Июл','Авг','Сен','Окт','Ноя','Дек'],
		dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
		dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
		dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
		weekHeader: 'He',
		//dateFormat: 'dd.mm.yy',
		dateFormat: 'yy.mm.dd',
		//dateFormat: 'yy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	$.datepicker.setDefaults($.datepicker.regional['ru']);
});  
</script>
<!--	********************************** 	календарь	**************************************	-->
     
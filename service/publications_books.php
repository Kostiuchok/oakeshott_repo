
<!-- Grid row -->
				<div class="row">
				
					<!-- Data block -->
					<article class="span12 data-block">
						<div class="data-container" >
							<header>
								<h2><span class="awe-star"></span> Публикации - книги</h2>

							</header>
							
	<!-- ***************************************** Content ************************************************* -->

<form action="router.php" method="POST" name="" enctype="multipart/form-data">
	<fieldset>
		 <div class="control-group">
			<label class="control-label" for="input">Название книги</label>
			<div class="controls">
					<input  class="input-xlarge span8" type="text" name="name" />
					<p class="help-block">Добавьте название книги</p>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="textarea"> Описание книги</label>
			<div class="controls">
					<textarea  class="input-xlarge span8" rows="12" name="title"></textarea>
					<p class="help-block">Добавьте описание книги </p>
			</div>
		</div> 
		
		<div class="control-group">
			<label class="control-label" for="input">Загрузите обложку для книги</label>
			 <input type="file" name="filename" class="btn btn-info"  accept="image/jpeg,image/png,image/gif">			     
			 <p class="help-block"> выберите и загрузите обложку для книги ( расширение файла с маленькой буквы - пример name.jpg )</p>
		</div> 
		
		<div class="control-group">
			<label class="control-label" for="input">Автор книги</label>
			<div class="controls">
					<input  class="input-xlarge span8" type="text" name="author" />
					<p class="help-block">укажите автора книги</p>
			</div>
		</div> 
		
		<div class="control-group">
			<label class="control-label" for="input"> Издательство </label>
			<div class="controls">
					<input  class="input-xlarge span8" type="text" name="editor" />
					<p class="help-block">укажите издательство</p>
			</div>
		</div> 
		
		<div class="control-group">
			<label class="control-label" for="input">Год публикации книги</label>
			<div class="controls">
						<input id="datepicker" class="input-xlarge" type="text" name="date" > 
						<p class="help-block">Выберите дату публикации книги</p>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="input">Количество страниц</label>
			<div class="controls">
					<input  class="input-xlarge" type="number" name="copies"  required/>
					<p class="help-block">укажите количество страниц книги ( только целое число )</p>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="input">Стоимость книги</label>
			<div class="controls">
					<input  class="input-xlarge" type="text" name="price" />
					<p class="help-block">укажите стоимость книги ( только число, дробную часть отделять точкой - пример  100.50 )</p>
			</div>
		</div>
		 
		 <div class="form-actions">
			<button class="btn btn-alt btn-large btn-success" type="submit" name="books_add">Добавить информацию в базу</button>
		</div>
		 
	</fieldset>
</form>

<div style="max-height: 500px; overflow: auto; ">	
		
	<?php $d_ar=ar_obj(books, date);
	foreach($d_ar as $d){ 
		?>
	<form class="alert "  action="router.php" method="POST" style="padding:  0px; ">
		<img src="/books/<?=$d->book_img;?>" width="80" style="margin: 10px;"/>
		
		<input value="<?=$d->name;?>" type="text"  class="span5" style="margin-top: 10px;margin-left: 15px;"/>

               
		
		<input  value="<?=$d->id;?>" type="hidden" name="id"/>
		<input  type="submit" name="books_del" class="btn btn-danger pull-right" value="удалить" style="margin-top: 10px;margin-right: 15px;"/>
		
		<input  type="submit" name="books_edit_url" class="btn btn-success btn-danger pull-right" value="Редактировать" style="margin-top: 10px;margin-right: 25px;"/>
                 <label class="control-label" style="margin-left: 15px;"> Дата : 
				<span style="color: #8A2BE2; font-size: 15px; margin-left: 15px;">
					<?=$d->date;?> 
				</span> 
                </label>  
					
	</form>  	
		
	<?php 
	}
	?>	
	</div>		
	<!-- ***************************************** Content ************************************************* -->
						
							
						</div>
					</article>
					<!-- /Data block -->
			</div>
				<!-- /Grid row -->
					
				<div class="alert alert-inverse">
					<button class="close" type="button" data-dismiss="alert">×</button>
					<strong> Публикации </strong> - книги
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
    
<?php 
$id=strip_tags($_GET['id']);
$x=row_id(news,$id);
?>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!-- Grid row -->
				<div class="row">
				
					<!-- Data block -->
					<article class="span12 data-block">
						<div class="data-container" >
							<header>
								<h2><span class="awe-star"></span> Новости - редактирование информации</h2>

							</header>
							
	<!-- ***************************************** Content ************************************************* -->

<form action="router.php" method="POST" name="" enctype="multipart/form-data">
	<fieldset>
		<div class="control-group">
			<label class="control-label" for="input">Название новости</label>
			<div class="controls">
				<input  class="input-xlarge span8" type="text" name="name" value="<?=$x->name;?>" />
				<p class="help-block">Добавьте название новости</p>
			</div>
		</div>
			
		<div class="control-group">
			<label class="control-label" for="input">Дата новости</label>
			<div class="controls">
				<input id="datepicker" class="input-xlarge" type="text" name="date" value="<?=$x->date;?>"> 
				<p class="help-block">Выберите дату новости</p>
			</div>
		</div>
			
		<div class="control-group">
			<label class="control-label" for="input"> Название файла в базе: 
				<span style="color: #ff0000; font-size: 15px; margin-left: 15px;">
					<?=$x->filename;?> 
				</span> 
			</label>
				 <input type="file" name="filename" class="btn btn-info" accept="image/jpeg,image/png,image/gif" >
				 <input type="hidden" name="filename_old" value="<?=$x->filename;?>"/>
				 <input type="hidden" name="id" value="<?=$id;?>"/>
				 <p class="help-block"> при необходимости выберите другое изображение для обложки книги ( расширение файла с маленькой буквы - пример name.jpg )</p>
		</div>

		<div class="control-group">
			<label class="control-label" for="textarea">Описание для  новости</label>
			<div class="controls">
				 <textarea  class="input-xlarge span8" rows="3" name="title"><?=$x->title;?></textarea>
				 <p class="help-block">Добавьте описание для новости ( на сайте этот текст выделяется жирным шрифтом)</p>
			</div>
		</div>										
													
		<div class="control-group">
			<label class="control-label" for="textarea">Текст новости</label>
			<div class="controls">
				 <textarea  class="input-xlarge span8" rows="8" name="text"><?=$x->text;?></textarea>
				 <p class="help-block">Добавьте текст новости</p>
			</div>
		</div>
			
		<div class="form-actions">
			  <button class="btn btn-alt btn-large btn-success" type="submit" name="news_edit"> Обновить новость в базе</button>
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
					<strong> Новости </strong> - редактирование информации
				</div>

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
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	$.datepicker.setDefaults($.datepicker.regional['ru']);
});  
		  
	  
</script>

<script type="text/javascript">
            var ckeditor1 = CKEDITOR.replace('text');
           // AjexFileManager.init({returnTo: 'ckeditor', editor: ckeditor1});
</script>    
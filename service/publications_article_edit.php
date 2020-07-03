<?php 
$id=strip_tags($_GET['id']);
$x=row_id(publications,$id);
?>
<!-- Grid row -->
				<div class="row">
				
					<!-- Data block -->
					<article class="span12 data-block">
						<div class="data-container" >
							<header>
								<h2><span class="awe-star"></span> Публикации - статьи - редактирование информации</h2>

							</header>
							
	<!-- ***************************************** Content ************************************************* -->

<form action="router.php" method="POST" name="" enctype="multipart/form-data">
	<fieldset>
		
		<div class="control-group">
			<label class="control-label" for="input">Год публикации статьи</label>
			<div class="controls">
						<input id="datepicker" class="input-xlarge" type="text" name="date" value="<?=$x->date;?>"> 
						<p class="help-block">Выберите и укажите дату публикации статьи</p>
			</div>
		</div>
		
		
		<div class="control-group">
			<label class="control-label" for="input"> Название статьи</label>
			<div class="controls">
					<input  class="input-xlarge span8" type="text" name="name" value="<?=$x->name;?>"/>
					<p class="help-block"> При необходимости отредактируйте название статьи </p>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="input"> Название файла в базе: 
				<span style="color: #ff0000; font-size: 15px; margin-left: 15px;">
					<?=$x->filename;?> 
				</span> 
			</label>
				 <input type="file" name="filename" class="btn btn-info"  >
				 <input type="hidden" name="filename_old" value="<?=$x->filename;?>"/>
				 <input type="hidden" name="id" value="<?=$id;?>"/>
				 <input type="hidden" name="size_old" value="<?=$x->size;?>"/>
				 <p class="help-block"> при необходимости выберите другой файл</p>
		</div>
		
		<div class="form-actions">
			<button class="btn btn-alt btn-large btn-success" type="submit" name="publications_edit"> Обновить информацию в базе </button>
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
					<strong> Публикации </strong> - статьи - редактирование информации
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
        
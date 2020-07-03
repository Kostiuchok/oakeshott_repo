
<!-- Grid row -->
				<div class="row">
				
					<!-- Data block -->
					<article class="span12 data-block">
						<div class="data-container" >
							<header>
								<h2><span class="awe-star"></span> Публикации - статьи</h2>

							</header>
							
	<!-- ***************************************** Content ************************************************* -->

<form action="router.php" method="POST" name="" enctype="multipart/form-data">
	<fieldset>
		
		<div class="control-group">
			<label class="control-label" for="input">Год публикации статьи</label>
			<div class="controls">
						<input id="datepicker" class="input-xlarge" type="text" name="date" > 
						<p class="help-block">Выберите и укажите дату публикации статьи</p>
			</div>
		</div>
		
		
		<div class="control-group">
			<label class="control-label" for="input"> Название статьи</label>
			<div class="controls">
					<input  class="input-xlarge span8" type="text" name="name" />
					<p class="help-block">Добавьте название </p>
			</div>
		</div>
		
				
		<div class="control-group">
			<label class="control-label" for="input">Загрузите файл</label>
			 <input type="file" name="filename" class="btn btn-info"  >			     
			 <p class="help-block"> выберите и загрузите файл статьи</p>
		</div> 
		
		<div class="form-actions">
			<button class="btn btn-alt btn-large btn-success" type="submit" name="publications_add">Добавить информацию в базу</button>
		</div>
		 
		
		
		
	</fieldset>
</form>

	<div style="max-height: 500px; overflow: auto; ">	
		
<?php 
	$d_ar=publications();
	foreach($d_ar as $d){
?>
	<form class="alert "  action="router.php" method="POST" style="padding:  0px;">
		<input value="<?=$d->name;?>" type="text"  class="span6" style="margin-top: 10px;margin-left: 15px;"/>

		<input  value="<?=$d->id;?>" type="hidden" name="id"/>	
		
		<input  type="submit" name="publications_del" class="btn btn-danger pull-right" value="удалить" style="margin-top: 8px;margin-right: 15px;"/>
		
		<input  type="submit" name="publications_edit_url" class="btn btn-success btn-danger pull-right" value="Редактировать" style="margin-top: 8px;margin-right: 25px;"/>

<label class="control-label" style="margin-left: 15px;"> Размер файла : 
				<span style="color: #ff0000; font-size: 15px; margin-left: 15px;">
					<?=$d->size;?> 
				</span> КБ
</label>
<label class="control-label" style="margin-left: 15px;"> Имя файла : 
				<span style="color: #8A2BE2; font-size: 15px; margin-left: 15px;">
					<?=$d->filename;?> 
				</span> 
</label>
  
 <label class="control-label" style="margin-left: 15px;"> Дата : 
				<span style="color: #8A2BE2; font-size: 15px; margin-left: 15px;">
					<?=$d->date;?> 
				</span> 
</label>              
	</form>  	
		
<?php }	?>	
	</div>		
	<!-- ***************************************** Content ************************************************* -->
						
							
						</div>
					</article>
					<!-- /Data block -->
			</div>
				<!-- /Grid row -->
					
				<div class="alert alert-inverse">
					<button class="close" type="button" data-dismiss="alert">×</button>
					<strong> Публикации </strong> - статьи
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
       
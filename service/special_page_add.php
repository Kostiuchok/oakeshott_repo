<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<!-- Grid row -->
				<div class="row">
				
					<!-- Data block -->
					<article class="span12 data-block">
						<div class="data-container" >
							<header>
								<h2><span class="awe-star"></span> Oakeshott Insurance Consultants Ltd - создание служебной страницы </h2>
 
							</header>
							
							
	<!-- ***************************************** Content ************************************************* -->

<form action="router.php" method="POST" >
	<fieldset>
		
		<div class="control-group">
			<label class="control-label" for="input"> Название страницы </label>
			<div class="controls">
				<input  class="input-xlarge span8" type="text" name="name" value="<?=$x->name;?>" />
				<p class="help-block"> добавте название страницы </p>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="input"> Дата страницы </label>
			<div class="controls">
				<input id="datepicker" class="input-xlarge" type="text" name="date" value="<?=$x->date;?>"> 
				<p class="help-block"> выберите дату страницы </p>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="textarea">Текст страницы</label>
			<div class="controls">
				<textarea  class="input-xlarge span8" rows="15" name="text"><?=$x->text;?></textarea>
				<p class="help-block"> добавте текст страницы</p>
			</div>
		</div>
			
		<div class="form-actions">
			<button class="btn btn-alt btn-large btn-info" type="submit" name="special_page_add"> Добавить информацию в базу </button>
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
					<strong> Oakeshott Insurance Consultants Ltd </strong> - создание служебной страницы
				</div>

<script type="text/javascript">
            var ckeditor1 = CKEDITOR.replace('text');
            AjexFileManager.init({returnTo: 'ckeditor', editor: ckeditor1});
</script>  
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
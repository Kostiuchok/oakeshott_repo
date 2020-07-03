<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<?php 
$id=strip_tags($_GET['id']);
$x=row_id(photoalbum,$id);
?>
<!-- Grid row -->
				<div class="row">
				
					<!-- Data block -->
					<article class="span12 data-block">
						<div class="data-container" >
							<header>
								<h2><span class="awe-star"></span> Фотоальбомы - добавление/редактирование информации</h2>

							</header>
							
	<!-- ***************************************** Content ************************************************* -->

<form action="router.php" method="POST" name="" enctype="multipart/form-data">
	<fieldset>
		
		<div class="control-group">
			<label class="control-label" for="input">Дата для фотоальбома</label>
			<div class="controls">
				<input id="datepicker" class="input-xlarge" type="text" name="date" value="<?=$x->date;?>" > 
				<p class="help-block">Выберите дату для фотоальбома</p>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="input">Название фотоальбома</label>
			<div class="controls">
					<input  class="input-xlarge span8" type="text" name="name" value="<?=htmlspecialchars($x->name);?>" />
					<p class="help-block">Добавьте название фотоальбома</p>
			</div>
		</div>
		
		
		
		<input type="hidden" name="id" value="<?=$id;?>"/>
		
		<div class="form-actions">
			<button class="btn btn-alt btn-large btn-success" type="submit" name="photoalbum_edit"> Обновить информацию в базе и перейти в каталог </button>
		</div>
		
	</fieldset>
<hr></hr>
<div class="alert alert-info" style="margin-top: 25px;">
<strong> Добавление файлов для фотоальбома </strong> - при необходимости выберите и загрузите файлы.
</div>
<!--
</form>

<form action="router.php" method="POST" name="" enctype="multipart/form-data">
-->	
	<fieldset>
		<!--
		<div class="control-group">
			<label class="control-label" for="input">Название URL  для файла</label>
			<div class="controls">
					<input  class="input-xlarge span8" type="text" name="url_name" />
					<p class="help-block">Добавьте название для ссылки на файл</p>
			</div>
		</div>	
		-->	
		<div class="control-group">
			<label class="control-label" for="input"> Загрузка файла для фотоальбома</label>
			<input type="file" name="filename" class="btn btn-info" accept="image/jpeg,image/png,image/gif" >
			     <p class="help-block">при необходимости выберите файл для фотоальбома - можно выбрать несколько файлов поочередно </p>
		</div>
		
		<input type="hidden" name="id_conf" value="<?=$id;?>"/>
		
		<div class="form-actions">
			  <button class="btn btn-alt btn-large btn-info" type="submit" name="photoalbum_doc_add"> Добавить выбранный файл для фотоальбома </button>
		</div>
		
	</fieldset>
</form>	

<div class="alert alert-info">
<strong> Каталог </strong> - добавленных файлов для данного фотоальбома.
</div>





<div style="max-height: 500px; overflow: auto; ">	
		
<?php 
	$d_ar=photoalbum_doc($id);
	foreach($d_ar as $d){
?>
	<form class="alert "  action="router.php" method="POST" style="padding:  10px;">
		<!--
		<input value="<?=htmlspecialchars($d->url_name);?>" type="text"  class="span6" style="margin-top: 10px;margin-left: 15px;"/>
-->
		<input  value="<?=$d->id;?>" type="hidden" name="id"/>	
		<input  value="<?=$id;?>" type="hidden" name="id_conf"/>	
		<div style="overflow: hidden; width: 80px; height: 50px; float: left; margin-right: 15px;">
			<img src="/photoalbum_doc/<?=$d->filename;?>" width="100" />
		</div>
		
		
		<input  type="submit" name="photoalbum_doc_del" class="btn btn-danger pull-right" value=" удалить файл " style="margin-top: 8px;margin-right: 15px;"/>
	
		
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
					<strong> Фотоальбомы </strong> - редактирование   информации 
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

<!-- Grid row -->
				<div class="row">
				
					<!-- Data block -->
					<article class="span12 data-block">
						<div class="data-container" >
							<header>
								<h2><span class="awe-star"></span> Виды деятельности - Облигаторное и факультативное перестрахование</h2>

							</header>
							
	<!-- ***************************************** Content ************************************************* -->
<?php 
$x=row_id(obligatornoe,1); 
?>
<form action="router.php" method="POST" name="" enctype="multipart/form-data">
	<fieldset>
	
	<div class="control-group">
			<label class="control-label" for="input">Название </label>
			<div class="controls">
					<input  class="input-xlarge span8" type="text" name="name" value="<?=$x->name;?>"/>
					<p class="help-block">Добавьте название </p>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="textarea"> Описание</label>
			<div class="controls">
					<textarea  class="input-xlarge span8" rows="3" name="title"><?=$x->title;?></textarea>
					<p class="help-block">Добавьте описание( на сайте этот текст выделяется жирным шрифтом)</p>
			</div>
		</div>	
	<div class="control-group">
		<label class="control-label" for="textarea"> Информация<label>
		<div class="controls">
				<textarea  class="input-xlarge span8" rows="3" name="text"><?=$x->text;?></textarea>
				<p class="help-block">Добавьте или отредактируйте необходимую информацию</p>
		</div>
    </div>
    	
	<div class="form-actions">
		<button class="btn btn-alt btn-large btn-success" type="submit" name="obligatornoe"> Обновить информацию в базе</button>
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
					<strong> Виды деятельности </strong> - Облигаторное и факультативное перестрахование
				</div>

<script type="text/javascript">
            var ckeditor1 = CKEDITOR.replace('text');
            AjexFileManager.init({returnTo: 'ckeditor', editor: ckeditor1});
</script>    
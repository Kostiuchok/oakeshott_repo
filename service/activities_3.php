
<!-- Grid row -->
				<div class="row">
				
					<!-- Data block -->
					<article class="span12 data-block">
						<div class="data-container" >
							<header>
								<h2><span class="awe-star"></span> Виды деятельности - Авиационное страхование</h2>

							</header>
							
	<!-- ***************************************** Content ************************************************* -->
<?php 
$x=row_id(aviacionnoe_strahovanie,1); 
?>
<form action="router.php" method="POST" name="" enctype="multipart/form-data">
	<fieldset>
		
		<div class="control-group">
			<label class="control-label" for="input">Название </label>
			<div class="controls">
					<input  class="input-xlarge" type="text" name="name" value="<?=$x->name;?>"/>
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
			<label class="control-label" for="textarea"> Текст</label>
			<div class="controls">
					<textarea  class="input-xlarge span8" rows="3" name="text"><?=$x->text;?></textarea>
					<p class="help-block">Добавьте текст</p>
			</div>
		</div>	
		
		<div class="form-actions">
			<button class="btn btn-alt btn-large btn-success" type="submit" name="aviacionnoe_strahovanie"> Обновить информацию в базе</button>
		</div>
		
	</fieldset>
</form>


<form action="router.php" method="POST" name="" enctype="multipart/form-data">
	<fieldset>
	
	<div class="control-group">
		<label class="control-label" for="input">Название URL файла</label>
		<div class="controls">
				<input  class="input-xlarge span8" type="text" name="name" />
				<p class="help-block">Добавьте название URL файла</p>
		</div>
	</div>	
	<div class="control-group">
		<label class="control-label" for="input">Название языка файла</label>
		<div class="controls">
				<input  class="input-xlarge span4" type="text" name="title" />
				<p class="help-block">Добавьте название языка файла</p>
		</div>
	</div>	
	
	<div class="control-group">
	<label class="control-label" for="input">Загрузите файл</label>
			 <input type="file" name="filename" class="btn btn-info"  accept="image/jpeg,image/png,image/gif">			     
			 <p class="help-block">Выберите и загрузите файл</p>
	</div>	
		
	<div class="form-actions">
		<button class="btn btn-alt btn-large btn-success" type="submit" name="aviacionnoe_strahovanie_add_doc">Добавить в базу</button>
	</div>	
	
	</fieldset>
</form>

<div style="max-height: 500px; overflow: auto; ">	
		
<?php 
	$d_ar=avia_doc();
	foreach($d_ar as $d){
?>
	<form class="alert "  action="router.php" method="POST" style="padding:  0px;">
		<input value="<?=$d->name;?>" type="text"  class="span3" style="margin-top: 10px;margin-left: 15px;"/>
		<input value="<?=$d->title;?>" type="text"  class="span2" style="margin-top: 10px;margin-left: 3px;"/>
		<input value="<?=$d->filename;?>" type="text"  class="span2" style="margin-top: 10px;margin-left: 3px;"/>
		
		<input  value="<?=$d->id;?>" type="hidden" name="id"/>		
		
		<input  type="submit" name="aviacionnoe_strahovanie_doc_del" class="btn btn-danger pull-right" value="удалить" style="margin-top: 8px;margin-right: 15px;"/>
		
		<input  type="submit" name="aviacionnoe_strahovanie_doc_edit_url" class="btn btn-success btn-danger pull-right" value="Редактировать" style="margin-top: 8px;margin-right: 25px;"/>

			
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
					<strong> Виды деятельности </strong> - Авиационное страхование
				</div>

<script type="text/javascript">
            var ckeditor1 = CKEDITOR.replace('text');
            AjexFileManager.init({returnTo: 'ckeditor', editor: ckeditor1});
</script>     
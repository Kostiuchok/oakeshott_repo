 <?php 
$id=strip_tags($_GET['id']);
$x=row_id(aviacionnoe_strahovanie_doc,$id);
?>
<!-- Grid row -->
				<div class="row">
				
					<!-- Data block -->
					<article class="span12 data-block">
						<div class="data-container" >
							<header>
								<h2><span class="awe-star"></span> Виды деятельности - Авиационное страхование</h2>

							</header>
							
	<!-- ***************************************** Content ************************************************* -->

<form action="router.php" method="POST" name="" enctype="multipart/form-data">
	<fieldset>
	
	<div class="control-group">
		<label class="control-label" for="input">Название URL файла</label>
		<div class="controls">
				<input  class="input-xlarge span8" type="text" name="name" value="<?=$x->name;?>"/>
				<p class="help-block">При необходимости отредактируйте  название URL файла</p>
		</div>
	</div>	
	
	<div class="control-group">
		<label class="control-label" for="input">Название языка файла</label>
		<div class="controls">
				<input  class="input-xlarge span4" type="text" name="title" value="<?=$x->title;?>"/>
				<p class="help-block">При необходимости отредактируйте  название языка файла</p>
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
				 <p class="help-block"> при необходимости выберите другой файл</p>
		</div>

		<div class="form-actions">
			     <button class="btn btn-alt btn-large btn-success" type="submit" name="aviacionnoe_strahovanie_doc_edit">
			     Обновить информацию в базе</button>
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
					<button class="close" type="button" data-dismiss="alert">?</button>
					<strong> Авиационное страхование </strong> - редактирование информации
				</div>

 <script type="text/javascript">
            var ckeditor1 = CKEDITOR.replace('text');
            AjexFileManager.init({returnTo: 'ckeditor', editor: ckeditor1});
</script>     
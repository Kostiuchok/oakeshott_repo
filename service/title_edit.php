<?php 
$id=strip_tags($_GET['id']);
$x=row_id(title_index,$id);
?>
<!-- Grid row -->
				<div class="row">
				
					<!-- Data block -->
					<article class="span12 data-block">
						<div class="data-container" >
							<header>
								<h2><span class="awe-star"></span> Title, Keywords, Description  - редактирование информации</h2>

							</header>
							
	<!-- ***************************************** Content ************************************************* -->

<form action="router.php" method="POST" >
	<fieldset>
		<div class="control-group">
			<label class="control-label" for="input"> i </label>
			<div class="controls">
					<input  class="input-xlarge span2" type="text" name="i" value="<?=$x->i;?>"/>
					<p class="help-block">Добавьте значение i</p>
			</div>
		</div>	
			
		<div class="control-group">
			<label class="control-label" for="input"> title </label>
			<div class="controls">
					<input  class="input-xlarge span8" type="text" name="title" value="<?=htmlspecialchars($x->text);?>"/>
					<p class="help-block">Добавьте значение title</p>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="textarea"> Keywords </label>
			<div class="controls">
					<textarea  class="input-xlarge span8" rows="2" name="keyw"><?=htmlspecialchars($x->keyw);?></textarea>
					<p class="help-block"> Добавьте информацию для мета-тега keywords </p>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="textarea"> Description </label>
			<div class="controls">
					<textarea  class="input-xlarge span8" rows="3" name="des"><?=htmlspecialchars($x->des);?></textarea>
					<p class="help-block"> Добавьте информацию для мета-тега description </p>
			</div>
		</div>
			
		<input  value="<?=$id;?>" type="hidden" name="id_title"/>
		
		<div class="form-actions">
			<button class="btn btn-alt btn-large btn-success" type="submit" name="edit_title"> Обновить информацию в базе </button>
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
					<strong> Title, Keywords, Description </strong>  - редактирование информации
				</div>

      
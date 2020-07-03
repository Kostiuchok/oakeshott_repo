<?php 
$id=strip_tags($_GET['id']);
$x=row_id(partners1,$id);
?>
<!-- Grid row -->
				<div class="row">
				
					<!-- Data block -->
					<article class="span12 data-block">
						<div class="data-container" >
							<header>
								<h2><span class="awe-star"></span> Партнеры - редактирование информации</h2>

							</header>
							
	<!-- ***************************************** Content ************************************************* -->
<br></br>
<div class="alert alert-info">
<strong> Партнеры </strong> - редактирование информации.
</div>
<form action="router.php" method="POST" name="" enctype="multipart/form-data">
	<fieldset>
		
		<div class="control-group">
			<label class="control-label" for="input"> Название</label>
			<div class="controls">
					<input  class="input-xlarge span8" type="text" name="name" value="<?=$x->name;?>"/>
					<p class="help-block">Добавьте название </p>
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
		
		<div class="form-actions">
			<button class="btn btn-alt btn-large btn-success" type="submit" name="partners_edit_1"> Обновить информацию в базе </button>
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
					<strong> Партнеры </strong> - редактирование информации
				</div>

    
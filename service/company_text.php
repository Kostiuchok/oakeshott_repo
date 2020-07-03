
<!-- Grid row -->
				<div class="row">
				
					<!-- Data block -->
					<article class="span12 data-block">
						<div class="data-container" >
							<header>
								<h2><span class="awe-star"></span> О компании - редактирование текста страницы</h2>

							</header>
							
	<!-- ***************************************** Content ************************************************* -->
<?php 
$x=row_id(company_text,1); 
?>
<form action="router.php" method="POST" >
	<fieldset>
		
		<div class="control-group">
			<label class="control-label" for="input"> Заголовок</label>
			<div class="controls">
					<input  class="input-xlarge span8" type="text" name="title" value="<?=$x->title;?>" />
					<p class="help-block">Добавьте название статьи</p>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="textarea">Текст страницы</label>
			<div class="controls">
				<textarea  class="input-xlarge span8" rows="15" name="text"><?=$x->text;?></textarea>
				<p class="help-block">При необходимости обновите текст страницы</p>
			</div>
		</div>
			
		<div class="form-actions">
			<button class="btn btn-alt btn-large btn-success" type="submit" name="company_text">Обновить страницу в базе</button>
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
					<strong> О компании </strong> - редактирование текста страницы
				</div>

<script type="text/javascript">
            var ckeditor1 = CKEDITOR.replace('text');
            AjexFileManager.init({returnTo: 'ckeditor', editor: ckeditor1});
</script>   
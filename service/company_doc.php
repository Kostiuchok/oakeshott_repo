
<!-- Grid row -->
				<div class="row">
				
					<!-- Data block -->
					<article class="span12 data-block">
						<div class="data-container" >
							<header>
								<h2><span class="awe-star"></span> О компании - добавление документов</h2>

							</header>
							
	<!-- ***************************************** Content ************************************************* -->

<form action="router.php" method="POST" name="" enctype="multipart/form-data">
	<fieldset>
		<div class="control-group">
			<label class="control-label" for="input">Название для ссылки </label>
			<div class="controls">
				<input  class="input-xlarge span8" type="text" name="name" /> 
				<p class="help-block">Добавьте название для ссылки на документ </p>
			</div>
		</div>
			
		<div class="control-group">
			<label class="control-label" for="input">Описание документа</label>
			<div class="controls">
				<textarea  class="input-xlarge span8" rows="3" name="title"></textarea>
				<p class="help-block">Добавьте описание для документа</p>
			</div>
		</div>	
				
				
		<div class="control-group">
			<label class="control-label" for="input">Документ - для скачивания с сайта</label>
				 <input type="file" name="filename" class="btn btn-info"  >
				 <p class="help-block">выберите файл  - он будет загружен на сервер</p>
		</div>

		<div class="form-actions">
			     <button class="btn btn-alt btn-large btn-success" type="submit" name="company_doc">Добавить документ в базу</button>
		</div>	
	</fieldset>
</form>
<div style="max-height: 800px; overflow: auto; ">	
	
	<?php 
	$d_ar=ar_obj(company_doc);
	foreach($d_ar as $d){
	?>
	
	<form class="alert "  action="router.php" method="POST" style="padding:  0px;">
		<input value="<?=$d->name;?>" type="text"  class="span8" style="margin-top: 10px;margin-left: 15px;"/>
		<textarea  class="input-xlarge span8" rows="2" name="description" style="margin-top: 10px;margin-left: 15px;"><?=$d->title;?></textarea>
		<input  value="<?=$d->id;?>" type="hidden" name="doc_id"/>		
		
		<label class="control-label" style="margin-left: 15px; margin-top: -15px;"> Название файла в базе: 
				<span style="color: #ff0000; font-size: 15px; margin-left: 15px; ">
					<?=$d->filename;?> 
				</span> 
		</label>
			
		<input  type="submit" name="company_doc_edit_url" class="btn btn-warning " value="Редактировать" style="margin-left: 15px;margin-bottom: 15px;"/>
		<input  type="submit" name="company_doc_del" class="btn btn-danger pull-right" value="удалить" style="margin-right: 15px;"/>
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
					<strong> О компании </strong> - добавление документов
				</div>

    
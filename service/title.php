
<!-- Grid row -->
				<div class="row">
				
					<!-- Data block -->
					<article class="span12 data-block">
						<div class="data-container" >
							<header>
								<h2><span class="awe-star"></span> Title - добавление информации</h2>

							</header>
							
	<!-- ***************************************** Content ************************************************* -->

<form action="router.php" method="POST" name="" enctype="multipart/form-data">
	<fieldset>
		<div class="control-group">
			<label class="control-label" for="input"> i </label>
			<div class="controls">
					<input  class="input-xlarge span2" type="text" name="i" />
					<p class="help-block">Добавьте значение i</p>
			</div>
		</div>	
			
		<div class="control-group">
			<label class="control-label" for="input"> title </label>
			<div class="controls">
					<input  class="input-xlarge span8" type="text" name="title" />
					<p class="help-block">Добавьте значение title</p>
			</div>
		</div>
		
		<div class="form-actions">
			<button class="btn btn-alt btn-large btn-success" type="submit" name="add_title">Добавить  в базу</button>
		</div>
	</fieldset>
</form>

<div style="max-height: 500px; overflow: auto; ">	
		
	<?php 
		$d_ar=ar_obj(title_index);
		foreach($d_ar as $d){
	?>
	<form class="alert "  action="router.php" method="POST" >
		<input value="<?=$d->i;?>" type="text"  class="span2" name="i_edit" />
		<input value="<?=$d->text;?>" type="text"  class="span5" name="title_edit" />

		<input  type="submit" name="del_title" class="btn btn-danger pull-right" value="delete" style="margin-right: -25px;"/>
		
		<input  type="submit" name="edit_title" class="btn btn-success btn-danger pull-right" value="update" style="margin-right: 10px;"/>

		<input  value="<?=$d->id;?>" type="hidden" name="id_title"/>			
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
					<strong> Title </strong>  - добавление информации
				</div>

     
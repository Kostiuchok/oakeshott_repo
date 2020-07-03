
<!-- Grid row -->
				<div class="row">
				
					<!-- Data block -->
					<article class="span12 data-block">
						<div class="data-container" >
							<header>
								<h2><span class="awe-star"></span> Партнеры - добавление информации</h2>

							</header>
							
	<!-- ***************************************** Content ************************************************* -->
<br></br>
<div class="alert alert-info">
<strong> Партнеры </strong> - добавление информации.
</div>
<form action="router.php" method="POST" name="" enctype="multipart/form-data">
	<fieldset>
		
		<div class="control-group">
			<label class="control-label" for="input"> Название</label>
			<div class="controls">
					<input  class="input-xlarge span8" type="text" name="name" />
					<p class="help-block">Добавьте название </p>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="input"> Изображение </label>
			 	<input type="file" name="filename" class="btn btn-info"  accept="image/jpeg,image/png,image/gif">			     
			 	<p class="help-block"> добавьте изображение</p>
		</div>
		
		<div class="form-actions">
			<button class="btn btn-alt btn-large btn-success" type="submit" name="partners_add_1">Добавить в базу</button>
		</div>
		
	</fieldset>
</form>
<div style="max-height: 500px; overflow: auto; ">	
		
	<?php $d_ar=ar_obj(partners1);
	foreach($d_ar as $d){
		?>
	<form class="alert "  action="router.php" method="POST" style="padding:  0px; ">
		<img src="/partners/<?=$d->filename;?>" width="80" style="margin: 10px;"/>
		
		<input value="<?=$d->name;?>" type="text"  class="span5" style="margin-top: 10px;margin-left: 15px;"/>

		
		<input  value="<?=$d->id;?>" type="hidden" name="id"/>
		<input  type="submit" name="partners1_del" class="btn btn-danger pull-right" value="удалить" style="margin-top: 10px;margin-right: 15px;"/>
		
		<input  type="submit" name="partners1_edit_url" class="btn btn-success btn-danger pull-right" value="Редактировать" style="margin-top: 10px;margin-right: 25px;"/>

					
	</form>  	
		
	<?php 
	}
	?>	
	</div>		
<br></br>

<div class="alert alert-info">
<strong> Члентсво </strong> - добавление информации.
</div>
<form action="router.php" method="POST" name="" enctype="multipart/form-data">
	<fieldset>
		
		<div class="control-group">
			<label class="control-label" for="input"> Название</label>
			<div class="controls">
					<input  class="input-xlarge span8" type="text" name="name" />
					<p class="help-block">Добавьте название </p>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="input"> Изображение </label>
			 	<input type="file" name="filename" class="btn btn-info"  accept="image/jpeg,image/png,image/gif">			     
			 	<p class="help-block"> добавьте изображение</p>
		</div>
		
		<div class="form-actions">
			<button class="btn btn-alt btn-large btn-success" type="submit" name="partners_add_2">Добавить в базу</button>
		</div>
		
	</fieldset>
</form>	
<div style="max-height: 500px; overflow: auto; ">	
		
	<?php $d_ar=ar_obj(partners2);
	foreach($d_ar as $d){
		?>
	<form class="alert "  action="router.php" method="POST" style="padding:  0px; ">
		<img src="/partners/<?=$d->filename;?>" width="80" style="margin: 10px;"/>
		
		<input value="<?=$d->name;?>" type="text"  class="span5" style="margin-top: 10px;margin-left: 15px;"/>

		
		<input  value="<?=$d->id;?>" type="hidden" name="id"/>
		<input  type="submit" name="partners2_del" class="btn btn-danger pull-right" value="удалить" style="margin-top: 10px;margin-right: 15px;"/>
		
		<input  type="submit" name="partners2_edit_url" class="btn btn-success btn-danger pull-right" value="Редактировать" style="margin-top: 10px;margin-right: 25px;"/>

					
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
					<strong> Партнеры </strong> - добавление информации
				</div>

   
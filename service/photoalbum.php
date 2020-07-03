
<!-- Grid row -->
				<div class="row">
				
					<!-- Data block -->
					<article class="span12 data-block">
						<div class="data-container" >
							<header>
								<h2><span class="awe-star"></span> Фотоальбомы - каталог </h2>

							</header>
							
	<!-- ***************************************** Content ************************************************* -->

<form action="router.php" method="POST" name="" enctype="multipart/form-data">
	<fieldset>
		
		
		<div class="form-actions">
			<button class="btn btn-alt btn-large btn-success" type="submit" name="photoalbum_create"> Создать фотоальбом </button>
		</div>
		
	</fieldset>
</form>

<div style="max-height: 500px; overflow: auto; ">	
		
<?php 
	$d_ar=photoalbum();
	foreach($d_ar as $d){
?>
	<form class="alert "  action="router.php" method="POST" style="padding:  0px;">
		<input value="<?=$d->name;?>" type="text"  class="span6" style="margin-top: 10px;margin-left: 15px;"/>

		<input  value="<?=$d->id;?>" type="hidden" name="id"/>	
		
		<input  type="submit" name="photoalbum_del" class="btn btn-danger pull-right" value="удалить" style="margin-top: 8px;margin-right: 15px;"/>
		
		<input  type="submit" name="photoalbum_edit_url" class="btn btn-success btn-danger pull-right" value="Редактировать" style="margin-top: 8px;margin-right: 25px;"/>

			
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
					<strong> Фотоальбомы </strong> - каталог 
				</div>

     
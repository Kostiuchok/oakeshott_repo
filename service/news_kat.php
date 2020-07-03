<link rel="stylesheet" href="css/plugins/jquery.plupload.queue.css">
<link rel="stylesheet" href="css/plugins/jquery.ui.plupload.css">
<!-- Grid row -->
				<div class="row">
				
					<!-- Data block -->
					<article class="span12 data-block">
						<div class="data-container" >
							<header>
								<h2><span class="awe-star"></span> Новости - каталог новостей</h2>

							</header>
							
	<!-- ***************************************** Content ************************************************* -->

<div style="max-height: 500px; overflow: auto; ">	
		
<?php 
	$d_ar=news();
	foreach($d_ar as $d){
?>
	<form class="alert "  action="router.php" method="POST" style="padding:  0px;">
		<input value="<?=$d->name;?>" type="text"  class="span6" style="margin-top: 10px;margin-left: 15px;"/>

		<input  value="<?=$d->id;?>" type="hidden" name="id"/>	
		
		<input  type="submit" name="news_del" class="btn btn-danger pull-right" value="удалить" style="margin-top: 8px;margin-right: 15px;"/>
		
		<input  type="submit" name="news_edit_url" class="btn btn-success btn-danger pull-right" value="Редактировать" style="margin-top: 8px;margin-right: 25px;"/>

<label class="control-label" style="margin-left: 15px;"> Дата новости : 
				<span style="color: #ff0000; font-size: 15px; margin-left: 15px;">
					<?=date_format(date_create($d->date),'d.m.Y');?> 
				</span> г.
</label>
			
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
					<strong> Новости </strong>  - каталог новостей
				</div>

    
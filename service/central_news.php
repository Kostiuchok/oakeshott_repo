<link rel="stylesheet" href="css/plugins/jquery.plupload.queue.css">
<link rel="stylesheet" href="css/plugins/jquery.ui.plupload.css">
<!-- Grid row -->
				<div class="row">
				
					<!-- Data block -->
					<article class="span12 data-block">
						<div class="data-container" >
							<header>
								<h2><span class="awe-star"></span> Новости - выбор центральной новости</h2>

							</header>
							
	<!-- ***************************************** Content ************************************************* -->
<div class="alert alert-info">
<?php 
$cx=row_id(centr_news,1);
$id=$cx->centr_id;
$c=row_id(news,$id);
?>
<strong> Центральная новость </strong> - эта новость размещается на главной с ранице по центру на синем фоне.
<input value="<?=$c->name;?>" type="text"  class="span6" style="margin-top: 10px;margin-left: 15px;"/>
<label class="control-label" style="margin-left: 15px;"> Дата новости : 
				<span style="color: #ff0000; font-size: 15px; margin-left: 15px;">
					<?=date_format(date_create($c->date),'d.m.Y');?> 
				</span> г.
</label>
</div>
<div style="max-height: 500px; overflow: auto; ">	
		
<?php 
	$d_ar=news();
	foreach($d_ar as $d){
?>
	<form class="alert "  action="router.php" method="POST" style="padding:  0px;">
		<input value="<?=$d->name;?>" type="text"  class="span6" style="margin-top: 10px;margin-left: 15px;"/>

		<input  value="<?=$d->id;?>" type="hidden" name="id"/>	
		
				<input  type="submit" name="centr_news" class="btn btn-success btn-info pull-right" value=" Сделать эту новость центральной " style="margin-top: 8px;margin-right: 25px;"/>

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
					<strong> Новости </strong>  - выбор центральной новости для главной страницы
				</div>

     
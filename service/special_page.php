
<!-- Grid row -->
				<div class="row">
				
					<!-- Data block -->
					<article class="span12 data-block">
						<div class="data-container" >
							<header>
								<h2><span class="awe-star"></span> Oakeshott Insurance Consultants Ltd - каталог служебных страниц </h2>

							</header>
							
	<!-- ***************************************** Content ************************************************* -->
<form action="router.php" method="POST" name="" enctype="multipart/form-data">
	<fieldset>
		
		
		<div class="form-actions">
			<button class="btn btn-alt btn-large btn-success" type="submit" name="special_page_create"> Создать страницу </button>
		</div>
		
	</fieldset>
</form>

<div style="max-height: 500px; overflow: auto; ">	
		
<?php 
	$d_ar=special_page();
	foreach($d_ar as $d){
?>
	<form class="alert "  action="router.php" method="POST" style="padding:  0px;">
		<input value="<?=$d->name;?>" type="text"  class="span6" style="margin-top: 10px;margin-left: 15px;"/>
		<input type="hidden" value="<?=$d->id;?>" name="id"/>
		
		<input  type="submit" name="special_page_del" class="btn btn-danger pull-right" value="удалить" style="margin-top: 8px;margin-right: 15px;"/>
		
		<input  type="submit" name="special_page_view" class="btn btn-info btn-danger pull-right" value=" Просмотр " style="margin-top: 8px;margin-right: 25px;"/>

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
					<strong> Oakeshott Insurance Consultants Ltd </strong> - каталог служебных страниц
				</div>

<script type="text/javascript">
            var ckeditor1 = CKEDITOR.replace('text');
            AjexFileManager.init({returnTo: 'ckeditor', editor: ckeditor1});
</script>     
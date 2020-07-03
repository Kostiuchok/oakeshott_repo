<?php 
$id=strip_tags($_GET['id']);
$x=row_id(special_page,$id); 
?>
<!-- Grid row -->
				<div class="row">
				
					<!-- Data block -->
					<article class="span12 data-block">
						<div class="data-container" >
							<header>
								<h2><span class="awe-star"></span> Oakeshott Insurance Consultants Ltd - служебная страница: </h2>
								<h3 style="display: inline; margin-left: 200px;">дата: 
								<span style="color: #FF0000; margin-left: 15px;"><?=date_format(date_create($x->date),'d.m.Y');?> </span></h3>
								<br></br>
								<h2 style="color:#8A2BE2; "><?=$x->name;?></h2>

							</header>
							
	<!-- ***************************************** Content ************************************************* -->

<div style="height: 950px;  overflow: auto;">

<?=$x->text;?>
	
</div>


<form action="router.php" method="POST" >
	<fieldset>
	<input type="hidden" value="<?=$id;?>" name="id"/>
		<div class="form-actions">
			<button class="btn btn-alt btn-large btn-info" type="submit" name="special_page_edit_url"> Редактировать информацию</button>
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
					<strong> Oakeshott Insurance Consultants Ltd </strong> - служебная страница
				</div>

<script type="text/javascript">
            var ckeditor1 = CKEDITOR.replace('text');
            AjexFileManager.init({returnTo: 'ckeditor', editor: ckeditor1});
</script>    
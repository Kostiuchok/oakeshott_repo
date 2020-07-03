<?php 
$id=strip_tags(trim($_GET['id']));
$x=row_id(photoalbum,$id);
?>
	<link rel="stylesheet" type="text/css" href="gallery_fancybox/jquery.fancybox.css" media="screen" />
	<script type="text/javascript" src="gallery_fancybox/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="gallery_fancybox/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="gallery_fancybox/jquery.fancybox-1.2.1.pack.js"></script>
	

<script type="text/javascript">
$(document).ready(function() {
    $("a.gallery").fancybox();
});
</script>

<h1 class="main-header"><?=$x->name;?></h1>

		<div class="container container_bg">
			<hr class="line-header">
			<div class="main">
				<ul class="photoalbum-list">
					<li class="photoalbum_fullwidth">
						<ul class="big-photo-gallery">
						<?php 
							$d_ar=photoalbum_doc($x->id);
							foreach($d_ar as $x){
						?>	
							<li style="overflow: hidden;">
							<a class="gallery" rel="group" title="" href="/photoalbum_doc/<?=$x->filename;?>">
								<img src="/photoalbum_doc/<?=$x->filename;?>" width="150"/>
							</a></li>
						<?php }	?>	
						</ul>
					</li>
					
					
				</ul>
			</div>
		</div>
		<aside class="sidebarRight">
			<h2>ФОТОАЛЬБОМЫ</h2>
			<hr class="line-header">
			<ul class="conference-list">
<?php 
	$d_ar=photoalbum();
	foreach($d_ar as $d){
?>		
				<li>
					<p><?=$d->date;?></p>
					<ul>
						<li><a href="index.php?i=photoalbum_detail&id=<?=$d->id;?>"><?=$d->name;?></a></li>
					</ul>
				</li>
<?php }	?>				
			</ul>
		</aside>
	</div> 
	<!-- end content--> 
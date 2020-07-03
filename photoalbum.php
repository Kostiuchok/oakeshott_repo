<?php 
	require_once "read_cache.php"; // Пытаемся вывести содержимое кэша
?>
<link rel="stylesheet" type="text/css" href="gallery_fancybox/jquery.fancybox.css" media="screen" />
	<script type="text/javascript" src="gallery_fancybox/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="gallery_fancybox/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="gallery_fancybox/jquery.fancybox-1.2.1.pack.js"></script>
	
<!--
<li style="overflow: hidden;"><img src="/photoalbum_doc/<?=$x->filename;?>" width="150"/></li>
<li>
	<div class="img" style="background-image: url(photoalbum_doc/<?=$x->filename?>); margin-bottom:3px; "></div>
</li>
-->
	
<script type="text/javascript">
$(document).ready(function() {
    $("a.gallery").fancybox();
});
</script>	
		<h1 class="main-header">Фотоальбом</h1>

		<div class="container">
			<hr class="line-header">
			<div class="main">
				<ul class="photoalbum-list">
					<?php 
						$d_ar=photoalbum();
						foreach($d_ar as $d){
					?>	
						<li class="photoalbum">
							<div class="photoalbum__title"><a href="index.php?i=photoalbum_detail&id=<?=$d->id;?>"><?=$d->name;?></a></div>
							<ul class="photo-gallery">
								<?php 
									$d_ar=photoalbum_doc($d->id);
									foreach($d_ar as $x){
								?>	
									<li style="overflow: hidden;">
									<a class="gallery" rel="group" title="" href="/photoalbum_doc/<?=$x->filename;?>">
										<img src="/photoalbum_doc/<?=$x->filename;?>" width="50"/>
									</a></li>
								<?php }	?>	
							</ul>
						</li>
										
					<?php }	?>				
				</ul>
			</div>
		</div>	
<?php 
	require_once "write_cache.php"; // Здесь идёт сохранение сгенерированной страницы в кэш
?>
<?php 
$xs=publications_y();

?>
		<div class="breadcrumbs">
			<ul>
				<li><a href="#">публикации</a></li>
				<li><a class="is-active" href="#">статьи</a></li>
			</ul>
		</div>
	<div class="container">
		<hr class="line-header">
	<div class="main">
		<ul class="publication">
		<?php 
		foreach($xs as $x){	
		$a=$x->date_y;		
		?>	
			<li>
				<p class="publication__year"><?=$a;?></p>
								
				<ul class="publication__docs">
					<?php 
						$dx=publications_dat($a);
						foreach($dx as $n){	
					?>	
					<li>
						<a href="publications_article/<?=$n->filename;?>" title="Статья о страховании"><?=$n->name;?></a>
						<p>(<?=$n->size;?>KB)</p>
					</li>
					
					<?php }?>	
				</ul>
				
			</li>
		<?php }?>	
		</ul>
		
		
		<!--
		<div class="pagination">
			<ul>
				<li class="is-active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">Следующая</a></li>
				<li><a href="#">Последняя</a></li>
			</ul>
		</div>
		-->
		
	</div>
	</div>
	
	
	
	
	<aside class="sidebarRight">
		<h2>ПО ГОДАМ</h2>
		<hr class="line-header">
		<ul class="publication-list">
		<?php 
		foreach($xs as $x){	
		$a=$x->date_y;	
		?>	
		
			<li><a href="#"><?=$x->date_y;?></a> - <?php echo publications_n($a);?> публикаци(я/и/й)</li>
						
		<?php }?>	
		</ul>
	</aside>
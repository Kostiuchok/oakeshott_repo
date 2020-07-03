		<h1 class="main-header">Партнеры</h1>

		<div class="container">
			<hr class="line-header">
			<div class="main">
				<ul class="parthners-list">
				<?php $d_ar=ar_obj(partners1);
					foreach($d_ar as $d){?>	
					<li class="parthners">
						<a href="#"><img src="partners/<?=$d->filename;?>" alt=""></a>
					</li>
					<?php }?>	
				</ul>
			</div>
		</div>
		<aside class="sidebarRight">
			<h2>СПИСОК ПАРТНЕРОВ</h2>
			<hr class="line-header">
			<ul class="publication-list publication-list_parthners">
				<?php $d_ar=ar_obj(partners1);
					foreach($d_ar as $d){?>	
				<li><?=$d->name;?></li>
				<?php }?>
			</ul>
		</aside>
	</div> 
	<div class="content">
		<aside class="sidebarLeft">
			
		</aside>
		<h1 class="main-header"></h1>

		<div class="container container_mod">
			<hr class="line-header">
			<div class="main">
				<ul class="parthners-list">
					<?php $d_ar=ar_obj(partners2);
						foreach($d_ar as $d){?>
					<li class="parthners">
						<a href="#"><img src="partners/<?=$d->filename;?>" alt=""></a>
					</li>
					<?php }?>
				</ul>
			</div>
		</div>
		<aside class="sidebarRight">
			<h2>СПИСОК АССОЦИАЦИЙ</h2>
			<hr class="line-header">
			<ul class="publication-list publication-list_parthners">
				<?php $d_ar=ar_obj(partners2);
						foreach($d_ar as $d){?>
				<li><?=$d->name;?></li>
				<?php }?>
			</ul>
		</aside>	
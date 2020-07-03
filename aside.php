<div class="content">
	<aside class="sidebarLeft">
		<div class="sidebarTopLeft_menu">
			<div id="l_menu_icons">
				<div id="home" class="l-m-icons"></div>
				<div id="find" class="l-m-icons"></div>
				<div id="mail" class="l-m-icons"></div>
			</div>
			<div id="lang">
				<span class="active">РУС</span>
				<span>ENG</span>
			</div>
		</div>
		<ul class="sidebarLeft_menu">
			<li <?=a($i,"home")?>>
				<a href="index.php?i=home" title="на главную страницу">Главная страница</a>
			</li>
			<li <?=a($i,"o_kompanii")?>>
				<a href="index.php?i=o_kompanii" title="информация о компании">О компании</a>
			</li>
			<li>
				<span>Виды деятельности</span>
				<ul class="sub_Leftmenu">
					<li <?=a($i,"morskoe_strahovanie")?>><span>-</span> <a href="index.php?i=morskoe_strahovanie" title="морское страхование">морское страхование</a></li>
					<li <?=a($i,"nemorskoe_strahovanie")?>><span>-</span> <a href="index.php?i=nemorskoe_strahovanie" title="неморское страхование">неморское страхование</a></li>
					<li <?=a($i,"aviacionnoe_strahovanie")?>><span>-</span> <a href="index.php?i=aviacionnoe_strahovanie" title="авиационное страхование">авиационное страхование</a></li>
					<li <?=a($i,"obligatornoe")?>><span>-</span> <a href="index.php?i=obligatornoe" title="Перестрахование">облигаторное/факультативное перестрахование</a></li>
					<li <?=a($i,"nestandartnoe")?>>- <a href="index.php?i=nestandartnoe" title="новые продукты и перестрахование">нестандартные и новые продукты</a></li>
				</ul>
			</li>
			<li>
				<span>Публикации</span>
				<ul class="sub_Leftmenu">
					<li <?=a($i,"books")?>><span>-</span> <a href="index.php?i=books" title="книги">книги</a></li>
					<li <?=a($i,"publications")?>><span>-</span> <a href="index.php?i=publications" title="статьи о страховании">статьи</a></li>
				</ul>
			</li>
			<li>
			<!--
				<a href="index.php?i=conferences-seminars">Конференции/Семинары</a>
			-->	
				<span>Конференции/Семинары</span>
				<ul class="sub_Leftmenu">
					<li <?=a($i,"conferences")?>><span>-</span> <a href="index.php?i=conferences" title="конференции">конференции</a></li>
					<li <?=a($i,"seminars")?>><span>-</span> <a href="index.php?i=seminars" title="семинары">семинары</a></li>
				</ul>
			</li>
			<li <?=a($i,"news")?>><a href="index.php?i=news" title="новости">Новости</a></li>
			<li <?=a($i,"contacts")?>><a href="index.php?i=contacts" title="контактная информация">Контакты</a></li>
			<li <?=a($i,"photoalbum")?>><a href="index.php?i=photoalbum" title="фотографии">Фотоальбом</a></li>
			<li <?=a($i,"partners")?>><a href="index.php?i=partners" title="партнеры и ассоциации">Партнёры</a></li>
		</ul>
		<div class="copyright">
			© 1993-2018 Oakeshott Insurance Consultants Ltd
		</div>
	</aside>
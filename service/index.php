<?php 
session_start();
if($_SESSION['login']=="no") header("refresh:0; url=login.php");

if(isset($_GET['i'])) $i=trim(strip_tags($_GET['i']));
else $i="company_text";
include_once "../a/f.php";
?>
<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js ie8 ie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 ie" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title><?=title($i);?></title>

		<meta name="description" content="">
		<meta name="author" content="Walking Pixels | www.walkingpixels.com">
		<meta name="robots" content="index, follow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- jQuery Visualize Styles -->
		<link rel='stylesheet' type='text/css' href='css/plugins/jquery.visualize.css'>
		
		<!-- jQuery jGrowl Styles -->
		<link rel='stylesheet' type='text/css' href='css/plugins/jquery.jgrowl.css'>
		
		<!-- CSS styles -->
		<?php 
		$x=row_id(tema_css,8);
		$xc=row_id(tema_css,$x->css_url);
		?>
		<link rel='stylesheet' type='text/css' href='css/<?=$xc->css_url;?>'>
		
		<!-- Fav and touch icons -->
		<link rel="shortcut icon" href="img/icons/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="img/icons/apple-touch-icon-57-precomposed.png">
		
		<!-- JS Libs -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/libs/jquery.js"><\/script>')</script>
		<script src="js/libs/modernizr.js"></script>
		<script src="js/libs/selectivizr.js"></script>
		
		<script>
			$(document).ready(function(){
				
				// Tooltips
				$('[title]').tooltip({
					placement: 'top'
				});
				
			});
		</script>
		
		<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
		<!--
		<link rel='stylesheet' type='text/css' href='../ckeditor/contents.css'>
		-->
		<script type="text/javascript" src='/AjexFileManager/ajex.js'></script>
	</head>
	<body>
		
		<!-- Main page header -->
		<header class="container">
		
			<!-- Main page logo -->
			<h1><a href="http://www.oakeshott.com.ua/home.php" target="_blank" class="brand">Oakeshott</a></h1>
		
		
		
		</header>
		<!-- /Main page header -->
		
		<!-- Main page container -->
		<section class="container" role="main">
		
			
			
<!--	**************************************************** Menu ******************************************************	-->
			
<!-- Left (navigation) side -->
<div class="navigation-block">
		
<form action="router.php" method="POST" >
	<fieldset >
		<input class="btn btn-alt  btn-primary btn-flat" type="submit" name="logout" value=" Выход из админки "> </input> 
	</fieldset>
</form>

	<!-- Main navigation -->
	<nav class="main-navigation" role="navigation" style="margin-top: 10px;">
		<ul>
			<li <?php if($i=="special_page") echo 'class="current"';?>>
				<a href="index.php?i=special_page" class="no-submenu"><span class="awe-home"></span> Служебная страница</a>
			</li>
<!--	**************************************************** user ******************************************************	-->
<?php 
if($_SESSION['login']=="admin_manager"){

?>
			<li <?php if($i=="company"||$i=="company_text"||$i=="company_doc" ) echo 'class="current"';?>>
				<a href="index.php?i=company" ><span class="awe-home"></span> О компании</a>
				<ul>
					<li><a href="index.php?i=company_text">текст страницы</a></li>
					<li><a href="index.php?i=company_doc">документы</a></li>
				</ul>
			</li>			
					
			<li <?php if($i=="activities"||$i=="activities_1"||$i=="activities_2"||$i=="activities_3"||$i=="activities_4"||$i=="activities_5" ) echo 'class="current"';?>>
				<a href="index.php?i=activities" ><span class="awe-tasks"></span> Виды деятельности</a>
				<ul>
					<li><a href="index.php?i=activities_1">Морское страхование</a></li>
					<li><a href="index.php?i=activities_2">Неморское страхование</a></li>
					<li><a href="index.php?i=activities_3">Авиационное страхование</a></li>
					<li><a href="index.php?i=activities_4">Облигаторное и факультативное перестрахование</a></li>
					<li><a href="index.php?i=activities_5">Нестандартные и новые продукты</a></li>
				</ul>
			</li>		
			
			<li <?php if($i=="publications"||$i=="publications_books"||$i=="publications_article") echo 'class="current"';?>>
				<a href="index.php?i=publications" ><span class="awe-signal"></span>Публикации</a> 
				<ul>
					<li><a href="index.php?i=publications_books"> Публикации - книги</a></li>
					<li><a href="index.php?i=publications_article"> Публикации - статьи</a></li>
				</ul>
			</li>		
					
			<li <?php if($i=="conference"||$i=="conference_1"||$i=="conference_2") echo 'class="current"';?>>
				<a href="index.php?i=conference" ><span class="awe-signal"></span> Конференции - семинары</a> 
				<ul>
					<li><a href="index.php?i=conference_1"> Конференции </a></li>
					<li><a href="index.php?i=seminars_1"> Семинары</a></li>
				</ul>
			</li>			
						
			<li <?php if($i=="news"||$i=="news_add"||$i=="news_kat" ||$i=="central_news") echo 'class="current"';?>>
				<a href="index.php?i=news" ><span class="awe-picture"></span>Новости</a>
				<ul>
					<li><a href="index.php?i=news_add"> добавить новость</a></li>
					<li><a href="index.php?i=news_kat"> каталог новостей</a></li>
					<li><a href="index.php?i=central_news"> центральная новость</a></li>
				</ul>
			</li>			
						
		    
		    <li <?php if($i=="partners") echo 'class="current"';?>>
				<a href="index.php?i=partners" class="no-submenu"><span class="awe-film"></span>Партнеры</a>
			</li>
						
			<li <?php if($i=="photoalbum") echo 'class="current"';?>>
				<a href="index.php?i=photoalbum" class="no-submenu"><span class="awe-film"></span>Фотоальбом</a>
			</li>			

			<li <?php if($i=="title") echo 'class="current"';?>>
				<a href="index.php?i=title" class="no-submenu"><span class="awe-film"></span> SEO - Title</a>
			</li>
<?php }?>			
<!--	**************************************************** user ******************************************************	-->

		</ul>
	</nav>
				<form action="router.php" method="POST" style="padding: 10px;">
					<label class="control-label" for="textarea">Тема оформления</label>
					<select name="css" style="width: 80px;">
						<option value="1" >green</option>
						<option value="2" >red</option>
						<option value="3">dark</option>
						<option value="4">blue</option>
					</select> 
					<input type="hidden" value="<?=$i?>" name="i"/>
<button class="btn btn-primary btn-flat pull-right" type="submit" name="css_k"><span class="awe-home"></span> ok</button>
				
				</form>
</div>

			<!-- Left (navigation) side -->
<!--	**************************************************** Menu ******************************************************	-->



			<!-- Right (content) side -->
			<div class="content-block" role="main">
			
<!-- **************************************************  начало блока  ************************************************************ -->
<?=pages($i);?>
<!-- **************************************************  окончание блока ************************************************************ -->	
	
				
			</div>
			<!-- /Right (content) side -->
			
		</section>
		<!-- /Main page container -->
		
		
		
		
		
		<!-- Main page footer -->
		<footer class="container">
			<p>www.oakeshott.com.ua © <?=date('Y')?></p>
	
		<!--
			<ul style="margin-left: 100px;">
				<li><a href="index.php" class="">Support</a></li>
				<li><a href="index.php" class="">Documentation</a></li>
				<li><a href="index.php" class="">API</a></li>
			</ul>
		-->
			<a href="#top" class="btn btn-primary btn-flat pull-right">Top &uarr;</a>
		</footer>
		<!-- /Main page footer -->
		
		
		
		
		
		
		<!-- Scripts -->
		<script src="js/navigation.js"></script>
		<script src="js/bootstrap/bootstrap-affix.js"></script>
		<script src="js/bootstrap/bootstrap-tooltip.js"></script>
		<script src="js/bootstrap/bootstrap-collapse.js"></script>
		<script src="js/bootstrap/bootstrap-dropdown.js"></script>
		
		
		
		<!-- Block TODO list -->
		<script>
			$(document).ready(function() {
				
				$('.todo-block input[type="checkbox"]').click(function(){
					$(this).closest('tr').toggleClass('done');
				});
				$('.todo-block input[type="checkbox"]:checked').closest('tr').addClass('done');
				
			});
		</script>
		
		<!-- jQuery Visualize -->
		<!--[if lte IE 8]>
			<script language="javascript" type="text/javascript" src="js/plugins/visualize/excanvas.js"></script>
		<![endif]-->
		<script src="js/plugins/visualize/jquery.visualize.min.js"></script>
		
		<script>
			$(document).ready(function() {
			
				var chartWidth = $(('.chart')).parent().width()*0.9;
				
				$('.chart').hide().visualize({
					type: 'pie',
					width: chartWidth,
					height: chartWidth,
					colors: ['#389abe','#fa9300','#6b9b20','#d43f3f','#8960a7','#33363b','#b29559','#6bd5b1','#66c9ee'],
					lineDots: 'double',
					interaction: false
				});
			
			});
		</script>
		
		<!-- jQuery Flot Charts -->
		<!--[if lte IE 8]>
			<script language="javascript" type="text/javascript" src="js/plugins/flot/excanvas.min.js"></script>
		<![endif]-->
		<script src="js/plugins/flot/jquery.flot.js"></script>
	
	
	
		<!-- jQuery jGrowl -->
		<script type="text/javascript" src="js/plugins/jGrowl/jquery.jgrowl.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){
				
				// This value can be true, false or a function to be used as a callback when the closer is clciked
				/*
				$.jGrowl.defaults.closer = function() {
					console.log("Closing everything!", this);
				};
				*/
				/*
				$.jGrowl("", { 
					sticky: true, //не исчезает с экрана
					theme: 'success' // зеленый фон
				});
				
				$.jGrowl("", {
			//      life: 5000,  // пауза 5с - затем исчезает
					theme: 'danger',  //красный фон
					sticky: true
				});
				$.jGrowl("", { // текст стикера
					header: '', // заголовок стикера
					sticky: true
									// темы нет - серый стикер
				});
				*/
				/*
				$.jGrowl("Chromatron theme, and a whole bunch of callbacks...", { 
					theme: 'primary',
					speed: 'slow',
					beforeOpen: function(e,m,o) {
						console.log("I am going to be opened!", this);
					},
					open: function(e,m,o) {
						console.log("I have been opened!", this);
					},
					beforeClose: function(e,m,o) {
						console.log("I am going to be closed!", this);
					},
					close: function(e,m,o) {
						console.log("I have been closed!", this);
					}
				});
				*/
				
				/*
				$.jGrowl("Custom animation test...", { 
					speed: 'slow',
					animateOpen: { 
						height: "show"
					},
					animateClose: { 
						height: "hide"
					}
				});
				*/
				
				/*
				$.jGrowl("This message will not close because we have a callback that returns false.", {
					// Это сообщение не будет закрывать, потому что у нас есть обратный вызов, который возвращает ложь
					beforeClose: function() {
						return false;
					}
				});
				*/
			//	$.jGrowl.defaults.closerTemplate = '<div>закрыть все стикеры</div>';
				
			});
			
		</script>
		
<!-- jQuery plUpload -->
		<script src="js/plugins/plUpload/plupload.full.js"></script>
		<script src="js/plugins/plUpload/jquery.plupload.queue/jquery.plupload.queue.js"></script>
		<script>
			$(document).ready(function() {
				
				$('.plupload').pluploadQueue({
					runtimes : 'html5,gears,flash,silverlight,browserplus',
					url : 'upload/upload.php',
					max_file_size : '10mb',
					chunk_size : '1mb',
					unique_names : true,
					resize : {width : 320, height : 240, quality : 90},
					filters : [
						{title : "Image files", extensions : "jpg,gif,png"},
						{title : "Zip files", extensions : "zip"}
					],
					flash_swf_url : 'js/plugins/plUpload/plupload.flash.swf',
					silverlight_xap_url : 'js/plugins/plUpload/plupload.silverlight.xap'
				});
				$(".plupload_header").remove();
				$(".plupload_progress_container").addClass("progress").addClass('progress-striped');
				$(".plupload_progress_bar").addClass("bar");
				$(".plupload_button").each(function(e){
					if($(this).hasClass("plupload_add")){
						$(this).attr("class", 'btn btn-primary btn-alt pl_add btn-small');
					} else {
						$(this).attr("class", 'btn btn-success btn-alt pl_start btn-small');
					}
				});
				
			});
		</script>
		
		
		
		
	</body>
</html>

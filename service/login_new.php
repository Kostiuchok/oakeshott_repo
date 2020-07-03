1<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js ie8 ie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 ie" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title> Авторизация </title>
		<meta name="description" content="">
		<meta name="author" content="Walking Pixels | www.walkingpixels.com">
		<meta name="robots" content="index, follow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- CSS styles -->
		<link rel='stylesheet' type='text/css' href='css/huraga-red.css'>
		
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
	</head>
	<body>
		
		<!-- Main page container -->
		<section class="container login" role="main">
			<!--
			<h1>авторизуйтесь<a href="login.html" class="brand">Студия дизайна</a></h1>
			<img src="img/template_logo.png"/>
			-->
			
			<h1 style="color: #ec981a; margin-left: 15px;"> Oakeshott Insurance Consultants Ltd </h1>
			<div class="data-block" style="border-radius: 15px;">
				<form method="post" action="router.php">
					<fieldset>
					<img src="img/template_logo.png" style="margin-bottom: 15px;"/>
						<div class="control-group">
							<label class="control-label" for="login" style="color: #227733">Username</label>
							<div class="controls">
								<input style="height: 25px;" id="icon" type="text" placeholder="Your username" name="log">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="password" style="color: #ff0000">Password</label>
							<div class="controls">
								<input  style="height: 25px;" id="password" type="password" placeholder="Password" name="pas">
								<!--
								<label class="checkbox">
									<input id="optionsCheckbox" type="checkbox" value="option1"> Remember me
								</label>
								-->
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="password" style="color: #ff0000">Repeat password</label>
							<div class="controls">
								<input  style="height: 25px;" id="password" type="password" placeholder="Password" name="pas1">
								<!--
								<label class="checkbox">
									<input id="optionsCheckbox" type="checkbox" value="option1"> Remember me
								</label>
								-->
							</div>
						</div>
						<div class="form-actions">
							<button class="btn btn-large btn-info btn-alt" type="submit" name="login_new"><span class="awe-signin"></span> Register </button>
						</div>
					</fieldset>
				</form>
			</div>
			<!--
			<p><a href="#" class="pull-right"><small>Password reset</small></a></p>
			-->
		</section>
		<!-- /Main page container -->
		
		<!-- Scripts -->
		<script src="js/bootstrap/bootstrap-tooltip.js"></script>
		
	</body>
</html>
 
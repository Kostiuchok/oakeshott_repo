






<form method="POST" action="verify.php">
<?php	
require_once('recaptchalib.php');
  $publickey = "6LcjRPASAAAAACKEheGOPHzEJWr7s4AOiC_G4X8A"; // you got this from the signup page
  echo recaptcha_get_html($publickey);
?>	
	<input type="submit" value="ok"/>
</form>
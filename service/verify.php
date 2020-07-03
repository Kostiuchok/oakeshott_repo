  <?php
  session_start();
  include "../a/f.php";
 /* 
  require_once('recaptchalib.php');
  $privatekey = "6LcjRPASAAAAAEb_L4g41kn_UyQ4ij9jTJmkLCjT";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) { $k=1; } 
  
  else { $k=0; }
  */
if(isset($_POST['login'])){
$log=strip_tags(trim($_POST['log']));
$pas=md5(strip_tags(trim($_POST['pas'])));
$logx=login();
$_SESSION['login']="no";
		foreach($logx as $x){
			if(($log==($x->log)) and ($pas==($x->pas))) $_SESSION['login']=$log;
		}
		
                /*
		if($k==0) {
			echo  "<script>alert('Неправильно введен код CAPTCHA');</script>";
			header("refresh:0; url=login.php"); 
		}
		else{
                    */
				if($_SESSION['login']!="no")
					{
						if(($_SESSION['login']!="admin_manager")and($_SESSION['login']!="manager")){
                                                    // пароль карпорация@2014
							echo  "<script>alert('Привет $log! Вам доступ запрещен к служебной информации!');</script>";
							header("refresh:0; url=login.php"); 
						}
						else{
							echo  "<script>alert('Привет $log!');</script>";
							header("refresh:0; url=index.php?i=special_page"); 
						}
					}
			
				else
					{
						echo  "<script>alert('Вы незарегистрированы или некорректно заполнили форму авторизации!');</script>";
						header("refresh:0; url=login.php"); 
					}
                                        
	//	}
		
		
		
}	//	$_POST['login'  
  
  
  
  ?>
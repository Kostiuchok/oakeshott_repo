<?php 
include_once "a/f.php";
if(isset($_GET['i'])) $i=strip_tags($_GET['i']);
else $i="home";
if($i=="home")header("refresh:0; url=home.php");
else pages($i);
?> 
<!--
<img style=" margin:  auto; display: block; width: 100%; max-width: 1024px;" src="site-under-construction.jpg"/>
-->
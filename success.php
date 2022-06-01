<?php
	include('connect.php');		
	$ses = "master".$_REQUEST['ses'];
	$ses2 = "masterid".$_REQUEST['ses'];
	
	unset($_SESSION[$ses]);
	unset($_SESSION[$ses2]);
	
//	session_destroy();
	
?>

<div class="magic-squre-pic">
	<img src="images/Success2.jpg" style="width: 100%;height:100%">
</div>
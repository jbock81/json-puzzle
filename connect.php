<?php 
		session_start();

	error_reporting(0);
	include ("config.inc.php");
	
	$db=mysqli_connect($DBSERVER, $USERNAME, $PASSWORD);
	mysqli_select_db($db,$DATABASENAME);
	
	if ($db->connect_error) 
	{
		die("Connection failed: " . $db->connect_error);
	}
?>
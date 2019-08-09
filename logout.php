<?php
	include "init.php";
	$obj = new Base_class;
	$status = 0;
	$user_id = $_SESSION["user_id"];
	
	if($obj->Normal_Query("UPDATE users SET status = ? WHERE id = ?", [$status, $user_id])) {

		session_start();
		session_destroy();
		header("location:login.php");

	}
	

?>
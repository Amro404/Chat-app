<?php
	include '../init.php';
	$obj = new Base_class;

	$status = 1;
	if($obj->Normal_Query("SELECT id FROM users WHERE status = ?", [$status])) {

		$online_users = $obj->Count_Rows();
		echo json_encode(["users" => $online_users]);	
	}
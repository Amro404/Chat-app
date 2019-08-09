<?php
	include '../init.php';
	$obj = new Base_class;

	if(isset($_POST["send_emoji"])) {

		$emoji 		= $_POST["send_emoji"];
		$msg_type 	= "emoji";
		$user_id 	= $_SESSION["user_id"];
		$file_sent 	= $obj->Normal_Query("INSERT INTO messages (message, msg_type, user_id) VALUES (?, ?, ?)", [$emoji, $msg_type, $user_id]);

		if($file_sent) {
			echo json_encode(["status" => "success"]);
		}

	}
?>
<?php
	include '../init.php';
	$obj = new Base_class;

	if(isset($_POST["message"])) {
		// Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $message = trim($_POST["message"]);
        $user_id = $_SESSION["user_id"];
        $msg_type = "text";

        $message_sent = $obj->Normal_Query("INSERT INTO messages (message, msg_type, user_id) VALUES (?, ?, ?)", [$message, $msg_type, $user_id]);

        if($message_sent) {
        	echo json_encode(["status" => "success"]);
        }

	}
?>
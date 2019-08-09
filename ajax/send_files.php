<?php
	include '../init.php';
	$obj = new Base_class;
	
	if(isset($_FILES["send_file"]["name"]))	{
		$file_name 	 		= $_FILES["send_file"]["name"];
		$tmp_name	 		= $_FILES["send_file"]["tmp_name"];
		$store_files 		= "../assets/img/";
		$extensions	 		= ["jpg", "JPG", "jpeg", "png", "pdf", "zip", "ZIP", "rar", "docx", "xlsx"];
		$get_file_extension = explode(".", $file_name);
		$get_extension      = end($get_file_extension);

		if(!in_array($get_extension, $extensions)) {
			echo "ERROR";
		} else {
			move_uploaded_file($tmp_name, "$store_files/$file_name");
			$user_id = $_SESSION["user_id"];
			$file_sent = $obj->Normal_Query("INSERT INTO messages (message, msg_type, user_id) VALUES (?, ?, ?)", [$file_name, $get_extension, $user_id]);

			if($file_sent) {
				echo "SUCCESS";
			}
		}
	}
?>
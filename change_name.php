<?php

	include 'init.php';
	if(!isset($_SESSION["user_id"])) {
		header("location:login.php");
	}
	$obj = new Base_class;

	// Check for post request
	if(isset($_POST["change_name"])) {
		// Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $user_name 	= trim($_POST["user_name"]);
        $user_id 	= $_SESSION["user_id"];

        if(empty($user_name)) {
        	$user_name_error = "Sorry name is required";
        } else {
        	$update_query = $obj->Normal_Query("UPDATE users SET name = ? WHERE id = ?", [$user_name, $user_id]);

        	if($update_query) {
        		$obj->Create_Session("user_name", $user_name);
        		$obj->Create_Session("name_updated", "Your name is successfully updated");
        		header("location:index.php");
        	}
        }
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no">
	<title>Home</title>
	<?php include 'components/css.php'; ?>
</head> 
<body>
	<?php include 'components/nav.php'; ?>
	
	<div class="chat-container">
	<?php include 'components/sidebar.php'; ?>
		<section id="right-area">
			<?php include 'components/change_name_form.php'; ?>
		</section><!-- close right area -->
	</div>
	<?php include 'components/js.php'; ?>
</body>
</html>
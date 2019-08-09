<?php
	include 'init.php';
	if(!isset($_SESSION["user_id"])) {
		header("location:login.php");
	}

	$obj = new Base_class;

	if(isset($_POST["change_password"])) {
		$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$current_password 	= trim($_POST["current_password"]);
		$new_password		= trim($_POST["new_password"]);
		$retype_password	= trim($_POST["retype_password"]);

		$current_status = $new_status = $retype_status = 1;

		if(empty($current_password)) {
			$current_password_error = "Current password is required";
			$current_status = "";
		}

		if(empty($new_password)) {
			$new_password_error = "New password is required";
			$new_status = "";
		} elseif (strlen($new_password) < 5) {
			$new_password_error = "New password is too short";
			$new_status = "";
		}

		if(empty($retype_password)) {
			$retype_password_error = "Retype password is required";
			$retype_status = "";

		} elseif($new_password != $retype_password) {
			$retype_password_error = "Password is not confirm";
			$retype_status = "";
		}

		if(!empty($current_status) && !empty($new_status) && !empty($retype_status)) {

			$user_id = $_SESSION["user_id"];
			$password_query = $obj->Normal_Query("SELECT password FROM users WHERE id = ?", [$user_id]);

			if($password_query) {
				$row = $obj->Single_Result();
				$db_password = $row->password;
				if(password_verify($current_password, $db_password)) {

					$update_query = $obj->Normal_Query("UPDATE users SET password = ? WHERE id = ?", [password_hash($new_password, PASSWORD_DEFAULT), $user_id]);

					if($update_query) {
						$obj->Create_Session("password_updated", "Your password is successfully updated");
						header("location:index.php");
					}

				} else {
					$current_password_error = "Please enter the correct password";
				}
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
		<?php include 'components/change_password_form.php'; ?>
		</section><!-- close right area -->
	</div>
	<?php include 'components/js.php'; ?>
</body>
</html>
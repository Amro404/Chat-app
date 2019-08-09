<?php
	include "init.php";
	$obj = new Base_class;
	// Check for post request
	if (isset($_POST["signup"])) {

		// Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$full_name 	 	= trim($_POST["full_name"]);
		$email 		 	= trim($_POST["email"]);
		$password 	 	= trim($_POST["password"]);
		$img_name    	= $_FILES["img"]["name"];
		$img_tmp	 	= $_FILES["img"]["tmp_name"];
		$name_status 	= $email_status = $password_status = $photo_status = 1;
		$img_path 	 	= "assets/img/";
		$extension 	 	= ["jpg", "jpeg", "png"];
		$img_ext	 	= explode(".", $img_name);
		$img_extension 	= end($img_ext);

		// Name validation
		if(empty($full_name)) {
			$name_error  = "Full name is required!";
			$name_status = "";
		}

		// Email validation
		if(empty($email)) {
			$email_error  = "Email is required!";
			$email_status = "";
		} else {
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$email_error  = "Invalid email format!";
				$email_status = "";
			} else {
				// Check email in db
				$Query = $obj->Normal_Query("SELECT email FROM users WHERE email = ?", [$email]);
				if ($Query) {
					if($obj->Count_Rows() == 0) {

					} else {
						$email_error  = "Sorry this email is exist";
						$email_status = "";
					}
				}
			}
		}

		// Password validation
		if(empty($password)) {
			$password_error  = "Password is required!";
			$password_status = "";
		} elseif (strlen($password) < 5) {
			$password_error  = "Password is too short";
			$password_status = "";
		}

		// Image validation
		if(empty($img_name)) {
			$image_error  = "Image is required!";
			$photo_status = "";
		} elseif (!in_array($img_extension, $extension)) {
			$image_error  = "Invalid Image extension";
			$photo_status = "";
		}

		if(!empty($name_status) && !empty($email_status) && !empty($password_status) && !empty($photo_status)) {
			move_uploaded_file($img_tmp, "$img_path/$img_name");
			$status = 0;
			$clean_status = 0;

			$query_submit = $obj->Normal_Query("INSERT INTO users (name, email, password, image, status, clean_status) VALUES (?, ?, ?, ?, ?, ?)", [$full_name, $email, password_hash($password, PASSWORD_DEFAULT), $img_name, $status, $clean_status]);

			if($query_submit) {
				$obj->Create_Session("account_success", "Your account is successfully created");
				header("location:login.php");
			}
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no">
	<title>Create new account</title>
	<?php include 'components/css.php'; ?>

</head>
<body>
	<div class="signup-container">
		
		<div class="account-left">
			<div class="account-text">
				<h1>Lets Chat</h1>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
			</div><!-- close account-text -->
		</div><!-- close account-left -->

		<div class="account-right">
		<?php include 'components/signup_form.php'; ?>
		</div><!-- close account-right -->

	</div><!-- close signup-container -->
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/file_label.js"></script>
</body>
</html>
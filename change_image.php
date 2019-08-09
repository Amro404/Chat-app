<?php

	include 'init.php';
	if(!isset($_SESSION["user_id"])) {
		header("location:login.php");
	}

	$obj = new Base_class;

	if(isset($_POST["change_img"])) {
		$img_name    	= $_FILES["change_img"]["name"];
		$img_tmp	 	= $_FILES["change_img"]["tmp_name"];
		$img_path 	 	= "assets/img/";
		$extension 	 	= ["jpg", "jpeg", "png"];
		$img_ext	 	= explode(".", $img_name);
		$img_extension 	= end($img_ext);

		if(empty($img_name)) {
			$img_error = "Please choose image"; 
		} elseif (!in_array($img_extension, $extension)) {
			$img_error = "Please choose the valid extension";
		} else {
			$user_id = $_SESSION["user_id"];
			move_uploaded_file($img_tmp, "$img_path/$img_name");
			$update_query = $obj->Normal_Query("UPDATE users SET image = ? WHERE id = ?",[$img_name, $user_id]);

			if($update_query) {
				$obj->Create_Session("update_image", "Your image is successfully updated");
				$obj->Create_Session("user_image", $img_name);
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
			<?php include 'components/change_image_form.php'; ?>
		</section><!-- close right area -->
	</div>
	<?php include 'components/js.php'; ?>
</body>
</html>
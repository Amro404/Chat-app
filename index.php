<?php 
	include 'init.php'; 

	if(!isset($_SESSION["user_id"])) {
		header("location:login.php");
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

	<!-- === Password Update flash message === -->
	<?php
		if (isset($_SESSION["password_updated"])) { ?>
			<div class="flash success-flash">
				<span class="remove">&times;</span>
				<div class="flash-heading">
					<h3><span class="checked">&#10004;</span>Success: you have done!</h3>
				</div><!-- close flash-heading -->
				<div class="flash-body">
					<p><?php echo $_SESSION["password_updated"]; ?></p>
				</div><!-- close flash-body -->
			</div><!-- close flash -->
			<?php
		}
		unset($_SESSION["password_updated"]);
	?>
	
	<!-- === name Update flash message === -->
	<?php
		if (isset($_SESSION["name_updated"])) {	?>
			<div class="flash success-flash">
				<span class="remove">&times;</span>
				<div class="flash-heading">
					<h3><span class="checked">&#10004;</span>Success: you have done!</h3>
				</div><!-- close flash-heading -->
				<div class="flash-body">
					<p><?php echo $_SESSION["name_updated"]; ?></p>
				</div><!-- close flash-body -->
			</div><!-- close flash -->
			<?php
		}	
		unset($_SESSION["name_updated"]);
	?>

	<!-- === Image Update flash message === -->
	<?php
		if (isset($_SESSION["update_image"])) { ?>
			<div class="flash success-flash">
				<span class="remove">&times;</span>
				<div class="flash-heading">
					<h3><span class="checked">&#10004;</span>Success: you have done!</h3>
				</div><!-- close flash-heading -->
				<div class="flash-body">
					<p><?php echo $_SESSION["update_image"]; ?></p>
				</div><!-- close flash-body -->
			</div><!-- close flash -->
			<?php
		}	
		unset($_SESSION["name_updated"]);
	?>

<!--  	<div class="flash error-flash">
		<span class="remove">&times;</span>
		<div class="flash-heading">
			<h3><span class="cross">&#x2715;</span>Error: you have error!</h3>
		</div> close flash-heading
		<div class="flash-body">
			<p>first you need to login!</p>
		</div>
	</div>
 -->
	<?php include 'components/nav.php'; ?>
	<div class="chat-container">
		<?php include 'components/sidebar.php'; ?>
		<section id="right-area">
	
			<?php include 'components/messages.php'; ?>
			<?php include 'components/chat_form.php'; ?>
			<?php include 'components/emoji.php'; ?>


		</section><!-- close right area -->
	</div><!-- close chat-container -->

	<?php include 'components/js.php'; ?>
</body>
</html>
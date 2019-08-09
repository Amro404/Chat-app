	<div class="form-area">
	
			<?php 
				echo isset($_SESSION["account_success"]) ? '<div class="alert alert-success">' . $_SESSION["account_success"] . '</div>' : "";
				unset($_SESSION["account_success"]);
			?>


				<form action="" method="POST">
					<div class="group">
						<h2 class="form-heading">
							User Login
						</h2>
					</div><!-- close group -->
					<div class="group">
						<input type="text" name="email" class="control" placeholder="Enter Email..." value="<?php echo isset($email) ? $email : '' ?>">
						<div class="name-error error">
							<?php echo isset($email_error) ? $email_error : ""; ?>
						</div>
					</div><!-- close group -->
	
					<div class="group">
						<input type="password" name="password" class="control" placeholder="Enter Password..." value="<?php echo isset($password) ? $password: '' ?>">
						<div class="name-error error">
							<?php echo isset($password_error) ? $password_error : ""; ?>
						</div>
					</div><!-- close group -->
			
					<div class="group">			
						<input type="submit" name="login" class="btn account-btn" value="User login">
					</div><!-- close group -->
					<div class="group">			
						<a href="signup.php" class="link">Create new account?</a>
					</div><!-- close group -->
				</form>
			</div><!-- close form-area -->
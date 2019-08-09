			<div class="form-area">
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="group">
						<h2 class="form-heading">
							Create new account
						</h2>
					</div><!-- close group -->
					<div class="group">
						<input type="text" name="full_name" class="control" placeholder="Enter Full Name..." value="<?php echo isset($full_name) ? $full_name : '' ?>">
						<div class="name-error error">
							<?php echo isset($name_error) ? $name_error : ""; ?>
						</div>
					</div><!-- close group -->
					<div class="group">
						<input type="email" name="email" class="control" placeholder="Enter Email..." value="<?php echo isset($email) ? $email : '' ?>">
						<div class="name-error error">
							<?php echo isset($email_error) ? $email_error : ""; ?>
						</div>
					</div><!-- close group -->
					<div class="group">
						<input type="password" name="password" class="control" placeholder="Create Password..." value="<?php echo isset($password) ? $password : '' ?>">
						<div class="name-error error">
							<?php echo isset($password_error) ? $password_error : ""; ?>
						</div>
					</div><!-- close group -->
					<div class="group">
						<label for="file" id="file-label"><i class="fa fa-cloud-upload-alt upload-icon"></i>Choose image</label>
						<input type="file" name="img" class="file" id="file">
						<div class="name-error error">
							<?php echo isset($image_error) ? $image_error : ""; ?>
						</div>
					</div><!-- close group -->
					<div class="group">			
						<input type="submit" name="signup" class="btn account-btn" value="Create account">
					</div><!-- close group -->
					<div class="group">			
						<a href="login.php" class="link">Already have an account?</a>
					</div><!-- close group -->
				</form>
			</div><!-- close form-area -->
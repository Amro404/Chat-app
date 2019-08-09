		<div class="form-section">
				<div class="form-grid">
					<form action="" method="POST">
					<div class="group">
						<h2 class="form-heading">
							Change Password
						</h2>
					</div><!-- close group -->
					<div class="group">
						<input type="password" name="current_password" class="control" placeholder="Add Current Password" value="<?php echo isset($current_password) ? $current_password : '' ?>">
						<div class="name-error error">
							<?php echo isset($current_password_error) ? $current_password_error : ""; ?>
						</div>
					</div><!-- close group -->	

					<div class="group">
						<input type="password" name="new_password" class="control" placeholder="Create New Password" value="<?php echo isset($new_password) ? $new_password : '' ?>">
						<div class="name-error error">
							<?php echo isset($new_password_error) ? $new_password_error : ""; ?>
						</div>
					</div><!-- close group -->

					<div class="group">
						<input type="password" name="retype_password" class="control" placeholder="Retype Password" value="<?php echo isset($retype_password) ? $retype_password : '' ?>">
						<div class="name-error error">
							<?php echo isset($retype_password_error) ? $retype_password_error : ""; ?>
						</div>
					</div><!-- close group -->	

					<div class="group">			
						<input type="submit" name="change_password" class="btn account-btn" value="Save Changes">
					</div><!-- close group -->
		
				</form>
				</div><!-- close form-grid -->
			</div><!-- close form-section -->
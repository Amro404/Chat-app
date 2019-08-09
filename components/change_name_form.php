<div class="form-section">
				<div class="form-grid">
					<form action="" method="POST">
					<div class="group">
						<h2 class="form-heading">
							Change Name
						</h2>
					</div><!-- close group -->
					<div class="group">
						<input type="text" name="user_name" class="control" placeholder="Name..." value="<?php echo isset($_SESSION["user_name"]) ? $_SESSION["user_name"] : '' ?>">
						<div class="name-error error">
							<?php echo isset($user_name_error) ? $user_name_error : ""; ?>
						</div>
					</div><!-- close group -->	


					<div class="group">			
						<input type="submit" name="change_name" class="btn account-btn" value="Save Changes">
					</div><!-- close group -->
		
				</form>
				</div><!-- close form-grid -->
			</div><!-- close form-section -->
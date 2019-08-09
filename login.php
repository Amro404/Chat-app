<?php 
	include 'init.php'; 
	$obj = new Base_class;
	// Check for post request
	if (isset($_POST["login"])) {
        // Sanitize POST
		$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$email    = trim($_POST["email"]);
		$password = trim($_POST["password"]);

		$email_status = $password_status = 1;

		if (empty($email)) {
		        $email_error = "Email is required";
		        $email_status = "";
		}

		if (empty($password)) {
		        $password_error = "Password is required";
		        $password_status = "";
		}

		if(!empty($email_status) && !empty($password_status)) {
        	$query_login = $obj->Normal_Query("SELECT * FROM users WHERE email = ?", [$email]);
	        if($query_login) {
	            if($obj->Count_Rows() == 0) {
	                $email_error = "Please enter correct email";
	            } else {


	               	$row = $obj->Single_Result();

	                $user_email    = $row->email;
	                $user_password = $row->password;
	                $user_id       = $row->id;
	                $user_name     = $row->name;
	                $user_image    = $row->image;
	                $clean_status  = $row->clean_status;

                    if (password_verify($password, $user_password)) {

                        $status = 1;
                    	$obj->Normal_Query("UPDATE users SET status = ? WHERE id = ?", [$status, $user_id]);
                        if($clean_status == 0) {

                        	if($obj->Normal_Query("SELECT msg_id FROM messages ORDER BY msg_id DESC LIMIT 1")) {


	                        	$last_row = $obj->Single_Result();
	                            $last_msg_id = $last_row->msg_id + 1;

                        		if($obj->Normal_Query("INSERT INTO clean(clean_message_id, clean_user_id) VALUES(?,?)", [$last_msg_id, $user_id])){
	                            	$updata_clean_status = 1;
	                            	$obj->Normal_Query("UPDATE users SET clean_status = ? WHERE id = ?", [$updata_clean_status, $user_id]);

	                    			$login_time = time();
                            		if ($obj->Normal_Query("SELECT * FROM users_activities WHERE user_id = ?",[$user_id])) {

                            			$activity_row = $obj->Single_Result();
                            			if($activity_row == 0) {
                                        	$obj->Normal_Query("INSERT INTO users_activities (user_id, login_time) VALUES (?,?)", [$user_id, $login_time]);

                                        	$obj->Create_Session("user_name", $user_name);
                                        	$obj->Create_Session("user_id", $user_id);
                                        	$obj->Create_Session("user_image", $user_image);
                                        	header("location:index.php");
                                    	} else {

                                        	$obj->Normal_Query("UPDATE users_activities SET login_time = ? WHERE user_id = ?", [$login_time, $user_id]);
                                        	$obj->Create_Session("user_name", $user_name);
                                        	$obj->Create_Session("user_id", $user_id);
                                        	$obj->Create_Session("user_image", $user_image);
                                            header("location:index.php");
                                    	}
                            		}
                                }
                            }   

                        }else {

                            $login_time = time();
                            if ($obj->Normal_Query("SELECT * FROM users_activities WHERE user_id = ?",[$user_id])) {

                                $activity_row = $obj->Single_Result();
                                if($activity_row == 0) {

                                    $obj->Normal_Query("INSERT INTO users_activities (user_id, login_time) VALUES (?,?)", [$user_id, $login_time]);

                                    $obj->Create_Session("user_name", $user_name);
                                    $obj->Create_Session("user_id", $user_id);
                                    $obj->Create_Session("user_image", $user_image);
                                    header("location:index.php");
                            	} else {

                                	$obj->Normal_Query("UPDATE users_activities SET login_time = ? WHERE user_id = ?", [$login_time, $user_id]);
                                	$obj->Create_Session("user_name", $user_name);
                            		$obj->Create_Session("user_id", $user_id);
                       		 		$obj->Create_Session("user_image", $user_image);
                                	header("location:index.php");
                            	}
                            }
                        }

                   	} else {
                        $password_error = "Please enter correct password";
                   	}
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
                <?php include 'components/login_form.php'; ?>
                </div><!-- close account-right -->

        </div><!-- close signup-container -->
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
</body>
</html>
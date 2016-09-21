<?php

function register_form() {
 
	if(!is_user_logged_in()) {
 
		$output = register_form_fields();
	} else {
		// could show some logged in user info here
		// $output = 'user info here';
	}
	return $output;
}
add_shortcode('register_form', 'register_form');


function register_new_member() {
  	if (isset( $_POST["register-username"] ) && wp_verify_nonce($_POST['checkout_register_nonce'], 'checkout-register-nonce')) {
		$user_login		= $_POST["register-username"];	
		$user_email		= $_POST["register-email"];
		$user_pass		= $_POST["register-password"];
		$pass_confirm 	= $_POST["register-confirm_password"];
 
		// this is required for username checks
		//require_once(ABSPATH . WPINC . '/registration.php');
 
		if(username_exists($user_login)) {
			// Username already registered
			registration_errors()->add('username_unavailable', __('Username already taken', 'themize'));
		}
		if(!validate_username($user_login)) {
			// invalid username
			registration_errors()->add('username_invalid', __('Invalid username', 'themize'));
		}
		if($user_login == '') {
			// empty username
			registration_errors()->add('username_empty', __('Please enter a username', 'themize'));
		}
		if(!is_email($user_email)) {
			//invalid email
			registration_errors()->add('email_invalid', __('Invalid email', 'themize'));
		}
		if(email_exists($user_email)) {
			//Email address already registered
			registration_errors()->add('email_used', __('Email already registered', 'themize'));
		}
		if($user_pass == '') {
			// passwords do not match
			registration_errors()->add('password_empty', __('Please enter a password', 'themize'));
		}
		if($user_pass != $pass_confirm) {
			// passwords do not match
			registration_errors()->add('password_mismatch', __('Passwords do not match', 'themize'));
		}
 
		$errors = registration_errors()->get_error_messages();
 
		// only create the user in if there are no errors
		if(empty($errors)) {
 
			$new_user_id = wp_insert_user(array(
					'user_login'		=> $user_login,
					'user_pass'	 		=> $user_pass,
					'user_email'		=> $user_email,
					'user_registered'	=> date('Y-m-d H:i:s'),
					'role'				=> 'subscriber'
				)
			);
			if($new_user_id) {
				// send an email to the admin alerting them of the registration
				wp_new_user_notification($new_user_id);
 
				// log the new user in
				wp_set_auth_cookie($new_user_id);
				wp_set_current_user($new_user_id, $user_login);	
				do_action('wp_login', $user_login);
 
				// send the newly created user to the home page after logging them in
				wp_redirect("/"); exit;
			}
 
		}
 
	}
}
add_action('init', 'register_new_member');

function register_form_fields() {
		ob_start();
		// show any error messages after form submission
		register_error_messages(); ?>
				<div class="entry">
					<form role="form" action="" method="POST">
						<div class="form-group">
							<label for="username"><?php _e('Username', 'themize'); ?></label>
							<input name="register-username" id="register-username" class="required form-control" type="text"/>
						</div>
						<div class="form-group">
							<label for="email"><?php _e('Email', 'themize'); ?></label>
							<input name="register-email" id="register-pippin_user_email" class="required form-control" type="email"/>
						</div>
						<div class="form-group">
							<label for="password"><?php _e('Password', 'themize'); ?></label>
							<input name="register-password" id="register-password" class="required form-control" type="password"/>
						</div>
						<div class="form-group">
							<label for="confirm_password"><?php _e('Confirm Password', 'themize'); ?></label>
							<input name="register-confirm_password" id="register-confirm_password" class="required form-control" type="password"/>
						</div>
						<input type="hidden" name="checkout_register_nonce" value="<?php echo wp_create_nonce('checkout-register-nonce'); ?>"/>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>

<?php
return ob_get_clean();
}

// used for tracking error messages
function registration_errors(){
    static $wp_error; // Will hold global variable safely
    return isset($wp_error) ? $wp_error : ($wp_error = new WP_Error(null, null, null));
}
// displays error messages from form submissions
function register_error_messages() {
	if($codes = registration_errors()->get_error_codes()) {
		echo '<div class="alert alert-warning">';
		    // Loop error codes and display errors
		   foreach($codes as $code){
		        $message = registration_errors()->get_error_message($code);
		        echo '<span class="error"><strong>' . __('Error', 'themize') . '</strong>: ' . $message . '</span><br/>';
		    }
		echo '</div>';
	}	
}
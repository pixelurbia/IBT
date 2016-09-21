<?php

// user login form
function login_form() {
 
	if(!is_user_logged_in()) {
		$output = login_form_fields();
	} else {
		// could show some logged in user info here
		// $output = 'user info here';
	}
	return $output;
}
add_shortcode('login_form', 'login_form');

// login form fields
function login_form_fields() {
 
	ob_start(); ?>
 
		<?php
		// show any error messages after form submission
		login_error_messages(); ?>

		<div class="entry">

			<form role="form" action="" method="POST">
				<div class="form-group">
					<label for="labelEmail">Username</label>
					<input name="username" type="text" class="form-control" id="labelEmail">
				</div>
				<div class="form-group">
					<label for="labelPassword">Password</label>
					<input name="password" type="password" class="form-control" id="labelPassword">
				</div>
				<input type="hidden" name="login_nonce" value="<?php echo wp_create_nonce('login-nonce'); ?>"/>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>

		</div>
	<?php
	return ob_get_clean();
}

// logs a member in after submitting a form
function login_member() {
 
	if(isset($_POST['username']) && wp_verify_nonce($_POST['login_nonce'], 'login-nonce')) {
 
		// this returns the user ID and other info from the user name
		$user = get_user_by('login', $_POST['username']);
 
		if(!$user) {
			// if the user name doesn't exist
			login_errors()->add('empty_username', __('Invalid username', 'themize'));
		}
 
		if(!isset($_POST['password']) || $_POST['password'] == '') {
			// if no password was entered
			login_errors()->add('empty_password', __('Please enter a password', 'themize'));
		}
 
		// check the user's login with their password
		if(!wp_check_password($_POST['password'], $user->user_pass, $user->ID)) {
			// if the password is incorrect for the specified user
			login_errors()->add('empty_password', __('Incorrect password', 'themize'));
		}
 
		// retrieve all error messages
		$errors = login_errors()->get_error_messages();
 
		// only log the user in if there are no errors
		if(empty($errors)) {
 
			wp_set_auth_cookie($user->ID);
			wp_set_current_user($user->ID, $_POST['username']);	
			do_action('wp_login', $_POST['username']);
 
			wp_redirect(home_url()); exit;
		}
	}
}
add_action('init', 'login_member');

// used for tracking error messages
function login_errors(){
    static $wp_error; // Will hold global variable safely
    return isset($wp_error) ? $wp_error : ($wp_error = new WP_Error(null, null, null));
}
// displays error messages from form submissions
function login_error_messages() {
	if($codes = login_errors()->get_error_codes()) {
		echo '<div class="alert alert-warning">';
		    // Loop error codes and display errors
		   foreach($codes as $code){
		        $message = login_errors()->get_error_message($code);
		        echo '<span class="error"><strong>' . __('Error', 'themize') . '</strong>: ' . $message . '</span><br/>';
		    }
		echo '</div>';
	}	
}

?>
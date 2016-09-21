<div class="row edd-container">
<div class="col-md-6 col-md-offset-3">
<!-- Nav tabs -->


<div>
<?php
/**
 * This template is used to display the profile editor with [edd_profile_editor]
 */
global $current_user;

if ( is_user_logged_in() ):
	$user_id      = get_current_user_id();
	$first_name   = get_user_meta( $user_id, 'first_name', true );
	$last_name    = get_user_meta( $user_id, 'last_name', true );
	$display_name = $current_user->display_name;
	$address      = edd_get_customer_address( $user_id );

	if ( edd_is_cart_saved() ): ?>
		<?php $restore_url = add_query_arg( array( 'edd_action' => 'restore_cart', 'edd_cart_token' => edd_get_cart_token() ), edd_get_checkout_uri() ); ?>
		<p class="edd_success"><strong><?php _e( 'Saved cart', 'edd'); ?>:</strong> <?php printf( __( 'You have a saved cart, <a href="%s">click here</a> to restore it.', 'edd' ), $restore_url ); ?></p>
	<?php endif; ?>

	<?php if ( isset( $_GET['updated'] ) && $_GET['updated'] == true && ! edd_get_errors() ): ?>
		<div class="alert alert-success"><p><strong><?php _e( 'Success', 'edd'); ?>:</strong> <?php _e( 'Your profile has been edited successfully.', 'edd' ); ?></p></div>
	<?php endif; ?>

	<?php edd_print_errors(); ?>

	<ul class="nav nav-tabs">
		<li class="active"><a href="#general" data-toggle="tab">General</a></li>
		<li><a href="#billing" data-toggle="tab">Billing</a></li>
		<li><a href="#password" data-toggle="tab">Password</a></li>
	</ul>

	<form action="<?php echo edd_get_current_page_url(); ?>" method="post">

    <input type="hidden" name="edd_profile_editor_nonce" value="<?php echo wp_create_nonce( 'edd-profile-editor-nonce' ); ?>"/>
	<input type="hidden" name="edd_action" value="edit_user_profile" />
	<input type="hidden" name="edd_redirect" value="<?php echo esc_url( edd_get_current_page_url() ); ?>" />
 
	<!-- Tab panes -->
	<div class="tab-content">
		<div class="tab-pane active" id="general">
			<div class="form-group row">
				<label for="edd_first_name" class="col-sm-3 control-label"><?php _e( 'First Name', 'edd' ); ?></label>
				<div class="col-sm-9">
					<input name="edd_first_name" id="edd_first_name" class="text edd-input form-control" type="text" value="<?php echo $first_name; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label for="edd_last_name" class="col-sm-3 control-label"><?php _e( 'Last Name', 'edd' ); ?></label>
				<div class="col-sm-9">
					<input name="edd_last_name" id="edd_last_name" class="text edd-input form-control" type="text" value="<?php echo $last_name; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label for="edd_display_name" class="col-sm-3 control-label"><?php _e( 'Display Name', 'edd' ); ?></label>
				<div class="col-sm-9">
					<select name="edd_display_name" id="edd_display_name" class="select edd-select form-control">
						<?php if ( ! empty( $current_user->first_name ) ): ?>
						<option <?php selected( $display_name, $current_user->first_name ); ?> value="<?php echo $current_user->first_name; ?>"><?php echo $current_user->first_name; ?></option>
						<?php endif; ?>
						<option <?php selected( $display_name, $current_user->user_nicename ); ?> value="<?php echo $current_user->user_nicename; ?>"><?php echo $current_user->user_nicename; ?></option>
						<?php if ( ! empty( $current_user->last_name ) ): ?>
						<option <?php selected( $display_name, $current_user->last_name ); ?> value="<?php echo $current_user->last_name; ?>"><?php echo $current_user->last_name; ?></option>
						<?php endif; ?>
						<?php if ( ! empty( $current_user->first_name ) && ! empty( $current_user->last_name ) ): ?>
						<option <?php selected( $display_name, $current_user->first_name . ' ' . $current_user->last_name ); ?> value="<?php echo $current_user->first_name . ' ' . $current_user->last_name; ?>"><?php echo $current_user->first_name . ' ' . $current_user->last_name; ?></option>
						<option <?php selected( $display_name, $current_user->last_name . ' ' . $current_user->first_name ); ?> value="<?php echo $current_user->last_name . ' ' . $current_user->first_name; ?>"><?php echo $current_user->last_name . ' ' . $current_user->first_name; ?></option>
						<?php endif; ?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label for="edd_email" class="col-sm-3 control-label"><?php _e( 'Email Address', 'edd' ); ?></label>
				<div class="col-sm-9">
					<input name="edd_email" id="edd_email" class="text edd-input form-control required" type="email" value="<?php echo $current_user->user_email; ?>" />
				</div>
			</div>

		  	<div class="form-group row">
			    <div class="col-sm-3"></div>
			    <div class="col-sm-9">
					<input name="edd_profile_editor_submit" id="edd_profile_editor_submit" type="submit" class="edd_submit button" value="<?php _e( 'Save Changes', 'edd' ); ?>"/>
			    </div>
		  	</div>

		</div>
		<div class="tab-pane" id="billing">
			<div class="form-group row">
			    <label for="edd_address_line1" class="col-sm-3 control-label"><?php _e( 'Line 1', 'edd' ); ?></label>
			    <div class="col-sm-9">
			      <input name="edd_address_line1" id="edd_address_line1" class="text edd-input form-control" type="text" value="<?php echo $address['line1']; ?>" />
			    </div>
		  	</div>
		  	<div class="form-group row">
			    <label for="edd_address_line2" class="col-sm-3 control-label"><?php _e( 'Line 2', 'edd' ); ?></label>
			    <div class="col-sm-9">
			      <input name="edd_address_line2" id="edd_address_line2" class="text edd-input form-control" type="text" value="<?php echo $address['line2']; ?>" />
			    </div>
		  	</div>
		  	<div class="form-group row">
			    <label for="edd_address_city" class="col-sm-3 control-label"><?php _e( 'City', 'edd' ); ?></label>
			    <div class="col-sm-9">
			      <input name="edd_address_city" id="edd_address_city" class="text edd-input form-control" type="text" value="<?php echo $address['city']; ?>" />
			    </div>
		  	</div>
		  	<div class="form-group row">
			    <label for="edd_address_zip" class="col-sm-3 control-label"><?php _e( 'Postal Code', 'edd' ); ?></label>
			    <div class="col-sm-9">
			      <input name="edd_address_zip" id="edd_address_zip" class="text edd-input form-control" type="text" value="<?php echo $address['zip']; ?>" />
			    </div>
		  	</div>
		  	<div class="form-group row">
			    <label for="edd_address_country" class="col-sm-3 control-label"><?php _e( 'Country', 'edd' ); ?></label>
			    <div class="col-sm-9">
			      <select name="edd_address_country" id="edd_address_country" class="select edd-select form-control">
					<?php foreach( edd_get_country_list() as $key => $country ) : ?>
					<option value="<?php echo $key; ?>"<?php selected( $address['country'], $key ); ?>><?php echo $country; ?></option>
					<?php endforeach; ?>
				</select>
			    </div>
		  	</div>
		  	<div class="form-group row">
			    <label for="edd_address_state" class="col-sm-3 control-label"><?php _e( 'State', 'edd' ); ?></label>
			    <div class="col-sm-9">
			      <input name="edd_address_state" id="edd_address_state" class="text edd-input form-control" type="text" value="<?php echo $address['state']; ?>" />
			    </div>
		  	</div>

		  	<div class="form-group row">
			    <div class="col-sm-3"></div>
			    <div class="col-sm-9">
					<input name="edd_profile_editor_submit" id="edd_profile_editor_submit" type="submit" class="edd_submit button" value="<?php _e( 'Save Changes', 'edd' ); ?>"/>
			    </div>
		  	</div>

		</div>
		<div class="tab-pane" id="password">

			<div class="alert alert-info">
				<p class="edd_password_change_notice"><?php _e( 'Please note after changing your password, you must log back in.', 'edd' ); ?></p>
			</div>

			<div class="form-group row">
			    <label for="edd_user_pass" class="col-sm-3 control-label"><?php _e( 'New Password', 'edd' ); ?></label>
			    <div class="col-sm-9">
			      <input name="edd_new_user_pass1" id="edd_new_user_pass1" class="password edd-input required form-control" type="password"/>
			    </div>
		  	</div>

		  	<div class="form-group row">
			    <label for="edd_user_pass" class="col-sm-3 control-label"><?php _e( 'Re-enter Password', 'edd' ); ?></label>
			    <div class="col-sm-9">
			      <input name="edd_new_user_pass2" id="edd_new_user_pass2" class="password edd-input required form-control" type="password"/>
			    </div>
		  	</div>
		  	<div class="form-group row">
			    <div class="col-sm-3"></div>
			    <div class="col-sm-9">
					<input name="edd_profile_editor_submit" id="edd_profile_editor_submit" type="submit" class="edd_submit button" value="<?php _e( 'Save Changes', 'edd' ); ?>"/>
			    </div>
		  	</div>
		</div>
	</div>

	</form><!-- #edd_profile_editor_form -->
	<?php
else:
	echo __( 'You need to login to edit your profile.', 'edd' );
	echo edd_login_form();
endif;
?>
</div>
</div>
</div>

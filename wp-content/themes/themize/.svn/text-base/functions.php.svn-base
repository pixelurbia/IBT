<?php

/*-----------------------------------------------------------------------------------

    FUNCTIONS
    -----------------------------------------------------------------------------
	Editing this file will break the theme and possibly the universe.
	This file connects to our awesome framework.

-----------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------*/
/*	Paths
/*-----------------------------------------------------------------------------------*/

$customizer_path = 'framework/customizer';
$tgm_path = 'framework/tgm';
$importer_path = 'framework/importer';
$hooks_path = 'framework/hooks';

/*-----------------------------------------------------------------------------------*/
/*	Paths
/*-----------------------------------------------------------------------------------*/

require_once("framework/functions.php");
require_once($customizer_path . '/customizer_CSS.php');
require_once($customizer_path . '/init.php');
require_once($tgm_path . '/plugin-activate.php');
if (!get_option("themize_installed")) {
		require_once($importer_path . '/setup.php');
}
require_once($hooks_path . '/hook_contact_bar.php');
require_once($hooks_path . '/hook_copyright_footer.php');
require_once($hooks_path . '/hook_menu_footer.php');
require_once($hooks_path . '/hook_mobile_navigation.php');
require_once($hooks_path . '/hook_navigation.php');
require_once($hooks_path . '/hook_rainbow_bar.php');
require_once($hooks_path . '/hook_widget_footer.php');
require_once($hooks_path . '/hook_sitewide_alert.php');
require_once($hooks_path . '/hook_style_switcher.php');

if (class_exists('WPBakeryVisualComposerAbstract')) {
	require_once('framework/vc-maps.php');
}

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
show_admin_bar(false);

}


//allow redirection, even if my theme starts to send output to the browser
add_action('init', 'do_output_buffer');
function do_output_buffer() {
        ob_start();
}

function fb_add_custom_user_profile_fields( $user ) {
?>
	<h3><?php _e('Extra Profile Information', 'your_textdomain'); ?></h3>
	
	<table class="form-table">
		<tr>
			<th>
				<label for="address"><?php _e('Address', 'your_textdomain'); ?>
			</label></th>
			<td>
				<input type="text" name="address" id="address" value="<?php echo esc_attr( get_the_author_meta( 'address', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php _e('Please enter your address.', 'your_textdomain'); ?></span>
			</td>
		</tr>
	</table>
<?php }

function fb_save_custom_user_profile_fields( $user_id ) {
	
	if ( !current_user_can( 'edit_user', $user_id ) )
		return FALSE;
	
	update_usermeta( $user_id, 'address', $_POST['address'] );
}

add_action( 'show_user_profile', 'fb_add_custom_user_profile_fields' );
add_action( 'edit_user_profile', 'fb_add_custom_user_profile_fields' );

add_action( 'personal_options_update', 'fb_save_custom_user_profile_fields' );
add_action( 'edit_user_profile_update', 'fb_save_custom_user_profile_fields' );
?>
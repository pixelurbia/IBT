<?php
if (isset($_GET['id'])) {
if (!get_option("themize_installed")) {
	if ($_GET['id'] == "quick") {

			require_once ABSPATH . 'wp-admin/includes/plugin.php'; // Need for plugins_api
	        require_once ABSPATH . 'wp-admin/includes/plugin-install.php'; // Need for plugins_api
	        require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php'; // Need for upgrade classes
	        require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader-skins.php'; // Need for upgrade classes
	        require_once ABSPATH . 'wp-admin/includes/file.php'; // Need for upgrade classes
	        require_once ABSPATH . 'wp-admin/includes/misc.php'; // Need for upgrade classes
	        require_once ABSPATH . 'wp-admin/includes/admin.php'; // Need for upgrade classes

	  		// Create a new instance of Plugin_Upgrader.
		    $upgrader = new Plugin_Upgrader( $skin = new Plugin_Installer_Skin( compact( 'type', 'title', 'url', 'nonce', 'plugin', 'api' ) ) );

		  //  Perform the action and install the plugin from the $source urldecode().
		    $wordpress_importer = $upgrader->install( "http://104.236.34.83/import/plugins/wordpress-importer.zip" );
		    $templatera = $upgrader->install( "http://104.236.34.83/import/plugins/templatera.zip" );
		    $js_composer = $upgrader->install( "http://104.236.34.83/import/plugins/js_composer.zip" );
		    $essential_grid = $upgrader->install( "http://104.236.34.83/import/plugins/essential-grid.zip" );
		    $themize_shortcodes = $upgrader->install( "http://104.236.34.83/import/plugins/themize-shortcodes.zip" );
		    $revslider = $upgrader->install( "http://104.236.34.83/import/plugins/revslider.zip" );
		    $parallax_backgrounds = $upgrader->install( "http://104.236.34.83/import/plugins/parallax-backgrounds.zip" );
		    $envato_toolkit = $upgrader->install( "http://104.236.34.83/import/plugins/envato-wordpress-toolkit-master.zip" );

		    $plugins = array('wordpress-importer/wordpress-importer.php', 'templatera/templatera.php', 'js_composer/js_composer.php', 'essential-grid/essential-grid.php', 'revslider/revslider.php', 'parallax-backgrounds/vc-row-parallax.php', 'envato-wordpress-toolkit-master/index.php');
		    activate_plugins( $plugins );

		    if ( class_exists( 'WP_Importer' ) ) {
			    $ooga = new WP_Import;
			    $ooga->fetch_attachments = true;
			    $ooga->import( get_template_directory(). '/framework/importer/setup-quick.xml' );
			}

		    $absolute_path = __FILE__;
			$path_to_file = explode( 'wp-content', $absolute_path );
			$path_to_wp = $path_to_file[0];
			require_once( $path_to_wp.'/wp-load.php' );
			require_once( $path_to_wp.'/wp-includes/functions.php');

	        $slider = new RevSlider();
	        $slider->importSliderFromPost($updateAnim, $updateStatic, $exactfilepath = get_template_directory().'/framework/importer/sliders/creative-2.zip');
	        $slider->importSliderFromPost($updateAnim, $updateStatic, $exactfilepath = get_template_directory().'/framework/importer/sliders/creative-3.zip');
	        $slider->importSliderFromPost($updateAnim, $updateStatic, $exactfilepath = get_template_directory().'/framework/importer/sliders/homepage-1.zip');
	        $slider->importSliderFromPost($updateAnim, $updateStatic, $exactfilepath = get_template_directory().'/framework/importer/sliders/landing-page.zip');
	        $slider->importSliderFromPost($updateAnim, $updateStatic, $exactfilepath = get_template_directory().'/framework/importer/sliders/minimal.zip');
	        $slider->importSliderFromPost($updateAnim, $updateStatic, $exactfilepath = get_template_directory().'/framework/importer/sliders/photography-1.zip');
	        $slider->importSliderFromPost($updateAnim, $updateStatic, $exactfilepath = get_template_directory().'/framework/importer/sliders/photography.zip');
	        $slider->importSliderFromPost($updateAnim, $updateStatic, $exactfilepath = get_template_directory().'/framework/importer/sliders/slider11.zip');

	        update_option('show_on_front', 'page');
			update_option('page_on_front', '6458');
			set_theme_mod('menu_footer', "enable");
			set_theme_mod('copyright_footer', "enable");
			$locations = get_theme_mod('nav_menu_locations');
			$locations['header-menu'] = 'main-menu';
			$locations['footer-menu'] = 'main-menu';
			$locations['mobile-menu'] = 'main-menu';
			set_theme_mod( 'nav_menu_locations', $locations ); 
			set_theme_mod('logo', 'text_logo');
			set_theme_mod('logo_text', 'THEMIZE');
			set_theme_mod('logo_font_size', '18px');
			set_theme_mod('logo_font_letterspacing', '5px');
			set_theme_mod('logo_font', 'Quicksand');
			set_theme_mod('header_sticky', 'enable');
			set_theme_mod('purchase_button', 'enable');
			update_option('purchase_button_text', 'PURCHASE NOW');
			set_theme_mod('enable_rainbow_bar', true);
			update_option("themize_installed", "installed");
			set_theme_mod('header_background', '#222');
			set_theme_mod('header_background_opacity', '0.74');
			set_theme_mod('header_shadow', 'disable');
			set_theme_mod('header_hover_over_content', true);
			set_theme_mod('navigation_font_colour', '#fff');
			set_theme_mod('logo_colour', '#fff');
			set_theme_mod('menu_active_font_colour_opacity', '0.4');
			set_theme_mod('menu_active_font_colour', '#fff');
			set_theme_mod('submenu_background', '#222');
			set_theme_mod('submenu_font_colour', '#848484');
			set_theme_mod('submenu_inner_border', '1px solid rgba(255, 255, 255, 0.08)');
			set_theme_mod('navigation_top_bottom_padding', '45px');
			set_theme_mod('submenu_style', 'submenu-flat');
			set_theme_mod('scrolled_header_background', '#ffffff');
			set_theme_mod('navigation_scrolled_font_colour', '#444');
			set_theme_mod('scrolled_header_background_opacity', '1');
			set_theme_mod('scrolled_header_shadow', 'enable');
			set_theme_mod('mini_logo_colour', '#222');
			set_theme_mod('submenu_hover_font_colour', '#fff');
			set_theme_mod('mega_menu_heading_colour', '#fff');
			set_theme_mod('enable_alert', true);
			set_theme_mod('alert_id', 'demo-alert');
			update_option('alert_content', 'THIS DEMO IS FULLY DESIGNED USING THE THEMIZE WEBSITE DESIGNER');
			update_option('alert_close_text', 'Close');
			set_theme_mod('alert_colour', '#222222');
			set_theme_mod('preloader', true);
			set_theme_mod('preloader_icon_colour', '#ccc');
			set_theme_mod('preloader_icon', 'fa-circle-o-notch');
			set_theme_mod('preloader_icon_size', '32px');
			set_theme_mod('preloader_background_colour', '#f7f7f7');
			//update_option('nav_menu_locations[header-menu]');
			update_option('custom_footer', '12894');
			set_theme_mod('mini_menu_active_font_colour', '#111111');
			set_theme_mod('mini_menu_active_font_colour_opacity', '1');


			set_theme_mod('scrolled_header_background_opacity', '1');
			set_theme_mod('submenu_background_opacity', '1');

			set_theme_mod('mini_menu_active_font_colour_opacity', '1');
			set_theme_mod('menu_active_bg_colour_opacity', '1');
			set_theme_mod('menu_active_border_colour_opacity', '1');
			set_theme_mod('menu_active_arrow_colour_opacity', '1');
			set_theme_mod('purchase_button_background_opacity', '1');
			set_theme_mod('scrolled_header_background_opacity', '1');
			set_theme_mod('purchase_button_colour', '');
			set_theme_mod('purchase_button_custom_color_hover', '#1d93bc');
			set_theme_mod('purchase_button_text_custom_color_hover', '#fff');
			set_theme_mod('purchase_button_background_opacity', '1');
			set_theme_mod('purchase_button_custom_color', '#29abe2');

			require_once( WP_PLUGIN_DIR.'/essential-grid/essential-grid.php');
			require_once( WP_PLUGIN_DIR.'/essential-grid/admin/includes/import.class.php');

			$themize_grid_im = new Essential_Grid_Import();
			$themize_grids = file_get_contents(get_template_directory() . '/framework/importer/ess_grid.json');
			$themize_grids = json_decode($themize_grids,true);
			$themize_new_grids = array();
			$themize_grid_im->import_grids($themize_grids['grids']);

			die();
	}
	if ($_GET['id'] == "full") {

			require_once ABSPATH . 'wp-admin/includes/plugin.php'; // Need for plugins_api
	        require_once ABSPATH . 'wp-admin/includes/plugin-install.php'; // Need for plugins_api
	        require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php'; // Need for upgrade classes
	        require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader-skins.php'; // Need for upgrade classes
	        require_once ABSPATH . 'wp-admin/includes/file.php'; // Need for upgrade classes
	        require_once ABSPATH . 'wp-admin/includes/misc.php'; // Need for upgrade classes
	        require_once ABSPATH . 'wp-admin/includes/admin.php'; // Need for upgrade classes

	  		// Create a new instance of Plugin_Upgrader.
		    $upgrader = new Plugin_Upgrader( $skin = new Plugin_Installer_Skin( compact( 'type', 'title', 'url', 'nonce', 'plugin', 'api' ) ) );

		  //  Perform the action and install the plugin from the $source urldecode().
		    $wordpress_importer = $upgrader->install( "http://104.236.34.83/import/plugins/wordpress-importer.zip" );
		    $templatera = $upgrader->install( "http://104.236.34.83/import/plugins/templatera.zip" );
		    $js_composer = $upgrader->install( "http://104.236.34.83/import/plugins/js_composer.zip" );
		    $essential_grid = $upgrader->install( "http://104.236.34.83/import/plugins/essential-grid.zip" );
		    $themize_shortcodes = $upgrader->install( "http://104.236.34.83/import/plugins/themize-shortcodes.zip" );
		    $revslider = $upgrader->install( "http://104.236.34.83/import/plugins/revslider.zip" );
		    $parallax_backgrounds = $upgrader->install( "http://104.236.34.83/import/plugins/parallax-backgrounds.zip" );
		    $envato_toolkit = $upgrader->install( "http://104.236.34.83/import/plugins/envato-wordpress-toolkit-master.zip" );

		    $plugins = array('wordpress-importer/wordpress-importer.php', 'templatera/templatera.php', 'js_composer/js_composer.php', 'essential-grid/essential-grid.php', 'revslider/revslider.php', 'parallax-backgrounds/vc-row-parallax.php', 'envato-wordpress-toolkit-master/index.php');
		    activate_plugins( $plugins );

		    if ( class_exists( 'WP_Importer' ) ) {
			    $ooga = new WP_Import;
			    $ooga->fetch_attachments = true;
			    $ooga->import( get_template_directory(). '/framework/importer/setup-full.xml' );
			}

		    $absolute_path = __FILE__;
			$path_to_file = explode( 'wp-content', $absolute_path );
			$path_to_wp = $path_to_file[0];
			require_once( $path_to_wp.'/wp-load.php' );
			require_once( $path_to_wp.'/wp-includes/functions.php');

	        $slider = new RevSlider();
	        $slider->importSliderFromPost($updateAnim, $updateStatic, $exactfilepath = get_template_directory().'/framework/importer/sliders/creative-2.zip');
	        $slider->importSliderFromPost($updateAnim, $updateStatic, $exactfilepath = get_template_directory().'/framework/importer/sliders/creative-3.zip');
	        $slider->importSliderFromPost($updateAnim, $updateStatic, $exactfilepath = get_template_directory().'/framework/importer/sliders/homepage-1.zip');
	        $slider->importSliderFromPost($updateAnim, $updateStatic, $exactfilepath = get_template_directory().'/framework/importer/sliders/landing-page.zip');
	        $slider->importSliderFromPost($updateAnim, $updateStatic, $exactfilepath = get_template_directory().'/framework/importer/sliders/minimal.zip');
	        $slider->importSliderFromPost($updateAnim, $updateStatic, $exactfilepath = get_template_directory().'/framework/importer/sliders/photography-1.zip');
	        $slider->importSliderFromPost($updateAnim, $updateStatic, $exactfilepath = get_template_directory().'/framework/importer/sliders/photography.zip');
	        $slider->importSliderFromPost($updateAnim, $updateStatic, $exactfilepath = get_template_directory().'/framework/importer/sliders/slider11.zip');

	        update_option('show_on_front', 'page');
			update_option('page_on_front', '10373');
			set_theme_mod('menu_footer', "enable");
			set_theme_mod('copyright_footer', "enable");
			$locations = get_theme_mod('nav_menu_locations');
			$locations['header-menu'] = 'main-menu';
			$locations['footer-menu'] = 'footer-menu';
			$locations['mobile-menu'] = 'footer-menu';
			set_theme_mod( 'nav_menu_locations', $locations ); 
			set_theme_mod('logo', 'text_logo');
			set_theme_mod('logo_text', 'THEMIZE');
			set_theme_mod('logo_font_size', '18px');
			set_theme_mod('logo_font_letterspacing', '5px');
			set_theme_mod('logo_font', 'Quicksand');
			set_theme_mod('header_sticky', 'enable');
			set_theme_mod('purchase_button', 'enable');
			update_option('purchase_button_text', 'PURCHASE NOW');
			set_theme_mod('enable_rainbow_bar', true);
			update_option("themize_installed", "installed");
			set_theme_mod('header_background', '#222');
			set_theme_mod('header_background_opacity', '0.74');
			set_theme_mod('header_shadow', 'disable');
			set_theme_mod('header_hover_over_content', true);
			set_theme_mod('navigation_font_colour', '#fff');
			set_theme_mod('logo_colour', '#fff');
			set_theme_mod('menu_active_font_colour_opacity', '0.4');
			set_theme_mod('menu_active_font_colour', '#fff');
			set_theme_mod('submenu_background', '#222');
			set_theme_mod('submenu_font_colour', '#848484');
			set_theme_mod('submenu_inner_border', '1px solid rgba(255, 255, 255, 0.08)');
			set_theme_mod('navigation_top_bottom_padding', '45px');
			set_theme_mod('submenu_style', 'submenu-flat');
			set_theme_mod('scrolled_header_background', '#ffffff');
			set_theme_mod('navigation_scrolled_font_colour', '#444');
			set_theme_mod('scrolled_header_background_opacity', '1');
			set_theme_mod('scrolled_header_shadow', 'enable');
			set_theme_mod('mini_logo_colour', '#222');
			set_theme_mod('submenu_hover_font_colour', '#fff');
			set_theme_mod('mega_menu_heading_colour', '#fff');
			set_theme_mod('enable_alert', true);
			set_theme_mod('alert_id', 'demo-alert');
			update_option('alert_content', 'THIS DEMO IS FULLY DESIGNED USING THE THEMIZE WEBSITE DESIGNER');
			update_option('alert_close_text', 'Close');
			set_theme_mod('alert_colour', '#222222');
			set_theme_mod('preloader', true);
			set_theme_mod('preloader_icon_colour', '#ccc');
			set_theme_mod('preloader_icon', 'fa-circle-o-notch');
			set_theme_mod('preloader_icon_size', '32px');
			set_theme_mod('preloader_background_colour', '#f7f7f7');
			//update_option('nav_menu_locations[header-menu]');
			update_option('custom_footer', '12894');
			set_theme_mod('mini_menu_active_font_colour', '#111111');
			set_theme_mod('mini_menu_active_font_colour_opacity', '1');


			set_theme_mod('scrolled_header_background_opacity', '1');
			set_theme_mod('submenu_background_opacity', '1');

			set_theme_mod('mini_menu_active_font_colour_opacity', '1');
			set_theme_mod('menu_active_bg_colour_opacity', '1');
			set_theme_mod('menu_active_border_colour_opacity', '1');
			set_theme_mod('menu_active_arrow_colour_opacity', '1');
			set_theme_mod('purchase_button_background_opacity', '1');
			set_theme_mod('scrolled_header_background_opacity', '1');
			set_theme_mod('purchase_button_colour', '');
			set_theme_mod('purchase_button_custom_color_hover', '#1d93bc');
			set_theme_mod('purchase_button_text_custom_color_hover', '#fff');
			set_theme_mod('purchase_button_background_opacity', '1');
			set_theme_mod('purchase_button_custom_color', '#29abe2');

			require_once( WP_PLUGIN_DIR.'/essential-grid/essential-grid.php');
			require_once( WP_PLUGIN_DIR.'/essential-grid/admin/includes/import.class.php');

			$themize_grid_im = new Essential_Grid_Import();
			$themize_grids = file_get_contents(get_template_directory() . '/framework/importer/ess_grid.json');
			$themize_grids = json_decode($themize_grids,true);
			$themize_new_grids = array();
			$themize_grid_im->import_grids($themize_grids['grids']);

			die();
	}
	if ($_GET['id'] == "basic") {
			
			require_once ABSPATH . 'wp-admin/includes/plugin.php'; // Need for plugins_api
	        require_once ABSPATH . 'wp-admin/includes/plugin-install.php'; // Need for plugins_api
	        require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php'; // Need for upgrade classes
	        require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader-skins.php'; // Need for upgrade classes
	        require_once ABSPATH . 'wp-admin/includes/file.php'; // Need for upgrade classes
	        require_once ABSPATH . 'wp-admin/includes/misc.php'; // Need for upgrade classes

	  		// Create a new instance of Plugin_Upgrader.
		    $upgrader = new Plugin_Upgrader( $skin = new Plugin_Installer_Skin( compact( 'type', 'title', 'url', 'nonce', 'plugin', 'api' ) ) );

		    // Perform the action and install the plugin from the $source urldecode().
		    $upgrader->install( "http://104.236.34.83/import/plugins/templatera.zip" );
		    $upgrader->install( "http://104.236.34.83/import/plugins/js_composer.zip" );
		    $upgrader->install( "http://104.236.34.83/import/plugins/essential-grid.zip" );
		    $upgrader->install( "http://104.236.34.83/import/plugins/themize-shortcodes.zip" );
		    $upgrader->install( "http://104.236.34.83/import/plugins/revslider.zip" );
			$upgrader->install( "http://104.236.34.83/import/plugins/envato-wordpress-toolkit-master.zip" );

		    $plugins = array('wordpress-importer/wordpress-importer.php', 'templatera/templatera.php', 'js_composer/js_composer.php', 'essential-grid/essential-grid.php', 'revslider/revslider.php', 'parallax-backgrounds/vc-row-parallax.php', 'envato-wordpress-toolkit-master/index.php');
		    activate_plugins( $plugins );


		   	update_option("themize_installed", "installed");

		   	die();

	}
}
}
?>
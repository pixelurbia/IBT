<?php

/*-----------------------------------------------------------------------------------

    THEME FUNCTIONS
    -----------------------------------------------------------------------------

	Editing this file will break the theme and possibly the universe.

  
    TABLE OF CONTENTS
    -----------------------------------------------------------------------------

    1. 	Set Content Width
    2. 	Language Support
    3. 	Add Theme Support
    4. 	Load Admin JS Files
    5. 	Load theme CSS
    6. 	Load JS
    7. 	Load Admin CSS
    8. 	Load Google Fonts
    9. 	Register Menu Areas
    10. Register Widget Areas
    12. Other functions
    
/*-----------------------------------------------------------------------------------*/

// function customizer_preloader() {
// 	echo '<div class="customizer-preloader-container"><div class="customizer-preloader"><i class="fa fa-cog fa-spin"></i><br><h1>Loading...</h1><p>This will only take a few seconds</p></div></div>';
// }
// add_action('customize_controls_init', 'customizer_preloader');

/*-----------------------------------------------------------------------------------*/
/*	1. Set Content Width
/*-----------------------------------------------------------------------------------*/

if ( ! isset( $content_width ) )
	$content_width = 634;

	
/*-----------------------------------------------------------------------------------*/
/*	2. Language Support
/*-----------------------------------------------------------------------------------*/

// Retrieve the directory for the localization files
$lang_dir = get_template_directory() . '/languages';
 
// Set the theme's text domain using the unique identifier from above
load_theme_textdomain('themize', $lang_dir);

/*-----------------------------------------------------------------------------------*/
/*	3. WooCommerce Support
/*-----------------------------------------------------------------------------------*/	
	
add_theme_support( 'woocommerce' );
add_theme_support( 'post-formats', array('gallery','image','link', 'quote', 'video') );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails');
add_theme_support( 'custom-header');
add_theme_support( 'custom-background');
//add_theme_support( 'title-tag' );

/*-----------------------------------------------------------------------------------*/
/*	4. Load Admin JS Files
/*-----------------------------------------------------------------------------------*/

function themize_admin_scripts() {
	wp_register_script( 'customizer-scripts', get_template_directory_uri() . '/framework/admin/js/customizer.js' );
	wp_register_script( 'themize-admin', get_template_directory_uri() . '/framework/admin/js/admin.js' );
	wp_register_script( 'ion-range', get_template_directory_uri() . '/framework/admin/js/ion.rangeSlider.min.js' );
	wp_register_script( 'livequery', get_template_directory_uri() . '/framework/admin/js/jquery.livequery.js' );\
	wp_enqueue_script( 'isotope', get_template_directory_uri() . "/assets/js/jquery.isotope.min.js", array(),'', 'in_footer');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . "/assets/js/bootstrap.min.js", array(),'');
	wp_enqueue_script( 'customizer-scripts' );
	wp_enqueue_script( 'themize-admin' );
	wp_enqueue_script( 'ion-range' );
	wp_enqueue_script( 'livequery' );
	wp_enqueue_script( 'isotope' );
	//wp_dequeue_script( 'jquery-ui-tabs' );
}

add_action( 'admin_enqueue_scripts', 'themize_admin_scripts' );

/*-----------------------------------------------------------------------------------*/
/*	5. Load Theme CSS Files
/*-----------------------------------------------------------------------------------*/

function themize_styles()  {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '20120208');
	wp_enqueue_style( 'bootstrap-custom', get_template_directory_uri() . '/assets/css/bootstrap-custom.css', array(), '20120208');
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style( 'elements', get_template_directory_uri() . '/assets/css/elements.css');
	wp_enqueue_style( 'scripts', get_template_directory_uri() . '/assets/css/scripts.css', array(), '20120208');
	//wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '20120208');
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css?ver=20120208', array(), '20120208');
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '20120208' );
	wp_enqueue_style( 'woocommerce', get_template_directory_uri() . '/assets/css/plugins/woocommerce.css', array(), '20120208' );
	wp_enqueue_style( 'bbpress', get_template_directory_uri() . '/assets/css/plugins/bbpress.css', array(), '20120208' );
	wp_enqueue_style( 'mini-cart', get_template_directory_uri() . '/assets/css/plugins/mini-cart.css', array(), '20120208' );
	wp_enqueue_style( 'edd', get_template_directory_uri() . '/assets/css/plugins/edd.css', array(), '20120208' );
	wp_enqueue_style( 'wpml', get_template_directory_uri() . '/assets/css/plugins/wpml.css', array(), '20120208' );
	wp_enqueue_style( 'select', get_template_directory_uri() . '/assets/css/select.css', array(), '20120208' );
	wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css', array(), '20120208' );
	wp_enqueue_style( 'ion-range-slider', get_template_directory_uri() . '/framework/admin/css/ion.rangeSlider.css', array(), '20120208' );
	wp_enqueue_style( 'ion-skin', get_template_directory_uri() . '/framework/admin/css/ion.rangeSlider.skinSimple.css', array(), '20120208' );	
}

add_action( 'wp_enqueue_scripts', 'themize_styles' );  

/*-----------------------------------------------------------------------------------*/
/*	6. Load Admin CSS Files
/*-----------------------------------------------------------------------------------*/

function themize_admin_styles() {
	wp_enqueue_style( 'customizer', get_template_directory_uri() . '/framework/admin/css/customizer.css', array(), '20120208' );
	wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/framework/admin/css/meta-box.css', array(), '20120208' );
	wp_enqueue_style( 'ion-range-slider', get_template_directory_uri() . '/framework/admin/css/ion.rangeSlider.css', array(), '20120208' );
	wp_enqueue_style( 'ion-skin', get_template_directory_uri() . '/framework/admin/css/ion.rangeSlider.skinSimple.css', array(), '20120208' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '20120208');
	wp_enqueue_style( 'scripts', get_template_directory_uri() . '/assets/css/scripts.css', array(), '20120208');
	//wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '20120208');
}

add_action( 'admin_enqueue_scripts', 'themize_admin_styles' );

/*-----------------------------------------------------------------------------------*/
/*	7. Load Javascript Files
/*-----------------------------------------------------------------------------------*/

function themize_theme_scripts() {
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-ui-widget');
	wp_enqueue_script( 'comment-reply' );
    wp_enqueue_script( 'flex-slider', get_template_directory_uri() . "/assets/js/jquery.flexslider-min.js", array(),'', 'in_footer');	
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . "/assets/js/bootstrap.min.js", array(),'');
    wp_enqueue_script( 'select', get_template_directory_uri().'/assets/js/select.js', array(),'', 'in_footer');
    wp_enqueue_script( 'isotope_infinite', get_template_directory_uri() . "/assets/js/jquery.infinitescroll.min.js", array(),'', 'in_footer');
    wp_enqueue_script( 'isotope_manual', get_template_directory_uri() . "/assets/js/jquery.manual-trigger.js", array(),'', 'in_footer');
    wp_enqueue_script( 'isotope', get_template_directory_uri() . "/assets/js/jquery.isotope.min.js", array(),'', 'in_footer');
    wp_enqueue_script( 'totop', get_template_directory_uri() . "/assets/js/jquery.ui.totop.js", array(),'', 'in_footer');
    wp_enqueue_script( 'parallax', get_template_directory_uri().'/assets/js/jquery.parallax-1.1.3.js', array(),'', 'in_footer');
    wp_enqueue_script( 'frogaloop', get_template_directory_uri().'/assets/js/frogaloop.min.js', array(), 'in_footer');
    wp_enqueue_script( 'inview', get_template_directory_uri().'/assets/js/jquery.inview.min.js', array(), 'in_footer');
    wp_enqueue_script( 'random-number', get_template_directory_uri().'/assets/js/random-number.min.js', array(), 'in_footer'); // For counter
    wp_enqueue_script( 'jquery-cookie', get_template_directory_uri().'/assets/js/jquery.cookie.js', array(), 'in_footer'); // For counter
    wp_enqueue_script( 'jquery-fancybox', get_template_directory_uri().'/assets/js/jquery.fancybox.js', array(), 'in_footer'); // For counter
    wp_enqueue_script( 'style-switcher', get_template_directory_uri().'/assets/js/style-switcher.js', array(), 'in_footer');
    wp_enqueue_script( 'theme-custom', get_template_directory_uri().'/assets/js/theme-custom.js', array(), 'in_footer');
    wp_enqueue_script( 'ion-range', get_template_directory_uri() . '/framework/admin/js/ion.rangeSlider.min.js' );

}

add_action('wp_enqueue_scripts', 'themize_theme_scripts');

function um_override_waypoints(){
	wp_dequeue_script( 'vc_pie' );
	wp_enqueue_script( 'vc_pie' );
    wp_dequeue_script( 'waypoints' );
    wp_enqueue_script( 'sticky-js' );
     wp_enqueue_script( 'jquery-waypoints', get_template_directory_uri().'/assets/js/waypoints.min.js', array(), 'in_footer', true);
    wp_enqueue_script( 'jquery-waypoints-sticky', get_template_directory_uri().'/assets/js/waypoints-sticky.min.js', array(), 'in_footer', true);

}

add_action( 'wp_footer' , 'um_override_waypoints' );

/*-----------------------------------------------------------------------------------*/
/*	8. Load Google Fonts
/*-----------------------------------------------------------------------------------*/

function slugify($string){
   $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
   return $slug;
}

function themize_mytheme_fonts() {
    $protocol = is_ssl() ? 'https' : 'http';
    
    $global_font = get_theme_mod('global_font');
    $navigation_font = get_theme_mod('navigation_font');
    $sub_menu_font = get_theme_mod('sub_menu_font');
    $heading_font = get_theme_mod('heading_font');
    $logo_font = get_theme_mod('logo_font');
    
    // Add an option for this in page
	wp_enqueue_style( 'oswald_font', "$protocol://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" );
    
	// Load custom fonts
    if ($global_font) {
    	wp_enqueue_style( slugify($global_font), "$protocol://fonts.googleapis.com/css?family=".$global_font.":200,300,400,500,600,700" );
    } else {
	    wp_enqueue_style( 'open-sans', "$protocol://fonts.googleapis.com/css?family=Open+Sans:200,300,400,500,600,700" );
    }
    
    if ($navigation_font) {
    	wp_enqueue_style( slugify($navigation_font), "$protocol://fonts.googleapis.com/css?family=".$navigation_font.":200,300,400,500,600,700" );
    }

    if ($navigation_font) {
    	wp_enqueue_style( slugify($sub_menu_font), "$protocol://fonts.googleapis.com/css?family=".$sub_menu_font.":200,300,400,500,600,700" );
    }
    
    if ($heading_font) {
    	wp_enqueue_style( slugify($heading_font), "$protocol://fonts.googleapis.com/css?family=".$heading_font.":200,300,400,500,600,700" );
    }

    if ($logo_font) {
    	wp_enqueue_style( slugify($logo_font), "$protocol://fonts.googleapis.com/css?family=".$logo_font.":200,300,400,500,600,700" );
    }
}
	   
add_action( 'wp_enqueue_scripts', 'themize_mytheme_fonts' );

/*-----------------------------------------------------------------------------------*/
/*	10. Register Menu Areas
/*-----------------------------------------------------------------------------------*/

function themize_register_my_menus() {
  register_nav_menus(
    array( 'header-menu' => 'Header Menu' )
  );
  register_nav_menus(
    array( 'mobile-menu' => 'Mobile Menu' )
  );
  register_nav_menus(
    array( 'footer-menu' => 'Footer Menu' )
  );
}

add_action( 'init', 'themize_register_my_menus' );

/*-----------------------------------------------------------------------------------*/
/*	11. Register Widget Areas
/*-----------------------------------------------------------------------------------*/

$widget_footer_columns = get_theme_mod('widget_footer_columns');

// Footer
$side_nav = array(
	'name'          => 'Footer',
	'description'	=> 'Place widgets in here to display them in the footer area. We recommend a maximum of 4 widgets.',
	'before_widget' => '<div class="footer-widget"><div class="'.$widget_footer_columns.'"><ul><li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li></ul></div></div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );
	
register_sidebar($side_nav);

// Sidebar
$side_post = array(
	'name'          => 'Page',
	'description'	=> 'This is the standard sidebar widget area. Place widgets on here to display them on the sidebar of pages. Please activate the sidebar through the page editor for the pages you want it be displayed on.',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );
	
register_sidebar($side_post);

// Search
$side_search = array(
	'name'          => 'Search',
	'id' 			=> 'search',
	'description'	=> 'This is the sidebar that will be displayed in the search page',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );
	
register_sidebar($side_search);

/*-----------------------------------------------------------------------------------*/
/*	12. WooCommerce MiniCart
/*-----------------------------------------------------------------------------------*/

function themize_mini_cart() {

	global $woocommerce;
	echo '<ul class="dropdown-content">';

	if (sizeof($woocommerce->cart->cart_contents)>0) : 
		$i = 0;					
		foreach ($woocommerce->cart->cart_contents as $cart_item_key => $cart_item) :
			
			$i++;
			if ( $i == 1 ) :				
				$rowclass = ' class="cart_oddrow"';			
			else :
				$rowclass = ' class="cart_evenrow"';
				$i = 0;
			endif;
	
			$_product = $cart_item['data'];
			
			if ($_product->exists() && $cart_item['quantity']>0) :
				echo '<li'.$rowclass.'>';

				echo '<div class="left">';
				echo '<div class="dropdowncartimage">';
				echo '<a href="'.get_permalink($cart_item['product_id']).'">';				
				if (has_post_thumbnail($cart_item['product_id'])) :					
					echo get_the_post_thumbnail($cart_item['product_id'], 'shop_thumbnail'); 
				else :					 
					echo '<img src="'.$woocommerce->plugin_url(). '/assets/images/placeholder.png" alt="Placeholder" width="'.$woocommerce->get_image_size('shop_thumbnail_image_width').'" height="'.$woocommerce->get_image_size('shop_thumbnail_image_height').'" />'; 				
				endif;				
				echo '</a>';
				echo '</div>';
				echo '</div>';
				
				echo '<div class="right">';
				echo '<div class="dropdowncartproduct">';
				echo '<a href="'.get_permalink($cart_item['product_id']).'">';				
				echo apply_filters('woocommerce_cart_widget_product_title', $_product->get_title(), $_product).'</a>';				
				if ($_product instanceof woocommerce_product_variation && is_array($cart_item['variation'])) :
        			echo woocommerce_get_formatted_variation( $cart_item['variation'] );
   				endif;
				echo '</a>';
				echo '</div>';
				
				echo '<div class="dropdowncartquantity">';				
				echo '<span class="quantity">' .$cart_item['quantity'].' &times; '.woocommerce_price($_product->get_price()).'</span>';
				echo '</div>';
				echo '</div>';
				echo '<div class="clear"></div>';
				
				echo '</li>';
				
			endif;
		endforeach; 
	else: 
		echo '<li class="empty">'.__('No products in the cart.', 'woothemes').'</li>'; 
	endif;
	
	if (sizeof($woocommerce->cart->cart_contents)>0) {
			
		do_action( 'woocommerce_widget_shopping_cart_before_buttons' );
			
		echo '<li class="buttons">
			  <a class="btn btn-default" href="'.$woocommerce->cart->get_cart_url().'" class="dropdownbutton">'.__('Cart &rarr;', 'woothemes').'</a> 
			  <a class="btn btn-primary" href="'.$woocommerce->cart->get_checkout_url().'" class="dropdownbutton checkout">'.__('Checkout &rarr;', 'woothemes').'</a>
			  </li>';
	}
		
	echo '</ul>';
}
 
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;
	ob_start(); ?>

	<li class="dropdown mini-cart">
			
	
			<a class="cart-contents" href="<?php echo esc_url($woocommerce->cart->get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
				<i class="fa fa-shopping-cart"></i> 
				<?php echo $woocommerce->cart->get_cart_total(); ?>
			</a>
		
		<?php themize_mini_cart(); ?>
		

	</li>

	<?php
	$fragments['li.mini-cart'] = ob_get_clean();
	return $fragments;
}

add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');

/*-----------------------------------------------------------------------------------*/
/*	13. OTHER FUNCTIONS
/*-----------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------*/
/*	Purchase Button
/*-----------------------------------------------------------------------------------*/

function themize_purchase_button() {
	if (get_theme_mod('purchase_button') == "enable") { // If purchase button enabled
		$purchase_button_url = get_theme_mod('purchase_button_url'); // PURCHASE BUTTON URL
		$purchase_button_target = get_theme_mod('purchase_button_target'); // PURCHASE BUTTON TARGET
		$purchase_button_text = get_option('purchase_button_text'); // // PURCHASE BUTTON TEXT

		echo "<li>";
		echo "<a target='$purchase_button_target' href='$purchase_button_url' class='purchase-button'>$purchase_button_text</a>";
		echo "</li>";
	} // END If purchase button enabled
}

add_action('purchase_button', 'themize_purchase_button');

/*-----------------------------------------------------------------------------------*/
/*	One click Demo Notice
/*-----------------------------------------------------------------------------------*/

function my_admin_notice() { ?>
    <div class="updated updated-setup">
    	<div class="setup-notice">
    		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.jpg">
	        <h1>You have successfully installed Themize.</h1>
	        <h3 class="few-min">There is just one more <strong>important</strong> step...</h3>
	        <div class="setup-buttons">
	        	<a id="quick-start" data-toggle="tooltip" class="button button-primary button-hero" title="Sets up a basic website with a few sample pages so all you have to do is replace the content">Quick Start (Recommended)</a>
	        	<a id="full-setup" data-toggle="tooltip" class="button button-secondary button-hero" title="Makes the website look like the demo website. This is for intermediate to advanced users looking to dive deeper into the power Themize.">Full Demo Setup</a>
	        	<a id="basic-setup" data-toggle="tooltip" class="button button-secondary button-hero" title="Imports just the plugin for those that want to just start from scratch">Basic Setup</a>
	        </div>
	        <p class="setup-note">Please note that demo images are not included within the download package.<br><strong>Usage of images in demo require additional licenses.</strong></p>
	        <br>
	        <div class="description customizer-alert"><h3>Having trouble using this?</h3><br><strong>Please ensure your server has been configured properly and you have the neccassary permissions.</strong><br> Visit our <a href="http://www.themize.com/forum/support/"> support forum</a> where our support staff can help you with this. 
	        Don't forget to first <a href="http://www.themize.com/register">create an account</a></div>

	    </div>
	    <div id="import-success">
	    	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.jpg">
	    	<h1>The demo content has been imported successfully.</h1>
	    	<div class="setup-buttons">
		    	<a href="<?php echo home_url(); ?>" id="full-setup" class="button button-primary button-hero">View Homepage</a>
		    	<a href="<?php echo home_url(); ?>/wp-admin/customize.php" id="full-setup" class="button button-secondary button-hero">Go to Live Customizer</a>
	    	</div>
	    </div>
	    <div id="import-error">
	    	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.jpg">
	    	<h1><strong>Setup Failed!</strong> You have an error in your server configuration.<br><br>Please ask your host to increase maximum upload size.</h1>
	    	<p>Alternatively visit our support forum where support staff are available to provide advice.</p>
	    	<div class="setup-buttons">
		    	<a href="http://www.themize.com/forum/support" id="full-setup" class="button button-primary button-hero">Access Support forum</a>
	    	</div>
	    </div>
    </div>

<?php
}
if (!get_option("themize_installed")) {
	add_action( 'admin_notices', 'my_admin_notice' );
}

/*-----------------------------------------------------------------------------------*/
/*	Custom Nav Walker
/*-----------------------------------------------------------------------------------*/

class ctx_custom_menu_walker extends Walker_Nav_Menu
{
      function start_el(&$output, $item, $depth = 0, $args = array(), $current_object_id = 0)
      {
           global $wp_query;
           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

           $class_names = $value = '';

           $classes = empty( $item->classes ) ? array() : (array) $item->classes;
           
           if ($item->megamenu == 1) {
	           $megamenu = "mega-menu";
           } else {
	           $megamenu = "";
	          }

			if ($item->megamenu_2col == 1) {
			$megamenu_2col = "mega-menu-2col";
			} else {
			$megamenu_2col = "";
			}
			
           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
           $class_names = ' class="'. $megamenu .' '.$megamenu_2col .' '. esc_attr( $class_names ) . '"';
           
         //  $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
           $output .= $indent . '<li' . $value . $class_names .'>';

           $attributes = ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
           $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
           $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

           $prepend = '';
           $append = '';
           
           $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';

           	
            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            
            if ($item->attr_title) {
            	$item_output .= '<i class="fa fa-'.esc_attr( $item->attr_title ).'"></i>';
            }
            $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
            $item_output .= $description.$args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            }
}

/*-----------------------------------------------------------------------------------*/
/*	Unlimited Sidebars
/*-----------------------------------------------------------------------------------*/
 
function sidebar_widgets_init() { //Register the default sidebar
	
	for($i = 0; $i < get_theme_mod('number_of_sidebars'); ++$i) {
			$s_name = "Sidebar_".$i;
			register_sidebar( array(
				'name' => $s_name,

				'before_widget' => '<div id="%1$s" class="sidebar-widget widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h2 class="widgettitle">',
				'after_title' => '</h2>',
			) );
		};

};
 
add_action( 'widgets_init', 'sidebar_widgets_init' );
 
function my_acf_load_sidebar( $field ) {
	$field['choices'] = array();
	$field['choices']['Page'] = 'Page';

	if(get_field('sidebars', 'option')) {
		while(has_sub_field('sidebars', 'option')) {

			$label = get_sub_field('sidebar_name');
			$value = str_replace(" ", "-", $label);
			$value = strtolower($value);

			$field['choices'][ $value ] = $label;

		}
	}

	for($i = 0; $i < get_theme_mod('number_of_sidebars'); ++$i) {
		$s_name = "Sidebar_".$i;
		$field['choices'][ $s_name ] = $s_name;
	};

	return $field;
}
 
add_filter('acf/load_field/name=select_sidebar', 'my_acf_load_sidebar');

/*-----------------------------------------------------------------------------------*/
/*	Custom Search Output
/*-----------------------------------------------------------------------------------*/

function themize_html5_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <input type="text" placeholder="'.__("Search").'" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="Search" />
    </form>';

    return $form;
}
add_filter( 'get_search_form', 'themize_html5_search_form' );

/*-----------------------------------------------------------------------------------*/
/*	Add Read More to excerpt
/*-----------------------------------------------------------------------------------*/

function zt_new_excerpt_more($more) {
	global $post;
	return '<br><br><a class="read-more" href="'. get_permalink($post->ID) . '">Continue reading</a>';
}
add_filter('excerpt_more', 'zt_new_excerpt_more');


/*-----------------------------------------------------------------------------------*/
/*	Custom Comment Styling
/*-----------------------------------------------------------------------------------*/

function themize_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);
	
	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	} ?>

	<?php if ( 'div' != $args['style'] ) : ?>
	<li id="div-comment-<?php comment_ID(); ?>">
	<?php endif; ?>
		<div class="entry">
			<div class="avatar">
				<?php echo get_avatar( get_comment_author_email(), '', '', ''); ?> 
			</div>
			<div class="comment-meta">
				<h4><?php comment_author_link(); ?></h4>
				
			</div>	
			<div class="comment-body">
		  		<?php if ($comment->comment_approved == '0') : ?>
		  			<div class="comment-approval">Your comment is awaiting approval</div>
		  		<?php endif; ?>
		  		<?php comment_text(); ?>

		  		<div class="comment-footer">
		  		<span> <?php edit_comment_link('Edit','  ','' ); ?></span>
		  		<span> <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?></span>
		  		<span> <?php echo human_time_diff( get_comment_time('U'), current_time('timestamp') ) . ' ago'; ?></span>
		  	
		  		</div>
		  	</div>
	
		</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</li>
	<?php endif; ?>
<?php
}

/*-----------------------------------------------------------------------------------*/
/*	Remove thumbnail dimensions
/*-----------------------------------------------------------------------------------*/

add_filter( 'post_thumbnail_html', 'themize_remove_thumbnail_dimensions', 10, 3 );

function themize_remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

/*-----------------------------------------------------------------------------------*/
/*	Custom wp_link_pages
/*-----------------------------------------------------------------------------------*/

function themize_custom_wp_link_pages( $args = '' ) {
	$defaults = array(
		'before' => '<ul class="pagination">', 
		'after' => '</ul>',
		'text_before' => '',
		'text_after' => '',
		'next_or_number' => 'number', 
		'nextpagelink' => 'Next page',
		'previouspagelink' => 'Previous page',
		'pagelink' => '%',
		'echo' => 1
	);

	$r = wp_parse_args( $args, $defaults );
	$r = apply_filters( 'wp_link_pages_args', $r );
	extract( $r, EXTR_SKIP );

	global $page, $numpages, $multipage, $more, $pagenow;

	$output = '';
	if ( $multipage ) {
		if ( 'number' == $next_or_number ) {
			$output .= $before;
			for ( $i = 1; $i < ( $numpages + 1 ); $i = $i + 1 ) {
				$j = str_replace( '%', $i, $pagelink );
				$output .= ' ';
				$output .= '<li>';
				if ( $i != $page || ( ( ! $more ) && ( $page == 1 ) ) )
					$output .= _wp_link_page( $i );
				else
					$output .= '<span class="current-post-page">';

				$output .= $text_before . $j . $text_after;
				if ( $i != $page || ( ( ! $more ) && ( $page == 1 ) ) )
					$output .= '</a>';
				else
					$output .= '</span>';
				$output .= '</li>';
			}
			$output .= $after;
		} else {
			if ( $more ) {
				$output .= $before;
				$i = $page - 1;
				if ( $i && $more ) {
					$output .= _wp_link_page( $i );
					$output .= $text_before . $previouspagelink . $text_after . '</a>';
				}
				$i = $page + 1;
				if ( $i <= $numpages && $more ) {
					$output .= _wp_link_page( $i );
					$output .= $text_before . $nextpagelink . $text_after . '</a>';
				}
				$output .= $after;
			}
		}
	}

	if ( $echo )
		echo $output;

	return $output;
}

/*-----------------------------------------------------------------------------------*/
/*	Breadcrumbs
/*-----------------------------------------------------------------------------------*/

add_action('breadcrumb', 'themize_breadcrumb');

function themize_breadcrumb() { ?>

	<div class="breadcrumbs-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<?php
					global $post;
				    echo '<div class="breadcrumbs"><ul>';
				    if (!is_home()) {
				        echo '<li><a href="';
				        echo home_url();
				        echo '">';
				        echo '<i class="fa fa-home"></i> ' . __('Home', 'themize');
				        echo '</a></li><li class="separator"> / </li>';
				        if (is_category() || is_single()) {
				            echo '<li>';
				            the_category(' </li><li class="separator"> / </li><li> ');
				            if (is_single()) {
				                echo '</li><li class="separator"> / </li><li>';
				                the_title();
				                echo '</li>';
				            }
				        } elseif (is_page()) {
				            if($post->post_parent){
				                $anc = get_post_ancestors( $post->ID );
				                $title = get_the_title();
				                foreach ( $anc as $ancestor ) {
				                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator">/</li>';
				                }
				                echo $output;
				                echo '<strong title="'.$title.'"> '.$title.'</strong>';
				            } else {
				                echo '<li><strong> '.get_the_title().'</strong></li>';
				            }
				        }
				    }
				    elseif (is_tag()) {single_tag_title();}
				    elseif (is_day()) { echo "<li>Archive</li>"; }
				    elseif (is_month()) { echo "<li>Archive</li>"; }
				    elseif (is_month()) { echo "<li>Archive</li>"; }
				    elseif (is_author()) { echo"<li>Author Archive"; echo'</li>';}
				    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
				    elseif (is_search()) { echo"<li>Search Results"; echo'</li>';}
				    echo '</ul>';
				    echo '</div>';
					?>

				</div>
				
			</div>
		</div>
	</div>

<?php 
}

/*-----------------------------------------------------------------------------------*/
/*	Add dropdown class
/*-----------------------------------------------------------------------------------*/

function themize_menu_set_dropdown( $sorted_menu_items, $args ) {
    $last_top = 0;
    foreach ( $sorted_menu_items as $key => $obj ) {
        // it is a top lv item?
        if ( 0 == $obj->menu_item_parent ) {
            // set the key of the parent
            $last_top = $key;
        } else {
            $sorted_menu_items[$last_top]->classes['dropdown'] = 'dropdown';
        }
    }
    return $sorted_menu_items;
}
add_filter( 'wp_nav_menu_objects', 'themize_menu_set_dropdown', 10, 2 );

/*-----------------------------------------------------------------------------------*/
/*	Custom Visual Composer Functions
/*-----------------------------------------------------------------------------------*/

function themize_getCSSAnimation($css_animation) {
    $output = '';
    if ( $css_animation != '' ) {
        wp_enqueue_script( 'waypoints' );
        $output = ' wpb_animate_when_almost_visible wpb_'.$css_animation;
    }
    return $output;
}

function themize_getExtraClass($el_class) {
        $output = '';
        if ( $el_class != '' ) {
            $output = " " . str_replace(".", "", $el_class);
        }
        return $output;
    }

/*-----------------------------------------------------------------------------------*/
/*	Colour Brightness
/*-----------------------------------------------------------------------------------*/

function themize_colourBrightness($hex, $percent) {
	// Work out if hash given
	$hash = '';
	if (stristr($hex,'#')) {
		$hex = str_replace('#','',$hex);
		$hash = '#';
	}
	/// HEX TO RGB
	$rgb = array(hexdec(substr($hex,0,2)), hexdec(substr($hex,2,2)), hexdec(substr($hex,4,2)));
	//// CALCULATE
	for ($i=0; $i<3; $i++) {
		// See if brighter or darker
		if ($percent > 0) {
			// Lighter
			$rgb[$i] = round($rgb[$i] * $percent) + round(255 * (1-$percent));
		} else {
			// Darker
			$positivePercent = $percent - ($percent*2);
			$rgb[$i] = round($rgb[$i] * $positivePercent) + round(0 * (1-$positivePercent));
		}
		// In case rounding up causes us to go to 256
		if ($rgb[$i] > 255) {
			$rgb[$i] = 255;
		}
	}
	//// RBG to Hex
	$hex = '';
	for($i=0; $i < 3; $i++) {
		// Convert the decimal digit to hex
		$hexDigit = dechex($rgb[$i]);
		// Add a leading zero if necessary
		if(strlen($hexDigit) == 1) {
		$hexDigit = "0" . $hexDigit;
		}
		// Append to the hex string
		$hex .= $hexDigit;
	}
	return $hash.$hex;
}

/*-----------------------------------------------------------------------------------*/
/*	Change Excerpt Amount
/*-----------------------------------------------------------------------------------*/

function custom_excerpt_length( $length ) {
	
	if (get_field('excerpt_length', "option")) {
		return get_field('excerpt_length', "option");
	} else {
		return 150;
	}
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/*-----------------------------------------------------------------------------------*/
/*	Function to change hex code to RGB values
/*-----------------------------------------------------------------------------------*/

function themize_hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   return implode(",", $rgb);
   //return $rgb; // returns an array with the rgb values
}

/*-----------------------------------------------------------------------------------*/
/*	Essential Grid
/*-----------------------------------------------------------------------------------*/

function themize_remove_plugin_metaboxes(){
	remove_meta_box( 'eg-meta-box', 'post', 'normal' );
	remove_meta_box( 'eg-meta-box', 'portfolio', 'normal' );
	remove_meta_box( 'eg-meta-box', 'page', 'normal' );
}
add_action( 'do_meta_boxes', 'themize_remove_plugin_metaboxes' );

/*-----------------------------------------------------------------------------------*/
/*	For the youtube/vimeo autoplay
/*-----------------------------------------------------------------------------------*/

function strip_related_videos($return, $data, $url) {
    if ($data->provider_name == 'YouTube') {
        $data->html = str_replace('feature=oembed', 'feature=oembed&#038;rel=0', $data->html);
        return $data->html;
    } else return $return;
}

function tdd_oembed_filter($html) {

	return '<div class="js-video widescreen">'.str_replace('?feature=oembed"', '?enablejsapi=1" class="le-video" id="video"', $html).'</div>';
}
add_filter( 'embed_oembed_html', 'tdd_oembed_filter', 10, 4 );

/*-----------------------------------------------------------------------------------*/
/*	Deregister styles
/*-----------------------------------------------------------------------------------*/

add_action( 'wp_print_styles', 'my_deregister_styles', 100 );

function my_deregister_styles() {
	wp_deregister_style( 'tp-open-sans-css' );
}

/*-----------------------------------------------------------------------------------*/
/*	Set plugins as theme
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'themize_vc_set_as_theme' );
function themize_vc_set_as_theme() {
	vc_set_as_theme();
}

/*-----------------------------------------------------------------------------------*/
/*	WPML
/*-----------------------------------------------------------------------------------*/

function languages_list_footer(){
    $languages = icl_get_languages('skip_missing=0&orderby=code');

    foreach($languages as $current){
    	if ($current['active']) {
    		$current_lang = '<img src="'.$current['country_flag_url'].'" height="12" alt="'.$current['language_code'].'" width="18" />' . icl_disp_language($current['native_name'], $current['translated_name']);
    	} 
    }

   echo $current_lang;

    echo '<div class="dropdown-content">';

    	if(!empty($languages)){
	        echo '<div class="lang-list"><ul>';
	        foreach($languages as $l){
	            echo '<li>';
	            echo '<a href="'.$l['url'].'">';
	            if($l['country_flag_url']){
	                echo '<img src="'.$l['country_flag_url'].'" height="12" alt="'.$l['language_code'].'" width="18" />';
	            }
	            echo icl_disp_language($l['native_name'], $l['translated_name']);
	             echo '</a>';
	            echo '</li>';
	        }
	        echo '</ul></div>';
	    }

    echo '</div>';

  
}

/*-----------------------------------------------------------------------------------*/
/*	Custom Pagination
/*-----------------------------------------------------------------------------------*/

function custom_pagination() {
    global $wp_query;
    $big = 999999999; // need an unlikely integer
    $pages = paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages,
            'prev_next' => false,
            'type'  => 'array',
            'prev_next'   => TRUE,
			'prev_text'    => __('<i class="fa fa-angle-left"></i>'),
			'next_text'    => __('<i class="fa fa-angle-right"></i>'),
        ) );
        if( is_array( $pages ) ) {
            $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
            echo '<div class="pagination-container">';
            echo '<ul class="pagination">';
            foreach ( $pages as $page ) {
                    echo "<li>$page</li>";
            }
           	echo '</ul>';
            echo '</div>';
        }
}

function themize_header_layout() {

        $header_layout = "layout-fullwidth";

    	if (get_theme_mod('layout') == 'side_left') {
	    	$header_layout = "vertical-header layout-left";
    	}
        if (get_theme_mod('layout') == 'side_right') {
            $header_layout = "vertical-header layout-right";
        }
        if (get_theme_mod('layout') == 'boxed_top') {
            $header_layout = "layout-fullwidth page-boxed";
        }
        if (get_theme_mod('layout') == 'boxed_left') {
            $header_layout = "page-boxed vertical-header layout-left";
        }
        if (get_theme_mod('layout') == 'boxed_right') {
            $header_layout = "page-boxed vertical-header layout-right";
        }
        if (get_theme_mod('layout') == 'full_width_bottom') {
            $header_layout = "layout-bottom";
        }
        if (get_theme_mod('layout') == 'floating_left') {
            $header_layout = "floating-layout vertical-header layout-left";
        }
        if (get_theme_mod('layout') == 'floating_right') {
            $header_layout = "floating-layout vertical-header layout-right";
        }
        if (get_theme_mod('layout') == 'freefloating_top') {
            $header_layout = "layout-fullwidth freefloating-top";
        }
        if (get_theme_mod('layout') == 'freefloating_left') {
            $header_layout = "floating-layout vertical-header layout-left freefloating-side";
        }
        if (get_theme_mod('layout') == 'freefloating_right') {
            $header_layout = "floating-layout vertical-header layout-right freefloating-side";
        }

        return $header_layout;
}

function themize_header_hover() {
    $header_hover_content_class = "";
    if (get_theme_mod('header_hover_over_content')) {
        $header_hover_content_class = "header-hover-content";
    }

    return $header_hover_content_class;
}

add_filter( 'body_class', 'header_body_class');
function header_body_class( $classes ) {
    if ( is_singular('essential_grid') || is_single() || is_404() || is_category() || is_search() || is_page('cart') || is_page('checkout') || is_archive()  )
          $classes[] = 'standard_header';

    return $classes; 
}

add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );

function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( bloginfo('name'), 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}

/*-----------------------------------------------------------------------------------*/
/*	ACF
/*-----------------------------------------------------------------------------------*/

include("advanced-custom-fields/acf.php");
include("advanced-custom-fields/acf-fields.php");

?>
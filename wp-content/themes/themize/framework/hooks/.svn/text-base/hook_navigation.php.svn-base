<?php

/*-----------------------------------------------------------------------------------*/
/*	Navigation
/*-----------------------------------------------------------------------------------*/

add_action('navigation', 'themize_navigation');

function themize_navigation() { ?>

<?php
if (get_theme_mod('navigation_position')) {
	$navigation_position = get_theme_mod('navigation_position');
} else {
	$navigation_position = "navigation-right";
}
?>
<!-- <div class="header-clear"></div> -->
<div class="header <?php echo get_theme_mod('submenu_style'); ?>" data-sticky="<?php echo get_theme_mod('header_sticky'); ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12 navigation-col <?php echo esc_attr($navigation_position); ?>">
			
				<div class="logo">
					
						<?php if (get_theme_mod('logo') == "text_logo") { ?>
							<a class="logo-text" href="<?php echo home_url(); ?>">
								<?php echo esc_html(get_theme_mod('logo_text')); ?>

								<?php if (get_theme_mod('logo_copyright') == "copyright") { ?>
									<span class="logo-copyright">&copy;</span>
								<?php } ?>
								<?php if (get_theme_mod('logo_copyright') == "registered_trademark") { ?>
									<span class="logo-copyright">&reg;</span>
								<?php } ?>
								<?php if (get_theme_mod('logo_copyright') == "trademark") { ?>
									<span class="logo-copyright">TM</span>
								<?php } ?>
							</a>
						<?php } ?>
						<?php if (get_theme_mod('logo') == "image_logo") { ?>
							<a href="<?php echo home_url(); ?>">
								<img src="<?php echo esc_url(get_theme_mod('logo_image')); ?>" alt=""/>
							</a>
						<?php } ?>
					
				</div>

				<div class="header-navigation">
					<ul class="navigation">
				
						<!-- Navigation Menu -->
						<?php
						if (has_nav_menu( 'header-menu' )) { 
							$header_menu = array('container' => 'ul', 'menu_class' => 'menu', 'items_wrap' => '%3$s', 'theme_location'  => 'header-menu', 'fallback_cb' => false, 'walker' => new ctx_custom_menu_walker());
							wp_nav_menu( $header_menu );
						}
						?>

						<?php if ( current_user_can( 'manage_options' ) ) { ?>
					<!-- 	<li>
							<a href="<?php echo home_url(); ?>/wp-admin/edit.php?vc_action=vc_inline&post_id=<?php echo get_the_ID(); ?>&post_type=page"><i class="fa fa-bars"></i>Edit Page</a>
						</li> -->
						<?php } ?>

						<?php do_action('purchase_button'); ?>

						<?php if (get_theme_mod('navigation_search') == "enable") { ?>
						<li class="navigation-search">
							<form id="searchform" action="?s=" method="get" role="search">
								<input id="s" type="text" name="s" value="" placeholder="Search">
								<button id="searchsubmit" type="submit"><i class="fa fa-search"></i></button>
							</form>
						</li>
						<?php } ?>

					</ul>
				</div>
				
			</div>
		</div>
	</div>
</div>

<?php }
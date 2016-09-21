<?php 
/*-----------------------------------------------------------------------------------*/
/*	Mobile Navigation
/*-----------------------------------------------------------------------------------*/

add_action('mobile_navigation', 'themize_mobile_navigation'); 

function themize_mobile_navigation() { ?>

	<div class="mobile-nav-container">
		<div class="mobile-nav-bar">
			<!-- Mobile Logo -->
			<div class="mobile-logo">
			<?php if (get_theme_mod('logo') == "text_logo") { ?>
				<a class="logo-text" href="<?php echo home_url(); ?>">
					<?php echo get_theme_mod('logo_text'); ?>

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
					<img src="<?php echo get_theme_mod('logo_image'); ?>" alt=""/>
				</a>
			<?php } ?>
			</div>
			<button type="button" class="btn-mobile-nav collapsed" data-toggle="collapse" data-target="#mobile-nav"><i class="fa fa-align-justify"></i></button>
		 	<div class="clearboth"></div>
		</div>
		
		<!-- Mobile Drop Down -->
		<div id="mobile-nav" class="collapse">
			<ul>
				<?php
				$defaults = array(
			   	'theme_location'  => 'mobile-menu',
			   	'container'       => 'ul',
			   	'menu_class'      => 'menu',
			   	'items_wrap'      => '%3$s',
			   	'fallback_cb' => false,
			   	'walker'          => new ctx_custom_menu_walker()
			   );
			   ?>
			   <?php wp_nav_menu( $defaults ); ?>
			</ul>
		
		
		</div>
	</div>

<?php } ?>
<?php

/*-----------------------------------------------------------------------------------*/
/*	Contact Bar
/*-----------------------------------------------------------------------------------*/

add_action('contact_bar', 'themize_contact_bar');

function themize_contact_bar() { ?>

	<div class="header-contact-bar">
		<div class="container">
			<!-- Left -->
			<div class="contact-bar left">
				<ul>				
					<li><?php echo do_shortcode(get_option('contact_bar_left')); ?></li>
				</ul>
			</div>
			
			<!-- Right -->
			<div class="contact-bar right">
				<ul>
					<?php echo do_shortcode(get_option('contact_bar_right')); ?>
					<?php if (class_exists('Woocommerce')) { ?>
					<?php global $woocommerce; ?>
					<li class="dropdown mini-cart"><i class="fa fa-shopping-cart"></i></li>
					<?php } ?>
					<?php if (get_theme_mod('wpml_language_switcher') == "enable") { ?>
						<li class="dropdown lang-selector"><?php languages_list_footer(); ?></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>

<?php } ?>
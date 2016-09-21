<?php
/*-----------------------------------------------------------------------------------*/
/*	Menu Footer
/*-----------------------------------------------------------------------------------*/

add_action('menu_footer', 'themize_menu_footer'); 

function themize_menu_footer() { ?>

	<div class="menu-footer">
		<ul>
		<?php
			if (has_nav_menu( 'header-menu' )) {
			   $the_menu = array(
				   	'container'       => 'ul',
				   	'menu_class'      => 'menu',
				   	'echo'            => true,
				   	'fallback_cb'     => 'wp_page_menu',
				   	'items_wrap'      => '%3$s',
				   	'depth'           => 0,
				   	'theme_location'  => 'footer-menu',
			   );
					   
			   wp_nav_menu( $the_menu );
			}
		?>
		</ul>
	</div>

<?php } ?>
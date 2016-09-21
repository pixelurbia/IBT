<?php
/*-----------------------------------------------------------------------------------*/
/*	Site-wide Alert
/*-----------------------------------------------------------------------------------*/

add_action('sitewide_alert', 'themize_sidewide_alert');

function themize_sidewide_alert() { ?>

	<?php $escape = array( 'a' => array(), 'strong' => array()); ?>
	
	<div class="sitewide-alert" style="background-color: <?php echo get_theme_mod('alert_colour'); ?>" data-id="<?php echo get_theme_mod('alert_id'); ?>">
		<?php echo wp_kses(__(get_option("alert_content"), 'themize'), $escape); ?>
		<a href="#" id="close"><?php echo wp_kses(__(get_option("alert_close_text"), 'themize'), $escape); ?></a>
	</div>
	
<?php } ?>
<?php
/*-----------------------------------------------------------------------------------*/
/*	Copyright Footer
/*-----------------------------------------------------------------------------------*/

add_action('copyright_footer', 'themize_copyright_footer'); 

function themize_copyright_footer() { ?>

	<div class="copyright-footer" id="as">

		<?php $escape = array( 'a' => array(), 'strong' => array()); ?>
		<?php if (get_option('copyright_footer_text')) { ?>
			<?php echo wp_kses(__(get_option('copyright_footer_text'), 'themize'), $escape); ?>
		<?php } else { ?>
			<?php echo __('YOU CAN CHANGE THIS TEXT BY GOING TO <a href="wp-admin/customize.php">APPEARANCE->CUSTOMIZER</a> IN YOUR DASHBOARD.', 'themize'); ?>
		<?php } ?>
	
		<a rel="alternate" title="Back to top" class="up"></a>
	</div>

<?php } ?>
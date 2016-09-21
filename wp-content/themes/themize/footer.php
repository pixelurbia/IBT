		<footer>
			<?php if (class_exists('WPBakeryVisualComposerAbstract')) { ?>
				<?php if (get_option('custom_footer')) { ?>

					<div class="container custom-footer">
						<div class="row">
							<?php
							// The Query
							$args = array ('post_type' => 'page', 'p' => get_option('custom_footer'), 'posts_per_page' => '1');
							$footer_query = new WP_Query( $args );

							// The Loop
							while ( $footer_query->have_posts() ) {

								$footer_query->the_post();
								the_content();
							}

							wp_reset_postdata();
							?>
						</div>
					</div>

				<?php } ?>
			<?php } ?>
		
			<!-- WIDGET FOOTER
			================================================== -->
			<?php if (get_theme_mod('widget_footer') == "enable") { ?>
				<?php do_action('widget_footer'); ?>
			<?php } ?>

			<!-- MENU FOOTER
			================================================== -->
			<?php if (get_theme_mod('menu_footer') == "enable") { ?>
				<?php do_action('menu_footer'); ?>
			<?php } ?>
			
			<!-- COPYRIGHT FOOTER
			================================================== -->
			<?php if (get_theme_mod('copyright_footer') == "enable") { ?>
				<?php do_action('copyright_footer'); ?>
			<?php } ?>
			
			<a rel="alternate" title="Back to top" class="up"></a>
		</footer>

	</div>


	<?php if (get_option('option_samples_enable') == "enable") { ?>
		<?php do_action('style_switcher'); ?>
	<?php } ?>
	
	<?php echo get_theme_mod('custom_js'); ?>
	<?php echo get_theme_mod('tracking_code'); ?>
	<?php wp_footer(); ?>

	</body>
</html>
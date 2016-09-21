<?php get_header(); ?>

<?php
$sidebar = get_theme_mod('blog_sidebar');

if ($sidebar !== "") { $span_size = "col-md-9"; }
if ($sidebar == "none") { $span_size = "col-md-12"; }

?>

<div class="layer-slider"></div>

<div class="content-container">
	<div class="container">
		<div class="row">

			<!-- LEFT SIDEBAR -->
			<?php if ($sidebar == "left") { ?>
				<div class="col-md-3 widget-area widget-left">
					<?php dynamic_sidebar(get_theme_mod('select_blog_sidebar')); ?>
				</div>
			<?php } ?>
		
			<!-- MAIN CONTENT -->
			<div class="blog-posts <?php echo esc_attr($span_size); ?>">
				
				<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts(array('post_type'=>'post', 'paged' => $paged, 'posts_per_page' => get_option('posts_per_page')));
				?>
			
				<?php while ( have_posts() ) : the_post(); ?>			
					<?php 
					global $more; $more = 0; 
				
					if(!get_post_format()) {
						get_template_part('post/blog/'.'standard');
					} else {
						get_template_part('post/blog/'.get_post_format());
					}
					?>
				<?php endwhile; // end of the loop. ?>

				<?php echo custom_pagination(); ?>

				<?php echo get_theme_mod('custom_footer'); ?>

			</div>

			<!-- RIGHT SIDEBAR -->
			<?php if ($sidebar == "right") { ?>
				<div class="col-md-3 widget-area widget-right">
					<?php dynamic_sidebar(get_theme_mod('select_blog_sidebar')); ?>
				</div>
			<?php } ?>

		</div>
	</div>
</div>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>  
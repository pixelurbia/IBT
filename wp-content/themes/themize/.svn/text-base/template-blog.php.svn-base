<?php
/*
Template Name: Blog
*/

/*-----------------------------------------------------------------------------------*/
/* GET THEME HEADER
/*-----------------------------------------------------------------------------------*/

get_header();

/*-----------------------------------------------------------------------------------*/
/* SET CONTENT WIDTH
/*-----------------------------------------------------------------------------------*/

$sidebar = get_field('sidebar_position');

if ($sidebar !== "") { $span_size = "col-md-9"; }
if ($sidebar == "") { $span_size = "col-md-12"; }

/*-----------------------------------------------------------------------------------*/
/* LOAD BREADCRUMBS
/*-----------------------------------------------------------------------------------*/

if (get_field('breadcrumb') == true) { do_action('breadcrumb'); }

/*-----------------------------------------------------------------------------------*/
/* LOAD CONTENT
/*-----------------------------------------------------------------------------------*/ ?>

<div class="content-container">
	<div class="container">

	
		<div class="row">

			<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		
			<!-- LEFT SIDEBAR -->
			<?php if ($sidebar == "left") { ?>
				<div class="col-md-3 widget-area widget-left">
					<?php dynamic_sidebar(get_field('select_sidebar')); ?>
				</div>
			<?php } ?>
			
			<!-- MAIN CONTENT -->
			<div class="<?php echo esc_attr($span_size); ?> blog-posts">
				<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts(array('post_type'=>'post', 'paged' => $paged, 'posts_per_page' => get_option('posts_per_page')));
				?>
			
				<?php while ( have_posts() ) : the_post(); ?>			
					<?php global $more; $more = 0; ?>
						<?php if(!get_post_format()) {
							get_template_part('post/blog/'.'standard');
						} else {
							get_template_part('post/blog/'.get_post_format());
						}
						?>
				<?php endwhile; // end of the loop. ?>

				<?php echo custom_pagination(); ?>
				<?php

				/*-----------------------------------------------------------------------------------*/
				/* WORDPRESS RESET QUERY LOOP
				/*-----------------------------------------------------------------------------------*/

				wp_reset_query();

				?>
			</div>
			
			<!-- RIGHT SIDEBAR -->
			<?php if ($sidebar == "right") { ?>
				<div class="col-md-3 widget-area widget-right">
					<?php dynamic_sidebar(get_field('select_sidebar')); ?>
				</div>
			<?php } ?>
			
		</div>
		
	</div>
</div>

<?php 

/*-----------------------------------------------------------------------------------*/
/* GET FOOTER
/*-----------------------------------------------------------------------------------*/

get_footer(); 

?>  
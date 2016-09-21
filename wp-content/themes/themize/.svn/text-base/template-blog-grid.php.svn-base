<?php
/*
Template Name: Blog Grid
*/
?>
<?php get_header();?>
<div class="layer-slider">
<?php if (get_field('layerslider_id')) { ?>
<?php $layerslider_id = get_field('layerslider_id'); ?>
<?php echo do_shortcode("[layerslider id='$layerslider_id']"); ?>
<?php } ?>
</div>

<!-- Breadcrumb -->
<?php if (get_field('breadcrumb') == true) { do_action('breadcrumb'); } ?>

<?php
/*-----------------------------------------------------------------------------------*/
/* CONTENT WIDTH SIZE
/*
/* this content width size depends on if the user has selected to display the sidebar
/*-----------------------------------------------------------------------------------*/

$sidebar = get_field('sidebar_position');

if ($sidebar !== "none") {
	$span_size = "col-md-9";
	$post_size = "col-md-4";
}
if ($sidebar == "none") {
	$span_size = "col-md-12";
	$post_size = "col-md-4";
}
if ($sidebar == "") {
	$span_size = "col-md-12";
	$post_size = "col-md-4";
}

// Set excerpt length for masonry layout
function masonry_excerpt_length( $length ) {
	return 50;
}
add_filter( 'excerpt_length', 'masonry_excerpt_length', 999 );
?>

<!-- Begin content -->
<div class="content-container">
	<div class="container">
		<div class="isotope-preloader"></div>
		
		<div class="row">

			<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		
			<!-- Left sidebar -->
			<?php if ($sidebar == "left") { ?>
				<div class="col-md-3 widget-area widget-left">
					<?php dynamic_sidebar('Page'); ?>
				</div>
			<?php } ?>
			
			<!-- MAIN CONTENT -->
			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			query_posts(array('post_type'=>'post', 'paged' => $paged, 'posts_per_page' => get_option('posts_per_page')));
			?>
			
			<div class="<?php echo esc_attr($span_size); ?>">
				<div class="isotope isotope-blog row">
					
			
						<?php while ( have_posts() ) : the_post(); ?>
				
						<?php
						global $more;
						$more = 0;
						?>
										
						<div class="isotope-post <?php echo esc_attr($post_size); ?>">
							<?php  if(!get_post_format()) {
								get_template_part('post/blog/'.'standard');
							} else {
								get_template_part('post/blog/'.get_post_format());
							}
							?>
						</div>
						
						<?php endwhile; // end of the loop. ?>
				
				</div>
			
			</div>
			
			<!-- Right sidebar -->
			<?php if ($sidebar == "right") { ?>
				<div class="col-md-3 widget-area widget-right">
					<?php dynamic_sidebar('Page'); ?>
				</div>
			<?php } ?>
			
		</div>
		
	</div>
</div>

<div class="clearboth"></div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>    
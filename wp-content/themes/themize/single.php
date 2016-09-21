<?php get_header();?>
<div class="layer-slider"></div>

<!-- Breadcrumb -->
<?php if (get_theme_mod('breadcrumb') == "enable") { do_action('breadcrumb'); } ?>

<?php
/*-----------------------------------------------------------------------------------*/
/* SET CONTENT WIDTH
/*-----------------------------------------------------------------------------------*/

$sidebar = get_theme_mod('blog_sidebar');

if ($sidebar !== "") { $span_size = "col-md-9"; }
if ($sidebar == "none") { $span_size = "col-md-12"; }

?>

<div class="content-container">
	<div class="container">
		<div class="row">

			<!-- LEFT SIDEBAR -->
			<?php if ($sidebar == "left") { ?>
				<div class="col-md-3 widget-area widget-left">
					<?php dynamic_sidebar(get_theme_mod('select_blog_sidebar')); ?>
				</div>
			<?php } ?>
		
			<?php if (get_field('blank_canvas') == false) { ?>
			<div class="<?php echo esc_attr($span_size); ?>">
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php if(!get_post_format()) {
						get_template_part('post/blog/'.'standard');
					} else {
						get_template_part('post/blog/'.get_post_format());
					}
					?>
						
				<?php endwhile; // end of the loop. ?>
				
				<?php
				$args = array(
					'before'           => '<ul class="pagination">',
					'after'            => '</ul>',
					'link_before'      => '<li>',
					'link_after'       => '</li>',
					'next_or_number'   => 'number',
					'separator'        => ' ',
					'nextpagelink'     => __( 'Next page', 'themize' ),
					'previouspagelink' => __( 'Previous page', 'themize' ),
					'pagelink'         => '%',
					'echo'             => 1
				);
				?>

				<div class="tagcloud single-tag-cloud"> <?php  the_tags('', ' ', '<br />');  ?></div>
				<div class="clearboth"></div>
				
				<!-- Link Pages -->
				<?php themize_custom_wp_link_pages(); ?>

				<?php $comment_count = get_comment_count($post->ID); ?>
		 		<?php if ($comment_count['approved'] > 0) : ?>
			 		<?php if (comments_open()) { ?>
	
					<h3 class="comment-heading"><?php comments_number(); ?></h3>
	
					<?php } ?>
				<?php endif; ?>
					
				<?php comments_template(); ?>

			</div>	
			<?php } ?>
				
			<!-- RIGHT SIDEBAR -->

				<div class="col-md-3 widget-area widget-right">
					<?php dynamic_sidebar('page'); ?>
				</div>

				
		</div>
	
	</div> <!--END .container --> 
	<div class="clearboth"></div>
</div>
<?php get_footer(); ?>
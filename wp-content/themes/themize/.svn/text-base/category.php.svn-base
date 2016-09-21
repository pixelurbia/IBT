<?php
/*-----------------------------------------------------------------------------------*/
/* GET THEME HEADER
/*-----------------------------------------------------------------------------------*/

get_header();

/*-----------------------------------------------------------------------------------*/
/* LOAD BREADCRUMBS
/*-----------------------------------------------------------------------------------*/

if (get_field('breadcrumb') == true) { do_action('breadcrumb'); }

$sidebar = get_theme_mod('blog_sidebar');

if ($sidebar !== "") { $span_size = "col-md-9"; }
if ($sidebar == "none") { $span_size = "col-md-12"; }


/*-----------------------------------------------------------------------------------*/
/* LOAD CONTENT
/*-----------------------------------------------------------------------------------*/ ?>

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
			<div class="col-md-12 blog-posts <?php echo esc_attr($span_size); ?>">
			
				<?php 
				while ( have_posts() ) : the_post();			
					global $more; $more = 0;
					if (!get_post_format()) {
						get_template_part('post/blog/'.'standard');
					} else {
						get_template_part('post/blog/'.get_post_format());
					}
				endwhile;
				?>
				<div class="pagination"><p><?php posts_nav_link('&nbsp;','Previous page','Next page'); ?></p></div>
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

<?php 

/*-----------------------------------------------------------------------------------*/
/* WORDPRESS RESET QUERY LOOP
/*-----------------------------------------------------------------------------------*/

wp_reset_query();

/*-----------------------------------------------------------------------------------*/
/* GET FOOTER
/*-----------------------------------------------------------------------------------*/

get_footer(); 

?>  
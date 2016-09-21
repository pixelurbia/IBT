<?php
/*
Template Name: Dash
*/
?>

<?php get_header(); ?>

<?php
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
		
			<!-- LEFT SIDEBAR -->
			<?php if ($sidebar == "left") { ?>
				<div class="col-md-3 widget-area widget-left">
					<?php dynamic_sidebar(get_field('select_sidebar')); ?>
				</div>
			<?php } ?>
			
			<!-- MAIN CONTENT -->
			<div class="<?php echo esc_attr($span_size); ?>">
				
				<?php while (have_posts()) : the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if(!is_user_logged_in()) {
				// echo 'Hey there! I think you forgot to login! You big silly!';
			  wp_login_form();
				} else { ?>

						<?php the_content(); ?>		

						<?php } ?>		
					</div>
				<?php endwhile; ?>
			

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

<?php  get_footer(); ?>
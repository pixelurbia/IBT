<?php get_header();?>

<?php 

/*-----------------------------------------------------------------------------------*/
/* SEARCH VARIABLES
/*-----------------------------------------------------------------------------------*/

$post_count = $wp_query->found_posts;

/*-----------------------------------------------------------------------------------*/
/* SET CONTENT WIDTH
/*-----------------------------------------------------------------------------------*/

if (is_active_sidebar('search')) { 
	$span_size = "col-md-9";
} else {
	$span_size = "col-md-12";
}

/*-----------------------------------------------------------------------------------*/
/* LOAD BREADCRUMBS AND CONTENT
/*-----------------------------------------------------------------------------------*/

if (get_theme_mod('breadcrumb') == "enable") { ?>
<div class="breadcrumbs-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumbs">
					<ul>
						<li><strong><?php __('We found', 'themize'); ?> <?php echo esc_attr($post_count); ?> <?php __('posts for', 'themize'); ?> <?php the_search_query() ?></strong></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>

<div class="content-container">
	<div class="container">
		<div class="row">
			<div class="empty-space"></div>
			<div class="<?php echo esc_attr($span_size); ?>">
				<?php if ($post_count == 0) { ?>
				<div class="entry center">
					<div class="empty-space"></div>
					<h1>Sorry, we didn't find anything for <?php the_search_query() ?>.</h1>
					<p>Try using another term</p>
					<form class="big-search search-form" action="?s=" method="get" role="search">
						<input id="s" type="text" name="s" value="" placeholder="Search">
						<button id="searchsubmit" type="submit"><i class="fa fa-search"></i></button>
					</form>
					<div class="empty-space"></div>
				</div>
				<?php } else { ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part('post/'.'search'); ?>
				<?php endwhile; // end of the loop. ?>			
				<?php } ?>
			</div>
			<?php if (is_active_sidebar('search')) { ?>
				<div class="col-md-3">
					<?php dynamic_sidebar('search'); ?>
				</div>
			<?php } ?>
		</div>
		<div class="empty-space"></div>
	</div>
</div>

<div class="clearboth"></div>

<?php wp_reset_query(); ?>
<?php get_footer(); ?>   
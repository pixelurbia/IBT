<?php get_header();?>

<?php
/*-----------------------------------------------------------------------------------*/
/* SET CONTENT WIDTH
/*-----------------------------------------------------------------------------------*/

$sidebar = get_field('sidebar');

if ($sidebar !== "") { $span_size = "col-md-9"; }
if ($sidebar == "") { $span_size = "col-md-12"; }

/*-----------------------------------------------------------------------------------*/
/* EDD VARIABLES
/*-----------------------------------------------------------------------------------*/

$current_page = get_query_var('page');
$per_page = get_option('posts_per_page');
$offset = $current_page > 0 ? $per_page * ($current_page-1) : 0;
$product_args = array(
	'post_type' => 'download',
	'posts_per_page' => $per_page,
	'offset' => $offset
);
$products = new WP_Query($product_args);


/*-----------------------------------------------------------------------------------*/
/* LOAD BREADCRUMBS
/*-----------------------------------------------------------------------------------*/

if (get_field('breadcrumb') == true) { do_action('breadcrumb'); }

/*-----------------------------------------------------------------------------------*/
/* BEGIN CONTENT
/*-----------------------------------------------------------------------------------*/
?>

<div class="content-container">
	<div class="container">
		<div class="row">
		
			<!-- Left sidebar -->
			<?php if ($sidebar == "left") { ?>
				<div class="col-md-3 widget-area widget-left">
					<?php if (get_field('select_a_sidebar')) { ?>
						<?php dynamic_sidebar(get_field('select_a_sidebar')); ?>
					<?php } else { ?>
						<?php dynamic_sidebar('Page'); ?>
					<?php } ?>
				</div>
			<?php } ?>
			
			<!-- MAIN CONTENT -->
			<div class="<?php echo esc_attr($span_size); ?>">
				<div class="isotope row">
					<?php if ($products->have_posts()) : $i = 1; ?>
						<?php while ($products->have_posts()) : $products->the_post(); ?>
							<div class="col-md-4 isotope-post product<?php if($i % 4 == 0) { echo ' last'; } ?>">

								<div class="entry-image">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('product-image'); ?>
									</a>
								</div>
								<div class="entry">
									<a href="<?php the_permalink(); ?>">
										<h3 class="heading"><?php the_title(); ?></h3>
									</a>
									<?php the_excerpt(); ?>
									<ul class="entry-meta">
   		 								<li class="time"><?php do_action('time_ago'); ?></li>
   		 								<?php if (is_single()) { ?><li class="meta-author"></li><?php } ?><?php if (comments_open()) { ?>
   		 								<li><a data-toggle="tooltip" title="Comments" href="<?php the_permalink(); ?>"><i class="fa fa-comments-o"></i> <?php comments_number('0','1','%'); ?></a></li><?php } ?>
   		 								<li><a data-toggle="tooltip" title="Sales" href="<?php the_permalink(); ?>"><i class="fa fa-shopping-cart"></i> <?php echo edd_get_download_sales_stats($post->ID); ?></a></li>
   		 							</ul>
								</div>
							</div><!--end .product-->
							<?php $i+=1; ?>
						<?php endwhile; ?>
						
						<div class="pagination">
							<?php 					
								$big = 999999999; // need an unlikely intege					
								echo paginate_links( array(
									'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
									'format' => '?paged=%#%',
									'current' => max( 1, $current_page ),
									'total' => $products->max_num_pages
								) );
							?>
						</div>
					<?php else : ?>
						<div class="entry">
							<h3 class="heading"><i class="fa fa-info-circle"></i> &nbsp;Notice</h3>
							<p>You either haven't installed the Easy Digital Downloads plugin or you haven't created your products. Please go into <strong>Dashboard->Downloads->Add New</strong> to create new products.</p>
						</div>
					<?php endif; ?>
				
				</div>
			</div>
			
			<!-- Right sidebar -->
			<?php if ($sidebar == "right") { ?>
				<div class="col-md-3 widget-area widget-right">
					<?php if (get_field('select_a_sidebar')) { ?>
						<?php dynamic_sidebar(get_field('select_a_sidebar')); ?>
					<?php } else { ?>
						<?php dynamic_sidebar('Page'); ?>
					<?php } ?>
				</div>
			<?php } ?>
			
		</div>
	</div>
</div>
<?php get_footer(); ?>   
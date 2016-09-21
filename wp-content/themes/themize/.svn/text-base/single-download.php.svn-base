<?php get_header(); ?>


<?php 
/*-----------------------------------------------------------------------------------*/
/* LOAD BREADCRUMBS
/*-----------------------------------------------------------------------------------*/

if (get_theme_mod('breadcrumb') == "enable") { do_action('breadcrumb'); }

/*-----------------------------------------------------------------------------------*/
/* SET PURCHASE TEXT
/*-----------------------------------------------------------------------------------*/

if (edd_get_download_price($post->ID) == 0) {
	$purchase_text = "DOWNLOAD";
} else {
	$purchase_text = "PURCHASE";
}

/*-----------------------------------------------------------------------------------*/
/* LOAD CONTENT
/*-----------------------------------------------------------------------------------*/
?>

<div class="modal modal-variable-pricing fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<h2>Buying Options</h2>
				<?php echo edd_get_purchase_link( array( 'download_id' => $post->ID ) ); ?>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="content-container">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php while ( have_posts() ) : the_post(); ?>	
					<?php global $more; $more = 0; ?>
					<div class="entry-image">
						<?php the_post_thumbnail('full');  ?>
					</div>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
				<?php $comment_count = get_comment_count($post->ID); ?>
		 		<?php if ($comment_count['approved'] > 0) : ?>
			 		<?php if (comments_open()) { ?>
						<h3 class="comment-heading"><?php comments_number(); ?></h3>
					<?php } ?>
				<?php endif; ?>
				<?php comments_template(); ?>
			</div>	
			<div class="col-md-4">
	    		<div class="entry">
	    			<?php if (edd_has_variable_prices($post->ID)) { ?>
			    	<section>
					    <a class='marketing-button  buy-button' data-toggle="modal" data-target=".modal-variable-pricing">
					        <span class='marketing-button-highlight'></span>
					        <span class='marketing-button-text'><strong><?php edd_price($post->ID); ?></strong> BUY</span>
					        <span class='marketing-button-subtext'><?php echo edd_get_download_sales_stats($post->ID); ?> downloads</span>
					        <span class='marketing-button-icon'><i class='fa fa-chevron-right'></i></span>
					    </a>
			    	</section>
			    	<?php } else { ?>
			    	<section>
					    <a href="<?php echo edd_get_checkout_uri(); ?>?edd_action=add_to_cart&download_id=<?php echo esc_attr($post->ID); ?>" class='marketing-button'>
					        <span class='marketing-button-highlight'></span>
					        <span class='marketing-button-text'><?php echo esc_attr($purchase_text); ?></span>
					        <span class='marketing-button-subtext'><?php echo esc_attr(edd_get_download_sales_stats($post->ID)); ?> downloads</span>
					        <span class='marketing-button-icon'><i class='fa fa-chevron-right'></i></span>
					    </a>
			    	</section>
			    	<?php } ?>
			    	<section>
						<h2 class="heading">
			   				<?php the_title(); ?>
		   				</h2>
		   				<?php the_excerpt(); ?>
		   				<ul class="entry-meta">
   		 					<li class="time"><?php do_action('time_ago'); ?></li>
   		 					<?php if (is_single()) { ?><li class="meta-author"></li><?php } ?><?php if (comments_open()) { ?>
   		 					<li><a data-toggle="tooltip" title="Comments" href="<?php the_permalink(); ?>"><i class="fa fa-comments-o"></i> <?php comments_number('0','1','%'); ?></a></li><?php } ?>
   		 					<li><a data-toggle="tooltip" title="Sales" href="<?php the_permalink(); ?>"><i class="fa fa-shopping-cart"></i> <?php echo edd_get_download_sales_stats($post->ID); ?></a></li>
   		 				</ul>
					</section>
				</div>	
			</div>
		</div>

	</div> <!--END .container --> 
	<div class="clearboth"></div>
</div>

<?php get_footer(); ?>
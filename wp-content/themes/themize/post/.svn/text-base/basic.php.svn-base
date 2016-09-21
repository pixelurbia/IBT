<?php
/*-----------------------------------------------------------------------------------*/
/*	Post type: Basic
/*-----------------------------------------------------------------------------------*/
?>

	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		<div class="entry-image" <?php if ($link_post) { ?> onclick="location.href='<?php the_permalink(); ?>'"<?php } ?>>

				<?php if (!$disable_overlay) { ?>
				<span class="entry-image-overlay"></span>
				<?php } ?>
				
				<div class="view">
				
					<?php if(!$disable_lightbox) { ?>
						<a href="<?php zt_fancybox_url($url); ?>" class="<?php zt_fancybox(); ?> fa fa-picture-o"></a> 
					<?php } ?>
					
					<?php if(!$disable_post_link) { ?>
						<a href="<?php the_permalink(); ?>" class="fa fa-external-link"></a>
					<?php } ?>
					
				</div>				
			<?php the_post_thumbnail('full');  ?>

		</div>

		<?php } ?>
							   			
	   	<div class="entry">
	   	
	   		<!-- Title -->
	   		<?php if (get_the_title()) { ?>
	   		<h2 class="heading">
	   			<a href="<?php the_permalink(); ?>">
	   				<?php the_title(); ?>
	   			</a>
	   		</h2>
	   		<?php } ?>
			
		   	<div class="isotope-post-meta">
   				<?php echo zt_themeblvd_time_ago2(); ?>  
   			</div>
	   		

   			<?php the_excerpt(); ?>
   			
	   		<div class="clearboth"></div>
   		 	
		</div>						
	</div>
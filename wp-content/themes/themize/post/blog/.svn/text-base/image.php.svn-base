<?php
/*-----------------------------------------------------------------------------------*/
/*	Post type: Image
/*-----------------------------------------------------------------------------------*/
?>

	<?php global $page_id; ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<?php if ( has_post_thumbnail() ) {  ?>
		<a href="<?php the_permalink(); ?>" class="entry-image">
			<span class="entry-image-overlay"></span>			
			<?php the_post_thumbnail('full');  ?>
		</a>
		
		<?php } ?>

	   	<div class="entry">
	   	
	   		<!-- Post Title -->
	   		<header>
	   		<?php if (get_the_title()) { ?>
		   		<h1 class="heading">
		   			<a href="<?php the_permalink(); ?>">
		   				<?php the_title(); ?>
		   			</a>
		   		</h4>
	   		</h1>
	   		<?php } ?>
	   		
		   	<?php if (get_theme_mod("blog_post_meta") == "enable") { ?>
		   	<div class="post-meta">
   				<?php echo __('By', 'themize'); ?> <?php the_author_posts_link(); ?> <?php if (has_category()) { ?> <?php echo __('In', 'themize'); ?> <?php } ?> <?php the_category(', ') ?> 
   			</div>
   			<?php } ?>
   			</header>
		
	   		<!-- Post Content -->
	   		<div class="entry-content">
	   		<?php if (is_single()) { 
		   		the_content();
	   		} else {
		   		the_excerpt();
	   		} ?>
	   		</div>

	   		<!-- Post Footer -->
	   		<div class="entry-footer">
		   		<?php if (is_single()) { ?>
			   		<?php if (get_theme_mod('blog_author_info') == "enable") { ?>
				   		<?php if ( get_the_author_meta('description') ) { ?>
				   		<div class="entry-author">
					   		<div id="authorarea">
								<?php echo get_avatar( get_the_author_meta( 'user_email' ), 70 ); ?>
								<h3><?php echo __('About', 'themize'); ?> <?php echo get_the_author(); ?></h3>
								<p>
									<?php the_author_meta( 'description' ); ?>
								</p>
							</div>
						</div>
						<?php } ?>
					<?php } ?>
				<?php } ?>
		   		
		   		<ul class="entry-meta">
	   		 		<li class="time"><a href="<?php the_permalink(); ?>"><?php the_date(); ?></a></li>
	   		 		<?php if (is_single()) { ?><li class="meta-author"></li><?php } ?><?php if (comments_open()) { ?>
	   		 		<li class="meta-comment"><a href="<?php the_permalink(); ?>"><i class="fa fa-comments-o"></i> <?php comments_number('0','1','%'); ?></a></li><?php } ?>
	   		 	</ul>
   		 	</div>
	   		<div class="clearboth"></div>
   		 	
		</div>	
											
	</article>
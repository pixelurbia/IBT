<?php
/*-----------------------------------------------------------------------------------*/
/*	Post type: Quote
/*-----------------------------------------------------------------------------------*/
?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<!-- Quote -->		
		<div class="entry-quote">
			<blockquote><p><i class="fa fa-quote-left"></i> &nbsp;&nbsp;&nbsp;<?php the_field('the_quote'); ?>&nbsp;&nbsp;&nbsp; <i class="fa fa-quote-right"></i></p></blockquote>
		</div>				 		
	
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
   				By <?php the_author_posts_link(); ?> <?php if (has_category()) { ?>in<?php } ?> <?php the_category(', ') ?> 
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
											
	</div>
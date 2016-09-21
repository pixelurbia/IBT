<?php if ( function_exists( 'has_post_thumbnail' ) && has_post_thumbnail( get_the_ID() ) ) : ?>
	<a href="<?php the_permalink(); ?>" class="entry-image">
		<div class="entry-image-overlay">
			<div class="view">
				<i class="fa fa-search"></i>
			</div>
		</div>
		<?php echo get_the_post_thumbnail( get_the_ID(), 'thumbnail' ); ?>
	</a>
<?php endif; ?>
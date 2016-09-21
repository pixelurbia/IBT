<?php

/*-----------------------------------------------------------------------------------*/
/*	Recent Blog Posts
/*-----------------------------------------------------------------------------------*/

function recent_posts($atts) { 
	if(!function_exists("masonry_excerpt_length")) {
		function masonry_excerpt_length( $length ) {
			return 30;
			}
	}
add_filter( 'excerpt_length', 'masonry_excerpt_length', 999 );
	
	extract(shortcode_atts(array(
		'posts_per_page' => '',
		'standard_post_format' => ''
		
	), $atts));
	
	
?>
		
	<?php $paged = (get_query_var('page')) ? get_query_var('page') : 1;
		query_posts(array('post_type'=>'post', 'paged' => $paged, 'posts_per_page' => $posts_per_page));
				$output = '';
	?>
		
	<?php while ( have_posts() ) : the_post(); ?>

		<?php
		global $more;
		$more = 0;
		
		ob_start();  
		
		if(!$standard_post_format) {
			if(!get_post_format()) {
				get_template_part('post/blog/'.'standard');
			} else {
			get_template_part('post/blog/'.get_post_format());
			}
		} else {
			get_template_part('post/blog/'.'standard');
		}

		$get_template_part = ob_get_clean();    
		
		
		$output .= '<div class="isotope-post col-md-4">'.$get_template_part.'</div>';
		?>
	<?php endwhile; // end of the loop. ?>
	
			
	<?php wp_reset_query(); ?>
			
	<?php return '<div class="isotope row vc-recent-work">'.$output.'</div>'; ?>

<?php }

add_shortcode("recent_posts", "recent_posts");


?>
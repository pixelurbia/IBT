<?php
/*-----------------------------------------------------------------------------------*/
/*	Recent Work
/*-----------------------------------------------------------------------------------*/

function recent_work($atts) { 
	
		extract(shortcode_atts(array(
		'posts_per_page' => ''
		
	), $atts));
	
	
?>
		
	<?php $paged = (get_query_var('page')) ? get_query_var('page') : 1;
		query_posts(array('post_type'=>'portfolio', 'paged' => $paged, 'posts_per_page' => $posts_per_page));
		$output = '';
	?>
		
	<?php while ( have_posts() ) : the_post(); ?>

		<?php
		global $more;
		$more = 0;
		
		ob_start();  
		get_template_part('post/portfolio/'.get_post_format());

		$get_template_part = ob_get_clean();    
		
		$output .= '<div class="isotope-post col-md-4 recent-work">'.$get_template_part.'</div>';
		?>
	<?php endwhile; // end of the loop. ?>
	
			
	<?php wp_reset_query(); ?>
			
	<?php return '<div class="isotope row">'.$output.'</div>'; ?>

<?php }

add_shortcode("recent_work", "recent_work");
?>
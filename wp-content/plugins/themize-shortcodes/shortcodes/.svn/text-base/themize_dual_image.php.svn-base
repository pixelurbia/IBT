<?php

/*-----------------------------------------------------------------------------------*/
/*	Dual Image
/*-----------------------------------------------------------------------------------*/

function dual_image( $atts, $content = null ) {  

	extract(shortcode_atts( array(
							'primary_image' => '',
							'secondary_image' => '',
							'popover_title' => '',
							'popover_content' => '',
							'popover_placement' => ''
							), $atts));
							
	$primary_image_src = wp_get_attachment_image_src( $primary_image, 'large');
	$secondary_image_src = wp_get_attachment_image_src( $secondary_image, 'large');
	
		   	  
						   	
   	if ($popover_content) { $data_toggle = "popover"; } else { $data_toggle = "tooltip"; }			
							
    return "<div data-toggle='$data_toggle' data-trigger='hover' data-placement='$popover_placement' data-original-title='$popover_title' title='$popover_title' data-content='$popover_content' class='entry-image-transition'>
			<a href='<?php the_permalink(); ?>' class='images'>			
				<img class='primary' src='$primary_image_src[0]'>
				<img class='secondary' src='$secondary_image_src[0]'>
			</a>
		</div>";  
}
add_shortcode("dual_image", "dual_image");

?>
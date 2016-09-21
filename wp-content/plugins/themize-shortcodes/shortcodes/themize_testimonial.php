<?php
/*-----------------------------------------------------------------------------------*/
/*	Testimonial
/*-----------------------------------------------------------------------------------*/

function testimonial( $atts, $content = null ) {  

	extract(shortcode_atts( array(
					'name' => '',
					'image_src' => '',
					'website' => '',
					'css_animation' => '',
					'popover_title' => '',
					'popover_content' => '',
					'popover_placement' => '',
					), $atts));
							
	$image = wp_get_attachment_image_src( $image_src, 'large');
	
	$css_class = "";
	$css_class .= themize_getCSSAnimation($css_animation);
	
	if ($image[0]) {
		$testimonial_image = "<img src='$image[0]'/>";
	}
	
	if ($popover_content) { $data_toggle = "popover"; } else { $data_toggle = "tooltip"; }
   	
    return "<div data-toggle='$data_toggle' data-trigger='hover' data-placement='$popover_placement' data-original-title='$popover_title' title='$popover_title' data-content='$popover_content' class='testimonial $css_class'><p>$testimonial_image".do_shortcode($content)."</p><h5>$name</h5><a href='$website'>$website</a></div>";  
}
add_shortcode("testimonial", "testimonial");
?>
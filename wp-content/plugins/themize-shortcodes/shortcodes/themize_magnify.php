<?php

/*-----------------------------------------------------------------------------------*/
/*	Magnify
/*-----------------------------------------------------------------------------------*/

function magnify( $atts, $content = null ) {  

	extract(shortcode_atts( array(
							'image_1' => '',
							'image_2' => '',
							'image_link_1' => '',
							'image_link_2' => '',
							'size' => '',
							'popover_title' => '',
							'popover_content' => '',
							'popover_placement' => '',
							'element_align' => '',
							'el_class' => '',
							'css_animation' => '',
							), $atts));
	
	$css_class = themize_getCSSAnimation($css_animation);
							

		
	$image_url_1 = wp_get_attachment_url($image_1);
	$image_url_2 = wp_get_attachment_url($image_2);
   
	if ($popover_content) { $data_toggle = "popover"; } else { $data_toggle = "tooltip"; }
							
    return "<div data-toggle='$data_toggle' data-trigger='hover' data-placement='$popover_placement' data-original-title='$popover_title' title='$popover_title' data-content='$popover_content' class='magnify-container $css_class $el_class'>
    			<a href='$image_link_1' style='height: $size; width: $size;' class='image fancybox'><img src=".$image_url_1." /></a>
    			<a href='$image_link_2' style='height: $size; width: $size;' class='image fancybox'><img src=".$image_url_2." /></a>
    		</div>
    
    ";  
}
add_shortcode("magnify", "magnify");

?>
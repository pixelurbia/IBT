<?php

/*-----------------------------------------------------------------------------------*/
/*	3 Device Halfcut
/*-----------------------------------------------------------------------------------*/

function three_device_halfcut( $atts, $content = null ) {  

	extract(shortcode_atts( array(
							'image_1' => '',
							'popover_title_1' => '',
							'popover_content_1' => '',
							'popover_placement_1' => '',
							'image_2' => '',
							'popover_title_2' => '',
							'popover_content_2' => '',
							'popover_placement_2' => '',
							'image_3' => '',
							'popover_title_3' => '',
							'popover_content_3' => '',
							'popover_placement_3' => '',
							'css_animation' => '',
							), $atts));
							
	$the_image_1 = wp_get_attachment_image_src( $image_1, 'large');
	$the_image_2 = wp_get_attachment_image_src( $image_2, 'large');
	$the_image_3 = wp_get_attachment_image_src( $image_3, 'large');
	$css_class = themize_getCSSAnimation($css_animation);
	
	if ($popover_content_1) { $data_toggle_1 = "popover"; } else { $data_toggle_1 = "tooltip"; }
	if ($popover_content_2) { $data_toggle_2 = "popover"; } else { $data_toggle_2 = "tooltip"; }
	if ($popover_content_3) { $data_toggle_3 = "popover"; } else { $data_toggle_3 = "tooltip"; }
	
		   	  
							
							
    return "<div class='$css_class device-halfcut-container'>
    			<div data-toggle='$data_toggle_1' data-trigger='hover' data-placement='$popover_placement_1' data-original-title='$popover_title_1' title='$popover_title_1' data-content='$popover_content_1' class='device-halfcut'><img src='$the_image_1[0]'></div>
    			<div data-toggle='$data_toggle_2' data-trigger='hover' data-placement='$popover_placement_2' data-original-title='$popover_title_2' title='$popover_title_2' data-content='$popover_content_2' class='device-halfcut'><img src='$the_image_2[0]'></div>
    			<div data-toggle='$data_toggle_3' data-trigger='hover' data-container='body' data-placement='$popover_placement_3' data-original-title='$popover_title_3' title='$popover_title_3' data-content='$popover_content_3' class='device-halfcut'><img src='$the_image_3[0]'></div>
    		</div>
    
    ";  
}
add_shortcode("three_device_halfcut", "three_device_halfcut");

?>
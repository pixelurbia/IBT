<?php
/*-----------------------------------------------------------------------------------*/
/*	Device Laptop
/*-----------------------------------------------------------------------------------*/

function device_laptop( $atts, $content = null ) {  

	extract(shortcode_atts( array(
							'image_src' => '',
							'size' => '',
							'link' => '',
							'element_align' => '',
							'popover_title' => '',
							'popover_content' => '',
							'popover_placement' => '',
							'element_align' => '',
							'el_class' => '',
							'css_animation' => '',
							), $atts));
							
	$image = wp_get_attachment_image_src( $image_src, 'large');
	

	$css_class = themize_getCSSAnimation($css_animation);
	
	if ($image[0]) {
		$device_image = "<img src='$image[0]'/>";
	}
	
	if ($element_align == "left") {
		$alignment = "align-left";
	}
	if ($element_align == "center") {
		$alignment = "align-center";
	}
	if ($element_align == "right") {
		$alignment = "align-right";
	}
   
   $device_base = get_template_directory_uri() . "/assets/img/device-laptop-bottom.png";
   
   	if ($popover_content) { $data_toggle = "popover"; } else { $data_toggle = "tooltip"; }			
							
    return "
    <div data-toggle='$data_toggle' data-trigger='hover' data-placement='$popover_placement' data-original-title='$popover_title' title='$popover_title' data-content='$popover_content' class='device-container $css_class $alignment $el_class' style='width: $size;'>
    	<div class='screen'>
 
    		$device_image
    		
    	</div>
    	<img class='base' src='$device_base' />
    </div>";
    
    
    
    
  
}
add_shortcode("device_laptop", "device_laptop");
?>
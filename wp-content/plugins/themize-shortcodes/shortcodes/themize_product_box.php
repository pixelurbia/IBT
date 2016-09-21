<?php

/*-----------------------------------------------------------------------------------*/
/*	Product Box
/*-----------------------------------------------------------------------------------*/

function product_box( $atts, $content = null ) {  

	extract(shortcode_atts( array(
							'primary_image' => '',
							'secondary_image' => '',
							'product_title' => '',
							'product_subtitle' => '',
							'product_price' => '',
							'product_link' => '',
							'product_button_text' => '',
							'product_description' => '',
							'heading_background_colour' => '',
							'description_background_colour' => '',
							'popover_title' => '',
							'popover_content' => '',
							'popover_placement' => '',
							'el_class' => '',
							'css_animation' => '',
							), $atts));   
							
	
	$primary_image_url = wp_get_attachment_image_src( $primary_image, 'full');
	$secondary_image_url = wp_get_attachment_image_src( $secondary_image, 'full');		
	
	if ($secondary_image_url[0]) {
		$product_image = "<div class='entry-image-transition $el_class'>
			<a class='images'>			
				<img class='primary' src='$primary_image_url[0]'>
				<img class='secondary' src='$secondary_image_url[0]'>
			</a>
		</div>";
	} else {
		$product_image = "<img src='$primary_image_url[0]'>";
	}
	
	if ($popover_content) { $data_toggle = "popover"; } else { $data_toggle = "tooltip"; }
	
	$css_class = themize_getCSSAnimation($css_animation);	
	
	
	if ($heading_background_colour) {
		$inline_style_heading = "style='background-color: $heading_background_colour;'";
	}
	
	if ($description_background_colour) {
		$inline_style_description = "style='background-color: $description_background_colour;'";
	}	

							
    return "
    
    <div data-toggle='$data_toggle' data-trigger='hover' data-placement='$popover_placement' data-original-title='$popover_title' data-content='$popover_content' class='product-box $el_class $css_class'>
    	$product_image
    	
    	<div class='product-heading' $inline_style_heading'>
    		<h4>$product_title</h4>
    		<p>$product_subtitle</p>
    		<span class='price'>$product_price</span>
    		<a href='$product_link' class='secondary-button'>$product_button_text</a>
    	</div>
    	
    	<div class='product-description' $inline_style_description>
    		<p>$product_description</p>
    	</div>
    
    </div>
    
    
    ";  
}
add_shortcode("product_box", "product_box");
?>
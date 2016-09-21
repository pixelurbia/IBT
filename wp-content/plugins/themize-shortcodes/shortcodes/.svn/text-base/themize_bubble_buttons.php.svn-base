<?php
/*-----------------------------------------------------------------------------------*/
/*	Bubble Buttons
/*-----------------------------------------------------------------------------------*/

function dual_bubble_btn( $atts, $content = null ) {  

	extract(shortcode_atts( array(
							'bubble_colour_1' => '',
							'bubble_text_1' => '',
							'bubble_link_1' => '',
							'bubble_stripe_1' => '',
							'bubble_colour_2' => '',
							'bubble_text_2' => '',
							'bubble_link_2' => '',
							'bubble_stripe_2' => '',
							'size' => '',
							'css_animation' => '',
							), $atts));
	
	$css_class = themize_getCSSAnimation($css_animation);
	
	if ($bubble_stripe_1) {
		$enable_stripe_1 = "striped";
	} else {
		$enable_stripe_1 = "";
	}
	if ($bubble_stripe_2) {
		$enable_stripe_2 = "striped";
	} else {
		$enable_stripe_2 = "";
	}
							
    return "<div class='$css_class dual-bubble-btn-container'>
    			<a href='$button_link_1' style='height: $size; width: $size; line-height: $size; background-color: $bubble_colour_1;' class='bubble $enable_stripe_1'>$bubble_text_1</a>
    			<a href='$button_link_1' style='height: $size; width: $size; line-height: $size; background-color: $bubble_colour_2;' class='bubble $enable_stripe_2'>$bubble_text_2</a>
    		</div>
    
    ";  
}
add_shortcode("dual_bubble_btn", "dual_bubble_btn");

?>
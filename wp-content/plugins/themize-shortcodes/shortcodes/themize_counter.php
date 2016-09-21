<?php
/*-----------------------------------------------------------------------------------*/
/*	Counter
/*-----------------------------------------------------------------------------------*/

function counter( $atts, $content = null ) {  

	extract(shortcode_atts( array(
				'counter_number' => '',
				'counter_prepend' => '',
				'counter_append' => '',
				'counter_text' => '',
				'counter_subtext' => '',
				'counter_colour' => '',
				'css_animation' => '',
				), $atts));
				
	$css_class = "";
	$css_class .= themize_getCSSAnimation($css_animation);
	
    return "<div class='vc-counter $css_class'>
    			<span class='vc-counter-prepend' style='color: $counter_colour;'>$counter_prepend</span>
    			<span class='vc-counter-number' counter-number='$counter_number' style='color: $counter_colour;'>
    				0
    			</span>
    			<span class='vc-counter-append' style='color: $counter_colour;'>$counter_append</span>
    			<span class='vc-counter-text' style='color: $counter_colour;'>$counter_text</span>
    			<p style='color: $counter_colour;'>$counter_subtext</p>
    		</div>";  
}
add_shortcode("counter", "counter");
?>
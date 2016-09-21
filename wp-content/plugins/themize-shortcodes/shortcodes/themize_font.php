<?php
/*-----------------------------------------------------------------------------------*/
/*	Font
/*-----------------------------------------------------------------------------------*/

function font( $atts, $content = null ) {  

	extract(shortcode_atts( array(
							'weight' => '',
							'colour' => '',
							'font_family' => '',
							'letter_spacing' => '',
							'line_height' => '',
							'size' => '',
							), $atts));   
							
    return do_shortcode($content);  
}
add_shortcode("font", "font");
?>
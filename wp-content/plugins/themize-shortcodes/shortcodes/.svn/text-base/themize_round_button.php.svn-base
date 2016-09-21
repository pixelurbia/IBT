<?php
/*-----------------------------------------------------------------------------------*/
/*	Round Button
/*-----------------------------------------------------------------------------------*/

function round_button( $atts, $content = null ) {
	extract(shortcode_atts( array(
							'size' => '',
							'href' => '',
							'color' => '',
							), $atts));
		
				
		if ($color) {		
   		$button_color = 'style="background: '.$color.' !important;"';
   		} else {
	   		$button_color = "";
   		}
   		
    return '<a href="'.$href.'" '.$button_color.' class="secondary-button '.$size.'">'.do_shortcode($content).'</a>';  
}
add_shortcode("round_button", "round_button");
?>
<?php
/*-----------------------------------------------------------------------------------*/
/*	Clear Button
/*-----------------------------------------------------------------------------------*/

function clear_button( $atts, $content = null ) {
	extract(shortcode_atts( array(
							'size' => '',
							'href' => '',
							'color' => '',
							'colour' => '',
							), $atts));
		
		
		$button_colour = "";
		if ($color) {		
   			$button_color .= 'style="border: 1px solid '.$colour.' !important; color: '.$colour.' !important;"';
   		}
   		if ($colour) {		
   			$button_color .= 'style="border: 1px solid '.$colour.' !important; color: '.$colour.' !important;"';
   		}
   		
    return '<a href="'.$href.'" '.$button_color.' class="secondary-button '.$size.'">'.do_shortcode($content).'</a>';  
}
add_shortcode("clear_button", "clear_button");
?>
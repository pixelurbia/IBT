<?php
/*-----------------------------------------------------------------------------------*/
/*	Highlight
/*-----------------------------------------------------------------------------------*/

function highlight( $atts, $content = null ) {  

		extract(shortcode_atts( array(
							'colour' => '',
							'color' => ''
							), $atts));
							
		if ($color) {		
   			$button_colour = 'style="background: '.$color.' !important;"';
   			} else if ($colour) {		
	   		$button_colour = 'style="background: '.$colour.' !important;"';
	   		} else {
	   		$button_colour = "";
	   	}
							
    return '<i class="highlight" '.$button_colour.'>'.do_shortcode($content).'</i>';  
}
add_shortcode("highlight", "highlight");
?>
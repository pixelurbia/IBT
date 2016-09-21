<?php
/*-----------------------------------------------------------------------------------*/
/*	Jumbo Buttons
/*-----------------------------------------------------------------------------------*/

function jumbo_button( $atts, $content = null ) {
	extract(shortcode_atts( array(
							'size' => '',
							'target' => '',
							'href' => '',
							'color' => '',
							'colour' => '',
							'text_colour' => '',
							'title' => '',
							'description' => ''
							
							), $atts));
		
				
		if ($color) {		
   		$button_colour = 'style="background: '.$color.' !important; color: '.$text_colour.' !important;"';
   		} else if ($colour) {		
   		$button_colour = 'style="background: '.$colour.' !important; color: '.$text_colour.' !important;"';
   		} else {
	   		$button_colour = "";
   		}
   		
    return '<a data-toggle="popover" data-placement="top" data-animation="true" data-trigger="hover" data-content="'.$description.'" data-original-title="'.$title.'" target="'.$target.'" href="'.$href.'" '.$button_colour.' class="jumbo-button '.$size.'">'.do_shortcode($content).'</a>';  
}
add_shortcode("jumbo_button", "jumbo_button");
?>
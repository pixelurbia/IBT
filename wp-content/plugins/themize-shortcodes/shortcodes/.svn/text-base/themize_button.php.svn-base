<?php
/*-----------------------------------------------------------------------------------*/
/*	Buttons
/*-----------------------------------------------------------------------------------*/

function button( $atts, $content = null ) {
	extract(shortcode_atts( array(
							'size' => '',
							'type' => '',
							'target' => '',
							'href' => '',
							'color' => '',
							'colour' => '',
							'modal' => '',
							), $atts));
		
				
		if ($color) {		
   		$button_colour = $color;
   		} else if ($colour) {		
   		$button_colour = $colour;
   		} else {
	   		$button_colour = "";
   		}
   		
   		
   		$type_class = "";
   		if ($type == "secondary") {
	   		$type_class = "btn btn-default";
   		} else {
	   		$type_class="btn btn-primary";
   		}
   		
   		$styles = "";
   		if ($button_colour) 	{ $styles .= "background: $button_colour !important;"; }
   		if ($size) 				{ $styles .= "font-size: $size;"; }
   		
   		$attributes =  "";
   		if ($target) 			{ $attributes .= "target='$target' "; }
   		if ($href) 				{ $attributes .= "href='$href' "; }
   		if ($button_colour || $size) { $attributes .= "style='$styles' "; }
   		
    return "<a $attributes class='$type_class'>".do_shortcode($content)."</a>";  
}
add_shortcode("button", "button");
?>
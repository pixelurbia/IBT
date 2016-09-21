<?php
/*-----------------------------------------------------------------------------------*/
/*	Tooltip
/*-----------------------------------------------------------------------------------*/

function tooltip( $atts, $content = null ) {  

		extract(shortcode_atts( array(
							'position' => '',
							'title' => ''
							), $atts));
							

	   	if ($position) {
		   	$the_position = $position;
	   	} else {
		   	$the_position = "top";
	   	}
	   	  
	   $the_tooltip = "class='tooltip-span' data-toggle='tooltip' data-placement='$the_position' title='$title'";
							
    return "<span $the_tooltip>".do_shortcode($content)."</span>";  
}
add_shortcode("tooltip", "tooltip");
?>
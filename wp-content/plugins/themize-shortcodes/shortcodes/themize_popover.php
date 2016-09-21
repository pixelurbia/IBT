<?php
/*-----------------------------------------------------------------------------------*/
/*	Popover
/*-----------------------------------------------------------------------------------*/

function popover( $atts, $content = null ) {  

		extract(shortcode_atts( array(
							'position' => '',
							'title' => '',
							'description' => '',
							), $atts));
							

	   	
	   	  
	   $the_popover = "data-toggle='popover' data-trigger='hover' data-placement='$position' data-original-title='$title' data-content='$description'";
							
    return "<span class='ctx-tooltip' $the_popover>".do_shortcode($content)."</span>";  
}
add_shortcode("popover", "popover");
?>
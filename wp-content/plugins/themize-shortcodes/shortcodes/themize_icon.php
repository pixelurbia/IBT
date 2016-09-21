<?php
/*-----------------------------------------------------------------------------------*/
/*	Icons
/*-----------------------------------------------------------------------------------*/

function icon( $atts) {
	extract(shortcode_atts( array(
							'name' => '',
							'size' => '',
							'background_color' => '',
							'color' => '',
							'colour' => '',
							'class' => '',
							), $atts));   
    return '<i class="fa fa-'.$name.' '. $class.'" style="font-size:'.$size.'; color: '.$colour.$color.'"></i>';  
}
add_shortcode("icon", "icon");
?>
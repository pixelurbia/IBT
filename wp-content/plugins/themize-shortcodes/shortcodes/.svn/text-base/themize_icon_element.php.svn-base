<?php

/*-----------------------------------------------------------------------------------*/
/*	Icons
/*-----------------------------------------------------------------------------------*/

function icon_element( $atts) {
	extract(shortcode_atts( array(
							'name' => '',
							'icon_colour' => '',
							'size' => '',
							'icon_background' => '',
							'background_size' => '',
							'background_radius' => '',
							'background_border' => '',
							'icon_link' => '',
							'icon_link_target' => '',
							
							'element_align' => '',
							
							'popover_title' => '',
							'popover_content' => '',
							'popover_placement' => '',

							'el_class' => '',
							'css_animation' => '',
							), $atts)); 
							
							
	$css_class = "";
	$css_class .= themize_getCSSAnimation($css_animation);			  
		


   	$attributes =  "";
	if ($icon_link) 			{ $attributes .= "href='$icon_link' "; }
	if ($icon_link_target) 		{ $attributes .= "target='$icon_link_target' "; }
	if ($popover_content) 		{ $attributes .= "data-toggle='popover' "; } else { $attributes .= "data-toggle='tooltip' "; }
	if ($popover_content || $popover_title) { $attributes .= "data-toggle='$data_toggle' "; }
	if ($popover_content || $popover_title) { $attributes .= "data-trigger='hover' "; }
	if ($popover_content || $popover_title) { $attributes .= "data-placement='$popover_placement' "; }
	if ($popover_content || $popover_title) { $attributes .= "data-original-title='$popover_title' "; }
	if ($popover_content || $popover_title) { $attributes .= "title='$popover_title' "; }
	if ($popover_content || $popover_title) { $attributes .= "data-content='$popover_content' "; }

	$icon_output = "";
	
	$icon_output .= "<div class='$css_class $el_class' style='text-align: $element_align'>";
	$icon_output .= "<a class='icon-link' $attributes>";
	
	if ($icon_background) {
		$icon_output .= "<span class='icon-background' style='border: $background_border; background-color: $icon_background; height: $background_size; width: $background_size; border-radius: $background_radius'>";
	}
	
	$icon_output .=	"<i class='fa fa-$name $el_class' style='font-size: $size; color: $icon_colour; line-height: $background_size;'></i>";
	
	if ($icon_background) {
		$icon_output .= "</span>";	
	}
	$icon_output .= "</a>";
	$icon_output .= "</div>";
	
	return $icon_output;				
}
add_shortcode("icon_element", "icon_element");

?>
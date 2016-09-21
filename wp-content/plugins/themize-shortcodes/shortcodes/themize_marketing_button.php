<?php

/*-----------------------------------------------------------------------------------*/
/*	Marketing Button
/*-----------------------------------------------------------------------------------*/

function marketing_button( $atts, $content = null ) {  

	extract(shortcode_atts( array(
							'text' => '',
							'subtext' => '',
							'icon' => '',
							'colour' => '',
							'font_colour' => '',
							'size' => '',
							'link' => '',
							'link_target' => '',
							'popover_title' => '',
							'popover_content' => '',
							'popover_placement' => '',
							'element_align' => '',
							), $atts));   
	
	$border_colour = themize_colourBrightness($colour,-0.7);
	if ($popover_content) { $data_toggle = "popover"; } else { $data_toggle = "tooltip"; }
	
	if ($element_align == "left") {
		$alignment = "align-left";
	}
	if ($element_align == "center") {
		$alignment = "align-center";
	}
	if ($element_align == "right") {
		$alignment = "align-right";
	}
	
	
	if ($icon) {
		$callout_icon = "<span class='marketing-button-icon'><i class='fa fa-$icon'></i></span>";
	}
							
    return "<a href='$link' target='$link_target' data-trigger='hover' data-toggle='$data_toggle' data-placement='$popover_placement' data-original-title='$popover_title' title='$popover_title' data-content='$popover_content' style='color: $font_colour; width: $size; background-color: $colour; border: 1px solid $border_colour;' class='marketing-button $alignment'>
        <span class='marketing-button-highlight'></span>
        <span class='marketing-button-text'>$text</span>
        <span class='marketing-button-subtext'>$subtext</span>
        $callout_icon
    </a>";  
}
add_shortcode("marketing_button", "marketing_button");

?>
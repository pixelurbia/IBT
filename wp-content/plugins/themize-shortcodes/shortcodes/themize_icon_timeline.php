<?php

/*-----------------------------------------------------------------------------------*/
/*	Timeline
/*-----------------------------------------------------------------------------------*/

function timeline( $atts, $content = null ) {  

	extract(shortcode_atts( array(
				'timeline_icon' => '',
				'circle_colour' => '',
				'circle_bg' => '',
				'line_colour' => '',
				'icon_colour' => '',
				'circle_border' => '',
				'el_class' => '',
				'css_animation' => '',
				), $atts));
				
	$css_class = "";
	$css_class .= themize_getCSSAnimation($css_animation);
	
	$background_url = wp_get_attachment_image_src( $circle_bg, 'full');
	
	$timeline_icon_style = "";
	/* Styles */
	if ($circle_colour) { $timeline_icon_style .= "background-color: $circle_colour; "; }
	if ($circle_border) { $timeline_icon_style .= "border: $border; "; }
	if ($circle_bg) 	{ $timeline_icon_style .= "background-image: url($background_url[0]); "; }
	if ($icon_colour) 	{ $colour = "color: $icon_colour"; }
	if ($line_colour) 	{ $border2 = "border-right: 1px dashed $line_colour"; }
	
    return "<div class='vc-timeline $css_class $el_class'>
    			<div class='vc-timeline-icon' style='$timeline_icon_style'>
    				<i style='$colour' class='fa fa-$timeline_icon'></i>
    			</div>
    			<div class='vc-timeline-line' style='$border2'></div>
    			<div class='vc-timeline-content'>".do_shortcode($content)."</div>
    		</div>";  
}
add_shortcode("timeline", "timeline");

?>
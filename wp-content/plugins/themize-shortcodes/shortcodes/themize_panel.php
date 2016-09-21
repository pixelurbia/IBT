<?php

/*-----------------------------------------------------------------------------------*/
/*	Jumbotron
/*-----------------------------------------------------------------------------------*/

function themize_panel( $atts, $content = null ) {  

	extract(shortcode_atts( array(
				'title' => '',
				'el_class' => '',
				'css_animation' => '',
				), $atts));
				
	$css_class = "";
	$css_class .= themize_getCSSAnimation($css_animation);

	return "<div class='panel panel-default'>
				<div class='panel-heading'>
					$title
				</div>
				<div class='panel-body'>
					".do_shortcode($content)."
				</div>
			</div>";
}
add_shortcode("panel", "themize_panel");

?>
<?php

/*-----------------------------------------------------------------------------------*/
/*	Jumbotron
/*-----------------------------------------------------------------------------------*/

function jumbotron( $atts, $content = null ) {  

	extract(shortcode_atts( array(
				'el_class' => '',
				'css_animation' => '',
				), $atts));
				
	$css_class = "";
	$css_class .= themize_getCSSAnimation($css_animation);

	
    return "<div class='jumbotron $css_class $el_class'>".do_shortcode($content)."</div>";  
}
add_shortcode("jumbotron", "jumbotron");

?>
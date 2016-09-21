<?php
/*-----------------------------------------------------------------------------------*/
/*	Icons
/*-----------------------------------------------------------------------------------*/

function icon_feature2( $atts) {
	extract(shortcode_atts( array(
							'icon' => '',
							'title' => '',
							'description' => '',
							'button_text' => '',
							'button_link' => '',
							'class' => '',
							'el_class' => '',
							), $atts));   
    return "<div class='icon-feature'>
    			<i class='fa fa-$icon'></i>
    			<h3>$title</h3>
    			<p>$description</p>
    			<a href='$button_link' class='btn btn-primary'>$button_text</a>
    		</div>";  
}
add_shortcode("icon_feature2", "icon_feature2");


?>
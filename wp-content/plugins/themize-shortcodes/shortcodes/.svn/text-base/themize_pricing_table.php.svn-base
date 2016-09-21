<?php
/*-----------------------------------------------------------------------------------*/
/*	Pricing Table
/*-----------------------------------------------------------------------------------*/


function pricing_table($atts) {
	
	extract(shortcode_atts(array(
		'price' => '',
		'cycle' => '',
		'package' => '',
		'package_tag' => '',
		'features' => '',
		'button_value' => '',
		'button_link' => '',
		'heading_background_colour' => '',
		'background_colour' => '',
		'invert_text' => '',
		'popover_title' => '',
		'popover_content' => '',
		'popover_placement' => '',
		'el_class' => '',
		'css_animation' => '',
	), $atts));
	
	$features_line = explode(",", $features);
	
	$features_output = "";
	foreach ($features_line as $line) {

   		$features_output .= "<li><i class='fa fa-check'></i>".$line."</li>";
   	}
   	
   	$price_val = explode("|", $price);
   	
   	$package_tag_output = "";
   	if ($package_tag) {
   		$package_tag_output = '<span>'.$package_tag.'</span>';
   	}
   	
   	if ($popover_content) { $data_toggle = "popover"; } else { $data_toggle = "tooltip"; }
   	if ($invert_text) { $invert_text = "invert-text"; }
   	
   	$css_class = themize_getCSSAnimation($css_animation);
   	
    return
    
		"<div data-toggle='$data_toggle' data-trigger='hover' data-placement='$popover_placement' data-original-title='$popover_title' title='$popover_title' data-content='$popover_content' class='package $el_class $css_class $invert_text' style='background: $background_colour;'>
			
			<div class='package-name' style='background: $heading_background_colour;'>
				<h3>$package $package_tag_output</h3>
			</div>
			<div class='price'>
				<span class='currency'>$price_val[0]</span><span class='amount'>$price_val[1]</span><p>$cycle</p>
			</div>
			<ul class='package-features'>
			$features_output
			</ul>
			<a class='btn btn-primary' href='$button_link'>$button_value</a>
		
		</div>";
     
}
add_shortcode("pricing_table", "pricing_table");
?>
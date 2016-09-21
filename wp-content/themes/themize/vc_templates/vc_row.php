<?php
$output = $el_class = $bg_image = $bg_color = $bg_image_repeat = $font_color = $padding = $margin_bottom = $css = '';
extract(shortcode_atts(array(
    'el_class'        => '',
    'bg_image'        => '',
    'bg_color'        => '',
    'bg_image_repeat' => '',
    'font_color'      => '',
    'padding'         => '',
    'margin_bottom'   => '',
    'css' => '',
    'row_type' => '',
    'parallax_bg' => '',
    'row_id' => '',
), $atts));

wp_enqueue_style( 'js_composer_front' );
wp_enqueue_script( 'wpb_composer_front_js' );
wp_enqueue_style('js_composer_custom_css');

$el_class = $this->getExtraClass($el_class);

$css_class =  apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'vc_row wpb_row '.get_row_css_class().$el_class.vc_shortcode_custom_css_class($css, ' '), $this->settings['base']);

$row_type_class = "";
$parallax_bg_class = "";

if ($row_type == "full_width_row") {
	$row_type_class = "full-width";
}
if ($row_type == "full_width_row_content") {
	$row_type_class = "full-width-content";
}
if ($row_type == "header_slider_row") {
    $row_type_class = "full-width-content header-slider-row";
}
if ($parallax_bg) { $parallax_bg_class = "parallax-bg"; };

$the_row_id = "";
if ($row_id) {
    $the_row_id = "id = $row_id";
}

$style = $this->buildStyle($bg_image, $bg_color, $bg_image_repeat, $font_color, $padding, $margin_bottom, $row_type);
$output .= '<div '.$the_row_id.' class="'.$css_class.' '.$row_type_class.' '.$parallax_bg_class.'"'.$style.'>';
$output .= wpb_js_remove_wpautop($content);
$output .= '</div>'.$this->endBlockComment('row');

echo $output;
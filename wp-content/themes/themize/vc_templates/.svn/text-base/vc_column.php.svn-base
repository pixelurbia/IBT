<?php
$output = $font_color = $el_class = $width = $offset = '';
extract(shortcode_atts(array(
	'font_color'      => '',
    'el_class' => '',
    'width' => '1/1',
    'css' => '',
	'offset' => '',
	'popover_title' => '',
	'popover_content' => '',
	'popover_placement' => '',
), $atts));

// CUSTOM POPOVER

$data_toggle = "";
if ($popover_title) { $data_toggle = "tooltip"; }
if ($popover_content) { $data_toggle = "popover"; }

$popover = "";
if ($data_toggle) {
	$popover = "data-toggle='$data_toggle' data-container='body' data-trigger='hover' data-placement='$popover_placement' data-original-title='$popover_title' title='$popover_title' data-content='$popover_content'";
}

$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$width = vc_column_offset_class_merge($offset, $width);
$el_class .= ' wpb_column vc_column_container';
$style = $this->buildStyle( $font_color );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width . $el_class . vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
$output .= "\n\t".'<div ' . $popover . ' class="'.$css_class.'"'.$style.'>';
$output .= "\n\t\t".'<div class="wpb_wrapper">';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t\t".'</div> '.$this->endBlockComment('.wpb_wrapper');
$output .= "\n\t".'</div> '.$this->endBlockComment($el_class) . "\n";

echo $output;
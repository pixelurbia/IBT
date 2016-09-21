<?php
$output = $title = $link = $size = $el_class = '';
extract(shortcode_atts(array(
	'title' => '',
	'link' => 'http://vimeo.com/23237102',
	'size' => ( isset($content_width) ) ? $content_width : 500,
	'el_class' => '',
	'auto_play' => '',
	'auto_play_sound' => '',
  'css' => ''

), $atts));

if ($auto_play) { $enable_autoplay = "ctx-auto"; }
if ($auto_play_sound) { $enable_autoplay_sound = "ctx-auto-sound"; }

if ( $link == '' ) { return null; }
$el_class = $this->getExtraClass($el_class);

$video_w = ( isset($content_width) ) ? $content_width : 500;
$video_h = $video_w/1.61; //1.61 golden ratio
global $wp_embed;
$embed = $wp_embed->run_shortcode('[embed width="'.$video_w.'"'.$video_h.']'.$link.'[/embed]');

$css_class =  apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'wpb_video_widget wpb_content_element '.$el_class.$el_class.vc_shortcode_custom_css_class($css, ' '), $this->settings['base']);

$enable_autoplay_sound = "";
$data_auto_play = "";
if ($enable_autoplay_sound) {
	$auto_sound = "true";
} else {
	$auto_sound = "false";
}

if ($auto_play) {
	$auto_play_video = parse_url($link, PHP_URL_HOST);
	$auto_play_video = preg_replace("/^www\./", "", $auto_play_video);
	$auto_play_video = preg_replace("/\.[^.]*$/", "", $auto_play_video);
	
	$data_auto_play = "data-auto-play='".$auto_play_video."'";
}

$output .= "\n\t".'<div '.$data_auto_play.' data-auto-sound='.$auto_sound.' class="'.$css_class.'">';
    $output .= "\n\t\t".'<div class="wpb_wrapper">';
        $output .= wpb_widget_title(array('title' => $title, 'extraclass' => 'wpb_video_heading'));
        $output .= '<div class="wpb_video_wrapper">' . $embed . '</div>';
        $output .= "\n\t\t".'</div> '.$this->endBlockComment('.wpb_wrapper');
    $output .= "\n\t".'</div> '.$this->endBlockComment('.wpb_video_widget');

echo $output;
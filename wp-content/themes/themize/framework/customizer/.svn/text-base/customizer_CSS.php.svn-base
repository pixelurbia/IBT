<?php
/*-----------------------------------------------------------------------------------

    CUSTOM CSS
    -----------------------------------------------------------------------------

    This file is for custom styling options. Use the options panel to apply
    the settings. Editing this file will break the theme and possibly the universe.

  
    TABLE OF CONTENTS
    -----------------------------------------------------------------------------

    1.0 GENERAL
    ---------------------------
        1.1 Layout Width
        1.2 Theme Colour
        1.3 Logo
        1.4 Background
        1.5 Buttons
        1.6 Preloader
        1.7 LayerSlider

    2.0 TYPOGRAPHY
    ---------------------------
        2.1 Global Font
        2.2 Body Font
        2.3 Navigation Font
        2.4 Sub menu font
        2.5 Heading font
        2.6 Menu Footer
        2.7 Copyright Footer
        2.8 Widget Footer

    3.0 HEADER
    ---------------------------
        3.1 Main Menu
        3.2 Mini Menu
        3.2 Sub Menu
        3.3 Menu Active
        3.4 Rainbow bar
        3.5 Contact bar
        3.6 Purchase button
        3.7 Mobile Menu

    4.0 FOOTER
    ---------------------------
    5.0 OTHER
    ---------------------------

-----------------------------------------------------------------------------------*/

function my_styles_method() {

      wp_enqueue_style(
        'custom-style',
        get_template_directory_uri() . '/assets/css/custom.css'
      );

    /*-----------------------------------------------------------------------------------*/
    /* CUSTOM CSS
    /*-----------------------------------------------------------------------------------*/
    
    $custom_css = "";

    /*-----------------------------------------------------------------------------------*/
    /* 1.0 GENERAL
    /*-----------------------------------------------------------------------------------*/

    /*--------------------------*/
    /* 1.1 Layout Width
    /*--------------------------*/

    $layout_width_desktop = get_theme_mod('layout_width_desktop');
    $layout_width_tablet_landscape = get_theme_mod('layout_width_tablet_landscape');
    $layout_width_tablet_portrait = get_theme_mod('layout_width_tablet_portrait');

    if ($layout_width_tablet_portrait) {
        $custom_css .= "@media (min-width: 768px) { .container, .mega-menu-4col > .sub-menu, .mega-menu-5col > .sub-menu, .mega-menu-6col > .sub-menu { width: $layout_width_tablet_portrait; } }";
    }
    if ($layout_width_tablet_landscape) {
        $custom_css .= "@media (min-width: 992px) { .container, .mega-menu-4col > .sub-menu, .mega-menu-5col > .sub-menu, .mega-menu-6col > .sub-menu { width: $layout_width_tablet_landscape; } }";
    }
    if ($layout_width_desktop) {
        $custom_css .= "@media (min-width: 1200px) { .floating-layout, .container, .mega-menu-4col > .sub-menu, .mega-menu-5col > .sub-menu, .mega-menu-6col > .sub-menu { width: $layout_width_desktop; } }";
    }

    /*--------------------------*/
    /* 1.2 Theme Colour
    /*--------------------------*/

    if (get_theme_mod('theme_colour')) {
        $theme_color = get_theme_mod('theme_colour');
    } else {
        $theme_color = '#29ABE2';
    }

    /*--------------------------*/
    /* 1.3 Logo
    /*--------------------------*/

    $logo_size = get_theme_mod('logo_size');
    $logo_font = get_theme_mod('logo_font');
    $logo_font_size = get_theme_mod('logo_font_size');
    $logo_font_style = get_theme_mod('logo_font_style');
    $mini_logo_font_size = get_theme_mod('mini_logo_font_size');
    $logo_font_letterspacing = get_theme_mod('logo_font_letterspacing');
    $logo_font_weight = get_theme_mod('logo_font_weight');
    $logo_colour = get_theme_mod('logo_colour');
    $mini_logo_colour = get_theme_mod('mini_logo_colour');
    $logo_padding = get_theme_mod('logo_padding');

    if ($logo_size) {
        $custom_css .= ".logo img { width: $logo_size }";
    }
    if ($logo_padding) {
        $custom_css .= ".logo { padding-top: $logo_padding; padding-bottom: $logo_padding; }";
    }
     if ($logo_font) {
        $custom_css .= ".logo-text { font-family: $logo_font; }";
    }
    if ($logo_font) {
        $custom_css .= ".logo-text { font-family: $logo_font; }";
    }
    if ($logo_font_size) {
        $custom_css .= ".logo-text { font-size: $logo_font_size; }";
    }
    if ($logo_font_style) {
        $custom_css .= ".logo-text { font-style: $logo_font_style; }";
    }
    if ($mini_logo_font_size) {
        $custom_css .= ".header-shrink .logo-text { font-size: $mini_logo_font_size; }";
    }
    if ($logo_font_letterspacing) {
        $custom_css .= ".logo-text { letter-spacing: $logo_font_letterspacing; }";
    }
    if ($logo_font_weight) {
        $custom_css .= ".logo-text { font-weight: $logo_font_weight; }";
    }
    if ($logo_colour) {
        $custom_css .= ".logo-text { color: $logo_colour !important; }";
    }
    if ($mini_logo_colour) {
        $custom_css .= ".stuck .logo-text { color: $mini_logo_colour !important; }";
    }

    /*--------------------------*/
    /* 1.4 Background
    /*--------------------------*/

    $background_color = get_theme_mod('background_colour'); // Background Color
    $background_image = get_theme_mod('background_image'); // Background Color
    $background_fixed = get_theme_mod('background_fixed'); // Background Color
    $boxed_background_color = get_theme_mod('boxed_background_colour'); // Background Color
    $boxed_background_image = get_theme_mod('boxed_background_image'); // Background Color
    $boxed_background_fixed = get_theme_mod('background_fixed'); // Background Color

    if ($background_color) {
        $custom_css .= "body { background-color: $background_color; }";
    }
    if ($background_image) {
        $custom_css .= "body { background-image: url($background_image); }";
    }
    if ($background_fixed) {
        $custom_css .= "body { background-attachment: fixed !important; }";
    }
    if ($boxed_background_color) {
        $custom_css .= ".page-boxed { background: $boxed_background_color; }";
    }
    if ($boxed_background_image) {
        $custom_css .= ".page-boxed { background-image: url($boxed_background_image); }";
    }
    if ($boxed_background_fixed) {
        $custom_css .= ".page-boxed { background-attachment: fixed; }";
    }

    /*--------------------------*/
    /* 1.5 Buttons
    /*--------------------------*/

    $button_text_transform = get_theme_mod('button_text_transform');
    $button_letter_spacing = get_theme_mod('button_letter_spacing');
    $button_radius = get_theme_mod('button_radius');
    $button_size = get_theme_mod('button_size');

    if ($button_text_transform == "normal") {
        $custom_css .= ".button, .secondary-button, .wpcf7-submit, #submit, .wpb_button, .btn { text-transform: none; }";
    }
    if ($button_letter_spacing) {
        $custom_css .= ".button, .secondary-button, .wpcf7-submit, #submit, .wpb_button, .btn { letter-spacing: $button_letter_spacing; }";
    }
    if ($button_radius) {
        $custom_css .= ".button, .secondary-button, .wpcf7-submit, #submit, .wpb_button, .btn { border-radius: $button_radius; }";
    }
    if ($button_size) {
        $custom_css .= ".button, .secondary-button, .wpcf7-submit, #submit, .wpb_button, .btn { font-size: $button_size; }";
    }

    /*--------------------------*/
    /* 1.6 Preloader
    /*--------------------------*/

    $preloader_background_colour = get_theme_mod('preloader_background_colour');
    $preloader_icon_colour = get_theme_mod('preloader_icon_colour');
    $preloader_icon_size = get_theme_mod('preloader_icon_size');

    if ($preloader_background_colour) {
        $custom_css .= ".preloader { background-color: $preloader_background_colour; }";
    }
    if ($preloader_icon_colour) {
        $custom_css .= ".preloader { color: $preloader_icon_colour; }";
    }
    if ($preloader_icon_size) {
        $custom_css .= ".preloader { font-size: $preloader_icon_size; }";
    }
    $breadcrumbs_background = get_theme_mod('breadcrumbs_background');
    if ($breadcrumbs_background) {
        $custom_css .= ".breadcrumbs-container { background-color: $breadcrumbs_background; }";
    }

    /*--------------------------*/
    /* 1.7 LayerSlider
    /*--------------------------*/

    $layerslider_arrow_colour = get_theme_mod('layerslider_arrow_colour');
    $layerslider_arrow_bg_colour = get_theme_mod('layerslider_arrow_bg_colour');

    if ($layerslider_arrow_colour) {
        $custom_css .= ".ls-nav-next, .ls-nav-prev { color: $layerslider_arrow_colour !important; }";
    }
    if ($layerslider_arrow_bg_colour) {
        $custom_css .= ".ls-nav-next, .ls-nav-prev { background-color: $layerslider_arrow_bg_colour !important; }";
    }

    /*-----------------------------------------------------------------------------------*/
    /* 2.0 Typography
    /*-----------------------------------------------------------------------------------*/

    /*--------------------------*/
    /* 2.1 Global Font
    /*--------------------------*/

    $global_font = get_theme_mod('global_font');

    if ($global_font) {
        $custom_css .= "* { font-family: $global_font; }";
    }

    /*--------------------------*/
    /* 2.2 Body Font
    /*--------------------------*/

    $body_font_size = get_theme_mod('body_font_size');
    $body_font_letter_spacing = get_theme_mod('body_font_letter_spacing');
    $body_font_line_height = get_theme_mod('body_font_line_height');
    $body_font_colour = get_theme_mod('body_font_colour');

    if ($body_font_size) {
        $custom_css .= "p { font-size: $body_font_size; }";
    }
    if ($body_font_line_height) {
        $custom_css .= "p { line-height: $body_font_line_height; }";
    }
    if ($body_font_letter_spacing) {
        $custom_css .= "p { letter-spacing: $body_font_letter_spacing; }";
    }
    if ($body_font_colour) {
        $custom_css .= "p { color: $body_font_colour; }";
    }

    /*--------------------------*/
    /* 2.3 Navigation Font
    /*--------------------------*/

    $navigation_font = get_theme_mod('navigation_font');
    $navigation_font_colour = get_theme_mod('navigation_font_colour');
    $navigation_font_active_colour = get_theme_mod('navigation_font_active_colour');
    $navigation_scrolled_font_colour = get_theme_mod('navigation_scrolled_font_colour');
    $navigation_font_size = get_theme_mod('navigation_font_size');    
    $navigation_font_letter_spacing = get_theme_mod('navigation_font_letter_spacing');
    $navigation_font_weight = get_theme_mod('navigation_font_weight');
    $navigation_font_transform = get_theme_mod('navigation_font_transform');

    if ($navigation_font) {
        $custom_css .= ".navigation > li > a { font-family: $navigation_font; }";
    }
    if ($navigation_font_size) {
        $custom_css .= ".navigation > li > a { font-size: $navigation_font_size; }";
    }
    if ($navigation_font_letter_spacing) {
        $custom_css .= ".navigation > li > a { letter-spacing: $navigation_font_letter_spacing; }";
    }
    if ($navigation_font_colour) {
        $custom_css .= ".navigation > li > a { color: $navigation_font_colour; }";
    }
    if ($navigation_scrolled_font_colour) {
        $custom_css .= ".stuck .navigation > li > a { color: $navigation_scrolled_font_colour; }";
    }
    if ($navigation_font_weight) {
        $custom_css .= ".navigation > li > a { font-weight: $navigation_font_weight; }";
    }
    if ($navigation_font_transform) {
        $custom_css .= ".navigation > li > a { text-transform: $navigation_font_transform; }";
    }

    /*--------------------------*/
    /* 2.4 Sub menu font
    /*--------------------------*/

    $sub_menu_font_colour = get_theme_mod('submenu_font_colour');
    $sub_menu_hover_colour = get_theme_mod('submenu_hover_font_colour');
    $sub_menu_font_size = get_theme_mod('submenu_font_size');
    $sub_menu_font_transform = get_theme_mod('submenu_font_transform'); 
    $sub_menu_font_letter_spacing = get_theme_mod('submenu_font_letter_spacing');
    $sub_menu_font_weight = get_theme_mod('submenu_font_weight');
    $sub_menu_font = get_theme_mod('sub_menu_font');
    $sub_menu = get_theme_mod('megamenu_heading_colour');
    $submenu_style = get_theme_mod('submenu_style');
    $submenu_inner_shadow = get_theme_mod('submenu_inner_shadow');
    $submenu_outer_shadow = get_theme_mod('submenu_outer_shadow');
    $mega_menu_heading_colour = get_theme_mod('mega_menu_heading_colour');

    if ($sub_menu_font) {
        $custom_css .= ".navigation .sub-menu li a { font-family: $sub_menu_font; }";
    }
    if ($sub_menu_font_colour) {
        $custom_css .= ".navigation .sub-menu li a { color: $sub_menu_font_colour !important; }";
        $custom_css .= ".mega-menu .sub-menu .menu-item-has-children > a { color: $sub_menu_font_colour !important; }";
        $custom_css .= ".mega-menu .sub-menu .menu-item-has-children > a:hover { color: $sub_menu_font_colour !important; }";
    }
    if ($sub_menu_hover_colour) {
        $custom_css .= ".navigation .sub-menu li a:hover { color: $sub_menu_hover_colour !important; }";
    }
    if ($sub_menu_font_size) {
        $custom_css .= ".navigation .sub-menu li a { font-size: $sub_menu_font_size; }";
    }
    if ($sub_menu_font_transform) {
        $custom_css .= ".navigation .sub-menu li a { text-transform: $sub_menu_font_transform; }";
    }
    if ($sub_menu_font_weight) {
        $custom_css .= ".navigation .sub-menu li a { font-weight: $sub_menu_font_weight; }";
    }
    if ($sub_menu_font_letter_spacing) {
        $custom_css .= ".navigation .sub-menu li a { letter-spacing: $sub_menu_font_letter_spacing; }";
    }
    if ($submenu_style == "default") {
        if (!empty($submenu_outer_shadow) || !empty($submenu_inner_shadow)) {
        $custom_css .= ".navigation > li .sub-menu { 
                        box-shadow: 0 8px 15px rgba(0, 0, 0, $submenu_outer_shadow), 
                        inset 0  12px 12px -12px rgba(0, 0, 0, $submenu_inner_shadow) !important;
                        border-top: 1px solid rgba(0,0,0,$submenu_inner_shadow);
                    }";
        }
    }
    if ($mega_menu_heading_colour) {
        $custom_css .= ".mega-menu .sub-menu .menu-item-has-children > a { color: $mega_menu_heading_colour !important; }";
    }

    /*--------------------------*/
    /* 2.5 Heading Font
    /*--------------------------*/

    $heading_font = get_theme_mod('heading_font');
    $heading_letter_spacing = get_theme_mod('heading_letter_spacing');
    $heading_weight = get_theme_mod('heading_weight');
    $heading_transform = get_theme_mod('heading_transform');
    $heading_font_colour = get_theme_mod('heading_font_colour');

    if ($heading_font) {
        $custom_css .= "h1 strong, h2 strong, h3 strong, h4 strong, h5 strong, h6 strong, h1, h2, h3, h4, h5, h6, h1 span, h2 span, h3 span, h4 span, h5 span, h6 span { font-family: $heading_font; }";
    }
    if ($heading_letter_spacing) {
        $custom_css .= "h1, h2, h3, h4, h5, h6 { letter-spacing: $heading_letter_spacing; }";
    }
    if ($heading_weight) {
        $custom_css .= "h1, h2, h3, h4, h5, h6 { font-weight: $heading_weight; }";
    }
    if ($heading_transform) {
        $custom_css .= "h1, h2, h3, h4, h5, h6 { text-transform: $heading_transform; }";
    }
    if ($heading_font_colour) {
        $custom_css .= "h1 strong, h2 strong, h3 strong, h4 strong, h5 strong, h6 strong, h1, h2, h3, h4, h5, h6, h1 span, h2 span, h3 span, h4 span, h5 span, h6 span { color: $heading_font_colour; }";
    }

    /*--------------------------*/
    /* 2.6 Menu Footer Font
    /*--------------------------*/

    $menu_font_colour = get_theme_mod('menu_font_colour');    
    $menu_font_size = get_theme_mod('menu_font_size');    
    $menu_font_letter_spacing = get_theme_mod('menu_font_letter_spacing');
    $menu_font_weight = get_theme_mod('menu_font_weight');
    $menu_font_transform = get_theme_mod('menu_font_transform');

    if ($menu_font_colour == "dark") {
        $custom_css .= ".menu-footer ul li a { color: rgba(0,0,0,0.7); }";
        $custom_css .= ".menu-footer ul li a:hover { color: rgba(0,0,0,1); }";
    }
    if ($menu_font_size) {
        $custom_css .= ".menu-footer ul li a { font-size: $menu_font_size; }";
    }
    if ($menu_font_letter_spacing) {
        $custom_css .= ".menu-footer ul li a { letter-spacing: $menu_font_letter_spacing; }";
    }
    if ($menu_font_weight) {
        $custom_css .= ".menu-footer ul li a { font-weight: $menu_font_weight; }";
    }
    if ($menu_font_transform) {
        $custom_css .= ".menu-footer ul li a { text-transform: $menu_font_transform; }";
    }

    /*--------------------------*/
    /* 2.7 Copyright Footer Font
    /*--------------------------*/

    $copyright_font_colour = get_theme_mod('copyright_font_colour');    
    $copyright_font_size = get_theme_mod('copyright_font_size');    
    $copyright_font_letter_spacing = get_theme_mod('copyright_font_letter_spacing');
    $copyright_font_weight = get_theme_mod('copyright_font_weight');
    $copyright_font_transform = get_theme_mod('copyright_font_transform');

    if ($copyright_font_colour == "dark") {
        $custom_css .= ".copyright-footer { color: rgba(0,0,0,0.4); }";
        $custom_css .= ".copyright-footer a { color: rgba(0,0,0,0.7); }";
        $custom_css .= ".copyright-footer a:hover { color: rgba(0,0,0,1); }";
    }
    if ($copyright_font_size) {
        $custom_css .= ".copyright-footer { font-size: $copyright_font_size; }";
    }
    if ($copyright_font_letter_spacing) {
        $custom_css .= ".copyright-footer { letter-spacing: $copyright_font_letter_spacing; }";
    }
    if ($copyright_font_weight) {
        $custom_css .= ".copyright-footer { font-weight: $copyright_font_weight; }";
    }
    if ($copyright_font_transform) {
        $custom_css .= ".copyright-footer { text-transform: $copyright_font_transform; }";
    }

    /*--------------------------*/
    /* 2.8 Widget Footer
    /*--------------------------*/

    $widget_font_colour = get_theme_mod('widget_font_colour'); 

    if ($widget_font_colour == "dark") {
        $custom_css .= ".widget-footer .widgettitle { color: rgba(0,0,0,0.2); }";
        $custom_css .= ".widget-footer .widget ul li { border-bottom: 1px solid rgba(0,0,0,0.05); color: rgba(0,0,0,0.3); }";
        $custom_css .= ".widget-footer a, .widget-footer .widget_text .textwidget, .widget-footer .widget_text p { color: rgba(0,0,0,0.7) !important; }";
        $custom_css .= ".widget-footer a:hover { color: rgba(0,0,0,1) !important; }";
        $custom_css .= ".widget-footer .post-date { color: rgba(0,0,0,0.4); }";
        $custom_css .= ".widget-footer .tagcloud a { background: rgba(0,0,0,0.1) !important; }";
        $custom_css .= ".widget-footer .tagcloud a:hover { background: rgba(0,0,0,0.5) !important; color: #333;}";
        $custom_css .= ".widget-footer .tagcloud a:hover { background: rgba(0,0,0,0.5) !important; color: #333;}";
    }

    /*-----------------------------------------------------------------------------------*/
    /* 3.0 Header
    /*-----------------------------------------------------------------------------------*/

    /*--------------------------*/
    /* 3.1 Main Menu
    /*--------------------------*/

    $header_background = get_theme_mod('header_background');
    $header_background_opacity = get_theme_mod('header_background_opacity');
    $header_hover_over_content = get_theme_mod('header_hover_over_content');
    $header_shadow = get_theme_mod('header_shadow');
    $scrolled_header_shadow = get_theme_mod('scrolled_header_shadow');
    $scrolled_header_background = get_theme_mod('scrolled_header_background');
    $scrolled_header_background_opacity = get_theme_mod('scrolled_header_background_opacity');
    $navigation_top_bottom_padding = get_theme_mod('navigation_top_bottom_padding');
    $navigation_left_right_padding = get_theme_mod('navigation_left_right_padding');
    $header_padding = get_theme_mod('header_padding');
    $header_radius = get_theme_mod('header_radius');
    $logo_padding = get_theme_mod('logo_padding');
    $header_seperator_style = get_theme_mod('header_seperator_style');
    $header_seperator_position = get_theme_mod('header_seperator_position');
    $header_seperator_border = get_theme_mod('header_seperator_border');
    $navigation_seperator_position = get_theme_mod('navigation_seperator_position');
    $navigation_seperator_border = get_theme_mod('navigation_seperator_border');

    if ($header_background) {
        $rgb_header_background = themize_hex2rgb($header_background);
        $custom_css .= ".header, .header-clear { background-color: rgba($rgb_header_background, $header_background_opacity); }";
    }
    if ($header_hover_over_content) {
        $custom_css .= ".header, .sticky-wrapper { position: absolute; left: 0; right: 0; margin-left: auto; margin-right: auto;}";
        $custom_css .= ".breadcrumbs-container { display: none; }";
        $custom_css .= ".content-container .wpb_row:first-child { margin-top: 35px; }";
        $custom_css .= ".content-container .wpb_row:first-child .wpb_revslider_element { margin-top: -70px; }";
        $custom_css .= ".single-post .header, .single-post .sticky-wrapper, .error404 .header, .error404 .sticky-wrapper { position: relative; }";
    }
    if ($header_shadow == "enable") {
        $custom_css .= ".header { box-shadow: 8px 0 5px -6px rgba(0, 0, 0, 0.09), -8px 0 5px -6px rgba(0, 0, 0, 0.09), 0 5px 5px -3px rgba(0, 0, 0, 0.09); }";
    } else if ($header_shadow == "disable") {
        $custom_css .= ".header { box-shadow: none; -webkit-box-shadow: none; -moz-box-shadow: none; }
                        .floating-layout .header { box-shadow: none; -webkit-box-shadow: none; -moz-box-shadow: none; }";
    }
    if ($scrolled_header_shadow == "enable") {
        $custom_css .= ".stuck { box-shadow: 8px 0 5px -6px rgba(0, 0, 0, 0.09), -8px 0 5px -6px rgba(0, 0, 0, 0.09), 0 5px 5px -3px rgba(0, 0, 0, 0.09) !important; }";
    } else if ($scrolled_header_shadow == "disable") {
        $custom_css .= ".stuck { box-shadow: none; }";
    }
    if ($scrolled_header_background) {
        $rgb_scrolled_header_background = themize_hex2rgb($scrolled_header_background);
        $custom_css .= ".stuck { background: rgba($rgb_scrolled_header_background, $scrolled_header_background_opacity) !important; }";
    }
    if ($header_padding) {
        $custom_css .= ".header { padding-top: $header_padding; padding-bottom: $header_padding; } ";
    }
    if ($navigation_top_bottom_padding) {
        $custom_css .= ".navigation > li > a { padding-top: $navigation_top_bottom_padding; padding-bottom: $navigation_top_bottom_padding; } ";
    }
    if ($navigation_left_right_padding) {
        $custom_css .= ".navigation > li > a { padding-left: $navigation_left_right_padding; padding-right: $navigation_left_right_padding; } ";
    }
    if ($header_radius) {
        $custom_css .= ".header { border-radius: $header_radius; } ";
    }

    if ($header_seperator_style == "full") { 
        if ($header_seperator_position == "top") {
            $custom_css .= ".header { border-top: $header_seperator_border; }";
        }
        if ($header_seperator_position == "bottom") {
            $custom_css .= ".header { border-bottom: $header_seperator_border; }";
        }
        if ($header_seperator_position == "left") {
            $custom_css .= ".header { border-left: $header_seperator_border; }";
        }
        if ($header_seperator_position == "right") {
            $custom_css .= ".header { border-right: $header_seperator_border; }";
        }
        if ($header_seperator_position == "top_bottom") {
            $custom_css .= ".header { border-top: $header_seperator_border; border-bottom: $header_seperator_border }";
        }
        if ($header_seperator_position == "left_right") {
            $custom_css .= ".header { border-left: $header_seperator_border; border-right: $header_seperator_border }";
        }
        $custom_css .= ".stuck { border: none; }";
    }

    if ($header_seperator_style == "normal") {
        if ($header_seperator_position == "top") {
            $custom_css .= ".header-navigation { border-top: $header_seperator_border; }";
        }
        if ($header_seperator_position == "bottom") {
            $custom_css .= ".header-navigation { border-bottom: $header_seperator_border; }";
        }
        if ($header_seperator_position == "left") {
            $custom_css .= ".header-navigation { border-left: $header_seperator_border; }";
        }
        if ($header_seperator_position == "right") {
            $custom_css .= ".header-navigation { border-right: $header_seperator_border; }";
        }
        if ($header_seperator_position == "top_bottom") {
            $custom_css .= ".header-navigation { border-top: $header_seperator_border; border-bottom: $header_seperator_border; }";
        }
        if ($header_seperator_position == "left_right") {
            $custom_css .= ".header-navigation { border-left: $header_seperator_border; border-right: $header_seperator_border; }";
        }
        $custom_css .= ".stuck .header-navigation { border: none; }";
    }

    
    if ($navigation_seperator_position == "top") {
        $custom_css .= ".navigation > li { border-top: $navigation_seperator_border; }";
    }
    if ($navigation_seperator_position == "bottom") {
        $custom_css .= ".navigation > li { border-bottom: $navigation_seperator_border; }";
    }
    if ($navigation_seperator_position == "left") {
        $custom_css .= ".navigation > li { border-left: $navigation_seperator_border; }";
    }
    if ($navigation_seperator_position == "right") {
        $custom_css .= ".navigation > li { border-right: $navigation_seperator_border; }";
    }

    /*--------------------------*/
    /* 3.2 Sub Menu
    /*--------------------------*/

    $submenu_background = get_theme_mod('submenu_background');
    $submenu_outer_shadow = get_theme_mod('submenu_outer_shadow');
    $submenu_outer_border = get_theme_mod('submenu_outer_border');
    $submenu_inner_border = get_theme_mod('submenu_inner_border');
    $sub_menu_colour = get_theme_mod('submenu_font_colour');
    $megamenu_heading_colour = get_theme_mod('megamenu_heading_colour');
    $submenu_background_opacity = get_theme_mod('submenu_background_opacity');

    $submenu_background_rgb = themize_hex2rgb($submenu_background);

    if ($submenu_background) {
        if ($submenu_background_opacity) {
            $custom_css .= ".navigation > li .sub-menu { background-color: rgba($submenu_background_rgb, $submenu_background_opacity) !important; }";
        } else {
            $custom_css .= ".navigation > li .sub-menu { background-color: rgba($submenu_background_rgb, 1) !important; }";
        }
    }
    if ($submenu_outer_shadow) {
        $custom_css .= ".navigation > li .sub-menu { box-shadow: $submenu_outer_shadow; }";
    }
    if ($submenu_outer_border) {
        $custom_css .= ".navigation > li .sub-menu { border-left: $submenu_outer_border; border-right: $submenu_outer_border; border-bottom: $submenu_outer_border; }";
    }
    if ($submenu_inner_border) {
        $custom_css .= ".mega-menu > .sub-menu > li { border-right: $submenu_inner_border; }";
        $custom_css .= ".navigation .sub-menu li a { border-bottom: $submenu_inner_border; }";
    }

    /*--------------------------*/
    /* 3.3 Menu Active
    /*--------------------------*/

    $menu_active_font_colour = get_theme_mod('menu_active_font_colour');
    $menu_active_font_colour_opacity = get_theme_mod('menu_active_font_colour_opacity');
    $mini_menu_active_font_colour = get_theme_mod('mini_menu_active_font_colour');
    $mini_menu_active_font_colour_opacity = get_theme_mod('mini_menu_active_font_colour_opacity');
    $menu_active_bg_colour = get_theme_mod('menu_active_bg_colour');
    $menu_active_bg_colour_opacity = get_theme_mod('menu_active_bg_colour_opacity');
    $menu_active_border_top = get_theme_mod('menu_active_border_top');
    $menu_active_border_right = get_theme_mod('menu_active_border_right');
    $menu_active_border_bottom = get_theme_mod('menu_active_border_bottom');
    $menu_active_border_left = get_theme_mod('menu_active_border_left');
    $menu_active_border_radius = get_theme_mod('menu_active_border_radius');
    $menu_active_border_colour = get_theme_mod('menu_active_border_colour');
    $menu_active_border_colour_opacity = get_theme_mod('menu_active_border_colour_opacity');
    $menu_active_border_style = get_theme_mod('menu_active_border_style');
    $menu_active_arrow = get_theme_mod('menu_active_arrow');
    $menu_active_arrow_size = get_theme_mod('menu_active_arrow_size');
    $menu_active_arrow_colour = get_theme_mod('menu_active_arrow_colour');
    $menu_active_arrow_colour_opacity = get_theme_mod('menu_active_arrow_colour_opacity');
    $menu_active_shadow_style = get_theme_mod('menu_active_shadow_style');
    $menu_active_shadow = get_theme_mod('menu_active_shadow');

    if ($menu_active_arrow_colour) {
        $rgb_menu_active_arrow_colour = themize_hex2rgb($menu_active_arrow_colour);
        $arrow_colour = "rgba($rgb_menu_active_arrow_colour, $menu_active_arrow_colour_opacity)"; 
    }

    if ($menu_active_arrow == "middle") {     
        $custom_css .= ".navigation > li > a:after { transition: opacity ease-in-out 0.1s;
                        -webkit-transition: opacity ease-in-out 0.1s;
                        content: '';
                        position: absolute;
                        bottom: -$menu_active_arrow_size;
                        width: 0;
                        height: 0;
                        border-left: $menu_active_arrow_size solid transparent;
                        border-right: $menu_active_arrow_size solid transparent;
                        border-top: $menu_active_arrow_size solid $arrow_colour;
                        left: 0;
                        right: 0;
                        margin-left: auto;
                        margin-right: auto;
                        z-index: 9999999;
                        opacity: 0; }";
    }
    if ($menu_active_arrow == "left") {     
        $custom_css .= ".navigation > li > a:after {
                        transition: opacity 0.2s;
                        -webkit-transition: opacity 0.2s; /* Safari */
                        content: '';
                        position: absolute;
                        bottom: -$menu_active_arrow_size;
                        width: 0;
                        height: 0;
                        border-right: $menu_active_arrow_size solid transparent;
                        border-top: $menu_active_arrow_size solid $arrow_colour;
                        left: 0px;
                        right: auto;
                        margin-left: auto;
                        margin-right: auto;
                        z-index: 9999999;
                        opacity: 0; }";
    }
    if ($menu_active_arrow != "none") {     
        $custom_css .= ".navigation > li:hover > a:after {
                        opacity: 1; }";
    }
    $custom_css .= ".navigation > li > a {";
        if ($menu_active_border_top) {      $custom_css .= "border-top-width: $menu_active_border_top;"; }
        if ($menu_active_border_right) {      $custom_css .= "border-right-width: $menu_active_border_right;"; }
        if ($menu_active_border_bottom) {      $custom_css .= "border-bottom-width: $menu_active_border_bottom;"; }
        if ($menu_active_border_left) {      $custom_css .= "border-left-width: $menu_active_border_left;"; }
        if ($menu_active_border_style) {      $custom_css .= "border-style: $menu_active_border_style;"; }
        $custom_css .= "border-color: transparent";
    $custom_css .= "}";

    $custom_css .= ".navigation > li:hover > a {";
    if ($menu_active_font_colour) {
        $rgb_menu_active_font_colour = themize_hex2rgb($menu_active_font_colour);
        $custom_css .= "color: rgba($rgb_menu_active_font_colour, $menu_active_font_colour_opacity) !important;";
    }
    if ($menu_active_bg_colour) {
        $rgb_menu_active_bg_colour = themize_hex2rgb($menu_active_bg_colour);
        $custom_css .= "background-color: rgba($rgb_menu_active_bg_colour,$menu_active_bg_colour_opacity);";
    }
    if ($menu_active_border_top) {
        $custom_css .= "border-top-width: $menu_active_border_top;";
    }
    if ($menu_active_border_bottom) {
        $custom_css .= "border-bottom-width: $menu_active_border_bottom;";
    }
    if ($menu_active_border_left) {
        $custom_css .= "border-left-width: $menu_active_border_left;";
    }
    if ($menu_active_border_radius) {
        $custom_css .= "border-radius: $menu_active_border_radius;";
    }
    if ($menu_active_border_colour) {
        $rgb_menu_active_border_colour = themize_hex2rgb($menu_active_border_colour);
        $custom_css .= "border-color: rgba($rgb_menu_active_border_colour, $menu_active_border_colour_opacity);";
    }
    if ($menu_active_border_style) {
        $custom_css .= "border-style: $menu_active_border_style;";
    }
    if ($menu_active_shadow_style == "radial") { $custom_css .= "-moz-box-shadow:    inset 0 0 20px rgba(0,0,0,$menu_active_shadow); 
                                                                -webkit-box-shadow:  inset 0 0 20px rgba(0,0,0,$menu_active_shadow); 
                                                                box-shadow: inset 0 0 20px rgba(0,0,0,$menu_active_shadow);"; }
    if ($menu_active_shadow_style == "linear") { $custom_css .= "-webkit-box-shadow: inset 8px -73px 23px -66px rgba(0,0,0,$menu_active_shadow);
                                                                -moz-box-shadow: inset 8px -73px 23px -66px rgba(0,0,0,$menu_active_shadow);
                                                                box-shadow: inset 8px -73px 23px -66px rgba(0,0,0,$menu_active_shadow);"; }
    $custom_css .= "}";

    if ($mini_menu_active_font_colour) {
        $rgb_mini_menu_active_font_colour = themize_hex2rgb($mini_menu_active_font_colour);
        $custom_css .= ".stuck .navigation > li:hover > a { color: rgba($rgb_mini_menu_active_font_colour, $mini_menu_active_font_colour_opacity) !important; }";
    }

    /*--------------------------*/
    /* 3.4 Rainbow Bar
    /*--------------------------*/

    $rainbow_bar = get_field('rainbow_bar', 'option');
    $rainbow1 = get_theme_mod('bar_colour_1');
    $rainbow2 = get_theme_mod('bar_colour_2');
    $rainbow3 = get_theme_mod('bar_colour_3');
    $rainbow4 = get_theme_mod('bar_colour_4');
    $rainbow5 = get_theme_mod('bar_colour_5');

    $custom_css .= ".rainbow1 { background: $rainbow1}";
    $custom_css .= ".rainbow2 { background: $rainbow2}";
    $custom_css .= ".rainbow3 { background: $rainbow3}";
    $custom_css .= ".rainbow4 { background: $rainbow4}";
    $custom_css .= ".rainbow5 { background: $rainbow5}";


    if (get_theme_mod('enable_rainbow_bar')) {
        $custom_css .= ".header-clear { display: none !important; }";
    }

    /*--------------------------*/
    /* 3.5 Contact Bar
    /*--------------------------*/

    $contact_bar_background_color = get_theme_mod('contact_bar_background_color');
    $contact_bar_size = get_theme_mod('contact_bar_size');

    if ($contact_bar_background_color) {
        $custom_css .= ".header-contact-bar { background-color: $contact_bar_background_color; }";
    }

    if ($contact_bar_size) {
        $custom_css .= ".header-contact-bar .contact-bar > ul > li { padding: $contact_bar_size; }";
        $dropdown_content_margin = (15 + $contact_bar_size * 2)."px";
        $custom_css .= ".header-contact-bar .dropdown-content { margin-top: $dropdown_content_margin; }";
    }

    /*--------------------------*/
    /* 3.6 Purchase Button
    /*--------------------------*/

    $purchase_button_custom_color = get_theme_mod('purchase_button_custom_color');
    $purchase_button_background_opacity = get_theme_mod('purchase_button_background_opacity');
    $purchase_button_border = get_theme_mod('purchase_button_border');
    $purchase_button_custom_color_hover = get_theme_mod('purchase_button_custom_color_hover');
    $purchase_button_text_custom_color_hover = get_theme_mod('purchase_button_text_custom_color_hover');

    if ($purchase_button_custom_color) {
        $purchase_button_dark_color = themize_colourBrightness($purchase_button_custom_color,-0.67);

        $purchase_button_custom_color_rgb = themize_hex2rgb($purchase_button_custom_color);

        $custom_css .= ".navigation .purchase-button { background-color: rgba($purchase_button_custom_color_rgb, $purchase_button_background_opacity ); }
                        .navigation .purchase-button:hover, .stuck .navigation > li:hover > .purchase-button { background-color: $purchase_button_custom_color_hover !important; color: $purchase_button_text_custom_color_hover !important; }
                        .navigation .purchase-button:after { border-right: 6px solid $purchase_button_custom_color; }
                        .navigation .purchase-button:hover:after { border-right: 6px solid $purchase_button_dark_color; }";
    }

    if ($purchase_button_border) {
        $custom_css .= ".navigation .purchase-button { border: $purchase_button_border !important; }";
    }

    /*--------------------------*/
    /* 3.7 Mobile Menu
    /*--------------------------*/

    $mobile_menu_background_colour = get_theme_mod('mobile_menu_background_colour');
    $mobile_menu_icon_colour = get_theme_mod('mobile_menu_icon_colour');

    if ($mobile_menu_background_colour) {
        $custom_css .= ".mobile-nav-bar { background-color: $mobile_menu_background_colour; }";
    }

    if ($mobile_menu_icon_colour) {
        $custom_css .= ".btn-mobile-nav { color: $mobile_menu_icon_colour !important; }";
    }

    /*-----------------------------------------------------------------------------------*/
    /* 4.0 Footer
    /*-----------------------------------------------------------------------------------*/

    $widget_footer_background_colour = get_theme_mod('widget_footer_background_colour');
    $menu_footer_background_colour = get_theme_mod('menu_footer_background_colour');
    $copyright_footer_background_colour = get_theme_mod('copyright_footer_background_colour');

    if ($widget_footer_background_colour) {
        $custom_css .= ".widget-footer { background-color: $widget_footer_background_colour; }";
    }
    if ($menu_footer_background_colour) {
        $custom_css .= ".menu-footer { background-color: $menu_footer_background_colour; }";
    }
    if ($copyright_footer_background_colour) {
        $custom_css .= ".copyright-footer { background-color: $copyright_footer_background_colour; }";
    }

    /*-----------------------------------------------------------------------------------*/
    /* 5.0 Other Settings
    /*-----------------------------------------------------------------------------------*/

    $custom_css_code = get_theme_mod('custom_css');

    /*-----------------------------------------------------------------------------------*/
    /*  ADD THEME COLOUR STYLES
    /*-----------------------------------------------------------------------------------*/

    if ($theme_color) {
        $dark_color = themize_colourBrightness($theme_color,-0.8);
        $slight_dark_color = themize_colourBrightness($theme_color,-0.9);
        $light_color = themize_colourBrightness($theme_color,0.65);

        $custom_css .= "#comment-submit { background-color: $theme_color; }";
        $custom_css .= "#comment-submit:hover { background-color: $slight_dark_color; }";
        $custom_css .= ".content-container a:hover, .navigation li:hover > a, footer a:hover, footer p a:hover { color: $theme_color; }";
        $custom_css .= ".btn-primary { background-color: $theme_color; }";
        $custom_css .= ".btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active { background-color: $slight_dark_color; }";    
        $custom_css .= ".button, .wpb_button, .wpcf7-submit, #submit, .jumbo-button { background: $theme_color !important;}";
        $custom_css .= ".button:hover, .wpb_button:hover, .wpcf7-submit:hover, #submit:hover, .jumbo-button:hover { background: $slight_dark_color !important; }";
        $custom_css .= ".package-name span { background-color: $theme_color; }";
        $custom_css .= ".entry-quote, .entry-link { background: $theme_color; }";       
        $custom_css .= ".feature-icon { color: $theme_color; }";        
        $custom_css .= ".tweet_text a { color: $theme_color; }";        
        $custom_css .= ".isotope-loadmore a { background: $theme_color; }"; 
        $custom_css .= ".navigation .current-menu-item a { color: $theme_color; }";
        if ($navigation_font_active_colour) {
            $custom_css .= ".navigation .current-menu-item a { color: $navigation_font_active_colour; }";
        }               
        $custom_css .= ".wpb_tabs .ui-tabs-active .ui-tabs-anchor { background-color: $theme_color; }";         
        $custom_css .= ".tweet_text a { color: $theme_color !important; }"; 
        $custom_css .= ".navigation-search:hover .fa-search { color: $theme_color }";
        $custom_css .= ".highlight { background: $theme_color !important; }";
        $custom_css .= ".products .price { color: $theme_color !important; }";
        $custom_css .= ".products .price ins { color: $theme_color !important; }";
        $custom_css .= ".onsale { background-color: $theme_color !important; }";
        $custom_css .= ".single-product .price { color: $theme_color !important; }";
        $custom_css .= ".shipping-calculator-button { color: $theme_color !important; }";
        $custom_css .= ".mini-cart-list .buttons .checkout { background: $theme_color !important; }";
        $custom_css .= ".post-icons .voted i, .post-icons .voted span { color: $theme_color !important; }";
        $custom_css .= ".testimonial a { color: $theme_color; }";
        $custom_css .= ".testimonial a { color: $theme_color; }";
        $custom_css .= ".mega-menu .sub-menu .menu-item-has-children:hover > a { color: $theme_color !important; }";
        $custom_css .= ".widget-area .woocommerce .star-rating span:before, .widget-area .woocommerce-page .star-rating span:before { color: $theme_color; }";
        if (!get_theme_mod('purchase_button_custom_color')) {
        $custom_css .= ".navigation .purchase-button { background-color: $theme_color; }
                        .navigation .purchase-button:hover { background-color: $slight_dark_color !important; }
                        .navigation .purchase-button:after { border-right: 6px solid $theme_color; }
                        .navigation .purchase-button:hover:after { border-right: 6px solid $slight_dark_color; }";
        }
        $custom_css .= ".icon-feature .fa { color: $theme_color; }";
        $custom_css .= ".icon-feature:hover { background-color: $theme_color; }";
        $custom_css .= ".contact-bar > ul > li > a:hover { color: $theme_color; }";
        $custom_css .= $custom_css_code;
    }
    wp_add_inline_style( 'custom-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'my_styles_method' );
?>
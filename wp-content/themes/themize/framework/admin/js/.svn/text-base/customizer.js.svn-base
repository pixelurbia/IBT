jQuery(window).load(function() {


    var api = wp.customize;

    // wp.customize( 'header_background', function( value ) {
    //     value.bind( function( newval ) {
    //         jQuery(".header").css("display", "none");
    //     } );
    // } );

    function mySetColor(cname, newColor) {
        var control = api.control.instance(cname);
            picker = control.container.find('.color-picker-hex');
             
        control.setting.set(newColor);
        picker.val( control.setting() ); return;
         
    }

    jQuery( ".side" ).click(function() {
        api.instance('navigation_top_bottom_padding').set('12px');
    });

    jQuery( ".top" ).click(function() {
        api.instance('navigation_top_bottom_padding').set('35px');
    });

    function reset_customizer() {
        /* General */
        api.instance('theme_colour').set('#29abe2');
        api.instance('background_colour').set('#f7f7f7');
        api.instance('background_image').set('');
        api.instance('boxed_background_colour').set('');
        api.instance('boxed_background_image').set('');

        // Layout
        api.instance('layout').set('');
        api.instance('layout_width_desktop').set('1170px');
        api.instance('layout_width_tablet_landscape').set('970px');
        api.instance('layout_width_tablet_portrait').set('750px');

        // Header
        api.instance('header_background').set('#fff');
        api.instance('header_background_opacity').set('1');
        api.instance('header_hover_over_content').set(false);
        api.instance('header_shadow').set("enable");
        api.instance('header_sticky').set("enable");
        api.instance('navigation_position').set("navigation-right");
        api.instance('scrolled_header_background').set("#fff");
        api.instance('scrolled_header_background_opacity').set("1");
        api.instance('scrolled_header_shadow').set("enable");
        api.instance('submenu_background').set("#fff");
        api.instance('submenu_background_opacity').set("1");
        api.instance('submenu_style').set("default");
        api.instance('submenu_inner_border').set("1px solid rgba(0, 0, 0, 0.1)");
        api.instance('submenu_inner_shadow').set('0.1');
        api.instance('submenu_outer_shadow').set('0.1');
        api.instance('enable_rainbow_bar').set('');
        api.instance('enable_contact_bar').set('');
        api.instance('navigation_search').set('disable');
        api.instance('purchase_button').set('disable');
        api.instance('purchase_button_text').set('');
        api.instance('purchase_button_custom_color').set('');
        api.instance('navigation_seperator_position').set('none');
        api.instance('navigation_seperator_border').set('1px solid #ccc');
        api.instance('navigation_top_bottom_padding').set("35px");
        api.instance('navigation_left_right_padding').set("12px");
        api.instance('header_padding').set("0px");
        api.instance('logo_padding').set("0px");
        api.instance('header_radius').set("0px");
        api.instance('header_seperator_position').set('none');
        api.instance('header_seperator_border').set('1px solid #ccc');
        api.instance('header_seperator_style').set('normal');

        api.instance('bar_colour_1').set('#50575E');
        api.instance('bar_colour_2').set('#29ABE2');
        api.instance('bar_colour_3').set('#7bcdef');
        api.instance('bar_colour_4').set('#29ABE2');
        api.instance('bar_colour_5').set('#7BCDEF');


        api.instance('menu_active_font_colour').set("");
        api.instance('menu_active_font_colour_opacity').set("1");
        api.instance('menu_active_bg_colour').set("");
        api.instance('menu_active_bg_colour_opacity').set("1");
        api.instance('menu_active_border_top').set("0px");
        api.instance('menu_active_border_right').set("0px");
        api.instance('menu_active_border_bottom').set("0px");
        api.instance('menu_active_border_left').set("0px");
        api.instance('menu_active_border_radius').set("0px");
        api.instance('menu_active_border_colour').set("#29ABE2");
        api.instance('menu_active_border_colour_opacity').set("1");
        api.instance('menu_active_border_style').set("solid");
        api.instance('menu_active_arrow').set("");
        api.instance('menu_active_arrow_colour').set("");
        api.instance('menu_active_arrow_colour_opacity').set(1);
        api.instance('menu_active_arrow_size').set("20px");
        api.instance('menu_active_shadow_style').set("");
        api.instance('menu_active_shadow').set("0.2");


        // Typography
        api.instance('global_font').set('');
        api.instance('body_font_size').set('');
        api.instance('body_font_line_height').set('');
        api.instance('body_font_letter_spacing').set('');
        api.instance('body_font_letter_spacing').set('');
        api.instance('navigation_font').set('Open Sans');
        api.instance('navigation_font_colour').set('#555');
        api.instance('navigation_scrolled_font_colour').set('');
        api.instance('navigation_font_size').set('11px');
        api.instance('navigation_font_letter_spacing').set('1px');
        api.instance('navigation_font_weight').set('600');
        api.instance('navigation_font_transform').set('Uppercase');
        api.instance('sub_menu_font').set('Open Sans');
        api.instance('submenu_font_colour').set('');
        api.instance('submenu_hover_font_colour').set('');
        api.instance('submenu_font_size').set('11.5px');
        api.instance('submenu_font_transform').set('none');
        api.instance('submenu_font_weight').set('400');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('mega_menu_heading_colour').set("#000");
        api.instance('heading_font').set('Open Sans');
        api.instance('heading_letter_spacing').set('0px');
        api.instance('heading_weight').set('300');
        api.instance('heading_transform').set('none');
        api.instance('widget_font_colour').set('light');
        api.instance('menu_font_colour').set('light');
        api.instance('menu_font_size').set('10px');
        api.instance('menu_font_letter_spacing').set('1px');
        api.instance('menu_font_weight').set('600');
        api.instance('menu_font_transform').set('Uppercase');
        api.instance('copyright_font_colour').set('light');
        api.instance('copyright_font_size').set('10px');
        api.instance('copyright_font_letter_spacing').set('1px');
        api.instance('copyright_font_weight').set('600');
        api.instance('copyright_font_transform').set('Uppercase');

        // Footer
        api.instance('widget_footer').set('');
        api.instance('widget_footer_background_colour').set('#333');
        api.instance('widget_footer_columns').set('Four');
        api.instance('menu_footer').set('enable');
        api.instance('menu_footer_background_colour').set('#303030');
        api.instance('copyright_footer').set('enable');
        api.instance('copyright_footer_background_colour').set('#222');

        // Logo
        api.instance('logo').set('text_logo');
        api.instance('logo_font').set('');
        api.instance('logo_font_size').set('24px');
        api.instance('mini_logo_font_size').set('18px');
        api.instance('logo_font_style').set('Normal');
        api.instance('logo_font_letterspacing').set('0');
        api.instance('logo_font_weight').set('400');
        api.instance('logo_colour').set('#555');
        api.instance('mini_logo_colour').set('#555');

    }

    function corporate_logo() {
        api.instance('logo_text').set('-CORPORATE-');
        api.instance('logo_font_weight').set('600');
        api.instance('logo_font').set('Raleway');
        api.instance('logo_font_size').set('18px');
        api.instance('logo_font_letterspacing').set('5px');
    }
    function creative_logo() {
        api.instance('logo_text').set('Creative');
        api.instance('logo_font_weight').set('400');
        api.instance('logo_colour').set('#555');
        api.instance('logo_font').set('Pacifico');
        api.instance('logo_font_letterspacing').set('0px');
    }

    jQuery( "#style-1" ).click(function() {
        reset_customizer();
        corporate_logo();

        api.instance('enable_rainbow_bar').set('enable');
        api.instance('purchase_button').set('enable');
        api.instance('purchase_button_text').set('Request Quote');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11168");

        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-2" ).click(function() {
        reset_customizer();
        corporate_logo();

        api.instance('navigation_font').set('Open Sans');
        api.instance('navigation_font_size').set('13px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('none');


        api.instance('menu_active_border_bottom').set("3px");

        api.instance('navigation_search').set('enable');

        api.instance('enable_contact_bar').set('enable');
        api.instance('contact_bar_right').set('<li>[icon name="facebook"]</li><li>[icon name="twitter"]</li><li>[icon name="linkedin"]</li><li>[icon name="instagram"]</li><li>[icon name="youtube"]</li>');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11168");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-3" ).click(function() {
        reset_customizer();
        creative_logo();

        api.instance('navigation_font').set('Raleway');
        api.instance('navigation_font_size').set('12px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('600');
        api.instance('navigation_font_transform').set('Uppercase');

        api.instance('submenu_background').set("#333");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('mega_menu_heading_colour').set('#fff');

        api.instance('heading_font').set('Raleway');
        api.instance('global_font').set('Raleway');
        api.instance('heading_weight').set('300');

        api.instance('submenu_style').set("submenu-flat");
        api.instance('navigation_position').set('navigation-center');

        api.instance('enable_rainbow_bar').set('enable');

        api.instance('header_padding').set("30px");
        api.instance('header_sticky').set("disable");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11312");

        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-4" ).click(function() {
        reset_customizer();
        corporate_logo();

        api.instance('navigation_font').set('Raleway');
        api.instance('navigation_font_size').set('13px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('None');

        api.instance('layout').set('boxed_top');
    
        api.instance('menu_active_border_top').set("3px");

        api.instance('heading_font').set('Raleway');
        api.instance('global_font').set('Raleway');
        api.instance('heading_weight').set('300');

        api.instance('submenu_background').set("#333");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('none');
        api.instance('submenu_font_size').set('11px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        api.instance('enable_contact_bar').set('enable');
        api.instance('contact_bar_right').set('<li>[icon name="facebook"]</li><li>[icon name="twitter"]</li><li>[icon name="linkedin"]</li><li>[icon name="instagram"]</li><li>[icon name="youtube"]</li>');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11168");

        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-5" ).click(function() {
        reset_customizer();
        corporate_logo();

        api.instance('navigation_font_size').set('11px');
        api.instance('navigation_font_weight').set('600');
        api.instance('navigation_font_letter_spacing').set('1px');
        api.instance('header_background').set('#333');
        api.instance('scrolled_header_background').set('#333');
        api.instance('navigation_font_colour').set('#999');

        api.instance('logo_colour').set('#fff');
        api.instance('mini_logo_colour').set('#fff');

        api.instance('menu_active_font_colour').set("#fff");
        api.instance('menu_active_bg_colour').set("#29abe2");
        api.instance('menu_active_arrow').set("middle");
        api.instance('menu_active_arrow_colour').set("#29abe2");
        api.instance('menu_active_arrow_size').set("10px");
        api.instance('menu_active_arrow_colour_opacity').set("1");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11168");

        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-6" ).click(function() {
        reset_customizer();
        corporate_logo();
        api.instance('logo_colour').set('#fff');
        api.instance('mini_logo_colour').set('#fff');

        api.instance('navigation_font').set('Oswald');
        api.instance('navigation_font_size').set('13px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('header_background').set('#259ACB');
        api.instance('header_shadow').set("disable");
        api.instance('scrolled_header_background').set('#2f3c54');
        api.instance('navigation_font_colour').set('#aad2e0');
        api.instance('mega_menu_heading_colour').set("#000");

        api.instance('menu_active_font_colour').set("#fff");
        api.instance('menu_active_bg_colour').set("#111");
        api.instance('menu_active_bg_colour_opacity').set("0.1");
        api.instance('menu_active_shadow_style').set("linear");
        api.instance('menu_active_shadow').set("0.5");

        

        api.instance('purchase_button').set('enable');
        api.instance('purchase_button_text').set('Request Quote');
        api.instance('purchase_button_custom_color').set('#0088b7');
        api.instance('purchase_button_border').set('none');

        api.instance('enable_rainbow_bar').set('enable');

        // api.instance('submenu_background').set("#1B6C8F");
        // api.instance('submenu_font_colour').set('#C3E8F8');
        // api.instance('megamenu_heading_colour').set('#fff');
        // api.instance('submenu_font_transform').set('uppercase');
        // api.instance('submenu_font_size').set('11px');
        // api.instance('submenu_hover_font_colour').set('#fff')
        // api.instance('submenu_font_weight').set('600');
        // api.instance('submenu_font_letter_spacing').set('0.5px');
        // api.instance('submenu_style').set("submenu-flat");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11168");

        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-7" ).click(function() {
        reset_customizer();
        creative_logo();
        api.instance('logo_colour').set("#fff");


        api.instance('header_hover_over_content').set(true);
        api.instance('header_background_opacity').set('0');
        api.instance('navigation_font_colour').set('#555');
        api.instance('navigation_scrolled_font_colour').set('#555');
        api.instance('navigation_font_size').set('15px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_transform').set('none');
        api.instance('navigation_font').set('Ubuntu');
        api.instance('navigation_font_weight').set('600');


        api.instance('navigation_top_bottom_padding').set('50px');
        api.instance('navigation_left_right_padding').set('20px');
        // api.instance('navigation_seperator').set('bottom');
        // api.instance('navigation_seperator_border').set('1px solid #555');
        api.instance('header_shadow').set('disable');
        api.instance('scrolled_header_shadow').set('enable');

        api.instance('navigation_font_colour').set('#fff');
        api.instance('menu_active_font_colour').set('#fff');
        api.instance('menu_active_font_colour_opacity').set('0.5');


        // Dark sub-menu
        api.instance('submenu_background').set("#222");
        api.instance('submenu_font_colour').set('#848484');
        api.instance('submenu_font_size').set('11px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set('#fff');


        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11312");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-8" ).click(function() {
        reset_customizer();
        corporate_logo();

        api.instance('navigation_font').set('Oswald');
        api.instance('navigation_font_size').set('12px');
        api.instance('navigation_font_letter_spacing').set('1px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('Uppercase');
        api.instance('navigation_search').set('enable');


       api.instance('menu_active_bg_colour').set("#29ABE2");
       api.instance('menu_active_font_colour').set("#fff");

        // Dark sub-menu
        api.instance('submenu_background').set("#333");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('none');
        api.instance('submenu_font_size').set('11px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        api.instance('enable_contact_bar').set('enable');
        api.instance('enable_rainbow_bar').set('enable');
        api.instance('contact_bar_right').set('<li>[icon name="facebook"]</li><li>[icon name="twitter"]</li><li>[icon name="linkedin"]</li><li>[icon name="instagram"]</li><li>[icon name="youtube"]</li>');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11168");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-9" ).click(function() {
        reset_customizer();
        creative_logo();

        api.instance('navigation_font').set('Roboto');
        api.instance('navigation_font_size').set('12px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('none');
        api.instance('navigation_left_right_padding').set('20px');

        api.instance('header_hover_over_content').set(true);
        api.instance('layout').set("freefloating_top");


        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11312");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-10" ).click(function() {
        reset_customizer();
        corporate_logo();

        api.instance('navigation_font').set('Roboto');
        api.instance('navigation_font_size').set('12px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('none');

        api.instance('header_hover_over_content').set(true);
        api.instance('layout').set("freefloating_top");

        api.instance('menu_active_font_colour').set("#fff");
        api.instance('menu_active_bg_colour').set("#29abe2");

        api.instance('heading_font').set('Roboto');

        api.instance('navigation_search').set('enable');
        api.instance('purchase_button').set('enable');
        api.instance('purchase_button_text').set('Request Quote');

        // Dark sub-menu
        api.instance('submenu_background').set("#333");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('none');
        api.instance('submenu_font_size').set('11px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11168");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-11" ).click(function() {
        reset_customizer();
        creative_logo();

        api.instance('navigation_font').set('Roboto');
        api.instance('navigation_font_size').set('12px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('none');
        api.instance('navigation_font_colour').set('#ccc');
        api.instance('navigation_left_right_padding').set('20px');

        api.instance('logo_colour').set('#fff');
        api.instance('mini_logo_colour').set('#fff');

        api.instance('header_hover_over_content').set(true);
        api.instance('header_shadow').set('disable');
        api.instance('header_background').set('#333');
        api.instance('scrolled_header_background').set('#333');
        api.instance('layout').set("freefloating_top");

        api.instance('menu_active_font_colour').set("#fff");
        api.instance('menu_active_border_top').set("3px");
        api.instance('menu_active_border_colour').set("#fff");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11312");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-12" ).click(function() {
        reset_customizer();
        creative_logo();
        api.instance('logo_colour').set('#fff');
        api.instance('navigation_font').set('Raleway');
        api.instance('navigation_font_size').set('13px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('600');
        api.instance('navigation_font_transform').set('none');
        api.instance('navigation_position').set('navigation-center');
        api.instance('navigation_top_bottom_padding').set("15px");
        api.instance('navigation_font_colour').set('#fff');
        api.instance('header_padding').set("10px");
        api.instance('logo_padding').set("20px");
        api.instance('header_sticky').set("disable");

        api.instance('heading_font').set('Raleway');
        api.instance('global_font').set('Raleway');

        api.instance('header_hover_over_content').set(true);
        api.instance('header_background_opacity').set('0');

        api.instance('header_shadow').set("disable");


        // Dark sub-menu
        api.instance('submenu_background').set("#333");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0.5px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set('#fff');

        api.instance('menu_active_font_colour').set('#fff');
        api.instance('menu_active_font_colour_opacity').set('0.6');
       
        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11312");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-13" ).click(function() {
        reset_customizer();
        creative_logo();
        api.instance('logo_colour').set('#fff');

        api.instance('navigation_font').set('Pacifico');
        api.instance('navigation_font_size').set('16px');
        api.instance('navigation_font_colour').set('#fff');
        api.instance('navigation_scrolled_font_colour').set('#333');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('300');
        api.instance('navigation_font_transform').set('None');
        api.instance('navigation_top_bottom_padding').set("30px");
        api.instance('navigation_left_right_padding').set("20px");
        api.instance('header_padding').set("30px");
        api.instance('header_background_opacity').set("0");

        api.instance('menu_active_font_colour').set("#fff");
        api.instance('menu_active_font_colour_opacity').set("0.5");

        api.instance('header_hover_over_content').set(true);
        api.instance('header_shadow').set("disable");
        api.instance('submenu_inner_shadow').set("0");
        api.instance('scrolled_header_shadow').set("enable");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11312");



        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-14" ).click(function() {
        reset_customizer();
        creative_logo();

        api.instance('navigation_font').set('Open Sans');
        api.instance('navigation_font_colour').set('#555');
        api.instance('navigation_font_size').set('11px');
        api.instance('navigation_font_letter_spacing').set('1px');
        api.instance('navigation_font_weight').set('600');
        api.instance('navigation_font_transform').set('uppercase');

        api.instance('layout').set('side_left');
        api.instance('navigation_top_bottom_padding').set('12px');

        api.instance('submenu_inner_shadow').set("0");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11312");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-15" ).click(function() {
        reset_customizer();
        creative_logo();

        api.instance('navigation_font').set('Delius');
        api.instance('navigation_font_size').set('13px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('None');

        api.instance('layout').set('floating_left');
        api.instance('navigation_top_bottom_padding').set('15px');
        api.instance('navigation_position').set('navigation-center');

         // Dark sub-menu
        api.instance('submenu_background').set("#222");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('none');
        api.instance('submenu_font_size').set('11px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set('#fff');

        api.instance('purchase_button').set('enable');
        api.instance('purchase_button_text').set('Contact Us');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11312");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-16" ).click(function() {
        reset_customizer();
        creative_logo();

        api.instance('logo_colour').set('#fff');

        api.instance('navigation_font_size').set('12px');
        api.instance('header_hover_over_content').set(true);
        api.instance('header_background_opacity').set(0);
        api.instance('header_seperator_position').set("bottom");
        api.instance('header_seperator_border').set("1px solid #fff");
        api.instance('header_seperator_style').set("full");
        api.instance('navigation_top_bottom_padding').set("60px");
        api.instance('navigation_left_right_padding').set("20px");

        api.instance('header_shadow').set("disable");
    

        api.instance('navigation_font_colour').set('#fff');
        api.instance('navigation_scrolled_font_colour').set('#333');
        api.instance('menu_active_font_colour').set("#fff");
        api.instance('menu_active_font_colour_opacity').set("0.5");

                // Dark sub-menu
        api.instance('submenu_background').set("#222");
        api.instance('submenu_font_colour').set('#848484');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
         api.instance('mega_menu_heading_colour').set('#fff');



        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11312");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-17" ).click(function() {
        reset_customizer();

        api.instance('header_background_opacity').set(0);
        api.instance('navigation_seperator').set("bottom");
        api.instance('navigation_top_bottom_padding').set("50px1");

        api.instance('logo_text').set('Creative');
        api.instance('logo_font_weight').set('400');
        api.instance('logo_colour').set('#555');
        api.instance('logo_font').set('Pacifico');
        api.instance('logo_font_letterspacing').set('0px');

        api.instance('header_shadow').set("disable");

        // Dark sub-menu
        api.instance('submenu_background').set("#333");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('11px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0.5px');
        api.instance('submenu_style').set("submenu-flat");

        // Set Page
        api.instance('show_on_front').set("post");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-18" ).click(function() {
        reset_customizer();

        api.instance('header_background_opacity').set(0);

        api.instance('logo_text').set('Creative');
        api.instance('logo_font_weight').set('400');
        api.instance('logo_colour').set('#555');
        api.instance('logo_font').set('Pacifico');
        api.instance('logo_font_letterspacing').set('0px');
        api.instance('navigation_top_bottom_padding').set('10px');
        api.instance('background_colour').set('#fff');

        api.instance('header_shadow').set("disable");
        api.instance('layout').set("freefloating_left");

        // Dark sub-menu
        api.instance('submenu_background').set("#333");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        api.instance('navigation_search').set('enable');
        api.instance('logo_padding').set("30px");

        api.instance('copyright_font_colour').set('dark');

        // Footer
        api.instance('menu_footer').set('');
        api.instance('copyright_footer_background_colour').set('#fff');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11248");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-19" ).click(function() {
        reset_customizer();
        creative_logo();

        api.instance('navigation_font').set('Montserrat');
        api.instance('navigation_font_size').set('14px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('800');
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('navigation_top_bottom_padding').set('20px');
        api.instance('navigation_left_right_padding').set('20px');
        api.instance('header_padding').set('40px');
        api.instance('heading_transform').set('uppercase');
        api.instance('heading_letter_spacing').set('0.5px');

        api.instance('menu_active_font_colour').set('#fff');
        api.instance('menu_active_bg_colour').set('#BD71C0');
        api.instance('submenu_background').set('#BD71C0');
        api.instance('submenu_font_colour').set('#fff');
        api.instance('submenu_inner_shadow').set('0');
        api.instance('mega_menu_heading_colour').set('#fff');

        api.instance('enable_rainbow_bar').set(true);

        api.instance('submenu_style').set("submenu-flat");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11312");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-20" ).click(function() {
        reset_customizer();
        creative_logo();

        api.instance('logo_colour').set('#fff');

        api.instance('navigation_font').set('Oxygen');
        api.instance('navigation_font_size').set('15px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('600');
        api.instance('navigation_font_colour').set('#fff');
        api.instance('navigation_font_transform').set('none');
        api.instance('logo_font_size').set('30px');
        api.instance('heading_font').set('Oxygen');
        api.instance('navigation_scrolled_font_colour').set('#555');
        api.instance('header_hover_over_content').set(true);
        
        api.instance('header_seperator_position').set('bottom');
        api.instance('header_seperator_border').set('1px solid rgba(255,255,255,0.5)');
        api.instance('navigation_position').set('navigation-center');
        api.instance('navigation_top_bottom_padding').set('30px');
        api.instance('navigation_left_right_padding').set('25px');
        api.instance('logo_padding').set('30px');

        api.instance('header_background_opacity').set('0');
        api.instance('header_shadow').set('disable');
        api.instance('header_sticky').set('disable');

        api.instance('menu_active_bg_colour').set('#333');
        api.instance('menu_active_font_colour').set('#fff');

        // Dark sub-menu
        api.instance('submenu_background').set("#333");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff');
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set('#fff');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11312");

        // Refresh
        jQuery(".range").ionRangeSlider("update");
        api.instance('navigation_font_size').previewer.refresh();
    });

    jQuery( "#style-21" ).click(function() {
        reset_customizer();

        api.instance('navigation_position').set('navigation-right');
        api.instance('navigation_top_bottom_padding').set('10px');

        api.instance('menu_active_bg_colour').set('#f5f5f5');
        api.instance('menu_active_font_colour').set('#222');
        api.instance('navigation_top_bottom_padding').set('15px');

        api.instance('logo_text').set('CREATIV');
        api.instance('logo_font_weight').set('300');
        api.instance('logo_colour').set('#555');
        api.instance('logo_font').set('Oswald');
        api.instance('logo_font_size').set('36px');
        api.instance('logo_font_letterspacing').set('1px');

        api.instance('layout').set('side_left');

        // Footer
        api.instance('menu_footer').set('');
        api.instance('copyright_footer').set('');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11299");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-22" ).click(function() {
        reset_customizer();
        corporate_logo();

        api.instance('navigation_font').set('Oswald');
        api.instance('navigation_font_size').set('13px');
        api.instance('navigation_font_letter_spacing').set('1px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('uppercase');


        api.instance('navigation_position').set('navigation-center');

        api.instance('navigation_left_right_padding').set("20px");

        api.instance('menu_active_bg_colour').set("#29abe2");
        api.instance('menu_active_font_colour').set("#fff");


        // Dark sub-menu
        api.instance('submenu_background').set("#333");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('none');
        api.instance('submenu_font_size').set('11px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        api.instance('heading_font').set('Oswald');
        api.instance('heading_letter_spacing').set('0px');
        api.instance('heading_weight').set('300');
        api.instance('heading_transform').set('uppercase');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11168");
        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-23" ).click(function() {
        reset_customizer();

        api.instance('navigation_font').set('Raleway');
        api.instance('navigation_font_size').set('12px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('none');

        api.instance('logo_text').set('Creative');
        api.instance('logo_font_weight').set('400');
        api.instance('logo_colour').set('#555');
        api.instance('logo_font').set('Bangers');
        api.instance('logo_font_letterspacing').set('0px');
        api.instance('logo_font_size').set('30px');

        api.instance('header_hover_over_content').set(true);
        api.instance('layout').set("freefloating_left");
        api.instance('header_radius').set("7px");

        api.instance('heading_font').set('Raleway');

        api.instance('navigation_position').set('navigation-center');
        api.instance('navigation_top_bottom_padding').set('12px');

        // Dark sub-menu
        api.instance('submenu_background').set("#222");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('none');
        api.instance('submenu_font_size').set('11px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");

        api.instance('mega_menu_heading_colour').set("#fff");

        api.instance('menu_footer').set("");
        api.instance('copyright_footer').set("");

        // Set Page 
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11242");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-24" ).click(function() {
        reset_customizer();

        api.instance('navigation_font').set('Oswald');
        api.instance('navigation_font_size').set('13px');
        api.instance('navigation_font_colour').set('#888');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('navigation_top_bottom_padding').set('8px');
        api.instance('navigation_position').set('navigation-left');
        api.instance('header_background').set('#222');

        api.instance('logo_text').set('Creative');
        api.instance('logo_font_weight').set('400');
        api.instance('logo_colour').set('#fff');
        api.instance('logo_font').set('Bangers');
        api.instance('logo_font_letterspacing').set('0px');
        api.instance('logo_font_size').set('24px');
        api.instance('mini_logo_font_size').set('24px');


        api.instance('layout').set('floating_right');

        api.instance('menu_footer').set("");
        api.instance('copyright_footer').set("");

        // Set Page 
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11242");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-25" ).click(function() {
        reset_customizer();

        api.instance('navigation_font').set('Open Sans');
        api.instance('navigation_font_size').set('11px');
        api.instance('navigation_font_colour').set('#aaa');
        api.instance('header_hover_over_content').set(true);
        api.instance('navigation_font_letter_spacing').set('1px');
        api.instance('navigation_font_weight').set('600');
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('logo_padding').set('30px');
        api.instance('header_background').set('#222');
        api.instance('scrolled_header_background').set('#222');
        api.instance('submenu_style').set('submenu-flat');

        api.instance('menu_active_font_colour').set("#fff");

        api.instance('logo_text').set('Creative');
        api.instance('logo_font_weight').set('400');
        api.instance('logo_colour').set('#fff');
        api.instance('logo_font').set('Bangers');
        api.instance('logo_font_letterspacing').set('0px');
        api.instance('logo_font_size').set('24px');
        api.instance('mini_logo_font_size').set('24px');


        api.instance('layout').set('freefloating_top');

                api.instance('menu_footer').set("");
        api.instance('copyright_footer').set("");

        // Set Page 
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11242");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-26" ).click(function() {
        reset_customizer();
        corporate_logo();

        api.instance('navigation_font').set('Open Sans');
        api.instance('navigation_font_size').set('13px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('None');
        api.instance('navigation_top_bottom_padding').set('20px');
        api.instance('header_padding').set('20px');
        api.instance('navigation_position').set('navigation-left');

        api.instance('purchase_button').set('enable');
        api.instance('purchase_button_text').set('Request a quote');

    
        api.instance('scrolled_header_shadow').set("enable");

        api.instance('menu_active_border_bottom').set("3px");

        // Dark sub-menu
        api.instance('submenu_background').set("#333");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('none');
        api.instance('submenu_font_size').set('11px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11168");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

   jQuery( "#style-27" ).click(function() {
        reset_customizer();

        api.instance('navigation_font').set('Open Sans');
        api.instance('navigation_font_size').set('13px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('None');
        api.instance('header_shadow').set("disable");
        api.instance('background_colour').set("#fff");
        api.instance('navigation_top_bottom_padding').set('50px');
        api.instance('header_seperator_style').set('normal');
        api.instance('header_seperator_position').set('bottom');
        api.instance('header_seperator_border').set('1px solid #e1e1e1');
        
        api.instance('logo_text').set('Portfolio');
        api.instance('logo_font_weight').set('400');
        api.instance('logo_font').set('Bangers');
        api.instance('logo_font_letterspacing').set('0px');
        api.instance('logo_font_size').set('34px');
        api.instance('mini_logo_font_size').set('24px');

        api.instance('purchase_button').set('enable');
        api.instance('purchase_button_text').set('Contact Me');

        // Dark sub-menu
        api.instance('submenu_background').set("#333");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11314");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

   jQuery( "#style-28" ).click(function() {
        reset_customizer();

        api.instance('navigation_font').set('Raleway');
        api.instance('navigation_font_size').set('12px');
        api.instance('navigation_font_letter_spacing').set('1px');
        api.instance('navigation_font_weight').set('600');
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('navigation_top_bottom_padding').set('40px');
        api.instance('header_background_opacity').set("0");
        api.instance('header_shadow').set("disable");
        api.instance('navigation_position').set('navigation-center');
        api.instance('logo_padding').set('10px');

        
        api.instance('logo_text').set('Creative');
        api.instance('logo_font_weight').set('400');
        api.instance('logo_font').set('Bangers');
        api.instance('logo_font_letterspacing').set('0px');
        api.instance('logo_font_size').set('40px');
        api.instance('mini_logo_font_size').set('24px');

        api.instance('menu_active_bg_colour').set('#222');
        api.instance('menu_active_font_colour').set('#fff');

        // Dark sub-menu
        api.instance('submenu_background').set("#222");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        api.instance('purchase_button').set('enable');
        api.instance('purchase_button_text').set('Contact Me');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11248");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-29" ).click(function() {
        reset_customizer();


        api.instance('navigation_font_colour').set('#ccc');
        api.instance('navigation_top_bottom_padding').set('14px');
        api.instance('header_background').set("#2a2a2a");
        api.instance('header_shadow').set("disable");
        api.instance('navigation_position').set('navigation-left');
        api.instance('layout').set('side_right');

        api.instance('menu_active_bg_colour').set('#111');
        api.instance('menu_active_font_colour').set('#fff');
        api.instance('navigation_search').set('enable');

        api.instance('logo_text').set('Creative');
        api.instance('logo_font_weight').set('400');
        api.instance('logo_font').set('Bangers');
        api.instance('logo_colour').set('#fff');
        api.instance('logo_font_letterspacing').set('0px');
        api.instance('logo_font_size').set('40px');
        api.instance('mini_logo_font_size').set('24px');

        // Dark sub-menu
        api.instance('submenu_background').set("#111");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        api.instance('menu_footer').set('');
        api.instance('copyright_footer').set('');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11299");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-30" ).click(function() {
        reset_customizer();

        api.instance('navigation_font').set('Raleway');
        api.instance('navigation_font_size').set('13px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('none');
        api.instance('navigation_top_bottom_padding').set('12px');

        
        api.instance('logo_text').set('Creative');
        api.instance('logo_font_weight').set('400');
        api.instance('logo_font').set('Bangers');
        api.instance('logo_font_letterspacing').set('0px');
        api.instance('logo_font_size').set('30px');
        api.instance('logo_colour').set('#222');
        api.instance('mini_logo_font_size').set('24px');

        api.instance('layout').set('freefloating_left');

        api.instance('menu_active_bg_colour').set('#222');
        api.instance('menu_active_font_colour').set('#fff');

        // Dark sub-menu
        api.instance('submenu_background').set("#222");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        api.instance('copyright_font_colour').set('dark');

        // Footer
        api.instance('menu_footer').set('');
        api.instance('copyright_footer_background_colour').set('#fff');

        api.instance('purchase_button').set('enable');
        api.instance('purchase_button_text').set('HIRE US');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11248");


        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-31" ).click(function() {
        reset_customizer();

        api.instance('navigation_font').set('Raleway');
        api.instance('navigation_font_size').set('12px');
        api.instance('navigation_font_letter_spacing').set('1px');
        api.instance('navigation_font_colour').set('#aaa');
        api.instance('navigation_font_weight').set('600');
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('navigation_top_bottom_padding').set('12px');
        api.instance('header_background').set('#222');
        api.instance('navigation_position').set('navigation-center');
        api.instance('background_colour').set('#2d2d2d');
        api.instance('menu_active_bg_colour').set('#fff');
        api.instance('menu_active_font_colour').set('#333');


        
        api.instance('logo_text').set('Creative');
        api.instance('logo_font_weight').set('400');
        api.instance('logo_font').set('Bangers');
        api.instance('logo_colour').set('#fff');
        api.instance('logo_font_letterspacing').set('0px');
        api.instance('logo_font_size').set('24px');
        api.instance('mini_logo_font_size').set('24px');

        api.instance('layout').set('floating_right');
        api.instance('submenu_style').set('submenu-flat');
        api.instance('purchase_button').set('enable');
        api.instance('purchase_button_text').set('HIRE US');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11248");


        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

   jQuery( "#style-32" ).click(function() {
        reset_customizer();
        creative_logo();

        api.instance('navigation_font').set('Open Sans');
        api.instance('navigation_font_size').set('11px');
        api.instance('navigation_font_letter_spacing').set('2px');
        api.instance('navigation_font_weight').set('600');
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('navigation_font_colour').set('#999');
        api.instance('navigation_top_bottom_padding').set('50px');
        api.instance('header_background').set("#222");
        api.instance('header_shadow').set("disable");
        api.instance('navigation_position').set('navigation-center');
        api.instance('logo_colour').set('#fff');
        api.instance('logo_font_size').set('38px');
        api.instance('logo_padding').set('20px');
        api.instance('header_sticky').set('disable');

        api.instance('navigation_left_right_padding').set('20px');
        api.instance('menu_active_font_colour').set('#fff');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11312");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-33" ).click(function() {
        reset_customizer();
        creative_logo();

        api.instance('logo_colour').set('#fff');

        api.instance('navigation_font').set('Raleway');
        api.instance('navigation_font_size').set('11px');
        api.instance('navigation_font_letter_spacing').set('2px');
        api.instance('navigation_font_weight').set('600');
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('navigation_font_colour').set('#fff');
        api.instance('navigation_scrolled_font_colour').set('#333');
        api.instance('navigation_top_bottom_padding').set('50px');
        api.instance('header_background').set("#111");
        api.instance('header_background_opacity').set("0.6");
        api.instance('header_shadow').set("disable");
        api.instance('header_hover_over_content').set(true);
        api.instance('submenu_inner_shadow').set('0');
        
        api.instance('logo_padding').set('20px');
        api.instance('heading_font').set('Raleway');
        api.instance('global_font').set('Raleway');
        api.instance('heading_weight').set('300');
        api.instance('heading_transform').set('uppercase');


        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11312");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-34" ).click(function() {
        reset_customizer();

        api.instance('navigation_font').set('Raleway');
        api.instance('navigation_font_size').set('11px');
        api.instance('navigation_font_letter_spacing').set('1px');
        api.instance('navigation_font_weight').set('600');
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('navigation_font_colour').set('#555');
        api.instance('header_background_opacity').set("0");
        api.instance('header_shadow').set("disable");
        api.instance('navigation_position').set('navigation-right');
        api.instance('navigation_top_bottom_padding').set('50px');

        api.instance('purchase_button').set('enable');
        api.instance('purchase_button_text').set('Contact Me');
        api.instance('menu_active_border_bottom').set('3px');
        api.instance('background_colour').set('#fff');

         api.instance('enable_rainbow_bar').set(true);

        // Set Page
        api.instance('header_seperator_position').set("bottom");
        api.instance('header_seperator_border').set("1px solid #ccc");

    
        api.instance('logo_text').set('Creative');
        api.instance('logo_font_weight').set('400');
        api.instance('logo_font').set('Pacifico');
        api.instance('logo_font_size').set('30px');
        api.instance('logo_colour').set('#555');

        api.instance('heading_font').set('Raleway');
        api.instance('global_font').set('Raleway');
        api.instance('heading_weight').set('300');

        // Dark sub-menu
        api.instance('submenu_background').set("#333");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11248");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });
    
    jQuery( "#style-35" ).click(function() {
        reset_customizer();

        api.instance('navigation_font_size').set('13px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('normal');
        api.instance('navigation_font_colour').set('#555');
        api.instance('navigation_top_bottom_padding').set('8px');
        api.instance('navigation_position').set('navigation-right');
        api.instance('layout').set("floating_left");
        api.instance('header_hover_over_content').set(true);
        api.instance('navigation_position').set('navigation-center');

        api.instance('menu_active_bg_colour').set('#f5f5f5');
        api.instance('menu_active_font_colour').set('#222');
        api.instance('navigation_top_bottom_padding').set('15px');

        api.instance('menu_active_font_colour').set('#222');
        api.instance('navigation_top_bottom_padding').set('15px');
        api.instance('navigation_seperator_position').set('bottom');
        api.instance('navigation_seperator_border').set('1px solid #f1f1f1');
            
        api.instance('logo_text').set('Creative');
        api.instance('logo_font_weight').set('400');
        api.instance('logo_font').set('Bangers');
        api.instance('logo_font_letterspacing').set('0px');
        api.instance('logo_font_size').set('44px');
        api.instance('logo_colour').set('#555');


        api.instance('purchase_button').set('enable');
        api.instance('purchase_button_text').set('HIRE US');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11248");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-36" ).click(function() {
        reset_customizer();

        api.instance('navigation_font').set('Oswald');
        api.instance('navigation_font_size').set('14px');
        api.instance('navigation_font_letter_spacing').set('1px');
        api.instance('navigation_font_weight').set('300');
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('navigation_font_colour').set('#555');
        api.instance('navigation_position').set('navigation-right');

            
        api.instance('logo_text').set('Creative');
        api.instance('logo_font_weight').set('400');
        api.instance('logo_font').set('Bangers');
        api.instance('logo_font_letterspacing').set('0px');
        api.instance('logo_font_size').set('44px');
        api.instance('logo_colour').set('#555');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11310");

        api.instance('purchase_button').set('enable');
        api.instance('purchase_button_text').set('REQUEST A QUOTE');

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });
    

    jQuery( "#style-37" ).click(function() {
        reset_customizer();

        api.instance('navigation_font').set('Open Sans');
        api.instance('navigation_font_size').set('11px');
        api.instance('navigation_font_letter_spacing').set('1px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('header_background').set("#fff");
        api.instance('header_hover_over_content').set(true);
        api.instance('header_shadow').set("disable");
        api.instance('layout').set('freefloating_top');
        
        api.instance('logo_text').set('Creative');
        api.instance('logo_font_weight').set('400');
        api.instance('logo_font').set('Bangers');
        api.instance('logo_font_letterspacing').set('0px');
        api.instance('logo_font_size').set('34px');
        api.instance('mini_logo_font_size').set('24px');
        api.instance('logo_padding').set('24px');

        // Dark sub-menu
        api.instance('submenu_background').set("#333");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        api.instance('purchase_button').set('enable');
        api.instance('purchase_button_text').set('REQUEST A QUOTE');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11310");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-38" ).click(function() {
        reset_customizer();

        api.instance('navigation_font').set('Open Sans');
        api.instance('navigation_font_size').set('11px');
        api.instance('navigation_font_letter_spacing').set('1px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('uppercase');

        api.instance('navigation_search').set('enable');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11248");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#style-39" ).click(function() {
        reset_customizer();
        corporate_logo();

        api.instance('navigation_font_size').set('10px');
        api.instance('navigation_font_letter_spacing').set('2px');
        api.instance('navigation_font_weight').set('600');
        api.instance('navigation_font_colour').set('#aaa');
        api.instance('navigation_font_transform').set('uppercase');

        api.instance('enable_contact_bar').set('enable');
        api.instance('contact_bar_right').set('<li>[icon name="facebook"]</li><li>[icon name="twitter"]</li><li>[icon name="linkedin"]</li><li>[icon name="instagram"]</li><li>[icon name="youtube"]</li>');

        api.instance('menu_active_bg_colour').set("#333");
        api.instance('menu_active_font_colour').set("#fff");

        // Dark sub-menu
        api.instance('submenu_background').set("#333");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff');
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11168");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#style-40" ).click(function() {
        reset_customizer();
        creative_logo();

        api.instance('logo_colour').set('#fff');

        api.instance('navigation_font_size').set('12px');
        api.instance('navigation_font_letter_spacing').set('2px');
        api.instance('navigation_font_weight').set('600');
        api.instance('navigation_font_colour').set('#fff');
        api.instance('navigation_scrolled_font_colour').set('#333');
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('navigation_left_right_padding').set('25px');
        api.instance('navigation_top_bottom_padding').set('25px');
        api.instance('logo_padding').set('12px');

        api.instance('header_background_opacity').set('0');
        api.instance('header_hover_over_content').set(true);
        api.instance('header_shadow').set('disable');

        api.instance('navigation_seperator_position').set('right');
        api.instance('navigation_seperator_border').set('1px solid #fff');
        api.instance('header_seperator_position').set('bottom');
        api.instance('header_seperator_border').set('1px solid #fff');
        api.instance('header_seperator_style').set('full');
        api.instance('submenu_inner_shadow').set('0');

        api.instance('menu_active_bg_colour').set('#fff');
        api.instance('menu_active_font_colour').set('#333');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11312");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#style-41" ).click(function() {
        reset_customizer();
        corporate_logo();

        api.instance('logo_colour').set('#fff');

        api.instance('navigation_font').set('Roboto');
        api.instance('navigation_font_size').set('11px');
        api.instance('navigation_font_letter_spacing').set('2px');
        api.instance('navigation_font_weight').set('800');
        api.instance('navigation_font_colour').set('#fff');
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('header_background').set('#333');

        api.instance('scrolled_header_background').set('#000');
        api.instance('scrolled_header_background_opacity').set('0.7');

        api.instance('menu_active_font_colour').set("#fff");
        api.instance('menu_active_bg_colour').set("#111");
        api.instance('menu_active_bg_colour_opacity').set("0.5");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11168");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#style-42" ).click(function() {
        reset_customizer();
        creative_logo();

        api.instance('logo_colour').set('#fff');

        api.instance('navigation_font').set('Oswald');
        api.instance('navigation_font_size').set('14px');
        api.instance('navigation_font_letter_spacing').set('0.5px');
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_colour').set('#fff');
        api.instance('navigation_scrolled_font_colour').set('#333');
        api.instance('navigation_top_bottom_padding').set('50px');
        api.instance('navigation_left_right_padding').set('20px');
        api.instance('header_hover_over_content').set(true);
        api.instance('header_background_opacity').set('0');
        api.instance('header_seperator_position').set('bottom');
        api.instance('header_seperator_border').set('1px solid #fff');
        api.instance('header_shadow').set('disable');
        api.instance('menu_active_bg_colour').set('#333');
        api.instance('menu_active_font_colour').set('#fff');
        api.instance('logo_font_size').set('18px');

        // Dark sub-menu
        api.instance('submenu_background').set("#333");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff');
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set('#fff');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11312");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });
    
    jQuery( "#style-43" ).click(function() {
        reset_customizer();

        api.instance('navigation_font').set('PT Sans');
        api.instance('navigation_font_size').set('12px');
        api.instance('navigation_font_letter_spacing').set('1px');
        api.instance('navigation_font_active_colour').set('#000');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_colour').set('#555');
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('header_background_opacity').set('0');
        api.instance('header_border_position').set('bottom');
        api.instance('header_border').set('1px solid rgba(0,0,0,0.4)');
        api.instance('header_shadow').set('disable');


        api.instance('logo_text').set('-COMPANY-');
        api.instance('logo_font_weight').set('600');
        api.instance('logo_colour').set('#555');
        api.instance('logo_font').set('Raleway');
        api.instance('logo_font_size').set('18px');
        api.instance('logo_padding').set('12px');
        api.instance('logo_font_letterspacing').set('5px');



        // Set Page
        api.instance('show_on_front').set("post");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });
    
    jQuery( "#style-44" ).click(function() {
        reset_customizer();

        api.instance('navigation_font').set('PT Sans');
        api.instance('navigation_font_size').set('12px');
        api.instance('navigation_font_letter_spacing').set('1px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_colour').set('#555');
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('header_background_opacity').set('0');
        api.instance('header_seperator_position').set('right');
        api.instance('header_seperator_border').set('1px solid rgba(0,0,0,0.4)');
        api.instance('header_shadow').set('disable');
        api.instance('navigation_top_bottom_padding').set('12px');
        api.instance('layout').set('side_left');

        api.instance('logo_text').set('CREATIVE');
        api.instance('logo_font_weight').set('600');
        api.instance('logo_colour').set('#555');
        api.instance('logo_font').set('Raleway');
        api.instance('logo_font_size').set('18px');
        api.instance('logo_font_letterspacing').set('5px');

       // Dark sub-menu
        api.instance('submenu_background').set("#333");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        api.instance('menu_footer').set("");
        api.instance('copyright_footer_background_colour').set("#f7f7f7");
        api.instance('copyright_font_colour').set("dark");

        api.instance('navigation_search').set('enable');


        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11319");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-45" ).click(function() {
        reset_customizer();

        api.instance('navigation_font').set('Lato');
        api.instance('navigation_font_size').set('14px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_active_colour').set('#000');
        api.instance('navigation_font_weight').set('600');
        api.instance('navigation_font_colour').set('#555');
        api.instance('navigation_font_transform').set('none');
        api.instance('header_background_opacity').set('1');
        api.instance('header_background').set('#e5e5e5');
        api.instance('header_border_position').set('left');
        api.instance('header_border').set('1px solid rgba(0,0,0,0.4)');
        api.instance('header_shadow').set('disable');
        api.instance('navigation_top_bottom_padding').set('12px');
        api.instance('layout').set('side_right');
        api.instance('navigation_position').set('navigation-left');

        api.instance('logo_text').set('-COMPANY-');
        api.instance('logo_font_weight').set('600');
        api.instance('logo_colour').set('#555');
        api.instance('logo_font').set('Raleway');
        api.instance('logo_font_size').set('18px');
        api.instance('logo_font_letterspacing').set('5px');

       // Dark sub-menu
        api.instance('submenu_background').set("#333");
        api.instance('submenu_font_colour').set('#999');
        api.instance('megamenu_heading_colour').set('#fff');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('11px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0.5px');
        api.instance('submenu_style').set("submenu-flat");



        // Set Page
        api.instance('show_on_front').set("post");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-46" ).click(function() {
        reset_customizer();

        api.instance('navigation_font').set('Lato');
        api.instance('navigation_font_size').set('10px');
        api.instance('navigation_font_letter_spacing').set('2px');
        api.instance('navigation_font_weight').set('600');
        api.instance('navigation_font_colour').set('#555');
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('header_background_opacity').set('0');
        api.instance('header_background').set('#fff');
        api.instance('header_seperator_position').set('left');
        api.instance('header_seperator_border').set('1px solid rgba(0,0,0,0.4)');
        api.instance('header_shadow').set('disable');
        api.instance('navigation_top_bottom_padding').set('12px');
        api.instance('layout').set('freefloating_right');
        api.instance('navigation_position').set('navigation-left');

        api.instance('logo_text').set('CREATIVE');
        api.instance('logo_font_weight').set('600');
        api.instance('logo_colour').set('#555');
        api.instance('logo_font').set('Raleway');
        api.instance('logo_font_size').set('18px');
        api.instance('logo_font_letterspacing').set('5px');

       // Dark sub-menu
        api.instance('submenu_background').set("#333");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        api.instance('navigation_search').set('enable');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11248");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-47" ).click(function() {
        reset_customizer();

        api.instance('navigation_font').set('Open Sans');
        api.instance('navigation_font_size').set('13px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_colour').set('#555');
        api.instance('navigation_font_transform').set('none');
        api.instance('layout').set('freefloating_top');
        api.instance('navigation_position').set('navigation-right');

        api.instance('logo_text').set('CREATIVE');
        api.instance('logo_font_weight').set('600');
        api.instance('logo_colour').set('#555');
        api.instance('logo_font').set('Raleway');
        api.instance('logo_font_size').set('18px');
        api.instance('logo_font_letterspacing').set('5px');

        api.instance('menu_active_bg_colour').set("#333");
        api.instance('menu_active_font_colour').set("#fff");

        api.instance('menu_active_arrow').set("middle");
        api.instance('menu_active_arrow_colour').set("#333");
        api.instance('menu_active_arrow_size').set("12px");



        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11319");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    
    jQuery( "#style-48" ).click(function() {
        reset_customizer();

        api.instance('navigation_font').set('Oswald');
        api.instance('navigation_font_size').set('14px');
        api.instance('navigation_font_letter_spacing').set('1px');
        api.instance('navigation_font_weight').set('300');
        api.instance('navigation_font_colour').set('#555');
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('header_background_opacity').set('0');
        api.instance('header_background').set('#fff');
        api.instance('header_seperator_position').set('top_bottom');
        api.instance('header_seperator_border').set('1px solid rgba(0,0,0,0.4)');
        api.instance('header_shadow').set('disable');
        api.instance('navigation_position').set('navigation-center');
        api.instance('header_sticky').set("disable");

        api.instance('logo_padding').set('40px');

        api.instance('logo_text').set('-PORTFOLIO-');
        api.instance('logo_font_weight').set('600');
        api.instance('logo_colour').set('#555');
        api.instance('logo_font').set('Raleway');
        api.instance('logo_font_size').set('18px');
        api.instance('logo_font_letterspacing').set('5px');

        api.instance('menu_active_bg_colour').set('#333');
        api.instance('menu_active_font_colour').set('#fff');

       // Dark sub-menu
        api.instance('submenu_background').set("#333");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11314");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-49" ).click(function() {
        reset_customizer();

        api.instance('header_background_opacity').set('0');
        api.instance('header_background').set('#fff');
        api.instance('navigation_seperator_position').set('right');
        api.instance('navigation_seperator_border').set('1px solid #ccc');
        api.instance('header_shadow').set('disable');
        api.instance('navigation_position').set('navigation-center');
        api.instance('header_sticky').set("disable");
        api.instance('navigation_left_right_padding').set("35px");
        api.instance('navigation_top_bottom_padding').set("12px");
        api.instance('header_padding').set("30px");
        api.instance('mega_menu_heading_colour').set("#fff");

        api.instance('logo_padding').set('40px');

        api.instance('menu_active_bg_colour').set("#29ABE2");
        api.instance('menu_active_font_colour').set("#fff");
        api.instance('logo_text').set('Creative');
        api.instance('logo_font_weight').set('600');
        api.instance('logo_colour').set('#555');
        api.instance('logo_font').set('Pacifico');
        api.instance('logo_font_size').set('28px');

       // Dark sub-menu
        api.instance('submenu_background').set("#333");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('11px');
        api.instance('submenu_hover_font_colour').set('#fff');
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0.5px');
        api.instance('submenu_style').set("submenu-flat");

        api.instance('menu_active_arrow').set("middle");
        api.instance('menu_active_arrow_colour').set("#29abe2");
        api.instance('menu_active_arrow_size').set("12px");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11248");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });
    
    jQuery( "#style-50" ).click(function() {
        reset_customizer();

        api.instance('navigation_seperator_position').set('right');
        api.instance('navigation_seperator_border').set('1px solid #e5e5e5');

        // Dark sub-menu
        api.instance('submenu_background').set("#333");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('11px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0.5px');
        api.instance('submenu_style').set("submenu-flat");

        api.instance('menu_active_bg_colour').set("#333");
        api.instance('menu_active_font_colour').set("#fff");

        api.instance('purchase_button').set('enable');
        api.instance('purchase_button_text').set('REQUEST A QUOTE');

        api.instance('mega_menu_heading_colour').set("#fff");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11248");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-51" ).click(function() {
        reset_customizer();

        api.instance('navigation_font').set('Open Sans');
        api.instance('navigation_font_size').set('13px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('None');
        api.instance('navigation_font_colour').set('#ccc');
        api.instance('navigation_top_bottom_padding').set('10px');
        api.instance('header_background').set('#222');
        api.instance('header_shadow').set('disable');
        api.instance('layout').set('side_left');
        api.instance('navigation_position').set('navigation-center');

        
        api.instance('logo_text').set('Creative');
        api.instance('logo_colour').set('#fff');
        api.instance('logo_font_weight').set('400');
        api.instance('logo_font').set('Bangers');
        api.instance('logo_font_letterspacing').set('0px');
        api.instance('logo_font_size').set('24px');
        api.instance('mini_logo_font_size').set('24px');

        api.instance('menu_active_bg_colour').set('#2a2a2a');
        api.instance('menu_active_font_colour').set('#fff');

        // Dark sub-menu
        api.instance('submenu_background').set("#2a2a2a");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        api.instance('menu_footer').set("");
        api.instance('copyright_footer').set("");

        // Set Page 
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11242");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-52" ).click(function() {
        reset_customizer();

        api.instance('navigation_font').set('Open Sans');
        api.instance('navigation_font_size').set('11px');
        api.instance('navigation_font_letter_spacing').set('1px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('navigation_font_colour').set('#ccc');
        api.instance('navigation_top_bottom_padding').set('10px');
        api.instance('header_background').set('#222');
        api.instance('header_shadow').set('disable');
        api.instance('layout').set('freefloating_left');
        api.instance('navigation_position').set('navigation-center');

        
        api.instance('logo_text').set('Creative');
        api.instance('logo_colour').set('#fff');
        api.instance('logo_font_weight').set('400');
        api.instance('logo_font').set('Bangers');
        api.instance('logo_font_letterspacing').set('0px');
        api.instance('logo_font_size').set('24px');
        api.instance('mini_logo_font_size').set('24px');

        // Dark sub-menu
        api.instance('submenu_background').set("#333");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        api.instance('menu_footer').set("");
        api.instance('copyright_footer').set("");

        // Set Page 
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11242");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-53" ).click(function() {
        reset_customizer();

        // Dark sub-menu
        api.instance('submenu_background').set("#222");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");

        api.instance('menu_footer').set("");
        api.instance('copyright_footer').set("");

        api.instance('mega_menu_heading_colour').set("#fff");

        // Set Page 
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11242");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-54" ).click(function() {
        reset_customizer();

        api.instance('navigation_font').set('Open Sans');
        api.instance('navigation_font_size').set('11px');
        api.instance('navigation_font_letter_spacing').set('1px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('navigation_font_colour').set('#ccc');
        api.instance('header_background').set('#222');

        api.instance('menu_footer').set("");
        api.instance('copyright_footer').set("");

        // Set Page 
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11242");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-55" ).click(function() {
        reset_customizer();

        api.instance('navigation_top_bottom_padding').set("50px");
        api.instance('header_shadow').set("disable");
        api.instance('navigation_position').set("navigation-center");


        // Dark sub-menu
        api.instance('submenu_background').set("#222");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");
        api.instance('menu_footer').set("");
        api.instance('copyright_footer').set("");

        // Set Page 
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11242");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-56" ).click(function() {
        reset_customizer();    
        api.instance('header_shadow').set("disable");
        api.instance('header_background_opacity').set("0.7");
        api.instance('navigation_position').set("navigation-center");
        api.instance('layout').set("side_right");
        api.instance('navigation_top_bottom_padding').set("15px");

        // Dark sub-menu
        api.instance('submenu_background').set("#222");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        api.instance('menu_footer').set("");
        api.instance('copyright_footer').set("");

        // Set Page 
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11242");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-57" ).click(function() {
        reset_customizer();    
        api.instance('header_shadow').set("disable");
        api.instance('layout').set("freefloating_top");
        api.instance('header_hover_over_content').set(true);

        // Dark sub-menu
        api.instance('submenu_background').set("#222");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        api.instance('menu_footer').set("");
        api.instance('copyright_footer').set("");

        // Set Page 
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11242");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-58" ).click(function() {
        reset_customizer();    
        api.instance('header_shadow').set("disable");
        api.instance('layout').set("freefloating_top");
        api.instance('header_hover_over_content').set(true);
        api.instance('header_background').set("#333");
        api.instance('navigation_font_colour').set("#ccc");

        api.instance('menu_footer').set("");
        api.instance('copyright_footer').set("");

        // Set Page 
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11242");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-59" ).click(function() {
        reset_customizer();    

        // Set Page 
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("4069");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-60" ).click(function() {
        reset_customizer();    

        api.instance('layout').set("side_left");
        api.instance('navigation_position').set("navigation-center");
        api.instance('navigation_top_bottom_padding').set("10px");

        // Set Page 
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("4069");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-61" ).click(function() {
        reset_customizer();    

        api.instance('header_background_opacity').set("0");
        api.instance('header_shadow').set("disable");

        // Dark sub-menu
        api.instance('submenu_background').set("#222");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");

        // Set Page 
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11327");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-62" ).click(function() {
        reset_customizer();    

        api.instance('layout').set("floating_right");
        api.instance('navigation_position').set("navigation-center");
        api.instance('navigation_top_bottom_padding').set("10px");

        // Set Page 
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("4069");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#style-63" ).click(function() {
        reset_customizer();    

        api.instance('layout').set("freefloating_left");
        api.instance('navigation_position').set("navigation-center");
        api.instance('navigation_top_bottom_padding').set("10px");

        // Set Page 
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("4069");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#style-64" ).click(function() {
        reset_customizer();    

        api.instance('navigation_position').set("navigation-center");
        api.instance('navigation_top_bottom_padding').set("40px");

        // Set Page 
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("4069");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#style-65" ).click(function() {
        reset_customizer();    

        api.instance('header_background_opacity').set("0");
        api.instance('header_shadow').set("disable");
        api.instance('navigation_position').set("navigation-center");
        api.instance('navigation_top_bottom_padding').set("40px");
        api.instance('navigation_seperator').set("bottom");
        api.instance('navigation_seperator_border').set("1px solid #ccc");

        // Set Page 
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("4069");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#style-66" ).click(function() {
        reset_customizer();    

        api.instance('header_background_opacity').set("0");
        api.instance('header_shadow').set("disable");
        api.instance('navigation_position').set("navigation-right");
        api.instance('navigation_top_bottom_padding').set("10px");
        api.instance('layout').set("side_left");

        // Set Page 
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11329");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#style-67" ).click(function() {
        reset_customizer();    

        api.instance('header_background_opacity').set("0");
        api.instance('header_shadow').set("disable");
        api.instance('navigation_position').set("navigation-left");
        api.instance('navigation_top_bottom_padding').set("10px");
        api.instance('layout').set("freefloating_right");

        // Set Page 
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11329");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-68" ).click(function() {
        reset_customizer();
        corporate_logo();

        api.instance('navigation_font').set('Open Sans');
        api.instance('navigation_font_size').set('13px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('none');
        api.instance('navigation_seperator_position').set('right');
        api.instance('navigation_seperator_border').set('1px solid #e5e5e5');
        api.instance('navigation_left_right_padding').set('16px');

        api.instance('menu_active_bg_colour').set("#29abe2");
        api.instance('menu_active_font_colour').set("#ffffff");
        api.instance('menu_active_arrow').set("middle");
        api.instance('menu_active_arrow_size').set("12px");
        api.instance('menu_active_arrow_colour').set("#29abe2");


        api.instance('menu_active_border_bottom').set("3px");


        api.instance('enable_contact_bar').set('enable');
        api.instance('contact_bar_right').set('<li>[icon name="facebook"]</li><li>[icon name="twitter"]</li><li>[icon name="linkedin"]</li><li>[icon name="instagram"]</li><li>[icon name="youtube"]</li>');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11168");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-69" ).click(function() {
        reset_customizer();
        corporate_logo();

        api.instance('navigation_seperator_position').set('right');
        api.instance('navigation_seperator_border').set('1px solid #e5e5e5');
        api.instance('navigation_left_right_padding').set('25px');
        api.instance('navigation_top_bottom_padding').set('25px');

        api.instance('menu_active_bg_colour').set("#222");
        api.instance('menu_active_font_colour').set("#fff");


        api.instance('enable_contact_bar').set('enable');
        api.instance('contact_bar_right').set('<li>[icon name="facebook"]</li><li>[icon name="twitter"]</li><li>[icon name="linkedin"]</li><li>[icon name="instagram"]</li><li>[icon name="youtube"]</li>');

        // Dark sub-menu
        api.instance('submenu_background').set("#222");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11168");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-70" ).click(function() {
        reset_customizer();
        corporate_logo();

        api.instance('header_background').set('#222');
        api.instance('scrolled_header_background').set('#222');
        api.instance('navigation_font_colour').set('#aaa');
        api.instance('navigation_seperator_position').set('right');
        api.instance('navigation_seperator_border').set('1px solid #333');
        api.instance('navigation_left_right_padding').set('25px');
        api.instance('navigation_top_bottom_padding').set('25px');

        api.instance('header_shadow').set('disable');
        api.instance('submenu_inner_shadow').set('0');

        api.instance('menu_active_bg_colour').set("#fff");
        api.instance('menu_active_font_colour').set("#222");

        api.instance('logo_colour').set('#fff');
        api.instance('mini_logo_colour').set('#fff');
        
        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11168");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-71" ).click(function() {
        reset_customizer();
        corporate_logo();

        api.instance('navigation_seperator_position').set('right');
        api.instance('navigation_seperator_border').set('1px solid #e5e5e5');
        api.instance('navigation_left_right_padding').set('25px');
        api.instance('navigation_top_bottom_padding').set('12px');
        api.instance('header_padding').set('35px');

        api.instance('enable_contact_bar').set('enable');
        api.instance('contact_bar_right').set('<li>[icon name="facebook"]</li><li>[icon name="twitter"]</li><li>[icon name="linkedin"]</li><li>[icon name="instagram"]</li><li>[icon name="youtube"]</li>');

        api.instance('menu_active_bg_colour').set("#29abe2");
        api.instance('menu_active_font_colour').set("#fff");

        // Dark sub-menu
        api.instance('submenu_background').set("#29abe2");
        api.instance('submenu_font_colour').set('#fff');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11168");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });


    jQuery( "#style-72" ).click(function() {
        reset_customizer();
        corporate_logo();

        api.instance('logo_colour').set('#fff');
        api.instance('mini_logo_colour').set('#fff');

        api.instance('navigation_font_colour').set('#fff');
        api.instance('navigation_seperator_position').set('right');
        api.instance('navigation_seperator_border').set('1px solid #ccc');
        api.instance('navigation_left_right_padding').set('25px');
        api.instance('navigation_top_bottom_padding').set('12px');
        api.instance('header_padding').set('35px');
        api.instance('header_background').set('#29abe2');
        api.instance('scrolled_header_background').set('#29abe2');

        api.instance('header_seperator_position').set('bottom');
        api.instance('header_seperator_border').set('1px solid rgba(255,255,255,0.3)');
        api.instance('header_seperator_style').set('full');
        api.instance('header_shadow').set('disable');

        api.instance('menu_active_bg_colour').set('#fff');
        api.instance('menu_active_font_colour').set('#222');
        api.instance('submenu_inner_shadow').set('0');


        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11168");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-73" ).click(function() {
        reset_customizer();
        corporate_logo();

        api.instance('logo_colour').set('#fff');
        api.instance('mini_logo_colour').set('#fff');
        api.instance('navigation_font_colour').set('#fff');
        api.instance('navigation_left_right_padding').set('25px');
        api.instance('header_background').set('#29abe2');
        api.instance('scrolled_header_background').set('#29abe2');

        api.instance('menu_active_bg_colour').set('#222');
        api.instance('menu_active_font_colour').set('#fff');

        // Dark sub-menu
        api.instance('submenu_background').set("#222");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11168");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-74" ).click(function() {
        reset_customizer();
        creative_logo();

        api.instance('logo_colour').set('#fff');
        api.instance('mini_logo_colour').set('#fff');
        api.instance('layout').set('side_left');
        api.instance('navigation_top_bottom_padding').set('12px');
        api.instance('header_background_opacity').set('0');
        api.instance('navigation_font_colour').set('#fff');
        api.instance('header_shadow').set('disable');

        api.instance('menu_active_font_colour').set('#fff');
        api.instance('menu_active_font_colour_opacity').set('0.7');

        // Dark sub-menu
        api.instance('submenu_background').set("#222");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set('#fff');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11312");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#style-75" ).click(function() {
        reset_customizer();
        creative_logo();

        api.instance('logo_colour').set('#fff');
        api.instance('mini_logo_colour').set('#fff');
        api.instance('layout').set('side_left');
        api.instance('navigation_top_bottom_padding').set('12px');
        api.instance('header_background').set('#333');
        api.instance('navigation_font_colour').set('#fff');
        api.instance('header_shadow').set('disable');
        api.instance('navigation_font').set('Oswald');

        api.instance('menu_active_font_colour').set('#fff');
        api.instance('menu_active_font_colour_opacity').set('0.7');

        // Dark sub-menu
        api.instance('submenu_background').set("#222");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set('#fff');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11312");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#style-76" ).click(function() {
        reset_customizer();
        creative_logo();

        api.instance('logo_colour').set('#fff');
        api.instance('mini_logo_colour').set('#fff');
        api.instance('header_hover_over_content').set('true');
        api.instance('header_background_opacity').set('0.2');
        api.instance('navigation_font_colour').set('#fff');
        api.instance('header_shadow').set('disable');
        api.instance('navigation_font').set('Oswald');

        api.instance('menu_active_font_colour').set('#fff');
        api.instance('menu_active_font_colour_opacity').set('0.7');

        // Dark sub-menu
        api.instance('submenu_background').set("#222");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");

        api.instance('mega_menu_heading_colour').set('#fff');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11312");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#style-77" ).click(function() {
        reset_customizer();
        creative_logo();

        api.instance('logo_colour').set('#fff');
        api.instance('mini_logo_colour').set('#fff');
        api.instance('header_hover_over_content').set('true');
        api.instance('header_background').set('#333');
        api.instance('scrolled_header_background').set('#333');
        api.instance('navigation_font_colour').set('#fff');
        api.instance('header_shadow').set('disable');
        api.instance('layout').set('freefloating_right');
        api.instance('navigation_top_bottom_padding').set('12px');
        api.instance('navigation_position').set('navigation-center');

        api.instance('menu_active_font_colour').set('#fff');
        api.instance('menu_active_font_colour_opacity').set('0.7');

        // Dark sub-menu
        api.instance('submenu_background').set("#222");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set('#fff');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11312");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#style-78" ).click(function() {
        reset_customizer();
        creative_logo();

        api.instance('logo_colour').set('#fff');
        api.instance('mini_logo_colour').set('#fff');
        api.instance('header_hover_over_content').set('true');
        api.instance('header_background').set('#333');
        api.instance('scrolled_header_background').set('#333');
        api.instance('navigation_font_colour').set('#fff');
        api.instance('header_shadow').set('disable');
        api.instance('layout').set('freefloating_top');
        api.instance('header_radius').set('100px');

        api.instance('menu_active_font_colour').set('#fff');
        api.instance('menu_active_font_colour_opacity').set('0.7');

        // Dark sub-menu
        api.instance('submenu_background').set("#222");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('uppercase');
        api.instance('submenu_font_size').set('10px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("11312");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#style-79" ).click(function() {
        reset_customizer();
        corporate_logo();

        api.instance('enable_rainbow_bar').set('disable');
        api.instance('enable_alert').set(false);
        api.instance('purchase_button').set('enable');
        api.instance('purchase_button_text').set('Request Quote');
        api.instance('mega_menu_heading_colour').set('#000');
        api.instance('scrolled_header_shadow').set('enable');


        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("6892");

        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#style-80" ).click(function() {
        reset_customizer();
        corporate_logo();

        api.instance('enable_rainbow_bar').set('disable');
        api.instance('enable_alert').set(false);
        api.instance('purchase_button').set('enable');
        api.instance('purchase_button_text').set('Request Quote');
        api.instance('mega_menu_heading_colour').set('#000');
        api.instance('scrolled_header_shadow').set('enable');
        api.instance('header_shadow').set("disable");

        api.instance('navigation_font').set('Oswald');
        api.instance('sub_menu_font').set('Open Sans');
        api.instance('navigation_font_size').set('13px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('navigation_left_right_padding').set('20px');

        api.instance('menu_active_bg_colour').set("#333");
        api.instance('menu_active_font_colour').set("#fff");

        // Dark sub-menu
        api.instance('mega_menu_heading_colour').set('#fff');
        api.instance('submenu_background').set("#333");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_transform').set('none');
        api.instance('submenu_font_size').set('11px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("6892");

        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#style-81" ).click(function() {
        reset_customizer();
        corporate_logo();

        api.instance('enable_rainbow_bar').set('disable');
        api.instance('enable_alert').set(false);
        api.instance('purchase_button').set('enable');
        api.instance('purchase_button_text').set('Request Quote');
        api.instance('mega_menu_heading_colour').set('#000');
        api.instance('scrolled_header_shadow').set('enable');
        api.instance('navigation_font_transform').set('none');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_left_right_padding').set('20px');


        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("6892");

        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#style-82" ).click(function() {
        reset_customizer();
        corporate_logo();

        //api.instance('enable_rainbow_bar').set('disable');
        api.instance('enable_alert').set(false);
        api.instance('purchase_button').set('enable');
        api.instance('purchase_button_text').set('Request Quote');
        api.instance('mega_menu_heading_colour').set('#000');
        api.instance('scrolled_header_shadow').set('enable');
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('navigation_font_size').set('10px');
        api.instance('navigation_font_letter_spacing').set('2px');
        api.instance('navigation_left_right_padding').set('15px');
        api.instance('navigation_top_bottom_padding').set('45px');

        api.instance('navigation_font').set('raleway');

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("6892");

        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#style-83" ).click(function() {
        reset_customizer();
        corporate_logo();

        //api.instance('enable_rainbow_bar').set('disable');
         api.instance('header_shadow').set('disable');
        api.instance('enable_alert').set(false);
        api.instance('purchase_button').set('enable');
        api.instance('purchase_button_text').set('Request Quote');
        api.instance('mega_menu_heading_colour').set('#000');
        api.instance('scrolled_header_shadow').set('enable');
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('navigation_font_size').set('10px');
        api.instance('navigation_font_letter_spacing').set('2px');
        api.instance('navigation_left_right_padding').set('15px');
        api.instance('navigation_top_bottom_padding').set('45px');

        api.instance('navigation_font').set('raleway');

        api.instance('header_seperator_position').set('bottom');
        api.instance('header_seperator_border').set('1px solid #333');
        api.instance('header_seperator_style').set('full');

        // Dark sub-menu
        api.instance('submenu_background').set("#222");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_size').set('11px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("6892");

        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#style-84" ).click(function() {
        reset_customizer();
        corporate_logo();

        //api.instance('enable_rainbow_bar').set('disable');
        api.instance('header_shadow').set('disable');
        api.instance('enable_alert').set(false);
        api.instance('purchase_button').set('enable');
        api.instance('purchase_button_text').set('Request Quote');
        api.instance('mega_menu_heading_colour').set('#000');
        api.instance('scrolled_header_shadow').set('enable');
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('navigation_font_size').set('10px');
        api.instance('navigation_font_letter_spacing').set('2px');
        api.instance('navigation_left_right_padding').set('15px');
        api.instance('navigation_top_bottom_padding').set('55px');

        api.instance('navigation_font').set('raleway');

        api.instance('header_seperator_position').set('bottom');
        api.instance('header_seperator_border').set('1px solid #333');
        api.instance('header_seperator_style').set('normal');

        // Dark sub-menu
        api.instance('submenu_background').set("#222");
        api.instance('submenu_font_colour').set('#999');
        api.instance('submenu_font_size').set('11px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set("#fff");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("6892");

        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#style-85" ).click(function() {
        reset_customizer();
        creative_logo();

        api.instance('navigation_font').set('Roboto');
        api.instance('navigation_font_size').set('12px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('none');
        api.instance('navigation_font_colour').set('#ccc');
        api.instance('navigation_left_right_padding').set('20px');

        api.instance('logo_colour').set('#fff');
        api.instance('mini_logo_colour').set('#fff');

        api.instance('header_hover_over_content').set(true);
        api.instance('header_shadow').set('disable');
        api.instance('header_background').set('#333');
        api.instance('scrolled_header_background').set('#333');
        api.instance('layout').set("freefloating_top");

        api.instance('menu_active_font_colour').set("#fff");
        api.instance('menu_active_border_top').set("3px");
        api.instance('menu_active_border_colour').set("#fff");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("6892");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#style-86" ).click(function() {
        reset_customizer();
        creative_logo();
        api.instance('navigation_font_size').set('12px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('none');
        api.instance('navigation_font_colour').set('#ccc');
        api.instance('navigation_left_right_padding').set('20px');

        api.instance('logo_colour').set('#fff');
        api.instance('mini_logo_colour').set('#fff');

        api.instance('header_hover_over_content').set(true);
        api.instance('header_shadow').set('disable');
        api.instance('header_background').set('#333');
        api.instance('scrolled_header_background').set('#333');
        api.instance('layout').set("freefloating_top");
        api.instance('header_radius').set("500px");

        api.instance('menu_active_font_colour').set("#fff");
        api.instance('menu_active_border_top').set("3px");
        api.instance('menu_active_border_colour').set("#fff");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("6892");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#style-87" ).click(function() {
        reset_customizer();
        creative_logo();

        api.instance('navigation_font_size').set('12px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('none');
        api.instance('navigation_font_colour').set('#ccc');
        api.instance('navigation_top_bottom_padding').set('12px');
        api.instance('navigation_position').set('navigation-center');

        api.instance('logo_colour').set('#fff');
        api.instance('mini_logo_colour').set('#fff');

        api.instance('header_hover_over_content').set(true);
        api.instance('header_shadow').set('disable');
        api.instance('header_background').set('#333');
        api.instance('scrolled_header_background').set('#333');
        api.instance('layout').set("freefloating_left");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("6892");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#style-88" ).click(function() {
        reset_customizer();
        creative_logo();

        api.instance('navigation_font_size').set('12px');
        api.instance('navigation_font_letter_spacing').set('0px');
        api.instance('navigation_font_weight').set('400');
        api.instance('navigation_font_transform').set('none');
        api.instance('navigation_top_bottom_padding').set('12px');
        api.instance('navigation_position').set('navigation-center');


        api.instance('header_hover_over_content').set(true);
        api.instance('layout').set("floating_left");

        // Set Page
        api.instance('show_on_front').set("page");
        api.instance('page_on_front').set("6892");

        // Refresh
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#quick-option-white" ).click(function() {
 

        api.instance('header_background').set('#fff');
        api.instance('header_background_opacity').set('1');
        api.instance('logo_colour').set('#333');
        api.instance('navigation_font_colour').set('#555');
        api.instance('menu_active_font_colour').set('#000');
        api.instance('menu_active_font_colour_opacity').set('1');


        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#quick-option-creative" ).click(function() {
 

        api.instance('header_background').set('#222');
        api.instance('header_background_opacity').set('0.74');
        api.instance('logo_colour').set('#fff');
        api.instance('navigation_font_colour').set('#fff');
        api.instance('menu_active_font_colour').set('#fff');
        api.instance('menu_active_font_colour_opacity').set('0.4');


        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#quick-option-dark" ).click(function() {
 

        api.instance('header_background').set('#2a2a2a');
        api.instance('header_background_opacity').set('1');
        api.instance('logo_colour').set('#fff');
        api.instance('navigation_font_colour').set('#fff');
        api.instance('menu_active_font_colour').set('#fff');
        api.instance('menu_active_font_colour_opacity').set('0.4');


        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#quick-option-nav-left" ).click(function() {

        api.instance('navigation_position').set('navigation-left');
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#quick-option-nav-center" ).click(function() {

        api.instance('navigation_position').set('navigation-center');
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#quick-option-nav-right" ).click(function() {

        api.instance('navigation_position').set('navigation-right');
        api.instance('navigation_font').previewer.refresh();
    });

    function hover_reset() {
        api.instance('menu_active_bg_colour').set('#2a2a2a');
        api.instance('menu_active_bg_colour_opacity').set('0');
        api.instance('menu_active_font_colour').set('#fff');
        api.instance('menu_active_font_colour_opacity').set('0.74');
        api.instance('menu_active_border_top').set('0px');
        api.instance('menu_active_border_bottom').set('0px');


        api.instance('menu_active_border_style').set('none');
        api.instance('menu_active_arrow').set("none");
        api.instance('menu_active_shadow_style').set('none');
    }

    jQuery( "#quick-option-hover-default" ).click(function() {

        hover_reset();
        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#quick-option-hover1" ).click(function() {
        hover_reset();
        api.instance('menu_active_bg_colour').set('#222');
        api.instance('menu_active_bg_colour_opacity').set('1');
        api.instance('menu_active_font_colour').set('#fff');
        api.instance('menu_active_font_colour_opacity').set('1');
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#quick-option-hover2" ).click(function() {
        hover_reset();
        api.instance('menu_active_border_bottom').set('3px');
        api.instance('menu_active_border_colour').set('#fff');
        api.instance('menu_active_border_colour_opacity').set("1");
        api.instance('menu_active_border_style').set('solid');
        api.instance('menu_active_font_colour').set('fff');
        api.instance('menu_active_font_colour_opacity').set('1');
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#quick-option-hover3" ).click(function() {
        hover_reset();
        api.instance('menu_active_bg_colour').set('#29abe2');
        api.instance('menu_active_bg_colour_opacity').set('1');
        api.instance('menu_active_arrow').set('#29abe2');
        api.instance('menu_active_font_colour').set('fff');
        api.instance('menu_active_font_colour_opacity').set('1');
        api.instance('menu_active_arrow').set("middle");
        api.instance('menu_active_arrow_colour').set("#29abe2");
        api.instance('menu_active_arrow_size').set("10px");
        api.instance('menu_active_arrow_colour_opacity').set("1");
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#quick-option-hover4" ).click(function() {
        hover_reset();
        api.instance('menu_active_bg_colour').set('#222');
        api.instance('menu_active_bg_colour_opacity').set('1');
        api.instance('menu_active_arrow').set('#29abe2');
        api.instance('menu_active_font_colour').set('fff');
        api.instance('menu_active_font_colour_opacity').set('1');
        api.instance('menu_active_arrow').set("left");
        api.instance('menu_active_arrow_colour').set("#29abe2");
        api.instance('menu_active_arrow_size').set("20px");
        api.instance('menu_active_arrow_colour_opacity').set("1");
        api.instance('menu_active_border_bottom').set('3px');
        api.instance('menu_active_border_colour').set('#29abe2');
        api.instance('menu_active_border_colour_opacity').set("1");
        api.instance('menu_active_border_style').set('solid');
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#quick-option-hover5" ).click(function() {
        hover_reset();
        api.instance('menu_active_border_top').set('3px');
        api.instance('menu_active_border_colour').set('#fff');
        api.instance('menu_active_border_colour_opacity').set("1");
        api.instance('menu_active_border_style').set('solid');
        api.instance('menu_active_font_colour').set('#fff');
        api.instance('menu_active_font_colour_opacity').set('0.5');


        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#quick-option-hover6" ).click(function() {
        hover_reset();
        api.instance('menu_active_bg_colour').set('#29abe2');
        api.instance('menu_active_bg_colour_opacity').set('1');
        api.instance('menu_active_arrow').set('#29abe2');
        api.instance('menu_active_font_colour').set('fff');
        api.instance('menu_active_font_colour_opacity').set('1');
        api.instance('menu_active_arrow').set("middle");
        api.instance('menu_active_arrow_colour').set("#fff");
        api.instance('menu_active_arrow_size').set("10px");
        api.instance('menu_active_arrow_colour_opacity').set("1");
         api.instance('menu_active_border_bottom').set('3px');
        api.instance('menu_active_border_colour').set('#fff');
        api.instance('menu_active_border_colour_opacity').set("1");
        api.instance('menu_active_border_style').set('solid');
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#quick-option-hover7" ).click(function() {
        hover_reset();
        api.instance('menu_active_bg_colour').set('#111');
        api.instance('menu_active_bg_colour_opacity').set('1');
        api.instance('menu_active_arrow').set('#29abe2');
        api.instance('menu_active_font_colour').set('fff');
        api.instance('menu_active_font_colour_opacity').set('1');
        api.instance('menu_active_arrow').set("middle");
        api.instance('menu_active_arrow_colour').set("#fff");
        api.instance('menu_active_arrow_size').set("10px");
        api.instance('menu_active_arrow_colour_opacity').set("1");
         api.instance('menu_active_border_bottom').set('3px');
        api.instance('menu_active_border_colour').set('#fff');
        api.instance('menu_active_border_colour_opacity').set("1");
        api.instance('menu_active_border_style').set('solid');
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#quick-option-hover8" ).click(function() {
        hover_reset();
        api.instance('menu_active_bg_colour').set('#29abe2');
        api.instance('menu_active_bg_colour_opacity').set('1');
        api.instance('menu_active_arrow').set('#29abe2');
        api.instance('menu_active_font_colour').set('fff');
        api.instance('menu_active_font_colour_opacity').set('1');
        api.instance('menu_active_arrow').set("left");
        api.instance('menu_active_arrow_colour').set("#29abe2");
        api.instance('menu_active_arrow_size').set("20px");
        api.instance('menu_active_arrow_colour_opacity').set("1");
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#quick-option-hover9" ).click(function() {
        hover_reset();
        api.instance('menu_active_bg_colour').set('#fff');
        api.instance('menu_active_bg_colour_opacity').set('1');
        api.instance('menu_active_shadow_style').set('radial');
        api.instance('menu_active_font_colour').set('#333');
        api.instance('menu_active_font_colour_opacity').set("1");
        api.instance('menu_active_shadow').set('0.5');
       
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#quick-option-hover10" ).click(function() {
        hover_reset();
        api.instance('menu_active_bg_colour').set('#333');
        api.instance('menu_active_bg_colour_opacity').set('1');
        api.instance('menu_active_shadow_style').set('radial');
        api.instance('menu_active_font_colour').set('#fff');
        api.instance('menu_active_font_colour_opacity').set("1");
        api.instance('menu_active_shadow').set('0.5');
       
        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#quick-option-menu-uppercase" ).click(function() {
        api.instance('navigation_font_transform').set('uppercase');
        api.instance('navigation_font_letter_spacing').set('1px');
        api.instance('navigation_font_size').set('11px');

        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#quick-option-menu-standard" ).click(function() {
        api.instance('navigation_font_transform').set('none');
        api.instance('navigation_font_size').set('12px');
        api.instance('navigation_font_letter_spacing').set('0px');

        api.instance('navigation_font').previewer.refresh();
    });

    function submenu_reset() {
        api.instance('submenu_background').set("#222");
        api.instance('submenu_font_colour').set('#848484');
        api.instance('submenu_font_size').set('11px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set('#fff');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('submenu_inner_border').set('1px solid rgba(255, 255, 255, 0.08)');
    }
    jQuery( "#quick-option-sub-dark" ).click(function() {
        // Dark sub-menu
        submenu_reset()

        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#quick-option-sub-white" ).click(function() {
        submenu_reset()
        api.instance('submenu_background').set("#fff");
        api.instance('submenu_font_colour').set('#555');
        api.instance('submenu_font_size').set('11px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('400');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("default");
        api.instance('mega_menu_heading_colour').set('#111');
        api.instance('submenu_inner_border').set('1px solid rgba(0, 0, 0, 0.08)');
        api.instance('submenu_inner_shadow').set('0.1');
        api.instance('submenu_outer_shadow').set('0.1');
        api.instance('submenu_hover_font_colour').set('#222');

        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#quick-option-sub-grey" ).click(function() {
        submenu_reset()
        api.instance('submenu_background').set("#f1f1f1");
        api.instance('submenu_font_colour').set('#555');
        api.instance('submenu_font_size').set('11px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('400');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("default");
        api.instance('mega_menu_heading_colour').set('#111');
        api.instance('submenu_inner_border').set('1px solid rgba(0, 0, 0, 0.08)');
        api.instance('submenu_inner_shadow').set('0.1');
        api.instance('submenu_outer_shadow').set('0.1');
        api.instance('submenu_hover_font_colour').set('#222');

        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#quick-option-sub-blue" ).click(function() {
        submenu_reset()
        api.instance('submenu_background').set("#1587af");
        api.instance('submenu_font_colour').set('#fff');
        api.instance('submenu_font_size').set('11px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set('#fff');

        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#quick-option-sub-blue" ).click(function() {
        submenu_reset()
        api.instance('submenu_background').set("#1587af");
        api.instance('submenu_font_colour').set('#fff');
        api.instance('submenu_font_size').set('11px');
        api.instance('submenu_hover_font_colour').set('#fff')
        api.instance('submenu_font_weight').set('600');
        api.instance('submenu_font_letter_spacing').set('0px');
        api.instance('submenu_style').set("submenu-flat");
        api.instance('mega_menu_heading_colour').set('#fff');

        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#quick-option-layout-full" ).click(function() {
        // Dark sub-menu
        api.instance('layout').set("");

        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#quick-option-layout-boxed" ).click(function() {
        // Dark sub-menu
        api.instance('layout').set("boxed_top");

        api.instance('navigation_font').previewer.refresh();
    });
    jQuery( "#quick-option-layout-float" ).click(function() {
        // Dark sub-menu
        api.instance('layout').set("freefloating_top");

        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#quick-option-menu-font-1" ).click(function() {
        // Dark sub-menu
        api.instance('navigation_font').set("Open Sans");
        api.instance('navigation_font_weight').set("600");

        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#quick-option-menu-font-2" ).click(function() {
        // Dark sub-menu
        api.instance('navigation_font').set("Oswald");
        api.instance('navigation_font_weight').set("400");

        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#quick-option-menu-font-3" ).click(function() {
        // Dark sub-menu
        api.instance('navigation_font').set("Raleway");
        api.instance('navigation_font_weight').set("600");

        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#quick-option-header-float-enable" ).click(function() {
        api.instance('header_hover_over_content').set('true');

        api.instance('navigation_font').previewer.refresh();
    });

    jQuery( "#quick-option-header-float-disable" ).click(function() {
        api.instance('header_hover_over_content').set(false);

        api.instance('navigation_font').previewer.refresh();
    });

});
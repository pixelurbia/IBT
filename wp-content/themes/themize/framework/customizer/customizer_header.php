<?php

/*-----------------------------------------------------------------------------------

    CUSTOMIZER HEADER
    -----------------------------------------------------------------------------

    This file adds the header settings into the customizer.
	Editing this file will break the theme and possibly the universe.

  
    TABLE OF CONTENTS
    -----------------------------------------------------------------------------

    1.0 GENERAL PANEL
    ---------------------------
        1.1 Main Menu
        1.2 Mini Menu
        1.3 Sub menu
        1.4 Menu Active
        1.5 Rainbow Bar
        1.6 Contact Bar
        1.7 Purchase Button

-----------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------*/
/*	General Settings Panel
/*-----------------------------------------------------------------------------------*/

$wp_customize->add_panel( 'header', array(
	'priority' => 3,
	'capability' => 'edit_theme_options',
	'theme_supports' => '',
	'title' => 'Header',
) );

/*-----------------------------------------------------------------------------------*/
/*	Main Menu
/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'main_menu_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Main Menu', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 1,
			'panel' => 'header'
		)
	);
	
	$wp_customize->add_setting( 'header_background_heading', array(
		'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'header_background_heading', array(
	    'label'   => 'Background',
	    'section' => 'main_menu_section',
	    'settings'   => 'header_background_heading',
	    'priority' => 1
	) ) );
	
	$wp_customize->add_setting( 'header_main_navigation_description', array(
		'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control( new Section_Description( $wp_customize, 'header_main_navigation_description', array(
	    'label'   => 'Settings for the main header and navigation.',
	    'section' => 'main_menu_section',
	    'settings'   => 'header_main_navigation_description',
	    'priority' => 2
	) ) );
	
	$wp_customize->add_setting(
	    'header_background',
	    array(
	        'default' => '#fff',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'header_background',
	        array(
	            'label' => 'Background',
	            'section' => 'main_menu_section',
	            'settings' => 'header_background',
	            'priority' => 3
	        )
	    )
	);
	
	$wp_customize->add_setting(
	    'header_background_opacity',
	    array(
	        'default' => '1',
	        'sanitize_callback' => 'sanitize_setting',
	    )
	);
	
	$wp_customize->add_control(
	    'header_background_opacity',
	    array(
	        'label' => 'Background Opacity',
	        'description' => 'Default: 1',
	        'section' => 'main_menu_section',
	        'type' => 'text',
	        'priority' => 4,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '1',
		        'data-step' => '0.01',
		        'data-hideminmax' => "true"
		    ),
	    )
	);

	$wp_customize->add_setting( 'header_padding_heading', array(
		'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'header_padding_heading', array(
	    'label'   => 'Paddings',
	    'section' => 'main_menu_section',
	    'settings'   => 'header_padding_heading',
	    'priority' => 5
	) ) );

	$wp_customize->add_setting(
	    'navigation_top_bottom_padding',
	    array(
	        'default' => '35px',
	        'sanitize_callback' => 'sanitize_setting',
	    )
	);
	
	$wp_customize->add_control(
	    'navigation_top_bottom_padding',
	    array(
	        'label' => 'Navigation Top/Bottom Padding',
	        'section' => 'main_menu_section',
	        'description' => 'This option is for increasing the navigations top & bottom clickable area.',
	        'type' => 'text',
	        'priority' => 6,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '100',
		        'data-postfix' => 'px',
		        'data-step' => '1',
		        'data-hideminmax' => "true"
		    ),
	    )
	);
	$wp_customize->add_setting(
	    'navigation_left_right_padding',
	    array(
	        'default' => '12px',
	        'sanitize_callback' => 'sanitize_setting',
	    )
	);
	
	$wp_customize->add_control(
	    'navigation_left_right_padding',
	    array(
	        'label' => 'Navigation Left/Right Padding',
	        'description' => 'This option is for increasing the navigations left & right clickable area.',
	        'section' => 'main_menu_section',
	        'type' => 'text',
	        'priority' => 7,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '100',
		        'data-postfix' => 'px',
		        'data-step' => '1',
		        'data-hideminmax' => "true"
		    ),
	    )
	);

	$wp_customize->add_setting(
	    'header_padding',
	    array(
	        'default' => '0px',
	        'sanitize_callback' => 'sanitize_setting',
	    )
	);
	
	$wp_customize->add_control(
	    'header_padding',
	    array(
	        'label' => 'Header Top/Bottom Padding',
	        'description' => 'This option is for increasing space outside of the navigations clickable area',
	        'section' => 'main_menu_section',
	        'type' => 'text',
	        'priority' => 8,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '100',
		        'data-postfix' => 'px',
		        'data-step' => '1',
		        'data-hideminmax' => "true"
		    ),
	    )
	);

	$wp_customize->add_setting( 'header_other_heading', array(
		'sanitize_callback' => 'sanitize_setting',
	) );


    $wp_customize->add_setting( 'header_navigation_seperator_heading', array(
		'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'header_navigation_seperator_heading', array(
	    'label'   => 'Navigation Seperator',
	    'section' => 'main_menu_section',
	    'settings'   => 'header_navigation_seperator_heading',
	    'priority' => 9
	) ) );

	$wp_customize->add_setting('navigation_seperator_position', array(
    	'sanitize_callback' => 'sanitize_setting',
    ));
 
	$wp_customize->add_control(
	    'navigation_seperator_position',
	    array(
	        'type' => 'select',
	        'label' => 'Navigation Seperator Position',
	        'description' => 'Add a divider at the end of each navigation link',
	        'section' => 'main_menu_section',
	        'choices' => array(
	            'none' => 'None',
	            'top' => 'Top',
	            'bottom' => 'Bottom',
	            'left' => 'Left',
	            'right' => 'Right',
	        ),
	        'priority' => 10
	    )
	);


	$wp_customize->add_setting( 'navigation_seperator_border',
	    array( 'default' => '1px solid #ccc',
	    		'sanitize_callback' => 'sanitize_setting',
	     )
	);
	
	$wp_customize->add_control(
	    'navigation_seperator_border',
	    array(
	        'label' => 'Navigation Seperator Border',
	        'description' => 'e.g: 1px solid #ccc',
	        'section' => 'main_menu_section',
	        'type' => 'text',
	        'priority' => 11,
	    )
	);

	$wp_customize->add_setting( 'header_seperator_heading', array(
		'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'header_seperator_heading', array(
	    'label'   => 'Header Seperator',
	    'section' => 'main_menu_section',
	    'settings'   => 'header_seperator_heading',
	    'priority' => 12
	) ) );

	$wp_customize->add_setting(
	    'header_seperator_style',
	    array(
	        'default' => 'normal',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );
    
    $wp_customize->add_control(
	    'header_seperator_style',
	    array(
	        'type' => 'radio',
	        'label' => 'Header Seperator Style',
	        'section' => 'main_menu_section',
	        'choices' => array(
	            'normal' => 'Normal',
	            'full' => 'Full Width/Height'
	        ),
	        'priority' => 13
	    )
    );

    $wp_customize->add_setting('header_seperator_position', array(
    	'sanitize_callback' => 'sanitize_setting',
    ));
 
	$wp_customize->add_control(
	    'header_seperator_position',
	    array(
	        'type' => 'select',
	        'label' => 'Header Seperator Position',
	        'section' => 'main_menu_section',
	        'choices' => array(
	            'none' => 'None',
	            'top' => 'Top',
	            'bottom' => 'Bottom',
	            'left' => 'Left',
	            'right' => 'Right',
	            'top_bottom' => 'Top & Bottom',
	            'left_right' => 'Left & Right'
	        ),
	        'priority' => 14
	    )
	);


	$wp_customize->add_setting( 'header_seperator_border',
	    array( 'default' => '1px solid #ccc',
	    		'sanitize_callback' => 'sanitize_setting',
	     )
	);
	
	$wp_customize->add_control(
	    'header_seperator_border',
	    array(
	        'label' => 'Header Seperator Border',
	        'description' => 'e.g: 1px solid #ccc',
	        'section' => 'main_menu_section',
	        'type' => 'text',
	        'priority' => 15,
	    )
	);

	$wp_customize->add_setting( 'header_other_heading', array(
		'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'header_other_heading', array(
	    'label'   => 'Other settings',
	    'section' => 'main_menu_section',
	    'settings'   => 'header_other_heading',
	    'priority' => 16,
	) ) );

	$wp_customize->add_setting(
	    'header_radius',
	    array(
	        'default' => '0px',
	        'sanitize_callback' => 'sanitize_setting',
	    )
	);
	
	$wp_customize->add_control(
	    'header_radius',
	    array(
	        'label' => 'Header Radius',
	        'description' => 'This option will give the header rounded corners',
	        'section' => 'main_menu_section',
	        'type' => 'text',
	        'priority' => 17,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '100',
		        'data-postfix' => 'px',
		        'data-step' => '1',
		        'data-hideminmax' => "true"
		    ),
	    )
	);
    
    $wp_customize->add_setting('header_hover_over_content', array(
    	'sanitize_callback' => 'sanitize_setting',
    ));
	
	$wp_customize->add_control(
	    'header_hover_over_content',
	    array(
	        'type' => 'checkbox',
	        'description' => 'Enabling this will hover the header on top of a full width slider. This option is best used when the navigation background is transparent. Ensure all your pages have a featured slider or image for this to work properly',
	        'label' => 'Hover header on top of content',
	        'section' => 'main_menu_section',
	        'priority' => 18
	    )
	);
	
	$wp_customize->add_setting(
	    'header_shadow',
	    array(
	        'default' => 'enable',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );
    
    $wp_customize->add_control(
	    'header_shadow',
	    array(
	        'type' => 'radio',
	        'label' => 'Header Shadow',
	        'section' => 'main_menu_section',
	        'choices' => array(
	            'enable' => 'Enable',
	            'disable' => 'Disable'
	        ),
	        'priority' => 19
	    )
    );
    
    $wp_customize->add_setting(
	    'navigation_position',
	    array(
	        'default' => 'navigation-right',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );
    
    $wp_customize->add_control(
	    'navigation_position',
	    array(
	        'type' => 'radio',
	        'label' => 'Navigation Position',
	        'section' => 'main_menu_section',
	        'choices' => array(
	            'navigation-left' => 'Left',
	            'navigation-right' => 'Right',
	            'navigation-center' => 'Center'
	           
	        ),
	        'priority' => 21
	    )
    );

/*-----------------------------------------------------------------------------------*/
/*	Mini Menu
/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'mini_menu_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Mini Menu', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 2,
			'panel' => 'header'
		)
	);
    
    $wp_customize->add_setting( 'scrolled_main_menu_heading', array(
    	'sanitize_callback' => 'sanitize_setting',
    ) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'scrolled_main_menu_heading', array(
	    'label'   => 'What is a mini menu?',
	    'section' => 'mini_menu_section',
	    'settings'   => 'scrolled_main_menu_heading',
	    'priority' => 9
	) ) );
	
	$wp_customize->add_setting( 'scrolled_main_menu__description', array(
		'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control( new Section_Description( $wp_customize, 'scrolled_main_menu__description', array(
	    'label'   => 'The mini menu is the resized menu when you scroll down a page',
	    'section' => 'mini_menu_section',
	    'settings'   => 'header_main_navigation_description',
	    'priority' => 10
	) ) );

		$wp_customize->add_setting(
	    'header_sticky',
	    array(
	        'default' => 'enable',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );
    
    $wp_customize->add_control(
	    'header_sticky',
	    array(
	        'type' => 'radio',
	        'label' => 'Header Mini Menu',
	        'description' => 'Enabling this option will enable the mini menu when the user scrolls down',
	        'section' => 'mini_menu_section',
	        'choices' => array(
	            'enable' => 'Enable',
	            'disable' => 'Disable'
	        ),
	        'priority' => 11
	    )
    );
	
	$wp_customize->add_setting(
	    'scrolled_header_background',
	    array(
	        'default' => '#fff',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'scrolled_header_background',
	        array(
	            'label' => 'Background',
	            'section' => 'mini_menu_section',
	            'settings' => 'scrolled_header_background',
	            'priority' => 12
	        )
	    )
	);
	
	$wp_customize->add_setting(
	    'scrolled_header_background_opacity',
	    array(
	        'default' => '1',
	        'sanitize_callback' => 'sanitize_setting',
	    )
	);
	
	$wp_customize->add_control(
	    'scrolled_header_background_opacity',
	    array(
	        'label' => 'Background Opacity',
	        'description' => 'Default: 1',
	        'section' => 'mini_menu_section',
	        'type' => 'text',
	        'priority' => 13,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '1',
		        'data-step' => '0.01',
		        'data-hideminmax' => "true"
		    ),
	    )
	);
	
	$wp_customize->add_setting(
	    'scrolled_header_shadow',
	    array(
	        'default' => 'enable',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );
    
    $wp_customize->add_control(
	    'scrolled_header_shadow',
	    array(
	        'type' => 'radio',
	        'label' => 'Header Shadow',
	        'section' => 'mini_menu_section',
	        'choices' => array(
	            'enable' => 'Enable',
	            'disable' => 'Disable'
	        ),
	        'priority' => 14
	    )
    );

	/*-----------------------------------------------------------------------------------*/
	/*	Sub Menu
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'submenu_menu_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Sub Menu', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 4,
			'panel' => 'header'
		)
	);
    
    $wp_customize->add_setting( 'header_sub_menu_heading', array(
    	'sanitize_callback' => 'sanitize_setting',
    ) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'header_sub_menu_heading', array(
	    'label'   => 'Sub Menu',
	    'section' => 'submenu_menu_section',
	    'settings'   => 'header_sub_menu_heading',
	    'priority' => 14
	) ) );
	
	$wp_customize->add_setting( 'header_sub_menu_description', array(
		'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control( new Section_Description( $wp_customize, 'header_sub_menu_descriptio', array(
	    'label'   => 'Change the Sub menu colours. To change the colour of the text, please go to the "Navigation Typography" section.',
	    'section' => 'submenu_menu_section',
	    'settings'   => 'header_sub_menu_heading',
	    'priority' => 15
	) ) );
	
	$wp_customize->add_setting(
	    'submenu_background',
	    array(
	        'default' => '#fff',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'submenu_background',
	        array(
	            'label' => 'Background',
	            'section' => 'submenu_menu_section',
	            'settings' => 'submenu_background',
	            'priority' => 16
	        )
	    )
	);

	$wp_customize->add_setting(
	    'submenu_background_opacity',
	    array(
	        'default' => '1',
	        'sanitize_callback' => 'sanitize_setting',
	    )
	);
	
	$wp_customize->add_control(
	    'submenu_background_opacity',
	    array(
	        'label' => 'Sub Menu Background Opacity',
	        'description' => 'Default: 1',
	        'section' => 'submenu_menu_section',
	        'type' => 'text',
	        'priority' => 17,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '1',
		        'data-step' => '0.01',
		        'data-hideminmax' => "true"
		    ),
	    )
	);

	$wp_customize->add_setting(
	    'submenu_style',
	    array(
	        'default' => 'default',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );
    
    $wp_customize->add_control(
	    'submenu_style',
	    array(
	        'type' => 'radio',
	        'label' => 'Sub Menu Style',
	        'section' => 'submenu_menu_section',
	        'choices' => array(
	            'default' => 'Default',
	            'submenu-flat' => 'Flat'
	        ),
	        'priority' => 18
	    )
    );
	
	$wp_customize->add_setting(
	    'submenu_inner_border',
	    array(
	        'default' => '1px solid rgba(0, 0, 0, 0.1)',
	        'sanitize_callback' => 'sanitize_setting',
	    )
	);
	
	$wp_customize->add_control(
	    'submenu_inner_border',
	    array(
	        'label' => 'Inner border',
	        'section' => 'submenu_menu_section',
	        'type' => 'text',
	        'priority' => 19
	    )
	);


    $wp_customize->add_setting(
	    'mega_menu_heading_colour',
	    array(
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'mega_menu_heading_colour',
	        array(
	            'label' => 'Mega Menu Heading Colour',
	            'section' => 'submenu_menu_section',
	            'settings' => 'mega_menu_heading_colour',
	            'priority' => 20
	        )
	    )
	);

	$wp_customize->add_setting( 'sub_menu_shadow_heading', array(
    	'sanitize_callback' => 'sanitize_setting',
    ) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'sub_menu_shadow_heading', array(
	    'label'   => 'Shadows',
	    'section' => 'submenu_menu_section',
	    'settings'   => 'sub_menu_shadow_heading',
	    'priority' => 21
	) ) );

	$wp_customize->add_setting(
	    'submenu_inner_shadow',
	    array(
	        'default' => '0.1',
	        'sanitize_callback' => 'sanitize_setting',
	    )
	);
	
	$wp_customize->add_control(
	    'submenu_inner_shadow',
	    array(
	        'label' => 'Sub Menu Inner Shadow',
	        'description' => 'Default: 1',
	        'section' => 'submenu_menu_section',
	        'type' => 'text',
	        'priority' => 22,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '1',
		        'data-step' => '0.01',
		        'data-hideminmax' => "true"
		    ),
	    )
	);

	$wp_customize->add_setting(
	    'submenu_outer_shadow',
	    array(
	        'default' => '0.1',
	        'sanitize_callback' => 'sanitize_setting',
	    )
	);
	
	$wp_customize->add_control(
	    'submenu_outer_shadow',
	    array(
	        'label' => 'Sub Menu Outer Shadow',
	        'description' => 'Default: 1',
	        'section' => 'submenu_menu_section',
	        'type' => 'text',
	        'priority' => 23,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '1',
		        'data-step' => '0.01',
		        'data-hideminmax' => "true"
		    ),
	    )
	);


	/*-----------------------------------------------------------------------------------*/
	/*	Menu Active/Hover Style
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'menu_active_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Menu Active/Hover Designer', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 6,
			'panel' => 'header'
		)
	);

	$wp_customize->add_setting(
	    'menu_active_font_colour',
	    array(
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'menu_active_font_colour',
	        array(
	            'label' => 'Font Colour',
	            'description' => 'The colour of the navigation link when a user hovers over it',
	            'section' => 'menu_active_section',
	            'settings' => 'menu_active_font_colour',
	            'priority' => 1
	        )
	    )
	);

	$wp_customize->add_setting( 'menu_active_font_colour_opacity', array( 'default' => '1', 'sanitize_callback' => 'sanitize_setting', ));
	
	$wp_customize->add_control(
	    'menu_active_font_colour_opacity',
	    array(
	        'Label' => 'Opacity',
	        'description' => 'Add some transparency to the navigation link',
	        'section' => 'menu_active_section',
	        'type' => 'text',
	        'priority' => 2,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '1',
		        'data-step' => '0.01',
		        'data-hideminmax' => "true"
		    ),
	    )
	);

	$wp_customize->add_setting(
	    'mini_menu_active_font_colour',
	    array(
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'mini_menu_active_font_colour',
	        array(
	            'label' => '(Mini Menu) Font Colour',
	            'description' => 'The colour of the navigation link when a user hovers over it',
	            'section' => 'menu_active_section',
	            'settings' => 'mini_menu_active_font_colour',
	            'priority' => 3
	        )
	    )
	);

	$wp_customize->add_setting( 'mini_menu_active_font_colour_opacity', array( 'default' => '1', 'sanitize_callback' => 'sanitize_setting', ));
	
	$wp_customize->add_control(
	    'mini_menu_active_font_colour_opacity',
	    array(
	        'Label' => 'Mini Menu Opacity',
	        'description' => 'Add some transparency to the navigation link (Mini Menu)',
	        'section' => 'menu_active_section',
	        'type' => 'text',
	        'priority' => 4,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '1',
		        'data-step' => '0.01',
		        'data-hideminmax' => "true"
		    ),
	    )
	);

	$wp_customize->add_setting(
	    'menu_active_bg_colour',
	    array(
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'menu_active_bg_colour',
	        array(
	            'label' => 'Background Colour',
	            'description' => 'The background colour of the navigation link when a user hovers over it',
	            'section' => 'menu_active_section',
	            'settings' => 'menu_active_bg_colour',
	            'priority' => 5
	        )
	    )
	);

	$wp_customize->add_setting( 'menu_active_bg_colour_opacity', array( 'default' => '1', 'sanitize_callback' => 'sanitize_setting', ));
	
	$wp_customize->add_control(
	    'menu_active_bg_colour_opacity',
	    array(
	        'label' => 'Opacity',
	        'description' => 'Add some transparency to the background colour',
	        'section' => 'menu_active_section',
	        'type' => 'text',
	        'priority' => 4,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '1',
		        'data-step' => '0.01',
		        'data-hideminmax' => "true"
		    ),
	    )
	);

	$wp_customize->add_setting( 'active_border_heading', array('sanitize_callback' => 'sanitize_setting',) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'active_border_heading', array(
	    'label'   => 'Border',
	    'section' => 'menu_active_section',
	    'settings'   => 'active_border_heading',
	    'priority' => 5
	) ) );

	$wp_customize->add_setting( 'menu_active_border_top', array( 'default' => '0px', 'sanitize_callback' => 'sanitize_setting', ));
	
	$wp_customize->add_control(
	    'menu_active_border_top',
	    array(
	        'label' => 'Border size',
	        'description' => 'Top Border',
	        'section' => 'menu_active_section',
	        'type' => 'text',
	        'priority' => 6,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '30',
		        'data-step' => '1',
		        'data-postfix' => 'px',
		        'data-hideminmax' => "true"
		    ),
	    )
	);

	$wp_customize->add_setting( 'menu_active_border_right', array( 'default' => '0px', 'sanitize_callback' => 'sanitize_setting', ));
	
	$wp_customize->add_control(
	    'menu_active_border_right',
	    array(
	        'description' => 'Right Border',
	        'section' => 'menu_active_section',
	        'type' => 'text',
	        'priority' => 7,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '30',
		        'data-step' => '1',
		        'data-postfix' => 'px',
		        'data-hideminmax' => "true"
		    ),
	    )
	);


	$wp_customize->add_setting( 'menu_active_border_bottom', array( 'default' => '0px', 'sanitize_callback' => 'sanitize_setting', ));
	
	$wp_customize->add_control(
	    'menu_active_border_bottom',
	    array(
	        'description' => 'Bottom Border',
	        'section' => 'menu_active_section',
	        'type' => 'text',
	        'priority' => 8,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '30',
		        'data-step' => '1',
		        'data-postfix' => 'px',
		        'data-hideminmax' => "true"
		    ),
	    )
	);

	$wp_customize->add_setting( 'menu_active_border_left', array( 'default' => '0px', 'sanitize_callback' => 'sanitize_setting', ));
	
	$wp_customize->add_control(
	    'menu_active_border_left',
	    array(
	        'description' => 'Left Border',
	        'section' => 'menu_active_section',
	        'type' => 'text',
	        'priority' => 9,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '30',
		        'data-step' => '1',
		        'data-postfix' => 'px',
		        'data-hideminmax' => "true"
		    ),
	    )
	);

	$wp_customize->add_setting( 'menu_active_border_radius', array( 'default' => '0px', 'sanitize_callback' => 'sanitize_setting', ));
	
	$wp_customize->add_control(
	    'menu_active_border_radius',
	    array(
	        'description' => 'Border Radius',
	        'section' => 'menu_active_section',
	        'type' => 'text',
	        'priority' => 10,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '100',
		        'data-step' => '1',
		        'data-postfix' => 'px',
		        'data-hideminmax' => "true"
		    ),
	    )
	);

	$wp_customize->add_setting(
	    'menu_active_border_colour',
	    array(
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'menu_active_border_colour',
	        array(
	            'label' => 'Border Colour',
	            'section' => 'menu_active_section',
	            'settings' => 'menu_active_border_colour',
	            'priority' => 11
	        )
	    )
	);

	$wp_customize->add_setting( 'menu_active_border_colour_opacity', array( 'default' => '1', 'sanitize_callback' => 'sanitize_setting', ));
	
	$wp_customize->add_control(
	    'menu_active_border_colour_opacity',
	    array(
	        'label' => 'Opacity',
	        'section' => 'menu_active_section',
	        'type' => 'text',
	        'priority' => 12,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '1',
		        'data-step' => '0.01',
		        'data-hideminmax' => "true"
		    ),
	    )
	);

	$wp_customize->add_setting('menu_active_border_style', array('sanitize_callback' => 'sanitize_setting'));
 
	$wp_customize->add_control(
	    'menu_active_border_style',
	    array(
	        'type' => 'select',
	        'label' => 'Border Style',
	        'section' => 'menu_active_section',
	        'choices' => array(
	        	'none' => 'None',
	            'solid' => 'Solid',
	            'dotted' => 'Dotted',
	            'dashed' => 'Dashed',
	            'double' => 'Double',
	            'groove' => 'Groove',
	            'inset' => 'Inset',
	            'ridge' => 'Ridge',
	        ),
	        'priority' => 13
	    )
	);

	$wp_customize->add_setting( 'active_arrow_heading', array('sanitize_callback' => 'sanitize_setting',) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'active_arrow_heading', array(
	    'label'   => 'Arrows',
	    'section' => 'menu_active_section',
	    'settings'   => 'active_arrow_heading',
	    'priority' => 14
	) ) );

	$wp_customize->add_setting('menu_active_arrow', array('sanitize_callback' => 'sanitize_setting'));
 
	$wp_customize->add_control(
	    'menu_active_arrow',
	    array(
	        'type' => 'select',
	        'label' => 'Arrow',
	        'description' => 'Add an arrow',
	        'section' => 'menu_active_section',
	        'choices' => array(
	            'none' => 'None',
	            'left' => 'Left',
	            'middle' => 'Middle',
	        ),
	        'priority' => 15
	    )
	);

	$wp_customize->add_setting(
	    'menu_active_arrow_colour',
	    array(
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'menu_active_arrow_colour',
	        array(
	            'label' => 'Arrow Colour',
	            'section' => 'menu_active_section',
	            'settings' => 'menu_active_arrow_colour',
	            'priority' => 16
	        )
	    )
	);

	$wp_customize->add_setting( 'menu_active_arrow_colour_opacity', array( 'default' => '1', 'sanitize_callback' => 'sanitize_setting', ));
	
	$wp_customize->add_control(
	    'menu_active_arrow_colour_opacity',
	    array(
	        'label' => 'Opacity',
	        'section' => 'menu_active_section',
	        'type' => 'text',
	        'priority' => 17,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '1',
		        'data-step' => '0.01',
		        'data-hideminmax' => "true"
		    ),
	    )
	);


	$wp_customize->add_setting( 'menu_active_arrow_size', array( 'default' => '20px', 'sanitize_callback' => 'sanitize_setting', ));
	
	$wp_customize->add_control(
	    'menu_active_arrow_size',
	    array(
	        'label' => 'Arrow Size',
	        'section' => 'menu_active_section',
	        'type' => 'text',
	        'priority' => 18,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '50',
		        'data-step' => '1',
		        'data-postfix' => 'px',
		        'data-hideminmax' => "true"
		    ),
	    )
	);

	$wp_customize->add_setting( 'active_shadow_heading', array('sanitize_callback' => 'sanitize_setting',) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'active_shadow_heading', array(
	    'label'   => 'Border',
	    'section' => 'menu_active_section',
	    'settings'   => 'active_shadow_heading',
	    'priority' => 19
	) ) );

	$wp_customize->add_setting('menu_active_shadow_style', array('sanitize_callback' => 'sanitize_setting'));

	$wp_customize->add_control(
	    'menu_active_shadow_style',
	    array(
	        'type' => 'select',
	        'label' => 'Shadow Style',
	        'section' => 'menu_active_section',
	        'choices' => array(
	            'none' => 'None',
	            'radial' => 'Radial',
	            'linear' => 'Linear',
	        ),
	        'priority' => 20
	    )
	);

	$wp_customize->add_setting( 'menu_active_shadow', array( 'default' => '0.2', 'sanitize_callback' => 'sanitize_setting', ));
	
	$wp_customize->add_control(
	    'menu_active_shadow',
	    array(
	        'label' => 'Shadow',
	        'description' => 'The higher this value, the stronger the shadow',
	        'section' => 'menu_active_section',
	        'type' => 'text',
	        'priority' => 21,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '1',
		        'data-step' => '0.01',
		        'data-hideminmax' => "true"
		    ),
	    )
	);

	/*-----------------------------------------------------------------------------------*/
	/*	Rainbow Bar
	/*-----------------------------------------------------------------------------------*/
	
	$wp_customize->add_section(
		'rainbow_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Rainbow Bar', 'cortex' ), # Translatable text, change the text domain to your own
			'description' => __( 'Please note that the rainbow bar is not compatible with the side layouts'), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 7,
			'panel' => 'header'
		)
	);

	$wp_customize->add_setting( 'enable_rainbow_heading', array('sanitize_callback' => 'sanitize_setting',) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'enable_rainbow_heading', array(
	    'label'   => 'Enable Rainbow Bar',
	    'section' => 'rainbow_section',
	    'settings'   => 'enable_rainbow_heading',
	    'priority' => 99
	) ) );
	
	$wp_customize->add_setting('enable_rainbow_bar', array('sanitize_callback' => 'sanitize_setting',));
    
    $wp_customize->add_control(
	    'enable_rainbow_bar',
	    array(
	        'type' => 'checkbox',
	        'label' => 'Enable Rainbow Bar',
	        'description' => __( 'Add a rainbow bar to the header', 'cortex' ),
	        'section' => 'rainbow_section',
	        'priority' => 100
	    )
	);

	$wp_customize->add_setting( 'rainbow_bar_colours', array('sanitize_callback' => 'sanitize_setting',) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'rainbow_bar_colours', array(
	    'label'   => 'Rainbow Custom Colours',
	    'section' => 'rainbow_section',
	    'settings'   => 'rainbow_bar_colours',
	    'priority' => 101
	) ) );

	$wp_customize->add_setting(
	    'bar_colour_1',
	    array(
	        'default' => '#50575E',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'bar_colour_1',
	        array(
	            'label' => 'Bar Colour #1',
	            'section' => 'rainbow_section',
	            'settings' => 'bar_colour_1',
	            'priority' => 110
	        )
	    )
	);
	
	$wp_customize->add_setting(
	    'bar_colour_2',
	    array(
	        'default' => '#29ABE2',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'bar_colour_2',
	        array(
	            'label' => 'Bar Colour #2',
	            'section' => 'rainbow_section',
	            'settings' => 'bar_colour_2',
	            'priority' => 120
	        )
	    )
	);
	
	$wp_customize->add_setting(
	    'bar_colour_3',
	    array(
	        'default' => '#7BCDEF',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'bar_colour_3',
	        array(
	            'label' => 'Bar Colour #3',
	            'section' => 'rainbow_section',
	            'settings' => 'bar_colour_3',
	            'priority' => 130
	        )
	    )
	);
	
	$wp_customize->add_setting(
	    'bar_colour_4',
	    array(
	        'default' => '#29ABE2',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'bar_colour_4',
	        array(
	            'label' => 'Bar Colour #4',
	            'section' => 'rainbow_section',
	            'settings' => 'bar_colour_4',
	            'priority' => 140
	        )
	    )
	);
	
	$wp_customize->add_setting(
	    'bar_colour_5',
	    array(
	        'default' => '#7BCDEF',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'bar_colour_5',
	        array(
	            'label' => 'Bar Colour #5',
	            'section' => 'rainbow_section',
	            'settings' => 'bar_colour_5',
	            'priority' => 150
	        )
	    )
	);
	
	/*-----------------------------------------------------------------------------------*/
	/*	Contact Bar
	/*-----------------------------------------------------------------------------------*/
	
	$wp_customize->add_section(
		'contactbar_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Contact Bar', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 8,
			'panel' => 'header'
		)
	);

	$wp_customize->add_setting( 'enable_contact_heading', array('sanitize_callback' => 'sanitize_setting',) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'enable_contact_heading', array(
	    'label'   => 'Enable Contact Bar',
	    'section' => 'contactbar_section',
	    'settings'   => 'enable_rainbow_heading',
	    'priority' => 169
	) ) );
	
	$wp_customize->add_setting('enable_contact_bar', array('sanitize_callback' => 'sanitize_setting',));
    
    $wp_customize->add_control(
	    'enable_contact_bar',
	    array(
	        'type' => 'checkbox',
	        'label' => 'Enable Contact Bar',
	        'description' => __( 'Add a contact bar to the header', 'cortex' ),
	        'section' => 'contactbar_section',
	        'priority' => 170
	    )
	);

	$wp_customize->add_setting( 'contact_bar_content', array('sanitize_callback' => 'sanitize_setting',) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'contact_bar_content', array(
	    'label'   => 'Contact Bar Content',
	    'section' => 'contactbar_section',
	    'settings'   => 'enable_rainbow_heading',
	    'priority' => 171
	) ) );
	
	
	$wp_customize->add_setting( 'contact_bar_left', array(
   		 'default'        => 'Some default text for the contact bar',
   		 'type' => 'option',
   		 'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'contact_bar_left', array(
	    'label'   => 'Left Content',
	    'section' => 'contactbar_section',
	    'settings'   => 'contact_bar_left',
	    'priority' => 180
	) ) );
	
	$wp_customize->add_setting( 'contact_bar_right', array(
   		 'default'        => 'Some default text for the contact bar',
   		 'type' => 'option',
   		 'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'contact_bar_right', array(
	    'label'   => 'Right Content',
	    'section' => 'contactbar_section',
	    'settings'   => 'contact_bar_right',
	    'priority' => 190
	) ) );

	$wp_customize->add_setting( 'contact_bar_other_settings', array('sanitize_callback' => 'sanitize_setting',) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'contact_bar_other_settings', array(
	    'label'   => 'Other Settings',
	    'section' => 'contactbar_section',
	    'settings'   => 'contact_bar_other_settings',
	    'priority' => 200
	) ) );

	$wp_customize->add_setting(
	    'contact_bar_background_color',
	    array(
	        'sanitize_callback' => 'sanitize_hex_color',
	        'default' => '#f7f7f7'
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'contact_bar_background_color',
	        array(
	        	'label'   => 'Background Color',
	            'section' => 'contactbar_section',
	            'settings' => 'contact_bar_background_color',
	            'description' => __( 'Change the background color', 'cortex' ),
	            'priority' => 210
	        )
	    )
	);

	$wp_customize->add_setting( 'contact_bar_size', array(
        'default'        => '12px',
        'sanitize_callback' => 'sanitize_setting',
    ));
	
	$wp_customize->add_control(
	    'contact_bar_size',
	    array(
	        'label' => 'Contact Bar Size',
	        'section' => 'contactbar_section',
	        'type' => 'text',
	        'priority' => 220
	    )
	);

	$wp_customize->add_setting(
	    'wpml_language_switcher',
	    array(
	        'default' => 'disable',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );
    
    $wp_customize->add_control(
	    'wpml_language_switcher',
	    array(
	        'type' => 'radio',
	        'label' => 'WPML Language Switcher',
	        'section' => 'contactbar_section',
	        'description' => 'Enable the WPML Language switcher in the contact bar. You must have the WPML plugin installed.',
	        'choices' => array(
	            'enable' => 'Enable',
	            'disable' => 'Disable'
	        ),
	        'priority' => 230
	    )
    );

	/*-----------------------------------------------------------------------------------*/
	/*	Search
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'search_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Navigation Search', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 9,
			'panel' => 'header'
		)
	);

	$wp_customize->add_setting(
	    'navigation_search',
	    array(
	        'default' => 'disable',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );
    
    $wp_customize->add_control(
	    'navigation_search',
	    array(
	        'type' => 'radio',
	        'label' => 'Search',
	        'description' => 'Enable/Disable the search form in the navigation',
	        'section' => 'search_section',
	        'choices' => array(
	            'enable' => 'Enable',
	            'disable' => 'Disable'
	        ),
	        'priority' => 1
	    )
    );


    /*-----------------------------------------------------------------------------------*/
	/*	Purchase Button
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'purchase_button_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Purchase Button', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 10,
			'panel' => 'header',
		)
	);

	$wp_customize->add_setting(
	    'purchase_button',
	    array(
	        'default' => 'disable',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );
    
    $wp_customize->add_control(
	    'purchase_button',
	    array(
	        'type' => 'radio',
	        'label' => 'Enable Purchase Button',
	        'section' => 'purchase_button_section',
	        'choices' => array(
	            'enable' => 'Enable',
	            'disable' => 'Disable'
	        ),
	        'priority' => 1
	    )
    );

    $wp_customize->add_setting( 'purchase_button_text', array(
        'default'        => 'Purchase now',
        'type' => 'option',
        'sanitize_callback' => 'sanitize_setting',
    ));
	
	$wp_customize->add_control(
	    'purchase_button_text',
	    array(
	        'label' => 'Purchase Button Text',
	        'section' => 'purchase_button_section',
	        'type' => 'text',
	        'priority' => 2
	    )
	);

	$wp_customize->add_setting( 'purchase_button_url', array(
        'default'        => 'http://',
        'sanitize_callback' => 'esc_url_raw',
    ));
	
	$wp_customize->add_control(
	    'purchase_button_url',
	    array(
	        'label' => 'Purchase Button Url',
	        'section' => 'purchase_button_section',
	        'type' => 'text',
	        'priority' => 3
	    )
	);

    $wp_customize->add_setting(
	    'purchase_button_custom_color',
	    array(
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'purchase_button_custom_color',
	        array(
	        	'label'   => 'Custom Colour',
	            'section' => 'purchase_button_section',
	            'settings' => 'purchase_button_custom_color',
	            'description' => __( 'Change the purchase button color.', 'cortex' ),
	            'priority' => 4
	        )
	    )
	);

	$wp_customize->add_setting(
	    'purchase_button_background_opacity',
	    array(
	        'default' => '1',
	        'sanitize_callback' => 'sanitize_setting',
	    )
	);
	
	$wp_customize->add_control(
	    'purchase_button_background_opacity',
	    array(
	        'label' => 'Background Opacity',
	        'description' => 'Default: 1',
	        'section' => 'purchase_button_section',
	        'type' => 'text',
	        'priority' => 5,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '1',
		        'data-step' => '0.01',
		        'data-hideminmax' => "true"
		    ),
	    )
	);

	$wp_customize->add_setting(
	    'purchase_button_border',
	    array(
	        'default' => '',
	        'sanitize_callback' => 'sanitize_setting',
	    )
	);
	
	$wp_customize->add_control(
	    'purchase_button_border',
	    array(
	        'label' => 'Purchase Button Border',
	        'section' => 'purchase_button_section',
	        'type' => 'text',
	        'priority' => 6
	    )
	);

	$wp_customize->add_setting(
	    'purchase_button_custom_color_hover',
	    array(
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'purchase_button_custom_color_hover',
	        array(
	        	'label'   => 'Purchase Button Hover Colour',
	            'section' => 'purchase_button_section',
	            'settings' => 'purchase_button_custom_color_hover',
	            'description' => __( 'Change the purchase button hover colour', 'cortex' ),
	            'priority' => 7
	        )
	    )
	);

	$wp_customize->add_setting(
	    'purchase_button_text_custom_color_hover',
	    array(
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'purchase_button_text_custom_color_hover',
	        array(
	        	'label'   => 'Purchase Button Text Hover Colour',
	            'section' => 'purchase_button_section',
	            'settings' => 'purchase_button_text_custom_color_hover',
	            'description' => __( 'Change the purchase button text hover colour', 'cortex' ),
	            'priority' => 8
	        )
	    )
	);

	$wp_customize->add_setting(
	    'purchase_button_target',
	    array(
	        'default' => '_self',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );
    
    $wp_customize->add_control(
	    'purchase_button_target',
	    array(
	        'type' => 'radio',
	        'label' => 'Purchase Button Target',
	        'section' => 'purchase_button_section',
	        'choices' => array(
	            '_blank' => '_blank',
	            '_self' => '_self',
	            '_parent' => '_parent',
	            '_top' => '_top'
	        ),
	        'priority' => 9
	    )
    );

     /*-----------------------------------------------------------------------------------*/
	/*	Purchase Button
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'mobile_menu_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Mobile Menu', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 11,
			'panel' => 'header',
		)
	);

    $wp_customize->add_setting(
	    'mobile_menu_background_colour',
	    array(
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'mobile_menu_background_colour',
	        array(
	        	'label'   => 'Background Colour',
	            'section' => 'mobile_menu_section',
	            'settings' => 'mobile_menu_background_colour',
	            'description' => __( 'Change the background colour of the mobile menu.', 'cortex' ),
	            'priority' => 4
	        )
	    )
	);

	$wp_customize->add_setting(
	    'mobile_menu_icon_colour',
	    array(
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'mobile_menu_icon_colour',
	        array(
	        	'label'   => 'Icon Colour',
	            'section' => 'mobile_menu_section',
	            'settings' => 'mobile_menu_icon_colour',
	            'description' => __( 'Change the icon colour of the mobile menu button.', 'cortex' ),
	            'priority' => 4
	        )
	    )
	);

	// $wp_customize->add_setting(
	//     'mobile_menu_button_colour',
	//     array(
	//         'sanitize_callback' => 'sanitize_hex_color',
	//     )
	// );
	
	// $wp_customize->add_control(
	//     new WP_Customize_Color_Control(
	//         $wp_customize,
	//         'mobile_menu_button_colour',
	//         array(
	//         	'label'   => 'Button Background Colour',
	//             'section' => 'mobile_menu_section',
	//             'settings' => 'mobile_menu_button_colour',
	//             'description' => __( 'Change the background colour of mobile menu button', 'cortex' ),
	//             'priority' => 5
	//         )
	//     )
	// );
	
	?>
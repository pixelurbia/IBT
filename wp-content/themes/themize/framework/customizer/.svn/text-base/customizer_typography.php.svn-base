<?php

/*-----------------------------------------------------------------------------------

    CUSTOMIZER OTHER
    -----------------------------------------------------------------------------

    This file adds the typography settings into the customizer.
	Editing this file will break the theme and possibly the universe.

  
    TABLE OF CONTENTS
    -----------------------------------------------------------------------------

    1.0 TYPOGRAPHY PANEL
    ---------------------------
        1.1 Global Font
        1.2 Body Font
        1.3 Navigation Font
        1.4 Sub menu Font
        1.5 Heading Font
        1.6 Footer Font

-----------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------*/
/*	Typography Panel
/*-----------------------------------------------------------------------------------*/

$wp_customize->add_panel( 'typography', array(
	'priority' => 2,
	'capability' => 'edit_theme_options',
	'theme_supports' => '',
	'title' => 'Typography',
) );

/*-----------------------------------------------------------------------------------*/
/*	Global Font
/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'global_font', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Global font', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 1, 
			'panel' => 'typography'
		)
	);
	
	$wp_customize->add_setting( 'global_font', array(
		'default' => 'Open Sans',
		'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control( new Google_Font_Dropdown_Custom_Control( $wp_customize, 'global_fonts', array(
	    'label'   => 'Global Font',
	    'section' => 'global_font',
	    'settings'   => 'global_font',
	    'description' => 'This is the main font used for the entire theme. You can then change individual elements in the options below.',
	    'priority' => 20, 
	) ) );

/*-----------------------------------------------------------------------------------*/
/*	Body Font
/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'body_font', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Body typography', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 2, 
			'panel' => 'typography'
		)
	);

	$wp_customize->add_setting(
	    'body_font_colour',
	    array(
	        'default' => '#888',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'body_font_colour',
	        array(
	            'label' => 'Colour',
	            'section' => 'body_font',
	            'settings' => 'body_font_colour',
	            'priority' => 30
	        )
	    )
	);
		
	$wp_customize->add_setting( 'body_font_size', array(
        'default'        => '13.5px',
        'sanitize_callback' => 'sanitize_setting',
    ));

	$wp_customize->add_control(
	    'body_font_size',
	    array(
	        'label' => 'Font size',
	        'section' => 'body_font',
	        'type' => 'text',
	        'priority' => 40,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '100',
		        'data-from' > '13.5',
		        'data-step' => '0.5',
		        'data-postfix' => 'px',
		        'data-hideminmax' => "true"
		    ),
	    )
	);
	
	$wp_customize->add_setting( 'body_font_line_height', array(
        'default'        => '2.2',
        'sanitize_callback' => 'sanitize_setting',
    ));

	$wp_customize->add_control(
	    'body_font_line_height',
	    array(
	        'label' => 'Line Height',
	        'section' => 'body_font',
	        'type' => 'text',
	        'priority' => 50,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '20',
		        'data-from' > '2.2',
		        'data-step' => '0.1',
		        'data-hideminmax' => "true"
		    ),
	    )
	);
	
	$wp_customize->add_setting( 'body_font_letter_spacing', array(
        'default'        => '0px',
        'sanitize_callback' => 'sanitize_setting',
    ));

	$wp_customize->add_control(
	    'body_font_letter_spacing',
	    array(
	        'label' => 'Letter Spacing',
	        'section' => 'body_font',
	        'type' => 'text',
	        'priority' => 60, 
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '-20',
		        'data-max' => '20',
		        'data-from' > '0',
		        'data-step' => '0.1',
		        'data-postfix' => 'px',
		        'data-hideminmax' => "true"
		    ),
	    )
	);

/*-----------------------------------------------------------------------------------*/
/*	Navigation Font
/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'navigation_font', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Navigation typography', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 3, 
			'panel' => 'typography'
		)
	);
	
	$wp_customize->add_setting( 'main_navigation_heading', array('sanitize_callback' => 'sanitize_setting',) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'main_navigation_heading', array(
	    'label'   => 'Change the font',
	    'section' => 'navigation_font',
	    'settings'   => 'main_navigation_heading',
	    'priority' => 70, 
	) ) );
	
	$wp_customize->add_setting( 'navigation_font', array(
		'default' => 'Open Sans',
		'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control( new Google_Font_Dropdown_Custom_Control( $wp_customize, 'navigation_fonts', array(
	    'label'   => 'Navigation Font',
	    'section' => 'navigation_font',
	    'settings'   => 'navigation_font',
	    'priority' => 80, 
	) ) );

	$wp_customize->add_setting( 'navigation_font_other_settings', array('sanitize_callback' => 'sanitize_setting',) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'navigation_font_other_settings', array(
	    'label'   => 'Other Settings',
	    'section' => 'navigation_font',
	    'settings'   => 'navigation_font_other_settings',
	    'priority' => 81, 
	) ) );
	
	$wp_customize->add_setting(
	    'navigation_font_colour',
	    array(
	        'default' => '#555',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'navigation_font_colour',
	        array(
	            'label' => 'Colour',
	            'section' => 'navigation_font',
	            'settings' => 'navigation_font_colour',
	            'priority' => 90
	        )
	    )
	);
	
	$wp_customize->add_setting(
	    'navigation_scrolled_font_colour',
	    array(
	        'default' => '',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'navigation_scrolled_font_colour',
	        array(
	            'label' => 'Mini Menu Colour',
	            'section' => 'navigation_font',
	            'settings' => 'navigation_scrolled_font_colour',
	            'priority' => 91
	        )
	    )
	);
		
	$wp_customize->add_setting( 'navigation_font_size', array(
        'default'        => '11',
        'sanitize_callback' => 'sanitize_setting',
    ));
	
	$wp_customize->add_control(
	    'navigation_font_size',
	    array(
	        'label' => 'Font size',
	        'description' => 'Default: 11px',
	        'section' => 'navigation_font',
	        'type' => 'text',
	        'priority' => 100, 
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
		
	$wp_customize->add_setting( 'navigation_font_letter_spacing', array(
        'default'        => '1',
        'sanitize_callback' => 'sanitize_setting',
    ));

	$wp_customize->add_control(
	    'navigation_font_letter_spacing',
	    array(
	        'label' => 'Letter Spacing',
	        'description' => 'Default: 5px',
	        'section' => 'navigation_font',
	        'type' => 'text',
	        'priority' => 110,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '-100',
		        'data-max' => '100',
		        'data-step' => '1',
		        'data-postfix' => 'px',
		        'data-hideminmax' => "true"
		    ),
	    )
	);
		
	$wp_customize->add_setting( 'navigation_font_weight', array(
        'default'        => '600',
        'sanitize_callback' => 'sanitize_setting',
    ));

	$wp_customize->add_control(
	    'navigation_font_weight',
	    array(
	        'label' => 'Font Weight',
	        'description' => 'Default: 600',
	        'section' => 'navigation_font',
	        'type' => 'text',
	        'priority' => 120,
	        'input_attrs' => array(
		        'class' => 'font-weight',
		    ),
	    )
	);

	$wp_customize->add_setting(
	    'navigation_font_transform',
	    array(
	        'default' => 'uppercase',
	        'sanitize_callback' => 'sanitize_setting',
    )
	);
 
	$wp_customize->add_control(
	    'navigation_font_transform',
	    array(
	        'type' => 'select',
	        'label' => 'Text Transform',
	        'description' => 'Uppercase',
	        'section' => 'navigation_font',
	        'choices' => array(
	            'none' => 'None',
	            'capitalize' => 'Capitalize',
	            'uppercase' => 'Uppercase',
	            'lowercase' => 'Lowercase',
	            'initial' => 'Initial',
	            'inherit' => 'Inherit',
	        ),
	        'priority' => 121
	    )
	);

/*-----------------------------------------------------------------------------------*/
/*	Sub Menu Font
/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'sub_menu_typography', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Sub Menu Typography', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 4, 
			'panel' => 'typography'
		)
	);

	$wp_customize->add_setting( 'sub_menu_heading', array('sanitize_callback' => 'sanitize_setting',) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'sub_menu_heading', array(
	    'label'   => 'Change the font',
	    'section' => 'sub_menu_typography',
	    'settings'   => 'sub_menu_heading',
	    'priority' => 70,
	) ) );
	
	$wp_customize->add_setting( 'sub_menu_font', array(
		'default' => 'Open Sans',
		'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control( new Google_Font_Dropdown_Custom_Control( $wp_customize, 'sub_menu_font', array(
	    'label'   => 'Sub Menu Font',
	    'section' => 'sub_menu_typography',
	    'settings'   => 'sub_menu_font',
	    'priority' => 80,
	) ) );

	$wp_customize->add_setting( 'submenu_navigation_heading', array('sanitize_callback' => 'sanitize_setting',) );

	$wp_customize->add_control( new Section_Heading( $wp_customize, 'submenu_navigation_heading', array(
	    'label'   => 'Sub Menu Typography',
	    'section' => 'sub_menu_typography',
	    'settings'   => 'main_navigation_heading',
	    'priority' => 130
	) ) );
		
	$wp_customize->add_setting(
	    'submenu_font_colour',
	    array(
	        'default' => '#555',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
    
    );
	    
    $wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'submenu_font_colour',
        array(
            'label' => 'Colour',
            'section' => 'sub_menu_typography',
            'settings' => 'submenu_font_colour',
            'priority' => 150
            )
        )
    );
	    
    $wp_customize->add_setting(
	    'submenu_hover_font_colour',
	    array(
	        'default' => '#333',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
    );
	    
    $wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'submenu_hover_font_colour',
        array(
            'label' => 'Hover Colour',
            'section' => 'sub_menu_typography',
            'settings' => 'submenu_hover_font_colour',
            'priority' => 160
            )
        )
    );

    $wp_customize->add_setting(
	    'submenu_font_transform',
	    array(
	        'default' => 'none',
	        'sanitize_callback' => 'sanitize_setting',
    )
	);
 
	$wp_customize->add_control(
	    'submenu_font_transform',
	    array(
	        'type' => 'select',
	        'label' => 'Text Transform',
	        'description' => 'Uppercase',
	        'section' => 'sub_menu_typography',
	        'choices' => array(
	            'none' => 'None',
	            'capitalize' => 'Capitalize',
	            'uppercase' => 'Uppercase',
	            'lowercase' => 'Lowercase',
	            'initial' => 'Initial',
	            'inherit' => 'Inherit',
	        ),
	        'priority' => 170
	    )
	);

	    
    $wp_customize->add_setting( 'submenu_font_size', array(
        'default'        => '11.5px',
        'sanitize_callback' => 'sanitize_setting',
    ));

	$wp_customize->add_control(
	    'submenu_font_size',
	    array(
	        'label' => 'Font size',
	        'description' => 'Default: 11.5px',
	        'section' => 'sub_menu_typography',
	        'type' => 'text',
	        'priority' => 180,
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

	$wp_customize->add_setting( 'submenu_font_weight', array(
        'default'        => '400',
        'sanitize_callback' => 'sanitize_setting',
    ));

	$wp_customize->add_control(
	    'submenu_font_weight',
	    array(
	        'label' => 'Font Weight',
	        'description' => 'Default: 400',
	        'section' => 'sub_menu_typography',
	        'type' => 'text',
	        'priority' => 190,
	        'input_attrs' => array(
		        'class' => 'font-weight',
		    ),
	    )
	);

	$wp_customize->add_setting( 'submenu_font_letter_spacing', array(
        'default'        => '0px',
        'sanitize_callback' => 'sanitize_setting',
    ));

	$wp_customize->add_control(
	    'submenu_font_letter_spacing',
	    array(
	        'label' => 'Letter Spacing',
	        'description' => 'Default: 0px',
	        'section' => 'sub_menu_typography',
	        'type' => 'text',
	        'priority' => 200,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '-20',
		        'data-max' => '20',
		        'data-step' => '0.1',
		        'data-postfix' => 'px',
		        'data-hideminmax' => "true"
		    ),
	    )
	);
	

/*-----------------------------------------------------------------------------------*/
/*	Heading Typography
/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'heading_typography', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Headings Typography', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 5, 
			'panel' => 'typography'
		)
	);

	$wp_customize->add_setting( 'heading_heading', array('sanitize_callback' => 'sanitize_setting',) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'heading_heading', array(
	    'label'   => 'Heading Typography',
	    'section' => 'heading_typography',
	    'settings'   => 'heading_heading',
	    'priority' => 180
	) ) );
	
	$wp_customize->add_setting( 'heading_font', array(
		'default' => 'Open Sans',
		'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control( new Google_Font_Dropdown_Custom_Control( $wp_customize, 'heading_font', array(
	    'label'   => 'Heading Font',
	    'section' => 'heading_typography',
	    'settings'   => 'heading_font',
	    'priority' => 190, 
	) ) );

	$wp_customize->add_setting(
	    'heading_font_colour',
	    array(
	        'default' => '#222',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'heading_font_colour',
	        array(
	            'label' => 'Colour',
	            'section' => 'heading_typography',
	            'settings' => 'heading_font_colour',
	            'priority' => 191
	        )
	    )
	);

	$wp_customize->add_setting( 'heading_letter_spacing', array(
        'default'        => '1',
        'sanitize_callback' => 'sanitize_setting',
    ));

	$wp_customize->add_control(
	    'heading_letter_spacing',
	    array(
	        'label' => 'Letter Spacing',
	        'description' => 'Default: 0px',
	        'section' => 'heading_typography',
	        'type' => 'text',
	        'priority' => 200,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '-20',
		        'data-max' => '20',
		        'data-postfix' => 'px',
		        'data-step' => '0.1',
		        'data-hideminmax' => "true"
		    ),
	    )
	);
		
	$wp_customize->add_setting( 'heading_weight', array(
        'default'        => '300',
        'sanitize_callback' => 'sanitize_setting',
    ));

	$wp_customize->add_control(
	    'heading_weight',
	    array(
	        'label' => 'Heading Weight',
	        'description' => 'Default: 300',
	        'section' => 'heading_typography',
	        'type' => 'text',
	        'priority' => 210,
	        'input_attrs' => array(
		        'class' => 'font-weight',
		    ),
	    )
	);

	$wp_customize->add_setting(
	    'heading_transform',
	    array(
	        'default' => 'none',
	        'sanitize_callback' => 'sanitize_setting',
    	)
	);
 
	$wp_customize->add_control(
	    'heading_transform',
	    array(
	        'type' => 'select',
	        'label' => 'Text Transform',
	        'description' => 'Uppercase',
	        'section' => 'heading_typography',
	        'choices' => array(
	            'none' => 'None',
	            'capitalize' => 'Capitalize',
	            'uppercase' => 'Uppercase',
	            'lowercase' => 'Lowercase',
	            'initial' => 'Initial',
	            'inherit' => 'Inherit',
	        ),
	        'priority' => 220
	    )
	);
	
	

	
/*-----------------------------------------------------------------------------------*/
/*	Footer typography
/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'footer_typography', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Footer Typography', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 6, 
			'panel' => 'typography'
		)
	);

	/*-----------------------------------------------------------------------------------*/
	/*	Widget Footer
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_setting( 'widget_footer_typography_heading', array('sanitize_callback' => 'sanitize_setting',) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'widget_footer_typography_heading', array(
	    'label'   => 'Widget Footer',
	    'section' => 'footer_typography',
	    'settings'   => 'widget_footer_typography_heading',
	    'priority' => 1
	) ) );

	$wp_customize->add_setting(
	    'widget_font_colour',
	    array(
	        'default' => 'light',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );
    
    $wp_customize->add_control(
	    'widget_font_colour',
	    array(
	        'type' => 'radio',
	        'label' => 'Font colour',
	        'description' => 'Choose a dark or light font colour. If you have a dark background colour, choose light.',
	        'section' => 'footer_typography',
	        'choices' => array(
	            'light' => 'Light',
	            'dark' => 'Dark',
	        ),
	        'priority' => 2
	    )
    );

	/*-----------------------------------------------------------------------------------*/
	/*	Menu typography
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_setting( 'menu_footer_typography_heading', array('sanitize_callback' => 'sanitize_setting',) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'menu_footer_typography_heading', array(
	    'label'   => 'Menu Footer',
	    'section' => 'footer_typography',
	    'settings'   => 'menu_footer_typography_heading',
	    'priority' => 7
	) ) );

	$wp_customize->add_setting(
	    'menu_font_colour',
	    array(
	        'default' => 'light',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );
    
    $wp_customize->add_control(
	    'menu_font_colour',
	    array(
	        'type' => 'radio',
	        'label' => 'Font colour',
	        'description' => 'Choose a dark or light font colour. If you have a dark background colour, choose light.',
	        'section' => 'footer_typography',
	        'choices' => array(
	            'light' => 'Light',
	            'dark' => 'Dark',
	        ),
	        'priority' => 8
	    )
    );
	
	$wp_customize->add_setting( 'menu_font_size', array(
        'default'        => '10px',
        'sanitize_callback' => 'sanitize_setting',
    ));
	
	$wp_customize->add_control(
	    'menu_font_size',
	    array(
	        'label' => 'Font size',
	        'description' => 'Default: 11px',
	        'section' => 'footer_typography',
	        'type' => 'text',
	        'priority' => 9,
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
		
	$wp_customize->add_setting( 'menu_font_letter_spacing', array(
        'default'        => '2px',
        'sanitize_callback' => 'sanitize_setting',
    ));

	$wp_customize->add_control(
	    'menu_font_letter_spacing',
	    array(
	        'label' => 'Letter Spacing',
	        'description' => 'Default: 2px',
	        'section' => 'footer_typography',
	        'type' => 'text',
	        'priority' => 10,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '-20',
		        'data-max' => '20',
		        'data-step' => '0.1',
		        'data-postfix' => 'px',
		        'data-hideminmax' => "true"
		    ),
	    )
	);
		
	$wp_customize->add_setting( 'menu_font_weight', array(
        'default'        => '600',
        'sanitize_callback' => 'sanitize_setting',
    ));

	$wp_customize->add_control(
	    'menu_font_weight',
	    array(
	        'label' => 'Font Weight',
	        'description' => 'Default: 600',
	        'section' => 'footer_typography',
	        'type' => 'text',
	        'priority' => 11,
	        'input_attrs' => array(
		        'class' => 'font-weight',
		    ),
	    )
	);

	$wp_customize->add_setting(
	    'menu_font_transform',
	    array(
	        'default' => 'uppercase',
	        'sanitize_callback' => 'sanitize_setting',
    )
	);
 
	$wp_customize->add_control(
	    'menu_font_transform',
	    array(
	        'type' => 'select',
	        'label' => 'Text Transform',
	        'description' => 'Uppercase',
	        'section' => 'footer_typography',
	        'choices' => array(
	            'none' => 'None',
	            'capitalize' => 'Capitalize',
	            'uppercase' => 'Uppercase',
	            'lowercase' => 'Lowercase',
	            'initial' => 'Initial',
	            'inherit' => 'Inherit',
	        ),
	        'priority' => 12
	    )
	);

	/*-----------------------------------------------------------------------------------*/
	/*	Copyright typography
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_setting( 'copyright_footer_typography_heading', array('sanitize_callback' => 'sanitize_setting',) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'copyright_footer_typography_heading', array(
	    'label'   => 'Copyright Footer',
	    'section' => 'footer_typography',
	    'settings'   => 'copyright_footer_typography_heading',
	    'priority' => 13
	) ) );

	$wp_customize->add_setting(
	    'copyright_font_colour',
	    array(
	        'default' => 'light',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );
    
    $wp_customize->add_control(
	    'copyright_font_colour',
	    array(
	        'type' => 'radio',
	        'label' => 'Font colour',
	        'description' => 'Choose a dark or light font colour. If you have a dark background colour, choose light.',
	        'section' => 'footer_typography',
	        'choices' => array(
	            'light' => 'Light',
	            'dark' => 'Dark',
	        ),
	        'priority' => 14
	    )
    );
	
	$wp_customize->add_setting( 'copyright_font_size', array(
        'default'        => '10px',
        'sanitize_callback' => 'sanitize_setting',
    ));
	
	$wp_customize->add_control(
	    'copyright_font_size',
	    array(
	        'label' => 'Font size',
	        'description' => 'Default: 11px',
	        'section' => 'footer_typography',
	        'type' => 'text',
	        'priority' => 15,
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
		
	$wp_customize->add_setting( 'copyright_font_letter_spacing', array(
        'default'        => '1px',
        'sanitize_callback' => 'sanitize_setting',
    ));

	$wp_customize->add_control(
	    'copyright_font_letter_spacing',
	    array(
	        'label' => 'Letter Spacing',
	        'description' => 'Default: 5px',
	        'section' => 'footer_typography',
	        'type' => 'text',
	        'priority' => 16,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '-20',
		        'data-max' => '20',
		        'data-step' => '0.1',
		        'data-postfix' => 'px',
		        'data-hideminmax' => "true"
		    ),
	    )
	);
		
	$wp_customize->add_setting( 'copyright_font_weight', array(
        'default'        => '600',
        'sanitize_callback' => 'sanitize_setting',
    ));

	$wp_customize->add_control(
	    'copyright_font_weight',
	    array(
	        'label' => 'Font Weight',
	        'description' => 'Default: 600',
	        'section' => 'footer_typography',
	        'type' => 'text',
	        'priority' => 17,
	        'input_attrs' => array(
		        'class' => 'font-weight',
		    ),
	    )
	);

	$wp_customize->add_setting(
	    'copyright_font_transform',
	    array(
	        'default' => 'uppercase',
	        'sanitize_callback' => 'sanitize_setting',
    )
	);
 
	$wp_customize->add_control(
	    'copyright_font_transform',
	    array(
	        'type' => 'select',
	        'label' => 'Text Transform',
	        'description' => 'Uppercase',
	        'section' => 'footer_typography',
	        'choices' => array(
	            'none' => 'None',
	            'capitalize' => 'Capitalize',
	            'uppercase' => 'Uppercase',
	            'lowercase' => 'Lowercase',
	            'initial' => 'Initial',
	            'inherit' => 'Inherit',
	        ),
	        'priority' => 18
	    )
	);
	?>
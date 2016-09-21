<?php
/*-----------------------------------------------------------------------------------

    CUSTOMIZER GENERAL
    -----------------------------------------------------------------------------

    This file adds the general settings into the customizer.
	Editing this file will break the theme and possibly the universe.


    TABLE OF CONTENTS
    -----------------------------------------------------------------------------

    1.0 PRESETS
    ---------------------------

    2.0 GENERAL PANEL
    ---------------------------
        1.1 Theme Colour
        1.2 Layout Width
        1.3 Logo
        1.4 Layout
        1.5 Background
        1.6 Buttons
        1.7 Sitewide Alert
        1.8 Preloader

-----------------------------------------------------------------------------------*/
	
	/*-----------------------------------------------------------------------------------*/
	/*	1.0 Presets
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'support_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => 'Request Support', # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => -4
		)
	);

	$wp_customize->add_setting( 'Support', array(
		'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control( new Support_Control( $wp_customize, 'support', array(
	    'label'   => 'Support',
	    'section' => 'support_section',
	    'settings'   => 'Support',
	    'priority' => 1
	) ) );

	$wp_customize->add_section(
		'easy_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => 'Easy Options', # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => -3,
		)
	);

	$wp_customize->add_setting( 'easy_settings', array(
		'sanitize_callback' => 'sanitize_setting',
	) );

	$wp_customize->add_control( new Section_Description( $wp_customize, 'easy_settings', array(
	    'label'   => "Easy Options",
	    'section' => 'easy_section',
	    'settings'   => 'easy_settings',
	    'priority' => 1
	) ) );

	$wp_customize->add_section(
		'quick_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => 'Quick Options', # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => -2,
		)
	);

	$wp_customize->add_setting( 'quick_settings', array(
		'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control( new Quick_Control( $wp_customize, 'quick_settings', array(
	    'label'   => 'Quick Settings',
	    'section' => 'quick_section',
	    'settings'   => 'quick_settings',
	    'priority' => -2
	) ) );

	$wp_customize->add_section(
		'preset_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => 'Presets', # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => -1,
		)
	);

	$wp_customize->add_setting( 'presets', array(
		'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control( new Preset_Control( $wp_customize, 'presets', array(
	    'label'   => 'Presets',
	    'section' => 'preset_section',
	    'settings'   => 'presets',
	    'priority' => 1
	) ) );

	$wp_customize->add_section(
		'advanced_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => 'Advanced Options', # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 0,
		)
	);

	$wp_customize->add_setting( 'advanced_settings', array(
		'sanitize_callback' => 'sanitize_setting',
	) );

	$wp_customize->add_control( new Section_Description( $wp_customize, 'advanced_settings', array(
	    'label'   => "Advanced Section",
	    'section' => 'advanced_section',
	    'settings'   => 'presets',
	    'priority' => 1
	) ) );

	/*-----------------------------------------------------------------------------------*/
	/*	General Settings Panel
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_panel( 'general_settings', array(
		'priority' => 1,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => 'General',
	) );

	/*-----------------------------------------------------------------------------------*/
	/*	Accent Colour
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'accent_colour_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Accent Colour', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 1,
			'panel' => 'general_settings',
		)
	);

	$wp_customize->add_setting(
	    'theme_colour',
	    array(
	        'default' => '#29ABE2',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'color-setting',
	        array(
	        	'label'   => 'Colour',
	            'section' => 'accent_colour_section',
	            'settings' => 'theme_colour',
	            'description' => __( 'Change the main theme colour for the theme. Menu hover, default buttons, links etc', 'cortex' ),
	            'priority' => 20
	        )
	    )
	);

	/*-----------------------------------------------------------------------------------*/
	/*	Layout Width
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'layout_width_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Layout Width', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => -1,
			'panel' => 'general_settings',
		)
	);

	$wp_customize->add_setting( 'layout_width_desktop', array(
        'default'        => '1170px',
        'sanitize_callback' => 'sanitize_setting',
    ));
	
	$wp_customize->add_control(
	    'layout_width_desktop',
	    array(
	        'label' => 'Layout Width Desktop',
	        'section' => 'layout_width_section',
	        'description' => 'Default: 1170px',
	        'type' => 'text',
	        'priority' => 1,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '700',
		        'data-max' => '1400',
		        'data-postfix' => 'px',
		        'data-step' => '1',
		        'data-hideminmax' => "true"
		    ),
	    )
	);
	
	$wp_customize->add_setting( 'layout_width_tablet_landscape', array(
        'default'        => '970px',
        'sanitize_callback' => 'sanitize_setting',
    ));
	
	$wp_customize->add_control(
	    'layout_width_tablet_landscape',
	    array(
	        'label' => 'Layout Width (Tablet Landscape)',
	        'section' => 'layout_width_section',
	        'description' => 'Default: 970px',
	        'type' => 'text',
	        'priority' => 2,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '600',
		        'data-max' => '1000',
		        'data-step' => '1',
		        'data-postfix' => 'px',
		        'data-hideminmax' => "true"
		    ),
	    )
	);

	$wp_customize->add_setting( 'layout_width_tablet_portrait', array(
        'default'        => '750px',
        'sanitize_callback' => 'sanitize_setting',
    ));
	
	$wp_customize->add_control(
	    'layout_width_tablet_portrait',
	    array(
	        'label' => 'Layout Width (Tablet Portrait)',
	        'section' => 'layout_width_section',
	        'description' => 'Default: 750px',
	        'type' => 'text',
	        'priority' => 3,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '500',
		        'data-max' => '970',
		        'data-step' => '1',
		        'data-postfix' => 'px',
		        'data-hideminmax' => "true"
		    ),
	    )
	);

	/*-----------------------------------------------------------------------------------*/
	/*	Logo
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'logo_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Logo', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 2,
			'panel' => 'general_settings',
		)
	);

	$wp_customize->add_setting(
	    'logo',
	    array(
	        'default' => 'text_logo',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );
    
    $wp_customize->add_control(
	    'logo',
	    array(
	        'type' => 'radio',
	        'label' => 'Logo Option',
	        'section' => 'logo_section',
	        'choices' => array(
	            'text_logo' => 'Text Logo',
	            'image_logo' => 'Image Logo'
	        ),
	        'priority' => 1
	    )
    );
	
	/* TEXT LOGO */

	$wp_customize->add_setting( 'text_logo_heading', array(
		'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'text_logo_heading', array(
	    'label'   => 'Text Logo',
	    'section' => 'logo_section',
	    'settings' => 'text_logo_heading',
	    'priority' => 2
	) ) );

    $wp_customize->add_setting( 'logo_text', array(
        'default'        => 'Themize',
        'sanitize_callback' => 'sanitize_setting',
    ));
	
	$wp_customize->add_control(
	    'logo_text',
	    array(
	        'label' => 'Logo Text',
	        'section' => 'logo_section',
	        'type' => 'text',
	        'description' => 'Add your logo text',
	        'priority' => 3
	    )
	);

	$wp_customize->add_setting( 'logo_font', array(
		'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control( new Google_Font_Dropdown_Custom_Control( $wp_customize, 'logo_font', array(
	    'label'   => 'Logo Font',
	    'section' => 'logo_section',
	    'settings'   => 'logo_font',
	    'description' => 'Change the font of your logo',
	    'priority' => 4, 
	) ) );

	$wp_customize->add_setting( 'logo_font_size', array(
        'default'        => '24px',
        'sanitize_callback' => 'sanitize_setting',
    ));
	
	$wp_customize->add_control(
	    'logo_font_size',
	    array(
	        'label' => 'Logo Font Size',
	        'section' => 'logo_section',
	        'type' => 'text',
	        'description' => 'Change logo font size',
	        'priority' => 5,
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

	$wp_customize->add_setting( 'mini_logo_font_size', array(
        'default'        => '18px',
        'sanitize_callback' => 'sanitize_setting',
    ));
	
	$wp_customize->add_control(
	    'mini_logo_font_size',
	    array(
	        'label' => 'Mini Logo Font Size',
	        'section' => 'logo_section',
	        'type' => 'text',
	        'description' => 'You can use a different font size for the mini menu',
	        'priority' => 6,
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

	$wp_customize->add_setting( 'logo_font_letterspacing', array(
        'default'        => '0px',
        'sanitize_callback' => 'sanitize_setting',
    ));

    $wp_customize->add_control(
	    'logo_font_letterspacing',
	    array(
	        'label' => 'Logo Font Letterspacing',
	        'section' => 'logo_section',
	        'type' => 'text',
	        'description' => 'Change the letter spacing',
	        'priority' => 9,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '-10',
		        'data-step' => '0.1',
		        'data-max' => '10',
		        'data-postfix' => 'px',
		        'data-hideminmax' => "true"
		    ),
	    )
	);

    $wp_customize->add_setting('logo_font_style', array(
	        'default' => 'normal',
	        'sanitize_callback' => 'sanitize_setting',
	    ));
    
    $wp_customize->add_control(
	    'logo_font_style',
	    array(
	        'type' => 'radio',
	        'label' => 'Logo Option',
	        'section' => 'logo_section',
	        'choices' => array(
	            'normal' => 'Normal',
	            'italic' => 'Italic'
	        ),
	        'priority' => 7
	    )
    );

    $wp_customize->add_setting('logo_copyright', array(
	        'default' => 'none',
	        'sanitize_callback' => 'sanitize_setting',
	    ));
    
    $wp_customize->add_control(
	    'logo_copyright',
	    array(
	        'type' => 'radio',
	        'label' => 'Logo Copyright',
	        'description' => 'Add a copyright symbol in the corner of the logo',
	        'section' => 'logo_section',
	        'choices' => array(
	            'none' => 'None',
	            'copyright' => '(C)',
	            'registered_trademark' => 'R',
	            'trademark' => 'TM'
	        ),
	        'priority' => 8
	    )
    );

	$wp_customize->add_setting( 'logo_font_weight', array(
        'default'        => '600',
        'sanitize_callback' => 'sanitize_setting',
    ));

	$wp_customize->add_control(
	    'logo_font_weight',
	    array(
	        'label' => 'Logo Font Weight',
	        'section' => 'logo_section',
	        'type' => 'text',
	        'description' => 'Change the font weight',
	        'priority' => 10,
	        'input_attrs' => array(
		        'class' => 'font-weight',
		    ),
	    )
	);

	$wp_customize->add_setting(
	    'logo_colour',
	    array(
	        'default' => '#555',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'logo_colour',
	        array(
	        	'label'   => 'Logo Colour',
	            'section' => 'logo_section',
	            'settings' => 'logo_colour',
	            'description' => 'Change the logo colour',
	            'priority' => 11
	        )
	    )
	);

	$wp_customize->add_setting(
	    'mini_logo_colour',
	    array(
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'mini_logo_colour',
	        array(
	        	'label'   => 'Mini Menu Logo Colour',
	            'section' => 'logo_section',
	            'settings' => 'mini_logo_colour',
	            'description' => 'You can use a different logo colour for the mini menu', 'cortex',
	            'priority' => 12
	        )
	    )
	);

	/* IMAGE LOGO */
    $wp_customize->add_setting( 'image_logo_heading', array(
    	'sanitize_callback' => 'sanitize_setting',
    ) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'image_logo_heading', array(
	    'label'   => 'Image Logo',
	    'section' => 'logo_section',
	    'settings'   => 'image_logo_heading',
	    'priority' => 13
	) ) );

	$wp_customize->add_setting( 'logo_image', array(
		'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'img-upload',
	        array(
	            'label' => 'Image Upload',
	            'description' => 'Upload your logo',
	            'section' => 'logo_section',
	            'settings' => 'logo_image',
	            'priority' => 14
	        )
	    )
	);
	
	$wp_customize->add_setting( 'logo_size', array(
        'default'        => '120',
        'sanitize_callback' => 'sanitize_setting',
    ));
	
	$wp_customize->add_control(
	    'logo_size',
	    array(
	        'label' => 'Logo Size',
	        'section' => 'logo_section',
	        'type' => 'text',
	        'description' => 'Default: 120px',
	        'priority' => 15,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '100',
		        'data-max' => '400',
		        'data-step' => '1',
		        'data-postfix' => 'px',
		        'data-hideminmax' => "true"
		    ),
	    )
	);

	/* OTHER LOGO SETTINGS */
    $wp_customize->add_setting( 'other_logo_heading', array(
    	'sanitize_callback' => 'sanitize_setting',
    ) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'other_logo_heading', array(
	    'label'   => 'Image Logo',
	    'section' => 'logo_section',
	    'settings'   => 'other_logo_heading',
	    'priority' => 16
	) ) );
	
	$wp_customize->add_setting( 'logo_padding', array(
        'default'        => '0px',
        'sanitize_callback' => 'sanitize_setting',
    ));
	
	$wp_customize->add_control(
	    'logo_padding',
	    array(
	        'label' => 'Logo Padding',
	        'section' => 'logo_section',
	        'type' => 'text',
	        'priority' => 17,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '200',
		        'data-step' => '1',
		        'data-postfix' => 'px',
		        'data-hideminmax' => "true"
		    ),
	    )
	);

	/*-----------------------------------------------------------------------------------*/
	/*	Layout
	/*-----------------------------------------------------------------------------------*/
	
	$wp_customize->add_section(
		'layout_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Layout', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 2,
			'panel' => 'general_settings',
		)
	);

    $wp_customize->add_setting( 'layout', array(
    	'sanitize_callback' => 'sanitize_setting',
    ) );
 
	$wp_customize->add_control( new Layout_Picker_Custom_Control( $wp_customize, 'layout', array(
	    'label'   => 'Layout',
	    'description'   => 'Select your layout',
	    'section' => 'layout_section',
	    'settings'   => 'layout',
	    'priority' => 210
	) ) );

	
	/*-----------------------------------------------------------------------------------*/
	/*	Background
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'background_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Background', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 6,
			'panel' => 'general_settings',
		)
	);
	
	$wp_customize->add_setting( 'background_heading', array(
		'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'background_heading', array(
	    'label'   => 'Main Background',
	    'section' => 'background_section',
	    'settings'   => 'background_heading',
	    'priority' => 210
	) ) );
	
	$wp_customize->add_setting(
	    'background_colour',
	    array(
	        'default' => '#f7f7f7',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'background_colour',
	        array(
	            'label' => 'Background',
	            'section' => 'background_section',
	            'settings' => 'background_colour',
	            'priority' => 220
	        )
	    )
	);
	
	$wp_customize->add_setting( 'background_image', array(
		'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'background_image',
	        array(
	            'label' => 'Background Image',
	            'section' => 'background_section',
	            'settings' => 'background_image',
	            'priority' => 230
	        )
	    )
	);
	
	$wp_customize->add_setting('background_fixed', array(
		'sanitize_callback' => 'sanitize_setting',
	));
    
    $wp_customize->add_control(
	    'background_fixed',
	    array(
	        'type' => 'checkbox',
	        'label' => 'Fixed background',
	        'section' => 'background_section',
	        'priority' => 240
	    )
	);
	
	$wp_customize->add_setting( 'boxed_background_heading', array(
		'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'boxed_background_heading', array(
	    'label'   => 'Boxed Background',
	    'section' => 'background_section',
	    'settings'   => 'boxed_background_heading',
	    'priority' => 250
	) ) );
	
	$wp_customize->add_setting(
	    'boxed_background_colour',
	    array(
	        'default' => '#f5f5f5',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'boxed_background_colour',
	        array(
	            'label' => 'Background',
	            'section' => 'background_section',
	            'settings' => 'boxed_background_colour',
	            'priority' => 260
	        )
	    )
	);
	
	$wp_customize->add_setting( 'boxed_background_image', array(
		'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'boxed_background_image',
	        array(
	            'label' => 'Background Image',
	            'section' => 'background_section',
	            'settings' => 'boxed_background_image',
	            'priority' => 270
	        )
	    )
	);
	
	$wp_customize->add_setting('boxed_background_fixed', array(
		'sanitize_callback' => 'sanitize_setting',
	));
    
    $wp_customize->add_control(
	    'boxed_background_fixed',
	    array(
	        'type' => 'checkbox',
	        'label' => 'Fixed background',
	        'section' => 'background_section',
	        'priority' => 280
	    )
	);

/*-----------------------------------------------------------------------------------*/
/*	Buttons
/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'button_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Buttons', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 6,
			'panel' => 'general_settings',
		)
	);
	
	$wp_customize->add_setting( 'buttons_heading', array(
		'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'buttons_heading', array(
	    'label'   => 'Buttons',
	    'section' => 'button_section',
	    'settings'   => 'buttons_heading',
	    'priority' => 10
	) ) );
	
	$wp_customize->add_setting(
	    'button_text_transform',
	    array(
	        'default' => 'uppercase',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );
    
    $wp_customize->add_control(
	    'button_text_transform',
	    array(
	        'type' => 'radio',
	        'label' => 'Text Transform',
	        'section' => 'button_section',
	        'choices' => array(
	            'normal' => 'Normal',
	            'uppercase' => 'Uppercase'
	        ),
	        'priority' => 20
	    )
    );
    
   $wp_customize->add_setting(
	    'button_letter_spacing',
	    array(
	        'default' => '2px',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );
    
    $wp_customize->add_control(
	    'button_letter_spacing',
	    array(
	        'label' => 'Letter Spacing',
	        'section' => 'button_section',
	        'type' => 'text',
	        'priority' => 40,
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
    
    $wp_customize->add_setting(
	    'button_radius',
	    array(
	        'default' => '3px',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );
    
    $wp_customize->add_control(
	    'button_radius',
	    array(
	        'label' => 'Rounded Corners',
	        'section' => 'button_section',
	        'type' => 'text',
	        'priority' => 50,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '200',
		        'data-step' => '1',
		        'data-postfix' => 'px',
		        'data-hideminmax' => "true"
		    ),
	    )
    );
    
    $wp_customize->add_setting(
	    'button_size',
	    array(
	        'default' => '10px',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );
    
    $wp_customize->add_control(
	    'button_size',
	    array(
	        'label' => 'Size',
	        'section' => 'button_section',
	        'type' => 'text',
	        'priority' => 60,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '8',
		        'data-max' => '30',
		        'data-step' => '1',
		        'data-postfix' => 'px',
		        'data-hideminmax' => "true"
		    ),
	    )
    );

/*-----------------------------------------------------------------------------------*/
/*	Sitewide Alert
/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'sitewide_alert_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Site Wide Alert', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'description' => __( 'Add an alert on all your pages to notify your users of something special or important', 'cortex' ),
			'priority' => 7,
			'panel' => 'general_settings'
		)
	);
	
	$wp_customize->add_setting('enable_alert', array(
		'sanitize_callback' => 'sanitize_setting',
	));
    
    $wp_customize->add_control(
	    'enable_alert',
	    array(
	        'type' => 'checkbox',
	        'label' => 'Enable Alert',
	        'section' => 'sitewide_alert_section',
	        'priority' => 1
	    )
	);
	
	$wp_customize->add_setting( 'alert_id', array(
        'default'        => 'specialoffer',
        'sanitize_callback' => 'sanitize_setting',
    ));
	
	$wp_customize->add_control(
	    'alert_id',
	    array(
	        'label' => 'Set a new ID each time you create a new alert. This will make the alert reappear again for anybody that previously closed it. Try not to use reuse a previous ID. Do not use any spaces or special characters.',
	        'section' => 'sitewide_alert_section',
	        'type' => 'text',
	        'priority' => 2
	    )
	);
	
	$wp_customize->add_setting( 'alert_content', array(
   		 'default'        => 'e.g Holy Moly! This is a site wide alert :O',
   		 'type' => 'option',
   		 'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'alert_content', array(
	    'label'   => 'Alert Content',
	    'section' => 'sitewide_alert_section',
	    'settings'   => 'alert_content',
	    'priority' => 3
	) ) );
	
	$wp_customize->add_setting( 'alert_close_text', array(
        'default'        => 'e.g close',
        'type' => 'option',
        'sanitize_callback' => 'sanitize_setting',
    ));
	
	$wp_customize->add_control(
	    'alert_close_text',
	    array(
	        'label' => 'Alert Close Text',
	        'section' => 'sitewide_alert_section',
	        'type' => 'text',
	        'priority' => 4
	    )
	);
	
	$wp_customize->add_setting(
	    'alert_colour',
	    array(
	        'default' => '#2D3033',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'alert_colour',
	        array(
	        	'label'   => 'Alert Colour',
	            'section' => 'sitewide_alert_section',
	            'settings' => 'alert_colour',
	            'priority' => 5
	        )
	    )
	);
	
	/*-----------------------------------------------------------------------------------*/
	/*	Preloader
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'preloader_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Preloader', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'description' => __( 'Displays a preloader until content has been loaded', 'cortex' ),
			'priority' => 8,
			'panel' => 'general_settings'
		)
	);

	$wp_customize->add_setting(
	    'preloader',
	    array(
	        'default' => 'enable',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );
    
    $wp_customize->add_control(
	    'preloader',
	    array(
	        'type' => 'radio',
	        'label' => 'Preloader',
	        'section' => 'preloader_section',
	        'choices' => array(
	            'enable' => 'Enable',
	            'disable' => 'Disable'
	        ),
	        'priority' => 1
	    )
    );

    $wp_customize->add_setting( 'preloader_styling_heading', array(
    	'sanitize_callback' => 'sanitize_setting',
    ) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'preloader_styling_heading', array(
	    'label'   => 'Preloader Styling',
	    'section' => 'preloader_section',
	    'settings'   => 'preloader_styling_heading',
	    'priority' => 2
	) ) );

	$wp_customize->add_setting(
	    'preloader_background_colour',
	    array(
	        'default' => '#f7f7f7',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'preloader_background_colour',
	        array(
	            'label' => 'Background',
	            'section' => 'preloader_section',
	            'settings' => 'preloader_background_colour',
	            'priority' => 3
	        )
	    )
	);

	$wp_customize->add_setting(
	    'preloader_icon_colour',
	    array(
	        'default' => '#ccc',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'preloader_icon_colour',
	        array(
	            'label' => 'Icon Colour',
	            'section' => 'preloader_section',
	            'settings' => 'preloader_icon_colour',
	            'priority' => 4
	        )
	    )
	);

	$wp_customize->add_setting(
	    'preloader_icon',
	    array(
	        'default' => 'fa-circle-o-notch',
	        'sanitize_callback' => 'sanitize_setting',
	    )
	);
 
	$wp_customize->add_control(
	    'preloader_icon',
	    array(
	        'type' => 'select',
	        'label' => 'Choose a preloader icon',
	        'section' => 'preloader_section',
	        'choices' => array(
	            'fa-circle-o-notch' => 'Circle Notch',
	            'fa-cog' => 'Cog',
	            'fa-refresh' => 'Refresh',
	            'fa-square' => 'Square',
	            'fa-square-o' => 'Square 2',
	            'fa-minus-square' => 'Minus Square',
	            'fa-minus-square-o' => 'Minus Square 2',
	            'fa-plus-square' => 'Plus Square',
	            'fa-plus-square-o' => 'Plus Square 2',
	            'fa-times' => 'Cross',
	            'fa-times-circle' => 'Cross Circle',
	            'fa-times-circle-o' => 'Cross Circle 2',
	            'fa-wifi' => 'Wifi',
	            'fa-heart' => 'Heart',
	            'fa-heart-o' => 'Heart 2',
	            'fa-send' => 'Paper Plane',
	            'fa-life-ring' => 'Life Ring',
	            'fa-bomb' => 'Bomb',
	            'fa-arrows-h' => 'Arrows',
	            'fa-plus' => 'Plus',
	            'fa-smile-o' => 'Smile',
	            'fa-star' => 'Star',
	            'fa-star-o' => 'Star 2',
	            'fa-tint' => 'Tint',
	            'fa-lightbulb-o' => 'Lightbulb',
	            'fa-location-arrow' => 'Location Arrow',
	            'fa-globe' => 'Globe',
	            'fa-camera' => 'Camera',
	            'fa-camera-retro' => 'Camera Retro',
	            'fa-asterisk' => 'Asterisk',
	        ),
			'priority' => 5
	    )
	);

	$wp_customize->add_setting( 'preloader_icon_size', array(
        'default'        => '32px',
        'sanitize_callback' => 'sanitize_setting',
    ));
	
	$wp_customize->add_control(
	    'preloader_icon_size',
	    array(
	        'label' => 'Letter Spacing',
	        'description' => 'Default: 32px',
	        'section' => 'preloader_section',
	        'type' => 'text',
	        'priority' => 16,
	        'input_attrs' => array(
		        'class' => 'range',
		        'data-min' => '0',
		        'data-max' => '150',
		        'data-step' => '1',
		        'data-postfix' => 'px',
		        'data-hideminmax' => "true"
		    ),
	    )
	);

	/*-----------------------------------------------------------------------------------*/
	/*	Breadcrumbs
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'breadcrumb_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Breadcrumbs', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'description' => __( 'Breadcrumb Settings', 'cortex' ),
			'priority' => 9,
			'panel' => 'general_settings'
		)
	);

	$wp_customize->add_setting( 'breadcrumb_heading', array(
		'sanitize_callback' => 'sanitize_setting',
	) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'breadcrumb_heading', array(
	    'label'   => 'Breadcrumbs',
	    'section' => 'breadcrumb_section',
	    'settings'   => 'breadcrumb_heading',
	    'priority' => 11
	) ) );
	
	$wp_customize->add_setting(
	    'breadcrumbs_background',
	    array(
	        'default' => '#f1f1f1',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'breadcrumbs_background',
	        array(
	            'label' => 'Background',
	            'section' => 'breadcrumb_section',
	            'settings' => 'breadcrumbs_background',
	            'priority' => 12
	        )
	    )
	);
	
	$wp_customize->add_setting(
	    'breadcrumb',
	    array(
	        'default' => 'enable',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );
    
    $wp_customize->add_control(
	    'breadcrumb',
	    array(
	        'type' => 'radio',
	        'label' => 'Breadcrumbs',
	        'section' => 'breadcrumb_section',
	        'choices' => array(
	            'enable' => 'Enable',
	            'disable' => 'Disable'
	        ),
	        'priority' => 13
	    )
    );
    
    $wp_customize->add_setting( 'breadcrumb_description', array(
    	'sanitize_callback' => 'sanitize_setting',
    ) );
 
	$wp_customize->add_control( new Section_Description( $wp_customize, 'breadcrumb_description', array(
	    'label'   => 'Breadcrumbs',
	    'section' => 'breadcrumb_section',
	    'settings'   => 'breadcrumb_description',
	    'priority' => 14,
	    'label' => 'Disabling/enabling breadcrumbs is controlled individually for pages in the page editor. The option above enables/disables breadcrumbs for auto generated pages and posts.'
	) ) );


	if (class_exists('LayerSlider')) {


	/*-----------------------------------------------------------------------------------*/
	/*	Layerslider
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'layerslider_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'LayerSlider', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'description' => __( 'LayerSlider Settings', 'cortex' ),
			'priority' => 10,
			'panel' => 'general_settings'
		)
	);
		
		$wp_customize->add_setting(
		    'layerslider_arrow_colour',
		    array(
		        'default' => '#ffffff',
		        'sanitize_callback' => 'sanitize_hex_color',
		    )
		);
		
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'layerslider_arrow_colour',
		        array(
		            'label' => 'Arrow Colours',
		            'section' => 'layerslider_section',
		            'settings' => 'layerslider_arrow_colour',
		            'priority' => 16
		        )
		    )
		);
		
		$wp_customize->add_setting(
		    'layerslider_arrow_bg_colour',
		    array(
		        'default' => '',
		        'sanitize_callback' => 'sanitize_hex_color',
		    )
		);
		
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'layerslider_arrow_bg_colour',
		        array(
		            'label' => 'Arrow Background Colours',
		            'section' => 'layerslider_section',
		            'settings' => 'layerslider_arrow_bg_colour',
		            'priority' => 17
		        )
		    )
		);
	}

	/*-----------------------------------------------------------------------------------*/
	/*	Blog
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'blog_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Blog', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 11,
			'panel' => 'general_settings',
		)
	);

	$wp_customize->add_setting(
	    'blog_sidebar',
	    array(
	        'default' => 'none',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );
    
    $wp_customize->add_control(
	    'blog_sidebar',
	    array(
	        'type' => 'radio',
	        'label' => 'Blog sidebar',
	        'section' => 'blog_section',
	        'choices' => array(
	            'left' => 'Left',
	            'right' => 'Right',
	            'none' => 'None',
	        ),
	        'priority' => 1
	    )
    );

    $wp_customize->add_setting( 'select_blog_sidebar', array(
    	'sanitize_callback' => 'sanitize_setting',
    ) );
 
	$wp_customize->add_control( new Sidebar_control( $wp_customize, 'select_blog_sidebar', array(
	    'label'   => 'Sidebar',
	    'section' => 'blog_section',
	    'settings'   => 'select_blog_sidebar',
	    'priority' => 2
	) ) );

	$wp_customize->add_setting(
	    'blog_post_meta',
	    array(
	        'default' => 'enable',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );
    
    $wp_customize->add_control(
	    'blog_post_meta',
	    array(
	        'type' => 'radio',
	        'label' => 'Blog Post Meta',
	        'description' => 'Enable/disable the post meta that is displayed underneath the post title',
	        'section' => 'blog_section',
	        'choices' => array(
	            'enable' => 'Enable',
	            'disable' => 'Disable',
	        ),
	        'priority' => 3
	    )
    );

    $wp_customize->add_setting(
	    'blog_author_info',
	    array(
	        'default' => 'enable',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );

    $wp_customize->add_control(
	    'blog_author_info',
	    array(
	        'type' => 'radio',
	        'label' => 'Blog Author Info',
	        'description' => 'Enable/disable the author info displayed at the end of a post',
	        'section' => 'blog_section',
	        'choices' => array(
	            'enable' => 'Enable',
	            'disable' => 'Disable',
	        ),
	        'priority' => 4
	    )
    );

    ?>
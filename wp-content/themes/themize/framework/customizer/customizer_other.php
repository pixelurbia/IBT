<?php

/*-----------------------------------------------------------------------------------

    CUSTOMIZER OTHER
    -----------------------------------------------------------------------------

    This file adds the other settings into the customizer.
	Editing this file will break the theme and possibly the universe.

  
    TABLE OF CONTENTS
    -----------------------------------------------------------------------------
    1.0 OTHER PANEL
    ---------------------------
        1.1 Custom CSS
        1.2 Custom JS
        1.3 Tracking Code
        1.5 Unlimited Sidebars

-----------------------------------------------------------------------------------*/

	/*-----------------------------------------------------------------------------------*/
	/*	Other Panel
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_panel( 'other_settings', array(
		'priority' => 5,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => 'Other Settings',
	) );

	/*-----------------------------------------------------------------------------------*/
	/*	Custom CSS
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'custom_css_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Custom CSS', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 1,
			'panel' => 'other_settings',
		)
	);
	
	$wp_customize->add_setting( 'custom_css', array('sanitize_callback' => 'sanitize_setting_css',) );
	
	$wp_customize->add_control(
	    'custom_css',
	    array(
	        'label' => 'Custom CSS',
	        'section' => 'custom_css_section',
	        'type' => 'textarea',
	        'description' => 'Add some custom CSS in here.',
	        'priority' => 1
	    )
	);

	/*-----------------------------------------------------------------------------------*/
	/*	Custom JS
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'custom_js_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Custom JS', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 2,
			'panel' => 'other_settings',
		)
	);
	
	$wp_customize->add_setting( 'custom_js', array('sanitize_callback' => 'sanitize_setting_js',) );
	
	$wp_customize->add_control(
	    'custom_js',
	    array(
	        'label' => 'Custom JS',
	        'section' => 'custom_js_section',
	        'type' => 'textarea',
	        'description' => 'Add some custom JS in here inside script tags.',
	        'priority' => 1
	    )
	);

	/*-----------------------------------------------------------------------------------*/
	/*	Tracking Code
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'tracking_code_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Tracking Code', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 3,
			'panel' => 'other_settings',
		)
	);
	
	$wp_customize->add_setting( 'tracking_code', array('sanitize_callback' => 'sanitize_setting',) );
	
	$wp_customize->add_control(
	    'tracking_code',
	    array(
	        'label' => 'Tracking Code',
	        'section' => 'tracking_code_section',
	        'type' => 'textarea',
	        'description' => 'Add your tracking code in here inside script tags.',
	        'priority' => 1
	    )
	);

	/*-----------------------------------------------------------------------------------*/
	/*	Favicon
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'favicon_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Favicon and iPhone Icons', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 4,
			'panel' => 'other_settings',
		)
	);

	$wp_customize->add_setting( 'favicon_heading', array('sanitize_callback' => 'sanitize_setting',) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'favicon_heading', array(
	    'label'   => 'Favicon',
	    'section' => 'favicon_section',
	    'settings'   => 'favicon_heading',
	    'priority' => 1
	) ) );
	
	$wp_customize->add_setting( 'favicon', array('sanitize_callback' => 'sanitize_setting',) );
 
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'favicon',
	        array(
	            'label' => 'Favicon',
	            'description' => 'Upload your favicon',
	            'section' => 'favicon_section',
	            'settings' => 'favicon',
	            'priority' => 2
	        )
	    )
	);

	$wp_customize->add_setting( 'apple_icons_heading', array('sanitize_callback' => 'sanitize_setting',) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'apple_icons_heading', array(
	    'label'   => 'Apple Icons',
	    'section' => 'favicon_section',
	    'settings'   => 'apple_icons_heading',
	    'priority' => 3
	) ) );

	$wp_customize->add_setting( 'apple_icon_60x60', array('sanitize_callback' => 'sanitize_setting',) );
 
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'apple_icon_60x60',
	        array(
	            'label' => 'iPhone / iPod',
	            'description' => 'size(px): 60x60',
	            'section' => 'favicon_section',
	            'settings' => 'apple_icon_60x60',
	            'priority' => 4
	        )
	    )
	);

	$wp_customize->add_setting( 'apple_icon_120x120', array('sanitize_callback' => 'sanitize_setting',) );
 
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'apple_icon_120x120',
	        array(
	            'label' => 'iPhone / iPod (retina)',
	            'description' => 'size(px): 120x120',
	            'section' => 'favicon_section',
	            'settings' => 'apple_icon_120x120',
	            'priority' => 5
	        )
	    )
	);

	$wp_customize->add_setting( 'apple_icon_76x76', array('sanitize_callback' => 'sanitize_setting',) );
 
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'apple_icon_76x76',
	        array(
	            'label' => 'iPad',
	            'description' => 'size(px): 76x76',
	            'section' => 'favicon_section',
	            'settings' => 'apple_icon_76x76',
	            'priority' => 6
	        )
	    )
	);

	$wp_customize->add_setting( 'apple_icon_152x152', array('sanitize_callback' => 'sanitize_setting',) );
 
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'apple_icon_152x152',
	        array(
	            'label' => 'iPad (retina)',
	            'description' => 'size(px): 152x152',
	            'section' => 'favicon_section',
	            'settings' => 'apple_icon_152x152',
	            'priority' => 7
	        )
	    )
	);
	/*-----------------------------------------------------------------------------------*/
	/*	Unlimited Sidebars
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'unlimited_sidebars', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Unlimited Sidebars', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'description' => __( 'Choose how many sidebars you would like', 'cortex' ),
			'priority' => 5,
			'panel' => 'other_settings',
		)
	);
	
	$wp_customize->add_setting( 'number_of_sidebars', array(
        'default'        => '3',
        'sanitize_callback' => 'sanitize_setting',
    ));

	$wp_customize->add_control(
	    'number_of_sidebars',
	    array(
	        'label' => 'Specify the number of extra sidebars you would like',
	        'section' => 'unlimited_sidebars',
	        'type' => 'text',
	        'priority' => 2
	    )
	);

	/*-----------------------------------------------------------------------------------*/
	/*	Twitter
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'twitter_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Twitter API', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'description' => __( 'Twitter API Credentials', 'cortex' ),
			'priority' => 6,
			'panel' => 'other_settings',
		)
	);
	
	$wp_customize->add_setting(
	    'twitter_consumer_key',
	    array(
	        'default' => '',
	        'sanitize_callback' => 'sanitize_setting',
	    )
	);
	
	$wp_customize->add_control(
	    'twitter_consumer_key',
	    array(
	        'label' => 'Consumer Key',
	        'section' => 'twitter_section',
	        'type' => 'text',
	        'priority' => 5
	    )
	);
	
	$wp_customize->add_setting(
	    'twitter_consumer_secret',
	    array(
	        'default' => '',
	        'sanitize_callback' => 'sanitize_setting',
	    )
	);
	
	$wp_customize->add_control(
	    'twitter_consumer_secret',
	    array(
	        'label' => 'Consumer Secret',
	        'section' => 'twitter_section',
	        'type' => 'text',
	        'priority' => 6
	    )
	);
	
	$wp_customize->add_setting(
	    'twitter_access_token',
	    array(
	        'default' => '',
	        'sanitize_callback' => 'sanitize_setting',
	    )
	);
	
	$wp_customize->add_control(
	    'twitter_access_token',
	    array(
	        'label' => 'Access Token',
	        'section' => 'twitter_section',
	        'type' => 'text',
	        'priority' => 7
	    )
	);
	
	$wp_customize->add_setting(
	    'twitter_access_token_secret',
	    array(
	        'default' => '',
	        'sanitize_callback' => 'sanitize_setting',
	    )
	);
	
	$wp_customize->add_control(
	    'twitter_access_token_secret',
	    array(
	        'label' => 'Access Token Secret',
	        'section' => 'twitter_section',
	        'type' => 'text',
	        'priority' => 8
	    )
	);

	/*-----------------------------------------------------------------------------------*/
	/*	License Key
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'one_click_installer', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'One Click Installer', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'description' => __( 'This option is for re-enabling the one click installer. Usually used for when something goes wrong. We recommend that you only use this when advised by support staff. Reinstalling may cause duplicate content.', 'themize' ),
			'priority' => 7,
			'panel' => 'other_settings',
		)
	);

	$wp_customize->add_setting(
	    'themize_installed',
	    array(
	        'default' => 'enable',
	        'type' => 'option',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );
    
    $wp_customize->add_control(
	    'themize_installed',
	    array(
	        'type' => 'radio',
	        'label' => 'One Click Installer',
	        'section' => 'one_click_installer',
	        'choices' => array(
	            'installed' => 'Disabled',
	            '' => 'Enabled'
	        ),
	        'priority' => 1
	    )
    );

    /*-----------------------------------------------------------------------------------*/
	/*	Style Switcher
	/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'option_samples', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Option Samples', 'themize' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'description' => __( 'This option is for enabling the option samples available in the demo', 'themize' ),
			'priority' => 8,
			'panel' => 'other_settings',
		)
	);

	$wp_customize->add_setting(
	    'option_samples_enable',
	    array(
	        'default' => 'disable',
	        'type' => 'option',
	        'sanitize_callback' => 'sanitize_setting',
	    )
    );
    
    $wp_customize->add_control(
	    'option_samples_enable',
	    array(
	        'type' => 'radio',
	        'label' => 'Enable Options Samples',
	        'section' => 'option_samples',
	        'choices' => array(
	            'disable' => 'Disabled',
	            'enable' => 'Enabled'
	        ),
	        'priority' => 1
	    )
    );
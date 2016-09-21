<?php
/*-----------------------------------------------------------------------------------

    CUSTOMIZER FOOTER
    -----------------------------------------------------------------------------

    This file adds the footer settings into the customizer.
	Editing this file will break the theme and possibly the universe.


    TABLE OF CONTENTS
    -----------------------------------------------------------------------------

    1.0 FOOTER PANEL
    ---------------------------
        1.1 Widget Footer
        1.2 Menu Footer
        1.3 Copyright Footer

-----------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------*/
/*	1.0 Footer Panel
/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_panel( 'footer_settings', array(
		'priority' => 4,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => 'Footer',
	) );

/*-----------------------------------------------------------------------------------*/
/*	1.1 Custom Footer
/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'custom_footer_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Custom Footer', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 1,
			'description' => 'Create a seperate page with a custom footer and then select the page from the dropdown list below',
			'panel' => 'footer_settings'
		)
	);

	$wp_customize->add_setting( 'custom_footer', array(
	'sanitize_callback' => 'sanitize_setting',
	'type' => 'option',
	) );
 
	$wp_customize->add_control( new Footer_Control( $wp_customize, 'custom_footer', array(
	    'label'   => 'Custom Footer',
	    'section' => 'custom_footer_section',
	    'settings'   => 'custom_footer',
	    'priority' => 7
	) ) );

/*-----------------------------------------------------------------------------------*/
/*	1.1 Widget Footer
/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'widget_footer_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Widget Footer', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'priority' => 2,
			'panel' => 'footer_settings'
		)
	);
	
	$wp_customize->add_setting( 'widget_footer_heading2', array(
		'sanitize_callback' => 'sanitize_setting',
		) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'widget_footer_heading2', array(
	    'label'   => 'Menu footer',
	    'section' => 'widget_footer_section',
	    'settings'   => 'widget_footer_heading2',
	    'priority' => 1
	) ) );
	
	$wp_customize->add_setting('widget_footer', array(
		'sanitize_callback' => 'sanitize_setting',
	));
	
	$wp_customize->add_control(
	    'widget_footer',
	    array(
	        'type' => 'checkbox',
	        'label' => 'Enable Widget Footer',
	        'section' => 'widget_footer_section',
	        'priority' => 2
	    )
	);
	
	$wp_customize->add_setting(
	    'widget_footer_background_colour',
	    array(
	        'default' => '#333',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'widget_footer_background_colour',
	        array(
	            'label' => 'Background',
	            'section' => 'widget_footer_section',
	            'settings' => 'widget_footer_background_colour',
	            'priority' => 6
	        )
	    )
	);
	$wp_customize->add_setting(
	    'widget_footer_columns',
	    array(
	        'default' => 'col-md-3',
	        'sanitize_callback' => 'sanitize_setting',
	    )
	);
 
	$wp_customize->add_control(
	    'widget_footer_columns',
	    array(
	        'type' => 'select',
	        'label' => 'Number of widget columns',
	        'section' => 'widget_footer_section',
	        'choices' => array(
	        	'col-md-6' => 'Two',
	        	'col-md-4' => 'Three',
	            'col-md-3' => 'Four',
	        ),
			'priority' => 7
	    )
	);

/*-----------------------------------------------------------------------------------*/
/*	1.2 Menu Footer
/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'menu_footer_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Menu Footer', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'description' => __( 'Menu Footer', 'cortex' ),
			'priority' => 3,
			'panel' => 'footer_settings'
		)
	);
	
	
	$wp_customize->add_setting( 'menu_footer_heading2', array(
		'sanitize_callback' => 'sanitize_setting',
		) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'menu_footer_heading2', array(
	    'label'   => 'Menu footer',
	    'section' => 'menu_footer_section',
	    'settings'   => 'menu_footer_heading2',
	    'priority' => 1
	) ) );
	
	$wp_customize->add_setting('menu_footer', array(
	        'default' => 'enable',
	        'sanitize_callback' => 'sanitize_setting',
	    ));
	
	$wp_customize->add_control(
	    'menu_footer',
	    array(
	        'type' => 'checkbox',
	        'label' => 'Enable Menu Footer',
	        'section' => 'menu_footer_section',
	        'priority' => 2
	    )
	);
	
	$wp_customize->add_setting(
	    'menu_footer_background_colour',
	    array(
	        'default' => '#2a2a2a',
	        'sanitize_callback' => 'sanitize_hex_color',
	        'sanitize_callback' => 'sanitize_setting',
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'menu_footer_background_colour',
	        array(
	            'label' => 'Background',
	            'section' => 'menu_footer_section',
	            'settings' => 'menu_footer_background_colour',
	            'priority' => 6
	        )
	    )
	);

/*-----------------------------------------------------------------------------------*/
/*	1.3 Copyright Footer
/*-----------------------------------------------------------------------------------*/

	$wp_customize->add_section(
		'copyright_footer_section', # Section ID to use in Option Table
		array( # Arguments array
			'title' => __( 'Copyright Footer', 'cortex' ), # Translatable text, change the text domain to your own
			'capability' => 'edit_theme_options', # Permission to change option date
			'description' => __( 'Copyright Footer', 'cortex' ),
			'priority' => 4,
			'panel' => 'footer_settings'
		)
	);
	
	$wp_customize->add_setting( 'copyright_footer_heading2', array(
		'sanitize_callback' => 'sanitize_setting',
		) );
 
	$wp_customize->add_control( new Section_Heading( $wp_customize, 'copyright_footer_heading2', array(
	    'label'   => 'Copyright footer',
	    'section' => 'copyright_footer_section',
	    'settings'   => 'copyright_footer_heading2',
	    'priority' => 7
	) ) );
	
	$wp_customize->add_setting('copyright_footer', array(
	        'default' => 'enable',
	        'sanitize_callback' => 'sanitize_setting',
	    ));
	
	$wp_customize->add_control(
	    'copyright_footer',
	    array(
	        'type' => 'checkbox',
	        'label' => 'Enable Copyright Footer',
	        'section' => 'copyright_footer_section',
	        'priority' => 8
	    )
	);

	$wp_customize->add_setting( 'copyright_footer_text', array(
        'default'        => '',
        'type' => 'option',
        'sanitize_callback' => 'sanitize_setting',
    ));
	
	$wp_customize->add_control(
	    'copyright_footer_text',
	    array(
	        'label' => 'Copyright Footer Text',
	        'section' => 'copyright_footer_section',
	        'type' => 'text',
	        'priority' => 9
	    )
	);
	
	$wp_customize->add_setting(
	    'copyright_footer_background_colour',
	    array(
	        'default' => '#222',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'copyright_footer_background_colour',
	        array(
	            'label' => 'Background',
	            'section' => 'copyright_footer_section',
	            'settings' => 'copyright_footer_background_colour',
	            'priority' => 10
	        )
	    )
	);
	?>
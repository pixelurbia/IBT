<?php
/**
 *  Install Add-ons
 *  
 *  The following code will include all 4 premium Add-Ons in your theme.
 *  Please do not attempt to include a file which does not exist. This will produce an error.
 *  
 *  The following code assumes you have a folder 'add-ons' inside your theme.
 *
 *  IMPORTANT
 *  Add-ons may be included in a premium theme/plugin as outlined in the terms and conditions.
 *  For more information, please read:
 *  - http://www.advancedcustomfields.com/terms-conditions/
 *  - http://www.advancedcustomfields.com/resources/getting-started/including-lite-mode-in-a-plugin-theme/
 */ 

// Add-ons 
include_once('add-ons/acf-repeater/acf-repeater.php');
// include_once('add-ons/acf-gallery/acf-gallery.php');
// include_once('add-ons/acf-flexible-content/acf-flexible-content.php');
// include_once( 'add-ons/acf-options-page/acf-options-page.php' );

/**
 *  Register Field Groups
 *
 *  The register_field_group function accepts 1 array which holds the relevant data to register a field group
 *  You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 */
 
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_page-settings',
		'title' => 'Page Settings',
		'fields' => array (
			array (
				'key' => 'field_523c6bdc01879',
				'label' => 'General',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_523c6b2401878',
				'label' => 'Breadcrumb',
				'name' => 'breadcrumb',
				'type' => 'true_false',
				'instructions' => 'Breadcrumbs provide a trail of links for the user to follow back to the starting or entry pages. If enabled it will appear horizontally at the top of the content.',
				'message' => 'Enable Breadcrumb',
				'default_value' => 0,
			),
			array (
				'key' => 'field_524affca21ce9',
				'label' => 'Sidebar Position',
				'name' => 'sidebar_position',
				'type' => 'select',
				'instructions' => 'Select the sidebar position',
				'choices' => array (
					'left' => 'left',
					'right' => 'right',
				),
				'default_value' => '',
				'allow_null' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5406d9c7d9a6f',
				'label' => 'Select Sidebar',
				'name' => 'select_sidebar',
				'type' => 'select',
				'instructions' => 'Choose which sidebar you want to display',
				'choices' => array (
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_post-format',
		'title' => 'Post Format',
		'fields' => array (
			array (
				'key' => 'field_4',
				'label' => 'Gallery',
				'name' => 'gallery',
				'type' => 'tab',
			),
			array (
				'key' => 'field_115',
				'label' => 'Slider Images',
				'name' => 'slider_images',
				'type' => 'repeater',
				'instructions' => 'Click "Add row" and upload an image. You can upload multiple slides by clicking "Add row"',
				'sub_fields' => array (
					array (
						'key' => 'field_116',
						'label' => 'Slider Image',
						'name' => 'slider_image',
						'type' => 'image',
						'instructions' => 'Upload an image for your slider',
						'column_width' => '',
						'save_format' => 'url',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
				),
				'row_min' => 0,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_25',
				'label' => 'Image',
				'name' => '',
				'type' => 'tab',
				'instructions' => 'Please select the post type you would like to display. Further options for each post type are available in the tabs.',
				'required' => 1,
			),
			array (
				'key' => 'field_536b8c27017cf',
				'label' => 'Featured Image',
				'name' => '',
				'type' => 'message',
				'message' => 'Please use the featured image on the right to upload your image.',
			),
			array (
				'key' => 'field_132',
				'label' => 'Link',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_133',
				'label' => 'Link Title',
				'name' => 'link_title',
				'type' => 'text',
				'instructions' => 'Enter the title you would like to display for the link',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_134',
				'label' => 'Link URL',
				'name' => 'link_url',
				'type' => 'text',
				'instructions' => 'Enter the url for the link',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_23',
				'label' => 'Quote',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_22',
				'label' => 'Quote',
				'name' => 'the_quote',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'formatting' => 'none',
				'rows' => '',
			),
			array (
				'key' => 'field_15',
				'label' => 'Video',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_144',
				'label' => 'Video Embed',
				'name' => 'video_embed',
				'type' => 'textarea',
				'instructions' => 'Please enter the full embed code for the video. We recommend settings the of the video to 100%.',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'formatting' => 'html',
				'rows' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

?>
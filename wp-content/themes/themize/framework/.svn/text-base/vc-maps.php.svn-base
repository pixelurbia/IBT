<?php

function heading_param_settings_field($settings, $value) {
   $dependency = vc_generate_dependencies_attributes($settings);
   return '<div class="vc-options-heading">'
             .'<input name="'.$settings['param_name']
             .'" class="wpb_vc_param_value wpb-textinput '
             .$settings['param_name'].' '.$settings['type'].'_field" type="text" value="'
             .$value.'" ' . $dependency . '/>'
         .'</div>';
}

$add_css_animation = array(
  "type" => "dropdown",
  "heading" => __("CSS Animation", "js_composer"),
  "param_name" => "css_animation",
  "admin_label" => true,
  "value" => array(__("No", "js_composer") => '', __("Top to bottom", "js_composer") => "top-to-bottom", __("Bottom to top", "js_composer") => "bottom-to-top", __("Left to right", "js_composer") => "left-to-right", __("Right to left", "js_composer") => "right-to-left", __("Appear from center", "js_composer") => "appear"),
  "description" => __("Select animation type if you want this element to be animated when it enters into the browsers viewport. Note: Works only in modern browsers.", "js_composer")
);

/*-----------------------------------------------------------------------------------*/
/*  Add aditional params to row
/*-----------------------------------------------------------------------------------*/

vc_remove_element("vc_row");
vc_map( array(
    "name" => __("Row", "js_composer"),
    "base" => "vc_row",
    "is_container" => true,
    "icon" => "icon-wpb-row",
    "show_settings_on_create" => false,
    "category" => __('Content', 'js_composer'),
    "description" => __('Place content elements inside the row', 'js_composer'),
    "params" => array(
      array(
        "type" => "colorpicker",
        "heading" => __('Font Color', 'wpb'),
        "param_name" => "font_color",
        "description" => __("Select font color", "wpb"),
        "edit_field_class" => 'col-md-6'
      ),
      array(
      "type" => "dropdown",
      "holder" => "div",
      "class" => "",
      "heading" => "Row Type",
      "param_name" => "row_type",
      "value" => array(__("Normal", "js_composer") => 'normal', __("Full Width Row", "js_composer") => "full_width_row", __("Full Width Row + Content", "js_composer") => "full_width_row_content",  __("Header Slider Row", "js_composer") => "header_slider_row"),
      "description" => "Choose your row type"
    ),
    array(
      "type" => "checkbox",
      "holder" => "div",
      "class" => "",
      "param_name" => "parallax_bg",
      "value" => Array("Enable Parallax Background" => true),
      "description" => "This option will enable the parallax effect. Background image must set in Design Options."
    ),
    array(
        "type" => "textfield",
        "heading" => __("ID", "js_composer"),
        "param_name" => "row_id",
        "description" => __("Add an ID to this row. Can be used to create onepage layouts", "js_composer"),
      ),
      array(
        "type" => "textfield",
        "heading" => __("Extra class name", "js_composer"),
        "param_name" => "el_class",
        "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer"),
      ),
      array(
        "type" => "css_editor",
        "heading" => __('Css', "js_composer"),
        "param_name" => "css",
        // "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer"),
        "group" => __('Design options', 'js_composer')
      ),
    ),
    "js_view" => 'VcRowView'
  ) );


/*-----------------------------------------------------------------------------------*/
/*  Icons
/*-----------------------------------------------------------------------------------*/

vc_map( array(
  "name" => "Icon",
  "base" => "icon_element",
  "icon" => "icon-wpb-row",
  "class" => "",
  "category" => 'Content',
  "description" => "Add an icon to your page",
  "params" => array(
  array(
    "type" => "heading_param",
    "holder" => "div",
    "class" => "",
    "heading" => "Main Icon Settings",
    "param_name" => "main_icon_settings",
    "value" => '',
  ),
  array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => "Icon Name",
    "param_name" => "name",
    "description" => "A list of icon names are available in the documentation."
  ),
  array(
    "type" => "colorpicker",
    "holder" => "div",
    "class" => "",
    "heading" => "Icon Colour",
    "param_name" => "icon_colour",
    "value" => "#333333",
    "description" => "Change the icon colour."
  ),
  array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => "Icon Size",
    "param_name" => "size",
    "value" => "24px",
    "description" => "Specify an icon size in px."
  ),
  array(
    "type" => "heading_param",
    "holder" => "div",
    "class" => "",
    "heading" => "Icon background settings",
    "value" => '',
    "param_name" => "icon_background_settings",
    "description" => "Settings to add a background to the icon"
  ),
  array(
    "type" => "colorpicker",
    "holder" => "div",
    "class" => "",
    "heading" => "Icon Background",
    "param_name" => "icon_background",
    "description" => "Add a background to the icon. Leave empty for no background."
  ),
  array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => "Background Size",
    "param_name" => "background_size",
    "description" => "Specify a custom background size."
  ),
  array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => "Background Rounded Corners",
    "param_name" => "background_radius",
    "description" => "Add rounded corners in px. Use a high value to make a circle. "
  ),
  array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => "Background Border",
    "param_name" => "background_border",
    "description" => "Add a border to the background container. e.g 1px solid #fff."
  ),
  array(
    "type" => "heading_param",
    "holder" => "div",
    "class" => "",
    "heading" => "Other icon settings",
    "value" => '',
    "param_name" => "other_icon_settings",
    "description" => "A few other options for the icons"
  ),
  array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => "Icon Link",
    "param_name" => "icon_link",
    "description" => "Add a link to the icon"
  ),
  array(
    "type" => "dropdown",
    "holder" => "div",
    "class" => "",
    "heading" => "Link Target",
    "param_name" => "icon_link_target",
    "default" => "_self",
    "value" => array("_blank" => '_blank', "_self" => "_self", "_parent" => "_parent", "_top" => "_top"),
    "description" => "Specify how you want the link to open. use _blank to open in a new window/tab or use _self to open in the same window."
  ),
  array(
    "type" => "dropdown",
    "holder" => "div",
    "class" => "",
    "heading" => "Align",
    "param_name" => "element_align",
    "value" => array(__("Left", "js_composer") => 'left', __("Center", "js_composer") => "center", __("Right", "js_composer") => "right"),
    "description" => "Alignment settings"
  ),
  array(
    "type" => "heading_param",
    "holder" => "div",
    "class" => "",
    "heading" => "Popover/tooltip Options",
    "value" => '',
    "param_name" => "popover_settings",
    "description" => "These are the options for the popover/tooltip"
  ),
  array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => "Popover Title",
    "param_name" => "popover_title",
    "description" => "Add a popover title."
  ),
  array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => "Popover Content",
    "param_name" => "popover_content",
    "description" => "Add a popover content."
  ),
  array(
    "type" => "dropdown",
    "holder" => "div",
    "class" => "",
    "heading" => "Popover Position",
    "param_name" => "popover_placement",
    "value" => array(__("Top", "js_composer") => 'top', __("Right", "js_composer") => "right", __("Bottom", "js_composer") => "bottom", __("Left", "js_composer") => "left"),
    "description" => "Popover Alignment settings"
  ),
  array(
    "type" => "heading_param",
    "holder" => "div",
    "class" => "",
    "heading" => "Other Options",
    "value" => '',
    "param_name" => "other_options",
    "description" => "Animation and custom classes"
  ),
  array(
        "type" => "textfield",
        "heading" => "Extra class name", "js_composer",
        "param_name" => "el_class",
        "description" => "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer",
      ),
  $add_css_animation
      
   )
 ) );

/*-----------------------------------------------------------------------------------*/
/*  Pricing Table
/*-----------------------------------------------------------------------------------*/

vc_map( array(
   "name" => "Pricing Table",
   "base" => "pricing_table",
   "icon" => "icon-wpb-row",
   "class" => "",
   "category" => 'Content',
   "description" => "Add a pricing table column",
   "params" => array(
    array(
         "type" => "heading_param",
         "holder" => "div",
         "class" => "",
         "heading" => "Main Values",
         "param_name" => "main_values_heading",
         "description" => "Insert the main values for your pricing table"
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Price",
         "param_name" => "price",
         "value" => "$|20",
         "description" => "Enter the currency and price for this package. e.g $|20"
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Cycle",
         "param_name" => "cycle",
         "value" => "month",
         "description" => "Enter the billing cycle. e.g month/year/lifetime"
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Package",
         "param_name" => "package",
         "value" => "Starter",
         "description" => "Enter a name for this package"
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Package Tag",
         "param_name" => "package_tag",
         "description" => "Add a tag beside the package name. e.g Popular. Leave blank for no tag."
      ),
      array(
         "type" => "exploded_textarea",
         "holder" => "div",
         "class" => "",
         "heading" => "Features",
         "param_name" => "features",
         "description" => "Enter the features for this package. Divide each feature with a line break(enter)"
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Button Value",
         "param_name" => ("button_value"),
         "value" => "Sign up now",
         "description" => "Enter a value for the button"
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Link",
         "param_name" => "button_link",
         "description" => "Enter a link which you would like the button to point to"
      ),
      array(
         "type" => "heading_param",
         "holder" => "div",
         "class" => "",
         "heading" => "Colours",
         "param_name" => "colours_heading",
         "description" => "Specify custom colours for the table"
      ),
      array(
    "type" => "colorpicker",
    "holder" => "div",
    "class" => "",
    "heading" => "Heading Background Colour",
    "param_name" => "heading_background_colour",
    "description" => "Choose a custom heading background colour"
    ),
      array(
    "type" => "colorpicker",
    "holder" => "div",
    "class" => "",
    "heading" => "Background Colour",
    "param_name" => "background_colour",
    "description" => "Choose a custom background colour"
    ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => "Invert Text Colour",
         "param_name" => "invert_text",
         "description" => "If you are using a dark background colour, enable this to invert the text colour.",
         "value" => Array("Invert" => true),
      ),
     array(
         "type" => "heading_param",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover/tooltip",
         "param_name" => "popover_heading",
         "description" => "Add a popover or tooltip to the table"
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Title",
         "param_name" => "popover_title",
         "description" => "Add a popover title."
        ),
        array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Content",
         "param_name" => "popover_content",
         "description" => "Add a popover content."
        ),
        array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Position",
         "param_name" => "popover_placement",
          "value" => array(__("Top", "js_composer") => 'top', __("Right", "js_composer") => "right", __("Bottom", "js_composer") => "bottom", __("Left", "js_composer") => "left"),
         "description" => "Popover Alignment settings"
      ),
      array(
         "type" => "heading_param",
         "holder" => "div",
         "class" => "",
         "heading" => "Custom Class",
         "param_name" => "custom_class_heading",
         "description" => "Add a custom class name in here. You can add CSS for the class clicking on the CSS button in the corner of the page editor."
      ),
      array(
        "type" => "textfield",
        "heading" => __("Extra class name", "js_composer"),
        "param_name" => "el_class",
        "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer"),
      ),
       array(
         "type" => "heading_param",
         "holder" => "div",
         "class" => "",
         "heading" => "Animation",
         "param_name" => "animation_heading"
         ),
      $add_css_animation

   )
) );

/*-----------------------------------------------------------------------------------*/
/*  Recent Work
/*-----------------------------------------------------------------------------------*/

vc_map( array(
   "name" => "Recent Work",
   "base" => "recent_work",
   "icon" => "icon-wpb-row",
   "class" => "",
   "category" => 'Content',
   "description" => "Display your recent work from the Portfolio",
    "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number of posts",
         "param_name" => "posts_per_page",
         "value" => "3",
         "description" => "Specify how many posts you would like to display"
      )
   )

) );

/*-----------------------------------------------------------------------------------*/
/*  Recent Work (Full Width)
/*-----------------------------------------------------------------------------------*/

vc_map( array(
   "name" => "Recent Work (Full Width)",
   "base" => "recent_work_full_width",
   "icon" => "icon-wpb-row",
   "class" => "",
   "category" => 'Content',
   "description" => "Display your recent work in full width",
    "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number of posts",
         "param_name" => "posts_per_page",
         "value" => "4",
         "description" => "Specify how many posts you would like to display. For best results, it is recommended that all your portfolio images are the same size. Please upload your portfolio images by clicking on Portfolio in the dashboard"
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Image width",
         "param_name" => "image_width",
         "value" => "25%",
         "description" => "Specify a custom image width. The default is 25% for 4 columns. Use 33.3% for 3 columns. Additional images will automatically be moved to the next row."
      ),
      
   )

) );

/*-----------------------------------------------------------------------------------*/
/*  Recent Blog Posts
/*-----------------------------------------------------------------------------------*/

vc_map( array(
   "name" => "Recent Blog Posts",
   "base" => "recent_posts",
   "class" => "",
   "icon" => "icon-wpb-row",
   "category" => 'Content',
   "description" => "Display your recent blog posts",
    "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Number of posts",
         "param_name" => "posts_per_page",
         "value" => "3",
         "description" => "Specify how many posts you would like to display"
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => "Standard Post Format",
         "param_name" => "standard_post_format",
         "description" => "Enabling this will only display the standard post format, which means images, videos etc won't be shown.",
         "value" => Array("Standard Post Format" => true),
      ),
   )

) );

/*-----------------------------------------------------------------------------------*/
/*  Testimonial
/*-----------------------------------------------------------------------------------*/

vc_map( array(
   "name" => "Testimonial",
   "base" => "testimonial",
   "icon" => "icon-wpb-row",
   "class" => "",
   "category" => 'Content',
   "description" => "A testimonial with a small image",
    "params" => array(
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Image",
         "param_name" => "image_src",
         "description" => "Add an image"
      ),
      array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => "Content",
         "param_name" => "content",
         "description" => "Add your content"
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Name",
         "param_name" => "name",
         "description" => "Name"
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Website",
         "param_name" => "website",
         "description" => "Website"
      ),
      array(
      "type" => "",
      "param_name" => "advancedoptions",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover/tooltip Options",
         "description" => "These are the options for the popover/tooltip"
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Title",
         "param_name" => "popover_title",
         "description" => "Add a popover title."
        ),
        array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Content",
         "param_name" => "popover_content",
         "description" => "Add a popover content."
        ),
        array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Position",
         "param_name" => "popover_placement",
          "value" => array(__("Top", "js_composer") => 'top', __("Right", "js_composer") => "right", __("Bottom", "js_composer") => "bottom", __("Left", "js_composer") => "left"),
         "description" => "Popover Alignment settings"
      ),
      $add_css_animation,
   )

) );

/*-----------------------------------------------------------------------------------*/
/*  Magnify
/*-----------------------------------------------------------------------------------*/

vc_map( array(
   "name" => "Magnify Bubbles",
   "base" => "magnify",
   "icon" => "icon-wpb-row",
   "class" => "",
   "category" => 'Content',
   "description" => "Display two images in a magnify circle effect",
   "params" => array(
		array(
			"type" => "heading_param",
			"holder" => "div",
			"class" => "",
			"heading" => "Magnify Bubbles",
			"value" => '',
			"param_name" => "magnify_bubbles",
			"description" => "This element displays two images with a magnify effect around it. Please note that this element doesn't automatically magnify your images. It will display your images with the magnify effect. Please ensure the images you are uploading have equal height and width (square)."
		),
		array(
			"type" => "heading_param",
			"holder" => "div",
			"class" => "",
			"heading" => "First Bubble",
			"value" => '',
			"param_name" => "first_bubble"
		),
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => "First Bubble",
			"param_name" => "image_1",
			"description" => "Add your first image. Please ensure the images you are uploading have equal height and width (square)."
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => "First Bubble Link",
			"param_name" => "image_link_1",
			"description" => "Add your first image. Please ensure the images you are uploading have equal height and width (square)."
		),
		array(
			"type" => "heading_param",
			"holder" => "div",
			"class" => "",
			"heading" => "Second Bubble",
			"value" => '',
			"param_name" => "second_bubble"
		),
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => "Second Bubble",
			"param_name" => "image_2",
			"description" => "Add your second image. We recommend square images. Please note that this element doesn't automatically magnify your images. It will display your images with the magnify effect."
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => "Second Bubble Link",
			"param_name" => "image_link_2",
			"description" => "Add a link to the first bubble. Add an image in here to open it in a lightbox."
		),
		array(
			"type" => "heading_param",
			"holder" => "div",
			"class" => "",
			"heading" => "Size",
			"value" => '',
			"param_name" => "size_heading",
			"description" => "Specify a custom size. e.g 200px will give each bubble a 200px height and width."
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => "Size",
			"param_name" => "size",
			"description" => "e.g 500px"
		),
		array(
			"type" => "heading_param",
			"holder" => "div",
			"class" => "",
			"heading" => "Tooltip/Popover",
			"value" => '',
			"param_name" => "tooltip_popover",
			"description" => "Tooltip/popover options"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => "Popover Title",
			"param_name" => "popover_title",
			"description" => "Add a popover title."
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => "Popover Content",
			"param_name" => "popover_content",
			"description" => "Add a popover content."
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => "Popover Position",
			"param_name" => "popover_placement",
			"value" => array(__("Top", "js_composer") => 'top', __("Right", "js_composer") => "right", __("Bottom", "js_composer") => "bottom", __("Left", "js_composer") => "left"),
			"description" => "Popover Alignment settings"
		),
		array(
			"type" => "heading_param",
			"holder" => "div",
			"class" => "",
			"heading" => "Other Options",
			"value" => '',
			"param_name" => "other_options"
		),
		array(
			"type" => "textfield",
			"heading" => "Extra class name", "js_composer",
			"param_name" => "el_class",
			"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer"),
		),
		$add_css_animation,
    array(
      "type" => "heading_param",
      "holder" => "div",
      "class" => "",
      "heading" => "Magnify Bubbles",
      "value" => '',
      "param_name" => "magnify_bubbles",
      "description" => "This element displays two images with a magnify effect around it. Please note that this element doesn't automatically magnify your images. It will display your images with the magnify effect. Please ensure the images you are uploading have equal height and width (square)."
    ),
    array(
      "type" => "heading_param",
      "holder" => "div",
      "class" => "",
      "heading" => "First Bubble",
      "value" => '',
      "param_name" => "first_bubble"
    ),
    array(
      "type" => "attach_image",
      "holder" => "div",
      "class" => "",
      "heading" => "First Bubble",
      "param_name" => "image_1",
      "description" => "Add your first image. Please ensure the images you are uploading have equal height and width (square)."
    ),
    array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => "First Bubble Link",
      "param_name" => "image_link_1",
      "description" => "Add your first image. Please ensure the images you are uploading have equal height and width (square)."
    ),
    array(
      "type" => "heading_param",
      "holder" => "div",
      "class" => "",
      "heading" => "Second Bubble",
      "value" => '',
      "param_name" => "second_bubble"
    ),
    array(
      "type" => "attach_image",
      "holder" => "div",
      "class" => "",
      "heading" => "Second Bubble",
      "param_name" => "image_2",
      "description" => "Add your second image. We recommend square images. Please note that this element doesn't automatically magnify your images. It will display your images with the magnify effect."
    ),
    array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => "Second Bubble Link",
      "param_name" => "image_link_2",
      "description" => "Add a link to the first bubble. Add an image in here to open it in a lightbox."
    ),
    array(
      "type" => "heading_param",
      "holder" => "div",
      "class" => "",
      "heading" => "Size",
      "value" => '',
      "param_name" => "size_heading",
      "description" => "Specify a custom size. e.g 200px will give each bubble a 200px height and width."
    ),
    array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => "Size",
      "param_name" => "size",
      "description" => "e.g 500px"
    ),
    array(
      "type" => "heading_param",
      "holder" => "div",
      "class" => "",
      "heading" => "Tooltip/Popover",
      "value" => '',
      "param_name" => "tooltip_popover",
      "description" => "Tooltip/popover options"
    ),
    array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => "Popover Title",
      "param_name" => "popover_title",
      "description" => "Add a popover title."
    ),
    array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => "Popover Content",
      "param_name" => "popover_content",
      "description" => "Add a popover content."
    ),
    array(
      "type" => "dropdown",
      "holder" => "div",
      "class" => "",
      "heading" => "Popover Position",
      "param_name" => "popover_placement",
      "value" => array(__("Top", "js_composer") => 'top', __("Right", "js_composer") => "right", __("Bottom", "js_composer") => "bottom", __("Left", "js_composer") => "left"),
      "description" => "Popover Alignment settings"
    ),
    array(
      "type" => "heading_param",
      "holder" => "div",
      "class" => "",
      "heading" => "Other Options",
      "value" => '',
      "param_name" => "other_options"
    ),
    array(
      "type" => "textfield",
      "heading" => "Extra class name", "js_composer",
      "param_name" => "el_class",
      "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer"),
    ),
    $add_css_animation,
   )

) );

/*-----------------------------------------------------------------------------------*/
/*  Dual Bubble Btns
/*-----------------------------------------------------------------------------------*/

vc_map( array(
   "name" => "Dual Bubble Button",
   "base" => "dual_bubble_btn",
   "icon" => "icon-wpb-row",
   "class" => "",
   "category" => 'Content',
   "description" => "Two circular buttons side by side",
    "params" => array(
    array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => "Bubble Colour #1",
         "param_name" => "bubble_colour_1",
         "description" => "Specify a custom size. e.g 500px"
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Bubble Text #1",
         "param_name" => "bubble_text_1",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Bubble Link #1",
         "param_name" => "bubble_link_1",
      ),
       array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => "Striped",
         "param_name" => "bubble_stripe_1",
         "description" => "Enable this for a striped background",
         "value" => Array("Striped Background" => true),
      ),
      array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => "Bubble Colour #2",
         "param_name" => "bubble_colour_2",
         "description" => "Specify a custom size. e.g 500px"
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Bubble Text #2",
         "param_name" => "bubble_text_2"
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Bubble Link #2",
         "param_name" => "bubble_link_2"
      ),
      array(
         "type" => "checkbox",
         "holder" => "div",
         "class" => "",
         "heading" => "Striped",
         "param_name" => "bubble_stripe_2",
         "description" => "Enable this for a striped background",
         "value" => Array("Striped Background" => true),
      ),
        array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Size",
         "param_name" => "size",
         "description" => "Specify a custom size. e.g 500px"
      ),
      $add_css_animation,
   )

) );

/*-----------------------------------------------------------------------------------*/
/*  Perspective Images
/*-----------------------------------------------------------------------------------*/

vc_map( array(
   "name" => "Perspective Images",
   "base" => "three_box_feature",
   "icon" => "icon-wpb-row",
   "class" => "",
   "category" => 'Content',
   "description" => "Display three images",
    "params" => array(
      array(
      "type" => "heading_param",
      "holder" => "div",
      "class" => "",
      "heading" => "Left Image",
      "param_name" => "left_image",
      "value" => '',
    ),
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Image #1",
         "param_name" => "image_1",
         "description" => "Add your first image. Please ensure all images are the same size."
        ),
        array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Title (For Image #1)",
         "param_name" => "popover_title_1",
         "description" => "Add a popover title. (Not required)"
        ),
        array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Content (For Image #1)",
         "param_name" => "popover_content_1",
         "description" => "Add a popover content. (Not required)"
        ),
        array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Position (For Image #1)",
         "param_name" => "popover_placement_1",
          "value" => array(__("Top", "js_composer") => 'top', __("Right", "js_composer") => "right", __("Bottom", "js_composer") => "bottom", __("Left", "js_composer") => "left"),
         "description" => "Popover Alignment settings"
      ),
        array(
        "type" => "heading_param",
        "holder" => "div",
        "class" => "",
        "heading" => "Center Image",
        "param_name" => "center_image",
        "value" => '',
      ),
        array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Image #2",
         "param_name" => "image_2",
         "description" => "Add your second image. Please ensure all images are the same size."
      
        ),
        array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Title (For Image #2)",
         "param_name" => "popover_title_2",
         "description" => "Add a popover title. (Not required)"
        ),
        array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Content (For Image #2)",
         "param_name" => "popover_content_2",
         "description" => "Add a popover content. (Not required)"
        ),
        array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Position (For Image #2)",
         "param_name" => "popover_placement_2",
          "value" => array(__("Top", "js_composer") => 'top', __("Right", "js_composer") => "right", __("Bottom", "js_composer") => "bottom", __("Left", "js_composer") => "left"),
         "description" => "Popover Alignment settings"
      ),
        array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Image #3",
         "param_name" => "image_3",
         "description" => "Add your third image. Please ensure all images are the same size."
      
        ),
        array(
      "type" => "heading_param",
      "holder" => "div",
      "class" => "",
      "heading" => "Right Image",
      "param_name" => "right_image",
      "value" => '',
    ),
        array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Title (For Image #3)",
         "param_name" => "popover_title_3",
         "description" => "Add a popover title. (Not required)"
        ),
        array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Content (For Image #3)",
         "param_name" => "popover_content_3",
         "description" => "Add a popover content. (Not required)"
        ),
        array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Position (For Image #3)",
         "param_name" => "popover_placement_3",
          "value" => array(__("Top", "js_composer") => 'top', __("Right", "js_composer") => "right", __("Bottom", "js_composer") => "bottom", __("Left", "js_composer") => "left"),
         "description" => "Popover Alignment settings"
      ),
      array(
      "type" => "heading_param",
      "holder" => "div",
      "class" => "",
      "heading" => "Other Options",
      "param_name" => "other_options",
      "value" => '',
    ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Size",
         "param_name" => "size",
         "description" => "Specify a custom size. Leave blank to make it expand to the full width of the container. Please note that this only modifies the width. The height is determined using the image sizes."
        ),
        array(
        "type" => "textfield",
        "heading" => __("Extra class name", "js_composer"),
        "param_name" => "el_class",
        "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer"),
      ),
      $add_css_animation,
        
    )

) );

/*-----------------------------------------------------------------------------------*/
/*  3 Device Halfcut
/*-----------------------------------------------------------------------------------*/

vc_map( array(
   "name" => "3 Device Halfcut",
   "base" => "three_device_halfcut",
   "icon" => "icon-wpb-row",
   "class" => "",
   "category" => 'Content',
   "description" => "Display images in halfcut laptop screen",
    "params" => array(
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Image #1",
         "param_name" => "image_1",
         "description" => "Add your first image. Please ensure all images are the same size."
      
        ),
        array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Title (For Image #1)",
         "param_name" => "popover_title_1",
         "description" => "Add a popover title. (Not required)"
        ),
        array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Content (For Image #1)",
         "param_name" => "popover_content_1",
         "description" => "Add a popover content. (Not required)"
        ),
        array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Position (For Image #1)",
         "param_name" => "popover_placement_1",
          "value" => array(__("Top", "js_composer") => 'top', __("Right", "js_composer") => "right", __("Bottom", "js_composer") => "bottom", __("Left", "js_composer") => "left"),
         "description" => "Popover Alignment settings"
      ),
        array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Image #2",
         "param_name" => "image_2",
         "description" => "Add your second image. Please ensure all images are the same size."
      
        ),
        array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Title (For Image #2)",
         "param_name" => "popover_title_2",
         "description" => "Add a popover title. (Not required)"
        ),
        array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Content (For Image #2)",
         "param_name" => "popover_content_2",
         "description" => "Add a popover content. (Not required)"
        ),
        array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Position (For Image #2)",
         "param_name" => "popover_placement_2",
          "value" => array(__("Top", "js_composer") => 'top', __("Right", "js_composer") => "right", __("Bottom", "js_composer") => "bottom", __("Left", "js_composer") => "left"),
         "description" => "Popover Alignment settings"
      ),
        array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Image #3",
         "param_name" => "image_3",
         "description" => "Add your third image. Please ensure all images are the same size."
      
        ),
                array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Title (For Image #3)",
         "param_name" => "popover_title_3",
         "description" => "Add a popover title. (Not required)"
        ),
        array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Content (For Image #3)",
         "param_name" => "popover_content_3",
         "description" => "Add a popover content. (Not required)"
        ),
        array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Position (For Image #3)",
         "param_name" => "popover_placement_3",
          "value" => array(__("Top", "js_composer") => 'top', __("Right", "js_composer") => "right", __("Bottom", "js_composer") => "bottom", __("Left", "js_composer") => "left"),
         "description" => "Popover Alignment settings"
      ),
      $add_css_animation,
        
    )

) );

/*-----------------------------------------------------------------------------------*/
/*  Dual Image
/*-----------------------------------------------------------------------------------*/

vc_map( array(
   "name" => "Dual Image",
   "base" => "dual_image",
   "icon" => "icon-wpb-row",
   "class" => "",
   "description" => "A dual image where the second image appears on hover",
    "params" => array(
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Primary Image",
         "param_name" => "primary_image",
         "description" => "Add your first image. Please ensure all images are the same size."
      
        ),
        array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Secondary Image",
         "param_name" => "secondary_image",
         "description" => "Secondary Image"
      
        ),
              array(
      "type" => "",
      "param_name" => "advancedoptions",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover/tooltip Options",
         "description" => "These are the options for the popover/tooltip"
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Title",
         "param_name" => "popover_title",
         "description" => "Add a popover title."
        ),
        array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Content",
         "param_name" => "popover_content",
         "description" => "Add a popover content."
        ),
        array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Position",
         "param_name" => "popover_placement",
          "value" => array(__("Top", "js_composer") => 'top', __("Right", "js_composer") => "right", __("Bottom", "js_composer") => "bottom", __("Left", "js_composer") => "left"),
         "description" => "Popover Alignment settings"
      ),
        $add_css_animation,
        
    )

) );


/*-----------------------------------------------------------------------------------*/
/*  Device Laptop
/*-----------------------------------------------------------------------------------*/

vc_map( array(
   "name" => "Device Laptop",
   "base" => "device_laptop",
   "icon" => "icon-wpb-row",
   "class" => "",
   "category" => 'Content',
   "description" => "Showcase an image on a laptop screen",
    "params" => array(
    array(
      "type" => "heading_param",
      "holder" => "div",
      "class" => "",
      "heading" => "Main Options",
      "value" => '',
      "param_name" => "main_options",
      "description" => "Main laptop device options"
    ),
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Image",
         "param_name" => "image_src",
         "description" => "Add an image that will be displayed on the screen."
      ),
        array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Size",
         "param_name" => "size",
         "description" => "Specify a custom size. e.g 500px or 100% for the full width the column."
      ),
      array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Align",
         "param_name" => "element_align",
          "value" => array(__("Left", "js_composer") => 'left', __("Center", "js_composer") => "center", __("Right", "js_composer") => "right"),
         "description" => "Alignment settings"
      ),
    array(
      "type" => "heading_param",
      "holder" => "div",
      "class" => "",
      "heading" => "Tooltip/Popover",
      "value" => '',
      "param_name" => "tooltip_popover",
      "description" => "Tooltip/popover options"
    ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Title",
         "param_name" => "popover_title",
         "description" => "Add a popover title."
        ),
        array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Content",
         "param_name" => "popover_content",
         "description" => "Add a popover content."
        ),
        array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Position",
         "param_name" => "popover_placement",
          "value" => array(__("Top", "js_composer") => 'top', __("Right", "js_composer") => "right", __("Bottom", "js_composer") => "bottom", __("Left", "js_composer") => "left"),
         "description" => "Popover Alignment settings"
      ),
      array(
      "type" => "heading_param",
      "holder" => "div",
      "class" => "",
      "heading" => "Other Options",
      "value" => '',
      "param_name" => "other_options",
      "description" => "Tooltip/popover options"
    ),
    array(
        "type" => "textfield",
        "heading" => __("Extra class name", "js_composer"),
        "param_name" => "el_class",
        "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer"),
      ),
      

      $add_css_animation,
   )

) );

/*-----------------------------------------------------------------------------------*/
/*  Icon Timeline
/*-----------------------------------------------------------------------------------*/

vc_map( array(
   "name" => "Icon Timeline",
   "base" => "timeline",
   "icon" => "icon-wpb-row",
   "class" => "",
   "category" => 'Content',
   "description" => "A feature timeline",
    "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Icon",
         "param_name" => "timeline_icon",
         "description" => "Select an icon to display in the timeline. Please go to Dashboard->Documentation to view list of icons."
      ),
      array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => "Icon Colour",
         "param_name" => "icon_colour",
         "value" => "#2D3033",
         "description" => "Specify a custom icon colour"
      ),
      array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => "Line Colour",
         "param_name" => "line_colour",
         "value" => "#ddd",
         "description" => "Specify a custom line colour"
      ),
      array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => "Circle Colour",
         "param_name" => "circle_colour",
         "value" => "#f4f4f4",
         "description" => "Specify a custom circle colour"
      ),
      array(
         "type" => "attach_image",
         "holder" => "div",
         "class" => "",
         "heading" => "Circle Background Image",
         "param_name" => "circle_bg",
         "description" => "Circle Background Image"
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Circle Border",
         "param_name" => "circle_border",
         "description" => "Add a border to the circle"
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => "Content",
         "param_name" => "content",
         "description" => "Add your content"
      ),
      array(
        "type" => "textfield",
        "heading" => __("Extra class name", "js_composer"),
        "param_name" => "el_class",
        "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer"),
      ),
      $add_css_animation,
   )

) );

/*-----------------------------------------------------------------------------------*/
/*  Marketing Button
/*-----------------------------------------------------------------------------------*/

vc_map( array(
   "name" => "Marketing Button",
   "base" => "marketing_button",
   "icon" => "icon-wpb-row",
   "class" => "",
   "category" => 'Content',
   "description" => "Irresistible marketing buttons",
    "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Text",
         "param_name" => "text",
         "description" => "Marketing button text"
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Description",
         "param_name" => "subtext",
         "description" => "The text that will display below the main text"
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Icon",
         "param_name" => "icon",
         "description" => "Enter the icon name that will be displayed on the side. See documentation for for list of icon names."
      ),
      array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => "Colour",
         "param_name" => "colour",
         "description" => "Choose the button colour"
      ),
      array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => "Text Colour",
         "param_name" => "font_colour",
         "description" =>  "Choose a custom text colour. Default #fffff"
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Size",
         "param_name" => "size",
         "description" => "Choose the size of the button width in pixels or percetange."
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Link",
         "param_name" => "link",
         "description" => "Choose where you would like the button to link to"
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Link Target",
         "param_name" => "link_target",
         "description" => "Choose how you would like the link to open. use _blank to open in a new window/tab"
      ),
       array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Title",
         "param_name" => "popover_title",
         "description" => "Add a popover title. (Not required)"
        ),
        array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Content",
         "param_name" => "popover_content",
         "description" => "Add a popover content. (Not required)"
        ),
        array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Position",
         "param_name" => "popover_placement",
          "value" => array(__("Top", "js_composer") => 'top', __("Right", "js_composer") => "right", __("Bottom", "js_composer") => "bottom", __("Left", "js_composer") => "left"),
         "description" => "Popover Alignment settings"
        ),
        array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Align",
         "param_name" => "element_align",
          "value" => array(__("Left", "js_composer") => 'left', __("Center", "js_composer") => "center", __("Right", "js_composer") => "right"),
         "description" => "Alignment settings"
      ),
   )

) );

/*-----------------------------------------------------------------------------------*/
/*  Counters
/*-----------------------------------------------------------------------------------*/

vc_map( array(
   "name" => "Counter",
   "base" => "counter",
   "icon" => "icon-wpb-row",
   "class" => "",
   "category" => 'Content',
   "description" => "Output number countdowns",
    "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Counter Number",
         "param_name" => "counter_number",
         "description" => "Specify the counter number. Please use numbers only. "
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Counter Number Prepend",
         "param_name" => "counter_prepend",
         "description" => "Prepend a character in front of the number."
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Counter Number Append",
         "param_name" => "counter_append",
         "description" => "Append a character after the number. e.g % etc"
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Counter Text",
         "param_name" => "counter_text",
         "description" => "The text that will display beneath the number"
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Counter Sub Text",
         "param_name" => "counter_subtext",
         "description" => "The smaller text that will display beneath the main text"
      ),
      array(
         "type" => "colorpicker",
         "holder" => "div",
         "class" => "",
         "heading" => "Counter Colour",
         "param_name" => "counter_colour",
         "description" => "Specify a custom counter colour"
      ),
      $add_css_animation,
   )

) );

/*-----------------------------------------------------------------------------------*/
/*  Empty Space
/*-----------------------------------------------------------------------------------*/

vc_map( array(
  "name" => "Empty Space",
  "base" => "empty_space",
  "icon" => "icon-wpb-row",
  "show_settings_on_create" => false,
  "category" => 'Content',
  "description" => "Add some lovely empty space",
) );

vc_map( array(
  "name" => "Empty Space2",
  "base" => "empty_space2",
  "icon" => "icon-wpb-row",
  "show_settings_on_create" => false,
  "category" => 'Content',
  "description" => "Add some lovely empty space",
) );
 
/*-----------------------------------------------------------------------------------*/
/*  Product Box
/*-----------------------------------------------------------------------------------*/

vc_map( array(
   "name" => "Product Box",
   "base" => "product_box",
   "icon" => "icon-wpb-row",
   "class" => "",
   "category" => 'Content',
   "description" => "Add a product box",
   "params" => array(
       array(
         "type" => "heading_param",
         "holder" => "div",
         "class" => "",
         "heading" => "Main Values",
         "param_name" => "main_values_heading",
         "description" => "Insert the main values for your product box"
      ),
    array(
       "type" => "attach_image",
       "holder" => "div",
       "class" => "",
       "heading" => "Primary Image",
       "param_name" => "primary_image",
       "description" => "Primary feature image"
    ),
    array(
       "type" => "attach_image",
       "holder" => "div",
       "class" => "",
       "heading" => "Secondary Image",
       "param_name" => "secondary_image",
       "description" => "Secondary image that is displayed on hover. Leave blank if you only want 1 image."
    ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Product Title",
         "param_name" => "product_title",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Product Sub Title",
         "param_name" => "product_subtitle",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Product Price",
         "param_name" => "product_price",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Product Link",
         "param_name" => "product_link",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Product Button Text",
         "param_name" => "product_button_text",
      ),
       array(
         "type" => "textarea",
         "holder" => "div",
         "class" => "",
         "heading" => "Product Description",
         "param_name" => "product_description",
      ),
      array(
         "type" => "heading_param",
         "holder" => "div",
         "class" => "",
         "heading" => "Colours",
         "param_name" => "colours_heading",
         "description" => "change the colours"
      ),
      array(
    "type" => "colorpicker",
    "holder" => "div",
    "class" => "",
    "heading" => "Heading Background Colour",
    "param_name" => "heading_background_colour",
    "value" => "",
    "description" => "Add a custom background colour to the heading"
    ),
          array(
    "type" => "colorpicker",
    "holder" => "div",
    "class" => "",
    "heading" => "Description Background Colour",
    "param_name" => "description_background_colour",
    "value" => "",
    "description" => "Add a custom background colour to the description"
    ),
      array(
         "type" => "heading_param",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover/tooltip",
         "param_name" => "popover_heading",
         "description" => "Add a popover or tooltip to the table"
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Title",
         "param_name" => "popover_title",
         "description" => "Add a popover title."
        ),
        array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Content",
         "param_name" => "popover_content",
         "description" => "Add a popover content."
        ),
        array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Position",
         "param_name" => "popover_placement",
          "value" => array(__("Top", "js_composer") => 'top', __("Right", "js_composer") => "right", __("Bottom", "js_composer") => "bottom", __("Left", "js_composer") => "left"),
         "description" => "Popover Alignment settings"
      ),
       array(
         "type" => "heading_param",
         "holder" => "div",
         "class" => "",
         "heading" => "Extra Class",
         "param_name" => "custom_class_heading",
         "description" => "Add a extra class name in here. You can assign the CSS code to the class by clicking on the CSS button in the corner of the page editor."
      ),
      array(
        "type" => "textfield",
        "heading" => "Extra class name",
        "param_name" => "el_class",
        "description" => "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer",
      ),
       array(
         "type" => "heading_param",
         "holder" => "div",
         "class" => "",
         "heading" => "Animation",
         "param_name" => "animation_heading"
         ),
      $add_css_animation
   )
 ) );

/*-----------------------------------------------------------------------------------*/
/*  Icon Feature
/*-----------------------------------------------------------------------------------*/

vc_map( array(
   "name" => "Icon Feature",
   "base" => "icon_feature2",
   "icon" => "icon-wpb-row",
   "class" => "",
   "category" => 'Content',
   "description" => "Add a icon feature",
   "params" => array(
       array(
         "type" => "heading_param",
         "holder" => "div",
         "class" => "",
         "heading" => "Main Values",
         "param_name" => "main_values_heading",
         "description" => "Icon Feature Settings"
      ),
    array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Icon",
         "param_name" => "icon",
      ),
    array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Title",
         "param_name" => "title",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Description",
         "param_name" => "description",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Button Text",
         "param_name" => "button_text",
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Button Link",
         "param_name" => "button_link",
      ),
       array(
         "type" => "heading_param",
         "holder" => "div",
         "class" => "",
         "heading" => "Extra Class",
         "param_name" => "custom_class_heading",
         "description" => "Add a extra class name in here. You can assign the CSS code to the class by clicking on the CSS button in the corner of the page editor."
      ),
      array(
        "type" => "textfield",
        "heading" => "Extra class name",
        "param_name" => "el_class",
        "description" => "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer",
      ),
       array(
         "type" => "heading_param",
         "holder" => "div",
         "class" => "",
         "heading" => "Animation",
         "param_name" => "animation_heading"
         ),
      $add_css_animation
   )
 ) );

/*-----------------------------------------------------------------------------------*/
/*  Jumbtron
/*-----------------------------------------------------------------------------------*/

vc_map( array(
   "name" => "Jumbotron",
   "base" => "jumbotron",
   "icon" => "icon-wpb-row",
   "class" => "",
   "category" => 'Content',
   "description" => "The awesome bootstrap jumbtron",
    "params" => array(


      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => "Content",
         "param_name" => "content",
         "description" => "Add your jumbotron content"
      ),
      array(
        "type" => "textfield",
        "heading" => __("Extra class name", "js_composer"),
        "param_name" => "el_class",
        "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer"),
      ),
      $add_css_animation,
   )
) );

/*-----------------------------------------------------------------------------------*/
/*  Panel
/*-----------------------------------------------------------------------------------*/

vc_map( array(
   "name" => "Panel",
   "base" => "panel",
   "icon" => "icon-wpb-row",
   "class" => "",
   "category" => 'Content',
   "description" => "Add a super cool content panel",
    "params" => array(
      array(
        "type" => "textfield",
        "heading" => "Title",
        "param_name" => "title",
      ),
      array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => "Content",
         "param_name" => "content",
         "description" => "Add your jumbotron content"
      ),
      array(
        "type" => "textfield",
        "heading" => __("Extra class name", "js_composer"),
        "param_name" => "el_class",
        "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer"),
      ),
      $add_css_animation,
   )
) );
 
$enable_autoplay = array(
      "type" => "checkbox",
      "holder" => "div",
      "class" => "",
      "param_name" => "auto_play",
      "value" => Array("Enable auto play" => true),
      "description" => "Enabling auto play will auto play a video when it is scrolled into view."
    );
$enable_autoplay_sound = array(
      "type" => "checkbox",
      "holder" => "div",
      "class" => "",
      "param_name" => "auto_play_sound",
      "value" => Array("Enable auto play sound" => true),
      "description" => "<strong>Notice: The auto play option above must be enabled for this to work.</strong> Enabling this will autoplay with the video sound. Please use this wisely as it could unsettle some users."
    );
$progress_bar_height = array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "param_name" => "progress_bar_height",
      "heading" => "Bar Height",
      "description" => "Specify a custom height for the progress bar in pixels. Default: 8px"
    );  

$popover_title = array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Title",
         "param_name" => "popover_title",
         "description" => "Add a popover title."
);
$popover_content = array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Content",
         "param_name" => "popover_content",
         "description" => "Add a popover content."
        );
$popover_position = array(
         "type" => "dropdown",
         "holder" => "div",
         "class" => "",
         "heading" => "Popover Position",
         "param_name" => "popover_placement",
          "value" => array(__("Top", "js_composer") => 'top', __("Right", "js_composer") => "right", __("Bottom", "js_composer") => "bottom", __("Left", "js_composer") => "left"),
         "description" => "Popover Alignment settings"
      );

$param_modal_heading = array(
         "type" => "heading_param",
         "holder" => "div",
         "class" => "",
         "heading" => "Modals",
         "param_name" => "modal_heading",
         "description" => "Add a popup modal to the button. You must remove the link for this to work."
);
$param_modal_id = array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Modal ID",
         "param_name" => "modal_id",
         "description" => "Add a unique modal ID without any spaces or special characters. e.g modal-1"
);
$param_modal_title = array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => "Modal title",
         "param_name" => "modal_title",
         "description" => "Add a title to the modal"
);
$param_modal_content = array(
         "type" => "textarea_html",
         "holder" => "div",
         "class" => "",
         "heading" => "Modal Content",
         "param_name" => "content",
         "description" => "Modal content"
);

vc_add_param('vc_video', $enable_autoplay);
vc_add_param('vc_video', $enable_autoplay_sound);
vc_add_param('vc_progress_bar', $progress_bar_height);

vc_add_param('vc_single_image', $popover_title);
vc_add_param('vc_single_image', $popover_content);
vc_add_param('vc_single_image', $popover_position);

vc_add_param('vc_column_inner', $popover_title);
vc_add_param('vc_column_inner', $popover_content);
vc_add_param('vc_column_inner', $popover_position);

vc_add_param('vc_column', $popover_title);
vc_add_param('vc_column', $popover_content);
vc_add_param('vc_column', $popover_position);

vc_add_param('vc_button2', $param_modal_heading);
vc_add_param('vc_button2', $param_modal_id);
vc_add_param('vc_button2', $param_modal_title);
vc_add_param('vc_button2', $param_modal_content);
 
 
?>
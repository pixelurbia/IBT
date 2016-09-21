<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title(''); ?></title>
    <meta charset="utf-8"/>

    <meta name="description" content="<?php the_field('meta_description', 'option'); ?>">
    <meta name="keywords" content="<?php the_field('meta_keywords', 'option'); ?>">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    

    <!-- Apple Touch Icon -->
    <?php if (get_theme_mod('apple_icon_60x60')) { ?>
        <link href="<?php echo get_theme_mod('apple_icon_60x60') ?>" rel="apple-touch-icon" />
    <?php } ?>

    <?php if (get_theme_mod('apple_icon_76x76')) { ?>
        <link href="<?php echo get_theme_mod('apple_icon_76x76') ?>" rel="apple-touch-icon" sizes="76x76" />
    <?php } ?>

    <?php if (get_theme_mod('apple_icon_120x120')) { ?>
        <link href="<?php echo get_theme_mod('apple_icon_120x120') ?>" rel="apple-touch-icon" sizes="120x120" />
    <?php } ?>

    <?php if (get_theme_mod('apple_icon_152x152')) { ?>
        <link href="<?php echo get_theme_mod('apple_icon_152x152') ?>" rel="apple-touch-icon" sizes="152x152" />
    <?php } ?>
    
    <!--  Favicon -->
    <?php if (get_theme_mod('favicon')) { ?>
        <link rel="shortcut icon" href="<?php echo get_theme_mod('favicon'); ?>">
    <?php } ?>

    <?php if ( is_singular() && get_option( 'thread_comments' ) ) 	wp_enqueue_script( 'comment-reply' ); ?>
    <?php if (class_exists('WPBakeryVisualComposerAbstract')) { ?>
        <?php if (get_theme_mod('custom_footer') !== "") { ?>
            
            <?php 
            $footer_css = new Vc_base();
            $footer_css->addPageCustomCss(get_option('custom_footer'));
            $footer_css->addShortcodesCustomCss(get_option('custom_footer')); 
            ?>
 
        <?php } ?>
    <?php } ?>


    <?php wp_head(); ?>
  
    <!-- Add fancyBox -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    <!-- Live Customizer jquery ui-tabs fix -->
    <script type="text/javascript">

    jQuery(document).ready(function($) {

        // jQuery('.single_course').removeClass('chosenOne');
    $('.login-remember ').remove();
    
    $('.rainbow-bar ').remove();
    $('.button-primary').addClass('btn button');
    $('#loginform .login-submit input').addClass('btn button');
    $('.wpdm-download-link').addClass('btn button');
    $('.wpdm-front .wp-editor-wrap').hide();
    $('#wpdm-pf .col-md-8').addClass('col-md-12').removeClass('col-md-8');
    $('#wpdm-pf .col-md-4').addClass('col-md-12').removeClass('col-md-4');

     jQuery('.single_course').each(function() {
        var width = jQuery(this).find('.course_progress_blue').css('width');
        // console.log(width);
        var width = parseInt(width, 10);  
        if ( width < 100 ) {
        // console.log(width);    
        $(this).addClass('pick-random');
        } else {
            
        }
    
     });
        var $li = $('.pick-random');
        $li.eq( Math.floor( Math.random() * $li.length ) ).addClass("chosenOne");  
        var chosenOne = $("<div />").append($('.chosenOne').clone()).html();
        $('.chosenOne').remove();
        $('#course_list').prepend(chosenOne);
        $('.chosenOne .resume').removeClass('hide');


    jQuery('.single_course').each(function() { 
        if ($(this).hasClass('chosenOne') ) { 
        } else {
            $(this).addClass('nonchosen');
        }
    });
    });
    // if course course_progress_blue is width < 100 show at this spot randomly 

    </script>   
    <script>
    jQuery(window).load(function(){
    var isInIframe = (window.location != window.parent.location) ? true : false;

    if (isInIframe) {
           var makeTabs = function(selector) {
        jQuery( selector )
            .find( "ul a" ).each( function() {
                var href = jQuery( this ).attr( "href" ),
                    newHref = window.location.protocol + '//' + window.location.hostname +
                        window.location.pathname + href;

                if ( href.indexOf( "#" ) == 0 ) {
                    jQuery( this ).attr( "href", newHref );
                }



            })

    };
    makeTabs( ".ui-tabs" );
        jQuery( ".ui-tabs-panel[aria-live='polite']" ).remove();
        jQuery( ".ui-tabs-panel:nth-child(2)" ).css("display", "block");
    }
});
    </script>
</head>
    
	<body <?php body_class(); ?>>
		<div class="page-container <?php echo themize_header_layout(); ?> <?php echo themize_header_hover(); ?>">

		<!-- RAINBOW / CONTACT BAR / ALERT
		================================================== -->

        <?php if (get_theme_mod('enable_alert')) { ?>
            <?php do_action('sitewide_alert'); ?>
        <?php } ?>
		
		<?php if (get_theme_mod('enable_rainbow_bar')) { ?>
			<?php do_action('rainbow_bar'); ?>
		<?php } ?>
		<?php if (get_theme_mod('enable_contact_bar')) { ?>
			<?php do_action('contact_bar'); ?>
		<?php } ?>
	
		<!-- NAVIGATION
		================================================== -->
		
		<?php if (has_nav_menu( 'header-menu' )) { ?>
			<!-- Mobile Navigation -->
    		<?php do_action('mobile_navigation'); ?>
    		
    		<!-- Desktop Navigation -->
    		<?php do_action('navigation'); ?>
        <?php } ?>

        <?php if (get_theme_mod('preloader') == "enable") { ?>
            <div class="preloader"><i class="fa <?php echo get_theme_mod('preloader_icon'); ?> fa-spin"></i></div>
        <?php } ?>
        <div class="top-bar">
            <div class="container">
                <div class="allpage logo"></div>
                <h3 class="user-info"> 
            <?php 
            $current_user = wp_get_current_user(); 
            if(!is_user_logged_in()) { 
                   echo 'Please Login.';
                 } else {
                 echo 'Hi There, '.$current_user->user_firstname.'! | <a href="'.wp_logout_url('$index.php').'">Logout</a>';
                    } ?>
                </h3>
            </div>
        </div>
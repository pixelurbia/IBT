// Style Switcher
//=======================================

jQuery(document).ready(function() {



	jQuery('.live-previews-container').hover(function() {
        jQuery(".range").ionRangeSlider("update");
    });

	jQuery('#option-header-standard').click(function() {
		jQuery(".page-container").addClass("option-sample-header-standard");
		jQuery(".option-creative").css("display", "none");
		//jQuery(".header").css("background", "rgba(255,255,255, 1");

		jQuery(this).addClass("btn-active");
		jQuery("#option-header-creative").removeClass("btn-active");
	});

	jQuery('#option-header-creative').click(function() {
		jQuery(".page-container").removeClass("option-sample-header-standard");
		jQuery(".option-creative").css("display", "block");
		//jQuery(".header").css("background", "rgba(34,34,34, 0.74");

		jQuery(this).addClass("btn-active");
		jQuery("#option-header-standard").removeClass("btn-active");
	});

	jQuery("#option-header-opacity-creative").ionRangeSlider({
		onChange: function (data) {
        	jQuery(".header").css("background", "rgba(34,34,34, "+data.fromNumber+")");
    	}
	});

	jQuery("#option-header-size").ionRangeSlider({
		onChange: function (data) {
        	jQuery(".navigation > li > a").css("padding-top", ""+data.fromNumber+"px");
        	jQuery(".navigation > li > a").css("padding-bottom", ""+data.fromNumber+"px");
    	}
	});

	jQuery("#option-website-width").ionRangeSlider({
		onChange: function (data) {
        	jQuery(".container, .mega-menu-4col > .sub-menu, .mega-menu-5col > .sub-menu, .mega-menu-6col > .sub-menu").css("width", ""+data.fromNumber+"px");

    	}
	});

	jQuery('#option-boxed').click(function() {
		jQuery(".page-container").addClass("page-boxed");

		jQuery(".page-container").removeClass("option-sample-float-side");
		jQuery(".page-container").removeClass("freefloating-top");
		jQuery(".page-container").removeClass("vertical-header layout-left");
		jQuery(this).addClass("btn-active");

		jQuery("#option-full-width").removeClass("btn-active");
		jQuery("#option-float-top").removeClass("btn-active");
		jQuery("#option-float-side").removeClass("btn-active");
	});

	jQuery('#option-full-width').click(function() {
		jQuery(".page-container").removeClass("page-boxed");
		jQuery(".page-container").removeClass("freefloating-top");
		jQuery(".page-container").removeClass("vertical-header layout-left");
		jQuery(".page-container").removeClass("option-sample-float-side");
		jQuery(".page-container").removeClass("option-sample-freefloating-top");

		jQuery(this).addClass("btn-active");
		jQuery("#option-boxed").removeClass("btn-active");
		jQuery("#option-float-top").removeClass("btn-active");
		jQuery("#option-float-side").removeClass("btn-active");
	});

	jQuery('#option-float-top').click(function() {
		jQuery(".page-container").removeClass("page-boxed");
		jQuery(".page-container").addClass("freefloating-top");
		jQuery(".page-container").addClass("option-sample-freefloating-top");
		jQuery(".page-container").removeClass("vertical-header layout-left");
		jQuery(".page-container").removeClass("option-sample-float-side");

		jQuery(this).addClass("btn-active");
		jQuery("#option-boxed").removeClass("btn-active");
		jQuery("#option-full-width").removeClass("btn-active");
		jQuery("#option-float-side").removeClass("btn-active");
	});

	jQuery('#option-float-side').click(function() {
		jQuery(".page-container").removeClass("page-boxed");
		jQuery(".page-container").removeClass("layout-fullwidth");
		jQuery(".page-container").removeClass("freefloating-top");
		jQuery(".page-container").addClass("vertical-header layout-left");
		jQuery(".page-container").addClass("option-sample-float-side");
		jQuery(".page-container").removeClass("option-sample-freefloating-top");

		jQuery(this).addClass("btn-active");
		jQuery("#option-boxed").removeClass("btn-active");
		jQuery("#option-full-width").removeClass("btn-active");
		jQuery("#option-float-top").removeClass("btn-active");
	});

	jQuery('#option-header-white').click(function() {
		jQuery(".page-container").removeClass("option-sample-dark-header");
		jQuery(".page-container").removeClass("option-sample-blue-header");

		jQuery(this).addClass("btn-active");
		jQuery("#option-header-dark").removeClass("btn-active");
		jQuery("#option-header-blue").removeClass("btn-active");
	});

	jQuery('#option-header-dark').click(function() {
		jQuery(".page-container").addClass("option-sample-dark-header");

		jQuery(this).addClass("btn-active");
		jQuery("#option-header-white").removeClass("btn-active");
		jQuery("#option-header-blue").removeClass("btn-active");
		jQuery(".page-container").removeClass("option-sample-blue-header");
	});
	jQuery('#option-header-blue').click(function() {
		jQuery(".page-container").addClass("option-sample-blue-header");

		jQuery(this).addClass("btn-active");
		jQuery("#option-header-white").removeClass("btn-active");
		jQuery("#option-header-dark").removeClass("btn-active");
		jQuery(".page-container").removeClass("option-sample-dark-header");
	});

	jQuery('#option-nav-left').click(function() {
		jQuery(".navigation-col").addClass("navigation-left");
		jQuery(".navigation-col").removeClass("navigation-right");
		jQuery(".navigation-col").removeClass("navigation-center");

		jQuery(this).addClass("btn-active");
		jQuery("#option-nav-center").removeClass("btn-active");
		jQuery("#option-nav-right").removeClass("btn-active");

	});

	jQuery('#option-nav-center').click(function() {
		jQuery(".navigation-col").addClass("navigation-center");
		jQuery(".navigation-col").removeClass("navigation-right");
		jQuery(".navigation-col").removeClass("navigation-left");

		jQuery(this).addClass("btn-active");
		jQuery("#option-nav-left").removeClass("btn-active");
		jQuery("#option-nav-right").removeClass("btn-active");

	});

	jQuery('#option-nav-right').click(function() {
		jQuery(".navigation-col").addClass("navigation-right");
		jQuery(".navigation-col").removeClass("navigation-center");
		jQuery(".navigation-col").removeClass("navigation-left");

		jQuery(this).addClass("btn-active");
		jQuery("#option-nav-center").removeClass("btn-active");
		jQuery("#option-nav-left").removeClass("btn-active");

	});

	jQuery('#option-submenu-white').click(function() {
		jQuery(".page-container").addClass("option-sample-submenu-white");
		jQuery(".page-container").removeClass("option-sample-submenu-blue");

		jQuery(this).addClass("btn-active");
		jQuery("#option-submenu-dark").removeClass("btn-active");
		jQuery("#option-submenu-blue").removeClass("btn-active");

	});

	jQuery('#option-submenu-dark').click(function() {
		jQuery(".page-container").removeClass("option-sample-submenu-white");
		jQuery(".page-container").removeClass("option-sample-submenu-blue");

		jQuery(this).addClass("btn-active");
		jQuery("#option-submenu-white").removeClass("btn-active");
		jQuery("#option-submenu-blue").removeClass("btn-active");

	});

	jQuery('#option-submenu-blue').click(function() {
		jQuery(".page-container").addClass("option-sample-submenu-blue");
		jQuery(".page-container").removeClass("option-sample-submenu-dark");
		jQuery(".page-container").removeClass("option-sample-submenu-white");

		jQuery(this).addClass("btn-active");
		jQuery("#option-submenu-white").removeClass("btn-active");
		jQuery("#option-submenu-dark").removeClass("btn-active");

	});

	jQuery('#option-header-rainbowbar').click(function() {

		if (jQuery(this).hasClass("btn-active")) {
			jQuery(".rainbow-bar").css("display", "none");
			jQuery(this).removeClass("btn-active");
		} else {
			jQuery(".rainbow-bar").css("display", "block");
			jQuery(this).addClass("btn-active");
		}

	});

	jQuery('#option-header-topbar').click(function() {

		if (jQuery(this).hasClass("btn-active")) {
			jQuery(".header-contact-bar").css("display", "none");
			jQuery(this).removeClass("btn-active");
		} else {
			jQuery(".header-contact-bar").css("display", "block");
			jQuery(this).addClass("btn-active");
		}

	});

	jQuery('#option-menu-default').click(function() {
		jQuery(this).addClass("btn-active");
		jQuery("#option-menu-style1").removeClass("btn-active");
		jQuery("#option-menu-style2").removeClass("btn-active");
		jQuery("#option-menu-style3").removeClass("btn-active");
		jQuery("#option-menu-style4").removeClass("btn-active");
		jQuery(".page-container").removeClass("option-sample-menu-style1");
		jQuery(".page-container").removeClass("option-sample-menu-style2");
		jQuery(".page-container").removeClass("option-sample-menu-style3");
		jQuery(".page-container").removeClass("option-sample-menu-style4");

	});

	jQuery('#option-menu-style1').click(function() {
		jQuery(".page-container").addClass("option-sample-menu-style1");

		jQuery(this).addClass("btn-active");
		jQuery("#option-menu-default").removeClass("btn-active");
		jQuery("#option-menu-style2").removeClass("btn-active");
		jQuery("#option-menu-style3").removeClass("btn-active");
		jQuery("#option-menu-style4").removeClass("btn-active");
		jQuery(".page-container").removeClass("option-sample-menu-style2");
		jQuery(".page-container").removeClass("option-sample-menu-style3");
		jQuery(".page-container").removeClass("option-sample-menu-style4");

	});

	jQuery('#option-menu-style2').click(function() {
		jQuery(".page-container").addClass("option-sample-menu-style2");

		jQuery(this).addClass("btn-active");
		jQuery("#option-menu-default").removeClass("btn-active");
		jQuery("#option-menu-style1").removeClass("btn-active");
		jQuery("#option-menu-style3").removeClass("btn-active");
		jQuery("#option-menu-style4").removeClass("btn-active");
		jQuery(".page-container").removeClass("option-sample-menu-style1");
		jQuery(".page-container").removeClass("option-sample-menu-style3");
		jQuery(".page-container").removeClass("option-sample-menu-style4");

	});

	jQuery('#option-menu-style3').click(function() {
		jQuery(".page-container").addClass("option-sample-menu-style3");

		jQuery(this).addClass("btn-active");
		jQuery("#option-menu-default").removeClass("btn-active");
		jQuery("#option-menu-style1").removeClass("btn-active");
		jQuery("#option-menu-style2").removeClass("btn-active");
		jQuery("#option-menu-style4").removeClass("btn-active");
		jQuery(".page-container").removeClass("option-sample-menu-style1");
		jQuery(".page-container").removeClass("option-sample-menu-style2");
		jQuery(".page-container").removeClass("option-sample-menu-style4");

	});

	jQuery('#option-menu-style4').click(function() {
		jQuery(".page-container").addClass("option-sample-menu-style4");

		jQuery(this).addClass("btn-active");
		jQuery("#option-menu-default").removeClass("btn-active");
		jQuery("#option-menu-style1").removeClass("btn-active");
		jQuery("#option-menu-style2").removeClass("btn-active");
		jQuery("#option-menu-style3").removeClass("btn-active");
		jQuery(".page-container").removeClass("option-sample-menu-style1");
		jQuery(".page-container").removeClass("option-sample-menu-style2");
		jQuery(".page-container").removeClass("option-sample-menu-style3");

	});

	jQuery('#option-menu-type-standard').click(function() {
		jQuery(".page-container").addClass("option-sample-menu-type-standard");

		jQuery(this).addClass("btn-active");
		jQuery("#option-menu-type-uppercase").removeClass("btn-active");
	});

	jQuery('#option-menu-type-uppercase').click(function() {
		jQuery(".page-container").removeClass("option-sample-menu-type-standard");

		jQuery(this).addClass("btn-active");
		jQuery("#option-menu-type-standard").removeClass("btn-active");
	});

});
// jQuery('#style-dark').click(function() {

// 	var themepath = jQuery('.style-switcher-container').attr('data-theme-path');
// 	jQuery('#ultra-light-css').remove();
// 	jQuery('#ultra-light-css').remove();
// 	jQuery('#ultra-light-css').remove();
// 	jQuery('head').append('<link id="dark-css" rel="stylesheet" href="'+themepath+'/css/dark.css" type="text/css" />');
// });
// jQuery('#style-light').click(function() {

// 	var themepath = jQuery('.style-switcher-container').attr('data-theme-path');
// 	jQuery('#ultra-light-css').remove();
// 	jQuery('#dark-css').remove();
// 	jQuery('#ultra-light-css').remove();
// 	jQuery('#dark-css').remove();
// 	jQuery('#ultra-light-css').remove();
// 	jQuery('#dark-css').remove();
// });
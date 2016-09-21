jQuery(window).load(function() {
    jQuery( "#accordion-section-preset_section > .accordion-section-title" ).prepend( "<i class='fa fa-heart'></i>");
    jQuery( "#accordion-panel-general_settings > .accordion-section-title" ).prepend( "<i class='fa fa-cogs'></i>");
    jQuery( "#accordion-panel-typography > .accordion-section-title" ).prepend( "<i class='fa fa-font'></i>");
    jQuery( "#accordion-panel-header > .accordion-section-title" ).prepend( "<i class='fa fa-calendar-o'></i>");
    jQuery( "#accordion-panel-footer_settings > .accordion-section-title" ).prepend( "<i class='fa fa-hdd-o'></i>");
    jQuery( "#accordion-panel-other_settings > .accordion-section-title" ).prepend( "<i class='fa fa-lightbulb-o'></i>");
    jQuery( "#accordion-section-title_tagline > .accordion-section-title" ).prepend( "<i class='fa fa-file-o'></i>");
    jQuery( "#accordion-section-nav > .accordion-section-title" ).prepend( "<i class='fa fa-bars'></i>");
    jQuery( "#accordion-panel-widgets > .accordion-section-title" ).prepend( "<i class='fa fa-columns'></i>");
    jQuery( "#accordion-section-static_front_page > .accordion-section-title" ).prepend( "<i class='fa fa-home'></i>");
    jQuery( "#accordion-section-support_section > .accordion-section-title" ).prepend( "<i class='fa fa-comment'></i>");
    jQuery( "#accordion-section-quick_section > .accordion-section-title" ).prepend( "<i class='fa fa-bolt'></i>");
});

jQuery(document).ready(function(){
    "use strict";
    jQuery('[data-toggle="tooltip"]').tooltip();
    jQuery('[data-toggle="popover"]').popover();
    jQuery('[data-show="true"]').popover('show');
});

/*-----------------------------------------------------------------------------------*/
/* Isotope
/*-----------------------------------------------------------------------------------*/

jQuery(window).load(function() {

        
  var $container = jQuery('.customizer-preset');
    // init
    $container.isotope({
      // options
      itemSelector: '.customizer-preset > li',
      layoutMode: 'fitRows',
    });

    // store filter for each group
    // filter items on button click
    jQuery('.category-filter li a').on( 'click', function() {
      var filterValue = jQuery(this).attr('data-filter');
      $container.isotope({ filter: filterValue });
    });
    
});

jQuery(window).load(function() {
     var api = wp.customize;
    jQuery(".font-weight").each(function() {
        var option = jQuery(this).attr('data-customize-setting-link');
        jQuery(this).ionRangeSlider({
            values: ["300","400","600","700","800"],
            
            step: 1,
            prettify: false,
            hideMinMax: true,
            hideFromTo: false,
            onChange: function(obj) {
               api.instance(option).set(obj["fromValue"]);
            },
        });
    });

    jQuery(".widget-range").each(function() {
        var option = jQuery(this).attr('data-customize-setting-link');
        jQuery(this).ionRangeSlider({
            values: ["Two","Three","Four"],
            
            step: 1,
            prettify: false,
            hideMinMax: true,
            hideFromTo: false,
            onChange: function(obj) {
               api.instance(option).set(obj["fromValue"]);
               console.log(obj["fromValue"]);
            },
        });
    });

    jQuery(".range").each(function() {
        var option = jQuery(this).attr('data-customize-setting-link');
        var postfix = "";
        if (jQuery(this).attr('data-postfix')) {
            var postfix = jQuery(this).attr('data-postfix');
        }
        jQuery(this).ionRangeSlider({
            onChange: function(obj) {
               api.instance(option).set(obj["fromNumber"]+postfix);
               console.log(postfix);
            }
        });
    });

    jQuery('.accordion-section-content:visible').livequery(function() {
        jQuery(".range").ionRangeSlider("update");
        jQuery(".customizer-preset").isotope('layout');
    });
});

/*-----------------------------------------------------------------------------------*/
/* Demo Setup
/*-----------------------------------------------------------------------------------*/

jQuery(document).ready(function() {
    jQuery( "#quick-start" ).click(function() { 
        jQuery(this).text("Importing... Please wait."); 
        jQuery(".setup-notice .few-min").html("This could take a few minutes...<strong>Go grab a coffee!</strong>"); 
        jQuery("#import-loader").show();
        jQuery("#quick-start").attr('disabled','disabled');
        jQuery("#full-setup").attr('disabled','disabled');
        jQuery("#basic-setup").attr('disabled','disabled');
        jQuery.ajax({ url: "import.php?id=quick", 
            success: function(){ 
                jQuery("#import-loader").hide(); 
                jQuery(".setup-notice").hide(); 
                jQuery("#import-success").show(); 
                jQuery("#import-complete").text("Import Complete."); 
            },
            error: function(){ 
                jQuery("#import-loader").hide(); 
                jQuery(".setup-notice").hide(); 
                jQuery("#import-error").show(); 
                jQuery("#import-complete").text("Import Failed."); 
            } 

        });
    });
    jQuery( "#full-setup" ).click(function() { 
        jQuery(this).text("Importing... Please wait."); 
        jQuery(".setup-notice .few-min").html("This could take a few minutes...<strong>Go grab a coffee!</strong>"); 
        jQuery("#import-loader").show();
        jQuery("#quick-start").attr('disabled','disabled');
        jQuery("#full-setup").attr('disabled','disabled');
        jQuery("#basic-setup").attr('disabled','disabled');
        jQuery.ajax({ url: "import.php?id=full", 
            success: function(){ 
                jQuery("#import-loader").hide(); 
                jQuery(".setup-notice").hide(); 
                jQuery("#import-success").show(); 
                jQuery("#import-complete").text("Import Complete."); 
            },
            error: function(){ 
                jQuery("#import-loader").hide(); 
                jQuery(".setup-notice").hide(); 
                jQuery("#import-error").show(); 
                jQuery("#import-complete").text("Import Failed."); 
            } 
        });
    });
    jQuery( "#basic-setup" ).click(function() { 
        jQuery(this).text("Importing... Please wait."); 
        jQuery(".setup-notice .few-min").html("This could take a few minutes...<strong>Go grab a coffee!</strong>"); 
        jQuery("#import-loader").show();
        jQuery("#quick-start").attr('disabled','disabled');
        jQuery("#full-setup").attr('disabled','disabled');
        jQuery("#basic-setup").attr('disabled','disabled');
        jQuery.ajax({ url: "import.php?id=basic", 
            success: function(){ 
                jQuery("#import-loader").hide();
                jQuery(".setup-notice").hide(); 
                jQuery("#import-success").show(); 
                jQuery("#import-complete").text("Import Complete."); 
            } 
        }); 
    });
});

/*-----------------------------------------------------------------------------------*/
/* Customizer Preloader
/*-----------------------------------------------------------------------------------*/

jQuery(window).load(function(){
    jQuery( ".customizer-preset li" ).click(function() { 
        jQuery(this).addClass("active");
    });
});

/*-----------------------------------------------------------------------------------*/
/* Customizer Preloader
/*-----------------------------------------------------------------------------------*/

jQuery(window).load(function(){
    "use strict";
     jQuery('.customizer-preloader-container').css("display", "none");
     jQuery('.customizer-preloader-container').css("opacity", "0");
});
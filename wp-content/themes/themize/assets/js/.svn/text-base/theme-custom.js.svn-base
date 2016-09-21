/*global jQuery:false, $f:false, YT:false */

jQuery(window).load(function(){
	"use strict";
	 jQuery('.isotope-preloader').css("display", "none");
	 jQuery('.isotope').css("opacity", "1");
});

/*-----------------------------------------------------------------------------------*/
/*	Dropdown Menu
/*-----------------------------------------------------------------------------------*/

jQuery(document).ready(function() {
		"use strict";
		// if (!jQuery('body').hasClass('home')) { jQuery('.content-container .container').prepend('<div class="allpage logo"></div>'); }

			 var h = jQuery(window).height();
    		jQuery('.home.page .content-container').css('height', h); 
			jQuery('.wpdm-front .cats').hide();
			jQuery('.wpdm-front .user').show();


    		jQuery('.home.page .top-bar').hide(); 
		jQuery('.mobile-nav-container .dropdown').click(function() {
	    	jQuery('.sub-menu', this).slideToggle(200);
	    });
	    
	    jQuery(function($) {
			jQuery(".mobile-nav-container .dropdown").children("a").attr('href', "javascript:void(0)"); 
	    });

		jQuery( ".mobile-nav-container .dropdown > a" ).prepend( "<i class='fa fa-angle-down'></i>");
});

/*-----------------------------------------------------------------------------------
Site Wide Alert
-----------------------------------------------------------------------------------*/

jQuery(document).ready(function() {
	"use strict";
	jQuery('.sitewide-alert').show();
	jQuery(".sitewide-alert").each(function() {
		var alert_id = "mooncoco_"+jQuery(this).data("id");
		jQuery('.sitewide-alert #close').click(function() {
			jQuery( ".sitewide-alert" ).slideUp(500, function() {
			});
			jQuery.cookie(alert_id, "hidden");
		});
		var alert_state = jQuery.cookie(alert_id);
		if(alert_state == "hidden") {
			jQuery('.sitewide-alert').hide();
		}
	});
});

/*-----------------------------------------------------------------------------------
	Fancybox
-----------------------------------------------------------------------------------*/

jQuery(document).ready(function() {
	"use strict";
	jQuery(".fancybox a").fancybox({
		helpers : {
			overlay : {
				locked : false
				}
		    },
		padding: ['5px', '5px', '5px', '5px']
	});
});

/*-----------------------------------------------------------------------------------*/
/*	Twitter
/*-----------------------------------------------------------------------------------*/

jQuery(document).ready(function() {
	"use strict";
	jQuery('.tweet').each(function() {
		
		var twitter_username = jQuery(this).attr("data-username");
		var twitter_modpath = jQuery(this).attr("data-url")+'/twitter/';
		var twitter_count = jQuery(this).attr("data-count");
		
		jQuery(this).tweet({
			username: twitter_username,
			modpath: twitter_modpath,
			join_text: "auto",
			avatar_size: 32,
			count: twitter_count,
			auto_join_text_default: "",
			auto_join_text_ed: "",
			auto_join_text_ing: "",
			auto_join_text_reply: "",
			auto_join_text_url: "",
			loading_text: "loading tweets..."
		});
	});
});
	    	
/*-----------------------------------------------------------------------------------*/
/*	Counter
/*-----------------------------------------------------------------------------------*/

jQuery(document).ready(function() {
	jQuery('.vc-counter-number').each(function() {
		counter_number = jQuery(this).attr("data-counter-number");
		jQuery(this).numAnim({
		    endAt: counter_number,
		    duration: 2
		});
	});
	

	jQuery('.vc-counter-number').each(function() {
	
		jQuery(this).waypoint({
			offset: 'bottom-in-view',
		  handler: function() {
		    counter_number = jQuery(this).attr("counter-number");
	
			jQuery(this).numAnim({
			    endAt: counter_number,
			    duration: 1
			});
		  }
		});
	});

});
		
/*-----------------------------------------------------------------------------------*/
/*	Sticky Header
/*-----------------------------------------------------------------------------------*/

jQuery(document).ready(function($) {
 	"use strict";
 	var $wpAdminBar = $('#wpadminbar');


 	if (!$('body').hasClass("standard_header")) {
		if ($wpAdminBar.length) {

		  	$('.layout-fullwidth .header[data-sticky="enable"]').waypoint('sticky', {
			  offset: 31 // Apply "stuck" when element 32px from top
			});
		} else {
			$('.layout-fullwidth .header[data-sticky="enable"]').waypoint('sticky', {
			  offset: -1 // Apply "stuck" when element 32px from top
			});
		}

		if ($wpAdminBar.length) {
		  	$('.freefloating-side [data-sticky="enable"]').waypoint('sticky', {
			  offset: 32 // Apply "stuck" when element 32px from top
			});
		} else {
			$('.freefloating-side [data-sticky="enable"]').waypoint('sticky');
		}
	}

	if (!$('body').hasClass("standard_header")) {
		$('.layout-fullwidth [data-sticky="enable"]').waypoint(function(direction) {
			if (direction == "down") {
		  		jQuery(this).addClass("header-shrink");
		  	}
		  	if (direction == "up") {
		  		jQuery(this).removeClass("header-shrink");
		  	}
		}, { offset: "-400px" });
	}
	if ($('.page-container').hasClass("header-hover-content")) {
		if ($('body').hasClass("standard_header")) {
			jQuery('.layout-fullwidth [data-sticky="enable"]').addClass("stuck");

		}
	}
});

/*-----------------------------------------------------------------------------------*/
/*	Isotope load more button text
/*-----------------------------------------------------------------------------------*/

jQuery('.isotope-loadmore a').click(function() {
	"use strict";
	jQuery('.isotope-loadmore a').text("Loading...");
	
});
		
/*-----------------------------------------------------------------------------------*/
/* Remove empty P tags
/*-----------------------------------------------------------------------------------*/

jQuery(document).ready(function() {
	"use strict";
	jQuery( 'p:empty' ).remove();
});
		
/*-----------------------------------------------------------------------------------*/
/* Parallax BG
/*-----------------------------------------------------------------------------------*/

jQuery(window).load(function() {
	"use strict";
	jQuery('.parallax-bg').each(function() {
		jQuery(this).parallax("50%", '0.5');
	});
});

/*-----------------------------------------------------------------------------------*/
/* Back to top
/*-----------------------------------------------------------------------------------*/

// jQuery(document).ready(function() {
// 	jQuery().UItoTop({ easingType: 'easeOutQuart' });
// });
	
/*-----------------------------------------------------------------------------------*/
/* Mobile Navigation Toggle
/*-----------------------------------------------------------------------------------*/

jQuery('.mobile-nav-container .dropdown').click(function() {
	"use strict";
	jQuery('.sub-menu', this).slideToggle(300);
});

/*-----------------------------------------------------------------------------------*/
/* Isotope
/*-----------------------------------------------------------------------------------*/


jQuery(document).ready(function() {
    "use strict";
    var settings = {
	     animationEngine: 'best-available',
	     filter: '',
		sortBy: 'original-order',
		sortAscending: true,
		transformsEnabled: true,
		layoutMode: 'masonry',
		animationOptions: {
			queue: false,
			easing: 'linear',
			duration: 5000,
		},
	};
	
	// Settings for the grid
    jQuery(function(){
	    var $container = jQuery('.isotope'),
	    // object that will keep track of options
	    isotopeOptions = {},
	    // defaults, used if not explicitly set in hash
	    defaultOptions = settings;
	    
	    var setupOptions = jQuery.extend( {}, defaultOptions, {
		    itemSelector : '.isotope-post',
		    masonry: {
			    gutterWidth: 50,
			    columnWidth: 1,
			   },
		});

    	$container.infinitescroll({
       		navSelector  : '.isotope-loadmore',    // selector for the paged navigation 
	       	nextSelector : '.isotope-loadmore a',  // selector for the NEXT link (to page 2)
		    itemSelector : '.isotope-post',     // selector for all items you'll retrieve
	        behavior : 'twitter',
        loading: {
            finishedMsg: '&nbsp;',
            img: ''
          }
        },
        // call Isotope as a callback
        function( newElements ) {
        
		var $newElems = jQuery(newElements);
		$newElems.css("opacity","0");
		$newElems.imagesLoaded(function(){
			$newElems.css("opacity","1");
			jQuery(".post").css("opacity","1");
			$container.isotope('appended', $newElems );
		});
		
		// LoadMore Callback scripts
		// =========================================
		jQuery('.isotope-loadmore a').text("Load more");
	        
        }
          
      );
      
		// set up Isotope
		$container.isotope( setupOptions );
		var $optionSets = jQuery('.category-filter').find('li'),
		isOptionLinkClicked = false;
		
	  
		// switches selected class on buttons
		function changeSelectedLink( $elem ) {
			// remove selected class on previous item
			$elem.parents().find('.selected').removeClass('selected');
			// set selected class on new item
			$elem.addClass('selected');
		}
	  
		$optionSets.find('a').click(function(){
			var $this = jQuery(this);
			// don't proceed if already selected
			if ( $this.hasClass('selected') ) {
				return;
			}
			changeSelectedLink( $this );
			// get href attr, remove leading #
			var href = $this.attr('href').replace( /^#/, '' ),
			// convert href into object
			// i.e. 'filter=.inner-transition' -> { filter: '.inner-transition' }
			option = jQuery.deparam( href, true );
			// apply new option to previous
			jQuery.extend( isotopeOptions, option );
			// set hash, triggers hashchange on window
			jQuery.bbq.pushState( isotopeOptions );
			isOptionLinkClicked = true;
	      
			if (jQuery(window).width() <= 480) {  
				jQuery('#nav-collapse').removeClass('in');
				jQuery('#nav-collapse').css('height','0');
			}
	        return false;
	    });
    });
});

/*-----------------------------------------------------------------------------------*/
/* Flexslider (Gallery post format)
/*-----------------------------------------------------------------------------------*/

jQuery(document).ready(function() {
"use strict";
jQuery('.widget-slider .flexslider').flexslider({
	animation: "slide",
	slideshow: false, 
	animationSpeed: 600, 
	easing: "swing", 
	directionNav: true,
	prevText: "",
	nextText: "",
	});
});

/*-----------------------------------------------------------------------------------*/
/* Initiate tooltips and popovers
/*-----------------------------------------------------------------------------------*/

jQuery(document).ready(function(){
	"use strict";
	jQuery('[data-toggle="tooltip"]').tooltip();
	jQuery('[data-toggle="popover"]').popover();
	jQuery('[data-show="true"]').popover('show');
});

/*-----------------------------------------------------------------------------------*/
/* Scripts for youtube and vimeo autoplay
/*-----------------------------------------------------------------------------------*/

jQuery(document).ready(function(){
	"use strict";
	jQuery("[data-auto-play='vimeo']").each(function() {
	
		var iframe = jQuery(this).parent().find('iframe').get(0);
		var player = $f(iframe);
		
		
		console.log(jQuery(this).data("auto-sound"));
	
		jQuery(this).bind('inview', function(event, visible) {
			if (visible) {
				player.api("play");
						if (jQuery(this).data("auto-sound")) {
			$f(iframe).api('setVolume', 1);
		} else {
			$f(iframe).api('setVolume', 0);
		}
			} else {
			    player.api("pause");
			}
		});
	});
});

var player;
var myYT = { players: [] };
//var myAS = { autosound: [] };
var this_video = "";
function onYouTubePlayerAPIReady() {
	jQuery("[data-auto-play='youtube']").each(function(i) {
		
	    player = new YT.Player(jQuery(this).parent().find('iframe').get(0));	    
   
	    jQuery(this).data('index', i);
	    myYT.players.push(player);	    

	    
	    var auto_sound = jQuery(this).data("auto-sound");
	    
		jQuery(this).bind('inview', function(event, visible) {	
			this_video = jQuery(this);
			if (visible) {
				myYT.players[jQuery(this).data('index')].playVideo();
				console.log(jQuery(this_video).data("auto-sound"));
				if (auto_sound) {
					myYT.players[jQuery(this).data('index')].unMute();
				} else {
					myYT.players[jQuery(this).data('index')].mute();
				}
			} else {
    			myYT.players[jQuery(this).data('index')].pauseVideo();
    		}
    	});

    });
}

var tag = document.createElement('script');
tag.src = "//www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

/*-----------------------------------------------------------------------------------*/
/* Full Width Content
/*-----------------------------------------------------------------------------------*/

jQuery(document).ready(function() {
	"use strict";
	var width = jQuery('body').width();

	var offset = jQuery( '.content-container .container' ).offset().left + 15;
	
	jQuery( '.full-width-content' ).css("width", width);
	jQuery( '.full-width-content' ).css("margin-left", "-"+offset+"px");
	
	jQuery(window).resize(function() {
		var width = jQuery('body').width();
		var offset = jQuery( '.content-container .container' ).offset().left + 15;
		jQuery( '.full-width-content' ).css("width", width);
		jQuery( '.full-width-content' ).css("margin-left", "-"+offset+"px");
	});	
});

/*-----------------------------------------------------------------------------------*/
/* Parallax Effect
/*-----------------------------------------------------------------------------------*/

jQuery(document).ready(function() {
	"use strict";
	jQuery(window).scroll(function () {
        jQuery('.parallax-div .ls-inner').css({
            'top': 0+(jQuery(this).scrollTop() / 1.8) + "px"
        });
    });
});

/*-----------------------------------------------------------------------------------*/
/* Preloader
/*-----------------------------------------------------------------------------------*/

jQuery(window).load(function() {
	"use strict";
	jQuery(".preloader").css("opacity", "0");
	jQuery(".preloader").css("visibility", "hidden");
});

/*-----------------------------------------------------------------------------------*/
/* Select
/*-----------------------------------------------------------------------------------*/
jQuery(document).ready(function(){
	"use strict";
	jQuery("select").selectBoxIt();
});

jQuery(document).ready(function() {
	jQuery().UItoTop({ easingType: 'easeOutQuart' });
});
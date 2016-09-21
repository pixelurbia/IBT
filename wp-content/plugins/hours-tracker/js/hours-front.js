jQuery(document).ready(function($) {


//count and hide entires
//show only first 30 - 60 - then all -- MVP since custom pagination 

//fancybox
$('a#inline').fancybox();

//move hourscontainer since wordpress has no hook for specific content after the_content
var hoursContainer = $("<div />").append($('#hours-container').clone()).html();
$('#hours-container').remove();
$('#post-13122').append(hoursContainer);


//add labels in mobile
$( window ).resize(function() { 
		labels();
});    
function labels(){
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {

		$( ".hour-entry li" ).each(function() { 
		var name = $(this).attr('name'),
	 		text = $(this).text(),
			newText = name + ': ' + text;
			$(this).text(newText);
		});

		}
}
$(function(){
    /* Hide form input values on focus*/ 
    $('input:text, textarea').each(function(){
        var txtval = $(this).val();
        $(this).focus(function(){
            if($(this).val() == txtval){
                $(this).val('')
            }
        });
        $(this).blur(function(){
            if($(this).val() == ""){
                $(this).val(txtval);
            }
        });
    });
});

$(function(){
    /* Hide form input values on focus*/ 
    $('input.text').each(function(){
        var txtval = $(this).val();
        $(this).focus(function(){
            if($(this).val() == txtval){
                $(this).val('')
            }
        });
        $(this).blur(function(){
            if($(this).val() == ""){
                $(this).val(txtval);
            }
        });
    });
});
});
jQuery( window ).load(function() { 
	// jQuery('#sub-catSelectBoxItContainer').hide();
jQuery('.indirect-option').hide();
jQuery('.direct-option').hide();
	 jQuery('#date_picker').datepicker({
        dateFormat : 'dd-mm-yy'
    });
		jQuery('#direct-indirect').change(function(){
		jQuery('#sub-catSelectBoxItContainer').show();
			var type = jQuery(this).val();

			if( type == 'direct'){ 
				jQuery('.indirect-option').hide();
				jQuery('.direct-option').show();
			} else { 
				jQuery('.direct-option').hide();
				jQuery('.indirect-option').show();
			}

		});
		});
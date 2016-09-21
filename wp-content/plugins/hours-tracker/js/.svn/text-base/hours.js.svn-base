jQuery(document).ready(function($) {

	//jQuery Form Validation - Start Script
	jQuery("addHours").validate();

  	//ajax to get table data. 
	// jQuery(document).on('click', "#refresh", function (e) {
	// 	e.preventDefault();
 	// 	ajaxUpdate();	
 	// });
	jQuery(document).on('click', "#refreshAdmin", function (e) {
		e.preventDefault();
		location.reload();
  	});


function ajaxUpdate(){		
	$.post( 
		document.location.protocol+'//'+document.location.host+'/wp-admin/admin-ajax.php', 
		{action: 'hours_tracking_update_table'}, 
	  		function(response) { 
	  			// alert(response); 
	  			$('#hours-list').html(response);
	  		}); 
}
  	//ajax to delete table data.
jQuery(document).on('click', ".delete", function (e) {
		e.preventDefault();
    	var id = this.id;
    	$(this).parent().remove();
		$.post( 
			document.location.protocol+'//'+document.location.host+'/wp-admin/admin-ajax.php', 
	  		{action: 'hours_tracking_delete_row', element_id: id}, 
	  		function(response) { 
	  			// alert(response); 
	  			// ajaxUpdate();
	  			
	  		}); });
		
	//ajax approve status
jQuery(document).on('click', ".approved", function (e) {
		e.preventDefault();
    	var id = this.id;
		$.post( 
			document.location.protocol+'//'+document.location.host+'/wp-admin/admin-ajax.php', 
	  		{action: 'hours_tracking_approve_row', element_id: id}, 
	  		function(response) { 
	  			// alert(response); 
 				location.reload();
	  		}); });
});

jQuery( window ).load(function() { 
//ajax call for adding hours to the database
	jQuery('#addHours').submit(ajaxSubmit);                         
function ajaxSubmit(){
    var addHours = jQuery(this).serialize();
                                               
	    jQuery.ajax({
	    type:"POST",
	    url: "/wp-admin/admin-ajax.php",
	    data: addHours,
    	success:function(data){
    		// jQuery("#hours-list").append().html(data);
    		ajaxUpdateValues();
    	},
	    error: function(errorThrown){
		    // alert(errorThrown);
		    console.log( errorThrown.message )
	    }  
    });                                   
      return false;
    }

function ajaxUpdateValues(){
	jQuery('.fancybox-overlay').hide();
	jQuery('html').removeClass('fancybox-margin fancybox-lock');
		var a_or_d = jQuery('.a-or-d').attr('value');
		var ordby = jQuery('.active_sort').attr('name');
		var ordby = ordby;
		var noe = jQuery('#noe').val();
		// console.log(a_or_d);
		// console.log(ordby);
			jQuery.post( 
			document.location.protocol+'//'+document.location.host+'/wp-admin/admin-ajax.php', 
	  		{action: 'hours_tracking_update_table', num_of_entries: noe, ordby: ordby, a_or_d: a_or_d}, 
	  		function(response) { 
	  			// alert(response); 
	  			jQuery('#hours-list').html(response);
	  		}); 

		}

/* ajax to pull value and limit number of entries shown at once*/
	jQuery(document).on('click', ".heading li", function (e) { 
		jQuery('.heading li').removeClass('active_sort');
		jQuery(this).addClass('active_sort');
		var a_or_d = jQuery('.a-or-d').attr('value');
		var ordby = jQuery(this).attr('name');
		var noe = jQuery('#noe').val();
		// console.log(a_or_d);
		// console.log(ordby);
			jQuery.post( 
			document.location.protocol+'//'+document.location.host+'/wp-admin/admin-ajax.php', 
	  		{action: 'hours_tracking_update_table', num_of_entries: noe, ordby: ordby, a_or_d: a_or_d}, 
	  		function(response) { 
	  			// alert(response); 
	  			jQuery('#hours-list').html(response);
	  		}); 
	});

	jQuery('#noe').change(function(){ 
		var a_or_d = jQuery('.a-or-d').attr('value');
		var ordby = jQuery('.active_sort').attr('name');
		var noe = jQuery(this).val();
		// console.log(noe);

			jQuery.post( 
			document.location.protocol+'//'+document.location.host+'/wp-admin/admin-ajax.php', 
	  		{action: 'hours_tracking_update_table', num_of_entries: noe, ordby: ordby, a_or_d: a_or_d}, 
	  		function(response) { 
	  			// alert(response); 
	  			jQuery('#hours-list').html(response);
	  		}); 
	});
	});
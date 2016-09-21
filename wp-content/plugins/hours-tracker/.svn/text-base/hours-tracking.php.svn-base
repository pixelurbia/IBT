<?php 
/*
* Plugin Name: BCG Hours Tracking
* Plugin URI: http://Brocktoncg.com
* Description: Track hours, approve them keep tabs on what your people are doing
* Version: 1.0
* Author: Andy Olson
* Author URI: http://Brocktoncg.com
* License: GPL2

*/

//load external files
add_action( 'wp', 'hours_init_front');
add_action( 'admin_enqueue_scripts', 'hours_init' );
wp_enqueue_script('jquery-ui-datepicker');
wp_enqueue_style('jquery-style', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');


// wp_enqueue_script('jquery-ui-core');
function hours_init_front() {
		wp_register_script('hours-js', plugins_url( '/js/hours.js', __FILE__), array('jquery'));	
		wp_register_script('hours-front-js', plugins_url( '/js/hours-front.js', __FILE__), array('jquery'));	
		wp_register_script('validate', plugins_url( '/js/validate.js', __FILE__), array('jquery'));	
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'hours-js' );
		wp_enqueue_script( 'hours-front-js' );
		wp_enqueue_script('validate');
		wp_enqueue_style( 'hours-style', plugins_url( '/css/hours.css', __FILE__) );
	}
function hours_init() {
		wp_register_script('hours-js', plugins_url( '/js/hours.js', __FILE__), array('jquery'));	
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'hours-js' );
		wp_enqueue_style( 'hours-style', plugins_url( '/css/hours.css', __FILE__) );
		wp_register_script('validate', plugins_url( '/js/validate.js', __FILE__), array('jquery'));	
wp_enqueue_script('validate');
}

add_filter( 'show_user_profile', 'hours_admin_view' );
add_action( 'edit_user_profile', 'hours_admin_view' );

function hours_admin_view ( $user  ) {

	global $wpdb;
	global $user_id;

		$curuser = $user_id;
		$num_of_entries = 99999999;
		$ordby = 'date';
		$a_or_d = 'DESC';
						
						$element_id = 'delete_' . $hours->post_id . '_' . wp_create_nonce('delete_' . $hours->post_id );

						$hours = $wpdb->get_results("SELECT * FROM hours_tracking WHERE user = $curuser ORDER BY $ordby $a_or_d LIMIT $num_of_entries;");


						echo '<div class="hours-container admin-view" id="hours-container">';   
						echo '<h2>Hours Tracking</h2><br>';
						echo '<a class="controls" href="" id="refreshAdmin">Refresh</a>';

						echo '<select id="noe" style="display:none!important;" name="noe" type="text" value="30">
							  	<option value="99999999">30 Entries</option>
							  	<option value="60">60 Entires</option>
							  	<option value="999999999">All</option>
							  </select>';
						echo '<div id="hours-list" class="hours-list">';

						echo '<div value="'.$a_or_d.'" class="a-or-d hide"></div>';
						echo '<ul><li><ul class="heading">';
						echo '<li name="client" value="" class="client '.$a_or_d.'">Client Initials</li>';
						echo '<li name="date" value="" class="active_sort '.$a_or_d.' date">Date</li>';
						echo '<li name="task" value="" class="task '.$a_or_d.'">Task Name</li>';
						echo '<li name="direct_indirect" value="" class="doi '.$a_or_d.'">Direct/Indirect</li>';
						echo '<li name="sub_cat" value="" class="sub '.$a_or_d.'">Sub Category</li>';
						echo '<li name="hours" value="" class="hours '.$a_or_d.'">Hours</li>';
						echo '</ul></li></ul>';


						echo '<ul id="hours-entries">';
						

						foreach($hours as $hour){
						

							echo '<li>';
								if ( $hour->status == 1) { 
 									echo '<ul class="closed hour-entry">';
							    } else {
							    	echo '<ul class="open hour-entry">';
							    	}

								//adding the feature to update/delete but not if approved already so lets add that first
								echo '<li name="Client Initials" class="client">'. $hour->client .'</li>';
								echo '<li name="Date" class="date">'. $hour->date .'</li>';
								echo '<li name="Task" class="task">'. $hour->task .'</li>';
								echo '<li name="Direct/Indirect" class="doi">'. $hour->direct_indirect .'</li>';
								echo '<li name="Sub Category" class="sub">'. $hour->sub_cat .'</li>';
								echo '<li name="Hours" class="hours">'. $hour->hours .'</li>';
								
								if ( $hour->status == 1) { 
									echo '<li class="hour-action">';
							    	echo '<a id="delete_'.$hour->id.'_'.wp_create_nonce('delete_' . $hour->id ).'" class="delete" value='.$hour->id.'>Delete</a>';
									echo '<span>Approved</span>';
									echo '</li>';

							    } else {
							    	echo '<li class="hour-action">';
							    	echo '<a id="delete_'.$hour->id.'_'.wp_create_nonce('delete_' . $hour->id ).'" class="delete" value='.$hour->id.'>Delete</a>';
									echo '<a id="approve_'.$hour->id.'_'.wp_create_nonce('approve_' . $hour->id ).'" class="approved" value='.$hour->id.'>Approve</a>';
									echo '</li>';
							    }
								
								echo '</ul>';


					
						echo '</li>';
						}
						echo '</ul>';
						echo '</div>';
						echo '</div>';

}
//changing the content to add the form
add_filter( 'the_content', 'hours_tracking_content' );

function hours_tracking_content( $content ) {

  if (is_page_template('hours.php')) {
        // Do something to $content

	                             
				$form = ' <div id="form-contain">
					<form name="addHours" action="" method="post" id="addHours" class="addHours"> 
					<lable for="date_picker">Date</label>
					<input required="" id="date_picker" name="date_picker" type="text" value="">
					<lable for="client_initials">Client Initials</label>
					<input required="client_initials" id="client_initials" name="client_initials" type="text" value="">

					<select required="" id="direct-indirect" name="direct-indirect" type="text" value="">
					  <option value="">Hours Type</option>
					  <option value="direct">Direct</option>
					  <option value="indirect">Indirect</option>
					</select>
					<select required="" id="sub-cat" name="sub-cat" type="text" value="">
					  	<option value="">Sub Cateogry</option>
						<option class="direct-option" value="implementing-programs">Implementing programs </option>
						<option class="direct-option" value="graphing ">Graphing </option>
						<option class="direct-option" value="direct-other">Other</option>
						<option class="indirect-option" value="treatment-planning">Treatment planning </option>
						<option class="indirect-option" value="team-meetings">Team meetings </option>
						<option class="indirect-option" value="analyzing-data">Analyzing Data </option>
						<option class="indirect-option" value="stimuli-development">Stimuli Development </option>
						<option class="indirect-option" value="observation-criterion">Observation Criterion </option>
						<option class="indirect-option" value="referenced-assessment">Referenced Assessment </option>
						<option class="indirect-option" value="literature-review">Literature Review </option>
						<option class="indirect-option" value="consultation">Consultation with other BA </option>
						<option class="indirect-option" value="functional-assessment">Functional Assessment </option>
						<option class="indirect-option" value="functional-analysis">Functional Analysis </option>
						<option class="indirect-option" value="behavior-analytic">Behavior Analytic Research </option>
						<option class="indirect-option" value="training-others">Training Others </option>
						<option class="indirect-option" value="indirect-other">Other</option>
					</select></br></br>
					<lable for="task">Task Name</label>
					<input required="" id="task" name="task" type="text" value="">
					<lable for="thehours">Amount of Hours</label>
					<input required="" id="thehours" name="thehours" type="text" value="">
					<input type="hidden" name="action" value="hours_tacking_save_hours"/> 
					<input type="submit" value="Submit"> </form> <div id="feedback"></div></div>';
					$content .= $form;
				
			} else {
	}
 return $content;
}

add_filter( 'the_content', 'hours_tracking_list' );


function hours_tracking_list( $content ) {
	// global $post;
	// wp_localize_script( 'hours-js', 'updatehours', array() )

  if (is_page_template('hours.php')) {
        // Do something to $content
		if(!is_user_logged_in()) {
				echo '<h2>Hey there! You need to login before you can see this content!</h2>';
			  wp_login_form();
				} else {
                                  
					global $wpdb;
					    $curuser = wp_get_current_user();
						$curuser = $curuser->ID;
						$num_of_entries = 30;
						$ordby = 'date';
						$a_or_d = 'DESC';
						


						// echo $curuser;
						$element_id = 'delete_' . $hours->post_id . '_' . wp_create_nonce('delete_' . $hours->post_id );

						$hours = $wpdb->get_results("SELECT * FROM hours_tracking WHERE user = $curuser ORDER BY $ordby $a_or_d LIMIT $num_of_entries;");
						echo '<div class="hours-container" id="hours-container">';   
						echo '<h2>Hours Tracking</h2><br>';
						// echo '<a class="controls" href="" id="refresh">Refresh</a>';
						echo '<a class="controls" href="#form-contain" id="inline">+ Add Hours</a>';

						echo '<select id="noe" name="noe" type="text" value="30">
							  	<option value="30">30 Entries</option>
							  	<option value="60">60 Entires</option>
							  	<option value="999999999">All</option>
							  </select>';
						echo '<div id="hours-list" class="hours-list">';

						echo '<div value="'.$a_or_d.'" class="a-or-d hide"></div>';
						echo '<ul><li><ul class="heading">';
						echo '<li name="client" value="" class="client '.$a_or_d.'">Client Initials</li>';
						echo '<li name="date" value="" class="active_sort '.$a_or_d.' date">Date</li>';
						echo '<li name="task" value="" class="task '.$a_or_d.'">Task Name</li>';
						echo '<li name="direct_indirect" value="" class="doi '.$a_or_d.'">Direct/Indirect</li>';
						echo '<li name="sub_cat" value="" class="sub '.$a_or_d.'">Sub Category</li>';
						echo '<li name="hours" value="" class="hours '.$a_or_d.'">Hours</li>';
						echo '</ul></li></ul>';


						echo '<ul id="hours-entries">';


						foreach($hours as $hour){
							

								echo '<li>';
								if ( $hour->status == 1) { 
 									echo '<ul class="closed hour-entry">';
 									echo '<span>Approved</span>';
							    } else {
							    	echo '<ul class="open hour-entry">';
							    	echo '<a id="delete_'.$hour->id.'_'.wp_create_nonce('delete_' . $hour->id ).'" class="delete" value='.$hour->id.'>Delete</a>';
							    }

								//adding the feature to update/delete but not if approved already so lets add that first
								echo '<li name="Client Initials" class="client">'. $hour->client .'</li>';
								echo '<li name="Date" class="date">'. $hour->date .'</li>';
								echo '<li name="Task" class="task">'. $hour->task .'</li>';
								echo '<li name="Direct/Indirect" class="doi">'. $hour->direct_indirect .'</li>';
								echo '<li name="Sub Category" class="sub">'. $hour->sub_cat .'</li>';
								echo '<li name="Hours" class="hours">'. $hour->hours .'</li>';
								
								echo '</ul>';


					
						echo '</li>';
						}
						echo '</ul>';
						echo '</div>';
						echo '</div>';
				}
			} else {
	}
 return $content;
}

add_action('wp_ajax_hours_tracking_update_table', 'hours_tracking_update_table');
add_action('wp_ajax_nopriv_hours_tracking_update_table', 'hours_tracking_update_table'); // not really needed


function hours_tracking_update_table () {


	//get numner of entries to show

	$num_of_entries = $_POST['num_of_entries'];
	
	$a_or_d = $_POST['a_or_d'];
	// echo $num_of_entries;
	// echo $ordby;
	// echo $a_or_d;
	if("" == trim($_POST['ordby'])){
    $ordby = 'date';
} else {
	$ordby = $_POST['ordby'];
}

if ($a_or_d == 'ASC') {
	echo '<div value="DESC" class="a-or-d hide"></div>';
} else {
	echo '<div value="ASC" class="a-or-d hide"></div>';
}

	//update the table of data 
	global $wpdb;
		$curuser = wp_get_current_user();
		$curuser = $curuser->ID;
		// echo $curuser;

$hours = $wpdb->get_results("SELECT * FROM hours_tracking WHERE user = $curuser ORDER BY $ordby $a_or_d LIMIT $num_of_entries;");
	
	echo '<ul>';
				echo '<ul><li><ul class="heading">';
				echo '<li name="client" value="" class="client '.$a_or_d.'">Client Initials</li>';
				echo '<li name="date" value="" class="date '.$a_or_d.'">Date</li>';
				echo '<li name="task" value="" class="task '.$a_or_d.'">Task Name</li>';
				echo '<li name="direct_indirect" value="" class="doi '.$a_or_d.'">Direct/Indirect</li>';
				echo '<li name="sub_cat" value="" class="sub '.$a_or_d.'">Sub Category</li>';
				echo '<li name="hours" value="" class="hours '.$a_or_d.'">Hours</li>';
						echo '</ul></li></ul>';

		echo '<ul id="hours-entries">';
						foreach($hours as $hour){
							

								echo '<li>';
								if ( $hour->status == 1) { 
 									echo '<ul class="closed hour-entry">';
 									echo '<span>Approved</span>';
							    } else {
							    	echo '<ul class="open hour-entry">';
							    	echo '<a id="delete_'.$hour->id.'_'.wp_create_nonce('delete_' . $hour->id ).'" class="delete" value='.$hour->id.'>Delete</a>';
							    }

								//adding the feature to update/delete but not if approved already so lets add that first
								echo '<li name="Client Initials" class="client">'. $hour->client .'</li>';
								echo '<li name="Date" class="date">'. $hour->date .'</li>';
								echo '<li name="Task" class="task">'. $hour->task .'</li>';
								echo '<li name="Direct/Indirect" class="doi">'. $hour->direct_indirect .'</li>';
								echo '<li name="Sub Category" class="sub">'. $hour->sub_cat .'</li>';
								echo '<li name="Hours" class="hours">'. $hour->hours .'</li>';
								
								echo '</ul>';

						echo '</li>';
						}
						echo '</ul>';
		
die();
} 

//save hours as an entry in the database

function hours_tacking_save_hours() {

	global $wpdb;

	$client_initials = $_POST['client_initials'];
	$datep = $_POST['date_picker'];
	$direct_or_indirect = $_POST['direct-indirect'];
	$sub_cat = $_POST['sub-cat'];
	$task = $_POST['task'];
	$hours = $_POST['thehours'];
	$user = wp_get_current_user();
	$user = $user->ID;

	$date = date('d-m-y');

	if($wpdb->insert('hours_tracking',array(
	'hours'=>$hours,
	'user'=>$user,
	'client'=>$client_initials,
	'direct_indirect'=>$direct_or_indirect,
	'sub_cat'=>$sub_cat,
	'task'=>$task,
	'status'=>'0',
	'date'=>$datep



	))===FALSE){

	echo "Error";


	}
	else {
	echo "<h2>Your hours have successfully been added</pre>";

	}
	die;
	} 

add_action('wp_ajax_hours_tacking_save_hours', 'hours_tacking_save_hours');
add_action('wp_ajax_nopriv_hours_tacking_save_hours', 'hours_tacking_save_hours'); // not really needed


//delete entries

function hours_tracking_delete_row() {
//getting the element_id and exploding it into an array
$id = explode('_', sanitize_text_field($_POST['element_id']));
//nonce verify 
if (wp_verify_nonce($id[2], $id[0] . '_' . $id[1])) {
        global $wpdb;
        //connect to db and delete
        $wpdb->delete( 'hours_tracking', array( 'id' => $id[1] ));
        // echo 'Deleted post';
        die;
    } else {
        echo 'Nonce not verified';
        die;
    }
die;
}

add_action('wp_ajax_hours_tracking_delete_row', 'hours_tracking_delete_row');
add_action('wp_ajax_nopriv_hours_tracking_delete_row', 'hours_tracking_delete_row'); // not really needed

//update entries for approval

function hours_tracking_approve_row() {
//getting the element_id and exploding it into an array
$id = explode('_', sanitize_text_field($_POST['element_id']));
//nonce verify 
if (wp_verify_nonce($id[2], $id[0] . '_' . $id[1])) {
        global $wpdb;
        //connect to db and delete
        $table = 'hours_tracking';
		$wpdb->query($wpdb->prepare("UPDATE $table SET status='1' WHERE id=$id[1]"));
      

        // echo 'Deleted post';
        die;
    } else {
        echo 'Nonce not verified';
        die;
    }
die;
}

add_action('wp_ajax_hours_tracking_approve_row', 'hours_tracking_approve_row');
add_action('wp_ajax_nopriv_hours_tracking_approve_row', 'hours_tracking_approve_row'); // not really needed





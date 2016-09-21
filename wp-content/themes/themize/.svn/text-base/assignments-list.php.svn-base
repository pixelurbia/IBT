<?php 
/*-----------------------------------------------------------------------------------*/
/* Get assignemtns for front end display
/* Gonna show completed and then open assignments
/*
/* NOTES

Get the meta data to diplsay status 
<?php $meta_values = get_post_meta( $post_id, $key, $single ); ?>
if 1 approved else not 
will want to show completed and then open with the ability to go back to the lesson and upload new ones?

Values I can pull

	$assignment_meta = array(
									"file_name" => $fname,
									"file_link" => $dest,
									"user_name" => $username,
									"disp_name" => $dispname,
									'file_path' => $file_path,
									"user_id"	=> @$user->ID,
									"lesson_id"	=> $post->ID,
									"course_id"	=> $course_id,
									"lesson_title"	=> $post->post_title,
									"lesson_type"	=> $post->post_type,
									"migrated"	=> "1"
								);	
					$assignment = array(
									"post_title" => $fname,
									"post_type"	=> "sfwd-assignment",
									"post_status" => "publish",
									"post_content"	=> "<a href='".$dest."' target='_blank'>".$fname."</a>",
									"post_author" => @$user->ID



/*-----------------------------------------------------------------------------------*/
function seoUrl($string) {
				    //Lower case everything
				    $string = strtolower($string);
				    //Make alphanumeric (removes all other characters)
				    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
				    //Clean up multiple dashes or whitespaces
				    $string = preg_replace("/[\s-]+/", " ", $string);
				    //Convert whitespaces and underscore to dash
				    $string = preg_replace("/[\s_]/", "-", $string);
				    return $string;
				}
echo '<h1>Assignments</h1>';
echo '<div class="assignments">';

echo '<h3>Pending Assignments</h3>';
	$assignments =  new WP_Query(array(
		'post_type' => 'sfwd-assignment',
		'posts_per_page' => -1,
		'orderby' => 'date',
		'order'=>'DESC'
		) ); 
		while ( $assignments->have_posts() ) : $assignments->the_post();   ?> 
	
		<?php //get the approval status of the assignments 
			$ID = get_the_ID();
			$key = 'approval_status';
			$lessonId = 'lesson_title';
			$status = get_post_meta( $ID, $key, true );
			$lesson = get_post_meta( $ID, $lessonId, true );
					//strip string for url friendly echo

		 	$lesson = seoUrl($lesson);


			if ( $status == 1 ) { ?>
			<?php } else { ?>
				<div class="entry pending">
					<h4>Pending: <a href=" <?php the_permalink(); ?>	"><?php the_title(); ?></a></h4> 
					<a href="/lesson/<?php echo $lesson; ?>">Review & Resubmit</a>
				</div>	
			<?php } ?> 

		<?php endwhile; ?>
		<hr>
		<br>
		<h3>Completed Assignments</h3>
<?php
	$assignments =  new WP_Query(array(
		'post_type' => 'sfwd-assignment',
		'posts_per_page' => -1,
		'orderby' => 'date',
		'order'=>'DESC'
		) ); 
		while ( $assignments->have_posts() ) : $assignments->the_post();   ?> 
	
		<?php //get the approval status of the assignments 
			$ID = get_the_ID();
			$key = 'approval_status';
			$lessonId = 'lesson_title';
			$status = get_post_meta( $ID, $key, true );
			$lesson = get_post_meta( $ID, $lessonId, true );
					//strip string for url friendly echo

		 	$lesson = seoUrl($lesson);

			if ( $status == 1 ) { ?>
				<div class="entry completed">
					<h4>Approved: <a href=" <?php the_permalink(); ?>	"><?php the_title(); ?></a></h4> 
					<a href="/lesson/<?php echo $lesson; ?>">Review & Resubmit</a>
				</div>	
			<?php } else { ?>
			
				
			<?php } ?> 
		

		<?php endwhile; ?>
		<hr>
</div>
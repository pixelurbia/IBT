<?php 

if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) :  	
	 die('You can not access this page directly!'); 
endif; 

/*-----------------------------------------------------------------------------------*/
/*	Display Comments
/*-----------------------------------------------------------------------------------*/

if ( comments_open() ) { ?>
	<?php if($comments) { ?>
		<ol class="commentlist">
			<?php wp_list_comments('type=comment&callback=themize_comments'); ?>
			<?php paginate_comments_links(); ?>
		</ol>
		<div class="clearboth"></div>
	<?php } ?>
<?php } ?>
<?php
$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );

/*-----------------------------------------------------------------------------------*/
/*	Custom Comment Form
/*-----------------------------------------------------------------------------------*/

$args = array(
	'id_form' => 'commentform',
	'id_submit' => 'comment-submit',
	'title_reply' => 'Leave a comment',
	'title_reply_to' => 'Leave a reply to %s',
	'cancel_reply_link' => 'Cancel Reply',
	'label_submit' => 'Post Comment',
	'comment_field' => '<p class="comment-form"><textarea placeholder="Your comment" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
	'must_log_in' => '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
	'logged_in_as' => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
	'comment_notes_after' => '<p class="form-allowed-tags">' . sprintf( __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ), ' <code>' . allowed_tags() . '</code>' ) . '</p>',
	'fields' => apply_filters( 'comment_form_default_fields', array(
	'author' => '<div class="row"><div class="col-md-6 margin-bottom0"><p class="comment-form-author"><input id="author" placeholder="Name" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p></div>',
	'email' => '<div class="col-md-6 margin-bottom0"><p class="comment-form-email"><input placeholder="Email" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p></div></div>',
	'url' => '' ) ) 
	
); 

comment_form($args); 

?>
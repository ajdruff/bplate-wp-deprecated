<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.','glandscape');?></p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->
<div id="comments">
<?php if ( have_comments() ) : ?>
	
	
	<h2>	
	<?php printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number(), 'glandscape' ),
			number_format_i18n( get_comments_number() ),  get_the_title() );?>
	
	</h2>

	
	<ul class="commentlist">
	<?php wp_list_comments("callback=gblu_comments"); ?>
	</ul>

	<div class="navigation">
		<div class="alignleft oldercomments"><?php previous_comments_link( __( 'Older Comments', 'glandscape' ) ); ?></div>
		<div class="alignright newercomments"><?php next_comments_link( __( 'Newer Comments', 'glandscape' ) ); ?></div>
	</div>
	
 <?php else : // this is displayed if there are no comments so far ?>

	
<?php endif; ?>

</div>
<?php if ( comments_open() ) : ?>

<div id="respond">
<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p> <a href="<?php echo wp_login_url( get_permalink() ); ?>"><?php _e('You must be logged in to post a comment.','glandscape');?></a> </p>
<?php else : ?>

<?php comment_form(); ?>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>

<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>
			<p class="nocomments">This post is password protected. Enter the password to view comments.<p>
			<?php
			return;
		}
     }

/* This variable is for alternating comment background */
$oddcomment = 'alt';
?>

<!-- Begin Dedication -->
<div id="dedication">
    <a href="http://www.mikesinkula.com/" target="_blank"><?php echo get_avatar(get_the_author_meta('ID'), 60); ?></a>
    <p><?php echo get_the_author_meta('description'); ?></p>
</div>
<!-- End Dedication -->

<!-- Begin Comment's Box -->
<div id="comments-box">
<?php if ( have_comments() ) : ?>
	<h2 id="comments-head"><a name="comments"><?php comments_number('0 Comments:', '1 Comment:', '% Comments:' );?></a></h2>
	<ol id="comment-items">
	<?php wp_list_comments('type=comment'); ?>
	</ol>
	<div class="navigation">
        <p class="alignleft"><?php previous_comments_link() ?></p>
        <p class="alignright"><?php next_comments_link() ?></p>
    </div>
<?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>
	<?php endif; ?>
<?php endif; // end if comments ?>

	<!-- Begin Trackbacks -->
    <?php if ( have_comments() ) : ?>
	<div id="trackbacks">
        <h4>Trackbacks:</h4>
        <ul id="trackback-items">
        <?php wp_list_comments('type=pings'); ?>
        </ul>
	</div>
    <?php endif; // end if comments ?>
    <!-- End Trackbacks -->
    
<?php if ('open' == $post->comment_status) : ?>
    <div id="respond">
        <h4><?php comment_form_title( 'Leave a Comment:', 'Leave a Comment to %s' ); ?></h4>
        <div class="cancel-comment-reply">
        <p><small><?php cancel_comment_reply_link(); ?></small></p>
        </div>
	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
		<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
	<?php else : ?>
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
	<?php if ( $user_ID ) : ?>
		<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>
	<?php else : ?>
    	<p>Don't forget to get your <a href="http://en.gravatar.com/" target="_blank">Globally Recognized Avatar</a>.</p>
        <label for="author">Name <small><?php if ($req) echo "(required)"; ?></small></label>
    	<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
    	<label for="email">Mail <small><?php if ($req) echo "(required)"; ?></small></label>
    	<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
    	<label for="url">Website</label>
    	<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
    	
	<?php endif; ?>
    <label for="comment">Comment</label>
	<textarea name="comment" class="comment" cols="50" rows="10" tabindex="4"></textarea>
	<input name="submit" type="submit" class="submit" tabindex="5" value="Submit Comment" /><?php comment_id_fields(); ?>
	<?php do_action('comment_form', $post->ID); ?>
	</form>
	<?php endif; // If registration required and not logged in ?>
	</div>
<?php endif; // if you delete this the sky will fall on your head ?>
</div> 
<!-- End Comment's Box -->

<?php 

/*  
Theme Name: sccc_premiumdw
Description: This is a theme your mom would love.
Version: 1
Author: Premium Design Works
Author URI: http://www.premiumdw.com/
*/

// Add Editor Styles
add_editor_style( 'admin.css' );

// Begin Register Sidebars
	if ( function_exists('register_sidebar') )
	register_sidebars(4,array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
//
	
// Create Page Excerpts
add_post_type_support( 'page', 'excerpt' );

/* Post Thumbnails (Featured Image) */
add_theme_support( 'post-thumbnails' ); 
//

// Begin Show Gravatars
	function show_avatar($comment, $size) {				
	$email=strtolower(trim($comment->comment_author_email));
	$rating = "G"; // [G | PG | R | X]
	 
		if (function_exists('get_avatar')) {
		echo get_avatar($email, $size);
		} else {
      
      $grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=
         " . md5($emaill) . "&size=" . $size."&rating=".$rating;
      echo "<img src='$grav_url'/>";
   		}		
	}
	
	
// Dedication Thingy
function get_dedication() {
	
	echo '<div id="dedication"><a href="http://www.mikesinkula.com/" title="Link to: http://www.mikesinkula.com/" target="_blank"><img class="myface" src="';
	bloginfo('template_directory'); 
	echo '/images/img-myface.jpg" /></a>';
	echo '<p>This portion of the <a href="http://www.premiumdw.com/" title="Link to: http://www.premiumdw.com/">Premium Design Works</a> website is written by <a href="http://www.mikesinkula.com/" title="Link to: http://www.mikesinkula.com/">Mike Sinkula</a> and dedicated to the <a href="http://seattlecentral.edu/~itprogs/">Web Design & Development</a> students at <a href="http://seattlecentral.edu/" title="Link to: http://seattlecentral.edu/">Seattle Central Community College</a> and the <a href="http://www.hcde.washington.edu/" target="_blank">Human Centered Design &amp; Engineering</a> students at the <a href="http://www.washington.edu/" target="_blank">University of Washington</a>.<span class="social-icons"><a title="Mike Sinkula\'s Twitter Feed" href="http://twitter.com/#!/mikesinkula"><img title="Mike Sinkula\'s Twitter Feed" src="';
	bloginfo('template_directory'); 
	echo '/images/ico-twitter.png" alt="Mike Sinkula\'s Twitter Feed"  /></a><a title="Mike Sinkula\'s FaceBook Page" href="http://www.facebook.com/msinkula?ref=profile" target="_blank"><img title="Mike Sinkula\'s FaceBook Page" src="';
	bloginfo('template_directory');
	echo '/images/ico-facebook.png" alt="Mike Sinkula\'s FaceBook Page"  /></a><a title="Mike Sinkula\'s LinkedIn Profile" href="http://www.linkedin.com/ppl/webprofile?action=vmi&amp;id=5408871&amp;pvs=pp&amp;authToken=C0zy&amp;authType=name&amp;trk=ppro_viewmore&amp;lnk=vw_pprofile" target="_blank"><img title="Mike Sinkula\'s LinkedIn Profile" src="';
	bloginfo('template_directory');
	echo '/images/ico-linkedin.png" alt="Mike Sinkula\'s LinkedIn Profile"  /></a><a title="Mike Sinkula\'s YouTube Channel" href="http://www.youtube.com/mikesinkula" target="_blank"><img title="Mike Sinkula\'s YouTube Channel" src="';
	bloginfo('template_directory');
	echo '/images/ico-youtube.png" alt="Mike Sinkula\'s YouTube Channel"  /></a><a title="Mike Sinkula\'s Flickr Photo Stream" href="http://www.flickr.com/photos/51088942@N05/" target="_blank"><img title="Mike Sinkula\'s Flickr Photo Stream" src="';
	bloginfo('template_directory');
	echo '/images/ico-flickr.png" alt="Mike Sinkula\'s Flickr Photo Stream"  /></a></span></p></div>';
	
}
//

// Remove Inline Styles from Captions
add_shortcode('wp_caption', 'fixed_img_caption_shortcode');
add_shortcode('caption', 'fixed_img_caption_shortcode');
function fixed_img_caption_shortcode($attr, $content = null) {
	
	if ( ! isset( $attr['caption'] ) ) {
		if ( preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches ) ) {
			$content = $matches[1];
			$attr['caption'] = trim( $matches[2] );
		}
	}

	$output = apply_filters('img_caption_shortcode', '', $attr, $content);
	if ( $output != '' )
		return $output;

	extract(shortcode_atts(array(
		'id'	=> '',
		'align'	=> 'alignnone',
		'width'	=> '',
		'caption' => ''
	), $attr));

	if ( 1 > (int) $width || empty($caption) )
		return $content;

	if ( $id ) $id = 'id="' . esc_attr($id) . '" ';

	return '<div ' . $id . 'class="wp-caption ' . esc_attr($align) . '" >'
	. do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></div>';
}
//


	
?>
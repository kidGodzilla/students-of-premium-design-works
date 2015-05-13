<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php if ( is_home() ) { ?><?php bloginfo('description'); ?><?php } ?><?php wp_title(''); ?> | <?php if ( is_page() && $post->post_parent ) { ?><?php $parent_title = get_the_title($post->post_parent); echo $parent_title; print ' |' ?><?php } ?> Premium Design Works</title>

<!-- Begin Meta Description -->
<meta name="description" content="<?php if ( is_home() || is_category() || is_archive() ) { print 'This portion of the Premium Design Works website is written by Mike Sinkula and dedicated to the Web Design & Development students at Seattle Central Community College.'; } ?><?php if ( is_page() ) { $key="meta"; echo get_post_meta($post->ID, $key, true); } ?><?php if ( is_single() ) { echo strip_tags(get_the_excerpt()); } ?>" />
<!-- End Meta Description -->

<!-- Begin Open Graph Meta -->
<meta property="og:title" content="<?php the_title(); ?>"/>
<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
<meta property="og:url" content="<?php the_permalink(); ?>"/>
<?php $fb_image = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ), 'thumbnail'); ?>
<?php if ($fb_image) : ?>
<meta property="og:image" content="<?php echo $fb_image[0]; ?>" />
<?php endif; ?>
<meta property="og:type" content="<?php
if (is_single() || is_page()) { echo "article"; } else { echo "website";} ?>"
/>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
<!-- End Open Graph Meta -->

<!-- Begin Links -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/ico-flame.ico" />
<!-- End Links -->
  
<!-- Begin WP Head -->  
<?php wp_head(); ?>  
<!-- End WP Head -->   

</head>

<body <?php body_class(); ?>>

<!-- START HOME LINK -->
<div id="homelink">
	<a href="http://www.premiumdw.com/" target="_blank" title="Premium Design Works Home"><img src="<?php bloginfo('template_directory'); ?>/images/img-homelink.png" alt="Premium Design Works Home" /></a>
</div>
<!-- END HOME LINK -->

<!-- START HEADER -->
<div id="header">

	<!-- Begin Logo -->
    <h1 id="logo"><a href="<?php echo get_option('home'); ?>" title="<?php bloginfo('description'); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    <!-- End Logo -->
    
    <!-- Begin Utility -->
    <div id="utility">
        <ul>
            <?php wp_list_pages('post_title&depth=1&title_li=&meta_key=navigation&meta_value=utility'); ?>
        </ul>
    </div>
	<!-- End Utility -->
    
    <!-- Begin Search -->
    <?php include (TEMPLATEPATH . '/searchform.php'); ?>
    <!-- End Search -->

    <!-- Begin Today's Date -->
    <div id="date">
    	<p><?php echo date_i18n('l - F d, Y'); ?></p>
    </div>
    <!-- End Today's Date -->
    
</div>
<!-- END HEADER -->

<!-- Begin Navigation -->
<div id="nav">
    <ul>
    <?php	
	
	$main_navigation = get_pages(array('meta_key' => 'navigation', 'meta_value' => 'main', ));
	$parent_ID = wp_get_post_parent_id( $post_ID );
	
	foreach ($main_navigation as $post) { // foreach gateway page... 
	
		if (is_page($post->ID)) { // if is current page...  
			 
			echo '<li class="main page-item-'.$post->ID.' current-page-item">'; // ... add list item with class of current page item
			 
		} elseif ($parent_ID == ($post->ID)) { // if is current page parent...
			
			echo '<li class="main page-item-'.$post->ID.' current-page-parent">'; // ... add list item with class of current page parent
				
		} else { // not current page or current page parent...
			
			echo '<li class="main page-item-'.$post->ID.'">'; // ... add list item with no class
		}
		
		echo '<a href="'.get_permalink($post->ID).'">'.$post->post_title.'</a>'; // get the title with permalink
		echo '<ul class="sub-menu">'; // get the sub-menu items
			
		if ($post->post_parent) { // if the page has a parent...
						
			echo '<li class="pagenav" >Class';
			echo '<ul>';
			echo '<li><a href="'.get_permalink($post->post_parent).'">Syllabus</a></li>'; // add link to syllabus with no class
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => '', 'meta_key' => 'navigation', 'meta_value' => 'class',)); 
			echo '</ul>';
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => 'Lectures:', 'meta_key' => 'navigation', 'meta_value' => 'lecture',));
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => 'Assignments:', 'meta_key' => 'navigation', 'meta_value' => 'assignment',)); 
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => 'Exercises:', 'meta_key' => 'navigation', 'meta_value' => 'exercise',));
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => 'Teams:', 'meta_key' => 'navigation', 'meta_value' => 'team',));
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => 'Students:', 'meta_key' => 'navigation', 'meta_value' => 'student',));
			
		} else { // if the page does not have a parent...
		
			echo '<li class="pagenav">Class';
			echo '<ul>';
			
			if (is_page($post->ID)) { // if is the current parent page
				
				echo '<li class="current-page-item"><a href="'.get_permalink($post->post_parent).'">Syllabus</a></li>'; // add link to syllabus with class of current page item
				
			} else { // not current parent page
				
				echo '<li><a href="'.get_permalink($post->post_parent).'">Syllabus</a></li>';// add link to syllabus with no class
				
			}
			
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => '', 'meta_key' => 'navigation', 'meta_value' => 'class',));
			echo '</ul>';
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => 'Lectures:', 'meta_key' => 'navigation', 'meta_value' => 'lecture',));
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => 'Assignments:', 'meta_key' => 'navigation', 'meta_value' => 'assignment',));
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => 'Exercises:', 'meta_key' => 'navigation', 'meta_value' => 'exercise',));
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => 'Teams:', 'meta_key' => 'navigation', 'meta_value' => 'team',));
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => 'Students:', 'meta_key' => 'navigation', 'meta_value' => 'student',));
			
		}
		
		echo '</li>';
		echo '</ul>';
	 
	}
	
	wp_reset_query(); // Don't forget this fucking thing or shit will blow the fuck up, mother fucker.

	?>
    </ul>
</div>
<!-- End Navigation -->

<!-- Begin Middle -->
<div id="middle">

<!-- Begin Sidebar -->
<?php get_sidebar(); ?>
<!-- End Sidebar -->
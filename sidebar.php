<div id="sidebar">

	<!-- Begin New Sub-Navigation -->
	<?php 
		
	$main_page = get_post_meta($post->ID, 'navigation', true) == 'main';
	$child_of_main_page = get_post_meta($post->post_parent, 'navigation', true) == 'main';

	if ($main_page || $child_of_main_page) {
			
		echo '<div class="sub-nav">';
		echo '<ul class="sub-nav-items">';
			
		if ($post->post_parent) { // if the page has a parent...
							
			echo '<li class="pagenav" >'.get_the_title($post->post_parent).' » Class'; // list "Class" sub-pages
			echo '<ul>';
			echo '<li><a href="'.get_permalink($post->post_parent).'">Syllabus</a></li>'; // stick in the link to syllabus with no class
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => '', 'meta_key' => 'navigation', 'meta_value' => 'class',)); 
			echo '</ul>';
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => get_the_title($post->post_parent).' » Lectures:', 'meta_key' => 'navigation', 'meta_value' => 'lecture',)); // list "Lecture" sub-pages
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => get_the_title($post->post_parent).' » Assignments:', 'meta_key' => 'navigation', 'meta_value' => 'assignment',)); // list "Assignmnets" sub-pages
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => get_the_title($post->post_parent).' » Exercises:', 'meta_key' => 'navigation', 'meta_value' => 'exercise',)); // list "Exercises" sub-pages
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => get_the_title($post->post_parent).' » Teams:', 'meta_key' => 'navigation', 'meta_value' => 'team',)); // list "Teams" sub-pages
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => get_the_title($post->post_parent).' » Students:', 'meta_key' => 'navigation', 'meta_value' => 'student',)); // list "Students" sub-pages
				
		} else { // if the page does not have a parent...
						
			echo '<li class="pagenav">'.get_the_title($post->ID).' » Class';
			echo '<ul>';
			
			if (is_page($post->ID)) { // stick in the link to syllabus with class
				
				echo '<li class="current-page-item"><a href="'.get_permalink($post->post_parent).'">Syllabus</a></li>';
				
			} else {
				
				echo '<li><a href="'.get_permalink($post->post_parent).'">Syllabus</a></li>';
				
			}
			
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => '', 'meta_key' => 'navigation', 'meta_value' => 'class',));
			echo '</ul>';
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => get_the_title($post->ID).' » Lectures:', 'meta_key' => 'navigation', 'meta_value' => 'lecture',));
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => get_the_title($post->ID).' » Assignments:', 'meta_key' => 'navigation', 'meta_value' => 'assignment',));
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => get_the_title($post->ID).' » Exercises:', 'meta_key' => 'navigation', 'meta_value' => 'exercise',));
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => get_the_title($post->ID).' » Teams:', 'meta_key' => 'navigation', 'meta_value' => 'team',));
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => get_the_title($post->ID).' » Students:', 'meta_key' => 'navigation', 'meta_value' => 'student',));
			
			}
			
		echo '</ul>';
		echo '</div>';
			
	}
	?>	
	<!-- End New Sub-Navigation --> 
			
   	<!-- Begin Widgets -->
	<div class="widgets">
    <?php dynamic_sidebar(1); // subscribe & calendar  ?>
    <?php if (!( is_page() || is_search() || is_404() )) : ?>
    <?php dynamic_sidebar(2); // categories & links  ?>
    <?php endif; ?>
    <?php dynamic_sidebar(3); // video  ?>
	</div>
    <!-- End Wigets -->
    
    <!-- Begin Affiliates -->
    <div class="affiliates">
    	<h2>Affiliates</h2>
    	<p>My web hosting ain't gonna pay itself:</p>
        <a href="http://www.dreamhost.com/r.cgi?363638" target="_blank" title="Use promo code PREMIUMDW for $25 off!"><img src="<?php bloginfo('template_directory'); ?>/images/ad-dreamhost.png" alt="DreamHost" /></a>
        <iframe src="http://rcm-na.amazon-adsystem.com/e/cm?t=prdewosc-20&o=1&p=21&l=ur1&category=books&banner=1PBGJ6MX362TVT8X9P82&f=ifr&linkID=RORFJX5HC7ACXZ3V" width="140" height="140" scrolling="no" border="0" marginwidth="0" frameborder="0"></iframe>
        <a href="http://www.jdoqocy.com/click-5032313-6944833" target="_blank"><img src="http://www.ftjcfx.com/image-5032313-6944833"  alt="Students and teachers save up to 80% on software!" border="0"/></a>
        <a href="http://www.istockphoto.com/msinkula" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/ad-istock.png" alt="istockphoto.com" /></a>
    </div>
    <!-- End Affiliates -->
    
</div>

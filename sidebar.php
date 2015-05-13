<div id="sidebar">
	
    <div id="new-menu">
    <ul id="new-menu-items">
	<?php 
	
	if (is_page()) {
			
		if ($post->post_parent) { // if the page has a parent...
							
			echo '<li class="pagenav" >Class';
			echo '<ul>';
			echo '<li><a href="'.get_permalink($post->post_parent).'">Syllabus</a></li>'; // stick in the link to syllabus with no class
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
			
			if (is_page($post->ID)) { // stick in the link to syllabus with class
				
				echo '<li class="current-page-item"><a href="'.get_permalink($post->post_parent).'">Syllabus</a></li>';
				
			} else {
				
				echo '<li><a href="'.get_permalink($post->post_parent).'">Syllabus</a></li>';
				
			}
			
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => '', 'meta_key' => 'navigation', 'meta_value' => 'class',));
			echo '</ul>';
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => 'Lectures:', 'meta_key' => 'navigation', 'meta_value' => 'lecture',));
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => 'Assignments:', 'meta_key' => 'navigation', 'meta_value' => 'assignment',));
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => 'Exercises:', 'meta_key' => 'navigation', 'meta_value' => 'exercise',));
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => 'Teams:', 'meta_key' => 'navigation', 'meta_value' => 'team',));
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => 'Students:', 'meta_key' => 'navigation', 'meta_value' => 'student',));
			
			}
	}
	?>	
	</ul>
	</div>
	<!-- End New menu --> 
			
    <!-- Begin Wigets -->
	<?php if ( (!is_page()) ) { dynamic_sidebar(1); dynamic_sidebar(2); } ?>
    <!-- End Wigets -->

    <!-- Begin Affiliates -->
    <div class="affiliates">
    <img src="<?php bloginfo('template_directory'); ?>/images/img-sidebar-separator.png" alt="Your Mom" />
        <a href="http://www.dreamhost.com/r.cgi?363638" target="_blank" title="Use promo code PREMIUMDW for $25 off!"><img src="<?php bloginfo('template_directory'); ?>/images/ad-dreamhost.png" alt="DreamHost" /></a>
        <iframe src="http://rcm.amazon.com/e/cm?t=prdewosc-20&amp;o=1&amp;p=20&amp;l=ur1&amp;category=books&amp;banner=0YM0V4GHQ57EK3WYRZR2&amp;f=ifr" width="120" height="90" scrolling="No" border="0" marginwidth="0" ></iframe>
        <a href="http://www.istockphoto.com/msinkula" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/ad-istock.png" alt="istockphoto.com" /></a>
        <a href="http://www.jdoqocy.com/click-5032313-6944833" target="_blank">
<img src="http://www.ftjcfx.com/image-5032313-6944833" width="120" height="120" alt="Students and teachers save up to 80% on software!" border="0"/></a>
<a href="http://www.dpbolvw.net/click-5032313-1508142" target="_blank">
<img src="http://www.awltovhc.com/image-5032313-1508142" width="120" height="120" alt="Students software at 85% off!" border="0"/></a>
        <a href="http://www.anrdoezrs.net/click-5032313-5764927" target="_blank"><img src="http://www.lduhtrp.net/image-5032313-5764927" alt="Fonts.com" /></a>
        <a href="http://fb568j64ydydgk2yvaaf2wfxdh.hop.clickbank.net/" target="ejejcsingle"><img src="<?php bloginfo('template_directory'); ?>/images/ad-DIW.png" width="120" height="120" alt="Digging Into WordPress" /></a>
        <a href="http://db.tt/sZ0zbDyd" title="Get Dropbox!" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/ad-dropbox.jpg" width="120" height="120" alt="Get Dropbox!" /></a>
        <img src="<?php bloginfo('template_directory'); ?>/images/img-sidebar-separator.png" alt="Your Mom" />
    </div>
    <!-- End Affiliates -->
    
</div>

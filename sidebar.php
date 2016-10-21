<div id="sidebar">

	<!-- Begin New Sub-Navigation -->
	<?php if (!(is_search())) { get_my_sub_menu(); } ?>	
	<!-- End New Sub-Navigation --> 
			
   	<!-- Begin Widgets -->
	<div id="dynamic-sidebar" class="widgets">
    <?php if (!( is_page() || is_search() || is_404() )) : ?>
    <?php dynamic_sidebar(1); // categories  ?>
    <?php endif; ?>
    <?php dynamic_sidebar(2); // other  ?>
   	</div>
    <!-- End Wigets -->
    
    <!-- Begin Social Icons -->
    <div id="social-icons" class="widget">
    	<h2>Social</h2>
        <ul id="social-icons-items">
        <li class="social-icon-item"><a href="https://github.com/msinkula" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-github.svg" alt="My Github Repositories"></a></li>
        <li class="social-icon-item"><a href="https://www.facebook.com/msinkula" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-facebook.svg" alt="My Facebook Profile"></a></li>
        <li class="social-icon-item"><a href="https://www.youtube.com/channel/UCJkdeoIJ9lbsDOW0Ctiqsyw/"  target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-youtube.svg" alt="My YouTube Channel"></a></li>
        <li class="social-icon-item"><a href="https://www.flickr.com/photos/132730337@N04/"  target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-flickr.svg" alt="My Flickr Feed"></a></li>
        </ul>
    </div>
    <!-- End Social Icons -->
    
    <!-- Begin Group Badges -->
    <div id="groups" class="widget">
    	<h2>Groups</h2>
        <div id="groups-items">
    	<a href="https://www.facebook.com/groups/776093299153402/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icontexto-user-web20-facebook.png" alt="Join Our Facebook Group"/></a>
        <a href="https://www.linkedin.com/grp/home?gid=2642569" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icontexto-user-web20-linkedin.png" alt="Join Our LinkedIn Group"/></a>
        </div>
    </div>
    <!-- End Group Badges -->
    
    <!-- Begin Affiliates -->
    <div id="affiliates">
    	<h2>Affiliates</h2>
        <div id="affiliates-items">
        <a href="http://www.dreamhost.com/r.cgi?363638" target="_blank" title="Use promo code PREMIUMDW for $25 off!"><img src="<?php bloginfo('template_directory'); ?>/images/ad-dreamhost.png" alt="DreamHost" /></a>
        <a href="https://www.amazon.com/?&tag=predeswormiks-20&camp=0&creative=0&linkCode=ez&adid=1DRTKSR4Z3PKEN66XD41&" target="_blank" title=""><img src="<?php bloginfo('template_directory'); ?>/images/ad-amazon.jpg" alt="Amazon" /></a>
        <a href="<?php bloginfo('template_directory'); ?>/images/ad-acasupstore.png" target="_blank"><img src="http://www.ftjcfx.com/image-5032313-6944833"  alt="Students and teachers save up to 80% on software!" border="0"/></a>
        <a href="http://www.istockphoto.com/msinkula" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/ad-istock.png" alt="istockphoto.com" /></a>
        </div>
    </div>
    <!-- End Affiliates -->
    
</div>

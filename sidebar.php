<div id="sidebar">

	<!-- Begin New Sub-Navigation -->
	<?php get_my_sub_menu(); ?>	
	<!-- End New Sub-Navigation --> 
			
   	<!-- Begin Widgets -->
	<div id="dynamic-sidebar" class="widgets">
    <?php dynamic_sidebar(1); // subscribe & calendar  ?>
    <?php if (!( is_page() || is_search() || is_404() )) : ?>
    <?php dynamic_sidebar(2); // categories & links  ?>
    <?php endif; ?>
    <?php dynamic_sidebar(3); // video  ?>
	</div>
    <!-- End Wigets -->
    
    <!-- Begin Social Icons -->
    <div id="social-icons" class="widgets">
    	<h2>Social</h2>
        <ul id="social-icons-items">
        <li><a href="https://github.com/msinkula" class="flaticon-github12" target="_blank">GitHub</a></li>
        <li><a href="https://www.facebook.com/premiumdw" class="flaticon-facebook29" target="_blank">Facebook</a></li>
        <li><a href="https://twitter.com/premiumdw" class="flaticon-twitter2" target="_blank">Twitter</a></li>
        <li><a href="https://plus.google.com/+PremiumDesignWorksSeattle/" class="flaticon-google2" target="_blank" rel="me">Google+</a></li>
        <li><a href="https://www.youtube.com/channel/UCJkdeoIJ9lbsDOW0Ctiqsyw/" class="flaticon-video193" target="_blank">YouTube</a></li>
        <li><a href="https://www.flickr.com/photos/132730337@N04/" class="flaticon-flickr16" target="_blank">Flickr</a></li>
        </ul>
    </div>
    <!-- End Social Icons -->
    
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

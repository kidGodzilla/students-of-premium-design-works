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
        <a href="http://www.amazon.com/b/ref=as_sl_pc_tf_lc?node=283155&tag=prdewosc-20&camp=15329&creative=331809&linkCode=ur1&adid=1FKJFMMSVG44Q4KXSE6W&&ref-refURL=http%3A%2F%2Fwww.sccc.premiumdw.com%2F" target="_blank" title=""><img src="<?php bloginfo('template_directory'); ?>/images/ad-amazon.jpg" alt="Amazon" /></a>
        <a href="http://www.jdoqocy.com/click-5032313-6944833" target="_blank"><img src="http://www.ftjcfx.com/image-5032313-6944833"  alt="Students and teachers save up to 80% on software!" border="0"/></a>
        <a href="http://www.istockphoto.com/msinkula" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/ad-istock.png" alt="istockphoto.com" /></a>
    </div>
    <!-- End Affiliates -->
    
</div>

<!-- Begin Sidebar -->
<?php get_sidebar(); ?>
<!-- End Sidebar -->

</div>
<!-- END MIDDLE -->

<!-- START FOOTER -->
<div id="footer">
    <p><?php print ("&copy; 1997 - " . date ('Y') . " "); ?><a href="http://www.premiumdw.com">Premium Design Works</a>. All rights reserved. <span><?php wp_loginout(); ?>...</span></p>
</div>
<!-- END FOOTER -->

<!-- START ANALYTICS -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57003718-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- END ANALYTICS -->

<!-- BEGIN WP FOOTER -->
<?php wp_footer(); ?>
<!-- END WP FOOTER -->

</body>
</html>
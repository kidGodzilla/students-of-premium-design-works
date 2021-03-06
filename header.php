<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<!--   
Theme Name: Students of Premium Design Works
Description: This is a theme your mom and sister would finally respond to.
Version: 3
Author: Premium Design Works
Author URI: http://www.premiumdw.com/
-->

<!-- Begin Title Tag -->
<title><?php get_my_title_tag(); ?></title>
<!-- End Title Tag -->

<!-- Begin Meta -->
<meta name="description" content="<?php get_my_meta_description(); ?>">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
<!-- End Meta -->

<!-- Begin Open Graph Meta -->
<meta property="og:title" content="<?php get_my_title_tag(); ?>">
<meta property="og:description" content="<?php get_my_meta_description(); ?>">
<meta property="og:url" content="<?php the_permalink(); ?>">
<meta property="og:image" content="<?php get_opengraph_image(); ?>">
<meta property="og:type" content="">
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<!-- End Open Graph Meta -->

<!-- Begin Links -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/calendar.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css" media="all" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/ico-flame.ico" />
<!-- End Links -->
    
<!-- Start Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/specification.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/nav.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/flexslider.js"></script>
<!-- End Scripts -->

<!-- Begin Flex Slider -->
<script type="text/javascript">
    
$(window).load(function() { // when the window loads...
  $('.flexslider').flexslider({ // call flexslider
	animation: "fade",
	slideshow: false,
	smoothHeight: true,
  });
}); // end window load
	
</script>
<!-- End Flex Slider -->

<!-- Begin WP Head --> 
<?php wp_head(); ?>  
<!-- End WP Head -->
    
<!-- Demo in Class -->
    
</head>

<body <?php body_class(); ?>>

<!-- Begin Grid -->
<div id="grid">

	<!-- Begin Home Link -->
    <div id="homelink"><a href="http://www.premiumdw.com/" target="_blank" title="Premium Design Works Home"><img src="<?php bloginfo('template_directory'); ?>/images/flame.svg" height="40" width="40" alt="Premium Design Works Home" /></a></div>
    <!-- End Home Link -->
    
    <!-- Begin Specification Line -->    
	<div id="line">
	<span id="specification">980px</span>
	</div>
    <!-- End Specification Line -->
     
    <!-- Begin Columns -->
	<ul id="columns">
    <?php for ( $i = 1; $i <= 12; $i++) { echo '<li>' . $i . '</li>'; } ?>       
    </ul>
    <!-- End Columns --> 
   
</div>
<!-- End Grid -->

<!-- Begin Header -->
<div id="header">

	<!-- Begin Utility -->
    <div id="utility">
        <ul>
        <?php wp_list_pages(array('title_li' => '', 'meta_key' => 'navigation', 'meta_value' => 'utility')); ?>
        </ul>
    </div>
	<!-- End Utility -->

	<!-- Begin Logo -->
    <h1 id="logo"><a href="<?php echo get_option('home'); ?>" title="<?php bloginfo('description'); ?>">sccc.premiumdw.com</a></h1>
    <!-- End Logo -->
        
    <!-- Begin Search -->
    <?php get_search_form(); ?>
    <!-- End Search -->

    <!-- Begin Today's Date -->
    <div id="date">
    	<p><?php echo date_i18n('l - F d, Y'); ?></p>
    </div>
    <!-- End Today's Date -->
    
</div>
<!-- END HEADER -->

<!-- Begin Navigation -->
<?php get_my_main_menu(); ?>
<!-- End Navigation -->

<!-- Begin Middle -->
<div id="middle">

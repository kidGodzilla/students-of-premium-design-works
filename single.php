<?php get_header(); ?>

<!-- Begin Content -->
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <!-- Begin Post -->
	<div id="post-<?php the_ID(); ?>" class="post-box">
    <h2 class="post-title"><?php the_title(); ?></h2>
    <p class="post-meta"><small>Posted on <?php the_time('F jS, Y'); ?> in <?php the_category(', '); ?></small></p>
    <?php the_content(''); ?>
    </div>
    <!-- End Post -->
     
    <?php endwhile; endif; ?>   			
    <?php comments_template(); ?>
	
</div>
<!-- End Content -->

<?php get_footer(); ?>
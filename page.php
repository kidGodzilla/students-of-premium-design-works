<?php get_header(); ?>

<!-- Begin Content -->
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <!-- Begin Post -->
	<div id="post-<?php the_ID(); ?>" class="post-box">
    <h2 class="post-title"><?php if (function_exists('bcn_display')) { bcn_display(); } ?> <?php $key="root"; echo get_post_meta($post->ID, $key, true); ?></h2>
	<?php the_content(''); ?>
	</div>
    <!-- End Post -->
    
	<?php endwhile; endif; ?>  
    <?php comments_template(); ?>
</div>
<!-- End Content -->

<?php get_footer(); ?>
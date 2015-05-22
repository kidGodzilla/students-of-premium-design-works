<!-- Begin Header -->
<?php get_header(); ?>
<!-- End Header -->

<!-- Begin Content -->
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>">
    <h2 class="breadcrumb"><?php if (function_exists('bcn_display')) { bcn_display(); } ?> <?php $key="root"; echo get_post_meta($post->ID, $key, true); ?></h2>
	<?php the_content(''); ?>
	</div>
	<?php endwhile; endif; ?>  
    <?php if(!(get_post_meta($post->ID, 'navigation', true) == 'utility')) { comments_template(); } ?>
</div>
<!-- End Content -->

<!-- Begin Footer -->
<?php get_footer(); ?>
<!-- End Footer -->
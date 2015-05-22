<!-- Begin Header -->
<?php get_header(); ?>
<!-- End Header -->

<!-- Begin Content -->
<div id="content">
<?php while (have_posts()) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <p class="postmetadata"><small>Posted on <?php the_time('F jS, Y'); ?> in <?php the_category(', '); ?></small></p>
    <?php the_content(''); ?>    			
    <?php comments_template(); ?>
<?php endwhile; ?>
</div>
<!-- End Content -->

<!-- Begin Footer -->
<?php get_footer(); ?>
<!-- End Footer -->
<?php get_header(); ?>
                
<!-- START CONTENT -->
<?php if (have_posts()) : ?>
<div id="content">
	<!--<h2><?php /*bloginfo('description');*/ ?></h2>--> 
    <?php get_dedication(); ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="post-box">
    <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?>&nbsp;&raquo;</a></h3>
    <p class="postmetadata"><small>Posted on <?php the_time('F jS, Y'); ?> in <?php the_category(', '); ?></small></p>
    <?php the_excerpt(); ?>
    <p><small class="full-post"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">full post &raquo;</a></small></p>
    </div>
    <?php endwhile; ?>
    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>  
</div>
<?php endif; ?>
<!-- END CONTENT -->

<?php get_footer(); ?>
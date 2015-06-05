<?php get_header(); ?>
                
<!-- START CONTENT -->
<?php if (have_posts()) : ?>
<div id="content">
	<div id="dedication">
    <a href="http://www.mikesinkula.com/" target="_blank"><?php echo get_avatar(get_the_author_meta('ID' , 6), 60); ?></a>
    <p><?php echo get_the_author_meta('description' , 6); ?></p>
    </div>
    <?php while (have_posts()) : the_post(); ?>
    <div class="post-box">
    <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?>&nbsp;&raquo;</a></h3>
    <p class="postmetadata"><small>Posted on <?php the_time('F jS, Y'); ?> in <?php the_category(', '); ?></small></p>
    <?php the_excerpt(); ?>
    <p><?php echo strip_tags(get_the_excerpt()); ?> <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Read More &raquo;</a></p>
    </div>
    <?php endwhile; ?>
    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>  
</div>
<?php endif; ?>
<!-- END CONTENT -->

<?php get_footer(); ?>
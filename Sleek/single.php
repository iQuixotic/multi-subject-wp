<?php get_header(); ?>
    <div class="container content">
        <div class="block main">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                <?php get_template_part('content', get_post_format()); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <?php echo apautop('Sorry, No posts were found.'); ?>
            <?php endif; ?>     
            
            <?php comments_template(); ?>
        </div>
        <div class="side">
           <?php if(is_active_sidebar('sidebar')) : ?>
                <?php dynamic_sidebar('sidebar'); ?>
           <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>
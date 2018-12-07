<?php get_header(); ?>
    <div class="container content">
        <div class="block main">
            <h1 class="page-header">
                <?php
                    if(is_category()) {
                        single_cat_title();
                    } else if(is_author()) {
                        the_post();
                        echo 'Archives By Author: ' .get_the_author();
                        rewind_posts();
                    } else if(is_tag()) {
                        single_tag_title();
                    } else if(is_day()) {
                        echo 'Archives By Day: ' .get_the_date();
                    } else if(is_month()) {
                        echo 'Archives By Month: ' .get_the_date('F Y');
                    } else if(is_day()) {
                        echo 'Archives By Day: ' .get_the_date('Y');
                    } else {
                        echo 'Archives';
                    }
                ?>
            </h1>
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part('content', get_post_format()); ?>              
                <?php endwhile; ?>
            <?php else : ?>
                <?php echo apautop('Sorry, No posts were found.'); ?>
            <?php endif; ?>            
        </div>
        <div class="side">
            <div class="block">
                <h3>Sidebar Head</h3>
                <p> I love donut cake lemon drops bear claw jelly-o pudding. Carrot cake sweet sesame snaps candy lollipop jelly beans croissant sesame snaps gummies. Tootsie roll I love jelly-o tiramisu.</p>
                <a href="#" class="button">Button</a>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
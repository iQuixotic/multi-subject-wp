
<!-- 
    Template Name: Company Layout
 -->
<?php get_header(); ?>
    <div class="container content">
        <div class="block main">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <article class='page'>
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                        <p class="phone">Call us: 1-800-439-4567</p>
                        <?php the_content(); ?>

                    </article>
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
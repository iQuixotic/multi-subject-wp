<?php get_header(); ?>
    <div class="container content">
        <div class="block main">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <article class='page'>
                        <?php if(page_is_parent() || $post->post_parent >0) : ?>
                        <nav class="nav sub-nav">
                            <ul>
                                <span class="parent-link">
                                    <a href="<?php echo get_the_permalink(get_top_parent); ?>">
                                    <?php echo get_the_title(get_top_parent()); ?>
                                </a>
                                </span>
                                <?php 
                                $args = array(
                                    'child_of' => get_top_parent(),
                                    'title_li' => ''
                                );
                                ?>
                                <?php wp_list_pages($args); ?>
                            </ul>
                        </nav>
                            <?php endif; ?>
                        
                        <h2>
                            <?php the_title(); ?>
                        </h2>
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
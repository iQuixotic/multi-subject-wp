<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>" />
    <!-- <script src="main.js"></script> -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>    
    <header>
        <div class="container">
            <h1>
                <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
                <small><?php bloginfo('description'); ?></small>
            </h1>
            <div class="header-right">
                <form method='get' action="<?php esc_url(home_url('/')); ?>">
                    <input name='s' type="text" placeholder="Search...">
                </form>
            </div>
        </div>
    </header>
    
    <nav class="nav main-nav">
        <div class="container">
           <?php 
                $args=array(
                    'theme_location' => 'primary'
                );
            ?>
            <?php wp_nav_menu($args); ?>
        </div>
    </nav>

    <div class="container content">
        <div class="block main">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <article class="post">
                        <h2><?php the_title(); ?></h2>
                        <p class="meta">
                            posted at <?php the_time('F j, Y g:i a'); ?> 
                            by <a href="<?php echo get_author_posts_url(
                                get_the_author_meta('ID')); ?>">
                            <?php the_author(); ?></a> |
                            Posted in
                            <?php
                                $categories = get_the_category();
                                $separator = ", ";
                                $output = '';

                                if($categories) {
                                    foreach ($categories as $category) {
                                        $output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>'.$separator;
                                    }
                                }

                                echo trim($output, $separator);
                            ?>
                        </p>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="button">Read More...</a>
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

    <footer class='main-footer'>
        <div class="container">
            <div class="footer-left">
                <p>&copy; 2018 iQuixotic</p>
            </div>
            <div class="footer-right">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">About</a></li>
                    <li><a href="#">Services</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
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

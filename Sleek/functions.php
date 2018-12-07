<?php
    // Theme Support
    function QUIX_theme_support() {
        // Featured Image Support
        add_theme_support('post-thumbnails');


        // Nav Menus
        register_nav_menus(array(
            'primary' => __('Primary Menu'),
            'footer' => __('Footer Menu')
        ));

        // Post Theme Support
        add_theme_support('post-formats', array('aside', 'gallery', 'link'));
    }

    add_action('after_setup_theme', 'quix_theme_support');

    // Excerpt Length
    function QUIX_excerpt_length() {
        return 25;
    }

    add_filter('excerpt_length', 'QUIX_excerpt_length');
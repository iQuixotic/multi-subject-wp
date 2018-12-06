<?php
    // Theme Support
    function QUIX_theme_support() {
        // Nav Menus
        register_nav_menus(array(
            'primary' => __('Primary Menu'),
            'footer' => __('Footer Menu')
        ));
    }

    add_action('after_setup_theme', 'quix_theme_support');

    // Excerpt Length
    function QUIX_excerpt_length() {
        return 25;
    }

    add_filter('excerpt_length', 'QUIX_excerpt_length');
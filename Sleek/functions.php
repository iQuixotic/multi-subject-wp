<?php
    // Theme Support
    function quix_theme_support() {
        // Nav Menus
        register_nav_menus(array(
            'primary' => __('Primary Menu'),
            'footer' => __('Footer Menu')
        ));
    }

    add_action('after_setup_theme', 'quix_theme_support');
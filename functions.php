<?php
    // Including stylesheet and script files
    function load_scripts(){
        wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.1.3', true);
        wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all');
    }
    add_action('wp_enqueue_scripts', 'load_scripts');

    // Main configuration function
    function berserk_config(){
        // Registering our menus
        register_nav_menus(
            array(
                'my_main_menu' => 'Main Menu',
                'footer_menu' => 'Footer Menu'
            )
        );

        $args = array(
            'height' => 225,
            'width' => 1920
        );
        add_theme_support('custom-header', $args);

    }
    add_action('after_setup_theme', 'berserk_config', 0);
?>
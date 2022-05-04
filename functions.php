<?php
    // Including stylesheet and script files
    function load_scripts(){
        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.1.3', true);
        wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all');
        wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
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
        add_theme_support('post-thumbnails');
        add_theme_support('post-formats', array('video', 'image', 'audio'));

    }
    add_action('after_setup_theme', 'berserk_config', 0);

    // Registering our sidebars
    add_action('widgets_init', 'berserk_sidebars');
    function berserk_sidebars(){
        register_sidebar(
            array(
                'name' => 'Home Page Sidebar',
                'id' => 'sidebar-1',
                'description' => 'This is the Home Page Sidebar. You can add your widgets here.',
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>'
            )
        );
        register_sidebar(
            array(
                'name' => 'Blog Sidebar',
                'id' => 'sidebar-2',
                'description' => 'This is the Blog Page Sidebar. You can add your widgets here.',
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>'
            )
        );
        register_sidebar(
            array(
                'name' => 'Service 1',
                'id' => 'services-1',
                'description' => 'First Service Area.',
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>'
            )
        );
        register_sidebar(
            array(
                'name' => 'Service 2',
                'id' => 'services-2',
                'description' => 'Second Service Area.',
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>'
            )
        );
        register_sidebar(
            array(
                'name' => 'Service 3',
                'id' => 'services-3',
                'description' => 'Third Service Area.',
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>'
            )
        );
    }
?>
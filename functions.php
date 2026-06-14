<?php
// Basic theme setup
function healthpress_setup(){

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('align-wide');

    register_nav_menus([
        'primary'=>__('Primary Menu','healthpress-lite'),
        'footer'=>__('Footer Menu','healthpress-lite')
    ]);

}

add_action('after_setup_theme','healthpress_setup');


// Enqueue assets
function healthpress_assets(){

    wp_enqueue_style(
        'healthpress-style',
        get_template_directory_uri() . '/assets/css/output.css',
        [],
        time()
    );

    wp_enqueue_script(
        'healthpress-js',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        time(),
        true
    );

}

add_action('wp_enqueue_scripts','healthpress_assets');



?>
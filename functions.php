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


function healthpress_customize_register($wp_customize)
{
    $wp_customize->add_section('footer_section', [
        'title'    => __('Footer Settings', 'healthpress-lite'),
        'priority' => 120,
    ]);

    // Footer About Text
    $wp_customize->add_setting('footer_about_text', [
        'default' => 'Providing quality healthcare solutions with trusted doctors.',
    ]);

    $wp_customize->add_control('footer_about_text', [
        'label'   => __('Footer About Text', 'healthpress-lite'),
        'section' => 'footer_section',
        'type'    => 'textarea',
    ]);

    // Phone
    $wp_customize->add_setting('footer_phone', [
        'default' => '+91 98765 43210',
    ]);

    $wp_customize->add_control('footer_phone', [
        'label'   => __('Phone Number', 'healthpress-lite'),
        'section' => 'footer_section',
        'type'    => 'text',
    ]);

    // Email
    $wp_customize->add_setting('footer_email', [
        'default' => 'info@healthpress.com',
    ]);

    $wp_customize->add_control('footer_email', [
        'label'   => __('Email', 'healthpress-lite'),
        'section' => 'footer_section',
        'type'    => 'email',
    ]);

    // Address
    $wp_customize->add_setting('footer_address', [
        'default' => 'Bengaluru, India',
    ]);

    $wp_customize->add_control('footer_address', [
        'label'   => __('Address', 'healthpress-lite'),
        'section' => 'footer_section',
        'type'    => 'text',
    ]);
}
add_action('customize_register', 'healthpress_customize_register');


?>
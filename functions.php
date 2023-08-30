<?php 

// load stylesheets
function load_css() {

    wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.3.1', 'all');

    wp_enqueue_style('bootstrap-css');

    // custum css
    wp_register_style('custom-css', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');

    wp_enqueue_style('custom-css');
}

add_action('wp_enqueue_scripts', 'load_css');

// load scripts
function load_js() {

    // include jquery
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', '4.3.1', true);

    wp_enqueue_script('bootstrap-js');
}

add_action('wp_enqueue_scripts', 'load_js');

// Theme options activate it
add_theme_support('menus');

//Menu Location
register_nav_menus(

    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )
);
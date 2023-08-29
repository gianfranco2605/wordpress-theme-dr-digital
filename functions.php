<?php 

function load_css() {

    wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.3.1', 'all');

    wp_enqueue_style('bootstrap-css');
}

add_action('wp_enqueue_scripts', 'load_css');


function load_js() {

    // include jquery
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', '4.3.1', true);

    wp_enqueue_script('bootstrap-js');
}

add_action('wp_enqueue_scripts', 'load_js');
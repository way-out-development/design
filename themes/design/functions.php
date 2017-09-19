<?php

function add_theme_scripts(){
    wp_enqueue_style('styles', get_stylesheet_uri());
    wp_enqueue_script('main', get_template_directory_uri() . '/main.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');
<?php

// правильный способ подключить стили и скрипты
add_action('wp_enqueue_scripts', 'theme_name_styles');

function theme_name_styles()
{
    wp_enqueue_style('animate-style', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('slick-theme-style', get_template_directory_uri() . '/assets/css/slick-theme.css');
    wp_enqueue_style('slick-style', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('slicknav-style', get_template_directory_uri() . '/assets/css/slicknav.min.css');
    wp_enqueue_style('main-style', get_stylesheet_uri());
}

function wp_enqueue_scripts()
{
    
}

function wp_enqueue_scripts()

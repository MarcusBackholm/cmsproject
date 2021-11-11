<?php
function addStyleSheets(): void
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

function load_css()
{
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', [], 1, 'all');
    wp_enqueue_style('main');
}

function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

add_action('wp_enqueue_scripts', 'load_css', 'after_setup_theme', 'register_navwalker', 'addStyleSheets', 'widgets_init');


add_theme_support('menus');

register_nav_menus(

    array(

        'main-menu' => 'primary',

    )

);

add_theme_support('post-thumbnails');
add_theme_support('custom-logo');
add_theme_support('title-tag');
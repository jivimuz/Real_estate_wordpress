<?php
/**
 * Estatein theme setup.
 */

function estatein_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));

    register_nav_menus(
        array(
            'primary' => __('Primary navigation', 'estatein'),
        )
    );
}
add_action('after_setup_theme', 'estatein_setup');

function estatein_page_url($slug)
{
    $page = get_page_by_path($slug, OBJECT, 'page');

    return $page ? get_permalink($page) : home_url('/' . trim($slug, '/') . '/');
}

function estatein_is_current_page($slug)
{
    if ('home' === $slug) {
        return is_front_page() || is_home();
    }

    return is_page($slug);
}

function estatein_enqueue_assets()
{
    wp_enqueue_style('estatein-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_script('estatein-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'estatein_enqueue_assets');

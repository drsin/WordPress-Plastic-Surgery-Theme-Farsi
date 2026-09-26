<?php
if (!defined('ABSPATH')) {
    exit;
}

function audubon_enqueue_assets() {
    $theme_uri = get_template_directory_uri();
    $theme_dir = get_template_directory();
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('audubon-google-fonts', 'https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800;900&display=swap', array(), null);
    wp_enqueue_style('audubon-style', get_stylesheet_uri(), array('audubon-google-fonts'), $version);
    wp_enqueue_style('audubon-theme', $theme_uri . '/assets/css/theme.css', array('audubon-style'), file_exists($theme_dir . '/assets/css/theme.css') ? filemtime($theme_dir . '/assets/css/theme.css') : $version);
    wp_enqueue_script('audubon-theme-js', $theme_uri . '/assets/js/theme.js', array(), file_exists($theme_dir . '/assets/js/theme.js') ? filemtime($theme_dir . '/assets/js/theme.js') : $version, true);
}
add_action('wp_enqueue_scripts', 'audubon_enqueue_assets');

function audubon_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    register_nav_menus(array(
        'primary' => __('منوی اصلی', 'audubon-facial-plastics'),
        'footer' => __('منوی فوتر', 'audubon-facial-plastics'),
    ));
}
add_action('after_setup_theme', 'audubon_theme_setup');

function audubon_body_classes_filter($classes) {
    if (is_rtl()) {
        $classes[] = 'rtl';
    }
    return $classes;
}
add_filter('body_class', 'audubon_body_classes_filter');

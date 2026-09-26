<?php
// Audubon Facial Plastics Theme
// Author: Saeid Abdi
// License: GPL v2 or later

if (!defined('ABSPATH')) {
    exit;
}

function audubon_enqueue_assets() {
    wp_enqueue_style('audubon-style', get_stylesheet_uri());
    wp_enqueue_script('audubon-js', get_template_directory_uri() . '/assets/js/theme.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'audubon_enqueue_assets');

function audubon_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    register_nav_menus(array(
        'primary' => 'Primary Menu',
    ));
}

add_action('after_setup_theme', 'audubon_setup');

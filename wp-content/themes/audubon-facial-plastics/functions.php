<?php
function audubon_enqueue_theme_assets() {
    $dir = get_template_directory(); $uri = get_template_directory_uri(); $version = wp_get_theme()->get('Version');
    wp_enqueue_style('audubon-google-fonts', 'https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800;900&display=swap', array(), null);
    wp_enqueue_style('audubon-style', get_stylesheet_uri(), array('audubon-google-fonts'), $version);
    wp_enqueue_style('audubon-theme-main', $uri . '/assets/css/theme.css', array('audubon-style'), file_exists($dir . '/assets/css/theme.css') ? filemtime($dir . '/assets/css/theme.css') : $version);
    wp_enqueue_script('audubon-theme-js', $uri . '/assets/js/theme.js', array(), file_exists($dir . '/assets/js/theme.js') ? filemtime($dir . '/assets/js/theme.js') : $version, true);
}
add_action('wp_enqueue_scripts', 'audubon_enqueue_theme_assets');
function audubon_theme_setup() {
    add_theme_support('title-tag'); add_theme_support('post-thumbnails'); add_theme_support('custom-logo'); add_theme_support('responsive-embeds'); add_theme_support('editor-styles');
    add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption','style','script'));
    register_nav_menus(array('primary' => __('منوی اصلی','audubon-facial-plastics'), 'footer' => __('منوی فوتر','audubon-facial-plastics')));
}
add_action('after_setup_theme', 'audubon_theme_setup');
function audubon_register_sidebars() { register_sidebar(array('name'=>__('سایدبار اصلی','audubon-facial-plastics'),'id'=>'sidebar-main','before_widget'=>'<div class="widget">','after_widget'=>'</div>','before_title'=>'<h3 class="widget-title">','after_title'=>'</h3>')); }
add_action('widgets_init', 'audubon_register_sidebars');
add_filter('excerpt_length', function(){ return 22; });
add_filter('excerpt_more', function(){ return '...'; });
add_filter('body_class', function($classes){ if (is_rtl()) $classes[]='rtl'; return $classes; });

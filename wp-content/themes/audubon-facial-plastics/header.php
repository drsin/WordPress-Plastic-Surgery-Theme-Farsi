<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header class="site-header">
        <div class="topbar">
            <div class="container topbar-inner">
                <div class="topbar-links">
                    <span>021-12345678</span>
                    <span>Tehran, Valisar</span>
                    <span>Sat-Thu 9-18</span>
                </div>
                <a href="#contact" class="topbar-button">Request</a>
            </div>
        </div>

        <div class="main-header">
            <div class="container nav-wrap">
                <div class="brand-wrap">
                    <?php if (has_custom_logo()) : the_custom_logo(); else : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-mark">A</a>
                    <?php endif; ?>
                </div>

                <nav class="primary-nav" aria-label="Menu">
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav-menu', 'fallback_cb' => false)); ?>
                </nav>

                <button class="mobile-nav-toggle" aria-label="Menu" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

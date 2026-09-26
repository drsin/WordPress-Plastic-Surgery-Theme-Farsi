<?php
/**
 * Main template file
 * @package Audubon_Facial_Plastics
 */
get_header();
?>
<main class="site-main">
    <?php
    if (is_front_page() && is_home()) {
        get_template_part('front-page');
    } elseif (is_front_page()) {
        get_template_part('front-page');
    } elseif (is_home()) {
        get_template_part('archive');
    } elseif (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part('content');
        }
    } else {
        get_template_part('content', 'none');
    }
    ?>
</main>
<?php get_footer(); ?>

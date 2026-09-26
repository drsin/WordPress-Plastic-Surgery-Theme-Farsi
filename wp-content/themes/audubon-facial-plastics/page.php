<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<main class="site-main">
    <section class="section">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article <?php post_class('single-post'); ?>>
                    <header class="entry-header">
                        <h1><?php the_title(); ?></h1>
                    </header>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; else : ?>
                <p>No content found.</p>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>

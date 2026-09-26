<?php
/**
 * Archive template
 */
get_header();
?>
<main class="site-main">
    <section class="section">
        <div class="container">
            <div class="section-heading">
                <h1><?php the_archive_title(); ?></h1>
                <p><?php the_archive_description(); ?></p>
            </div>
            <div class="archive-grid">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        get_template_part('content');
                    }
                }
                ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

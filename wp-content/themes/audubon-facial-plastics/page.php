<?php
get_header();
?>

<main class="site-main">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article class="content-page container section">
                <header class="entry-header">
                    <h1><?php the_title(); ?></h1>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <div class="container section">
            <h2>محتوایی پیدا نشد.</h2>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>

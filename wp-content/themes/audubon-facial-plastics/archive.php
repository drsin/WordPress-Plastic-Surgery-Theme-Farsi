<?php
get_header();
?>

<main class="site-main">
    <div class="container section archive-layout">
        <?php if (have_posts()) : ?>
            <div class="archive-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article <?php post_class('archive-card'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" class="archive-thumb">
                                <?php the_post_thumbnail('medium_large'); ?>
                            </a>
                        <?php endif; ?>
                        <div class="archive-body">
                            <span class="meta-date"><?php echo get_the_date('d F Y'); ?></span>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 22); ?></p>
                            <a class="button button-secondary" href="<?php the_permalink(); ?>">ادامه مطلب</a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <h2>هیچ محتوایی وجود ندارد.</h2>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>

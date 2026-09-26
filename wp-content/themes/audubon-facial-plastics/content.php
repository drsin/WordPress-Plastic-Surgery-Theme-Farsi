<?php
/**
 * Template for displaying content
 */
?>
<article <?php post_class('content-post'); ?>>
    <header class="entry-header">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="entry-meta">
            <span class="posted-on"><?php echo get_the_date(); ?></span>
        </div>
    </header>
    <div class="entry-content">
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="button">ادامه مطلب</a>
    </div>
</article>

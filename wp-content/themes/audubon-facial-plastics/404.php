<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<main class="site-main">
    <section class="section">
        <div class="container">
            <div class="section-heading">
                <h1>Page Not Found</h1>
                <p>The page you are looking for does not exist.</p>
            </div>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="button">Back to Home</a>
        </div>
    </section>
</main>
<?php get_footer(); ?>

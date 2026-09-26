<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="container" style="padding:80px 0; text-align:center;">
    <h1>خطای 404</h1>
    <p>صفحه‌ای که می‌خواهید پیدا نشد.</p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="button">بازگشت به صفحه اصلی</a>
</div>
<?php wp_footer(); ?>
</body>
</html>

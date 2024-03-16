<?php
/*
Template Name: サンクスページ
*/
$imgPath = getChildThemePath('/assets/img');
?>

<?php get_template_part('header'); ?>

<?php
if (is_page('contact/thanks')) {
    get_template_part('template-parts/a8/contact-thanks');
} else if (is_page('registration/thanks')) {
    get_template_part('template-parts/a8/registration-thanks');
} else if (is_page('contact/thanks-test')) {
    get_template_part('template-parts/a8/contact-thanks-test');
}
?>

<div class="tpl-thanks">
    <header class="header">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo $imgPath; ?>/logo.png" alt="MERC Education">
        </a>
    </header>

    <div class="tpl-thanks__contents">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>

        <div class="tpl-thanks__button">
            <a href="<?php echo home_url(); ?>">TOPページへ</a>
        </div>
    </div>

    <?php get_footer(); ?>
</div>
</body>

</html>
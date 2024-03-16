<?php
/*
Template Name: 汎用ページ
*/
$imgPath = getChildThemePath('/assets/img');
?>
<?php get_template_part('header'); ?>
<div class="tpl-general">
	<header class="tpl-general__header">
		<a href="<?php echo home_url(); ?>">
			<img width="185" height="45" src="<?php echo $imgPath; ?>/logo_merc.svg" alt="MERC">
		</a>
	</header>
	<div class="tpl-general__inner">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php else : ?>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>
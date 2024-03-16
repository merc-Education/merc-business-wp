<?php
/*
Template Name: 広告運用者育成講座フォーム
*/
?>

<?php get_template_part('header'); ?>
<?php get_template_part('template-parts/header'); ?>

<style>
	#header-wrapper,
	#gnav {
		display: none;
	}
</style>

<div class="p-registration">
	<h1 class="p-registration__title">
		<span>広告運用者育成講座</span>
		<span>【申込フォーム】</span>
	</h1>
	<?php
	require_once get_stylesheet_directory() . '/template-parts/paygent/common/variables/ad.php';
	require_once get_stylesheet_directory() . '/template-parts/paygent/prod/variables/ad.php';
	require_once get_stylesheet_directory() . '/template-parts/paygent/prod/form.php';
	?>

</div>

<?php get_footer(); ?>
<?php
/*
Template Name: PAYGENT申し込みページ
*/
?>
<?php get_template_part('header'); ?>
<?php get_template_part('template-parts/header'); ?>
<div class="p-registration">
	<h1 class="p-registration__title">
		<span>MERC Education講座</span>
		<span>【申込フォーム】</span>
	</h1>
	<?php
	require_once get_stylesheet_directory() . '/template-parts/paygent/common/variables/director.php';
	require_once get_stylesheet_directory() . '/template-parts/paygent/prod/variables/director.php';
	require_once get_stylesheet_directory() . '/template-parts/paygent/prod/form.php';
	?>

</div>

<?php get_footer(); ?>
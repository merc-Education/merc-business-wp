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
		<span>テスト用戦略講座</span>
		<span>【申込フォーム】</span>
	</h1>
	<p style="text-align: center;">このページに使用されているPAYGENTはテスト用なのでお支払いは発生しません。</p>
	<?php
	require_once get_stylesheet_directory() . '/template-parts/paygent/common/variables/director.php';
	require_once get_stylesheet_directory() . '/template-parts/paygent/test/variables/director.php';
	require_once get_stylesheet_directory() . '/template-parts/paygent/test/form.php';
	?>
</div>

<?php get_footer(); ?>
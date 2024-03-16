<?php
/*
Template Name: お問い合わせページ
*/
$imgPath = getChildThemePath('/lp/contact/images');
$stylePath = getChildThemePath('/lp/contact/css');
$pdfPath = getChildThemePath('/lp/contact/pdf');
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-T5MP9PG');
	</script>
	<!-- End Google Tag Manager -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--ビューポート-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>マーケティング戦略スクールMERC｜戦略とデジタルを繋ぐ</title>
	<meta name="keyword" content="マーケティング,スクール,講座,merc"><!-- 検索キーワード -->
	<!-- 読み込み元ファイル（index.php）の3行目の $description -->
	<meta name="description" content="累計2,000名以上が受講した、マーケティング戦略に特化したビジネススクール。マーケティング会社が実績を出した設計フローを学び、1人でクライアントの課題抽出から設計までできるようになる、ランディングページ制作に特化した講座。">
	<!--検索エンジンに表示される説明文-->
	<meta property="Og:title" content="累計2,000名以上が受講した、マーケティング戦略に特化したビジネススクール。マーケティング会社が実績を出した設計フローを学び、1人でクライアントの課題抽出から設計までできるようになる、ランディングページ制作に特化した講座。">
	<!--SNSでシェアされた時の説明文-->
	<meta property="og:type" content="Weblite">
	<!--サイトのタイプ-->
	<meta property="og:url" content="#">
	<!--サイトのURL-->
	<meta property="site_name" content="MERC Education">
	<!--サイトの名前-->
	<meta property="og:image" content="<?php echo $imgPath; ?>/meta/og-image.png">
	<!--シェアされた時に表示される画像（アイキャッチ）-->
	<meta property="format-detection" content="telephone=no">
	<!--URLを統一化させる-->
	<link rel="icon" href="/favicon.ico">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet"> <!-- slickスライダー用 -->
	<link rel="stylesheet" href="<?php echo $stylePath; ?>/style.css">
	<link rel="stylesheet" href="<?php echo getChildThemePath('/style.css') ?>">
	<script src="//statics.a8.net/a8sales/a8sales.js"></script>
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T5MP9PG" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<header class="l-header">
		<div class="wrap">
			<div class="inner_1080">
				<h1 class="logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo $imgPath; ?>/common/logo.svg" alt="MERC Education">
					</a>
				</h1>
			</div>
		</div>
	</header>
	<main>
		<section class="p-contact-form">
			<h2 class="title"><span>簡単30秒</span><br class="sp">無料お問い合わせフォーム</h2>
			<div class="tab_content" id="programming_content">
				<div class="icon-position">
					<ul class="icon-wrap">
						<li><span>情報入力</span><br><img src="<?php echo $imgPath; ?>/common/icon01.svg" alt="情報入力イメージアイコン"></li>
						<li><span>送信完了</span><br><img src="<?php echo $imgPath; ?>/common/icon02.svg" alt="送信完了イメージアイコン"></li>
						<li><span>当社から返信<br>(2営業日以内)</span><br><img src="<?php echo $imgPath; ?>/common/icon03.svg" alt="当社から返信イメージアイコン"></li>
					</ul>
				</div>
				<!-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeUEX1YGnYU671QEWxxmQVgjHdbsvYwWZXHymQuF04gebST7w/viewform?embedded=true" width="640" height="1505" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe> -->
				<div class="p-contact">
					<form id="contact-form" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSeUEX1YGnYU671QEWxxmQVgjHdbsvYwWZXHymQuF04gebST7w/formResponse" method="post" target="hidden_iframe" onsubmit="submitted=true;">
						<p class="input-field">
							<label for="your-name"><span class="caution">必須</span>名前(漢字)</label>
							<input id="your-name" type="text" name="entry.2016198055" placeholder="姓 名" required>
						</p>
						<p class="input-field">
							<label for="your-email"><span class="caution">必須</span>メールアドレス</label>
							<input id="your-email" type="email" name="entry.1936381900" placeholder="メールアドレス" required>
						</p>
						<p class="input-field">
							<label for="your-number"><span class="caution">必須</span>電話番号</label>
							<input id="your-number" type="number" name="entry.105967649" placeholder="ハイフンなし" required>
						</p>
						<p class="form__notion">
							送信後、2営業日以内にご入力頂きましたメールアドレス宛へ、<br class="pc">
							事務局より「日程調整のご案内」をさせて頂きます。
						</p>
						<label class="form__agreement">
							<input type="checkbox" name="entry.1667384038" value="同意する" required>
							<span><a href="<?php echo $pdfPath; ?>/privacy_policy.pdf" target="_blank">プライバシーポリシー</a>に同意します</span>
						</label>
						<button type="submit" class="btn hover_08">送信</button>
					</form>
					<script type="text/javascript">
						var submitted = false;
					</script>
					<iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted){window.location='<?php echo home_url('/contact/thanks'); ?>';}"></iframe>
				</div>
			</div>
		</section>

	</main>
	<?php get_footer(); ?>
</body>

</html>
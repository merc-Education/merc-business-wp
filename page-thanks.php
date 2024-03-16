<?php
/*
Template Name: （旧）サンクスページ
*/
$imgPath = getChildThemePath('/lp/contact/images');
$stylePath = getChildThemePath('/lp/contact/css');
$pdfPath = getChildThemePath('/lp/contact/pdf');
?>

<!DOCTYPE html>
<html lang="ja">

<head>
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
	<!--サイトのURL-->
	<meta property="site_name" content="merc Education">
	<!--サイトの名前-->
	<meta property="og:image" content="images/meta/og-image.png">
	<!--シェアされた時に表示される画像（アイキャッチ）-->
	<meta property="format-detection" content="telephone=no">
	<!--URLを統一化させる-->
	<link rel="icon" href="/favicon.ico">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet"> <!-- slickスライダー用 -->
	<link rel="stylesheet" href="<?php echo $stylePath; ?>/style.css">
	<link rel="stylesheet" href="<?php echo getChildThemePath("/assets/css/footer.css"); ?>">
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
	<script src="//statics.a8.net/a8sales/a8sales.js"></script>
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T5MP9PG" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<span id="a8sales"></span>
	<script src="//statics.a8.net/a8sales/a8sales.js"></script>
	<script>
		const orderNum = Math.random().toString(32).substring(2)
		a8sales({
			"pid": "s00000023284001",
			"order_number": orderNum,
			"currency": "JPY",
			"items": [{
				"code": "a8",
				"price": 3000,
				"quantity": 1
			}, ],
			"total_price": 3000
		});
	</script>


	<header class="l-header">
		<div class="wrap">
			<div class="inner_1080">
				<h1 class="logo">
					<img src="<?php echo $imgPath; ?>/common/logo.svg" alt="merc Education">
				</h1>
			</div>
		</div>
	</header>
	<main>
		<section class="p-thank">
			<div>
				<div class="inner_500">
					<p>3営業日以内に、担当者より無料カウンセリングについて<br>
						ご入力いただいたメールアドレスにてご案内致します。</p>
					<p>今後ともMERC Educationをどうぞよろしくお願いいたします。</p>
				</div>
			</div>
		</section>

	</main>
	<?php get_footer(); ?>
	</div>
</body>

</html>
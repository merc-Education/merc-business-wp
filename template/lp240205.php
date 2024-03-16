<?php
/*
Template Name: LP(240205~)
*/
$imgPath   = getChildThemePath( '/lp/front-page240205/img' );
$stylePath = getChildThemePath( '/lp/front-page240205/css' );
$jsPath    = getChildThemePath( '/lp/front-page240205/js' );
?>

<!doctype html>
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
	<title>マーケティング戦略スクール│すべての講座が実践形式の社会人の学校</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="本気のマーケティング戦略を学ぶスクールならMERC Education。実践形式で学ぶ社会人の学校。3ヶ月の講座で実務に活かせるスキルを習得！">
	<meta name="format-detection" content="telephone=no">
	<meta name="keyword" content="マーケティング,スクール,講座,merc">
	<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6684440/7875632/css/fonts.css" />
	<link rel="stylesheet" href="<?php echo $stylePath; ?>/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo $stylePath; ?>/common.css">
	<link rel="stylesheet" href="<?php echo $stylePath; ?>/override.css?240208">
	<link rel="stylesheet" href="<?php echo getChildThemePath( '/assets/css/footer.css' ); ?>">
	<link rel="icon" href="/favicon.ico">
	<script src="//statics.a8.net/a8sales/a8sales.js"></script>
</head>

<body>
	<header>
	<div class="wrap">
		<h1 class="logo"><a href="./"><img src="<?php echo $imgPath; ?>/img_logo_header.svg" alt="MERC Education"></a>
		</h1>
		<input type="checkbox" id="menu-btn-check" name="menu-btn-check">
		<label for="menu-btn-check" class="menu-btn"><span class="first"></span><span class="second"></span><span
			class="third"></span></label>
		<nav class="menu-content">
		<ul class="pc_navi">
			<li><button onclick="openEeasy('戦略講座')" class="free">無料相談はこちら</button></li>
			<li><a href="<?php echo home_url( '/registration' ); ?>" class="course">講座申込はこちら</a></li>
		</ul>
		<div class="sp_navi">
			<ul class="menu">
			<li><a href="#about">マークエデュケーションとは？</a></li>
			<li><a href="#select">選ばれる3つの理由</a></li>
			<li><a href="#interview">卒業生インタビュー</a></li>
			<li><a href="#program">学習プログラムについて</a></li>
			<li><a href="#process">学習プロセス</a></li>
			<li><a href="#lecturer">講師について</a></li>
			<li><a href="#price">料金</a></li>
			<li><a href="#flow">受講までの流れ</a></li>
			<li><a href="#faq">よくあるご質問</a></li>
			</ul>
			<ul class="btn">
			<li>
				<p class="c-button__lead-text">
				＼ 法人研修も承っております ／
				</p>
				<button onclick="openEeasy('戦略講座')">
				<picture>
					<source srcset="<?php echo $imgPath; ?>/btn_app_free_sp.webp" type="image/webp">
					<img loading="lazy" src="<?php echo $imgPath; ?>/btn_app_free_sp.png" alt="まずは無料相談をする（日程調整ツールに遷移します）">
				</picture>
				</button>
			</li>
			<li>
				<a href="<?php echo home_url( '/registration' ); ?>">
				<picture>
					<source srcset="<?php echo $imgPath; ?>/btn_app_course_sp.webp" type="image/webp">
					<img loading="lazy" src="<?php echo $imgPath; ?>/btn_app_course_sp.png"
					alt="いますぐ講座に申し込む（申込フォームに遷移します）">
				</picture>
				</a>
			</li>
			</ul>
		</div>
		</nav>
	</div>
	</header>
	<main>
	<section id="mv">
		<div class="image pc">
		<picture>
			<source srcset="<?php echo $imgPath; ?>/img_mv.webp" type="image/webp">
			<img src="<?php echo $imgPath; ?>/img_mv.jpg" alt="">
		</picture>
		</div>
		<div class="point pc">
		<picture>
			<source srcset="<?php echo $imgPath; ?>/img_mv_point.webp" type="image/webp">
			<img src="<?php echo $imgPath; ?>/img_mv_point.png" alt="">
		</picture>
		</div>
		<div class="point2 pc"><img src="<?php echo $imgPath; ?>/txt_marketing_is_fun.svg" alt="Marketing is Fun."></div>
		<div class="wrap">
		<h2 class="catch">
			<picture>
			<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/img_mv_catch_sp.webp" type="image/webp">
			<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/img_mv_catch_sp.png" type="image/png">
			<source srcset="<?php echo $imgPath; ?>/img_mv_catch.webp" type="image/webp">
			<img src="<?php echo $imgPath; ?>/img_mv_catch.png" alt="本気のマーケティング戦略を学ぶならMERC Education">
			</picture>
		</h2>
		<div class="subsidy pc">
			<img src="<?php echo $imgPath; ?>/mv-subsidy.png"
			alt="経済産業省「リスキリングを通じたキャリアアップ支援事業」に採択されました！今なら受講料が最大70%キャッシュバック（最大208,600円）">
		</div>
		<div class="review">
			<div class="skill sp">
			<h2 class=skill-title>3ヶ月で<strong class="red">実務に活かせるスキル</strong>を習得！</h2>
			<ul class="skill-list">
				<li>4P・4C・STP</li>
				<li>コアバリュー</li>
				<li>ブランドエクイティ</li>
				<li>価格戦略</li>
				<li>ブランドストーリー設計</li>
			</ul>
			</div>
			<img src="<?php echo $imgPath; ?>/mv-skill.png" alt="累計受講者数2,500名以上*1。明日から実務に活かせる93.3%*2">
			<p class="att">※1.MERC Educationの全講座の累計受講者数　※2.MERC Education受講生アンケートより</p>
		</div>
		<div class="subsidy sp">
			<img src="<?php echo $imgPath; ?>/mv-subsidy-sp.png"
			alt="経済産業省「リスキリングを通じたキャリアアップ支援事業」に採択されました！今なら受講料が最大70%キャッシュバック（最大208,600円）">
		</div>
		</div>
	</section>
	<div class="app_box_mv cta">
		<div class="wrap">
		<div class="skill pc">
			<h2 class=skill-title>3ヶ月で<strong class="red">実務に活かせるスキル</strong>を習得！</h2>
			<ul class="skill-list">
			<li>4P・4C・STP</li>
			<li>コアバリュー</li>
			<li>ブランドエクイティ</li>
			<li>価格戦略</li>
			<li>ブランドストーリー設計</li>
			</ul>
		</div>
		<h2 class="ttl cta-title">
			<span class="top">マーケティング戦略講座</span>
			<br class="bsp">
			<span class="bottom">
			<span class="red-box">19期生募集中</span>
			4月開講
			</span>
		</h2>
		<ul class="btn c-button-wrapper">
			<li>
			<p class="c-button__lead-text c-button__lead-text--color">
				＼ 法人研修も承っております ／
			</p>
			<button onclick="openEeasy('戦略講座')">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/btn_app_free_sp.webp"
					type="image/webp">
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/btn_app_free_sp.png">
				<source srcset="<?php echo $imgPath; ?>/btn_app_free.webp" type="image/webp">
				<img src="<?php echo $imgPath; ?>/btn_app_free.png" alt="まずは無料相談をする（日程調整ツールに遷移します）">
				</picture>
			</button>
			</li>
			<li class="c-button--green">
			<a href="<?php echo home_url( '/registration' ); ?>">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/btn_app_course_sp.webp"
					type="image/webp">
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/btn_app_course_sp.png">
				<source srcset="<?php echo $imgPath; ?>/btn_app_course.webp" type="image/webp">
				<img src="<?php echo $imgPath; ?>/btn_app_course.png" alt="いますぐ講座に申し込む（申込フォームに遷移します）">
				</picture>
			</a>
			</li>
		</ul>
		</div>
	</div>
	<section id="about">
		<div class="wrap">
		<h2 class="ttl">
			<picture>
			<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/img_about_txt1_sp.webp" type="image/webp">
			<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/img_about_txt1_sp.png">
			<source srcset="<?php echo $imgPath; ?>/img_about_txt1.webp" type="image/webp">
			<img loading="lazy" src="<?php echo $imgPath; ?>/img_about_txt1.png"
				alt="マークエデュケーションはマーケティング戦略に特化したカリキュラムで実務につながるワークショップ中心のスクールです！">
			</picture>
		</h2>
		<ul class="list">
			<li>
			<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/img_about_txt2_sp.webp"
				type="image/webp">
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/img_about_txt2_sp.png">
				<source srcset="<?php echo $imgPath; ?>/img_about_txt2.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/img_about_txt2.png" alt="だから明日から「実務」で使える">
			</picture>
			</li>
			<li>
			<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/img_about_txt3_sp.webp"
				type="image/webp">
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/img_about_txt3_sp.png">
				<source srcset="<?php echo $imgPath; ?>/img_about_txt3.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/img_about_txt3.png" alt="だから大手マーケティング企業が毎年リピート">
			</picture>
			</li>
		</ul>
		</div>
	</section>
	<section id="schedule" class="c-schedule">
		<div class="wrap c-schedule__wrap">
		<div class="ttl">
			<p class="start">
			<img src="<?php echo $imgPath; ?>/start-0405.svg?240206" alt="4月5日START">
			</p>
			<h2 class="txt">4月講座開催日程</h2>
			<picture>
			<source srcset="<?php echo $imgPath; ?>/img_schedule_ttl.webp" type="image/webp">
			<img loading="lazy" src="<?php echo $imgPath; ?>/img_schedule_ttl.png" alt="3ヶ月で完結">
			</picture>
		</div>
		<div class="box">
			<ul class="list c-schedule__list">
			<li><span>ウェルカムガイダンス</span>4/5（金）20:00-21:30</li>
			<li><span>第1回</span>4/9（火）20:00-22:00</li>
			<li><span>第2回</span>4/16（火）20:00-22:00</li>
			<li><span>第3回</span>4/23（火）20:00-22:00</li>
			<li><span>第4回</span>4/30（火）20:00-22:00</li>
			</ul>
			<ul class="list c-schedule__list">
			<li><span>第5回</span>5/7（火）20:00-22:00</li>
			<li><span>第6回</span>5/14（火）20:00-22:00</li>
			<li><span>第7回</span>5/21（火）20:00-22:00</li>
			<li><span>第8回</span>5/28（火）20:00-22:00</li>
			<li><span>第9回</span>6/4（火）20:00-22:00</li>
			</ul>
			<ul class="list c-schedule__list">
			<li><span>第10回</span>6/11（火）20:00-22:00</li>
			<li><span>第11回</span>6/18（火）20:00-22:00</li>
			<li><span>第12回</span>6/25（火）20:00-22:00</li>
			<li><span>予備日</span>6/28（金）20:00-22:00</li>
			</ul>
		</div>
		</div>
	</section>
	<section id="select">
		<div class="wrap">
		<h2 class="ttl">
			<picture>
			<source srcset="<?php echo $imgPath; ?>/img_select_ttl.webp" type="image/webp">
			<img loading="lazy" src="<?php echo $imgPath; ?>/img_select_ttl.png" alt="選ばれる３つの理由">
			</picture>
		</h2>
		<section class="point_clm point1">
			<div class="ttl_point_box">
			<p class="ttl_number">
				<picture>
				<source srcset="<?php echo $imgPath; ?>/img_select_point1.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/img_select_point1.png" alt="POINT01">
				</picture>
			</p>
			<h3 class="ttl_point">再現性高く成果を出せる<br class="sp"><span>本質的な教育カリキュラム</span></h3>
			</div>
			<p class="point_lead">元Yahoo!マネージャーが100社以上の売上を改善してきた実務を体系的にカリキュラム化。<br class="pc">再現性高く成果を出せる本物の思考力が身につきます。
			</p>
			<div class="point_image">
			<div class="img_zoom">
				<picture>
				<source srcset="<?php echo $imgPath; ?>/img_select_point1_1.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/img_select_point1_1.png" alt="教育カリキュラム">
				</picture>

			</div>
			</div>
			<h3 class="lesson_ttl pc"><span>
				<img loading="lazy" src="<?php echo $imgPath; ?>/icon_program.svg" alt="PROGRAM">
			</span>実践ですぐに使える学習プログラムについて
			</h3>
			<p class="lesson_ttl sp"><span>「ボタン」</span>をタップすると詳しい学習プログラムを<br>見ることでできます</p>
			<div class="list">
			<div class="lesson lesson1">
				<div class="ttl_lesson">
				<p class="number">第<span>1</span>部</p>
				<p class="ttl"><span>環境分析</span>編</p>
				</div>
				<div class="btn_lesson">
				<picture>
					<source srcset="<?php echo $imgPath; ?>/bnr_point1_01.webp" type="image/webp">
					<img loading="lazy" src="<?php echo $imgPath; ?>/bnr_point1_01.png" alt="第1部 環境分析編">
				</picture>
				</div>
				<ul class="txt_lesson">
				<li>・マーケティング思考がないと真の課題は見えない</li>
				<li>・マーケティングのゴールはブランドプレファレンスを作ること</li>
				<li>・商品やサービスが選ばれるメカニズムとは</li>
				<li>・商品やサービスを育てるとはどういうことか</li>
				<li>・外部環境分析と内部環境分析の目的とは</li>
				<li>・自社の資産を4P4C分析で把握する</li>
				<li>・社会のトレンドを調査するPEST分析</li>
				<li>・お客様の行動と嗜好を調査するGCS分析</li>
				<li>・競合の定義と4P4C分析</li>
				<li>・市場機会と脅威を分析するクロスSWOT分析</li>
				<li>・お客様に選ばれる自社のコアバリューを特定するプロセス</li>
				</ul>
			</div>
			<div class="lesson lesson2">
				<div class="ttl_lesson">
				<p class="number">第<span>2</span>部</p>
				<p class="ttl"><span>戦略立案</span>編</p>
				</div>
				<div class="btn_lesson">
				<picture>
					<source srcset="<?php echo $imgPath; ?>/bnr_point1_02.webp" type="image/webp">
					<img loading="lazy" src="<?php echo $imgPath; ?>/bnr_point1_02.png" alt="第2部 戦略立案編">
				</picture>
				</div>
				<ul class="txt_lesson">
				<li>・戦略の目的設定とは社会課題の解決</li>
				<li>・コトラーのSTP分析から戦略を構造化する</li>
				<li>・市場セグメンテーションとターゲティング</li>
				<li>・コアバリューに基づいたポジショニング</li>
				<li>・ペルソナ設計の目的と失敗事例</li>
				<li>・お客様の感情に寄り添ったポジショニングとストーリーで差をつける</li>
				<li>・戦略をお客様に伝えるブランドの構成要素</li>
				<li>・ブランドが提供する4つの価値</li>
				<li>・ブランドコンセプトとイメージボードの作り方</li>
				</ul>
			</div>
			<div class="lesson lesson3">
				<div class="ttl_lesson">
				<p class="number">第<span>3</span>部</p>
				<p class="ttl"><span>施策立案</span>編</p>
				</div>
				<div class="btn_lesson">
				<picture>
					<source srcset="<?php echo $imgPath; ?>/bnr_point1_03.webp" type="image/webp">
					<img loading="lazy" src="<?php echo $imgPath; ?>/bnr_point1_03.png" alt="第3部 施策立案編">
				</picture>
				</div>
				<ul class="txt_lesson">
				<li>・プロモーションの5つの役割を理解する</li>
				<li>・プロモーションの仕組みを作るとは</li>
				<li>・プロモーション手法の5つの分類</li>
				<li>・プロモーション予算の考え方の基本</li>
				<li>・消費者心理学におけるニーズと動機の違い</li>
				<li>・消費者が抱える6つの行動阻害要因を解消する</li>
				<li>・カスタマージャーニーマップの目的と作り方</li>
				<li>・顧客階層と心理状態に施策を組み合わせる</li>
				<li>・施策の優先順位の決定方法</li>
				</ul>
			</div>
			<div class="lesson lesson4">
				<div class="ttl_lesson">
				<p class="number">第<span>4</span>部</p>
				<p class="ttl"><span>卒業制作</span></p>
				</div>
				<div class="btn_lesson">
				<picture>
					<source srcset="<?php echo $imgPath; ?>/bnr_point1_04.webp" type="image/webp">
					<img loading="lazy" src="<?php echo $imgPath; ?>/bnr_point1_04.png" alt="第4部 卒業制作">
				</picture>
				</div>
				<p class="txt_lesson">・環境分析と戦略立案に基づいてプロモーション企画を提案する</p>
			</div>
			</div>
		</section>
		<section class="point_clm point2">
			<div class="ttl_point_box">
			<p class="ttl_number">
				<picture>
				<source srcset="<?php echo $imgPath; ?>/img_select_point2.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/img_select_point2.png" alt="POINT02">
				</picture>
			</p>
			<h3 class="ttl_point"><span>ワークショップで実践！</span><br class="pc">プロからの<br class="sp">フィードバックで高い学習効果</h3>
			</div>
			<p class="point_lead">学んだ内容をもとに、他の受講生と一緒にワークショップを実施。<br
				class="pc">自らが主役となってアウトプットを実践し、講師から個別具体的なフィードバックを受けることで、<br class="pc">その場ですぐに学習内容を定着させます。</p>
			<div class="point_image">
			<picture>
				<source srcset="<?php echo $imgPath; ?>/img_select_point2_1.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/img_select_point2_1.png" alt="3ヶ月でここまでできる！受講者が実際に作成した戦略図"
				class="img_catch">
			</picture>
			<div class="img_zoom">
				<picture>
				<source srcset="<?php echo $imgPath; ?>/img_select_point2_2.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/img_select_point2_2.jpg" alt="受講者が実際に作成した戦略図">
				</picture>
			</div>
			</div>
		</section>
		<section class="point_clm point3">
			<div class="ttl_point_box">
			<p class="ttl_number">
				<picture>
				<source srcset="<?php echo $imgPath; ?>/img_select_point3.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/img_select_point3.png" alt="POINT03">
				</picture>
			</p>
			<h3 class="ttl_point"><span>無料のコミュニティで実務経験</span>を積む！<br>さらなるスキルアップを実現</h3>
			</div>
			<div class="point3-block">
			<picture>
				<source srcset="<?php echo $imgPath; ?>/img_select_point3_3.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/img_select_point3_3.png" class="pc" alt="">
			</picture>
			<div class="point3-block-inner">
				<p>MERC Education受講生限定のコミュニティ「MERC
				Guild」では、実務を通してマーケティングの学びを深められる機会を提供。<br>卒業後もプロからのフィードバックを受けながら実務の中で生まれる疑問を解決し、さらなる成長を実現できます。</p>
				<picture>
				<source srcset="<?php echo $imgPath; ?>/img_select_point3_4.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/img_select_point3_4.jpg" class="pc" alt="">
				</picture>
				<picture>
				<source srcset="<?php echo $imgPath; ?>/img_select_point3_3.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/img_select_point3_3.png" class="sp" alt="">
				</picture>
			</div>
			<picture>
				<source srcset="<?php echo $imgPath; ?>/img_select_point3_1.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/img_select_point3_1.png" class="point3-block__badge"
				alt="これだけ学べてしかも無料">
			</picture>
			</div>
			<div class="list_box">
			<div class="list_clm">
				<p class="list_ttl">応用講座</p>
				<div class="btn_lesson">
				<picture>
					<source srcset="<?php echo $imgPath; ?>/bnr_point3_01.webp" type="image/webp">
					<img loading="lazy" src="<?php echo $imgPath; ?>/bnr_point3_01.png" alt="応用講座">
				</picture>
				</div>
				<ul class="list">
				<li>
					<p class="data">2022.3.27</p>
					<p class="txt">【データ分析の基本】<br>
					第6回:イシューに答えを出す</p>
				</li>
				<li>
					<p class="data">2022.3.17</p>
					<p class="txt">【データ分析の基本】<br>
					第5回:深い仮説を立てよ</p>
				</li>
				<li>
					<p class="data">2022.3.10</p>
					<p class="txt">【Webサイトの問題解決思考とGoogleアナリティクス活用法】<br>
					第4回:問題と解決を定量化せよ</p>
				</li>
				<li>
					<p class="data">2022.3.3</p>
					<p class="txt">【Webサイトの問題解決思考とGoogleアナリティクス活用法】<br>
					第3回:深い仮説を立てよ</p>
				</li>
				</ul>
			</div>
			<div class="list_clm">
				<p class="list_ttl">ワークショップ</p>
				<div class="btn_lesson">
				<picture>
					<source srcset="<?php echo $imgPath; ?>/bnr_point3_02.webp" type="image/webp">
					<img loading="lazy" src="<?php echo $imgPath; ?>/bnr_point3_02.png" alt="ワークショップ">
				</picture>
				</div>
				<ul class="list">
				<li>
					<p class="data">2022.11.16</p>
					<p class="txt">CVR250%改善を生み出したLP制作とは</p>
				</li>
				<li>
					<p class="data">2022.9.22</p>
					<p class="txt">戦略思考に基づいたプロモーション企画提案</p>
				</li>
				<li>
					<p class="data">2022.9.8</p>
					<p class="txt">資源を集中させるSTP分析と戦略立案</p>
				</li>
				<li>
					<p class="data">2022.8.31</p>
					<p class="txt">社会と顧客の変化を捉える環境分析</p>
				</li>
				</ul>
			</div>
			<div class="list_clm">
				<p class="list_ttl">マーケター交流会</p>
				<div class="btn_lesson">
				<picture>
					<source srcset="<?php echo $imgPath; ?>/bnr_point3_03.webp" type="image/webp">
					<img loading="lazy" src="<?php echo $imgPath; ?>/bnr_point3_03.png" alt="マーケター交流会">
				</picture>
				</div>
				<ul class="list">
				<li>
					<p class="data">2022.9.29</p>
					<p class="txt">代表・福田が登壇!事業会社と代理店が築くべきパートナーシップ</p>
				</li>
				<li>
					<p class="data">2022.8.25</p>
					<p class="txt">ルミネ担当者のディープな顧客理解から学ぶ「売れる場」のコンセプト構築と運営マネジメント</p>
				</li>
				<li>
					<p class="data">2022.7.28</p>
					<p class="txt">マーケティング戦略があると資金調達しやすくなるぞ、どこにお金を使うべきか</p>
				</li>
				<li>
					<p class="data">2022.6.24</p>
					<p class="txt">1対1での成約率は常に80%以上!法人・個人との商談で気持ちよくYESをもらうクロージングの極意</p>
				</li>
				</ul>
			</div>
			</div>
		</section>
		</div>
	</section>
	<section id="consultation">
		<div class="wrap">
		<p class="caption">「無料相談」は登録カンタン30秒！</p>
		<h2 class="ttl">気になることはどんどん、<br>担当のマーケターへご相談ください！</h2>
		<div class="list_box">
			<ul class="list">
			<li>
				<picture>
				<source srcset="<?php echo $imgPath; ?>/img_consultation_1.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/img_consultation_1.png" alt="今の仕事にすぐ応用できるのかな…">
				</picture>
			</li>
			<li>
				<picture>
				<source srcset="<?php echo $imgPath; ?>/img_consultation_2.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/img_consultation_2.png" alt="授業やワークショップはついていけるのかな…">
				</picture>
			</li>
			<li>
				<picture>
				<source srcset="<?php echo $imgPath; ?>/img_consultation_3.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/img_consultation_3.png" alt="入会の前に一度体験をしてみたい">
				</picture>
			</li>
			</ul>
			<p class="att">など</p>
		</div>
		</div>
	</section>
	<div class="app_box">
		<div class="wrap">
		<p class="ttl"><span class="inner">マーケティング戦略講座<br class="sp"><span class="bg">19期生募集中</span>4月開講</span></p>
		<ul class="c-button-wrapper btn">
			<li>
			<p class="c-button__lead-text">
				＼ 法人研修も承っております ／
			</p>
			<button onclick="openEeasy('戦略講座')">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/btn_app_free_sp.webp"
					type="image/webp">
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/btn_app_free_sp.png">
				<img loading="lazy" src="<?php echo $imgPath; ?>/btn_app_free.png" alt="まずは無料相談をする（日程調整ツールに遷移します）">
				</picture>
			</button>
			</li>
			<li>
			<a class="c-button--green" href="<?php echo home_url( '/registration' ); ?>">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/btn_app_course_sp.webp"
					type="image/webp">
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/btn_app_course_sp.png">
				<img loading="lazy" src="<?php echo $imgPath; ?>/btn_app_course.png" alt="いますぐ講座に申し込む（申込フォームに遷移します）">
				</picture>
			</a>
			</li>
		</ul>
		</div>
	</div>

	<div class="careerup">
		<div class="wrap">
		<div class="careerup-inner">
			<div class="careerup-top">
			<div class="careerup-logo pc">
				<img loading="lazy" src="<?php echo $imgPath; ?>/logo-meti.png" alt="経済産業省　リスキリングを通じたキャリアアップ支援事業">
			</div>
			<div class="careerup-ttl-wrap">
				<h2 class="careerup-ttl">新しいスキルで、<br class="bsp">新しいチャンスを。</h2>
				<div class="careerup-logo sp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/logo-meti.png" alt="経済産業省　リスキリングを通じたキャリアアップ支援事業">
				</div>
				<p class="careerup-read">リスキリングを通じた<br class="bsp">キャリアアップ支援事業活用で</p>
			</div>
			</div>
			<div class="careerup-img-01">
			<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/careerup-01-sp.svg">
				<img loading="lazy" src="<?php echo $imgPath; ?>/careerup-01.svg"
				alt="MERC Education 受講料「327,800円（税込）」➝最大70%（最大208,600円）*1 キャッシュバック。実質119,200円（税込）*2">
			</picture>
			<p class="att">※1.受講料298,000円（税別）の70%　<br class="bsp">※2.受講には、別途入学金33,000円（税込）がかかります。</p>
			</div>
			<div class="careerup-btn-wrap">
			<button class="careerup-btn" aria-controls="careerup-body-01" aria-expanded="false">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/careerup-btn-sp.png?240208">
				<img loading="lazy" src="<?php echo $imgPath; ?>/careerup-btn.png?240208"
					alt="リスキリングを通じたキャリアアップ支援事業についての詳細はこちら">
				</picture>
				<span class="careerup-btn-icon">
				<span></span>
				<span></span>
				</span>
			</button>
			</div>
			<div id="careerup-body-01" class="careerup-body" aria-hidden="true">
			<h2 class="ttl">「リスキリングを通じた<br class="bsp">キャリアアップ支援事業」に<br class="bsp">ついて</h2>
			<p class="txt">
				MERCEducationは「リスキリングを通じたキャリアアップ支援事業」（経済産業省）に採択されました。キャリアアップ支援を利用することで、受講料(税別)の最大70%のキャッシュバックを受けることが可能です。本事業の予算には限りがございますのでお早めにご検討ください。詳細については無料相談にてお伝えいたします。
			</p>
			<p class="txt">「リスキリングを通じたキャリアアップ支援事業」の公式HPは<a class="txtlink"
				href="https://careerup.reskilling.go.jp/worker/">こちら</a></p>
			<div class="img-01">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/careerup-02-sp.svg">
				<img loading="lazy" src="<?php echo $imgPath; ?>/careerup-02.svg"
					alt="受講終了で50%経産省からキャッシュバック、1年間終業で20%経産省からキャッシュバック。">
				</picture>
			</div>
			<div class="img-02">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/careerup-01-sp.svg">
				<img loading="lazy" src="<?php echo $imgPath; ?>/careerup-01-l.svg"
					alt="MERC Education 受講料「327,800円（税込）」➝最大70%（最大208,600円）*1 キャッシュバック。実質119,200円（税込）*2">
				</picture>
				<ol>
				<li>受講修了後、講座受講料の<br class="bsp">50%（149,000円）をキャッシュバック。</li>
				<li>受講を経て2025年3月31日までに転職し、その後1年間継続的に転職先に就業していることが確認できる場合、<br
					class="nbsp">さらに講座受講料の20%（59,600円）をキャッシュバック。</li>
				</ol>
				<p class="att">※1.受講料298,000円（税別）の70%　<br class="bsp">※2.受講には、別途入学金33,000円（税込）<br class="bsp">がかかります。</p>
			</div>
			<h2 class="ttl">「リスキリングを通じた<br class="bsp">キャリアアップ支援事業」<br class="bsp">の流れ</h2>
			<p class="txt">
				リスキリングと労働移動の円滑化を一体的に進める観点から、在職者が自らのキャリアについて民間の専門家に相談できる「キャリア相談対応」、それを踏まえてリスキリング講座を受講できる「リスキリング提供」、それらを踏まえた「転職支援」までを一体的に実施します。
			</p>
			<div class="img-03">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/careerup-03-sp.svg">
				<img loading="lazy" src="<?php echo $imgPath; ?>/careerup-03.svg"
					alt="1.キャリアプランについての相談 2.プログラム受講によるリスキリング 3.転職相談・職業紹介 4.キャリアアップの実現 - キャリア相談、リスキリング、転職までを一体的に支援">
				</picture>
			</div>
			<h2 class="ttl">補助金の受給条件</h2>
			<ul class="list">
				<li>本講座の無料相談申込時および無料相談実施時に在職者(企業等と雇用契約を締結している者) であること</li>
				<li>雇用主の変更を伴う転職を目指していること</li>
			</ul>
			<p class="att">※詳細については無料相談でお伝えいたします。</p>
			</div>
		</div>
		</div>
	</div>

	<section id="interview">
		<div class="wrap">
		<h2 class="interview_ttl">
			<picture>
			<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/interview-ttl-sp.svg">
			<img loading="lazy" src="<?php echo $imgPath; ?>/interview-ttl.svg" alt="卒業生インタビュー　受講生の声は「#mercedu」で検索！">
			</picture>
		</h2>
		<section class="interview_clm interview_01">
			<p class="att pc">※写真はイメージです</p>
			<p class="number"><img loading="lazy" src="<?php echo $imgPath; ?>/txt_interview_01.svg" alt="Interview01">
			</p>
			<div class="img">
			<picture>
				<source srcset="<?php echo $imgPath; ?>/img_interview_01.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/img_interview_01.jpg" alt="">
			</picture>
			</div>
			<div class="txt_box">
			<p class="ttl">施策のつながりを説明できるようになり、<br class="pc">社内のコミュニケーションが変わった</p>
			<p class="caption">
				「とりあえず流行っているからやる」では通用しないと感じ、学習をスタート。戦略の前に人の心を掴んだり、ニーズと動機の違いを理解したり、とにかく視野が広がった。施策のつながりが自然とできるようになった。</p>
			<div class="info">
				<p class="year">3期卒業生</p>
				<p class="name">30代男性 T.Eさん<br class="sp">〈アパレルブランドの管理職〉</p>
			</div>
			</div>
		</section>
		<section class="interview_clm interview_02">
			<p class="number"><img loading="lazy" src="<?php echo $imgPath; ?>/txt_interview_02.svg" alt="Interview02">
			</p>
			<div class="img">
			<picture>
				<source srcset="<?php echo $imgPath; ?>/img_interview_02.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/img_interview_02.jpg" alt="">
			</picture>
			</div>
			<div class="txt_box">
			<p class="ttl">発信の際、判断の拠り所が<br class="pc">しっかりできるようになった</p>
			<p class="caption">
				売上、購入率、客単価だけを見ていたが、もっとマーケティングを学びたいと思い受講。ブランド自体にも人格を持たせて、どんな人に届けたいのかを明確にしてコンテンツを作れるようになったと実感した。</p>
			<div class="info">
				<p class="year">2期卒業生</p>
				<p class="name">30代女性 S.Sさん<br class="sp">〈ECのSNS担当〉</p>
			</div>
			</div>
		</section>
		<section class="interview_clm interview_03">
			<p class="number"><img loading="lazy" src="<?php echo $imgPath; ?>/txt_interview_03.svg" alt="Interview03">
			</p>
			<div class="img">
			<picture>
				<source srcset="<?php echo $imgPath; ?>/img_interview_03.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/img_interview_03.jpg" alt="">
			</picture>
			</div>
			<div class="txt_box">
			<p class="ttl">状況を俯瞰的に分析できるようになり、<br class="pc">他部署との協力体制を築けた</p>
			<p class="caption">
				「どこから手をつければいいのかわからない。営業と自分で訴求していることが違う」と悩み受講を決意。全体像と役割を共有できるようになり、他部署と協力してコンテンツを提供することで、自社の認知が高まった。</p>
			<div class="info">
				<p class="year">6期卒業生</p>
				<p class="name">30代女性 Y.Yさん<br class="sp">〈コンテンツマーケティング担当〉</p>
			</div>
			</div>
		</section>
		</div>
	</section>
	<section id="program">
		<div class="head_box">
		<div class="ttl_box">
			<p class="eng"><img loading="lazy" src="<?php echo $imgPath; ?>/txt_process.svg" alt="PROCESS"></p>
			<h2 class="ttl">学習効率を最大化する<br class="sp">学習プロセス</h2>
		</div>
		<p class="lead">参加者に合わせたライブ講義と、その場で実践できるワークショップ、現場で成果を出し続ける講師からのフィードバックによって<br
			class="pc">学習効率を高めます。講義スライド・授業録画は見放題。復習して分からないことがあればすぐに聞いて解決できるのも魅力です。</p>
		</div>
		<div class="wrap">
		<div class="image_box">
			<div class="img">
			<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/img_process_sp.webp" type="image/webp">
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/img_process_sp.png">
				<img loading="lazy" src="<?php echo $imgPath; ?>/img_process.png" alt="学習プロセス">
			</picture>
			</div>
		</div>
		<div class="btn">
			<a href="<?php echo $imgPath; ?>/img_program_popup.png" class="program_popup">
			<picture>
				<source srcset="<?php echo $imgPath; ?>/btn_program.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/btn_program.png" alt="">
			</picture>
			</a>
		</div>
		</div>
	</section>
	<section id="lecturer">
		<div class="wrap">
		<div class="ttl_box">
			<h2 class="ttl">
			<picture>
				<source srcset="<?php echo $imgPath; ?>/txt_lecturer_01.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/txt_lecturer_01.png" alt="授業はすべて私が担当します">
			</picture>
			</h2>
			<p class="ttl_caption"><span>元Yahoo!マネージャー</span>で<br class="sp">100社以上の売上改善を実現！</p>
		</div>
		<div class="lecturer_box">
			<div class="text_box">
			<div class="name_box">
				<p class="post">株式会社MERC 代表取締役社長CEO</p>
				<p class="name_ja">福田 正義</p>
				<p class="name_en"><img loading="lazy" src="<?php echo $imgPath; ?>/txt_recturer_eng.svg"
					alt="Masayoshi Fukuda"></p>
			</div>
			<div class="history_box">
				<p class="history">
				オーバーチュア株式会社、ヤフー株式会社において、リスティングのコンサルティング部門の立ち上げ、デジタルマーケティングにおける実践手法の体系化及び社内コンサルタントの育成業務に従事。</p>
				<p class="history">2012年株式会社オモロワークスを創業、スタートアップから大手まで幅広い企業のマーケティングコンサル業務に従事。</p>
				<p class="history">
				2018年ネオキャリアグループにてアドテク事業を手掛けるマーベリック株式会社にオモロワークスを売却。その後、同社における執行役員に就任し新事業部門を立上げ、その事業に関しても2021年株式会社駅探に売却。
				</p>
				<p class="history">2022年現在、2019年に立ち上げたマーケティングスクールMERCの卒業生は300名を超える。</p>
				<ul class="history top2">
				<li>2005年 | オーバーチュア株式会社に入社</li>
				<li>2007年 | ヤフー株式会社に転籍</li>
				<li>2012年 | 株式会社オモロワークスを創業<br class="sp">（2018年に売却）</li>
				<li>2017年 | 合同会社YuMK創業</li>
				<li>2018年 | マーベリック株式会社執⾏役員 就任</li>
				<li>2019年 | マーケティング塾『merc Education』開塾</li>
				<li>2021年 | 株式会社駅探　経営戦略室</li>
				</ul>
			</div>
			</div>
			<div class="img_box">
			<picture>
				<source srcset="<?php echo $imgPath; ?>/img_recturer.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/img_recturer.jpg" alt="福田 正義">
			</picture>
			</div>
		</div>
		</div>
	</section>
	<section id="price">
		<div class="image_box">
		<picture>
			<source srcset="<?php echo $imgPath; ?>/img_price_image.webp" type="image/webp">
			<img loading="lazy" src="<?php echo $imgPath; ?>/img_price_image.jpg" alt="">
		</picture>
		</div>
		<div class="wrap">
		<div class="lead_box">
			<h2 class="lead_ttl">
			<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/img_price_lead_ttl_sp.webp"
				type="image/webp">
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/img_price_lead_ttl_sp.png">
				<source srcset="<?php echo $imgPath; ?>/img_price_lead_ttl.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/img_price_lead_ttl.png" alt="お金で学びを諦めてほしくない。">
			</picture>
			</h2>
			<p class="lead">マーケターになりたいという夢を持った人や今の仕事で成果を出したい熱い人、<br class="pc">1人でも多く企業に貢献できるよう業界最安値水準でも、<br
				class="pc">実践に基づいた業界「最高」水準の学習プログラムをスタッフ一同心を込めて提供します。<br class="pc">MERC
			Educationは、あなたのスキルアップを全力で応援するマーケティングスクールです。</p>
			<div class="price_box">
			<p class="price"><img loading="lazy" src="<?php echo $imgPath; ?>/monthly_fee_pc.svg"
				alt="月額11,167円（税別）～ （12,283円税込〜/月）"></p>
			<p class="all">一括でお支払いの場合：327,800円（税込）</p>
			</div>
			<p class="txt_att">
			※分割料金は24回払いを選択した場合の金額です。分割料金は目安です。分割回数やカード会社の分割手数料によって異なりますのでご注意ください。※別途、入学金33,000円（税込）・分割手数料が発生いたします。</p>
		</div>
		<div class="select_box">
			<div class="flex">
			<p class="select_ttl">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/img_price_select_ttl_sp.webp"
					type="image/webp">
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/img_price_select_ttl_sp.png">
				<source srcset="<?php echo $imgPath; ?>/img_price_select_ttl.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/img_price_select_ttl.png" alt="選ばれる3つの理由">
				</picture>
			</p>
			<ul class="list">
				<li>
				<p class="point">
					<picture>
					<source srcset="<?php echo $imgPath; ?>/img_price_point1.webp" type="image/webp">
					<img loading="lazy" src="<?php echo $imgPath; ?>/img_price_point1.png" alt="POINT01">
					</picture>
				</p>
				<p class="txt">再現性高く成果を出せる<br>本質的な教育カリキュラム</p>
				</li>
				<li>
				<p class="point">
					<picture>
					<source srcset="<?php echo $imgPath; ?>/img_price_point2.webp" type="image/webp">
					<img loading="lazy" src="<?php echo $imgPath; ?>/img_price_point2.png" alt="POINT02">
					</picture>
				</p>
				<p class="txt">ワークショップで実践！<br>プロからのフィードバックで<br>高い学習効果</p>
				</li>
				<li>
				<p class="point">
					<picture>
					<source srcset="<?php echo $imgPath; ?>/img_price_point3.webp" type="image/webp">
					<img loading="lazy" src="<?php echo $imgPath; ?>/img_price_point3.png" alt="POINT03">
					</picture>
				</p>
				<p class="txt">無料のコミュニティで<br>実務経験を積む！<br>さらなるスキルアップを実現</p>
				</li>
			</ul>
			</div>
			<div class="btn">
			<a href="#select">
				<picture>
				<source srcset="<?php echo $imgPath; ?>/btn_price_more.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/btn_price_more.png" alt="詳しく見る">
				</picture>
			</a>
			</div>
		</div>
		<ul class="merit">
			<li>
			<p class="ttl">全額返金保証</p>
			<p class="txt">我々はあなたの人生に寄り添い、あなたの成功を全力でサポートします。万が一、我々のサポートにご満足いただけない場合、<span>初回授業から1週間以内に全額返金いたします。</span>
			</p>
			</li>
		</ul>
		<div class="introduction">
			<div class="inner">
			<div class="lead">
				<p>「友人・同僚と一緒に参加」</p>
				<p class="or">または</p>
				<p>「MERC Educationの受講生・<br class="sp">卒業生からのご紹介」で</p>
			</div>
			<p class="price_box">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/img_price_sp.webp" type="image/webp">
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/img_price_sp.png">
				<source srcset="<?php echo $imgPath; ?>/img_price.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/img_price.png" alt="入学金33,000円（税込）→0円">
				</picture>
			</p>
			</div>
		</div>
		</div>
	</section>
	<section id="flow">
		<div class="wrap">
		<div class="flex_box">
			<div class="ttl_box">
			<p class="en"><img loading="lazy" src="<?php echo $imgPath; ?>/txt_flow.svg" alt="FLOW"></p>
			<p class="ja">受講までの流れ</p>
			</div>
			<ul class="list">
			<li>
				<p class="step">
				<picture>
					<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/img_flow_step1_sp.svg">
					<img loading="lazy" src="<?php echo $imgPath; ?>/img_flow_step1.svg" alt="STEP01">
				</picture>
				</p>
				<p class="ttl">送信</p>
				<p class="txt">本フォームより情報を入力ください</p>
			</li>
			<li>
				<p class="step">
				<picture>
					<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/img_flow_step2_sp.svg">
					<img loading="lazy" src="<?php echo $imgPath; ?>/img_flow_step2.svg" alt="STEP02">
				</picture>
				</p>
				<p class="ttl">相談</p>
				<p class="txt">本講座についての質問や受けるべきかのご判断などをスタッフと相談</p>
			</li>
			<li>
				<p class="step">
				<picture>
					<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/img_flow_step3_sp.svg">
					<img loading="lazy" src="<?php echo $imgPath; ?>/img_flow_step3.svg" alt="STEP03">
				</picture>
				</p>

				<p class="ttl">申し込み</p>
				<p class="txt">申し込みを決定したら、案内を受け取り講座開始をお待ちください。</p>
			</li>
			</ul>
		</div>
		</div>
	</section>
	<div class="careerup">
		<div class="wrap">
		<div class="careerup-inner">
			<div class="careerup-top">
			<div class="careerup-logo pc">
				<img loading="lazy" src="<?php echo $imgPath; ?>/logo-meti.png" alt="経済産業省　リスキリングを通じたキャリアアップ支援事業">
			</div>
			<div class="careerup-ttl-wrap">
				<h2 class="careerup-ttl">新しいスキルで、<br class="bsp">新しいチャンスを。</h2>
				<div class="careerup-logo sp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/logo-meti.png" alt="経済産業省　リスキリングを通じたキャリアアップ支援事業">
				</div>
				<p class="careerup-read">リスキリングを通じた<br class="bsp">キャリアアップ支援事業活用で</p>
			</div>
			</div>
			<div class="careerup-img-01">
			<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/careerup-01-sp.svg">
				<img loading="lazy" src="<?php echo $imgPath; ?>/careerup-01.svg"
				alt="MERC Education 受講料「327,800円（税込）」➝最大70%（最大208,600円）*1 キャッシュバック。実質119,200円（税込）*2">
			</picture>
			<p class="att">※1.受講料298,000円（税別）の70%　<br class="bsp">※2.受講には、別途入学金33,000円（税込）がかかります。</p>
			</div>
			<div class="careerup-btn-wrap">
			<button class="careerup-btn" aria-controls="careerup-body-02" aria-expanded="false">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/careerup-btn-sp.png">
				<img loading="lazy" src="<?php echo $imgPath; ?>/careerup-btn.png"
					alt="リスキリングを通じたキャリアアップ支援事業についての詳細はこちら">
				</picture>
				<span class="careerup-btn-icon">
				<span></span>
				<span></span>
				</span>
			</button>
			</div>
			<div id="careerup-body-02" class="careerup-body" aria-hidden="true">
			<h2 class="ttl">「リスキリングを通じた<br class="bsp">キャリアアップ支援事業」に<br class="bsp">ついて</h2>
			<p class="txt">
				MERCEducationは「リスキリングを通じたキャリアアップ支援事業」（経済産業省）に採択されました。キャリアアップ支援を利用することで、受講料(税別)の最大70%のキャッシュバックを受けることが可能です。本事業の予算には限りがございますのでお早めにご検討ください。詳細については無料相談にてお伝えいたします。
			</p>
			<p class="txt">「リスキリングを通じたキャリアアップ支援事業」の公式HPは<a class="txtlink"
				href="https://careerup.reskilling.go.jp/worker/">こちら</a></p>
			<div class="img-01">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/careerup-02-sp.svg">
				<img loading="lazy" src="<?php echo $imgPath; ?>/careerup-02.svg"
					alt="受講終了で50%経産省からキャッシュバック、1年間終業で20%経産省からキャッシュバック。">
				</picture>
			</div>
			<div class="img-02">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/careerup-01-sp.svg">
				<img loading="lazy" src="<?php echo $imgPath; ?>/careerup-01-l.svg"
					alt="MERC Education 受講料「327,800円（税込）」➝最大70%（最大208,600円）*1 キャッシュバック。実質119,200円（税込）*2">
				</picture>
				<ol>
				<li>受講修了後、講座受講料の<br class="bsp">50%（149,000円）をキャッシュバック。</li>
				<li>受講を経て2025年3月31日までに転職し、その後1年間継続的に転職先に就業していることが確認できる場合、<br
					class="nbsp">さらに講座受講料の20%（59,600円）をキャッシュバック。</li>
				</ol>
				<p class="att">※1.受講料298,000円（税別）の70%　<br class="bsp">※2.受講には、別途入学金33,000円（税込）<br class="bsp">がかかります。</p>
			</div>
			<h2 class="ttl">「リスキリングを通じた<br class="bsp">キャリアアップ支援事業」<br class="bsp">の流れ</h2>
			<p class="txt">
				リスキリングと労働移動の円滑化を一体的に進める観点から、在職者が自らのキャリアについて民間の専門家に相談できる「キャリア相談対応」、それを踏まえてリスキリング講座を受講できる「リスキリング提供」、それらを踏まえた「転職支援」までを一体的に実施します。
			</p>
			<div class="img-03">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/careerup-03-sp.svg">
				<img loading="lazy" src="<?php echo $imgPath; ?>/careerup-03.svg"
					alt="1.キャリアプランについての相談 2.プログラム受講によるリスキリング 3.転職相談・職業紹介 4.キャリアアップの実現 - キャリア相談、リスキリング、転職までを一体的に支援">
				</picture>
			</div>
			<h2 class="ttl">補助金の受給条件</h2>
			<ul class="list">
				<li>本講座の無料相談申込時および無料相談実施時に在職者(企業等と雇用契約を締結している者) であること</li>
				<li>雇用主の変更を伴う転職を目指していること</li>
			</ul>
			<p class="att">※詳細については無料相談でお伝えいたします。</p>
			</div>
		</div>
		</div>
	</div>

	<div class="app_box">
		<div class="wrap">
		<p class="ttl"><span class="inner">マーケティング戦略講座<br class="sp"><span class="bg">19期生募集中</span>4月開講</span></p>
		<ul class="c-button-wrapper btn">
			<li>
			<p class="c-button__lead-text">
				＼ 法人研修も承っております ／
			</p>
			<button onclick="openEeasy('戦略講座')">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/btn_app_free_sp.webp"
					type="image/webp">
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/btn_app_free_sp.png">
				<img loading="lazy" src="<?php echo $imgPath; ?>/btn_app_free.png" alt="まずは無料相談をする（日程調整ツールに遷移します）">
				</picture>
			</button>
			</li>
			<li>
			<a class="c-button--green" href="<?php echo home_url( '/registration' ); ?>">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/btn_app_course_sp.webp"
					type="image/webp">
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/btn_app_course_sp.png">
				<img loading="lazy" src="<?php echo $imgPath; ?>/btn_app_course.png" alt="いますぐ講座に申し込む（申込フォームに遷移します）">
				</picture>
			</a>
			</li>
		</ul>
		</div>
	</div>
	<section id="philosophy">
		<div class="image">
		<picture>
			<source srcset="<?php echo $imgPath; ?>/img_philosophy_image.webp" type="image/webp">
			<img loading="lazy" src="<?php echo $imgPath; ?>/img_philosophy_image.jpg" alt="">
		</picture>
		</div>
		<div class="wrap">
		<div class="inner">
			<div class="txt_box">
			<div class="ttl_box">
				<p class="en"><img loading="lazy" src="<?php echo $imgPath; ?>/txt_philosophy.svg" alt="PHILOSOPHY"></p>
				<h2 class="ja">理念</h2>
			</div>
			<p class="lead">今のデジタルマーケティングの現場では、広告やSEO、SNSといった、<br class="pc">目先の売上を求めるテクニックばかりが優先されてしまっています。</p>
			<p class="lead">そしてまた、巷のマーケティングスクールも、<br class="pc">目先の売上を伸ばすテクニック論に終始しているところがほとんどです。</p>
			<p class="lead">しかし、それだけでは成果が頭打ちになってしまいます。</p>
			<p class="catch">
				<picture>
				<source srcset="<?php echo $imgPath; ?>/img_philosophy_01.webp" type="image/webp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/img_philosophy_01.png"
					alt="継続的にお客様に愛され、売れ続けるためのブランドを作る。">
				</picture>
			</p>
			<p class="lead">これが、MERCが目指すマーケティングです。</p>
			<p class="lead">マーケティングはビジネスの根幹です。<br class="pc">ビジネスマンとして成長したいあなたのご参加をお待ちしております。</p>
			</div>
		</div>
		</div>
	</section>
	<section id="faq">
		<div class="wrap">
		<div class="ttl_box">
			<p class="en"><img loading="lazy" src="<?php echo $imgPath; ?>/txt_faq.svg" alt="FAQ"></p>
			<p class="ja">よくあるご質問</p>
		</div>
		<div class="faq_list">
			<div class="faq_clm">
			<div class="question_box">
				<p class="number"><img loading="lazy" src="<?php echo $imgPath; ?>/txt_q1.svg" alt="Q1."></p>
				<p class="question">オンラインで受講は可能ですか？</p>
			</div>
			<p class="answer">はい、オンラインの受講は可能です。<br>
				ワークショップは簡単に操作ができるシステムを活用しながら受講生同士で話し合い、作業が行えます。</p>
			</div>
			<div class="faq_clm">
			<div class="question_box">
				<p class="number"><img loading="lazy" src="<?php echo $imgPath; ?>/txt_q2.svg" alt="Q2."></p>
				<p class="question">受講に年齢制限はありますか？</p>
			</div>
			<p class="answer">年齢制限はございません。<br>
				基礎講座・特別講座を含めると、これまで200名以上の方に受講いただきましたが、中学生から50代後半の方まで幅広い年齢層の方が受講しております。</p>
			</div>
			<div class="faq_clm">
			<div class="question_box">
				<p class="number"><img loading="lazy" src="<?php echo $imgPath; ?>/txt_q3.svg" alt="Q3."></p>
				<p class="question">仕事や家事があるのですが、両立してスキルを身につけられますか？</p>
			</div>
			<p class="answer">問題なく両立できます。<br>
				基本的には教室での受講がベストですが、皆さまお仕事や家庭の事情がございますので、今までの受講生の方は、専門スタッフによる個別補講を行うことで最後までやりきれました。</p>
			</div>
			<div class="faq_clm">
			<div class="question_box">
				<p class="number"><img loading="lazy" src="<?php echo $imgPath; ?>/txt_q4.svg" alt="Q4."></p>
				<p class="question">マーケティングのことが全くわかりませんが、問題なく受講できますか？</p>
			</div>
			<p class="answer">はい、全く問題ございません。<br>
				ご自身で真剣に学び、講師に質問しながらコツコツ頑張れるという気持ちがあれば全く心配ありません。</p>
			</div>
			<div class="faq_clm">
			<div class="question_box">
				<p class="number"><img loading="lazy" src="<?php echo $imgPath; ?>/txt_q5.svg" alt="Q5."></p>
				<p class="question">講義動画の視聴期限はありますか？</p>
			</div>
			<p class="answer">動画の視聴期限はございません。<br>
				ただし、万が一事務局の都合により掲載サイトもしくは視聴ページが閉鎖される場合は、事前に告知の上別途視聴できるものをご提供いたします。</p>
			</div>
			<div class="faq_clm">
			<div class="question_box">
				<p class="number"><img loading="lazy" src="<?php echo $imgPath; ?>/txt_q6.svg" alt="Q6."></p>
				<p class="question">分割払いは可能でしょうか？</p>
			</div>
			<p class="answer">はい、可能です。<br>
				分割回数は各カード会社によって異なりますので、カード会社にお問い合わせください。</p>
			</div>
			<div class="faq_clm">
			<div class="question_box">
				<p class="number"><img loading="lazy" src="<?php echo $imgPath; ?>/txt_q7.svg" alt="Q7."></p>
				<p class="question">キャンセルに伴う返金は対応できますか？</p>
			</div>
			<p class="answer">我々のサポートにご満足いただけない場合、初回授業から1週間以内に全額返金いたします。初回授業から8日以上経過後は返金はできかねますので、ご了承ください。</p>
			</div>
			<div class="faq_clm">
			<div class="question_box">
				<p class="number"><img loading="lazy" src="<?php echo $imgPath; ?>/txt_q8.svg" alt="Q8."></p>
				<p class="question">領収書は発行できますか？</p>
			</div>
			<p class="answer">はい、領収書は事務局より発行させていただきます。<br>
				また、自己啓発費用として企業様がお金を負担してくれるケースもございますので、その際は柔軟に書面を発行させていただきます。</p>
			</div>
			<div class="faq_clm">
			<div class="question_box">
				<p class="number"><img loading="lazy" src="<?php echo $imgPath; ?>/txt_q9.svg" alt="Q9."></p>
				<p class="question">受講生コミュニティは有料ですか？</p>
			</div>
			<p class="answer">いいえ、無料です。<br>
				ただし、今後の運営方針の変更がある場合は、事前に告知いたします。</p>
			</div>
			<div class="faq_clm">
			<div class="question_box">
				<p class="number"><img loading="lazy" src="<?php echo $imgPath; ?>/txt_q10.svg" alt="Q10."></p>
				<p class="question">紹介割はありますか？</p>
			</div>
			<p class="answer">はい、ございます。<br>
				MERCスタッフや受講生・卒業生からのご紹介の場合は、入学金33,000円（税込）を割引させていただきます。</p>
			</div>
			<div class="faq_clm">
			<div class="question_box">
				<p class="number"><img loading="lazy" src="<?php echo $imgPath; ?>/txt_q11.svg" alt="Q11."></p>
				<p class="question">次回の開催はいつですか？</p>
			</div>
			<p class="answer">
				現在募集しているのは2023年12月開講になります。その後は2024年4月の開講を予定しております。具体的な日程はお問い合わせください。
			</p>
			</div>
		</div>
		</div>
	</section>
	<div class="app_box">
		<div class="wrap">
		<p class="ttl"><span class="inner">マーケティング戦略講座<br class="sp"><span class="bg">19期生募集中</span>4月開講</span></p>
		<ul class="c-button-wrapper btn">
			<li>
			<p class="c-button__lead-text">
				＼ 法人研修も承っております ／
			</p>
			<button onclick="openEeasy('戦略講座')">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/btn_app_free_sp.webp"
					type="image/webp">
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/btn_app_free_sp.png">
				<img loading="lazy" src="<?php echo $imgPath; ?>/btn_app_free.png" alt="まずは無料相談をする（日程調整ツールに遷移します）">
				</picture>
			</button>
			</li>
			<li>
			<a class="c-button--green" href="<?php echo home_url( '/registration' ); ?>">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/btn_app_course_sp.webp"
					type="image/webp">
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/btn_app_course_sp.png">
				<img loading="lazy" src="<?php echo $imgPath; ?>/btn_app_course.png" alt="いますぐ講座に申し込む（申込フォームに遷移します）">
				</picture>
			</a>
			</li>
		</ul>
		</div>
	</div>
	</main>

	<?php get_footer(); ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="<?php echo $jsPath; ?>/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo $jsPath; ?>/home.js"></script>
	<script src="<?php echo $jsPath; ?>/main.js"></script>
	<?php get_template_part( 'template-parts/eeasy/prod' ); ?>
</body>

</html>

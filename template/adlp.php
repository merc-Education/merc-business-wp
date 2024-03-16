<?php
/*
Template Name: ADLP（20240313〜）
*/
?>
<?php
$imgPath   = getChildThemePath( '/lp/adlp240306/images' );
$stylePath = getChildThemePath( '/lp/adlp240306/css' );
$jsPath    = getChildThemePath( '/lp/adlp240306/js' );

// スケジュール
$schedule_list = array(
	'<span class="pc-inline">ウェルカム</span>ガイダンス' => '4/17[水] 20:00-21:30',
	'第1回'                                       => '4/20[木] 10:00-15:00',
	'第2回'                                       => '5/2[木] 20:00-22:00',
	'第3回'                                       => '5/9[木] 20:00-22:00',
	'第4回'                                       => '5/16[木] 20:00-22:00',
	'第5回'                                       => '5/23[木] 20:00-22:00',
	'第6回'                                       => '5/30[木] 20:00-22:00',
	'第7回'                                       => '6/6[木] 20:00-22:00',
	'第8回'                                       => '6/13[木] 20:00-22:00',
	'第9回'                                       => '6/20[木] 20:00-22:00',
	'第10回'                                      => '6/27[木] 20:00-22:00',
	'第11回'                                      => '7/4[木] 20:00-22:00',
	'（予備日）'                                     => '7/11[木] 20:00-22:00',
);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">

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

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="転職に役立つWEBマーケティングスクールならMERC Education。実践形式で学ぶ社会人の学校。3ヶ月の講座で実務に活かせるスキルを習得！">
	<meta name="keywords" content="">
	<meta name="format-detection" content="telephone=no">

	<title>転職にも役立つWEBマーケティングスクール│すべての講座が実践形式</title>
	<!-- font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6684440/7875632/css/fonts.css" />
	<link rel="stylesheet" href="https://use.typekit.net/szq2aay.css">

	<link rel="stylesheet" type="text/css" href="<?php echo $stylePath; ?>/lib/magnific-popup.css" media="all">
	<link rel="stylesheet" type="text/css" href="<?php echo $stylePath; ?>/lib/slick.css" media="all">
	<link rel="stylesheet" type="text/css" href="<?php echo $stylePath; ?>/lib/slick-theme.css" media="all">
	<link rel="stylesheet" type="text/css" href="<?php echo $stylePath; ?>/common/base.css" media="all">
	<link rel="stylesheet" type="text/css" href="<?php echo $stylePath; ?>/top.css" media="all">
	<link rel="stylesheet" type="text/css" href="<?php echo $stylePath; ?>/override.css" media="all">
	<link rel="stylesheet" href="<?php echo getChildThemePath( '/assets/css/footer.css' ); ?>">

	<script src="//statics.a8.net/a8sales/a8sales.js"></script>
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T5MP9PG" height="0" width="0"
		style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div class="l-header">
	<header>
		<div class="header__inner">
		<div class="logo-wrap">
			<h1 class="h-logo"><a href="./"><img src="<?php echo $imgPath; ?>/common/logo.svg" width="254"
				alt="MERC Education"></a></h1>
		</div>
		<div class="h-btn nosp">
			<a href="<?php echo home_url( '/registration/ad' ); ?>" class="c-button -red -arrow c-hover">講座申込はこちら</a>
			<button onclick="openEeasy('広告運用者育成講座')" class="free c-button -black -arrow c-hover">無料相談はこちら</button>
		</div>
		<button type="button" class="drawer_button nopc">
			<span class="drawer_button__inner">
			<span class="drawer_bar"></span>
			<span class="drawer_bar"></span>
			<span class="drawer_bar"></span>
			</span>
		</button>
		<div class="nav_wrapper nopc">
			<p class="h-logo"><a href="./"><img src="<?php echo $imgPath; ?>/common/logo.svg" width="254"
				alt="MERC Education"></a></p>
			<nav>
			<ul class="gnav">
				<li class="gnav__items"><a href="#summary" class="smoothscroll">講座概要</a></li>
				<li class="gnav__items"><a href="#intro" class="smoothscroll">スクールの特徴</a></li>
				<li class="gnav__items"><a href="#points" class="smoothscroll">評価されているポイント</a></li>
				<li class="gnav__items"><a href="#voice" class="smoothscroll">受講者の声</a></li>
				<li class="gnav__items"><a href="#difference" class="smoothscroll">他スクールとの違い</a></li>
				<li class="gnav__items"><a href="#flow" class="smoothscroll">学習の流れ</a></li>
				<li class="gnav__items"><a href="#philosophy" class="smoothscroll">本講座にかける想い</a></li>
				<li class="gnav__items"><a href="#faq" class="smoothscroll">よくあるご質問</a></li>
			</ul>
			</nav>
			<div class="h-btn bgcol">
			<a href="<?php echo home_url( '/registration/ad' ); ?>"
				class="c-button -red -arrow c-hover">いますぐ講座に申し込む<span class="small">申込フォームに遷移します</span></a>
			<button onclick="openEeasy('広告運用者育成講座')" class="free c-button -gray -arrow c-hover">まずは無料相談をする<span
				class="small">日程調整ツールに遷移します</span></button>
			</div>
		</div>
		</div>
	</header>
	</div>
	<main>
	<div id="contents" class="main_cnts">
		<div class="sec-first">
		<section class="sec-fv">
			<h2 class="ttl">
			<ul class="fv__items">
				<li>リスティング広告</li>
				<li>ディスプレイ広告</li>
				<li>SNS広告</li>
				<li>タグマネージャー</li>
				<li>Google Analytics 4</li>
			</ul>
			<img class="fv__title nosp" src="<?php echo $imgPath; ?>/top/fv_title_pc.svg" class="switch"
				alt="本気でキャリアを切り拓く マーケティングスクールMERC Education「広告運用者育成講座」はじまる！">
			<img class="fv__title nopc" src="<?php echo $imgPath; ?>/top/fv_title_sp.svg" class="switch"
				alt="本気でキャリアを切り拓く マーケティングスクールMERC Education「広告運用者育成講座」はじまる！">
			<ol class="fv__points">
				<li class="fv__point">
				<div class="fv__point-num">
					<span class="en">Point</span>
					<span class="en">01</span>
				</div>
				<div class="fv__point-text">
					身に着くまで<br>
					徹底的に繰り返す<br>
					<span>圧倒的な入稿経験</span>
				</div>
				</li>
				<li class="fv__point">
				<div class="fv__point-num">
					<span class="en">Point</span>
					<span class="en">02</span>
				</div>
				<div class="fv__point-text">
					広告運用者必須の<br>
					<span>カスタマージャーニー</span><br>
					<span>STP分析</span>も<br>
					徹底解説
				</div>
				</li>
				<li class="fv__point">
				<div class="fv__point-num">
					<span class="en">Point</span>
					<span class="en">03</span>
				</div>
				<div class="fv__point-text">
					<span>卒業後も続く！</span><br>
					月１度の無料講座＆<br>
					マーケティング<br>
					コミュニティ
				</div>
				</li>
			</ol>
			</h2>
			<div class="fv-bg">
			<picture>
				<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/top/fv_bg_pc.webp" type="image/webp">
				<source media="(max-width: 767px)" srcset="<?php echo $imgPath; ?>/top/fv_bg_sp.webp" type="image/webp">
				<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/top/fv_bg_pc.jpg">
				<img src="<?php echo $imgPath; ?>/top/fv_bg_sp.jpg" alt="">
			</picture>
			</div>
		</section><!-- /.sec-fv -->

		<!-- cta2 -->
		<div class="cta2 has-bnr">
			<div class="careerup-bnr">
			<picture>
				<source media="(max-width: 767px)" srcset="<?php echo $imgPath; ?>/common/careerup-bnr-sp.png">
				<img src="<?php echo $imgPath; ?>/common/careerup-bnr.png"
				alt="経済産業省「リスキリングを通じたキャリアアップ支援事業」に採択されました！今なら受講料が最大70%キャッシュバック（最大348,600円）">
			</picture>
			</div>
			<div id="summary" class="l-inner">
			<h2 class="cta2-ttl">
				<span class="left">広告運用者育成講座</span>
				<span class="center">2期生募集中</span>
				<span class="right gt"><span class="num">4</span>月<span class="num">17</span>日START!</span>
			</h2>

			<div class="cta-schedule mod-schedule">
				<h3 class="cta-schedule-ttl mod-schedule-ttl sp">実施期間</h3>

				<div class="mod-schedule-wrapper">
				<button class="js-accordion-toggle mod-schedule-toggle" aria-controls="cta-schedule-1"
					aria-expanded="false">
					<p class="mod-schedule-toggle-txt">詳しい日程はこちら</p>
					<span class="mod-schedule-toggle-icon">
					<span></span>
					<span></span>
					</span>
				</button>
				<div id="cta-schedule-1" class="cta-schedule-box mod-schedule-box" aria-hidden="true">
					<div class="cta-schedule-box-in mod-schedule-box-in">
					<?php
					if ( ! empty( $schedule_list ) ) {
						$count = 0; // アイテムのカウントを初期化
						foreach ( $schedule_list as $key => $value ) {
							// 7アイテムごとに新たな<ul>を開始
							if ( $count % 7 == 0 ) {
								if ( $count > 0 ) {
									// 最初のループ以外で閉じタグを出力
									echo '</ul>';
								}
								// 新たな<ul>を開始
								echo '<ul class="cta-schedule-list mod-schedule-list">';
							}

							echo '<li class="cta-schedule-item mod-schedule-item">';
							echo '<span class="ttl">' . $key . '：</span>';
							echo '<span class="date">' . $value . '</span>';
							echo '</li>';

							++$count; // アイテムカウントをインクリメント
						}
						// 最後の<ul>を閉じる
						echo '</ul>';
					}
					?>
					</div>
				</div>
				</div>

				<div class="cta-price-box">
				<picture>
					<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/2403/cta-price-sp.svg"
					type="image/svg+xml">
					<img src="<?php echo $imgPath; ?>/2403/cta-price.svg"
					alt="費用：受講料49.8万円※（税込547,800円）＋入学金3万円（税込33,000円）">
				</picture>
				<p class="cta-price-box-caption">※リスキリング補助金で最大70%OFF！詳細は<a href="#reskilling" class="mod-link">こちら</a>
				</p>
				</div>
			</div>


			<div class="btn_wrap">
				<button onclick="openEeasy('広告運用者育成講座')" class="free c-button -gray c-hover">
				<span class="c-button-in">
					まずは無料相談をする<span class="small">日程調整ツールに遷移します</span>

				</span>
				<span class="arrow">
					<svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16">
					<path
						d="M600,76.256a1,1,0,0,1-.707-1.707l6.293-6.293-6.293-6.293a1,1,0,0,1,1.414-1.414l7,7a1,1,0,0,1,0,1.414l-7,7A1,1,0,0,1,600,76.256Z"
						transform="translate(-599 -60.256)" fill="#011B39" />
					</svg>
				</span>
				</button>
				<a href="<?php echo home_url( '/registration/ad' ); ?>" class="c-button -red c-hover">
				<span class="c-button-in">
					いますぐ講座に申し込む<span class="small">申込フォームに遷移します</span>
				</span>
				<span class="arrow">
					<svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16">
					<path
						d="M600,76.256a1,1,0,0,1-.707-1.707l6.293-6.293-6.293-6.293a1,1,0,0,1,1.414-1.414l7,7a1,1,0,0,1,0,1.414l-7,7A1,1,0,0,1,600,76.256Z"
						transform="translate(-599 -60.256)" fill="#d92a0f" />
					</svg>
				</span>
				</a>

			</div>
			</div>
		</div><!-- /.cta2 -->
		</div><!-- /.sec-first -->

		<section id="intro" class="intro top-layer">
		<div class="l-inner intro-in">
			<div class="intro-txtbox">
			<div class="intro-txtbox-in">
				<p class="intro-txt">
				<span class="logo">
					<img src="<?php echo $imgPath; ?>/2403/intro-logo.svg" alt="MERC Education">
				</span>は<br>受講生のみなさまに卒業後、<br><strong class="yellow">第一線で活躍</strong>できるようになって欲しい<br
					class="bsp">と願っています。<br>そのために提供するのは、<br><span class="bg-yellow">圧倒的な量と反復</span> <span
					class="bg-yellow">実践的な経験</span> <br class="bsp"><span class="bg-yellow">現場で得られる知識</span><br
					class="nbsp">です。<br>これらを体系的に学ぶことで<br>着実にスキルを身につけることが<br class="bsp">できます。
				</p>
			</div>

			</div>
			<div class="intro-img">
			<img src="<?php echo $imgPath; ?>/2403/intro-img.svg"
				alt="毎月の学習サイクル図：1.予習による知識のインプット。2.授業による手法のインプット。3.宿題による繰り返しの実践。4. フィードバックによる課題の解決・改善（1〜4のサイクル）。初心者でも安心のフォロー体制。授業外でもスラックで随時質問OK！">
			</div>
		</div>
		</section>

		<section id="points" class="points top-layer">
		<div class="points-in">
			<h2 class="points-ttl">
			<picture>
				<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/2403/points-ttl.svg"
				type="image/svg+xml">
				<img src="<?php echo $imgPath; ?>/2403/points-ttl-sp.svg" alt="受講生に評価されているポイント">
			</picture>
			</h2>

			<div class="point point-01">
			<div class="point-bg">
				<picture>
				<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/2403/point-01-bg.webp"
					type="image/webp">
				<img src="<?php echo $imgPath; ?>/2403/point-01-bg-sp.webp" alt="">
				</picture>
			</div>
			<div class="point-in">
				<div class="point-cont">
				<h3 class="point-heading">
					<span class="point-ttl gt">Point<span class="num">01</span></span>
					<span class="point-read"><span class="red">現役コンサルタントが</span><br>「身につく」にこだわった<br
						class="bsp">反復カリキュラム</span>
				</h3>

				<p class="point-txt">
					反復なくして定着はありません。ご自身で何度も思考・実践していただくことで、広告運用のスキルが定着します。初日に入稿～出稿まで経験済のため、常に俯瞰的な視野を持ちながら1つ1つの作業の理解を深めることができます。
				</p>

				<div class="point-01-block">
					<h4 class="point-01-block-ttl ttl-01">【講義の流れ】</h4>
					<picture>
					<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/2403/point-01-01.svg"
						type="image/svg+xml">
					<img src="<?php echo $imgPath; ?>/2403/point-01-01-sp.svg" alt="講義の流れの図。">
					</picture>
				</div>
				<div class="point-01-block">
					<h4 class="point-01-block-ttl ttl-02">【実際のカリキュラム】</h4>
					<picture>
					<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/2403/point-01-02.svg"
						type="image/svg+xml">
					<img src="<?php echo $imgPath; ?>/2403/point-01-02-sp.svg" alt="カリキュラムの概要図。">
					</picture>
				</div>

				<h4 class="point-01-block-subttl">\ 習得できるスキル /</h4>
				<?php
				$skills = array(
					'リスティング広告',
					'ディスプレイ広告',
					'SNS広告',
					'タグマネジメント',
					'アカウント改善',
					'配信シミュレーション',
					'市場拡張戦略',
					'ポジショニング戦略',
					'カスタマージャーニー<br>マップ',
					'GA4',
					'ヒートマップ',
					'エディター',
				);
				if ( ! empty( $skills ) ) :
					echo '<ul class="point-01-block-list">';
					foreach ( $skills as $skill ) {
						echo '<li class="point-01-block-item">' . $skill . '</li>';
					}
					echo '</ul>';
				endif;
				?>
				</div>
			</div>
			</div>

			<div class="point point-02">
			<div class="point-bg">
				<picture>
				<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/2403/point-02-bg.webp"
					type="image/webp">
				<img src="<?php echo $imgPath; ?>/2403/point-02-bg-sp.webp" alt="">
				</picture>
			</div>
			<div class="point-in">
				<div class="point-cont">
				<h3 class="point-heading">
					<span class="point-ttl gt">Point<span class="num">02</span></span>
					<span class="point-read">教材の内容が充実しているので<br class="bsp">初心者の方でも分かりやすい</span>
				</h3>

				<p class="point-txt">
					スタートアップから大手まで幅広い企業のマーケティングコンサル業務に従事し、活躍してきた現役マーケターである代表の福田自らが講義を担当。累計2,500名以上<sup>※</sup>の受講生を誇るマーケティングスクール「MERC
					Education」で指導してきた経験を活かし、受講生から好評のわかりやすい講義や質問への丁寧な対応を提供します。
				</p>

				<p class="point-caption">※MERC Educationの全講座の累計受講者数</p>

				<?php
				$point_02_items = array(
					array(
						'title' => '広告管理画面',
						'img'   => '2403/point-02-01',
						'txt'   => '広告管理画面のキャプチャを使用して教材を作成。初心者でも教材どおりに操作するだけで広告の設定ができます。',
					),
					array(
						'title' => '広告運用（基礎）',
						'img'   => '2403/point-02-02',
						'txt'   => 'アカウント構造や課金ロジックなど、広告の基礎から学習できるため初心者でも安心して受講できます。',
					),
					array(
						'title' => '広告運用（応用）',
						'img'   => '2403/point-02-03',
						'txt'   => '広告運用の現場でプロが使用する応用テクニックも多数ご紹介。現場で即戦力として活躍する力が身につきます。',
					),
					array(
						'title' => '戦略から考える広告運用',
						'img'   => '2403/point-02-04',
						'txt'   => '小手先のテクニックだけの作業者から脱却。マーケティング戦略を考えられるマーケターへ。',
					),
				);

				if ( ! empty( $point_02_items ) ) :
					echo '<ul class="point-02-list">';
					foreach ( $point_02_items as $item ) {
						echo '<li class="point-02-item">';
						echo '<h4 class="point-02-item-ttl">' . $item['title'] . '</h4>';
						echo '<div class="point-02-item-img">';
						echo '<picture>';
						echo '<img src="' . $imgPath . '/' . $item['img'] . '.webp" alt="">';
						echo '</picture>';
						echo '</div>';
						echo '<p class="point-02-item-txt">' . $item['txt'] . '</p>';
						echo '</li>';
					}
					echo '</ul>';
				endif;
				?>
				</div>
			</div>
			</div>

			<div class="point point-03">
			<div class="point-bg">
				<picture>
				<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/2403/point-03-bg.webp"
					type="image/webp">
				<img src="<?php echo $imgPath; ?>/2403/point-03-bg-sp.webp" alt="">
				</picture>
			</div>
			<div class="point-in">
				<div class="point-cont">
				<h3 class="point-heading">
					<span class="point-ttl gt">Point<span class="num">03</span></span>
					<span class="point-read">戦略から考える<br class="bsp">広告運用が学べる</span>
				</h3>

				<p class="point-txt">
					第一線で活躍する運用者になるためには運用の知識だけではなくマーケティング戦略に関する知識が不可欠となります。本講座では、広告運用者が学ぶべきマーケティング戦略の知識を体系的に学べるカリキュラムが用意されています。
				</p>

				<div class="point-03-ex">
					<p class="point-txt point-03-ex-ttl">【一例】</p>

					<?php
					$point_03_ex_items = array(
						array(
							'title' => '市場拡張戦略',
							'img'   => '2403/point-03-01-icon',
							'list'  => array(
								'ターゲットのリーチを広げるための<br>市場拡張戦略',
								'顧客の深層心理を探るための<br>リサーチテクニック',
								'インサイトを意識した広告文作成',
							),
						),
						array(
							'title' => 'ポジショニング戦略',
							'img'   => '2403/point-03-02-icon',
							'list'  => array(
								'プロが使う1歩進んだ競合分析<br>テクニックとフレーム',
								'フレームワークを用いた自社分析と<br>強みの発見',
								'消費者の認識の差を生み出す<br>ポジショニングテクニック',
							),
						),
						array(
							'title' => 'カスタマージャーニーマップ',
							'img'   => '2403/point-03-03-icon',
							'list'  => array(
								'プロモーションにおける<br class="nbsp">「タイミング」',
								'消費者購買行動モデルと<br>カスタマージャーニーマップ',
								'メディアプランニング論と<br>フレーム活用テクニック',
							),
						),
					);

					if ( ! empty( $point_03_ex_items ) ) :
						echo '<ul class="point-03-ex-list">';
						foreach ( $point_03_ex_items as $item ) {
							echo '<li class="point-03-ex-item">';
							echo '<div class="point-03-ex-item-heading">';
							echo '<div class="point-03-ex-item-icon">';
							echo '<img src="' . $imgPath . '/' . $item['img'] . '.svg" alt="">';
							echo '</div>';
							echo '<h4 class="point-03-ex-item-ttl">' . $item['title'] . '</h4>';
							echo '</div>';
							echo '<div class="point-03-ex-item-body">';
							echo '<ul class="point-03-ex-item-list">';
							foreach ( $item['list'] as $list ) {
								echo '<li class="point-03-ex-item-list-item">' . $list . '</li>';
							}
							echo '</ul>';
							echo '</div>';
							echo '</li>';
						}
						echo '</ul>';
					endif;
					?>
				</div>

				<div class="point-03-outro">
					<h4 class="point-03-outro-ttl">講義内容の<br class="nbsp">詳細</h4>
					<p class="point-03-outro-txt">
					MERC
					Educationは、体系的な思考を”すべての授業で実践形式で学べる”「マーケティング戦略講座」を2019年より開講。<br
						class="bsp">再現性のある確かな思考力・実践力が身につく授業形式で、個人の受講だけではなく法人向けの研修実績も多数、累計2,500名以上の方に受講いただいております。<br
						class="bsp">今回の「広告運用者育成講座」では、上記のエッセンスを凝縮し、広告に生きるマーケティング戦略をお伝えいたします。
					</p>
				</div>
				</div>
			</div>
			</div>

			<div class="point point-04">
			<div class="point-bg">
				<picture>
				<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/2403/point-04-bg.webp"
					type="image/webp">
				<img src="<?php echo $imgPath; ?>/2403/point-04-bg-sp.webp" alt="">
				</picture>
			</div>
			<div class="point-in">
				<div class="point-cont">
				<h3 class="point-heading">
					<span class="point-ttl gt">Point<span class="num">04</span></span>
					<span class="point-read">卒業後も続く無料コミュニティで<br class="bsp">ワークを繰り返すことで、<br>着実に手法を身につける</span>
				</h3>

				<p class="point-txt">
					マーケティング戦略は、繰り返し実践することで着実に身についていきます。MERC Education受講生限定のコミュニティ「MERC
					Guild」では、実務を通してマーケティングの学びを深められる機会を提供してます。卒業後もプロからのフィードバックを受けながら実務の中で生まれる疑問を解決し、さらなる成長を実現できます。
				</p>

				<div class="point-04-2col">
					<div class="point-04-2col-txtbox order-2">
					<h4 class="point-04-2col-ttl">過去イベント実績<span class="small">（一部抜粋）</span></h4>
					<ul class="point-04-2col-list">
						<li class="point-04-2col-list-item">
						<h5 class="point-04-2col-list-ttl">〈 応用講座 〉</h5>
						<p class="point-04-2col-list-txt">【Webサイトの問題解決思考とGoogleアナリ<br
							class="bsp">ティクス活用法】<br>第4回:問題と解決を定量化せよ</p>
						</li>
						<li class="point-04-2col-list-item">
						<p class="point-04-2col-list-txt">【Webサイトの問題解決思考とGoogleアナリ<br
							class="bsp">ティクス活用法】<br>第3回:深い仮説を立てよ</p>
						<h5 class="point-04-2col-list-ttl">〈 ワークショップ 〉</h5>
						<p class="point-04-2col-list-txt">CVR250%改善を生み出したLP制作とは</p>
						</li>
						<li class="point-04-2col-list-item">
						<p class="point-04-2col-list-txt">戦略思考に基づいたプロモーション企画提案</p>
						<h5 class="point-04-2col-list-ttl">マーケター交流会</h5>
						<p class="point-04-2col-list-txt">マーケティング戦略があると資金調達しやすくなるぞ、どこにお金を使うべきか</p>
						</li>
						<li class="point-04-2col-list-item">
						<p class="point-04-2col-list-txt">1対1での成約率は常に80%以上!法人・個人との商談で気持ちよくYESをもらうクロージングの極意</p>
						</li>
					</ul>
					</div>
					<div class="point-04-2col-img order-1">
					<img src="<?php echo $imgPath; ?>/2403/point-04-img.webp" alt="">
					</div>
				</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	</section>

	<section id="voice" class="sec-voice">
		<div class="l-inner">
		<h2 class="c-title">モニター講座を受講いただいた<br>皆さまからの声</h2>
		<p class="c-subtitle en02">Voice</p>
		<div class="voice_wrap">
			<div class="v-box">
			<h3 class="v-box__ttl">戦略講座と並行して<br>受講することで<br>広告運用を戦略的に<br>考えることができた</h3>
			<div class="v-box__img">
				<picture>
				<source srcset="<?php echo $imgPath; ?>/top/img01_voice.webp" type="image/webp">
				<img src="<?php echo $imgPath; ?>/top/img01_voice.jpg" alt="">
				</picture>
				<p class="name">IT業界/30代女性/T.Yさん</p>
			</div>
			<p class="v-box__txt">
				戦略講座と並行してて受講して大変かなと思いましたが、受けて良かったです！講義で学んだKPIや消費者インサイトなどの概念が運用の場ではどのように落とし込められるのかわかり理解が深まりました。<br>運用レポート画面を実際に見ながら、運用の良かったポイントと改善点のフィードバックをいただいたのもとても勉強になりました。他の受講生のレポートを見たり、フィードバックを聞けたのもすごく良かったです！
			</p>
			</div>
			<div class="v-box">
			<h3 class="v-box__ttl">つまずいた部分について<br>すぐに質問できたり<br>反復演習することで<br>着実に身についた</h3>
			<div class="v-box__img">
				<picture>
				<source srcset="<?php echo $imgPath; ?>/top/img02_voice.webp" type="image/webp">
				<img src="<?php echo $imgPath; ?>/top/img02_voice.jpg" alt="">
				</picture>
				<p class="name">アパレル業界/30代女性/S.Sさん</p>
			</div>
			<p class="v-box__txt">
				広告全体の概要やキーワード設計などの座学から、実際に運用を始めるために必要なアカウントの構築、GTMの設定などを講座内で実際に一緒に行うことができた点が良かったです。<br>さらに、実際に手を動かしてみてつまずいた部分について質問できる環境が整っており、とても助かりました。自分でも運用できる自信に繋がったと思います。
			</p>
			</div>
		</div>
		</div>
	</section><!-- /.sec-voice -->

	<section id="consultation" class="top-layer ct">
		<div class="ct-bg">
		<img src="<?php echo $imgPath; ?>/2403/ct-bg.webp" alt="">
		</div>
		<div class="ct-in">
		<div class="ct-subttl-wrap">
			<p class="ct-subttl">「無料相談」は登録カンタン30秒！</p>
			<p class="ct-subttl-bottom pc">※無理な勧誘は一切しません</p>
		</div>
		<h2 class="ct-ttl">気になることはどんどん、<br>担当のマーケターへご相談ください！</h2>
		<p class="ct-subttl-bottom sp">※無理な勧誘は一切しません</p>
		<div class="ct-list-wrap">
			<?php
			$ct_lists = array(
				array(
					'img' => '2403/ct-01',
					'alt' => '今の仕事にすぐ応用できるのかな…',
				),
				array(
					'img' => '2403/ct-02',
					'alt' => '授業やワークショップはついていけるのかな…',
				),
				array(
					'img' => '2403/ct-03',
					'alt' => '入会の前に一度体験をしてみたい',
				),
			);

			if ( ! empty( $ct_lists ) ) :
				echo '<ul class="ct-list">';
				foreach ( $ct_lists as $ct_list ) {
					echo '<li class="ct-item">';
					echo '<picture>';
					echo '<source srcset="' . $imgPath . '/' . $ct_list['img'] . '.webp" type="image/webp">';
					echo '<img src="' . $imgPath . '/' . $ct_list['img'] . '.png" alt="' . $ct_list['alt'] . '">';
					echo '</picture>';
					echo '</li>';
				}
				echo '</ul>';
			endif;
			?>
			<p class="ct-caption">など</p>
		</div>
		</div>
	</section>

	<div class="cta2">
		<div class="l-inner">
		<h2 class="cta2-ttl">
			<span class="left">広告運用者育成講座</span>
			<span class="center">2期生募集中</span>
			<span class="right gt"><span class="num">4</span>月<span class="num">17</span>日START!</span>
		</h2>
		<div class="btn_wrap">
			<button onclick="openEeasy('広告運用者育成講座')" class="free c-button -gray c-hover">
			<span class="c-button-in">
				まずは無料相談をする<span class="small">日程調整ツールに遷移します</span>

			</span>
			<span class="arrow">
				<svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16">
				<path
					d="M600,76.256a1,1,0,0,1-.707-1.707l6.293-6.293-6.293-6.293a1,1,0,0,1,1.414-1.414l7,7a1,1,0,0,1,0,1.414l-7,7A1,1,0,0,1,600,76.256Z"
					transform="translate(-599 -60.256)" fill="#011B39" />
				</svg>
			</span>
			</button>
			<a href="<?php echo home_url( '/registration/ad' ); ?>" class="c-button -red c-hover">
			<span class="c-button-in">
				いますぐ講座に申し込む<span class="small">申込フォームに遷移します</span>
			</span>
			<span class="arrow">
				<svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16">
				<path
					d="M600,76.256a1,1,0,0,1-.707-1.707l6.293-6.293-6.293-6.293a1,1,0,0,1,1.414-1.414l7,7a1,1,0,0,1,0,1.414l-7,7A1,1,0,0,1,600,76.256Z"
					transform="translate(-599 -60.256)" fill="#d92a0f" />
				</svg>
			</span>
			</a>

		</div>
		</div>
	</div><!-- /.cta2 -->

	<section id="price" class="price">
		<div class="price-imgbox">
		<img src="<?php echo $imgPath; ?>/2403/price-bg.webp" type="image/webp">
		</div>
		<div class="price-in">
		<div class="price-cont">
			<h2 class="price-ttl section-ttl">
			<span class="gt top">PRICE</span>
			<span class="bottom">受講料</span>
			</h2>
			<p class="price-price">
			<span class="price-price-top">
				<img src="<?php echo $imgPath; ?>/2403/price-price.svg" alt="月額20,750円〜">
			</span>
			<span class="price-price-bottom">（22,825円税込〜/月）</span>
			</p>
			<div class="price-otp">
			<p class="price-otp-in">一括でお支払いの場合：547,800円（税込）</p>
			</div>
			<p class="price-caption">
			※分割料金は24回払いを選択した場合の金額です。分割料金は目安です。分割回数やカード会社の分割手数料によって異なりますのでご注意ください。※別途、入学金33,000円（税込）・分割手数料が発生いたします。
			</p>
		</div>
		<ul class="price-merit">
			<li>
			<p class="price-merit-ttl">全額返金保証</p>
			<p class="price-merit-txt">我々はあなたの人生に寄り添い、あなたの成功を全力でサポートします。万が一、我々のサポートにご満足いただけない場合、<strong
				class="red">初回授業から1週間以内に全額返金いたします。</strong>
			</p>
			</li>
		</ul>
		</div>
	</section>

	<div id="reskilling" class="careerup">
		<div class="wrap">
		<div class="careerup-inner">
			<div class="careerup-top">
			<div class="careerup-logo nosp">
				<img src="<?php echo $imgPath; ?>/top/logo-meti.png" alt="経済産業省　リスキリングを通じたキャリアアップ支援事業">
			</div>
			<div class="careerup-ttl-wrap">
				<h2 class="careerup-ttl">新しいスキルで、<br class="nopc">新しいチャンスを。</h2>
				<div class="careerup-logo nopc">
				<img src="<?php echo $imgPath; ?>/top/logo-meti.png" alt="経済産業省　リスキリングを通じたキャリアアップ支援事業">
				</div>
				<p class="careerup-read">リスキリングを通じた<br class="nopc">キャリアアップ支援事業活用で</p>
			</div>
			</div>
			<div class="careerup-img-01">
			<picture>
				<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/top/careerup-01.svg">
				<img src="<?php echo $imgPath; ?>/top/careerup-01-sp.svg"
				alt="MERC Education 受講料「547,800円（税込）」➝最大70%（最大348,600円）*1 キャッシュバック。実質199,200円（税込）*2">
			</picture>
			<p class="att">※1.受講料498,000円（税別）の70%　<br class="nopc">※2.受講には、別途入学金33,000円（税込）がかかります。</p>
			</div>
			<div class="careerup-btn-wrap">
			<button class="careerup-btn" aria-controls="careerup-body-01" aria-expanded="false">
				<picture>
				<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/top/careerup-btn.png?240208">
				<img src="<?php echo $imgPath; ?>/top/careerup-btn-sp.png?240208"
					alt="リスキリングを通じたキャリアアップ支援事業についての詳細はこちら">
				</picture>
				<span class="careerup-btn-icon">
				<span></span>
				<span></span>
				</span>
			</button>
			</div>
			<div id="careerup-body-01" class="careerup-body" aria-hidden="true">
			<h2 class="ttl">「リスキリングを通じた<br class="nopc">キャリアアップ支援事業」に<br class="nopc">ついて</h2>
			<p class="txt">
				MERCEducationは「リスキリングを通じたキャリアアップ支援事業」（経済産業省）に採択されました。キャリアアップ支援を利用することで、受講料(税別)の最大70%のキャッシュバックを受けることが可能です。本事業の予算には限りがございますのでお早めにご検討ください。詳細については無料相談にてお伝えいたします。
			</p>
			<p class="txt">「リスキリングを通じたキャリアアップ支援事業」の公式HPは<a class="txtlink"
				href="https://careerup.reskilling.go.jp/worker/">こちら</a></p>
			<div class="img-01">
				<picture>
				<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/top/careerup-02.svg">
				<img src="<?php echo $imgPath; ?>/top/careerup-02-sp.svg"
					alt="受講終了で50%経産省からキャッシュバック、1年間終業で20%経産省からキャッシュバック。">
				</picture>
			</div>
			<div class="img-02">
				<picture>
				<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/top/careerup-01-l.svg">
				<img src="<?php echo $imgPath; ?>/top/careerup-01-sp.svg"
					alt="MERC Education 受講料「547,800円（税込）」➝最大70%（最大348,600円）*1 キャッシュバック。実質199,200円（税込）*2">
				</picture>
				<ol>
				<li>受講修了後、講座受講料の<br class="nopc">50%（249,000円）をキャッシュバック。</li>
				<li>受講を経て2025年3月31日までに転職し、その後1年間継続的に転職先に就業していることが確認できる場合、<br
					class="npsp">さらに講座受講料の20%（99,600円）をキャッシュバック。</li>
				</ol>
				<p class="att">※1.受講料498,000円（税別）の70%　<br class="nopc">※2.受講には、別途入学金33,000円（税込）<br class="nopc">がかかります。
				</p>
			</div>
			<h2 class="ttl">「リスキリングを通じた<br class="nopc">キャリアアップ支援事業」<br class="nopc">の流れ</h2>
			<p class="txt">
				リスキリングと労働移動の円滑化を一体的に進める観点から、在職者が自らのキャリアについて民間の専門家に相談できる「キャリア相談対応」、それを踏まえてリスキリング講座を受講できる「リスキリング提供」、それらを踏まえた「転職支援」までを一体的に実施します。
			</p>
			<div class="img-03">
				<picture>
				<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/top/careerup-03.svg">
				<img src="<?php echo $imgPath; ?>/top/careerup-03-sp.svg"
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

	<div class="introduction-wrap">
		<div class="wrap l-inner">
		<div class="introduction">
			<div class="inner">
			<div class="lead">
				<p>「友人・同僚と一緒に参加」</p>
				<p class="or">または</p>
				<p>「MERC Educationの受講生・<br class="sp">卒業生からのご紹介」で</p>
			</div>
			<p class="price_box">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/top/img_price_sp.webp"
					type="image/webp">
				<img src="<?php echo $imgPath; ?>/top/img_price.webp" alt="入学金33,000円（税込）→0円">
				</picture>
			</p>
			</div>
		</div>
		</div>
	</div>

	<div class="cta2">
		<div class="l-inner">
		<h2 class="cta2-ttl">
			<span class="left">広告運用者育成講座</span>
			<span class="center">2期生募集中</span>
			<span class="right gt"><span class="num">4</span>月<span class="num">17</span>日START!</span>
		</h2>
		<div class="btn_wrap">
			<button onclick="openEeasy('広告運用者育成講座')" class="free c-button -gray c-hover">
			<span class="c-button-in">
				まずは無料相談をする<span class="small">日程調整ツールに遷移します</span>

			</span>
			<span class="arrow">
				<svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16">
				<path
					d="M600,76.256a1,1,0,0,1-.707-1.707l6.293-6.293-6.293-6.293a1,1,0,0,1,1.414-1.414l7,7a1,1,0,0,1,0,1.414l-7,7A1,1,0,0,1,600,76.256Z"
					transform="translate(-599 -60.256)" fill="#011B39" />
				</svg>
			</span>
			</button>
			<a href="<?php echo home_url( '/registration/ad' ); ?>" class="c-button -red c-hover">
			<span class="c-button-in">
				いますぐ講座に申し込む<span class="small">申込フォームに遷移します</span>
			</span>
			<span class="arrow">
				<svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16">
				<path
					d="M600,76.256a1,1,0,0,1-.707-1.707l6.293-6.293-6.293-6.293a1,1,0,0,1,1.414-1.414l7,7a1,1,0,0,1,0,1.414l-7,7A1,1,0,0,1,600,76.256Z"
					transform="translate(-599 -60.256)" fill="#d92a0f" />
				</svg>
			</span>
			</a>

		</div>
		</div>
	</div><!-- /.cta2 -->

	<section id="difference" class="sec-difference">
		<div class="l-inner">
		<h2 class="c-title -white">他スクールとの違い</h2>
		<p class="c-subtitle -gold en02">Difference</p>
		<figure class="img-table">
			<picture>
			<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/top/img_tbl_pc.png">
			<img src="<?php echo $imgPath; ?>/top/img_tbl_sp.png" class="switch" alt="比較表">
			</picture>
			<span class="img-table__link">※リスキリング補助金で最大70%OFF！ 詳細は<a href="#reskilling">こちら</a></span>
		</figure>
		<div class="diff-table">
			<table>
			<thead>
				<tr>
				<th></th>
				<th></th>
				<th></th>
				</tr>
			</thead>
			</table>
		</div>
		</div>
	</section><!-- /.sec-difference -->

	<section id="flow" class="sec-flow">
		<div class="l-wrapper">
		<h2 class="c-title">学習の流れ</h2>
		<p class="c-subtitle en02">Flow</p>
		<div class="sp-slide flow_wrap">
			<div class="slide-img flow-box">
			<p class="step-txt en">STEP<span class="num">1</span></p>
			<figure>
				<picture>
				<source srcset="<?php echo $imgPath; ?>/top/img01_flow.webp" type="image/webp">
				<img src="<?php echo $imgPath; ?>/top/img01_flow.png" alt="">
				</picture>
			</figure>
			<h3 class="flow-box__ttl">オンライン無料相談</h3>
			<p class="flow-box__txt">現役マーケターが実際のお仕事内容やキャリアについて解説。</p>
			<p class="atten">※9:00-22:00までご相談可能です。<br class="nopc">(土日祝含)</p>
			</div>
			<div class="slide-img flow-box">
			<p class="step-txt en">STEP<span class="num">2</span></p>
			<figure>
				<picture>
				<source srcset="<?php echo $imgPath; ?>/top/img02_flow.webp" type="image/webp">
				<img src="<?php echo $imgPath; ?>/top/img02_flow.png" alt="">
				</picture>
			</figure>
			<h3 class="flow-box__ttl">お申し込み</h3>
			<p class="flow-box__txt">無料相談後、フォームに必要事項を記入の上、お申込ください。</p>
			</div>
			<div class="slide-img flow-box">
			<p class="step-txt en">STEP<span class="num">3</span></p>
			<figure>
				<picture>
				<source srcset="<?php echo $imgPath; ?>/top/img03_flow.webp" type="image/webp">
				<img src="<?php echo $imgPath; ?>/top/img03_flow.png" alt="">
				</picture>
			</figure>
			<h3 class="flow-box__ttl">受講開始</h3>
			<p class="flow-box__txt">毎週1回2時間の授業、週10時間に及ぶ宿題、毎週の質問会、アーカイブ動画でWeb広告について学習します。</p>
			</div>
			<div class="slide-img flow-box">
			<p class="step-txt en">STEP<span class="num">4</span></p>
			<figure>
				<picture>
				<source srcset="<?php echo $imgPath; ?>/top/img04_flow.webp" type="image/webp">
				<img src="<?php echo $imgPath; ?>/top/img04_flow.png" alt="">
				</picture>
			</figure>
			<h3 class="flow-box__ttl">卒業</h3>
			<p class="flow-box__txt">11回の授業でリスティング広告、ディスプレイ広告、マーケティングの戦略を学び、そして身につけて卒業！</p>
			</div>
			<div class="slide-img flow-box">
			<p class="step-txt en">STEP<span class="num">5</span></p>
			<figure>
				<picture>
				<source srcset="<?php echo $imgPath; ?>/top/img05_flow.webp" type="image/webp">
				<img src="<?php echo $imgPath; ?>/top/img05_flow.png" alt="">
				</picture>
			</figure>
			<h3 class="flow-box__ttl">無料で生涯学習</h3>
			<p class="flow-box__txt">MERC Educationの受講生・卒業生限定の無料コミュニティ「MERC Guild」で月1回以上イベントを開催。無料で学び続けることができます。</p>
			</div>
		</div>


		</div>
	</section><!-- /.sec-flow -->

	<div class="cta2">
		<div class="l-inner">
		<h2 class="cta2-ttl">
			<span class="left">広告運用者育成講座</span>
			<span class="center">2期生募集中</span>
			<span class="right gt"><span class="num">4</span>月<span class="num">17</span>日START!</span>
		</h2>
		<div class="btn_wrap">
			<button onclick="openEeasy('広告運用者育成講座')" class="free c-button -gray c-hover">
			<span class="c-button-in">
				まずは無料相談をする<span class="small">日程調整ツールに遷移します</span>

			</span>
			<span class="arrow">
				<svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16">
				<path
					d="M600,76.256a1,1,0,0,1-.707-1.707l6.293-6.293-6.293-6.293a1,1,0,0,1,1.414-1.414l7,7a1,1,0,0,1,0,1.414l-7,7A1,1,0,0,1,600,76.256Z"
					transform="translate(-599 -60.256)" fill="#011B39" />
				</svg>
			</span>
			</button>
			<a href="<?php echo home_url( '/registration/ad' ); ?>" class="c-button -red c-hover">
			<span class="c-button-in">
				いますぐ講座に申し込む<span class="small">申込フォームに遷移します</span>
			</span>
			<span class="arrow">
				<svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16">
				<path
					d="M600,76.256a1,1,0,0,1-.707-1.707l6.293-6.293-6.293-6.293a1,1,0,0,1,1.414-1.414l7,7a1,1,0,0,1,0,1.414l-7,7A1,1,0,0,1,600,76.256Z"
					transform="translate(-599 -60.256)" fill="#d92a0f" />
				</svg>
			</span>
			</a>

		</div>
		</div>
	</div><!-- /.cta2 -->

	<section id="philosophy" class="sec-philosophy bgcol">
		<div class="l-inner">
		<h2 class="c-title -white">本講座にかける想い</h2>
		<p class="c-subtitle -gold en02">Philosophy</p>
		<p class="c-text">アドテクノロジー技術の凄まじい発展に伴い、広告運用者は「機械学習」や「新メディア・配信メニューの提案」といった方法論にばかり終始するようになりました。</p>
		<p class="c-text">しかし、課題と向き合うことなく、方法論だけに頼るのはいかがなものかと私たちは思います。</p>
		<p class="c-text">マーケティングは決して技術的な側面だけで語れるものではありません。</p>
		<p class="c-text">自分が欲しいものを我慢できなくてついつい買ってしまうといった人間の心理的側面を語らずしてマーケティングを理解することはできないのです。</p>
		<p class="c-text">マーケティングを正しく理解するには『技術の変化』と『人間の価値観や心理の変化』双方の変化への適応が必要です。</p>
		<p class="c-text strong color02">本講座では、「広告運用」といった技術の側面と「戦略」といった心理の側面をお伝えいたします。</p>
		<p class="c-text">技術と心理の双方を学び、私たちと一緒にマーケターとしての一歩を踏み出しましょう！</p>
		<figure>
			<picture>
			<source srcset="<?php echo $imgPath; ?>/top/img_philosophy_pc.webp" type="image/webp">
			<img src="<?php echo $imgPath; ?>/top/img_philosophy_pc.png" class="switch"
				alt="授業はすべて代表自ら丹津します！ 株式会社MERC代表取締役 福田 正義">
			</picture>
		</figure>
		<div class="border-box">
			<h3 class="ttl en color02">PROFILE</h3>
			<p class="lead_text"><span>元Yahoo!マネージャーで<br class="nopc">100社以上の売上改善を実現！</span></p>
			<p class="text">
			2005年オーバーチュア株式会社に入社後、2008年にヤフー株式会社に転籍。リスティング広告の運用ロジックの構築業務、ヤフーディスプレイ広告(現YDA)の開発業務、広告代理店支援業務等、黎明期よりデジタルマーケティング業務に従事。その他、広告主を支援するコンサルティング部門の立ち上げや社内コンサルタント育成も手掛ける。<br>2008年に出版された「検索連動型広告
			オーバーチュア スポンサードサーチ
			公式ガイド」の共同執筆者でもある。<br>2012年株式会社オモロワークス創業、スタートアップから大手まで幅広い企業のマーケティングコンサル業務に従事。2018年ネオキャリアグループにてアドテク事業を手掛けるマーベリック株式会社に売却。その後、同社における執行役員に就任し新事業部門を立上げ、その事業に関しても2021年株式会社駅探に売却。<br>2022年、2017年に立ち上げた合同会社YuMKを株式会社MERCとして組織再編。第二創業として、MERCの経営に専念することを決断し、現任。
			</p>
		</div>
		</div>
	</section><!-- /.sec-philosophy -->

	<section id="faq" class="sec-faq">
		<div class="l-inner">
		<h2 class="c-title">よくあるご質問</h2>
		<p class="c-subtitle en02">FAQ</p>

		<h3 class="faq__ttl">対象について</h3>
		<div class="acd_btn">
			<p class="num en">Q1.</p>
			<p>マーケティングを学ぶのは初めてですが、問題ありませんか？</p>
		</div>
		<div class="acd_cnts">
			<p>
			はい、問題ありません。<br>マーケティング初学者であっても、マーケティングの原理原則を体得できるようにカリキュラムを構成しております。<br>また、授業の資料・録画を無料で閲覧いただけますので、何度でも復習することができます。
			</p>
		</div>
		<div class="acd_btn">
			<p class="num en">Q2.</p>
			<p>受講に年齢制限はありますか？</p>
		</div>
		<div class="acd_cnts">
			<p>年齢制限はございません。MERC
			Educationの講座は累計500名以上の方に受講いただきましたが、特に20代後半～30代の方に多く受講いただいております。経営者の方のご参加も多く、50代後半の方にも受講いただいております。</p>
		</div>
		<div class="acd_btn">
			<p class="num en">Q3.</p>
			<p>宿題はありますか？どのくらいの学習時間が必要ですか？</p>
		</div>
		<div class="acd_cnts">
			<p>毎週10時間程度の宿題がございます。学習時間としては、毎週約13時間（授業時間2時間+宿題10時間+質問会1時間）の確保をおすすめいたします。</p>
		</div>

		<h3 class="faq__ttl">お支払いについて</h3>
		<div class="acd_btn">
			<p class="num en">Q4.</p>
			<p>分割払いは可能ですか？</p>
		</div>
		<div class="acd_cnts">
			<p>
			はい、可能です。<br>クレジットカードで分割払いをお選びください。ただし、分割手数料や分割回数は各カード会社によって異なりますので、カード会社にお問い合わせください。<br>※銀行振込の場合は、一括払いのみとなります。
			</p>
		</div>

		<h3 class="faq__ttl">無料相談について</h3>
		<div class="acd_btn">
			<p class="num en">Q5.</p>
			<p>所要時間はどのくらいですか？</p>
		</div>
		<div class="acd_cnts">
			<p>30分～1時間になります。<br>皆さまのご状況に合わせてお話するため、個人差がございます。</p>
		</div>

		<h3 class="faq__ttl">「広告運用者育成講座」について</h3>
		<div class="acd_btn">
			<p class="num en">Q6.</p>
			<p>返金やキャンセルは可能ですか？</p>
		</div>
		<div class="acd_cnts">
			<p>はい、可能です。<br>万が一求める内容と異なる場合、初回授業から1週間以内のお申出であれば、広告の出稿費用3万円（税別）を差し引いたお支払い金額を返金いたします。</p>
		</div>
		<div class="acd_btn">
			<p class="num en">Q7.</p>
			<p>授業時間外であっても授業の資料や録画は閲覧できますか？</p>
		</div>
		<div class="acd_cnts">
			<p>はい、閲覧できます。<br>専用の会員サイトをご用意しておりますので、受講期間中・卒業後問わず、無制限で閲覧可能です。</p>
		</div>
		<div class="acd_btn">
			<p class="num en">Q8.</p>
			<p>マーケティング実践コミュニティ「MERC Guild」は有料ですか？</p>
		</div>
		<div class="acd_cnts">
			<p>いいえ、無料です。<br>ただし、新講座のモニター募集や交流会の飲食代などは有料となります。また、今後の運営方針の変更がある場合は、事前に告知いたします。</p>
		</div>
		</div>
	</section><!-- /.sec-faq -->

	<div class="careerup">
		<div class="wrap">
		<div class="careerup-inner">
			<div class="careerup-top">
			<div class="careerup-logo nosp">
				<img src="<?php echo $imgPath; ?>/top/logo-meti.png" alt="経済産業省　リスキリングを通じたキャリアアップ支援事業">
			</div>
			<div class="careerup-ttl-wrap">
				<h2 class="careerup-ttl">新しいスキルで、<br class="nopc">新しいチャンスを。</h2>
				<div class="careerup-logo nopc">
				<img src="<?php echo $imgPath; ?>/top/logo-meti.png" alt="経済産業省　リスキリングを通じたキャリアアップ支援事業">
				</div>
				<p class="careerup-read">リスキリングを通じた<br class="nopc">キャリアアップ支援事業活用で</p>
			</div>
			</div>
			<div class="careerup-img-01">
			<picture>
				<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/top/careerup-01.svg">
				<img src="<?php echo $imgPath; ?>/top/careerup-01-sp.svg"
				alt="MERC Education 受講料「547,800円（税込）」➝最大70%（最大348,600円）*1 キャッシュバック。実質199,200円（税込）*2">
			</picture>
			<p class="att">※1.受講料498,000円（税別）の70%　<br class="nopc">※2.受講には、別途入学金33,000円（税込）がかかります。</p>
			</div>
			<div class="careerup-btn-wrap">
			<button class="careerup-btn" aria-controls="careerup-body-02" aria-expanded="false">
				<picture>
				<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/top/careerup-btn.png?240208">
				<img src="<?php echo $imgPath; ?>/top/careerup-btn-sp.png?240208"
					alt="リスキリングを通じたキャリアアップ支援事業についての詳細はこちら">
				</picture>
				<span class="careerup-btn-icon">
				<span></span>
				<span></span>
				</span>
			</button>
			</div>
			<div id="careerup-body-02" class="careerup-body" aria-hidden="true">
			<h2 class="ttl">「リスキリングを通じた<br class="nopc">キャリアアップ支援事業」に<br class="nopc">ついて</h2>
			<p class="txt">
				MERCEducationは「リスキリングを通じたキャリアアップ支援事業」（経済産業省）に採択されました。キャリアアップ支援を利用することで、受講料(税別)の最大70%のキャッシュバックを受けることが可能です。本事業の予算には限りがございますのでお早めにご検討ください。詳細については無料相談にてお伝えいたします。
			</p>
			<p class="txt">「リスキリングを通じたキャリアアップ支援事業」の公式HPは<a class="txtlink"
				href="https://careerup.reskilling.go.jp/worker/">こちら</a></p>
			<div class="img-01">
				<picture>
				<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/top/careerup-02.svg">
				<img src="<?php echo $imgPath; ?>/top/careerup-02-sp.svg"
					alt="受講終了で50%経産省からキャッシュバック、1年間終業で20%経産省からキャッシュバック。">
				</picture>
			</div>
			<div class="img-02">
				<picture>
				<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/top/careerup-01-l.svg">
				<img src="<?php echo $imgPath; ?>/top/careerup-01-sp.svg"
					alt="MERC Education 受講料「547,800円（税込）」➝最大70%（最大348,600円）*1 キャッシュバック。実質199,200円（税込）*2">
				</picture>
				<ol>
				<li>受講修了後、講座受講料の<br class="nopc">50%（249,000円）をキャッシュバック。</li>
				<li>受講を経て2025年3月31日までに転職し、その後1年間継続的に転職先に就業していることが確認できる場合、<br
					class="npsp">さらに講座受講料の20%（99,600円）をキャッシュバック。</li>
				</ol>
				<p class="att">※1.受講料498,000円（税別）の70%　<br class="nopc">※2.受講には、別途入学金33,000円（税込）<br class="nopc">がかかります。
				</p>
			</div>
			<h2 class="ttl">「リスキリングを通じた<br class="nopc">キャリアアップ支援事業」<br class="nopc">の流れ</h2>
			<p class="txt">
				リスキリングと労働移動の円滑化を一体的に進める観点から、在職者が自らのキャリアについて民間の専門家に相談できる「キャリア相談対応」、それを踏まえてリスキリング講座を受講できる「リスキリング提供」、それらを踏まえた「転職支援」までを一体的に実施します。
			</p>
			<div class="img-03">
				<picture>
				<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/top/careerup-03.svg">
				<img src="<?php echo $imgPath; ?>/top/careerup-03-sp.svg"
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

	<section class="f-btm bgcol">
		<section class="sec-outline">
		<h2 class="c-title -white">「広告運用者育成講座 2期」<br class="nopc">募集概要</h2>
		<p class="c-subtitle -gold en02">Course Outline</p>
		<table class="c-tbl l-inner">
			<tr class="sp-w100">
			<th>実施期間</th>
			<td>
				<p class="en text"><span class="start_txt"><span class="strong">4</span>月<span
					class="strong">17</span>日<span class="strong">START!</span></span></p>
				<div class="mod-schedule-wrapper is-tp">
				<button class="js-accordion-toggle mod-schedule-toggle" aria-controls="cta-schedule-2"
					aria-expanded="false">
					<p class="mod-schedule-toggle-txt">詳しい日程はこちら</p>
					<span class="mod-schedule-toggle-icon">
					<span></span>
					<span></span>
					</span>
				</button>
				<div id="cta-schedule-2" class="cta-schedule-box mod-schedule-box" aria-hidden="true">
					<div class="cta-schedule-box-in mod-schedule-box-in">
					<?php
					if ( ! empty( $schedule_list ) ) {
						$count = 0; // アイテムのカウントを初期化
						foreach ( $schedule_list as $key => $value ) {
							// 7アイテムごとに新たな<ul>を開始
							if ( $count % 7 == 0 ) {
								if ( $count > 0 ) {
									// 最初のループ以外で閉じタグを出力
									echo '</ul>';
								}
								// 新たな<ul>を開始
								echo '<ul class="cta-schedule-list mod-schedule-list">';
							}

							echo '<li class="cta-schedule-item mod-schedule-item">';
							echo '<span class="ttl">' . $key . '：</span>';
							echo '<span class="date">' . $value . '</span>';
							echo '</li>';

							++$count; // アイテムカウントをインクリメント
						}
						// 最後の<ul>を閉じる
						echo '</ul>';
					}
					?>
					</div>
				</div>
				</div>
				<p class="atten font-bold mt15">
				※交流会の日程は変更になる可能性がございます。<br> ※1都3県以外に在住の方は、交通費を一部支給いたします。
				</p>
				</div>
			</td>
			</tr>
			<tr class="sp-w100">
			<th>実施場所</th>
			<td><span class="en">Zoom</span></td>
			</tr>
			<tr class="sp-w100">
			<th>費用</th>
			<td>
				<div class="fee-price">
				<picture>
					<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/top/pc-price.svg">
					<img src="<?php echo $imgPath; ?>/top/sp-price.svg" alt="受講料49.8万円（税込547,880円）※ ＋ 入学金3万円（税込み33,000円）">
				</picture>
				</div>
				<p class="fee-caption">※リスキリング補助金で最大70%OFF！ 詳細は<a class="c-hover" href="#reskilling">こちら</a></p>
				<a href=""></a>
			</td>
			</tr>
		</table>
		</section><!-- /.sec-outline -->
		<div class="cta2">
		<div class="l-inner">
			<h2 class="cta2-ttl">
			<span class="left">広告運用者育成講座</span>
			<span class="center">2期生募集中</span>
			<span class="right gt"><span class="num">4</span>月<span class="num">17</span>日START!</span>
			</h2>
			<div class="btn_wrap">
			<button onclick="openEeasy('広告運用者育成講座')" class="free c-button -gray c-hover">
				<span class="c-button-in">
				まずは無料相談をする<span class="small">日程調整ツールに遷移します</span>

				</span>
				<span class="arrow">
				<svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16">
					<path
					d="M600,76.256a1,1,0,0,1-.707-1.707l6.293-6.293-6.293-6.293a1,1,0,0,1,1.414-1.414l7,7a1,1,0,0,1,0,1.414l-7,7A1,1,0,0,1,600,76.256Z"
					transform="translate(-599 -60.256)" fill="#011B39" />
				</svg>
				</span>
			</button>
			<a href="<?php echo home_url( '/registration/ad' ); ?>" class="c-button -red c-hover">
				<span class="c-button-in">
				いますぐ講座に申し込む<span class="small">申込フォームに遷移します</span>
				</span>
				<span class="arrow">
				<svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16">
					<path
					d="M600,76.256a1,1,0,0,1-.707-1.707l6.293-6.293-6.293-6.293a1,1,0,0,1,1.414-1.414l7,7a1,1,0,0,1,0,1.414l-7,7A1,1,0,0,1,600,76.256Z"
					transform="translate(-599 -60.256)" fill="#d92a0f" />
				</svg>
				</span>
			</a>

			</div>
		</div>
		</div><!-- /.cta2 -->
	</section>
	</div><!-- /#contents.main_cnts -->
	</main>

	<?php get_footer(); ?>

	<script src="<?php echo $jsPath; ?>/lib/jquery-3.6.0.min.js"></script>
	<script src="<?php echo $jsPath; ?>/lib/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo $jsPath; ?>/lib/slick.js"></script>
	<script src="<?php echo $jsPath; ?>/common/common.js"></script>
	<?php get_template_part( 'template-parts/eeasy/prod' ); ?>
</body>

</html>

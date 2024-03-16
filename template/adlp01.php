<?php
/*
Template Name: ADLP01
*/
?>
<?php
$imgPath   = getChildThemePath( '/lp/adlp/images' );
$stylePath = getChildThemePath( '/lp/adlp/css' );
$jsPath    = getChildThemePath( '/lp/adlp/js' );
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
	<link rel="stylesheet" type="text/css" href="<?php echo $stylePath; ?>/2402add_top.css?240216" media="all">
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
				<li class="gnav__items"><a href="#point" class="smoothscroll">カリキュラムの特徴</a></li>
				<li class="gnav__items"><a href="#outline" class="smoothscroll">講座概要</a></li>
				<li class="gnav__items"><a href="#feature" class="smoothscroll">選ばれる3つのポイント</a></li>
				<li class="gnav__items"><a href="#difference" class="smoothscroll">他スクールとの違い</a></li>
				<li class="gnav__items"><a href="#voice" class="smoothscroll">受講者の声</a></li>
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

		<div class="cta2 has-bnr">
			<div class="careerup-bnr">
			<picture>
				<source media="(max-width: 767px)" srcset="<?php echo $imgPath; ?>/common/careerup-bnr-sp.png">
				<img src="<?php echo $imgPath; ?>/common/careerup-bnr.png"
				alt="経済産業省「リスキリングを通じたキャリアアップ支援事業」に採択されました！今なら受講料が最大70%キャッシュバック（最大348,600円）">
			</picture>
			</div>
			<div class="l-inner">
			<h2 class="cta2-ttl">
				<span class="left">広告運用者育成講座</span>
				<span class="center">2期生募集中</span>
				<span class="right">4月開講</span>
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
		</div><!-- /.sec-first -->

		<section class="sec02">
		<div class="l-inner">
			<h2 class="ttl">未経験でもマーケティング業務で<br>活躍できるようになって欲しいと<br class="nopc">本気で考えています。<br>そのために提供するのは、<br><span
				class="band">実務を再現した授業内容</span>と<span class="band">圧倒的な反復演習</span>です。</h2>
			<p class="lead-txt">運用スキルが身につくまで<span class="color01 strong">実践</span>し、<br>広告に生きる<span
				class="color01 strong">戦略</span>まで学ぶ<span class="nosp">、</span><br class="nopc">最高峰の<span
				class="color01 strong">スクール</span></p>
			<div class="flex">
			<div class="box">
				<h3 class="box__ttl">身につくまで繰り返しの実践</h3>
				<p class="box__subttl"><span class="c-line">毎週の学習サイクル</span></p>
				<figure>
				<picture>
					<source srcset="<?php echo $imgPath; ?>/top/img01_sec02.webp" type="image/webp">
					<img src="<?php echo $imgPath; ?>/top/img01_sec02.png" alt="">
				</picture>
				<figcaption></figcaption>
				</figure>
				<p class="note">【授　業】講義内容をインプット<br>【ワーク】講師の指導の元、手順を確認<br>【宿　題】週10時間の宿題で身につくまで繰り返し反復<br>【質問会】分からないところはすぐに質問
				</p>
			</div>
			<div class="ico">
				<picture>
				<source srcset="<?php echo $imgPath; ?>/top/icon_multiplied.webp" type="image/webp">
				<img src="<?php echo $imgPath; ?>/top/icon_multiplied.png" alt="×">
				</picture>

			</div>
			<div class="box">
				<h3 class="box__ttl">広告に生きるマーケティング戦略</h3>
				<p class="box__subttl"><span class="c-line">大手マーケティング企業が</span><span class="c-line">毎年リピートする講義内容</span>
				</p>
				<figure>
				<picture>
					<source srcset="<?php echo $imgPath; ?>/top/img02_sec02.webp" type="image/webp">
					<img src="<?php echo $imgPath; ?>/top/img02_sec02.png" alt="">
				</picture>
				</figure>
				<div class="modal_wrap">
				<div class="modal-btn"><a href="#popupCnts" class="open-popup-link c-hover">講義内容の詳細はこちら</a></div>
				<div id="popupCnts" class="remodal mfp-hide modal-open__content">
					<div class="modal-close remodal-close mfp-close"></div>
					<div class="modal_cnts">
					<p>MERC Educationは、体系的な思考を”すべての授業で実践形式で学べる<span class="sp-space">”「</span>マーケティング戦略講座」を2019年より開講。
					</p>
					<p>再現性のある確かな思考力・実践力が身につく授業形式で、個人の受講だけではなく法人向けの研修実績も多数<span>、累計2,500名以上の方に受講いただいております。</span></p>
					<p>今回の「広告運用者育成講座」では、上記のエッセンスを凝縮し、広告に生きるマーケティング戦略をお伝えいたします。</p>
					</div>
				</div>
				</div><!-- /.modal_wrap -->
			</div>
			</div>
		</div>
		</section><!-- /.sec02 -->

		<section id="outline" class="bgcol sec-outline">
		<h2 class="c-title -white">「広告運用者育成講座 2期」<br class="nopc">募集概要</h2>
		<p class="c-subtitle -gold en02">Course Outline</p>
		<table class="c-tbl l-inner">
			<tr class="sp-w100">
			<th>実施期間</th>
			<td>
				<p class="en text"><span class="start_txt"><span class="strong">4</span>月<span
					class="strong">17</span>日<span class="strong">START!</span></span></p>
				<p class="nopc sp-acd__btn">詳しい日程はこちら</p>
				<div class="c-schedule sp-acd__cnts">
				<div class="c-schedule__items-wrapper">
					<div class="c-schedule__items">
					<div class="c-schedule__item">
						<div class="c-schedule__item-title"><span class="nosp">ウェルカム</span>ガイダンス：</div>
						<div><span class="c-schedule__item-date">4/17 [水]</span><span class="time">20:00-21:30</span>
						</div>
					</div>
					<div class="c-schedule__item c-schedule__item--flex-start">
						<div class="c-schedule__item-title">第1回：</div>
						<div>
						<span class="c-schedule__item-date">4/20 [土]</span><span class="time">10:00-15:00</span>
						</div>
					</div>
					<div class="c-schedule__item">
						<div class="c-schedule__item-title">第2回：</div>
						<div><span class="c-schedule__item-date">4/25 [木]</span><span class="time">20:00-22:00</span>
						</div>
					</div>
					<div class="c-schedule__item">
						<div class="c-schedule__item-title">第3回：</div>
						<div><span class="c-schedule__item-date">5/2 [木]</span><span class="time">20:00-22:00</span>
						</div>
					</div>
					<div class="c-schedule__item">
						<div class="c-schedule__item-title">第4回：</div>
						<div><span class="c-schedule__item-date">5/9 [木]</span><span class="time">20:00-22:00</span>
						</div>
					</div>
					<div class="c-schedule__item">
						<div class="c-schedule__item-title">第5回：</div>
						<div><span class="c-schedule__item-date">5/16 [木]</span><span class="time">20:00-22:00</span>
						</div>
					</div>
					<div class="c-schedule__item">
						<div class="c-schedule__item-title">第6回：</div>
						<div><span class="c-schedule__item-date">5/23 [木]</span><span class="time">20:00-22:00</span>
						</div>
					</div>
					</div>
					<div class="c-schedule__items">
					<div class="c-schedule__item">
						<div class="c-schedule__item-title">第7回：</div>
						<div><span class="c-schedule__item-date">5/30 [木]</span><span class="time">20:00-22:00</span>
						</div>
					</div>
					<div class="c-schedule__item">
						<div class="c-schedule__item-title">第8回：</div>
						<div><span class="c-schedule__item-date">6/6 [木]</span><span class="time">20:00-22:00</span>
						</div>
					</div>
					<div class="c-schedule__item">
						<div class="c-schedule__item-title">第9回：</div>
						<div><span class="c-schedule__item-date">6/13 [木]</span><span class="time">20:00-22:00</span>
						</div>
					</div>
					<div class="c-schedule__item">
						<div class="c-schedule__item-title">第10回：</div>
						<div><span class="c-schedule__item-date">6/20 [木]</span><span class="time">20:00-22:00</span>
						</div>
					</div>
					<div class="c-schedule__item">
						<div class="c-schedule__item-title">第11回：</div>
						<div><span class="c-schedule__item-date">6/27 [木]</span><span class="time">20:00-22:00</span>
						</div>
					</div>
					<div class="c-schedule__item">
						<div class="c-schedule__item-title">予備日：</div>
						<div><span class="c-schedule__item-date">6/29 [土]</span><span class="time">10:00-12:00</span>
						</div>
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
					<img src="<?php echo $imgPath; ?>/top/sp-price.svg" alt="授業料49.8万円（税込547,880円）※ ＋ 入学金3万円（税込み33,000円）">
				</picture>
				</div>
				<p class="fee-caption">※リスキリング補助金で最大70%OFF！ 詳細は<a class="c-hover" href="#reskilling">こちら</a></p>
				<a href=""></a>
			</td>
			</tr>
		</table>
		</section><!-- /.sec-outline -->

		<section id="feature" class="sec-feature">
		<h2 class="c-title"><img src="<?php echo $imgPath; ?>/common/logo.svg" width="360" alt="MERC Education"><span
			class="small">が</span><br>選ばれる3つのポイント</h2>
		<p class="c-subtitle en02">Feature</p>
		<div class="f-box point01">
			<div class="f-box__img">
			<picture>
				<source srcset="<?php echo $imgPath; ?>/top/img01_point.webp" type="image/webp">
				<img src="<?php echo $imgPath; ?>/top/img01_point.jpg" alt="">
			</picture>
			</div>
			<div class="l-wrapper">
			<div class="f-box__txt">
				<div class="box__inner">
				<p class="txt_point en w-black">Point<span class="num">01</span></p>
				<h3 class="ttl">身につくまで実践する<br class="nopc">徹底カリキュラム</h3>
				</div>
				<div class="txt-box-wrap">
				<div class="txt-box -green delay2">
					<h4 class="ttl">初日から広告出稿まで実施</h4>
					<div class="box__inner02">
					<p class="text">
						すべてのweb広告の基本であるリスティング広告を1日目から入稿・出稿します。まずは配信してみることで、web広告の構造・流れをつかむことができ、学習効率を飛躍的に高めることができます。</p>
					</div>
				</div>
				<div class="txt-box -blue delay1">
					<h4 class="ttl">徹底した反復</h4>
					<div class="box__inner02">
					<p class="text">
						反復なくして定着はありません。ご自身で何度も思考・実践していただくことで、広告運用のスキルが定着します。初日に入稿～出稿まで経験済のため、常に俯瞰的な視野を持ちながら1つ1つの作業の理解を深めることができます。
					</p>
					</div>
				</div>
				<div class="txt-box -black">
					<h4 class="ttl">本気で学べる学習環境</h4>
					<div class="box__inner02">
					<p class="text">
						未経験の方でもしっかりと広告運用のスキルを身につけていただけるよう、実践のワークショップを繰り返し行います。またその定着を図るため、宿題と質問会で、更なる反復学習と疑問点の都度解決をしながら進めていくことができます。
					</p>
					</div>
				</div>
				</div>
			</div>
			</div>
		</div>
		<div class="f-box point02 -reverse">
			<div class="f-box__img">
			<picture>
				<source srcset="<?php echo $imgPath; ?>/top/img02_point.webp" type="image/webp">
				<img src="<?php echo $imgPath; ?>/top/img02_point.jpg" alt="">
			</picture>
			</div>
			<div class="l-wrapper">
			<div class="f-box__txt">
				<div class="box__inner">
				<p class="txt_point en w-black">Point<span class="num">02</span></p>
				<h3 class="ttl">戦略から考える<br class="nopc">広告運用が学べる</h3>
				</div>
				<div class="txt-box-wrap">
				<div class="txt-box -green delay2">
					<h4 class="ttl">市場拡張戦略</h4>
					<div class="box__inner02">
					<p class="text">
						今までのターゲティング市場での広告効果が落ちたとき、どのようにターゲットを拡張していくのか。市場細分化の方法とターゲット選定の仕方、ターゲットが正しいかどうかの検証方法を学ぶことで、広告効果に適切に対応できるようになります。
					</p>
					</div>
				</div>
				<div class="txt-box -blue delay1">
					<h4 class="ttl">ポジショニング戦略</h4>
					<div class="box__inner02">
					<p class="text">
						顧客に選ばれるためには、自社と競合の差異を明確にして、顧客にその差異を認識させることが必要です。競合が多い市場の中で、差異を生み出し、どのように広告に反映していくのかを学ぶことで、広告の成果を大きく高めることができるようになります。
					</p>
					</div>
				</div>
				<div class="txt-box -black">
					<h4 class="ttl">カスタマージャーニーマップ</h4>
					<div class="box__inner02">
					<p class="text">
						欲求段階の異なる顧客に同じ広告を配信しても、高い成果は見込めません。どのような欲求段階にある顧客に、どのようなメッセージ、広告手法で配信していくのかを学ぶことで、常に顧客と適切なコミュニケーションを取ることができるようになります。
					</p>
					</div>
				</div>
				</div>
			</div>
			</div>
		</div>
		<div class="f-box point03">
			<div class="f-box__img">
			<picture>
				<source srcset="<?php echo $imgPath; ?>/top/img03_point.webp" type="image/webp">
				<img src="<?php echo $imgPath; ?>/top/img03_point.jpg" alt="">
			</picture>
			</div>
			<div class="l-wrapper">
			<div class="f-box__txt">
				<div class="box__inner">
				<p class="txt_point en w-black">Point<span class="num">03</span></p>
				<h3 class="ttl">一生の仲間ができる<br class="nopc">無料コミュニティ<br class="nosp">「MERC Guild」</h3>
				</div>
				<div class="txt-box-wrap">
				<div class="txt-box -green delay2">
					<h4 class="ttl">卒業後も続くコミュニティ</h4>
					<div class="box__inner02">
					<p class="text">
						オンライン上のコミュニケーションはもちろん、リアルでの交流会も頻繁に実施。お互いに刺激しあえる環境だからこそ、受講生が一緒に起業してサービスをリリースしたり、受講生へのヒアリングをもとに商品開発したりといった、様々な相乗効果が生まれています。
					</p>
					</div>
				</div>
				<div class="txt-box -blue delay1">
					<h4 class="ttl">毎月無料のオリジナル講座の提供</h4>
					<div class="box__inner02">
					<p class="text">マーケティングは繰り返しの「実践」が成長の最短ルートです。MERC
						Educationでは毎月イベントを実施しています。自分一人で学んだりするのではなく、多くの人と思考し、対話し、知識を共有することで、圧倒的に短期間で成長できます。</p>
					</div>
				</div>
				<div class="txt-box -black">
					<h4 class="ttl">実務を手がけるMERC Job（※）</h4>
					<div class="box__inner02">
					<p class="text">MERC
						Job事務局の指導のもと、実際の案件を実務として手がけることができます。報酬が発生するため、スクールで学んだ内容をもとにプロフェッショナルとして案件に参画可能です。</p>
					<p class="note">※MERC Jobは現在準備中です。体制が整い次第の正式リリースとなります。</p>
					</div>
				</div>
				</div>
			</div>
			</div>
		</div>
		</section><!-- /.sec-feature -->

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

		<div id="reskilling" class="careerup">
		<div class="wrap">
			<div class="careerup-inner">
			<div class="careerup-top">
				<div class="careerup-logo nosp">
				<img loading="lazy" src="<?php echo $imgPath; ?>/top/logo-meti.png" alt="経済産業省　リスキリングを通じたキャリアアップ支援事業">
				</div>
				<div class="careerup-ttl-wrap">
				<h2 class="careerup-ttl">新しいスキルで、<br class="nopc">新しいチャンスを。</h2>
				<div class="careerup-logo nopc">
					<img loading="lazy" src="<?php echo $imgPath; ?>/top/logo-meti.png" alt="経済産業省　リスキリングを通じたキャリアアップ支援事業">
				</div>
				<p class="careerup-read">リスキリングを通じた<br class="nopc">キャリアアップ支援事業活用で</p>
				</div>
			</div>
			<div class="careerup-img-01">
				<picture>
				<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/top/careerup-01.svg">
				<img loading="lazy" src="<?php echo $imgPath; ?>/top/careerup-01-sp.svg"
					alt="MERC Education 受講料「547,800円（税込）」➝最大70%（最大348,600円）*1 キャッシュバック。実質199,200円（税込）*2">
				</picture>
				<p class="att">※1.受講料498,000円（税別）の70%　<br class="nopc">※2.受講には、別途入学金33,000円（税込）がかかります。</p>
			</div>
			<div class="careerup-btn-wrap">
				<button class="careerup-btn" aria-controls="careerup-body-01" aria-expanded="false">
				<picture>
					<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/top/careerup-btn.png?240208">
					<img loading="lazy" src="<?php echo $imgPath; ?>/top/careerup-btn-sp.png?240208"
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
					href="https://careerup.reskilling.go.jp/">こちら</a></p>
				<div class="img-01">
				<picture>
					<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/top/careerup-02.svg">
					<img loading="lazy" src="<?php echo $imgPath; ?>/top/careerup-02-sp.svg"
					alt="受講終了で50%経産省からキャッシュバック、1年間終業で20%経産省からキャッシュバック。">
				</picture>
				</div>
				<div class="img-02">
				<picture>
					<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/top/careerup-01-l.svg">
					<img loading="lazy" src="<?php echo $imgPath; ?>/top/careerup-01-sp.svg"
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
					<img loading="lazy" src="<?php echo $imgPath; ?>/top/careerup-03-sp.svg"
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

		<section class="sec-flow">
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
			<span class="right">4月開講</span>
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
				<img loading="lazy" src="<?php echo $imgPath; ?>/top/logo-meti.png" alt="経済産業省　リスキリングを通じたキャリアアップ支援事業">
				</div>
				<div class="careerup-ttl-wrap">
				<h2 class="careerup-ttl">新しいスキルで、<br class="nopc">新しいチャンスを。</h2>
				<div class="careerup-logo nopc">
					<img loading="lazy" src="<?php echo $imgPath; ?>/top/logo-meti.png" alt="経済産業省　リスキリングを通じたキャリアアップ支援事業">
				</div>
				<p class="careerup-read">リスキリングを通じた<br class="nopc">キャリアアップ支援事業活用で</p>
				</div>
			</div>
			<div class="careerup-img-01">
				<picture>
				<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/top/careerup-01.svg">
				<img loading="lazy" src="<?php echo $imgPath; ?>/top/careerup-01-sp.svg"
					alt="MERC Education 受講料「547,800円（税込）」➝最大70%（最大348,600円）*1 キャッシュバック。実質199,200円（税込）*2">
				</picture>
				<p class="att">※1.受講料498,000円（税別）の70%　<br class="nopc">※2.受講には、別途入学金33,000円（税込）がかかります。</p>
			</div>
			<div class="careerup-btn-wrap">
				<button class="careerup-btn" aria-controls="careerup-body-02" aria-expanded="false">
				<picture>
					<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/top/careerup-btn.png?240208">
					<img loading="lazy" src="<?php echo $imgPath; ?>/top/careerup-btn-sp.png?240208"
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
					href="https://careerup.reskilling.go.jp/">こちら</a></p>
				<div class="img-01">
				<picture>
					<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/top/careerup-02.svg">
					<img loading="lazy" src="<?php echo $imgPath; ?>/top/careerup-02-sp.svg"
					alt="受講終了で50%経産省からキャッシュバック、1年間終業で20%経産省からキャッシュバック。">
				</picture>
				</div>
				<div class="img-02">
				<picture>
					<source media="(min-width: 768px)" srcset="<?php echo $imgPath; ?>/top/careerup-01-l.svg">
					<img loading="lazy" src="<?php echo $imgPath; ?>/top/careerup-01-sp.svg"
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
					<img loading="lazy" src="<?php echo $imgPath; ?>/top/careerup-03-sp.svg"
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
				<p class="nopc sp-acd__btn">詳しい日程はこちら</p>
				<div class="c-schedule sp-acd__cnts">
					<div class="c-schedule__items-wrapper">
					<div class="c-schedule__items">
						<div class="c-schedule__item">
						<div class="c-schedule__item-title"><span class="nosp">ウェルカム</span>ガイダンス：</div>
						<div><span class="c-schedule__item-date">4/17 [水]</span><span class="time">20:00-21:30</span>
						</div>
						</div>
						<div class="c-schedule__item c-schedule__item--flex-start">
						<div class="c-schedule__item-title">第1回：</div>
						<div>
							<span class="c-schedule__item-date">4/20 [土]</span><span class="time">10:00-15:00</span>
						</div>
						</div>
						<div class="c-schedule__item">
						<div class="c-schedule__item-title">第2回：</div>
						<div><span class="c-schedule__item-date">4/25 [木]</span><span class="time">20:00-22:00</span>
						</div>
						</div>
						<div class="c-schedule__item">
						<div class="c-schedule__item-title">第3回：</div>
						<div><span class="c-schedule__item-date">5/2 [木]</span><span class="time">20:00-22:00</span>
						</div>
						</div>
						<div class="c-schedule__item">
						<div class="c-schedule__item-title">第4回：</div>
						<div><span class="c-schedule__item-date">5/9 [木]</span><span class="time">20:00-22:00</span>
						</div>
						</div>
						<div class="c-schedule__item">
						<div class="c-schedule__item-title">第5回：</div>
						<div><span class="c-schedule__item-date">5/16 [木]</span><span class="time">20:00-22:00</span>
						</div>
						</div>
						<div class="c-schedule__item">
						<div class="c-schedule__item-title">第6回：</div>
						<div><span class="c-schedule__item-date">5/23 [木]</span><span class="time">20:00-22:00</span>
						</div>
						</div>
					</div>
					<div class="c-schedule__items">
						<div class="c-schedule__item">
						<div class="c-schedule__item-title">第7回：</div>
						<div><span class="c-schedule__item-date">5/30 [木]</span><span class="time">20:00-22:00</span>
						</div>
						</div>
						<div class="c-schedule__item">
						<div class="c-schedule__item-title">第8回：</div>
						<div><span class="c-schedule__item-date">6/6 [木]</span><span class="time">20:00-22:00</span>
						</div>
						</div>
						<div class="c-schedule__item">
						<div class="c-schedule__item-title">第9回：</div>
						<div><span class="c-schedule__item-date">6/13 [木]</span><span class="time">20:00-22:00</span>
						</div>
						</div>
						<div class="c-schedule__item">
						<div class="c-schedule__item-title">第10回：</div>
						<div><span class="c-schedule__item-date">6/20 [木]</span><span class="time">20:00-22:00</span>
						</div>
						</div>
						<div class="c-schedule__item">
						<div class="c-schedule__item-title">第11回：</div>
						<div><span class="c-schedule__item-date">6/27 [木]</span><span class="time">20:00-22:00</span>
						</div>
						</div>
						<div class="c-schedule__item">
						<div class="c-schedule__item-title">予備日：</div>
						<div><span class="c-schedule__item-date">6/29 [土]</span><span class="time">10:00-12:00</span>
						</div>
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
					<img src="<?php echo $imgPath; ?>/top/sp-price.svg"
						alt="授業料49.8万円（税込547,880円）※ ＋ 入学金3万円（税込み33,000円）">
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
				<span class="right">4月開講</span>
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

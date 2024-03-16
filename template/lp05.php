<?php
/*
Template Name: LP（Ver.5）
*/
?>
<?php
$imgPath = getChildThemePath('/lp/front-page6/img');
$stylePath = getChildThemePath('/lp/front-page6/css');
$jsPath = getChildThemePath('/lp/front-page6/js');
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
	<title>マーケティング戦略スクールMERC｜戦略とデジタルを繋ぐ</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="keyword" content="マーケティング,スクール,講座,merc">
	<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6684440/7875632/css/fonts.css">
	<link rel="stylesheet" href="<?php echo $stylePath; ?>/lib/swiper.min.css">
	<link rel="stylesheet" href="<?php echo $stylePath; ?>/lib/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo $stylePath; ?>/styles.css">
	<link rel="stylesheet" href="<?php echo getChildThemePath("/assets/css/footer.css"); ?>">
	<link rel="icon" href="/favicon.ico">
	<script src="//statics.a8.net/a8sales/a8sales.js"></script>
</head>

<body>
	<header class="l-header">
		<div class="l-header-head">
			<h1 class="l-header-head-logo"><a href="./"><img src="<?php echo $imgPath; ?>/common/logo.svg" alt="MERC Education"></a></h1>
			<ul class="l-header-head-btn">
				<li class="l-header-head-btn__item"><a href="<?php echo home_url("/registration"); ?>">講座申込はこちら</a></li>
				<li class="l-header-head-btn__item"><button onclick="openEeasy()" class="free">無料相談はこちら</button></li>
			</ul>
			<div class="l-header-head-toggle js-toggle"></div>
		</div>
		<div class="l-header-menu">
			<nav class="l-header-menu__gnavi">
				<ul class="l-header-gnavi">
					<li class="l-header-gnavi__item"><a href="#voice" class="l-header-gnavi__link">卒業生の声</a></li>
					<li class="l-header-gnavi__item"><a href="#philosophy" class="l-header-gnavi__link">教育理念</a></li>
					<li class="l-header-gnavi__item"><a href="#advantages" class="l-header-gnavi__link">受講するメリット</a></li>
					<li class="l-header-gnavi__item"><a href="#comparison" class="l-header-gnavi__link">他サービスとの比較</a></li>
					<li class="l-header-gnavi__item"><a href="#process" class="l-header-gnavi__link">学習プロセス</a></li>
					<li class="l-header-gnavi__item"><a href="#flow" class="l-header-gnavi__link">学習の流れ</a></li>
					<li class="l-header-gnavi__item"><a href="#outline" class="l-header-gnavi__link">募集概要</a></li>
					<li class="l-header-gnavi__item"><a href="#faq" class="l-header-gnavi__link">よくあるご質問</a></li>
				</ul>
				<div class="l-header-menu__btn c-btn">
					<div class="c-btn__link">
						<a href="<?php echo home_url("/registration"); ?>">
							<p class="c-btn__txt">いますぐ講座に申し込む</p>
							<p class="c-btn__sub">申込フォームに遷移します</p>
						</a>
					</div>
					<div class="c-btn__link">
						<button onclick="openEeasy()" class="free">
							<p class="c-btn__txt">まずは無料相談をする</p>
							<p class="c-btn__sub">日程調整ツールに遷移します</p>
						</button>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<div class="l-overlay"></div>
	<main class="f-main">
		<div class="p-bg">
			<section class="p-mv">
				<div class="l-layout__l p-mv__block">
					<div class="p-mv-recruit">
						<p class="p-mv-recruit__ttl">マーケティング<br class="u-pc">戦略講座</p>
						<div class="p-mv-recruit-detail">
							<p class="p-mv-recruit-detail__number">18期生募集中</p>
							<p class="p-mv-recruit-detail__time">12月開講</p>
						</div>
					</div>
					<div class="p-mv-detail">
						<h2 class="p-mv-detail__ttl">マーケティング戦略を<br>ビジネスに</h2>
						<div class="p-mv-detail-outline">
							<p class="p-mv-detail-outline__ttl">3ヶ月で<br class="u-sp">体系的な思考力・実践力が身につく<br class="u-sp">マーケティングスクール</p>
							<ul class="p-mv-detail-outline-list">
								<li class="p-mv-detail-outline-list__item">差別化戦略</li>
								<li class="p-mv-detail-outline-list__item">コアバリュー</li>
								<li class="p-mv-detail-outline-list__item">ブランドエクイティ</li>
								<li class="p-mv-detail-outline-list__item">価格戦略</li>
								<li class="p-mv-detail-outline-list__item">プロモーション設計</li>
							</ul>
						</div>
						<div class="p-mv-detail-record">
							<picture class="p-mv-detail-record__img">
								<source srcset="<?php echo $imgPath; ?>/home/img_mv_txt_sp.png 1x,<?php echo $imgPath; ?>/home/img_mv_txt_sp@2x.png 2x" media="(max-width:767px)">
								<img src="<?php echo $imgPath; ?>/home/img_mv_txt_pc.png" srcset="<?php echo $imgPath; ?>/home/img_mv_txt_pc@2x.png 2x" alt="累計受講者数2,500名以上※1 明日から実務に活かせる93.3%※2">
							</picture>
							<p class="p-mv-detail-record__txt">※1.MERC Educationの累計受講者数（法人研修・セミナー含む） <br class="u-sp">※2.MERC Education受講生アンケートより</p>
						</div>
						<div class="p-mv-detail__btn c-btn">
							<div class="c-btn__link">
								<a href="<?php echo home_url("/registration"); ?>">
									<p class="c-btn__txt">いますぐ講座に申し込む</p>
									<p class="c-btn__sub">申込フォームに遷移します</p>
								</a>
							</div>
							<div class="c-btn__link">
								<button onclick="openEeasy()" class="free">
									<p class="c-btn__txt">まずは無料相談をする</p>
									<p class="c-btn__sub">日程調整ツールに遷移します</p>
								</button>
							</div>
						</div>
					</div>
				</div>
				<p class="p-mv__en">Marketing is Fun.</p>
			</section>
			<div class="p-intro">
				<div class="l-layout__m">
					<div class="p-intro__block">
						<p class="p-intro__txt"><img src="<?php echo $imgPath; ?>/common/logo.svg" alt="MERC Education"><span>は</span></p>
						<div class="p-intro-detail">
							<p class="p-intro-detail__pre">マーケティング戦略立案の</p>
							<p class="p-intro-detail__txt"><span>現場で使用</span>している<br class="u-sp"><span>体系的な思考</span>を学び<br><span>実践</span>するスクールです</p>
						</div>
					</div>
				</div>
			</div>

			<section class="p-advantages" id="advantages">
				<div class="p-advantages__bg">
					<div class="l-layout__l">
						<h2 class="c-heading">MERC Educationを<br class="u-sp">受講するメリット<span class="c-heading__en">ADVANTAGES</span></h2>
						<div class="p-advantages__block">
							<div class="p-advantages-head">
								<div class="p-advantages-head-number">
									<p class="p-advantages-head-number__num">01</p>
								</div>
								<h3 class="p-advantages-head__ttl">成果実証済の<br>体系的な思考プロセスを<br>学べる講義</h3>
								<p class="p-advantages-head__txt">MERC Educationでは、元Yahoo!コンサルマネージャーが100社以上の売上を改善してきた思考をそのままお伝えします。成果実証済の思考プロセスを体系的に学ぶことで、マーケティングの全体像を理解することができます。4P4CやSTPといった思考のフレームワークは、1つ1つを知っているだけではマーケティングの現場で使えるようになりません。それぞれの思考のフレームワークがどのようにつながっているのか、何を目的としてどこでどのように使うのか、どの粒度でやっていくのか理解することで、初めて現場で使えるようになります。<br><span>「マーケティングを点ではなく線で理解できる」</span><br class="u-pc">大手マーケティング企業が毎年リピートする理由がここにあります。</p>
							</div>
							<div class="p-advantages-01">
								<img src="<?php echo $imgPath; ?>/home/img_advantages_01_sp.svg" class="u-sp" alt="1部 環境分析編 2部 戦略立案編 3部 施策立案編">
								<div class="p-advantages-01-content">
									<div class="p-advantages-01-content__inner">
										<img src="<?php echo $imgPath; ?>/home/img_advantages_01-01_pc.png" srcset="<?php echo $imgPath; ?>/home/img_advantages_01-01_pc@2x.png 2x" alt="これから戦う場所を調べる">
										<h3 class="p-advantages-01__ttl"><span>1部</span>環境分析 編</h3>
										<ul class="p-advantages-01-list">
											<li class="p-advantages-01-list__item">マーケティング思考がないと真の課題は見えない</li>
											<li class="p-advantages-01-list__item">マーケティングのゴールはブランドプレファレンスを作ること</li>
											<li class="p-advantages-01-list__item">商品やサービスが選ばれるメカニズムとは</li>
											<li class="p-advantages-01-list__item">商品やサービスを育てるとはどういうことか</li>
											<li class="p-advantages-01-list__item">外部環境分析と内部環境分析の目的とは</li>
											<li class="p-advantages-01-list__item">自社の資産を4P4C分析で把握する</li>
											<li class="p-advantages-01-list__item">社会のトレンドを調査するPEST分析</li>
											<li class="p-advantages-01-list__item">お客様の行動と嗜好を調査するGCS分析</li>
											<li class="p-advantages-01-list__item">競合の定義と4P4C分析</li>
											<li class="p-advantages-01-list__item">市場機会と脅威を分析するクロスSWOT分析</li>
											<li class="p-advantages-01-list__item">お客様に選ばれる自社のコアバリューを特定する<br class="u-pc">プロセス</li>
										</ul>
									</div>
									<div class="p-advantages-01-content__inner">
										<img src="<?php echo $imgPath; ?>/home/img_advantages_01-02_pc.png" srcset="<?php echo $imgPath; ?>/home/img_advantages_01-02_pc@2x.png 2x" alt="どこで戦うかを決める">
										<h3 class="p-advantages-01__ttl"><span>2部</span>戦略立案 編</h3>
										<ul class="p-advantages-01-list">
											<li class="p-advantages-01-list__item">戦略の目的設定とは社会課題の解決</li>
											<li class="p-advantages-01-list__item">コトラーのSTP分析から戦略を構造化する</li>
											<li class="p-advantages-01-list__item">市場セグメンテーションとターゲティング</li>
											<li class="p-advantages-01-list__item">コアバリューに基づいたポジショニング</li>
											<li class="p-advantages-01-list__item">ペルソナ設計の目的と失敗事例</li>
											<li class="p-advantages-01-list__item">お客様の感情に寄り添ったポジショニングとストーリーで差をつける</li>
											<li class="p-advantages-01-list__item">戦略をお客様に伝えるブランドの構成要素</li>
											<li class="p-advantages-01-list__item">ブランドが提供する4つの価値</li>
											<li class="p-advantages-01-list__item">ブランドコンセプトとイメージボードの作り方</li>
										</ul>
									</div>
									<div class="p-advantages-01-content__inner">
										<img src="<?php echo $imgPath; ?>/home/img_advantages_01-03_pc.png" srcset="<?php echo $imgPath; ?>/home/img_advantages_01-03_pc@2x.png 2x" alt="どんな武器を使うかを決める">
										<h3 class="p-advantages-01__ttl"><span>3部</span>施策立案 編</h3>
										<ul class="p-advantages-01-list">
											<li class="p-advantages-01-list__item">プロモーションの5つの役割を理解する</li>
											<li class="p-advantages-01-list__item">プロモーションの仕組みを作るとは</li>
											<li class="p-advantages-01-list__item">プロモーション手法の5つの分類</li>
											<li class="p-advantages-01-list__item">プロモーション予算の考え方の基本</li>
											<li class="p-advantages-01-list__item">消費者心理学におけるニーズと動機の違い</li>
											<li class="p-advantages-01-list__item">消費者が抱える6つの行動阻害要因を解消する</li>
											<li class="p-advantages-01-list__item">カスタマージャーニーマップの目的と作り方</li>
											<li class="p-advantages-01-list__item">顧客階層と心理状態に施策を組み合わせる</li>
											<li class="p-advantages-01-list__item">施策の優先順位の決定方法</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="p-advantages__bg2">
					<div class="l-layout__l">
						<div class="p-advantages__block">
							<div class="p-advantages-head">
								<div class="p-advantages-head-number">
									<p class="p-advantages-head-number__num">02</p>
								</div>
								<h3 class="p-advantages-head__ttl">「自分で」できる<br>思考力・実践力が身につく<br>ワークショップ</h3>
								<p class="p-advantages-head__txt">市場価値の高いビジネスパーソンには、共通して「成果の再現性」があります。成果の再現性を高めるには、一方的な講義で「わかった」気になるのではなく、実践を踏まえて定着させ「できる」ようになる必要があります。<br><span>MERC Educationの授業は全て実践形式。</span><br>講義で学んだ後は、グループに分かれてすぐにワークショップ。少人数制のグループでアウトプットすることで、学習内容を定着させることができます。「勉強になったな」「ためになったな」で終わらせないための仕組みが構築されているから、現状のマーケティングの実務経験に関係なく、再現性のある確かな思考力・実践力を身につけることができます。<br>第11回・第12回の授業では、<span>卒業制作</span>として<span>実在するサービスのマーケティング戦略を0から立案。</span><br>まったくの無の状態から戦略を作りきる体験を通して、マーケティングの勘所をつかむことができます。</p>
							</div>
							<div class="p-advantages-02">
								<div class="p-advantages-02-list">
									<div class="p-advantages-02-list__item">
										<p class="p-advantages-02-list__ttl">自社分析</p>
										<picture class="p-advantages-02-list__img">
											<source srcset="<?php echo $imgPath; ?>/home/img_advantages_02-01_sp.png 1x,<?php echo $imgPath; ?>/home/img_advantages_02-01_sp@2x.png 2x" media="(max-width:767px)">
											<img src="<?php echo $imgPath; ?>/home/img_advantages_02-01_pc.jpg" srcset="<?php echo $imgPath; ?>/home/img_advantages_02-01_pc@2x.jpg 2x" alt="">
										</picture>
										<p class="p-advantages-02-list__txt">自社サービスが提供している価値は何か、誰のどのようなニーズに応えようとしているかを確認する。</p>
									</div>
									<div class="p-advantages-02-list__item">
										<p class="p-advantages-02-list__ttl">競合分析</p>
										<picture class="p-advantages-02-list__img">
											<source srcset="<?php echo $imgPath; ?>/home/img_advantages_02-02_sp.png 1x,<?php echo $imgPath; ?>/home/img_advantages_02-02_sp@2x.png 2x" media="(max-width:767px)">
											<img src="<?php echo $imgPath; ?>/home/img_advantages_02-02_pc.jpg" srcset="<?php echo $imgPath; ?>/home/img_advantages_02-02_pc@2x.jpg 2x" alt="">
										</picture>
										<p class="p-advantages-02-list__txt">競合を直接的、間接的に定義し、競合が市場に提供している価値を特定する。</p>
									</div>
									<div class="p-advantages-02-list__item">
										<p class="p-advantages-02-list__ttl">市場分析</p>
										<picture class="p-advantages-02-list__img">
											<source srcset="<?php echo $imgPath; ?>/home/img_advantages_02-03_sp.png 1x,<?php echo $imgPath; ?>/home/img_advantages_02-03_sp@2x.png 2x" media="(max-width:767px)">
											<img src="<?php echo $imgPath; ?>/home/img_advantages_02-03_pc.jpg" srcset="<?php echo $imgPath; ?>/home/img_advantages_02-03_pc@2x.jpg 2x" alt="">
										</picture>
										<p class="p-advantages-02-list__txt">自社が狙い得るニーズとその規模を市場調査により明らかにする。</p>
									</div>
									<div class="p-advantages-02-list__item">
										<p class="p-advantages-02-list__ttl">顧客分析</p>
										<picture class="p-advantages-02-list__img">
											<source srcset="<?php echo $imgPath; ?>/home/img_advantages_02-04_sp.png 1x,<?php echo $imgPath; ?>/home/img_advantages_02-04_sp@2x.png 2x" media="(max-width:767px)">
											<img src="<?php echo $imgPath; ?>/home/img_advantages_02-04_pc.jpg" srcset="<?php echo $imgPath; ?>/home/img_advantages_02-04_pc@2x.jpg 2x" alt="">
										</picture>
										<p class="p-advantages-02-list__txt">インタビューやアンケートなど様々な手法でターゲットとなり得るユーザーのインサイトを特定する。</p>
									</div>
									<div class="p-advantages-02-list__item">
										<p class="p-advantages-02-list__ttl">卒業制作</p>
										<picture class="p-advantages-02-list__img">
											<source srcset="<?php echo $imgPath; ?>/home/img_advantages_02-05_sp.png 1x,<?php echo $imgPath; ?>/home/img_advantages_02-05_sp@2x.png 2x" media="(max-width:767px)">
											<img src="<?php echo $imgPath; ?>/home/img_advantages_02-05_pc.jpg" srcset="<?php echo $imgPath; ?>/home/img_advantages_02-05_pc@2x.jpg 2x" alt="">
										</picture>
										<div class="p-process-btn"><a href="<?php echo $imgPath; ?>/home/img_advantages_02-05_popup.jpg" class="p-process-btn__link">図を拡大する</a></div>
										<p class="p-advantages-02-list__txt">体系的な思考プロセスを経て、実在するサービスのマーケティング戦略を0から立案する。</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="p-advantages__bg3">
					<div class="l-layout__l">
						<div class="p-advantages__block">
							<div class="p-advantages-head">
								<div class="p-advantages-head-number">
									<p class="p-advantages-head-number__num">03</p>
								</div>
								<h3 class="p-advantages-head__ttl">無料で生涯学習できる<br>マーケティング<br class="u-sp">実践コミュニティ<img src="<?php echo $imgPath; ?>/home/img_advantages_02-05_logo.svg" alt="MERC Guild"></h3>
								<p class="p-advantages-head__txt">マーケティングは実践の学問です。<br><span>繰り返しの「実践」が、成長の最短ルート。</span><br>自分一人で学んだり経験したりするのではなく、多くの人と思考し、対話し、知識を共有することで、圧倒的に短期間で成長することができます。そのため、MERC Educationの受講生・卒業生コミュニティ「MERC Guild」では、<br><span>毎月必ずイベントを実施。</span><br>オンライン・オフライン問わず、原則無料。お互いに刺激しあえる環境だからこそ、受講生が一緒に起業してサービスをリリースしたり、受講生へのヒアリングをもとに商品開発したりといった、様々な相乗効果が生まれています。</p>
							</div>
							<div class="p-advantages-03">
								<dl class="p-advantages-03-define">
									<dt class="p-advantages-03-define__ttl">2023.9月</dt>
									<dd class="p-advantages-03-define__txt">
										<dl class="p-advantages-03-content">
											<dt class="p-advantages-03-content__ttl">ワークショップ</dt>
											<dd class="p-advantages-03-content__txt">消費者理解を深める【デプスインタビュー実践編】</dd>
										</dl>
									</dd>
									<dt class="p-advantages-03-define__ttl">2023.8月</dt>
									<dd class="p-advantages-03-define__txt">
										<dl class="p-advantages-03-content">
											<dt class="p-advantages-03-content__ttl">ワークショップ</dt>
											<dd class="p-advantages-03-content__txt">ハイレベル競合分析</dd>
										</dl>
									</dd>
									<dt class="p-advantages-03-define__ttl">2023.7月</dt>
									<dd class="p-advantages-03-define__txt">
										<dl class="p-advantages-03-content">
											<dt class="p-advantages-03-content__ttl">応用講座</dt>
											<dd class="p-advantages-03-content__txt">【価格戦略】マーケティング戦略を意識した値付け戦略</dd>
										</dl>
									</dd>
									<dt class="p-advantages-03-define__ttl">2023.6月</dt>
									<dd class="p-advantages-03-define__txt">
										<dl class="p-advantages-03-content">
											<dt class="p-advantages-03-content__ttl">応用講座</dt>
											<dd class="p-advantages-03-content__txt">【マーケティングの知識に+α】＜入門＞非デザイナーのための「デザイン視点」</dd>
										</dl>
									</dd>
									<dt class="p-advantages-03-define__ttl">2023.5月</dt>
									<dd class="p-advantages-03-define__txt">
										<dl class="p-advantages-03-content">
											<dt class="p-advantages-03-content__ttl">交流会</dt>
											<dd class="p-advantages-03-content__txt">人材事業を手がけるスタートアップ取締役が語る「市場価値の高い」マーケターとは</dd>
											<dt class="p-advantages-03-content__ttl">交流会</dt>
											<dd class="p-advantages-03-content__txt">表参道オフィス移転パーティー（オフライン）</dd>
										</dl>
									</dd>
								</dl>
								<ul class="p-advantages-03-img">
									<li class="p-advantages-03-img__item"><img src="<?php echo $imgPath; ?>/home/img_advantages_03-01.jpg" srcset="<?php echo $imgPath; ?>/home/img_advantages_03-01@2x.jpg 2x" alt=""></li>
									<li class="p-advantages-03-img__item"><img src="<?php echo $imgPath; ?>/home/img_advantages_03-02.jpg" srcset="<?php echo $imgPath; ?>/home/img_advantages_03-02@2x.jpg 2x" alt=""></li>
									<li class="p-advantages-03-img__item"><img src="<?php echo $imgPath; ?>/home/img_advantages_03-03.jpg" srcset="<?php echo $imgPath; ?>/home/img_advantages_03-03@2x.jpg 2x" alt=""></li>
									<li class="p-advantages-03-img__item"><img src="<?php echo $imgPath; ?>/home/img_advantages_03-04.jpg" srcset="<?php echo $imgPath; ?>/home/img_advantages_03-04@2x.jpg 2x" alt=""></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="p-comparison" id="comparison">
				<div class="l-layout__l">
					<h2 class="c-heading">「体系的な学習」「実践機会」を提供できるのは<br>MERC Educationだけ<span class="c-heading__en">COMPARISON</span></h2>
					<div class="p-comparison__img">
						<img src="<?php echo $imgPath; ?>/home/img_comparison.png" srcset="<?php echo $imgPath; ?>/home/img_comparison@2x.png 2x" alt="">
					</div>
					<div class="p-process-btn"><a href="<?php echo $imgPath; ?>/home/img_comparison_popup.svg" class="p-process-btn__link">図を拡大する</a></div>
				</div>
			</section>
			<section class="p-process" id="process">
				<h2 class="c-heading">学習効率を最大化する<br class="u-sp">学習プロセス<span class="c-heading__en">PROCESS</span></h2>
				<picture class="p-process__img">
					<source srcset="<?php echo $imgPath; ?>/home/img_process_sp.png 1x,<?php echo $imgPath; ?>/home/img_process_sp@2x.png 2x" media="(max-width:767px)">
					<img src="<?php echo $imgPath; ?>/home/img_process_pc.png" srcset="<?php echo $imgPath; ?>/home/img_process_pc@2x.png 2x" alt="現役マーケターによる講義 ワークショップで 学習内容をアウトプット フィードバックでより高い精度へ即改善 「放課後」は講師とのとりとめもない話から思わぬ学び 講義スライド・授業録画で復習 授業前の「朝の会」">
				</picture>
				<div class="p-process-btn"><a href="<?php echo $imgPath; ?>/home/img_process_popup.svg" class="p-process-btn__link">図を拡大する</a></div>
			</section>

			<section class="p-voice" id="voice">
				<div class="l-layout__m">
					<h2 class="c-heading">体系的な学びが<br class="u-sp">ビジネスの現場で活きている例<span class="c-heading__en">VOICE OF GRADUATES</span></h2>
					<div class="p-voice-slide">
						<div class="p-voice__slider">
							<div class="p-voice-list swiper-wrapper">
								<div class="p-voice-list__item swiper-slide">
									<img src="<?php echo $imgPath; ?>/home/img_voice_01.jpg" srcset="<?php echo $imgPath; ?>/home/img_voice_01@2x.jpg 2x" class="p-voice-list__img" alt="">
									<p class="p-voice-list__ttl">「お客さん対自分」から<br class="u-sp">「お客さん対市場」へと視座の<br class="u-sp">高まりを実感</p>
									<p class="p-voice-list__age">営業職 / 31歳</p>
									<p class="p-voice-list__txt">大手企業にも研修を行うプロのコンサルタントが語る、「ここでしか聞けないリアルな原体験」が最大の学び</p>
									<div class="p-voice-list__btn"><a href="https://www.merc-education.jp/blog/interview/230402/" target="_blank">READ MORE</a></div>
								</div>
								<div class="p-voice-list__item swiper-slide">
									<img src="<?php echo $imgPath; ?>/home/img_voice_02.jpg" srcset="<?php echo $imgPath; ?>/home/img_voice_02@2x.jpg 2x" class="p-voice-list__img" alt="">
									<p class="p-voice-list__ttl">実践をまじえながら<br class="u-sp">人の深層心理を<br class="u-pc">考える<br class="u-sp">授業スタイルは唯一無二</p>
									<p class="p-voice-list__age">飲食店経営 / 38歳</p>
									<p class="p-voice-list__txt">お客様の深層心理をスタッフにも分かってもらった上で働いてもらったことで、価格を上げているわけではないのに売上が上がってきた</p>
									<div class="p-voice-list__btn"><a href="https://www.merc-education.jp/blog/interview/20221225/" target="_blank">READ MORE</a></div>
								</div>
								<div class="p-voice-list__item swiper-slide">
									<img src="<?php echo $imgPath; ?>/home/img_voice_03.jpg" srcset="<?php echo $imgPath; ?>/home/img_voice_03@2x.jpg 2x" class="p-voice-list__img" alt="">
									<p class="p-voice-list__ttl">授業内容をそのままトレースして<br>日本酒ECサイトを<br class="u-sp">リブランディング</p>
									<p class="p-voice-list__age">EC運営 / 30代</p>
									<p class="p-voice-list__txt">「これが有効」という施策の話ではなく、「なぜそこに至るのか」というマーケティングに対する根本的な理解ができた</p>
									<div class="p-voice-list__btn"><a href="https://www.merc-education.jp/blog/interview/20230322/" target="_blank">READ MORE</a></div>
								</div>
								<div class="p-voice-list__item swiper-slide">
									<img src="<?php echo $imgPath; ?>/home/img_voice_04.jpg" srcset="<?php echo $imgPath; ?>/home/img_voice_04@2x.jpg 2x" class="p-voice-list__img" alt="">
									<p class="p-voice-list__ttl">採用にも活きる思考。<br class="u-sp">10人規模の<br class="u-pc">町工場が応募者<br class="u-sp">年間100人以上</p>
									<p class="p-voice-list__age">町工場経営 / 30歳</p>
									<p class="p-voice-list__txt">考え方のベースができ、新しいことを考える時にマーケティングの思考は何でも使える、そしてまた使っているなと感じる</p>
									<div class="p-voice-list__btn"><a href="https://www.merc-education.jp/blog/interview/20230219/" target="_blank">READ MORE</a></div>
								</div>
								<div class="p-voice-list__item swiper-slide">
									<img src="<?php echo $imgPath; ?>/home/img_voice_05.jpg" srcset="<?php echo $imgPath; ?>/home/img_voice_05@2x.jpg 2x" class="p-voice-list__img" alt="">
									<p class="p-voice-list__ttl">マーケティングを武器に<br class="u-sp">コンテンツの<br class="u-pc">中身まで作れる<br class="u-sp">デザイナーに</p>
									<p class="p-voice-list__age">WEBデザイナー / 29歳</p>
									<p class="p-voice-list__txt">デザインに重きを置きながらも、体系的にマーケティングを学びアウトプットすることで、コンテンツの中身まで作れるようになった</p>
									<div class="p-voice-list__btn"><a href="https://www.merc-education.jp/blog/interview/20230413/" target="_blank">READ MORE</a></div>
								</div>
								<div class="p-voice-list__item swiper-slide">
									<img src="<?php echo $imgPath; ?>/home/img_voice_06.jpg" srcset="<?php echo $imgPath; ?>/home/img_voice_06@2x.jpg 2x" class="p-voice-list__img" alt="">
									<p class="p-voice-list__ttl">実践を繰り返すことで<br class="u-sp">「分かる」から<br class="u-pc">「できる」への<br class="u-sp">変化を実感</p>
									<p class="p-voice-list__age">マーケター / 32歳</p>
									<p class="p-voice-list__txt">「どういう背景があってこの商品を作っているのか」まで踏み込んで考えるようになり、より明確に差別化できるように</p>
									<div class="p-voice-list__btn"><a href="https://www.merc-education.jp/blog/interview/20230205/" target="_blank">READ MORE</a></div>
								</div>
							</div>
						</div>
						<div class="p-voice-slide__prev"><img src="<?php echo $imgPath; ?>/home/icon_slider_prev.png" alt=""></div>
						<div class="p-voice-slide__next"><img src="<?php echo $imgPath; ?>/home/icon_slider_next.png" alt=""></div>
					</div>
				</div>
			</section>
			<section class="p-philosophy" id="philosophy">
				<div class="l-layout__m p-philosophy__block">
					<div class="p-philosophy-detail">
						<h2 class="c-heading">教育理念<span class="c-heading__en">PHILOSOPHY</span></h2>
						<p class="p-philosophy-detail__txt">Web広告の細かな配信手法やSEOの細かなテクニック、新たなツールなど、マーケティングの「手段（=How）」は増え続けています。そして、時代と共に淘汰され続けています。</p>
						<p class="p-philosophy-detail__txt">マーケティングにおいて「手段（=How）」はもちろん重要ですが、「手段（=How）」にとらわれすぎると、本質を見誤り、つぶしがきかないマーケターになってしまいます。</p>
						<p class="p-philosophy-detail__txt--strong">「誰(=Who)」に「どんな価値(=What)」を届けるべきかを追求する。</p>
						<p class="p-philosophy-detail__txt">これがMERC Educationの一貫した教育理念です。</p>
						<p class="p-philosophy-detail__txt">市場や顧客・競合を徹底的に分析し、どの市場でどのように競合と差別化して自社ならではの価値を伝えるのかを決める、そしてサービスや価格・流通・プロモーションといった戦術を決定していく。</p>
						<p class="p-philosophy-detail__txt">この「環境分析→戦略立案→施策立案」といったマーケティングのプロセスを経ずして、再現性高く成果を出せることはありません。</p>
						<p class="p-philosophy-detail__txt">だからこそMERC Educationでは、このマーケティングのプロセスを重視し何度も繰り返し実践します。そして「自分で」できるようになる思考力・実践力を身につけていただきます。</p>
						<p class="p-philosophy-detail__txt">最新の手法や革新的なテクノロジーといった派手さはありません。</p>
						<p class="p-philosophy-detail__txt--strong">ただ誠実に顧客・サービスと向き合う。</p>
						<p class="p-philosophy-detail__txt">これが、マーケティングの王道です。<br>志を同じくする仲間のお申込をお待ちしております。</p>
						<p class="p-philosophy-detail-sign">株式会社MERC代表取締役<span class="p-philosophy-detail-sign__name">福田 正義</span></p>
					</div>
					<div class="p-philosophy-profile">
						<div class="p-philosophy-profile-img">
							<img src="<?php echo $imgPath; ?>/home/img_philosophy.jpg" alt="">
							<p class="p-philosophy-profile-img__ttl">授業はすべて<span>代表自ら担当</span>します！</p>
						</div>
						<p class="p-philosophy-profile__catch"><span>元Yahoo!マネージャーで</span><br><span>100社以上の売上改善を実現！</span></p>
						<h3 class="p-philosophy-profile__ttl">PROFILE</h3>
						<p class="p-philosophy-profile__txt">2005年オーバーチュア株式会社に入社後、2008年にヤフー株式会社に転籍。リスティング広告の運用ロジックの構築業務、ヤフーディスプレイ広告(現YDA)の開発業務、広告代理店支援業務等、黎明期よりデジタルマーケティング業務に従事。その他、広告主を支援するコンサルティング部門の立ち上げや社内コンサルタント育成も手掛ける。<br>2008年に出版された「検索連動型広告 オーバーチュア スポンサードサーチ 公式ガイド」の共同執筆者でもある。<br>2012年株式会社オモロワークス創業、スタートアップから大手まで幅広い企業のマーケティングコンサル業務に従事。2018年ネオキャリアグループにてアドテク事業を手掛けるマーベリック株式会社に売却。その後、同社における執行役員に就任し新事業部門を立上げ、その事業に関しても2021年株式会社駅探に売却。<br>2022年、2017年に立ち上げた合同会社YuMKを株式会社MERCとして組織再編。第二創業として、MERCの経営に専念することを決断し、現任。</p>
					</div>
				</div>
			</section>

			<section class="p-flow" id="flow">
				<h2 class="c-heading">学習の流れ<span class="c-heading__en">FLOW</span></h2>
				<ul class="p-flow-list">
					<li class="p-flow-list__item">
						<p class="p-flow-list__number">STEP 1</p>
						<img src="<?php echo $imgPath; ?>/home/img_flow_01.png" class="p-flow-list__img" alt="">
						<p class="p-flow-list__ttl">個別相談</p>
					</li>
					<li class="p-flow-list__item">
						<p class="p-flow-list__number">STEP 2</p>
						<img src="<?php echo $imgPath; ?>/home/img_flow_02.png" class="p-flow-list__img" alt="">
						<p class="p-flow-list__ttl">受講申し込み</p>
					</li>
					<li class="p-flow-list__item">
						<p class="p-flow-list__number">STEP 3</p>
						<img src="<?php echo $imgPath; ?>/home/img_flow_03.png" class="p-flow-list__img" alt="">
						<p class="p-flow-list__ttl">事務局の審査</p>
					</li>
					<li class="p-flow-list__item">
						<p class="p-flow-list__number">STEP 4</p>
						<img src="<?php echo $imgPath; ?>/home/img_flow_04.png" class="p-flow-list__img" alt="">
						<p class="p-flow-list__ttl">契約締結</p>
					</li>
					<li class="p-flow-list__item wh">
						<p class="p-flow-list__number">STEP 5</p>
						<img src="<?php echo $imgPath; ?>/home/img_flow_05.png" class="p-flow-list__img" alt="">
						<p class="p-flow-list__ttl">受講</p>
					</li>
					<li class="p-flow-list__item">
						<p class="p-flow-list__number">STEP 6</p>
						<img src="<?php echo $imgPath; ?>/home/img_flow_06.png" class="p-flow-list__img" alt="">
						<p class="p-flow-list__ttl">卒業</p>
					</li>
					<li class="p-flow-list__item wh">
						<p class="p-flow-list__number">STEP 7</p>
						<img src="<?php echo $imgPath; ?>/home/img_flow_07.png" class="p-flow-list__img" alt="">
						<p class="p-flow-list__ttl">コミュニティで<br>生涯学習</p>
					</li>
				</ul>
			</section>
			<section class="p-outline" id="outline">
				<div class="l-layout__s">
					<h2 class="c-heading">「マーケティング戦略講座18期」<br class="u-sp">募集概要<span class="c-heading__en">OUTLINE OF APPLICATION</span></h2>
					<table>
						<tr>
							<th>実施期間</th>
							<td>
								<div class="p-outline-time">
									<p class="p-outline-time__txt">ガイダンス：12/4（月）20:00-21:30</p>
								</div>
								<div class="p-outline-time">
									<p class="p-outline-time__txt">
										第1回：12/5（火）20:00-22:00<br>
										第2回：12/12（火）20:00-22:00<br>
										第3回：12/19（火）20:00-22:00<br>
										交流会：12/23（土）17:30-19:30<br>
										第4回：12/26（火）20:00-22:00</p>
									<p class="p-outline-time__txt">
										第5回：1/9（火）20:00-22:00<br>
										第6回：1/16（火）20:00-22:00<br>
										第7回：1/23（火）20:00-22:00<br>
										第8回：1/30（火）20:00-22:00<br>
										第9回：2/6（火）20:00-22:00</p>
									<p class="p-outline-time__txt">
										第10回：2/13（火）20:00-22:00<br>
										第11回：2/20（火）20:00-22:00<br>
										第12回：2/27（火）20:00-22:00<br>
										予備日：3/5（火）20:00-22:00</p>
								</div>
								<ul class="p-outline-notes">
									<li class="p-outline-notes__item">交流会はオフラインです。</li>
									<li class="p-outline-notes__item">全日程の受講が原則ですが、やむを得ず参加できない場合、希望があればスタッフが個別にフォローします。</li>
									<li class="p-outline-notes__item">授業の資料・録画は、受講期間中・卒業後ともに、無料で閲覧できます。</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>実施場所</th>
							<td>Zoom</td>
						</tr>
						<tr>
							<th>費用</th>
							<td>
								<p class="p-outline__price">授業料：<span>税抜</span>298,000円<br class="u-sp"><span>（税込327,800円）</span><span class="plus">+</span>入学金：<span>税抜</span>30,000円<br class="u-sp"><span>（税込33,000円）</span></p>
								<ul class="p-outline-notes">
									<li class="p-outline-notes__item">個別相談から一週間以内のお申込の場合、入学金は無料になります。</li>
									<li class="p-outline-notes__item">万が一求める内容と異なる場合、初回授業から1週間以内のお申出で全額返金いたします。</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>受講要件</th>
							<td class="small">ビジネス経験があればどなたでも受講いただけますが、主に下記のような方を対象としています。
								<ul class="p-outline-dots">
									<li class="p-outline-dots__item">マーケティングの実務経験に関わらず、ご自身の専門領域で実績を積んできた自負がある方</li>
									<li class="p-outline-dots__item">マーケティングの視点を養い、キャリアアップしていきたいと考えている方</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>定員</th>
							<td>20名
								<ul class="p-outline-notes">
									<li class="p-outline-notes__item">定員に達し次第、募集締切となります。</li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
			</section>
			<section class="p-faq" id="faq">
				<div class="l-layout__s">
					<h2 class="c-heading">よくあるご質問<span class="c-heading__en">FAQ</span></h2>
					<h3 class="p-faq__ttl">対象について</h3>
					<dl class="p-faq-define">
						<dt class="p-faq-define__ttl"><span>Q1.</span>マーケティングを学ぶのは初めてですが、問題ありませんか？</dt>
						<dd class="p-faq-define__txt">はい、問題ありません。<br>マーケティング初学者であっても、マーケティングの原理原則を体得できるようにカリキュラムを構成しております。<br>また、授業の資料・録画を無料で閲覧いただけますので、何度でも復習することができます。</dd>
						<dt class="p-faq-define__ttl"><span>Q2.</span>受講に年齢制限はありますか？</dt>
						<dd class="p-faq-define__txt">年齢制限はございません。<br>これまで500名以上の方に受講いただきましたが、特に20代後半～30代の方に多く受講いただいております。経営者の方のご参加も多く、50代後半の方にも受講いただいております。</dd>
						<dt class="p-faq-define__ttl"><span>Q3.</span>予習や宿題はありますか？</dt>
						<dd class="p-faq-define__txt">原則ございません。<br>ただし、授業の内容をしっかりと定着させるため、復習の時間を確保いただくことをおすすめします。</dd>
						<dt class="p-faq-define__ttl"><span>Q4.</span>どのくらいの学習時間が必要ですか？</dt>
						<dd class="p-faq-define__txt">授業の復習のため、週に1~2時間程度の学習時間を確保いただくことをおすすめします。</dd>
						<dt class="p-faq-define__ttl"><span>Q5.</span>仕事や家事があるのですが、両立してスキルを身につけられますか?</dt>
						<dd class="p-faq-define__txt">問題なく両立できます。<br>基本的にはリアルタイムでの受講がベストですが、皆さまお仕事や家庭の事情がございますので、今までの受講生の方は、専門スタッフによる個別補講を行うことで最後までやりきれました。</dd>
					</dl>
					<h3 class="p-faq__ttl">お支払いについて</h3>
					<dl class="p-faq-define">
						<dt class="p-faq-define__ttl"><span>Q6.</span>分割払いは可能ですか？</dt>
						<dd class="p-faq-define__txt">はい、可能です。<br>クレジットカードで分割払いをお選びください。ただし、分割手数料や分割回数は各カード会社によって異なりますので、カード会社にお問い合わせください。<br>※銀行振込の場合は、一括払いのみとなります。</dd>
					</dl>
					<h3 class="p-faq__ttl">無料相談について</h3>
					<dl class="p-faq-define">
						<dt class="p-faq-define__ttl"><span>Q7.</span>所要時間はどのくらいですか？</dt>
						<dd class="p-faq-define__txt">30分～1時間になります。<br>皆さまのご状況に合わせてお話するため、個人差がございます。</dd>
					</dl>
					<h3 class="p-faq__ttl">「マーケティング戦略講座」について</h3>
					<dl class="p-faq-define">
						<dt class="p-faq-define__ttl"><span>Q8.</span>返金やキャンセルは可能ですか？</dt>
						<dd class="p-faq-define__txt">はい、可能です。<br>万が一求める内容と異なる場合、初回授業から1週間以内のお申出であれば全額返金いたします。初回授業から8日以上経過後は返金はできかねますので、ご了承ください。</dd>
						<dt class="p-faq-define__ttl"><span>Q9.</span>授業時間外であっても授業の資料や録画は閲覧できますか？</dt>
						<dd class="p-faq-define__txt">はい、閲覧できます。<br>専用の会員サイトをご用意しておりますので、受講期間中・卒業後問わず、無制限で閲覧可能です。</dd>
						<dt class="p-faq-define__ttl"><span>Q10.</span>マーケティング実践コミュニティ「MERC Guild」は有料ですか？</dt>
						<dd class="p-faq-define__txt">いいえ、無料です。<br>ただし、新講座のモニター募集や交流会の飲食代などは有料となります。また、今後の運営方針の変更がある場合は、事前に告知いたします。</dd>
						<dt class="p-faq-define__ttl"><span>Q11.</span>紹介割はありますか？</dt>
						<dd class="p-faq-define__txt">はい、ございます。<br>「MERCスタッフや受講生・卒業生からのご紹介での受講」または「ご友人・同僚との同時受講」の場合、入学金33,000円(税込)を割引させていただきます。</dd>
						<dt class="p-faq-define__ttl"><span>Q12.</span>次回の開催はいつですか？</dt>
						<dd class="p-faq-define__txt">現在募集しているのは2023年12月開講になります。その後は2024年1月の開講を予定しております。具体的な日程はお問い合わせください。</dd>
					</dl>
				</div>
			</section>
			<div class="c-btn">
				<div class="c-btn__link">
					<a href="<?php echo home_url("/registration"); ?>">
						<p class="c-btn__txt">いますぐ講座に申し込む</p>
						<p class="c-btn__sub">申込フォームに遷移します</p>
					</a>
				</div>
				<div class="c-btn__link">
					<button onclick="openEeasy()" class="free">
						<p class="c-btn__txt">まずは無料相談をする</p>
						<p class="c-btn__sub">日程調整ツールに遷移します</p>
					</button>
				</div>
			</div>
		</div>
	</main>
	<?php get_footer(); ?>
	<div class="c-floating">
		<div class="c-floating__pagetop"><a href="#"><img src="<?php echo $imgPath; ?>/common/icon_pagetop.svg" alt="TOP"></a></div>
		<div class="c-floating-btn">
			<div class="c-floating-btn__link"><a href="<?php echo home_url("/registration"); ?>">講座申込はこちら</a></div>
			<div class="c-floating-btn__link"><button onclick="openEeasy()" class="free">無料相談はこちら</button></div>
		</div>
	</div>
	<script src="<?php echo $jsPath; ?>/jquery.js"></script>
	<script src="<?php echo $jsPath; ?>/lib/magnific-popup.js"></script>
	<script src="<?php echo $jsPath; ?>/lib/swiper.min.js"></script>
	<script src="<?php echo $jsPath; ?>/libs.js"></script>
	<?php get_template_part('template-parts/eeasy/prod'); ?>
</body>

</html>
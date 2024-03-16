<?php
/*
Template Name: LP（240306~）
*/
$imgPath   = getChildThemePath( '/lp/front-page240304/img' );
$stylePath = getChildThemePath( '/lp/front-page240304/css' );
$jsPath    = getChildThemePath( '/lp/front-page240304/js' );

// スケジュール
$schedule_list = array(
	'<span class="pc">ウェルカム</span>ガイダンス' => '4/5[金] 20:00-21:30',
	'第1回'                                => '4/9[火] 20:00-22:00',
	'第2回'                                => '4/16[火] 20:00-22:00',
	'第3回'                                => '4/23[火] 20:00-22:00',
	'第4回'                                => '4/30[火] 20:00-22:00',
	'第5回'                                => '5/7[火] 20:00-22:00',
	'第6回'                                => '5/14[火] 20:00-22:00',
	'第7回'                                => '5/21[火] 20:00-22:00',
	'第8回'                                => '5/28[火] 20:00-22:00',
	'第9回'                                => '6/4[火] 20:00-22:00',
	'第10回'                               => '6/11[火] 20:00-22:00',
	'第11回'                               => '6/18[火] 20:00-22:00',
	'第12回'                               => '6/25[火] 20:00-22:00',
	'（予備日）'                              => '7/2[火] 20:00-22:00',
);
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
	<link rel="stylesheet" href="<?php echo $stylePath; ?>/override.css">
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
			<li><a href="#points">評価されているポイント</a></li>
			<li><a href="#voice">卒業生インタビュー</a></li>
			<li><a href="#price">受講料</a></li>
			<li><a href="#flow">受講までの流れ</a></li>
			<li><a href="#lecturer">講師の紹介</a></li>
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
					<img src="<?php echo $imgPath; ?>/btn_app_free_sp.png" alt="まずは無料相談をする（日程調整ツールに遷移します）">
				</picture>
				</button>
			</li>
			<li>
				<a href="<?php echo home_url( '/registration' ); ?>">
				<picture>
					<source srcset="<?php echo $imgPath; ?>/btn_app_course_sp.webp" type="image/webp">
					<img src="<?php echo $imgPath; ?>/btn_app_course_sp.png" alt="いますぐ講座に申し込む（申込フォームに遷移します）">
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
			<span class="gt num">4</span>月<span class="gt num">5</span>日<span class="gt small">START!</span>
			</span>
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
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/price-sp.svg" type="image/svg+xml">
				<img src="<?php echo $imgPath; ?>/price.svg" alt="費用：授業料29.8万円※（税込327,800円）＋入学金3万円（税込33,000円）">
			</picture>
			<p class="cta-price-box-caption">※リスキリング補助金で最大70%OFF！詳細は<a href="#careerup" class="mod-link red">こちら</a></p>
			</div>
		</div>

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
			<span class="ttl-top">
			<img src="<?php echo $imgPath; ?>/logo-about-merc.svg" alt="マークエデュケーション" class="logo">は
			</span>
			<span class="ttl-bottom"><span class="large">本格的</span>な<span class="large">マーケ戦略</span>が<br
				class="bsp"><strong class="yellow">“明日、実務で使える”</strong>に<br>こだわったワークショップ中心の<br
				class="bsp">マーケティング戦略スクールです</span>
		</h2>
		<p class="cc">
			<strong class="cc-num">
			<span class="gt num">93.3</span>
			<span class="gt per">％</span>
			</strong>
			<span class="cc-txt">
			の受講生に<strong class="yellow">“明日、実務で使える”</strong>と<br>お答えいただいています。
			</span>
		</p>

		<div class="res">
			<h3 class="res-ttl">
			なぜ<span class="red">“明日、実務で使える”</span>のか？
			</h3>
			<div class="res-txt">
			<p class="res-txt-in">
				マーケティングのコンサル会社が<br class="bsp"><span class="underline">実際に実務で使用しているフレーム</span>を<br>そのまま授業で使用しているので、<br
				class="bsp">次の日から、すぐ実務で使えます。
			</p>
			</div>
		</div>
		</div>
	</section>

	<section id="students" class="st">
		<div class="wrap">
		<h2 class="st-ttl section-ttl">
			<span class="gt top red">STUDENTS</span>
			<span class="bottom">様々な職種の方に<br class="bsp">選んでいただいています！</span>
		</h2>

		<ul class="st-list">
			<li class="st-list-item">経営者</li>
			<li class="st-list-item">営業職</li>
			<li class="st-list-item">マーケ担当者</li>
			<li class="st-list-item">人事担当者</li>
		</ul>

		<p class="st-catch">その他、「デザイナー」や「広告運用担当」<br class="bsp">にも受講いただいています。</p>

		<div class="st-arrow">
			<img src="<?php echo $imgPath; ?>/st-arrow.svg" alt="">
		</div>

		<h3 class="st-subttl">
			<img src="<?php echo $imgPath; ?>/logo-st-merc.svg" alt="マークエデュケーション" class="logo"><br class="bsp">を受講したきっかけ！
		</h3>

		<?php
			$st_items = array(
				array(
					'img'   => 'st-01',
					'ttl'   => '経営者',
					'label' => '自社の戦略を見直したい',
					'txt'   => '自分でマーケティング力をつけて、自社製品の売れる戦略を考えられるようになりたい。',
				),
				array(
					'img'   => 'st-02',
					'ttl'   => '現役マーケター',
					'label' => '実はマーケティングを<br class="nbsp">学んだことがない',
					'txt'   => 'マーケティング部署だが、実務がプロモーションに寄りすぎているので、もっと体系的にマーケティングを身に付けたい。',
				),
			);

			if ( ! empty( $st_items ) ) :
				echo '<ul class="st-images">';
				foreach ( $st_items as $st_item ) :
					echo '<li class="st-images-item">';
					echo '<h4 class="st-images-item-ttl">' . $st_item['ttl'] . '</h4>';
					echo '<div class="st-images-item-label"><p class="st-images-item-label-in">' . $st_item['label'] . '</p></div>';
					echo '<div class="st-images-item-thumb">';
					echo '<img src="' . $imgPath . '/' . $st_item['img'] . '.webp" alt="" class="pc">';
					echo '<img src="' . $imgPath . '/' . $st_item['img'] . '-sp.webp" alt="" class="sp">';
					echo '</div>';
					echo '<p class="st-images-item-txt">' . $st_item['txt'] . '</p>';
					echo '</li>';
				endforeach;
				echo '</ul>';
			endif;
			?>

		<div class="st-link-wrap">
			<a href="#voice" class="st-link">「受講生の声」はこちら</a>
		</div>
		</div>
	</section>

	<section id="points" class="points">
		<div class="wrap" class="points-wrap">
		<h2 class="points-ttl">
			<picture>
			<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/points-ttl-sp.svg" type="image/svg+xml">
			<img src="<?php echo $imgPath; ?>/points-ttl.svg" alt="受講生に評価されているポイント">
			</picture>
		</h2>

		<div class="point">
			<h3 class="point-ttl ttl-01">
			<span class="num num-01">
				<img src="<?php echo $imgPath; ?>/point-01.svg" alt="POINT 01">
			</span>
			<span class="txt">マーケティング戦略を学ぶ<br class="bsp"><span class="red">本質的なカリキュラム</span></span>
			</h3>
			<p class="point-txt point-read">
			元Yahoo!マネージャーが100社以上の売上を改善してきた実務を体系的にカリキュラム化。<strong class="red">再現性高く成果を出せる本物の<br
				class="nbsp">思考力が身につきます。</strong>マーケティング戦略のプロセスに沿った授業内容で一連の流れを体験することができ、<br
				class="nbsp">卒業制作もあるので、授業全体を再確認することができ、身についた実感を得ることができます。
			</p>

			<div class="charts">
			<div class="chart chart-a">
				<h4 class="chart-ttl">【マーケティング戦略の全体像】</h4>
				<?php
				$chart_a = array(
					array(
						'ttl1' => 'これから戦う場所を<br class="nbsp">調べる',
						'ttl2' => '環境分析',
						'txt'  => '「自社」「競合」「市場」「顧客」の分析を通して、認識の差を作り出すために取り得る選択肢の方向性を洗い出します。',
					),
					array(
						'ttl1' => 'どこで戦うかを<br class="nbsp">決める',
						'ttl2' => '戦略立案',
						'txt'  => '勝てる市場を発見し、適切なターゲットを選定した上で、顧客にとって魅力的なブランドの方向性を言語化していきます。',
					),
					array(
						'ttl1' => 'どんな武器を使うかを<br class="nbsp">決める',
						'ttl2' => '施策立案',
						'txt'  => '立案した戦略(ターゲットやポジション、ブランドの方向性など)を基に、実行施策の計画を行い、具体的なアクションを作成します。',
					),
				);
				if ( ! empty( $chart_a ) ) {
					echo '<ol class="chart-a-list">';
					foreach ( $chart_a as $chart ) {
						echo '<li class="chart-a-item"><div class="chart-a-item-wrap">';
						echo '<h5 class="chart-a-item-ttl">' . $chart['ttl1'] . '</h5>';
						echo '<div class="chart-a-item-in">';
						echo '<h6 class="chart-a-item-subttl">【 ' . $chart['ttl2'] . ' 】</h6>';
						echo '<p class="chart-a-item-txt">' . $chart['txt'] . '</p>';
						echo '</div>';
						echo '</div></li>';
					}
					echo '</ol>';
				}
				?>
			</div>
			<div class="chart chart-b">
				<h4 class="chart-ttl">【実際のカリキュラム】</h4>
				<?php
				$chart_b = array(
					array(
						'group' => '',
						'list'  => array(
							array(
								'num'     => '第1回',
								'program' => array(
									'◎マーケティング理論',
								),
								'txt'     => 'マーケティング戦略の概論と全体像を事例を通して学習。最初に一気通貫で学ぶことで戦略の全体感がつかめます。',
							),
						),
					),
					array(
						'group' => '現状把握フェーズ',
						'list'  => array(
							array(
								'num'     => '第2回',
								'program' => array(
									'◎目標の確認',
									'◎現状のSTPP分析<span class="red label">弊社オリジナル</span>',
								),
								'txt'     => 'STP分析を改良した戦略構築フレーム。戦略構築に必要な現状把握をどのように行うべきかを学習します。',
							),
							array(
								'num'     => '第3回',
								'program' => array(
									'◎市場分析',
									'◎自社分析',
									'◎競合分析',
								),
								'txt'     => '標的市場の調査と評価。自社分析のフレームを学習し競合との類似ポイントの見極め及び競合調査シートの作成を実施。',
							),
							array(
								'num'     => '第4回',
								'program' => array(
									'◎顧客分析',
								),
								'txt'     => 'ターゲット顧客分析とリサーチ手法の学習。インサイトに辿り着くためのデプスインタビュー調査フローを学習します。',
							),
							array(
								'num'     => '第5回',
								'program' => array(
									'◎現状把握まとめ',
								),
								'txt'     => '要件整理のフレームワークを活用して戦略フェーズにつながる考察を得ます。',
							),
						),
					),
					array(
						'group' => '戦略フェーズ',
						'list'  => array(
							array(
								'num'     => '第6回',
								'program' => array(
									'◎新サービス候補の洗い出し',
									'◎STPP分析',
									'◎新サービスの優先順位の決定',
								),
								'txt'     => '現状把握を通して得られた考察を基に、新たにSTPP分析を実施。戦略パターンを複数作成していきます。',
							),
							array(
								'num'     => '第7回',
								'program' => array(
									'◎ブランドの方向性の決定',
								),
								'txt'     => '魅力的なブランド設計のためのブランド論を学び、ステートメント・プロポジションの構築を行います。戦略に基づく施策を立案するための、戦略構築シートを設計します。',
							),
						),
					),
					array(
						'group' => '施策検討フェーズ',
						'list'  => array(
							array(
								'num'     => '第8回',
								'program' => array(
									'◎4P（製品）',
									'◎4P（価格）',
								),
								'txt'     => '顧客視点に基づく製品・サービス設計手法と、価格戦略の構築法について学びます。',
							),
							array(
								'num'     => '第9回',
								'program' => array(
									'◎4P（流通）',
									'◎4P（プロモーション①）',
								),
								'txt'     => '流通戦略とプロモーションの原則を学習。プロモーションの5原則、販促の4原則など、基本的な考え方を学習。',
							),
							array(
								'num'     => '第10回',
								'program' => array(
									'◎4P（プロモーション②）',
								),
								'txt'     => 'プロモーション計画に必要なフレームを通して具体的なプロモーションプランの立案に挑戦します。',
							),
						),
					),
					array(
						'group' => '',
						'list'  => array(
							array(
								'num'     => '第11回',
								'program' => array(
									'卒業制作<span class="small">（中間報告）</span>',
								),
								'txt'     => 'これまで学習してきた内容を基に、マーケティング戦略の構築を一から行います。',
							),
							array(
								'num'     => '第12回',
								'program' => array(
									'卒業制作<span class="small">（完成・フィードバック）</span>',
								),
								'txt'     => '企画を発表してもらい、それに対し講師がフィードバックを行います。',
							),
						),
					),
				);
				if ( ! empty( $chart_b ) ) :
					echo '<ol class="chart-b-body">';
					foreach ( $chart_b as $group ) :
						echo '<li class="chart-b-group">';
						if ( ! empty( $group['group'] ) ) {
							echo '<h5 class="chart-b-group-ttl">〈 ' . $group['group'] . ' 〉</h5>';
						}
						echo '<ol class="chart-b-list">';
						foreach ( $group['list'] as $item ) :
							echo '<li class="chart-b-item">';
							echo '<h6 class="chart-b-item-ttl">' . $item['num'] . '</h6>';
							echo '<div class="chart-b-item-in">';
							echo '<ul class="chart-b-item-program">';
							foreach ( $item['program'] as $program ) {
								echo '<li class="chart-b-item-program-item">' . $program . '</li>';
							}
							echo '</ul>';
							echo '<p class="chart-b-item-txt">' . $item['txt'] . '</p>';
							echo '</div>';
							echo '</li>';
						endforeach;
						echo '</ol>';
					endforeach;
					echo '</ol>';
					echo '<p class="chart-b-caption">※カリキュラムは随時調整しております。詳しくは無料相談でお問い合わせください。</p>';
				endif;
				?>
			</div>
			</div>
		</div>

		<div class="point">
			<h3 class="point-ttl ttl-02">
			<span class="num num-02">
				<img src="<?php echo $imgPath; ?>/point-02.svg" alt="POINT 02">
			</span>
			<span class="txt"><span class="red">“明日、実務で使える”</span>に<br>徹底的にこだわったワークショップ</span>
			</h3>
			<div class="point-2col-a">
			<div class="point-2col-a-img order-1">
				<img src="<?php echo $imgPath; ?>/point-02-01.webp" alt="">
			</div>
			<div class="point-2col-a-txtbox order-2">
				<p class="point-2col-a-txt">
				マーケティング戦略を考えるためには、多くのフレームワークを正しく使用することが求められます。<br>私たちのワークショップは、<strong
					class="red">実際に実務で採用している方法を授業に落とし込んでいる</strong>ため、“明日、実務で使える”をリアルに体験をすることができます。
				</p>
			</div>
			</div>

			<?php
			$point2_items = array(
				array(
					'img' => 'point-02-02',
					'ttl' => '自社分析',
					'txt' => '自社サービスが提供している価値は何か、誰のどのようなニーズに応えようとしているかを確認する。',
				),
				array(
					'img' => 'point-02-03',
					'ttl' => '競合分析',
					'txt' => '競合を直接的、間接的に定義し、競合が市場に提供している価値を特定する。',
				),
				array(
					'img' => 'point-02-04',
					'ttl' => '市場分析',
					'txt' => '自社が狙い得るニーズとその規模を市場調査により明らかにする。',
				),
				array(
					'img' => 'point-02-05',
					'ttl' => '顧客分析',
					'txt' => 'インタビューやアンケートなど様々な手法でターゲットとなり得るユーザーのインサイトを特定する。',
				),
			);

			if ( ! empty( $point2_items ) ) :
				echo '<ul class="point-2col">';
				foreach ( $point2_items as $point2_item ) :
					echo '<li class="point-2col-item">';
					echo '<h4 class="point-2col-item-ttl">' . $point2_item['ttl'] . '</h4>';
					echo '<div class="point-2col-item-img">';
					echo '<img src="' . $imgPath . '/' . $point2_item['img'] . '.webp" alt="" class="pc">';
					echo '<img src="' . $imgPath . '/' . $point2_item['img'] . '-sp.webp" alt="" class="sp">';
					echo '</div>';
					echo '<p class="point-2col-item-txt">' . $point2_item['txt'] . '</p>';
					echo '</li>';
				endforeach;
				echo '</ul>';
			endif;
			?>
		</div>

		<div class="point">
			<h3 class="point-ttl ttl-03">
			<span class="num num-03">
				<img src="<?php echo $imgPath; ?>/point-03.svg" alt="POINT 03">
			</span>
			<span class="txt">卒業後も続く無料コミュニティで<br class="bsp"><span class="red">ワークを繰り返す</span>ことで、<br>着実に手法を身につける</span>
			</h3>
			<div class="point-2col-a">
			<div class="point-2col-a-img order-2">
				<img src="<?php echo $imgPath; ?>/point-03-01.webp" alt="">
			</div>
			<div class="point-2col-a-txtbox order-1">
				<p class="point-2col-a-txt">
				マーケティング戦略は、繰り返し実践することで着実に身についていきます。MERC Education受講生限定のコミュニティ「MERC Guild」では、<strong
					class="red">実務を通してマーケティングの学びを深められる機会を提供してます。</strong>卒業後もプロからのフィードバックを受けながら実務の中で生まれる疑問を解決し、さらなる成長を実現できます。
				</p>
			</div>
			</div>

			<div class="point-2col-a">
			<div class="point-2col-a-txtbox order-2">
				<h4 class="point-2col-a-ttl">過去イベント実績<span class="small">（一部抜粋）</span></h4>
				<ul class="point-2col-a-list">
				<li class="point-2col-a-list-item">
					<h5 class="point-2col-a-list-ttl">〈 応用講座 〉</h5>
					<p class="point-2col-a-list-txt">【Webサイトの問題解決思考とGoogleアナリティクス活用法】<br>第4回:問題と解決を定量化せよ</p>
				</li>
				<li class="point-2col-a-list-item">
					<p class="point-2col-a-list-txt">【Webサイトの問題解決思考とGoogleアナリティクス活用法】<br>第3回:深い仮説を立てよ</p>
					<h5 class="point-2col-a-list-ttl">〈 ワークショップ 〉</h5>
					<p class="point-2col-a-list-txt">CVR250%改善を生み出したLP制作とは</p>
				</li>
				<li class="point-2col-a-list-item">
					<p class="point-2col-a-list-txt">戦略思考に基づいたプロモーション企画提案</p>
					<h5 class="point-2col-a-list-ttl">マーケター交流会</h5>
					<p class="point-2col-a-list-txt">マーケティング戦略があると資金調達しやすくなるぞ、どこにお金を使うべきか</p>
				</li>
				<li class="point-2col-a-list-item">
					<p class="point-2col-a-list-txt">1対1での成約率は常に80%以上!法人・個人との商談で気持ちよくYESをもらうクロージングの極意</p>
				</li>
				</ul>
			</div>
			<div class="point-2col-a-img order-1">
				<img src="<?php echo $imgPath; ?>/point-03-02.webp" alt="">
			</div>
			</div>
		</div>
		</div>
	</section>

	<section id="voice" class="voice">
		<div class="wrap">
		<h2 class="voice-ttl section-ttl">
			<span class="gt top red">VOICE OF GRADUATES</span>
			<span class="bottom">体系的な学びがビジネスの現場で活きている例</span>
		</h2>

		<?php
		$voice_items = array(
			array(
				'img'  => 'voice-01',
				'ttl'  => '実践をまじえながら<br class="bsp">人の深層心理を<br class="nbsp">考える<br class="bsp">授業スタイルは唯一無二',
				'prof' => '飲食店経営 / 38歳',
				'txt'  => 'お客様の深層心理をスタッフに分かってもらった上で働いてもらったことで、価格を上げずに売上が上がってきた。',
				'link' => '/blog/interview/20221225/',
			),
			array(
				'img'  => 'voice-02',
				'ttl'  => '授業内容をそのままトレースして<br>日本酒ECサイトを<br class="bsp">リブランディング',
				'prof' => 'EC運営 / 30代',
				'txt'  => '「これが有効」という施策の話ではなく、「なぜそこに至るのか」というマーケティングに対する根本的な理解ができた。',
				'link' => '/blog/interview/20230322/',
			),
			array(
				'img'  => 'voice-03',
				'ttl'  => '採用にも活きる思考。<br class="bsp">10人規模の<br class="nbsp">町工場が応募者<br class="bsp">年間100人以上',
				'prof' => '町工場経営 / 30歳',
				'txt'  => '考え方のベースができ、新しいことを考える時にマーケティングの思考は何でも使える、そしてまた使っているなと感じる。',
				'link' => '/blog/interview/20230219/',
			),
			array(
				'img'  => 'voice-04',
				'ttl'  => '「お客さん対自分」から<br class="bsp">「お客さん対<br class="nbsp">市場」へと視座の<br class="bsp">高まりを実感',
				'prof' => '営業職 / 31歳',
				'txt'  => '大手企業にも研修を行うプロのコンサルタントが語る、「ここでしか聞けないリアルな原体験」が最大の学び。',
				'link' => '/blog/interview/230402/',
			),
			array(
				'img'  => 'voice-none',
				'ttl'  => 'マーケティングを武器に<br class="bsp">コンテンツの<br class="nbsp">中身まで作れる<br class="bsp">デザイナーに',
				'prof' => 'WEBデザイナー / 29歳',
				'txt'  => 'デザインに重きを置きながらも、体系的にマーケティングを学ぶことで、コンテンツの中身まで作れるようになった。',
				'link' => '/blog/interview/20230413/',
			),
			array(
				'img'  => 'voice-none',
				'ttl'  => '実践を繰り返すことで<br class="bsp">「分かる」から<br class="nbsp">「できる」への<br class="bsp">変化を実感',
				'prof' => 'マーケター / 32歳',
				'txt'  => '「どういう背景があってこの商品を作っているのか」まで踏み込んで考えるようになり、より明確に差別化できるように。',
				'link' => '/blog/interview/20230205/',
			),
		);

		if ( ! empty( $voice_items ) ) :
			echo '<div class="voice-slider">';
			echo '<div id="voice-list" class="voice-list">';
			foreach ( $voice_items as $voice_item ) :
				echo '<div class="voice-item">';
				echo '<div class="voice-item-in">';
				echo '<div class="voice-item-img">';
				echo '<picture>';
				echo '<source media="(max-width:812px)" srcset="' . $imgPath . '/' . $voice_item['img'] . '-sp.webp" type="image/webp">';
				echo '<img src="' . $imgPath . '/' . $voice_item['img'] . '.webp" alt="">';
				echo '</picture>';
				echo '</div>';
				echo '<div class="voice-item-txtbox">';
				echo '<h3 class="voice-item-ttl">' . $voice_item['ttl'] . '</h3>';
				echo '<p class="voice-item-prof red">' . $voice_item['prof'] . '</p>';
				echo '<p class="voice-item-txt">' . $voice_item['txt'] . '</p>';
				echo '<a href="' . $voice_item['link'] . '" class="voice-item-link">READ MORE</a>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
			endforeach;
			echo '</div></div>';
		endif;
		?>
		</div>
	</section>

	<section id="consultation">
		<div class="wrap">
		<p class="caption">「無料相談」は登録カンタン30秒！</p>
		<p class="caption-bottom pc">※無理な勧誘は一切しません</p>
		<h2 class="ttl">気になることはどんどん、<br>担当のマーケターへご相談ください！</h2>
		<p class="caption-bottom sp">※無理な勧誘は一切しません</p>
		<div class="list_box">
			<ul class="list">
			<li>
				<picture>
				<source srcset="<?php echo $imgPath; ?>/img_consultation_1.webp" type="image/webp">
				<img src="<?php echo $imgPath; ?>/img_consultation_1.png" alt="今の仕事にすぐ応用できるのかな…">
				</picture>
			</li>
			<li>
				<picture>
				<source srcset="<?php echo $imgPath; ?>/img_consultation_2.webp" type="image/webp">
				<img src="<?php echo $imgPath; ?>/img_consultation_2.png" alt="授業やワークショップはついていけるのかな…">
				</picture>
			</li>
			<li>
				<picture>
				<source srcset="<?php echo $imgPath; ?>/img_consultation_3.webp" type="image/webp">
				<img src="<?php echo $imgPath; ?>/img_consultation_3.png" alt="入会の前に一度体験をしてみたい">
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
				<img src="<?php echo $imgPath; ?>/btn_app_free.png" alt="まずは無料相談をする（日程調整ツールに遷移します）">
				</picture>
			</button>
			</li>
			<li>
			<a class="c-button--green" href="<?php echo home_url( '/registration' ); ?>">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/btn_app_course_sp.webp"
					type="image/webp">
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/btn_app_course_sp.png">
				<img src="<?php echo $imgPath; ?>/btn_app_course.png" alt="いますぐ講座に申し込む（申込フォームに遷移します）">
				</picture>
			</a>
			</li>
		</ul>
		</div>
	</div>

	<section id="price">
		<div class="image_box">
		<picture>
			<img src="<?php echo $imgPath; ?>/img_price_image.webp" type="image/webp">
		</picture>
		</div>
		<div class="wrap">
		<div class="lead_box">
			<h2 class="price-ttl section-ttl">
			<span class="gt top red">PRICE</span>
			<span class="bottom">受講料</span>
			</h2>
			<p class="price">
			<span class="price-top">
				<img src="<?php echo $imgPath; ?>/price-price.svg" alt="月額12,417円〜">
			</span>
			<span class="price-bottom">（13,658円税込〜/月）</span>
			</p>
			<div class="otp">
			<p class="otp-in">一括でお支払いの場合：327,800円（税込）</p>
			</div>
			<p class="caption">
			※分割料金は24回払いを選択した場合の金額です。分割料金は目安です。分割回数やカード会社の分割手数料によって異なりますのでご注意ください。※別途、入学金33,000円（税込）・分割手数料が発生いたします。</p>
		</div>
		<ul class="merit">
			<li>
			<p class="ttl">全額返金保証</p>
			<p class="txt">我々はあなたの人生に寄り添い、あなたの成功を全力でサポートします。万が一、我々のサポートにご満足いただけない場合、<strong
				class="red">初回授業から1週間以内に全額返金いたします。</strong>
			</p>
			</li>
		</ul>
		</div>
	</section>

	<div id="careerup" class="careerup">
		<div class="wrap">
		<div class="careerup-inner">
			<div class="careerup-top">
			<div class="careerup-logo pc">
				<img src="<?php echo $imgPath; ?>/logo-meti.png" alt="経済産業省　リスキリングを通じたキャリアアップ支援事業">
			</div>
			<div class="careerup-ttl-wrap">
				<h2 class="careerup-ttl">新しいスキルで、<br class="bsp">新しいチャンスを。</h2>
				<div class="careerup-logo sp">
				<img src="<?php echo $imgPath; ?>/logo-meti.png" alt="経済産業省　リスキリングを通じたキャリアアップ支援事業">
				</div>
				<p class="careerup-read">リスキリングを通じた<br class="bsp">キャリアアップ支援事業活用で</p>
			</div>
			</div>
			<div class="careerup-img-01">
			<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/careerup-01-sp.svg">
				<img src="<?php echo $imgPath; ?>/careerup-01.svg"
				alt="MERC Education 受講料「327,800円（税込）」➝最大70%（最大208,600円）*1 キャッシュバック。実質119,200円（税込）*2">
			</picture>
			<p class="att">※1.受講料298,000円（税別）の70%　<br class="bsp">※2.受講には、別途入学金33,000円（税込）がかかります。</p>
			</div>
			<div class="careerup-btn-wrap">
			<button class="careerup-btn" aria-controls="careerup-body-01" aria-expanded="false">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/careerup-btn-sp.png">
				<img src="<?php echo $imgPath; ?>/careerup-btn.png" alt="リスキリングを通じたキャリアアップ支援事業についての詳細はこちら">
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
				<img src="<?php echo $imgPath; ?>/careerup-02.svg" alt="受講終了で50%経産省からキャッシュバック、1年間終業で20%経産省からキャッシュバック。">
				</picture>
			</div>
			<div class="img-02">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/careerup-01-sp.svg">
				<img src="<?php echo $imgPath; ?>/careerup-01-l.svg"
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
				<img src="<?php echo $imgPath; ?>/careerup-03.svg"
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
		<div class="wrap">
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
				<img src="<?php echo $imgPath; ?>/img_price.png" alt="入学金33,000円（税込）→0円">
				</picture>
			</p>
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
				<img src="<?php echo $imgPath; ?>/btn_app_free.png" alt="まずは無料相談をする（日程調整ツールに遷移します）">
				</picture>
			</button>
			</li>
			<li>
			<a class="c-button--green" href="<?php echo home_url( '/registration' ); ?>">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/btn_app_course_sp.webp"
					type="image/webp">
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/btn_app_course_sp.png">
				<img src="<?php echo $imgPath; ?>/btn_app_course.png" alt="いますぐ講座に申し込む（申込フォームに遷移します）">
				</picture>
			</a>
			</li>
		</ul>
		</div>
	</div>

	<section id="comparison" class="comp">
		<div class="wrap comp-in">
		<h2 class="section-ttl comp-ttl">
			<span class="gt top red">COMPARISON</span>
			<span class="bottom">「体系的な学習<span class="sp-inline">・</span><span class="pc-inline">」「</span>実践機会」を<br
				class="bsp">提供できるのは<br>MERC Educationだけ</span>
		</h2>

		<div class="comp-table-wrap">
			<table class="comp-table pc">
			<thead>
				<tr>
				<th></th>
				<th>MERC Education</th>
				<th>MBA</th>
				<th>他のビジネススクール</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<th>体系的な学習</th>
				<td>プロのコンサルタントの思考プロセスを<br>体系的にカリキュラム化</td>
				<td>ケーススタディ中心</td>
				<td>ケーススタディ中心</td>
				</tr>
				<tr>
				<th>実践機会</th>
				<td>授業でのワークショップ<br>コミュニティでの生涯学習</td>
				<td>授業でのディスカッションのみ</td>
				<td>授業でのディスカッションのみ</td>
				</tr>
				<tr>
				<th>講師の質・話の一貫性</th>
				<td>大手マーケティング企業から毎年研修を<br>リピートされる超人気講師1名</td>
				<td>経営の知識と豊富な実務経験がある<br>講師が複数名</td>
				<td>経営の知識と豊富な実務経験がある<br>講師が複数名</td>
				</tr>
				<tr>
				<th>期間</th>
				<td>3ヶ月 + ∞</td>
				<td>2年</td>
				<td>3ヶ月</td>
				</tr>
				<tr>
				<th>どんな人向けか</th>
				<td>ビジネスに通用するマーケティングの<br>王道を理解し、自分で再現できる思考力を<br>身につけたい方</td>
				<td>マーケティングの成功事例を<br>多く知りたい方</td>
				<td>マーケティングの成功事例を<br>多く知りたい方</td>
				</tr>
			</tbody>
			</table>
			<table class="comp-table sp">
			<thead>
				<tr>
				<th></th>
				<th>MERC<br>Education</th>
				<th>MBA</th>
				<th>他の<br>ビジネス<br>スクール</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<th>体系的な学習</th>
				<td>プロのコンサルタントの思考プロセスを体系的にカリキュラム化</td>
				<td colspan="2">ケーススタディ中心</td>
				</tr>
				<tr>
				<th>実践機会</th>
				<td>授業でのワークショップ、コミュニティでの生涯学習</td>
				<td colspan="2">授業でのディスカッションのみ</td>
				</tr>
				<tr>
				<th>講師の質・<br>話の一貫性</th>
				<td>大手マーケティング企業から毎年研修をリピートされる超人気講師1名</td>
				<td colspan="2">経営の知識と豊富な実務経験がある講師が複数名</td>
				</tr>
				<tr>
				<th>期間</th>
				<td class="center">3ヶ月 + ∞</td>
				<td class="center">2年</td>
				<td class="center">3ヶ月</td>
				</tr>
				<tr>
				<th>どんな人向けか</th>
				<td>ビジネスに通用するマーケティングの王道を理解し、自分で再現できる思考力を身につけたい方</td>
				<td colspan="2">マーケティングの成功事例を多く知りたい方</td>
				</tr>
			</tbody>
			</table>
		</div>
		</div>
	</section>

	<section id="point-bnr" class="point-bnr">
		<div class="wrap point-bnr-in">
		<div class="point-bnr-heading">
			<h2 class="point-bnr-ttl">
			<img src="<?php echo $imgPath; ?>/point-bnr-ttl.svg" alt="受講生に評価されているポイント">
			</h2>
			<div class="pc point-bnr-link">
			<a href="#points" class="point-bnr-link-btn">詳しく見る</a>
			</div>
		</div>
		<?php
			$point_bnr_list = array(
				array(
					'img' => 'point-bnr-01',
					'alt' => 'POINT 01',
					'txt' => 'マーケティング戦略を学ぶ<br>本質的なカリキュラム',
				),
				array(
					'img' => 'point-bnr-02',
					'alt' => 'POINT 02',
					'txt' => '“明日、実務で使える”に<br>徹底的にこだわった<br>ワークショップ',
				),
				array(
					'img' => 'point-bnr-03',
					'alt' => 'POINT 03',
					'txt' => '卒業後も続くコミュニティで<br>ワークを繰り返すことで、<br>着実に手法を身につける',
				),
			);

			if ( ! empty( $point_bnr_list ) ) :
				echo '<ul class="point-bnr-list">';
				foreach ( $point_bnr_list as $point_bnr_item ) :
					echo '<li class="point-bnr-item">';
					echo '<h3 class="point-bnr-item-ttl">';
					echo '<img src="' . $imgPath . '/' . $point_bnr_item['img'] . '.svg" alt="' . $point_bnr_item['alt'] . '">';
					echo '</h3>';
					echo '<p class="point-bnr-item-txt">' . $point_bnr_item['txt'] . '</p>';
					echo '</li>';
				endforeach;
				echo '</ul>';
			endif;
			?>
		<div class="sp point-bnr-link">
			<a href="#points" class="point-bnr-link-btn">詳しく見る</a>
		</div>
		</div>
	</section>

	<section id="flow">
		<div class="wrap">
		<div class="flex_box">
			<div class="ttl_box">
			<p class="en"><img src="<?php echo $imgPath; ?>/txt_flow.svg" alt="FLOW"></p>
			<p class="ja">受講までの流れ</p>
			</div>
			<ul class="list">
			<li>
				<p class="step">
				<picture>
					<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/img_flow_step1_sp.svg">
					<img src="<?php echo $imgPath; ?>/img_flow_step1.svg" alt="STEP01">
				</picture>
				</p>
				<p class="ttl">送信</p>
				<p class="txt">本フォームより情報を入力ください</p>
			</li>
			<li>
				<p class="step">
				<picture>
					<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/img_flow_step2_sp.svg">
					<img src="<?php echo $imgPath; ?>/img_flow_step2.svg" alt="STEP02">
				</picture>
				</p>
				<p class="ttl">相談</p>
				<p class="txt">本講座についての質問や受けるべきかのご判断などをスタッフと相談</p>
			</li>
			<li>
				<p class="step">
				<picture>
					<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/img_flow_step3_sp.svg">
					<img src="<?php echo $imgPath; ?>/img_flow_step3.svg" alt="STEP03">
				</picture>
				</p>

				<p class="ttl">申し込み</p>
				<p class="txt">申し込みを決定したら、案内を受け取り講座開始をお待ちください。</p>
			</li>
			</ul>
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
				<img src="<?php echo $imgPath; ?>/btn_app_free.png" alt="まずは無料相談をする（日程調整ツールに遷移します）">
				</picture>
			</button>
			</li>
			<li>
			<a class="c-button--green" href="<?php echo home_url( '/registration' ); ?>">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/btn_app_course_sp.webp"
					type="image/webp">
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/btn_app_course_sp.png">
				<img src="<?php echo $imgPath; ?>/btn_app_course.png" alt="いますぐ講座に申し込む（申込フォームに遷移します）">
				</picture>
			</a>
			</li>
		</ul>
		</div>
	</div>

	<section id="lecturer">
		<div class="wrap">
		<div class="ttl_box">
			<h2 class="ttl">
			<picture>
				<source srcset="<?php echo $imgPath; ?>/txt_lecturer_01.webp" type="image/webp">
				<img src="<?php echo $imgPath; ?>/txt_lecturer_01.png" alt="授業はすべて私が担当します">
			</picture>
			</h2>
			<p class="ttl_caption"><span>元Yahoo!マネージャー</span>で<br class="sp">100社以上の売上改善を実現！</p>
		</div>
		<div class="lecturer_box">
			<div class="text_box">
			<div class="name_box">
				<p class="post">株式会社MERC 代表取締役社長CEO</p>
				<p class="name_ja">福田 正義</p>
				<p class="name_en"><img src="<?php echo $imgPath; ?>/txt_recturer_eng.svg" alt="Masayoshi Fukuda"></p>
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
				<img src="<?php echo $imgPath; ?>/img_recturer.jpg" alt="福田 正義">
			</picture>
			</div>
		</div>
		</div>
	</section>

	<section id="faq">
		<div class="wrap">
		<div class="ttl_box">
			<p class="en"><img src="<?php echo $imgPath; ?>/txt_faq.svg" alt="FAQ"></p>
			<p class="ja">よくあるご質問</p>
		</div>
		<div class="faq_list">
			<div class="faq_clm">
			<div class="question_box">
				<p class="number"><img src="<?php echo $imgPath; ?>/txt_q1.svg" alt="Q1."></p>
				<p class="question">オンラインで受講は可能ですか？</p>
			</div>
			<p class="answer">はい、オンラインの受講は可能です。<br>
				ワークショップは簡単に操作ができるシステムを活用しながら受講生同士で話し合い、作業が行えます。</p>
			</div>
			<div class="faq_clm">
			<div class="question_box">
				<p class="number"><img src="<?php echo $imgPath; ?>/txt_q2.svg" alt="Q2."></p>
				<p class="question">受講に年齢制限はありますか？</p>
			</div>
			<p class="answer">年齢制限はございません。<br>
				基礎講座・特別講座を含めると、これまで200名以上の方に受講いただきましたが、中学生から50代後半の方まで幅広い年齢層の方が受講しております。</p>
			</div>
			<div class="faq_clm">
			<div class="question_box">
				<p class="number"><img src="<?php echo $imgPath; ?>/txt_q3.svg" alt="Q3."></p>
				<p class="question">仕事や家事があるのですが、両立してスキルを身につけられますか？</p>
			</div>
			<p class="answer">問題なく両立できます。<br>
				基本的には教室での受講がベストですが、皆さまお仕事や家庭の事情がございますので、今までの受講生の方は、専門スタッフによる個別補講を行うことで最後までやりきれました。</p>
			</div>
			<div class="faq_clm">
			<div class="question_box">
				<p class="number"><img src="<?php echo $imgPath; ?>/txt_q4.svg" alt="Q4."></p>
				<p class="question">マーケティングのことが全くわかりませんが、問題なく受講できますか？</p>
			</div>
			<p class="answer">はい、全く問題ございません。<br>
				ご自身で真剣に学び、講師に質問しながらコツコツ頑張れるという気持ちがあれば全く心配ありません。</p>
			</div>
			<div class="faq_clm">
			<div class="question_box">
				<p class="number"><img src="<?php echo $imgPath; ?>/txt_q5.svg" alt="Q5."></p>
				<p class="question">講義動画の視聴期限はありますか？</p>
			</div>
			<p class="answer">動画の視聴期限はございません。<br>
				ただし、万が一事務局の都合により掲載サイトもしくは視聴ページが閉鎖される場合は、事前に告知の上別途視聴できるものをご提供いたします。</p>
			</div>
			<div class="faq_clm">
			<div class="question_box">
				<p class="number"><img src="<?php echo $imgPath; ?>/txt_q6.svg" alt="Q6."></p>
				<p class="question">分割払いは可能でしょうか？</p>
			</div>
			<p class="answer">はい、可能です。<br>
				分割回数は各カード会社によって異なりますので、カード会社にお問い合わせください。</p>
			</div>
			<div class="faq_clm">
			<div class="question_box">
				<p class="number"><img src="<?php echo $imgPath; ?>/txt_q7.svg" alt="Q7."></p>
				<p class="question">キャンセルに伴う返金は対応できますか？</p>
			</div>
			<p class="answer">我々のサポートにご満足いただけない場合、初回授業から1週間以内に全額返金いたします。初回授業から8日以上経過後は返金はできかねますので、ご了承ください。</p>
			</div>
			<div class="faq_clm">
			<div class="question_box">
				<p class="number"><img src="<?php echo $imgPath; ?>/txt_q8.svg" alt="Q8."></p>
				<p class="question">領収書は発行できますか？</p>
			</div>
			<p class="answer">はい、領収書は事務局より発行させていただきます。<br>
				また、自己啓発費用として企業様がお金を負担してくれるケースもございますので、その際は柔軟に書面を発行させていただきます。</p>
			</div>
			<div class="faq_clm">
			<div class="question_box">
				<p class="number"><img src="<?php echo $imgPath; ?>/txt_q9.svg" alt="Q9."></p>
				<p class="question">受講生コミュニティは有料ですか？</p>
			</div>
			<p class="answer">いいえ、無料です。<br>
				ただし、今後の運営方針の変更がある場合は、事前に告知いたします。</p>
			</div>
			<div class="faq_clm">
			<div class="question_box">
				<p class="number"><img src="<?php echo $imgPath; ?>/txt_q10.svg" alt="Q10."></p>
				<p class="question">紹介割はありますか？</p>
			</div>
			<p class="answer">はい、ございます。<br>
				MERCスタッフや受講生・卒業生からのご紹介の場合は、入学金33,000円（税込）を割引させていただきます。</p>
			</div>
			<div class="faq_clm">
			<div class="question_box">
				<p class="number"><img src="<?php echo $imgPath; ?>/txt_q11.svg" alt="Q11."></p>
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
				<img src="<?php echo $imgPath; ?>/btn_app_free.png" alt="まずは無料相談をする（日程調整ツールに遷移します）">
				</picture>
			</button>
			</li>
			<li>
			<a class="c-button--green" href="<?php echo home_url( '/registration' ); ?>">
				<picture>
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/btn_app_course_sp.webp"
					type="image/webp">
				<source media="(max-width:812px)" srcset="<?php echo $imgPath; ?>/btn_app_course_sp.png">
				<img src="<?php echo $imgPath; ?>/btn_app_course.png" alt="いますぐ講座に申し込む（申込フォームに遷移します）">
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
	<script src="<?php echo $jsPath; ?>/slick.min.js"></script>
	<script src="<?php echo $jsPath; ?>/home.js"></script>
	<script src="<?php echo $jsPath; ?>/main.js"></script>
	<?php get_template_part( 'template-parts/eeasy/prod' ); ?>
</body>

</html>

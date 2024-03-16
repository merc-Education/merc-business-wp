<?php
/*
Template Name: 【LP】申し込みページ
*/
$imgPath = getChildThemePath('/lp/registration/img');
$stylePath = getChildThemePath('/lp/registration/css');
$jsPath = getChildThemePath('/lp/registration/js');
?>

<!DOCTYPE html>
<html lang="ja">
<script type="text/javascript">
	window["_gaUserPrefs"] = {
		ioo: function() {
			return true;
		},
	};
</script>

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
	<script src="//statics.a8.net/a8sales/a8sales.js"></script>

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>MERC Education 申し込みページ</title>
	<link rel="icon" href="/favicon.ico">
	<meta name="description" content="“実践”で結果を出すためのマーケティング戦略を身につけるマーケティング戦略基礎コース" />
	<link rel="stylesheet" href="https://use.typekit.net/get3vce.css" />
	<link rel="stylesheet" href="<?php echo $stylePath; ?>/style.css?timestamp=20221005" />
	<link rel="stylesheet" href="<?php echo getChildThemePath("/assets/css/footer.css"); ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="<?php echo $jsPath; ?>/main.js"></script>
</head>

<body class="page_top">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T5MP9PG" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<header class="header">
		<div class="header__inner">
			<p class="header__logo">
				<a href="<?php echo home_url(); ?>"><img src="<?php echo $imgPath; ?>/logo.png" alt="MERC Education" /></a>
			</p>
			<button class="header__button js-cta-button">
				講座申し込みフォーム
			</button>
		</div>
	</header>
	<main>
		<div class="fv">
			<div class="fv__inner">
				<h1 class="fv__title">
					<span class="fv__title_upper">
						“実践”で結果を出すための<br />マーケティング戦略を身につける
					</span>
					<span class="fv__title_middle">
						Marketing Strategy Basic Course
					</span>
					<span class="fv__title_bottom">
						マーケティング戦略<br />基礎講座
					</span>
				</h1>
				<div class="fv__info">
					<p class="fv__info_title">
						<a href="#class">次回講座開始の日程</a>
					</p>
					<ul class="fv__info_list">
						<li class="fv__info_item"></li>
						<li class="fv__info_item">
							<p class="fv__info_date">4月の日程<span>4.11</span>TUE</p>
						</li>
					</ul>
				</div>
				<div class="fv__form" id="form">
					<div class="fv__form_inner">
						<div class="fv__form_title">講座申し込みフォーム</div>
						<form name="form_109" action="https://asp.jcity.co.jp/FORM/?userid=merceducation&formid=109&action=proc&ie=UTF-8" method="post">
							<dl class="fv__form_item">
								<dt class="fv__form_item_title">お名前</dt>
								<dd class="fv__form_item_data">
									<input type="text" name="scustname" id="scustname" value="" size="60" />
								</dd>
							</dl>
							<dl class="fv__form_item">
								<dt class="fv__form_item_title">電子メール</dt>
								<dd class="fv__form_item_data">
									<input type="text" name="semail" id="semail" value="" size="60" />
								</dd>
							</dl>
							<dl class="fv__form_item">
								<dt class="fv__form_item_title">電話番号</dt>
								<dd class="fv__form_item_data">
									<input type="text" name="sphone" id="sphone" value="" size="20" />
								</dd>
							</dl>
							<dl class="fv__form_item fv__form_item-trigger">
								<dt class="fv__form_item_title">MERCを知ったきっかけ</dt>
								<dd class="fv__form_item_data">
									<label><input type="radio" name="sstringdef6o" id="sstringdef6o_0" value="検索エンジン" />検索エンジン</label>
									<label><input type="radio" name="sstringdef6o" id="sstringdef6o_1" value="ホームページから" />ホームページから</label>
									<label><input type="radio" name="sstringdef6o" id="sstringdef6o_2" value="Facebook" />Facebook</label>
									<label><input type="radio" name="sstringdef6o" id="sstringdef6o_3" value="Twitter" />Twitter</label>
									<label><input type="radio" name="sstringdef6o" id="sstringdef6o_4" value="知人の口コミ" />知人の口コミ</label>
									<label><input type="radio" name="sstringdef6o" id="sstringdef6o_5" value="デジハリからのお知らせ" />デジハリからのお知らせ</label>
									<label><input type="radio" name="sstringdef6o" id="sstringdef6o_6" value="その他" />その他</label>
								</dd>
							</dl>
							<dl>
								<dd class="fv__form-agreement">
									※
									<a href="<?php echo home_url('term'); ?>" target="_blank">利用規約</a>
									を確認の上お申し込みください
								</dd>
							</dl>
							<dl style="display: flex; justify-content: center; margin-top: 20px;">
								<div class="fv__back_button js-back-buton">
									<span>×</span>閉じる
								</div>
								<dt class="fv__form_button" colspan="2" align="center">
									<input type="submit" value="" />規約に同意して<br />講座に参加する
								</dt>
							</dl>
						</form>
					</div>
				</div>
			</div>
		</div>
		<section class="course">
			<div class="course__inner">
				<div class="course__table">
					<div class="course__contents">
						<div class="course__contents_inner">
							<div class="course__contents_wrapper active">
								<div class="course__contents_item">
									<p class="course__contents_item_price">
										<strong>261,800</strong>円
										<span>（税抜238,000円）</span>
									</p>
									<p class="course__contents_item_price_note">
										※分割をご希望する場合は、クレジットカード払いの方のみとなり、受講者様とクレジットカード会社様との契約になります。<br />
										※分割手数料等については、クレジットカード会社様にお問い合わせお願い申し上げます。
									</p>
									<p class="course__contents_item_button">
										<a href="https://asp.jcity.co.jp/FORM/?userid=merceducation&formid=109&action=proc&ie=UTF-8">
											申し込みをして<br />講座案内を受け取る
										</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="sec08" id="class">
			<div class="sec08__container">
				<div class="sec08__contents">
					<p class="sec08__className"><span>4月の日程</span></p>
					<div class="sec08__classList">
						<div class="sec08__classListInner">
							<ol>
								<li><span>第1回</span>/ 4月11日（火）20:00~22:00</li>
								<li><span>第2回</span>/ 4月18日（火）20:00~22:00</li>
								<li><span>第3回</span>/ 4月25日（火）20:00~22:00</li>
								<li><span>第4回</span>/ 5月9日（火）20:00~22:00</li>
								<li><span>第5回</span>/ 5月16日（火）20:00~22:00</li>
								<li><span>第6回</span>/ 5月23日（火）20:00~22:00</li>
							</ol>
							<ol>
								<li><span>第7回</span>/ 5月30日（火）20:00~22:00</li>
								<li><span>第8回</span>/ 6月6日（火）20:00~22:00</li>
								<li><span>第9回</span>/ 6月13日（火）20:00~22:00</li>
								<li><span>第10回</span>/ 6月20日（火）20:00~22:00</li>
								<li><span>第11回</span>/ 6月27日（火）20:00~22:00</li>
								<li><span>第12回</span>/ 7月4日（火）20:00~22:00</li>
							</ol>
						</div>
					</div>
				</div>
				<!-- <div class="sec08__classSummary">
          <div class="sec08__classSummaryInner">
            <p>※初回はガイダンスを行うため、15分早く開始となります。</p>
          </div>
        </div> -->
			</div>
		</section>

		<div class="profile">
			<div class="profile__container">
				<div class="profile__contents">
					<p class="profile__heading">講師プロフィール / 福田 正義</p>
					<div class="profile__desc">
						<p>2005年オーバーチュア株式会社入社。</p>
						<p>2007年ヤフー株式会社に転籍。</p>
						<p>デジタルマーケティングのコンサルティング</p>
						<p>
							部門の立上げや教育に携わる。2013年株式会社オモロワークスを創業、各社のマーケティングコンサルティングを行う。「マーケターのプラットフォーマーになる」という理念の基、2017年合同会社YuMK創業。2019年にマーケティングスクール『MERC
							Education』を開校し、マーケターの育成や機会の創出に励む。
						</p>
					</div>
				</div>
				<div class="profile__image"></div>
			</div>
		</div>

		<div class="faq">
			<div class="faq__inner">
				<h2 class="faq__title">よくある質問</h2>
				<div class="faq__list">
					<dl>
						<dt class="js-faq-trigger">
							<p>
								<span class="q">Q1</span><span class="text">1回あたりの授業時間はどれくらいですか？</span><span class="plus"></span>
							</p>
						</dt>
						<dd style="display: none">1回２時間の講座となります。</dd>
					</dl>
					<dl>
						<dt class="js-faq-trigger">
							<p>
								<span class="q">Q2</span><span class="text">マーケティングのことが全くわかりませんが、追いていけますか？</span><span class="plus"></span>
							</p>
						</dt>
						<dd style="display: none">
							はい！全く問題ございません。これまで100名以上(※)の方へマーケティング戦略の基礎や応用など実務で使える講座を提供してきましたが、マーケティングの知識が豊富という方の方がむしろ少なく、初心者の方や少しweb広告などはあるけど知識はないという方もいらっしゃいました。
							ただ、入学するだけで上達するというものではございませんので、ご自身で真剣に学び、講師へ質問しながらコツコツ頑張れるという気持ちがあれば大丈夫です。受講で不安なことやサポートして欲しいことがあれば、遠慮なくスタッフへお申し付けください。

							<br />※特別講座まで含めると、1,000名以上受講
						</dd>
					</dl>
					<dl>
						<dt class="js-faq-trigger">
							<p>
								<span class="q">Q3</span><span class="text">友人と一緒に受講してもいいですか？</span><span class="plus"></span>
							</p>
						</dt>
						<dd style="display: none">はい！もちろん大歓迎です！</dd>
					</dl>
					<dl>
						<dt class="js-faq-trigger">
							<p>
								<span class="q">Q4</span><span class="text">奨学金制度はありますか？</span><span class="plus"></span>
							</p>
						</dt>
						<dd style="display: none">
							MERC Education独自の奨学金制度はございません。
							ただし、国の制度で教育助成金や教育資金贈与非課税などといったものもございますので、お気軽にご相談ください。
							過去の受講生で活用された事例もございます。
						</dd>
					</dl>
					<dl>
						<dt class="js-faq-trigger">
							<p>
								<span class="q">Q5</span><span class="text">すべての日程に参加できませんが問題ありませんか？</span><span class="plus"></span>
							</p>
						</dt>
						<dd style="display: none">
							はい、大丈夫です。
							各回ごとにテーマが決まっておりますが、講義はその都度収録していますので、スキマ時間に動画で追うことができますので、知識レベルで置いていかれる心配がありません。
							また、欠席した回のフォローアップを個別で担当スタッフが解説しますので、柔軟な受講ができます。
						</dd>
					</dl>
					<dl>
						<dt class="js-faq-trigger">
							<p>
								<span class="q">Q6</span><span class="text">返金保証はありますか？</span><span class="plus"></span>
							</p>
						</dt>
						<dd style="display: none">
							受講後の返金、キャンセルは承っておりません。予めご了承ください。
						</dd>
					</dl>
					<dl>
						<dt class="js-faq-trigger">
							<p>
								<span class="q">Q7</span><span class="text">講義動画の視聴期限はありますか？</span><span class="plus"></span>
							</p>
						</dt>
						<dd>
							動画の視聴期限はございません。
							ただし、万が一事務局の都合により掲載サイトもしくは視聴ページが閉鎖される場合は、事前に告知の上別途視聴できるものをご提供いたします。
						</dd>
					</dl>
					<dl>
						<dt class="js-faq-trigger">
							<p>
								<span class="q">Q8</span><span class="text">領収書は発行してくれますか？</span><span class="plus"></span>
							</p>
						</dt>
						<dd>
							はい、領収書は事務局より発行させていただきます。
							また、自己啓発費用として企業様がお金を負担してくれるケースもございますので、その際は柔軟に書面を発行させていただきます。
						</dd>
					</dl>
				</div>
			</div>
		</div>
	</main>
	<?php get_footer(); ?>
</body>

</html>
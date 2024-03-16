<?php
/*
Template Name: LP
*/
$imgPath = getChildThemePath('/lp/front-page/img');
$stylePath = getChildThemePath('/lp/front-page/css');
$jsPath = getChildThemePath('/lp/front-page/js');
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
	<title>マーケティング戦略スクールMERC｜戦略とデジタルを繋ぐ</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="keyword" content="マーケティング,スクール,講座,merc">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $stylePath; ?>/style.css?timestamp=20221641">
	<link rel="stylesheet" href="<?php echo getChildThemePath("/assets/css/footer.css"); ?>">
	<link rel="icon" href="/favicon.ico">
	<script src="//statics.a8.net/a8sales/a8sales.js"></script>
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T5MP9PG" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<header>
		<a href="<?php echo home_url(); ?>" id="header-logo">
			<h1>
				<img src="<?php echo $imgPath; ?>/header-logo.png" alt="MERC Education">
			</h1>
		</a>
	</header>

	<div id="fv">
		<div id="fv-inner">
			<div id="fv-text-box01">
				<p>デジタル作業者はもうやめよう</p>
				<p>デジタルマーケター・<br class="add-sp">インハウスマーケター・経営者向け</p>
				<p>
					<span>自分の手で</span><br>
					<span>売れるブランドをつくる</span><br>
					<span>マーケティングスクール</span>
				</p>
			</div>
			<div id="fv-img">
				<picture>
					<source type="image/webp" srcset="<?php echo $imgPath; ?>/fv-img.webp">
					<img src="<?php echo $imgPath; ?>/fv-img.jpg" alt="">
				</picture>
			</div>
			<div id="fv-text-box02">
				<p>
					戦略論と<br class="add-sp">顧客インサイト論を学び、<br>
					手を動かして実践する<br class="add-sp">「マーケティング戦略基礎講座」
				</p>
				<p>
					<span>
						100社以上のベンチャー・大手の売上を<br class="add-sp">改善したコンサルタントの実務を体系化
					</span>
				</p>
				<p>
					<span>
						大手マーケティング企業が<br class="add-sp">毎年リピートする教育プログラム
					</span>
				</p>
			</div>
		</div>
	</div>


	<div class="link-area01">
		<div class="link-area-content">
			<p>4月受講生募集中！</p>
			<p class="link-area-content-heading">とりあえず話を聞いてみる</p>
			<button onclick="openEeasy()">無料相談はこちら</button>
			<p class="link-area-content-heading">今すぐ受講希望の方は</p>
			<a class="link-area-content-button link-area-content-button--red" href="./registration">
				講座を申し込む
			</a>
		</div>
	</div>

	<section id="process">
		<h2>
			広告やWebサイトの運用だけがマーケティングじゃない！<br>
			顧客価値を問い直し、他社と違いをつくる思考力を学ぼう
		</h2>
		<p>
			デジタルプロモーションは技術革新で自動化が進み、誰でも簡単に使えるようになりました。<br>
			しかし、他の人と同じやり方をしてお客様に商品の違いが伝わるでしょうか？<br>
			MERC Educationでは、100年前から変わらない「人がモノを買う本質」を学びます。<br>
			あなたの商品が選ばれる確率を上げる戦略とクリエイティブを自分の手でつくり、思考力と実践力を身につけるカリキュラムを用意しました。
		</p>
		<h3>
			<span>売れるブランドをつくるプロセス</span>
		</h3>
		<div id="process-img01" class="fadeIn02">
			<picture>
				<source type="image/webp" srcset="<?php echo $imgPath; ?>/process-img01-pc.webp">
				<img src="<?php echo $imgPath; ?>/process-img01-pc.jpg" alt="MERC Educationはこれらを体系的に学べる「マーケティング戦略講座」を提供しています。" class="del-sp">
			</picture>
			<picture>
				<source type="image/webp" srcset="<?php echo $imgPath; ?>/process-img01-sp.webp">
				<img src="<?php echo $imgPath; ?>/process-img01-sp.jpg" alt="MERC Educationはこれらを体系的に学べる「マーケティング戦略講座」を提供しています。" class="add-sp">
			</picture>
		</div>
		<p class="process-img01-title add-sp">
			<picture>
				<source type="image/webp" srcset="<?php echo $imgPath; ?>/process-img01-text-sp.webp">
				<img style="width: 100%" src="<?php echo $imgPath; ?>/process-img01-text-sp.png" alt="MERC Educationはこれらを体系的に学べる「マーケティング戦略講座」を提供しています。">
			</picture>
		</p>
		<div id="process-flex">
			<div class="process-flex-box fadeIn">
				<div class="process-flex-box-heading">
					<p>第<span>1</span>部</p>
					<p><span>環境分析</span>編</p>
				</div>
				<ul>
					<li>
						・マーケティング思考がないと真の課題は見えない
					</li>
					<li>
						・マーケティングのゴールはブランドプレファレンスを作ること
					</li>
					<li>
						・商品やサービスが選ばれるメカニズムとは
					</li>
					<li>
						・商品やサービスを育てるとはどういうことか
					</li>
					<li>
						・外部環境分析と内部環境分析の目的とは
					</li>
					<li>
						・自社の資産を4P4C分析で把握する
					</li>
					<li>
						・社会のトレンドを調査するPEST分析
					</li>
					<li>
						・お客様の行動と嗜好を調査するGCS分析
					</li>
					<li>
						・競合の定義と4P4C分析
					</li>
					<li>
						・市場機会と脅威を分析するクロスSWOT分析
					</li>
					<li>
						・お客様に選ばれる自社のコアバリューを特定するプロセス
					</li>
				</ul>
			</div>
			<div class="process-flex-box fadeIn">
				<div class="process-flex-box-heading">
					<p>第<span>2</span>部</p>
					<p><span>戦略立案</span>編</p>
				</div>
				<ul>
					<li>
						・戦略の目的設定とは社会課題の解決
					</li>
					<li>
						・コトラーのSTP分析から戦略を構造化する
					</li>
					<li>
						・市場セグメンテーションとターゲティング
					</li>
					<li>
						・コアバリューに基づいたポジショニング
					</li>
					<li>
						・ペルソナ設計の目的と失敗事例
					</li>
					<li>
						・お客様の感情に寄り添ったポジショニングとストーリーで差をつける
					</li>
					<li>
						・戦略をお客様に伝えるブランドの構成要素
					</li>
					<li>
						・ブランドが提供する4つの価値
					</li>
					<li>
						・ブランドコンセプトとイメージボードの作り方
					</li>
				</ul>
			</div>
			<div class="process-flex-box fadeIn">
				<div class="process-flex-box-heading">
					<p>第<span>3</span>部</p>
					<p><span>施策立案</span>編</p>
				</div>
				<ul>
					<li>
						・プロモーションの5つの役割を理解する
					</li>
					<li>
						・プロモーションの仕組みを作るとは
					</li>
					<li>
						・プロモーション手法の5つの分類
					</li>
					<li>
						・プロモーション予算の考え方の基本
					</li>
					<li>
						・消費者心理学におけるニーズと動機の違い
					</li>
					<li>
						・消費者が抱える6つの行動阻害要因を解消する
					</li>
					<li>
						・カスタマージャーニーマップの目的と作り方
					</li>
					<li>
						・顧客階層と心理状態に施策を組み合わせる
					</li>
					<li>
						・施策の優先順位の決定方法
					</li>
				</ul>
			</div>
		</div>
		<div id="process-flex-box-last" class="fadeIn">
			<div id="process-flex-box-last-heading">
				<p>第<span>4</span>部</p>
				<p>卒業制作</p>
			</div>
			<ul>
				<li>
					・環境分析と戦略立案に基づいてプロモーション企画を提案する
				</li>
			</ul>
		</div>
		<h4>
			お客様に選ばれるプロモーション企画や<br>クリエイティブを提案できるように！
		</h4>
	</section>

	<section id="profile">
		<h2>講師プロフィール</h2>
		<div id="profile-inner">
			<div class="profile-head">
				<div id="profile-name">
					<p>株式会社MERC<br>代表取締役社長CEO</p>
					<p>
						福田 正義<span>Masayoshi Fukuda</span>
					</p>
				</div>
				<div id="profile-img" class="fadeIn02">
					<picture>
						<source type="image/webp" srcset="<?php echo $imgPath; ?>/profile-img.webp">
						<img src="<?php echo $imgPath; ?>/profile-img.jpg" alt="講師の画像">
					</picture>
				</div>
			</div>
			<p>
				オーバーチュア株式会社、ヤフー株式会社において、リスティングのコンサルティング部門の立ち上げ、デジタルマーケティングにおける実践手法の体系化及び社内コンサルタントの育成業務に従事。
				<br><br>
				2012年株式会社オモロワークスを創業、スタートアップから大手まで幅広い企業のマーケティングコンサル業務に従事。<br>
				2018年ネオキャリアグループにてアドテク事業を手掛けるマーベリック株式会社にオモロワークスを売却。その後、同社における執行役員に就任し新事業部門を立上げ、その事業に関しても2021年株式会社駅探に売却。
				<br><br>
				2022年現在、2019年に立ち上げたマーケティングスクールMERCの卒業生は300名を超える。
				<br><br>
				2005年 | オーバーチュア株式会社に入社<br>
				2007年 | ヤフー株式会社に転籍<br>
				2012年 | 株式会社オモロワークスを創業(2018年に売却)<br>
				2018年 | マーベリック株式会社執行役員 就任<br>
				2019年 | マーケティングスクール「MERC Education」開校<br>
				2021年 | 株式会社駅探 経営戦略室
			</p>
		</div>
	</section>

	<div class="link-area02">
		<div class="link-area-content fadeIn">
			<p>4月受講生募集中！</p>
			<p class="link-area-content-heading">とりあえず話を聞いてみる</p>
			<button onclick="openEeasy()">無料相談はこちら</button>
			<p class="link-area-content-heading link-area-content-heading--white">今すぐ受講希望の方は</p>
			<a class="link-area-content-button link-area-content-button--red" href="./registration">
				講座を申し込む
			</a>
		</div>
	</div>

	<section id="curriculum">
		<h2>自分が主役となって実践できるMERCカリキュラムの特徴</h2>
		<div id="curriculum-flex">
			<div class="curriculum-flex-box">
				<div class="curriculum-flex-box-img fadeIn02">
					<picture>
						<source type="image/webp" srcset="<?php echo $imgPath; ?>/curriculum-flex-box-img01.webp">
						<img src="<?php echo $imgPath; ?>/curriculum-flex-box-img01.jpg" alt="講師の画像">
					</picture>
				</div>
				<div class="curriculum-flex-box-heading">
					<p class="curriculum-num">01</p>
					<h3>
						実務現場のフレームを使って<br>
						アウトプットする実践形式
					</h3>
				</div>
				<p>
					講義では毎回講師によるインプットの後、実務現場で使っているフレームでアウトプットして知識を定着させます。
					さらに講師からの具体的なアドバイスによって、プロの視点を体験することができます。
				</p>
			</div>
			<div class="curriculum-flex-box">
				<div class="curriculum-flex-box-img fadeIn02">
					<picture>
						<source type="image/webp" srcset="<?php echo $imgPath; ?>/curriculum-flex-box-img02.webp">
						<img src="<?php echo $imgPath; ?>/curriculum-flex-box-img02.jpg" alt="講師の画像">
					</picture>
				</div>
				<div class="curriculum-flex-box-heading">
					<p class="curriculum-num">02</p>
					<h3>
						現役のマーケティング実務者が運営
					</h3>
				</div>
				<p>
					私たちはマーケティングコンサルティングサービスを提供する実務集団でもあります。
					戦略構築、広告の企画、Webサイト制作、リサーチなど、最新の現場経験をシェアすることで、皆さまのスキルアップを支援します。
				</p>
			</div>
			<div class="curriculum-flex-box">
				<div class="curriculum-flex-box-img fadeIn02">
					<picture>
						<source type="image/webp" srcset="<?php echo $imgPath; ?>/curriculum-flex-box-img03.webp">
						<img src="<?php echo $imgPath; ?>/curriculum-flex-box-img03.jpg" alt="">
					</picture>
				</div>
				<div class="curriculum-flex-box-heading">
					<p class="curriculum-num">03</p>
					<h3>
						オンライン講義とフォローで<br>
						最後までやり切れる環境
					</h3>
				</div>
				<p>
					全ての講義はオンラインで行います。また、講義に参加できない時は、アーカイブ動画とスタッフによるフォローで最後まで学びをサポート致します。
				</p>
			</div>
			<div class="curriculum-flex-box">
				<div class="curriculum-flex-box-img fadeIn02">
					<picture>
						<source type="image/webp" srcset="<?php echo $imgPath; ?>/curriculum-flex-box-img05.webp">
						<img src="<?php echo $imgPath; ?>/curriculum-flex-box-img05.jpg" alt="">
					</picture>
				</div>
				<div class="curriculum-flex-box-heading">
					<p class="curriculum-num">04</p>
					<h3>
						実務の悩みを聞き合える<br>
						卒業生コミュニティ
					</h3>
				</div>
				<p>
					マーケティング実務では教科書にはない様々な問題に直面します。実務の悩みを解消するために、
					マーケティング経験者や卒業生同士で相談できる卒業生限定コミュニティを用意しています。
				</p>
			</div>
		</div>
	</section>

	<section id="voice">
		<h2>受講生の声</h2>
		<div id="voice-flex">
			<div class="voice-flex-box">
				<div class="voice-flex-box-img">
					<picture>
						<source type="image/webp" srcset="<?php echo $imgPath; ?>/voice-flex-box-img02.webp">
						<img src="<?php echo $imgPath; ?>/voice-flex-box-img02.jpg" alt="">
					</picture>
				</div>
				<div class="voice-flex-box-text">
					<p>S.Sさん・30代女性<br>アパレルブランドのEC・SNS担当者</p>
					<p>販促コンテンツで<br>
						ECサイトの売上250%増。<br>
						3年間で売上5倍に</p>
					<p>
						マーケティングに興味があってWeb担当者になったものの、毎日売上・購入単価ばかり見ていました。効率的に回す＝マーケティング？と感じて受講しました。<br>
						講義で「売上＝認知率×配架率×好感度」やSTP分析のフレームを学び、自社の認知率を見直してみると、お客様や取引先がブランド名を読めないことがわかったのです。<br>
						認知率を高めるためにブランドステートメントを設定して、チームでSNSを始めました。人格を一貫して投稿を続けると口コミが増え、認知率も高まりました。<br>
						さらにSNSで対話するうちにもっとお客様を理解したくてアンケート調査を行ったところ、ブランドイメージは高身長モデルだったのですが、小柄なお客様からの回答が多いことに気づきました。<br>
						ECで小柄なスタッフがコーディネート紹介を行った結果、売上は250%増加！認知率や新規セグメンテーションに視野が広がったおかげで売上が3年間で5倍になって驚いています！
					</p>
				</div>
			</div>
			<div class="voice-flex-box">
				<div class="voice-flex-box-img">
					<picture>
						<source type="image/webp" srcset="<?php echo $imgPath; ?>/voice-flex-box-img01.webp">
						<img src="<?php echo $imgPath; ?>/voice-flex-box-img01.jpg" alt="">
					</picture>
				</div>
				<div class="voice-flex-box-text">
					<p>T.Eさん・30代男性<br>女性インナーブランドのインハウスマーケター</p>
					<p>大手競合の参入で<br>
						CPCが1.5倍に高騰する中<br>
						CPAを40%下げたSTP分析</p>
					<p>
						広告代理店であらゆるメディアを運用した後、女性向けインナーの事業会社に転職しました。しかし、規模が小さい女性向けインナー市場に大手企業が新規参入し始め、CPCは1.5倍に高騰し、売上が減少。広告資金では勝てないため差別化する必要がありました。<br>
						受講中に「環境分析→STP分析→施策」のつながりを体系的に学び、環境分析とSTP分析に着手しました。調査を進めると、これまでの想定していた若い未婚女性だけでなく、既婚のフリーランス女性にも購入されていることを発見！<br>
						STP分析で、新たなターゲットセグメント向けのキーワードを広告に追加し、画像クリエイティブも差別化しました。機能性だけでなく感情に寄り添った「気軽さ」を訴求した結果、CPCが高騰する中でCPAは50%近く下がったのです！<br>
						チームと一緒に環境分析やSTP分析を行うと、どんどん改善案が出てきて売上も回復しました。戦略の全体像を見直せて助かりました！
					</p>
				</div>
			</div>
			<div class="voice-flex-box">
				<div class="voice-flex-box-img">
					<picture>
						<source type="image/webp" srcset="<?php echo $imgPath; ?>/voice-flex-box-img03.webp">
						<img src="<?php echo $imgPath; ?>/voice-flex-box-img03.jpg" alt="">
					</picture>
				</div>
				<div class="voice-flex-box-text">
					<p>Y.Yさん・30代女性<br>
						SaaS事業会社のB to Bマーケター<br>
						コンテンツマーケティング担当者
					</p>
					<p>他部署と戦略を共有したら<br>
						どんどんコンテンツが生まれて<br>
						リード数は1.8倍、CPAは半分に</p>
					<p>
						受講前は、商談数を増やすためのWebコンテンツをどう作るかばかり考えていましたが成約に至らず、どう改善すればいいか悩んでいました。<br>
						しかし、講座で戦略を施策に落とし込むカスタマージャーニーマップを学び、チャネル×メッセージを整理して社内で共有したら一気に問題点が明確になったのです。<br>
						まず、営業部が伝える情報に変更があればすぐに連携して、お客様に一貫したメッセージを発信できました。さらに営業部からメルマガやイベントも提案されるようになり、リード数と商談数が増加しました。<br>
						また、プロダクト部サービスサイトの流入数も増加しました。元々会社が指定していたキーワードの検索量が減少し、新規競合の参入によって流入数は減少傾向に。そこで、マーケティング部で別のキーワードの記事コンテンツをサイトに追加したのです。<br>
						全体像と役割を共有することで、他部署と協力してコンテンツを提供し、私1人では作れない成果を得ました。
					</p>
				</div>
			</div>
		</div>
	</section>

	<section id="schedule">
		<h2>4月講座開催日程</h2>
		<div id="schedule-inner">
			<div class="schedule-box">
				<div class="schedule-table">
					<p class="schedule-table-first">第1回</p>
					<p class="schedule-table-first">4月11日（火）20:00~22:00</p>
				</div>
				<div class="schedule-table">
					<p>第2回</p>
					<p>4月18日（火）20:00~22:00</p>
				</div>
				<div class="schedule-table">
					<p>第3回</p>
					<p>4月25日（火）20:00~22:00</p>
				</div>
				<div class="schedule-table">
					<p>第4回</p>
					<p>5月9日（火）20:00~22:00</p>
				</div>
			</div>
			<div class="schedule-box">
				<div class="schedule-table">
					<p>第5回</p>
					<p>5月16日（火）20:00~22:00</p>
				</div>
				<div class="schedule-table">
					<p>第6回</p>
					<p>5月23日（火）20:00~22:00</p>
				</div>
				<div class="schedule-table">
					<p>第7回</p>
					<p>5月30日（火）20:00~22:00</p>
				</div>
				<div class="schedule-table">
					<p>第8回</p>
					<p>6月6日（火）20:00~22:00</p>
				</div>
			</div>
			<div class="schedule-box">
				<div class="schedule-table">
					<p>第9回</p>
					<p>6月13日（火）20:00~22:00</p>
				</div>
				<div class="schedule-table">
					<p>第10回</p>
					<p>6月20日（火）20:00~22:00</p>
				</div>
				<div class="schedule-table">
					<p>第11回</p>
					<p>6月27日（火）20:00~22:00</p>
				</div>
				<div class="schedule-table">
					<p class="schedule-table-last">第12回</p>
					<p class="schedule-table-last">7月4日（火）20:00~22:00</p>
				</div>
			</div>
		</div>
	</section>

	<div class="link-area02">
		<div class="link-area-content fadeIn">
			<p>4月受講生募集中！</p>
			<p class="link-area-content-heading">とりあえず話を聞いてみる</p>
			<button onclick="openEeasy()">無料相談はこちら</button>
			<p class="link-area-content-heading link-area-content-heading--white">今すぐ受講希望の方は</p>
			<a class="link-area-content-button link-area-content-button--red" href="./registration">
				講座を申し込む
			</a>
		</div>
	</div>

	<section id="feature">
		<h2>MERC Educationの特徴</h2>
		<div id="feature-chart">
			<div id="feature-chart-inner">
				<picture>
					<source type="image/webp" srcset="<?php echo $imgPath; ?>/feature-chart.webp">
					<img src="<?php echo $imgPath; ?>/feature-chart.png" alt="比較表">
				</picture>
			</div>
		</div>
	</section>

	<section id="detail">
		<div id="detail-flex01">
			<div id="detail-flex01-text">
				<div id="detail-flex01-text-inner" class="fadeIn02">
					<h2>MERC Educationの理念</h2>
					<p>
						広告で売上を伸ばすテクニックは必要です。
						しかし、今のデジタルマーケティングの現場では短期的な利益を求めるテクニックが優先されており、それだけでは成果が頭打ちになってしまいます。<br>
						<br>
						単に「売る」だけじゃなく、事業を「育てる」マーケター仲間をたくさん増やしたい。
					</p>
				</div>
			</div>
			<div id="detail-flex01-img">
				<picture>
					<source type="image/webp" srcset="<?php echo $imgPath; ?>/detail-flex-img01.webp">
					<img src="<?php echo $imgPath; ?>/detail-flex-img01.jpg">
				</picture>
			</div>
		</div>
		<div id="detail-flex02">
			<div id="detail-price" class="fadeIn">
				<h2>料金・お支払い方法</h2>
				<div id="detail-price-img">
					<img src="<?php echo $imgPath; ?>/detail-price-img.svg" alt="月々16,800円（税込）〜 ※一括払いの方は、186,780円（税込）">
				</div>
			</div>
			<p id="detail-flex02-text">
				※分割をご希望する場合は、クレジットカード払いの方のみとなり、受講者様とクレジットカード会社様との契約になります。<br>
				※分割手数料等については、クレジットカード会社様にお問い合わせお願い申し上げます。
			</p>
		</div>
		<div id="detail-flex03">
			<div id="detail-flex03-sub-heading">フォーム入力簡単1分！</div>
			<div id="detail-flex03-text">
				<div id="detail-flex03-text-inner" class="fadeIn02">
					<h2>
						<span class="del-sp">フォーム入力簡単1分！</span>
						まずはプロのマーケターに<br class="add-sp">無料カウンセリングで<br class="add-sp">ご相談ください！
					</h2>
					<p>
						「実務の悩みを聞いてほしい」「具体的なアウトプットを見たい」「今の実務にどう活かせるか」など…。プロのマーケターが親身になってお聞きします。
					</p>
					<p id="detail-flex03-labels">
						<span>体験講座のご案内</span>
						<span>オンラインで個別対応</span>
						<span> マーケターからアドバイス</span>
					</p>
				</div>
			</div>
			<div id="detail-flex03-img">
				<picture>
					<source type="image/webp" srcset="<?php echo $imgPath; ?>/detail-flex-img02.webp">
					<img src="<?php echo $imgPath; ?>/detail-flex-img02.jpg">
				</picture>
			</div>
		</div>
	</section>

	<div class="link-area02">
		<div class="link-area-content fadeIn">
			<p>4月受講生募集中！</p>
			<p class="link-area-content-heading">とりあえず話を聞いてみる</p>
			<button onclick="openEeasy()">無料相談はこちら</button>
			<p class="link-area-content-heading link-area-content-heading--white">今すぐ受講希望の方は</p>
			<a class="link-area-content-button link-area-content-button--red" href="./registration">
				講座を申し込む
			</a>
		</div>
	</div>

	<section id="question">
		<h2>よくあるご質問</h2>
		<div id="question-content-container">

			<div class="question-content-box">
				<div class="question-content-box-heading question-content-box-heading-active">
					<h3>
						<span>Q1.</span><span>オンラインで受講は可能ですか？</span>
					</h3>
					<div class="question-content-box-heading-btn">
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="question-content-text question-content-text-active">
					<p>
						はい、オンラインの受講は可能です。<br>
						ワークショップは簡単に操作ができるシステムを活用しながら受講生同士で話し合い、作業が行えます。
					</p>
				</div>
			</div>
			<div class="question-content-box">
				<div class="question-content-box-heading">
					<h3>
						<span>Q2.</span><span>受講に年齢制限はありますか？</span>
					</h3>
					<div class="question-content-box-heading-btn">
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="question-content-text">
					<p>
						年齢制限はございません。<br>
						基礎講座・特別講座を含めると、これまで200名以上の方に受講いただきましたが、中学生から50代後半の方まで幅広い年齢層の方が受講しております。
					</p>
				</div>
			</div>
			<div class="question-content-box">
				<div class="question-content-box-heading">
					<h3>
						<span>Q3.</span><span>仕事や家事があるのですが、両立してスキルを身につけられますか？</span>
					</h3>
					<div class="question-content-box-heading-btn">
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="question-content-text">
					<p>
						問題なく両立できます。<br>
						基本的には教室での受講がベストですが、皆さまお仕事や家庭の事情がございますので、今までの受講生の方は、専門スタッフによる個別補講を行うことで最後までやりきれました。
					</p>
				</div>
			</div>
			<div class="question-content-box">
				<div class="question-content-box-heading">
					<h3>
						<span>Q4.</span><span>マーケティングのことが全くわかりませんが、問題なく受講できますか？</span>
					</h3>
					<div class="question-content-box-heading-btn">
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="question-content-text">
					<p>
						はい、全く問題ございません。<br>
						ご自身で真剣に学び、講師に質問しながらコツコツ頑張れるという気持ちがあれば全く心配ありません。
					</p>
				</div>
			</div>
			<div class="question-content-box">
				<div class="question-content-box-heading">
					<h3>
						<span>Q5.</span><span>講義動画の視聴期限はありますか？</span>
					</h3>
					<div class="question-content-box-heading-btn">
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="question-content-text">
					<p>
						動画の視聴期限はございません。<br>
						ただし、万が一事務局の都合により掲載サイトもしくは視聴ページが閉鎖される場合は、事前に告知の上別途視聴できるものをご提供いたします。
					</p>
				</div>
			</div>
			<div class="question-content-box">
				<div class="question-content-box-heading">
					<h3>
						<span>Q6.</span><span>分割払いは可能でしょうか？</span>
					</h3>
					<div class="question-content-box-heading-btn">
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="question-content-text">
					<p>
						最大12回分割が可能です。<br>
						お客様のスケジュールに合わせて柔軟に対応することもできますので、お気軽にご相談ください。
					</p>
				</div>
			</div>
			<div class="question-content-box">
				<div class="question-content-box-heading">
					<h3>
						<span>Q7.</span><span>キャンセルに伴う返金は対応できますか？</span>
					</h3>
					<div class="question-content-box-heading-btn">
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="question-content-text">
					<p>
						原則、本申し込み後の返金は対応出来かねます。<br>
						予めご了承下さい。
					</p>
				</div>
			</div>
			<div class="question-content-box">
				<div class="question-content-box-heading">
					<h3>
						<span>Q8.</span><span>領収書は発行できますか？</span>
					</h3>
					<div class="question-content-box-heading-btn">
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="question-content-text">
					<p>
						はい、領収書は事務局より発行させていただきます。<br>
						また、自己啓発費用として企業様がお金を負担してくれるケースもございますので、その際は柔軟に書面を発行させていただきます。
					</p>
				</div>
			</div>

		</div>
	</section>

	<?php get_footer(); ?>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="<?php echo $jsPath; ?>/animation.js"></script>
	<?php get_template_part('template-parts/eeasy/prod'); ?>
</body>

</html>
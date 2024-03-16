<?php
// テスト本番共通の変数です

// カスタムフィールド取得
$payment_text = get_post_meta($post->ID, 'payment_text', true);

// Googleフォームの項目
$paymentMethod = ["クレジットカード（一括払い/分割払い）", "銀行振込（一括払い）",];
$occupation = ["会社員", "経営者・役員", "フリーランス", "公務員", "パート・アルバイト", "学生", "その他"];
$experience = ["市場調査・分析", "商品企画・サービス開発", "プロモーション施策の企画", "販売戦略の企画", "広告運用", "なし", "その他"];
$purpose = ["勤めている会社の業務に役立てるため", "個人の事業に役立てるため", "スキルアップし転職を考えているため", "趣味で活用するため", "独学で学べないプロのスキルを習得するため", "その他"];
$trigger = ["検索エンジン", "ホームページ", "Facebook", "Twitter", "口コミ", "デジハリからのお知らせ", "知人からの紹介", "その他"];
$counseling = ["あり", "なし"];
$yearRange = range(date('Y') - 80, date('Y') - 16);
$year = [];
foreach ($yearRange as $key => $value) {
	array_push($year, strval($value));
};
$monthRange = range(1, 12);
$month = [];
foreach ($monthRange as $key => $value) {
	array_push($month, strval($value));
};
$dayRange = range(1, 31);
$day = [];
foreach ($dayRange as $key => $value) {
	array_push($day, strval($value));
};
$inputSelectionPath = "template-parts/paygent/input-selection";

<?php

/**
 * Emanon Pro child function
 */

// 圧縮版style.cssの読み込み切り替え
function emanon_enqueue_style() {
	$css_minified = get_theme_mod('css_minified', '');
	$stop_animation = get_theme_mod('stop_animation', '');
	if ($css_minified) {
		wp_enqueue_style('emanon-style-min', get_template_directory_uri() . '/style-min.css');
	} else {
		wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
		wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');
		if (!$stop_animation) {
			wp_enqueue_style('animate', get_template_directory_uri() . '/lib/css/animate.min.css');
		}
	}
}

// style.cssの統合
function emanon_css_compression() {
	$stop_animation = get_theme_mod('stop_animation', '');
	$parent_css = TEMPLA . '/style.css';
	$child_css = STYLE . '/style.css';
	$animate_css = TEMPLA . '/lib/css/animate.min.css';

	$css = '';

	if (WP_Filesystem()) { //WP_Filesystemの初期化
		global $wp_filesystem; //$wp_filesystemオブジェクトの呼び出し
		if (is_file($parent_css)) $css .= $wp_filesystem->get_contents($parent_css);
		if (is_file($child_css)) $css .= $wp_filesystem->get_contents($child_css);
		if (is_file($animate_css) && !$stop_animation) $css .= $wp_filesystem->get_contents($animate_css);
	}

	// CSS 圧縮
	if (class_exists('CSSmin')) {
		$minify = new CSSmin();
		if (method_exists($minify, "run")) {
			$css = trim($minify->run($css));
		}

		$style_min = TEMPLA . '/style-min.css';

		// 圧縮後のCSSファイル保存
		if (WP_Filesystem()) { //WP_Filesystemの初期化
			global $wp_filesystem; //$wp_filesystemオブジェクトの呼び出し
			//$wp_filesystemオブジェクトのメソッドとしてファイルに書き込む
			$wp_filesystem->put_contents($style_min, $css);
		}

		return;
	}
}
add_action('customize_save_after', 'emanon_css_compression', 10, 1);


//子テーマ用のビジュアルエディタースタイル
add_editor_style('lib/css/editor-style.css');

//Emanon Pro 子テーマ用の関数を以下に記述

// 子テーマディレクトリのパス取得
function getChildThemePath($dir = "") {
	return get_stylesheet_directory_uri() . $dir;
}

// コメントオフ
add_filter('comments_open', '__return_false');

// head追加
function add_head_custom() {
	// ページテンプレート分岐
	if (is_single()) {
		echo '<script src="' . getChildThemePath('/assets/js/index.js') . '" defer></script>';
	}

	// ページ分岐
	if (is_page('contact/thanks_ad') || is_page('test-eeasy-thanks-ad')) {
		// eeasy広告講座サンクスページ
		$order_num = isset($_GET['ordernum']) ? sanitize_text_field($_GET['ordernum']) : '';
		if ($order_num) {
			echo '<script type="text/javascript" src="https://js.felmat.net/fmcv.js?adid=M89751&uqid=' . $order_num . '&item=murilyousoudan.1.0"></script>';
		}
	} else if (is_page('contact/thanks') || is_page('test-eeasy-thanks')) {
		// eeasy戦略講座サンクスページ
		$order_num = isset($_GET['ordernum']) ? sanitize_text_field($_GET['ordernum']) : '';
		if ($order_num) {
			echo '<script type="text/javascript" src="https://js.felmat.net/fmcv.js?adid=W8832D&uqid=' . $order_num . '&item=murilyousoudan.1.0"></script>';
		}
	} else if (is_page('registration/thanks')) {
		echo '<script type="text/javascript" src="https://js.felmat.net/fmcv.js?adid=W8832D&uqid=TIMESTAMP&item=kouzamousikomi.1.0"></script>';
	} else if (is_page('registration/ad/thanks')) {
		echo '<script type="text/javascript" src="https://js.felmat.net/fmcv.js?adid=M89751&uqid=TIMESTAMP&item=kouzamousikomi.1.0"></script>';
	} else if (is_page('registration') || is_page('registration/ad') || is_page('paygent') || is_page('paygent-ad')) {
		echo '<link rel="stylesheet" href="' . getChildThemePath('/assets/css/template-parts/paygent-form.css') . '">';
		echo '<link rel="stylesheet" href="' . getChildThemePath('/assets/css/page/registration.css') . '">';
	}

	// テンプレート分岐
	if (is_page_template('template/thanks.php')) {
		echo '<link rel="stylesheet" href="' . getChildThemePath('/lp/front-page/css/style.css') . '">';
		echo '<link rel="stylesheet" href="' . getChildThemePath('/assets/css/template/thanks.css') . '?timestamp=20232033">';
	} else if (is_page_template('template/general-template.php')) {
		echo '<link rel="stylesheet" href="' . getChildThemePath('/assets/css/template/general.css') . '">';
	}
}
add_action('wp_head', 'add_head_custom', 99);

// REST APIでアイキャッチ画像を返すようにする
add_action('rest_api_init', 'add_thumbnail_to_JSON');
function add_thumbnail_to_JSON() {
	register_rest_field(
		'post',
		'featured_image',
		array(
			'get_callback' => 'get_image',
			'update_callback' => null,
			'schema' => null,
		)
	);
}

function get_image($object, $field_name, $request) {
	$feat_img_array = wp_get_attachment_image_src($object['featured_media'], 'large', true);
	return [
		'src' => $feat_img_array[0],
		'width' => $feat_img_array[1],
		'height' => $feat_img_array[2],
	];
}

// ハッシュ値生成
function generate_hash(WP_REST_Request $request) {
	$tradingId = $request['tradingId'];
	$id = $request['id'];
	$hashKey = $request['hashKey'];
	$merchantId = $request['merchantId'];

	// ハッシュ値の生成
	$hash = hash('sha256', $tradingId . '02' . $id . $merchantId . '1' . $hashKey);

	return new WP_REST_Response(array('hash' => $hash), 200);
}
add_action('rest_api_init', function () {
	register_rest_route('custom/v1', '/generate-hash/', array(
		'methods' => 'POST',
		'callback' => 'generate_hash',
		'permission_callback' => '__return_true',
	));
});

// セッションを有効にする
function start_session() {
	if (!session_id()) {
		session_start();
	}
}
add_action('init', 'start_session', 1);

// ショートコード
function get_saved_email_shortcode() {
	if (isset($_SESSION['saved_email'])) {
		return '（' . esc_html($_SESSION['saved_email']) . '）';
	}
	return '';
}
add_shortcode('saved_email', 'get_saved_email_shortcode');

function handle_form_submission() {
	$googleFormUrl = $_POST['google_form_url'];
	$email = $_POST['email_value'];
	// Google FormsへのPOST
	$response = wp_remote_post($googleFormUrl, array(
		'body' => $_POST['form_data']
	));

	if (is_wp_error($response) || wp_remote_retrieve_response_code($response) != 200) {
		wp_send_json_error();
		return;
	}

	// セッションへのメールアドレスの保存
	session_start();
	$_SESSION['saved_email'] = sanitize_email($email);

	wp_send_json_success();
}

add_action('wp_ajax_handle_form_submission', 'handle_form_submission');
add_action('wp_ajax_nopriv_handle_form_submission', 'handle_form_submission');

// カスタム投稿タイプ追加
function create_custom_post_types() {
	register_post_type(
		'corporate',
		array(
			'labels' => array(
				'name' => __('コーポレート'),
				'singular_name' => __('コーポレート')
			),
			'public' => true,
			'show_in_rest' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'corporate'),
			'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
			'taxonomies' => array('category')
		)
	);
	register_post_type(
		'consulting',
		array(
			'labels' => array(
				'name' => __('コンサルティング'),
				'singular_name' => __('コンサルティング')
			),
			'public' => true,
			'show_in_rest' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'consulting'),
			'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
			'taxonomies' => array('category')
		)
	);
}

add_action('init', 'create_custom_post_types');

// カスタムエンドポイント追加
include get_stylesheet_directory() . '/functions/api-endpoints.php';

// Webhook通知設定
function post_save_wordpress($post_id, $post_after, $post_before) {
	if ((defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) ||
		wp_is_post_revision($post_id) ||
		!in_array($post_after->post_type, ['post', 'corporate', 'consulting'])
	) {
		return;
	}

	$prev_status = $post_before->post_status;
	$new_status = $post_after->post_status;

	error_log("Previous status: $prev_status, New status: $new_status");

	if (($prev_status === 'publish' && in_array($new_status, ['draft', 'trash', 'private'])) ||
		($prev_status !== 'publish' && $new_status === 'publish') ||
		($prev_status === 'publish' && $new_status === 'publish')
	) {
		// 環境変数からWebhook URLとGitHub Tokenを取得
		$webhook_url = WEBHOOK_URL;
		$token = GITHUB_TOKEN;

		// Webhookに送信するデータ
		$data = [
			'event_type' => 'post_save_wordpress',
			'client_payload' => array(
				'post_id' => $post_id,
				'message' => 'A post was created or updated.'
			)
		];

		// リクエストのヘッダー
		$headers = [
			'Authorization' => 'Bearer ' . $token,
			'Content-Type' => 'application/json',
			'User-Agent' => 'post_save_wordpress'
		];

		// WordPressのHTTP APIを使用してPOSTリクエストを送信
		$response = wp_remote_post($webhook_url, array(
			'headers' => $headers,
			'body' => json_encode($data),
			'method' => 'POST',
			'data_format' => 'body'
		));

		// 応答をチェック（必要に応じてエラーハンドリングを追加）
		if (is_wp_error($response)) {
			$error_message = $response->get_error_message();
			// エラーログにメッセージを記録
			error_log("GitHub Actions Webhook Error: $error_message");
		}
	}
}

add_action('post_updated', 'post_save_wordpress', 10, 3);

add_action('rest_api_init', function () {
	remove_filter('rest_pre_serve_request', 'rest_send_cors_headers');
}, 15);

/**
 * アイキャッチの表示を分岐するフィールドをカスタム投稿に追加（親テーマで設定されたもの）
 */
function emanon_add_thumbnail_meta_box_to_custom_post_types() {
	$custom_post_types = ['corporate', 'consulting'];

	foreach ($custom_post_types as $post_type) {
		add_meta_box('thumbnail_setting', __('Thumbnail setting', 'emanon'), 'thumbnail_setting_form', $post_type, 'side', 'low');
	}
}
add_action('admin_menu', 'emanon_add_thumbnail_meta_box_to_custom_post_types');

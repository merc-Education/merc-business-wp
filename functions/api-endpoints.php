<?php

include get_stylesheet_directory() . '/includes/api/callback.php';

/*
 * カスタムエンドポイントを登録
 */
function register_custom_endpoints() {
	$endpoints = [
		'home-posts' => [
			'callback' => 'get_home_posts'
		],
		'popular-posts' => [
			'callback' => 'get_popular_posts'
		],
		'categories' => [
			'callback' => 'get_categories_custom'
		],
		'post/(?P<id>\d+)' => [
			'callback' => 'get_post_custom_2',
			'args' => [
				'id' => [
					'validate_callback' => function ($param, $request, $key) {
						return is_numeric($param);
					},
					'required' => true,
					'description' => 'The unique identifier for a post.',
				],
			],
		],
		'posts' => [
			'callback' => 'get_posts_custom',
			'args' => [
				'post_type' => [
					'validate_callback' => function ($param, $request, $key) {
						return is_string($param);
					},
					'sanitize_callback' => 'sanitize_text_field'
				],
				'category' => [
					'validate_callback' => function ($param, $request, $key) {
						return is_string($param);
					},
					'sanitize_callback' => 'sanitize_text_field'
				],
				'per_page' => [
					'validate_callback' => function ($param, $request, $key) {
						return is_numeric($param);
					},
					'sanitize_callback' => 'absint',
				],
				'paged' => [
					'validate_callback' => function ($param, $request, $key) {
						return is_numeric($param);
					},
					'sanitize_callback' => 'absint',
				],
				'search' => [
					'validate_callback' => function ($param, $request, $key) {
						return is_string($param);
					},
					'sanitize_callback' => 'sanitize_text_field'
				],
			],
		],
	];

	foreach ($endpoints as $endpoint => $data) {
		register_rest_route('custom/v1', $endpoint, [
			'methods' => 'GET',
			'callback' => $data['callback'],
			'args' => $data['args'] ?? [],
			'permission_callback' => '__return_true',
		]);
	}
}

add_action('rest_api_init', 'register_custom_endpoints');

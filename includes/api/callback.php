<?php

// REST APIのcallback関数
include get_stylesheet_directory() . '/includes/utils/index.php';

/**
 * 人気記事
 */
function get_popular_posts() {
	$query_params = [
		'order_by' => 'views',
		'range' => 'monthly',
		'post_type' => 'post,corporate,consulting',
		'limit' => 5,
	];
	$query = new \WordPressPopularPosts\Query($query_params);
	$popular_posts = $query->get_posts();

	$data = array_map(function ($post) {
		return [
			'id' => $post->id,
			'title' => $post->title,
			'link' => get_permalink($post->id),
			'postType' => get_post_type($post->id),
			'category' => get_category_info($post->id),
			'slug' => get_post_field('post_name', $post->id),
		];
	}, $popular_posts);

	return new WP_REST_Response($data, 200);
}

/**
 * カテゴリー一覧
 */
function get_categories_custom() {
	$args = [
		'hide_empty' => false, // 空のカテゴリーも含める
	];
	$categories = get_categories($args);

	$data = [];
	foreach ($categories as $category) {
		if ($category->slug !== 'uncategorized') {
			$data[] = [
				'id' => $category->term_id,
				'slug' => $category->slug,
				'name' => $category->name,
			];
		}
	}
	return new WP_REST_Response($data, 200);
}

/**
 * 記事一覧
 */
function get_posts_custom($request) {
	$category = $request['category'] ?? '';
	$posts_per_page = $request['per_page'] ?? 10;
	$post_types = isset($request['post_type']) ? explode(',', $request['post_type']) : ['post', 'corporate', 'consulting'];
	$paged = $request['paged'] ?? 1;
	$search = $request['search'] ?? ''; // 検索文字列

	$args = [
		'post_type' => $post_types,
		'posts_per_page' => $posts_per_page,
		'orderby' => 'date',
		'paged' => $paged,
		'order' => 'DESC',
		's' => $search,
	];

	if (!empty($category)) {
		$args['category_name'] = $category;
	}

	$formatted_posts = get_posts_by_args($args);

	$query = new WP_Query($args);
	$max_num_pages = $query->max_num_pages;

	$pagination = [
		'currentPage' => $paged,
		'totalPages' => $max_num_pages,
	];

	return [
		'posts' => $formatted_posts,
		'pagination' => $pagination,
	];
}

/**
 * 記事詳細
 */
function get_post_custom_2($request) {
	$post_id = $request['id'];
	$post = get_post($post_id);

	if (!$post) return null;

	$category = get_category_info($post_id);
	$hide_thumbnail = get_post_meta($post_id, 'emanon_none_display_thumbnail', true);
	$thumbnail_url = empty($hide_thumbnail) ? get_thumbnail_url($post_id) : null;
	$author_info = [
		'icon' => get_avatar_url($post->post_author),
		'name' => get_the_author_meta('display_name', $post->post_author),
		'description' => get_the_author_meta('description', $post->post_author),
	];
	$previous_post = get_adjacent_post_custom($post_id, $category['id'], true);
	$next_post = get_adjacent_post_custom($post_id, $category['id'], false);
	$related_posts = get_related_posts($post_id, $category['id']);

	return [
		'id' => $post_id,
		'postType' => get_post_type($post_id),
		'title' => $post->post_title,
		'date' => get_the_date('Y.n.j', $post_id),
		'category' => $category,
		'link' => get_permalink($post_id),
		'thumbnail' => $thumbnail_url,
		'slug' => $post->post_name,
		'content' => apply_filters('the_content', $post->post_content),
		'author' => $author_info,
		'previousPost' => $previous_post,
		'nextPost' => $next_post,
		'relatedPosts' => $related_posts,
	];
}

/**
 * ホーム用の投稿を取得する関数
 */
function get_home_posts($request) {
	$categories = [
		'news' => [
			'post_type' => 'corporate',
			'posts_per_page' => 3,
		],
		'case' => [
			'post_type' => ['post', 'corporate', 'consulting'],
			'posts_per_page' => 100,
			'meta_query' => [
				[
					'key' => 'publish_on_corporate_site',
					'value' => true,
				],
			],
		],
		'seminar' => [
			'post_type' => ['post', 'corporate', 'consulting'],
			'posts_per_page' => 100,
			'meta_query' => [
				[
					'key' => 'publish_on_corporate_site',
					'value' => true,
				],
			],
		],
		'blog' => [
			'post_type' => ['post', 'corporate', 'consulting'],
			'posts_per_page' => 3,
		],
	];

	foreach ($categories as $category => $args) {
		if ($category !== 'blog') {
			$args['category_name'] = $category;
		}

		$posts = get_posts_by_args($args);

		if (in_array($category, ['case', 'seminar'])) {
			foreach ($posts as &$post) {
				$post['modifiedDate'] = slug_to_date($post['slug']);
			}
			unset($post);
		}
		$posts_data[$category] = $posts;
	}

	return new WP_REST_Response($posts_data, 200);
}

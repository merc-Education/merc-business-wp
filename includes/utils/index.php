<?php

/**
 * カテゴリー情報を取得する共通関数
 */
function get_category_info($post_id) {
	$categories = get_the_category($post_id);
	if (empty($categories)) {
		return [
			'id' => 1,
			'name' => 'uncategorized',
			'slug' => 'uncategorized',
			'description' => '未分類'
		];
	}
	return [
		'id' => $categories[0]->term_id,
		'name' => $categories[0]->name,
		'slug' => $categories[0]->slug,
		'description' => $categories[0]->description
	];
}

/**
 * サムネイルURLを取得する共通関数
 */
function get_thumbnail_url($post_id, $size = 'full') {
	$thumbnail_id = get_post_thumbnail_id($post_id);
	return $thumbnail_id ? wp_get_attachment_image_url($thumbnail_id, $size) : '';
}

/**
 * 指定した投稿IDから前後の記事を取得する
 */
function get_adjacent_post_custom($post_id, $category_id, $previous = true) {
	$post = get_post($post_id);
	if (!$post) {
		return null;
	}

	$args = [
		'post_type' => get_post_type($post),
		'posts_per_page' => 1,
		'order' => $previous ? 'DESC' : 'ASC',
		'date_query' => array(
			array(
				$previous ? 'before' : 'after' => $post->post_date,
				'inclusive' => false,
			),
		),
		'post__not_in' => [$post_id],
		'category__in' => [$category_id]
	];

	$query = new WP_Query($args);
	if (!$query->have_posts()) {
		return null;
	}

	$adjacent_post = $query->posts[0];
	return [
		'id' => $adjacent_post->ID,
		'title' => get_the_title($adjacent_post->ID),
		'link' => get_permalink($adjacent_post->ID),
		'postType' => get_post_type($adjacent_post->ID),
		'thumbnail' => get_thumbnail_url($adjacent_post->ID, 'thumbnail'),
		'date' => get_the_date('Y.n.j', $adjacent_post->ID),
	];
}

/**
 * 投稿IDとカテゴリーIDから関連記事を取得する
 */
function get_related_posts($post_id, $category_id) {
	$args = [
		'post_type' => ['post', 'corporate', 'consulting'],
		'category__in' => [$category_id],
		'posts_per_page' => 4,
		'post__not_in' => [$post_id],
		'orderby' => 'date',
		'order' => 'DESC',
	];
	$related_posts = get_posts($args);

	$data = array_map(function ($post) {
		$post_id = $post->ID;
		return [
			'id' => $post_id,
			'title' => get_the_title($post_id),
			'link' => get_permalink($post_id),
			'postType' => get_post_type($post_id),
			'thumbnail' => get_thumbnail_url($post_id, 'thumbnail'),
			'date' => get_the_date('Y.n.j', $post_id),
		];
	}, $related_posts);

	return $data;
}

/**
 * スラッグを日付に変換する関数
 */
function slug_to_date($slug) {
	if (!preg_match('/^\d{8}(-\d+)?$/', $slug)) {
		return null;
	}

	$weekdays = ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'];

	// slugから年、月、日を抽出
	$year = substr($slug, 0, 4);
	$month = substr($slug, 4, 2);
	$day = substr($slug, 6, 2);

	// 曜日を取得
	$dateString = "{$year}-{$month}-{$day}";
	$date = new DateTime($dateString);
	$weekdayIndex = (int)$date->format('w');
	$weekday = $weekdays[$weekdayIndex];

	return "{$year}.{$month}.{$day} {$weekday}";
}

/**
 * 投稿一覧を指定の戻り値に整形して返す
 */
function get_posts_by_args($args) {
	$posts = get_posts($args);

	$posts_data = array_map(function ($post) {
		$post_id = $post->ID;
		$thumbnail_url = get_thumbnail_url($post_id);
		$category = get_category_info($post_id);

		return array(
			'id'    => $post_id,
			'title' => $post->post_title,
			'link'  => get_permalink($post_id),
			'thumbnail' => $thumbnail_url,
			'postType' => get_post_type($post_id),
			'slug' => $post->post_name,
			'date' => get_the_date('Y.n.j', $post_id),
			'category' => $category,
		);
	}, $posts);

	return $posts_data;
}

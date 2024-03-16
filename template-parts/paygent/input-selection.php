<?php
// $argsから各変数を取得、デフォルト値も設定
$args = wp_parse_args($args, [
	'name' => '',
	'items' => [],
	'type' => 'radio',
	'class' => '',
	'data' => '',
]);
['name' => $name, 'items' => $items, 'type' => $type, 'class' => $class, 'data' => $data] = $args;
?>

<div class="c-paygent-form__item-radio">
	<?php foreach ($items as $item) : ?>
		<?php $isOther = $item === "その他"; ?>
		<div class="u-flex u-items-center <?php echo $isOther ? esc_attr("c-radio-other") : ""; ?>">
			<label>
				<input <?php echo esc_attr($data); ?> id="<?php echo $isOther ? esc_attr($class . "-other") : ""; ?>" class="<?php echo esc_attr($class); ?>" type="<?php echo esc_attr($type); ?>" name="<?php echo esc_attr($name); ?>" value="<?php echo $isOther ? "__other_option__" : esc_attr($item); ?>" <?php echo ($type === "radio" && $items[0] === $item) ? "checked" : ""; ?>>
				<span><?php echo esc_html($item); ?></span>
			</label>
			<?php if ($isOther) : ?>
				<input id="<?php echo esc_attr($class . "-other-text"); ?>" class="<?php echo esc_attr($class); ?>" type="text" name="<?php echo esc_attr($name); ?>.other_option_response">
			<?php endif; ?>
		</div>
	<?php endforeach; ?>
</div>
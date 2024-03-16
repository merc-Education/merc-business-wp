<?php
global $post;

require_once get_stylesheet_directory() . '/template-parts/paygent/common/variables/common.php';
require_once get_stylesheet_directory() . '/template-parts/paygent/prod/variables/common.php';

?>
<form id="googleForm" action="<?php echo $googleFormAction; ?>" class="c-paygent-form">
	<label class="c-paygent-form__item required u-items-center">
		<span>お名前</span>
		<input type="text" name="<?php echo $gNameName; ?>" data-required data-name="お名前">
	</label>
	<label class="c-paygent-form__item required u-items-center">
		<span>メールアドレス</span>
		<input type="text" name="<?php echo $gNameEmail; ?>" data-required data-name="メールアドレス">
	</label>
	<label class="c-paygent-form__item required u-items-center">
		<span>電話番号</span>
		<div class="c-placeholder">
			<input id="tel" type="tel" name="<?php echo $gNameTel; ?>" data-required data-name="電話番号">
			<span class="placeholder">例）08012345678</span>
		</div>
	</label>
	<div class="c-paygent-form__item required u-items-center">
		<span>生年月日</span>
		<div class="c-paygent-form__item-date">
			<input id="birth" type="hidden" name="<?php echo $gNameBirth; ?>">
			<div class="c-paygent-form__item-date-select">
				<select id="birthYear" name="birthYear">
					<?php foreach ($year as $item) : ?>
						<option value="<?php echo $item; ?>"><?php echo $item; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<span>年</span>
			<div class="c-paygent-form__item-date-select">
				<select id="birthMonth" name="birthMonth">
					<?php foreach ($month as $item) : ?>
						<option value="<?php echo $item; ?>"><?php echo $item; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<span>月</span>
			<div class="c-paygent-form__item-date-select">
				<select id="birthDay" name="birthDay">
					<?php foreach ($day as $item) : ?>
						<option value="<?php echo $item; ?>"><?php echo $item; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<span>日</span>
		</div>
	</div>
	<label class="c-paygent-form__item required u-items-center">
		<span>郵便番号</span>
		<div class="c-placeholder">
			<input type="text" name="<?php echo $gNameYubin; ?>" data-required data-name="郵便番号">
			<span>例）123-4567</span>
		</div>
	</label>
	<label class="c-paygent-form__item required u-items-center">
		<span>住所</span>
		<input type="text" name="<?php echo $gNameAddress; ?>" data-required data-name="住所">
	</label>

	<div class="c-paygent-form__item c-paygent-form__item--multiline required">
		<span>支払い方法</span>
		<div>
			<p class="c-paygent-form__notion">分割をご希望する場合は、クレジットカードにチェックをお願いします。分割払いに関しては、受講者様とクレジットカード会社様との契約になります。<br>
				次ページで分割回数を選択できるようになっております。分割手数料、その他ご不明点はクレジットカード会社様にお問い合わせお願い申し上げます。</p>
			<?php
			$args = [
				'name' => $gNamePaymentMethod,
				'items' => $paymentMethod,
				'type' => 'radio',
				'data' => 'data-payment-method'
			];
			get_template_part($inputSelectionPath, null, $args);
			?>
		</div>
	</div>

	<div class="c-paygent-form__item c-paygent-form__item--multiline required">
		<span>お支払金額</span>
		<div>
			<?php if (!empty($payment_text)) : ?>
				<p class="c-paygent-form__notion">
					<?php echo $payment_text; ?>
				</p>
			<?php endif; ?>
			<div class="c-paygent-form__item-radio">
				<?php foreach ($price as $key => $item) : ?>
					<div class="u-flex u-items-center">
						<label>
							<input data-price class="check-price" type="radio" name="<?php echo $gNamePrice; ?>" value="<?php echo $item['value']; ?>" <?php echo $key === 0 ? 'checked' : ''; ?>>
							<span><?php echo $item['value'] . $item['text'] ?></span>
						</label>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<div class="c-paygent-form__item c-paygent-form__item--multiline required">
		<span>職業</span>
		<?php
		$args = [
			'name' => $gNameOccupation,
			'items' => $occupation,
			'type' => 'radio',
			'class' => 'check-occupation'
		];
		get_template_part($inputSelectionPath, null, $args);
		?>
	</div>
	<div class="c-paygent-form__item c-paygent-form__item--multiline required">
		<span>マーケティング実務経験</span>
		<?php
		$args = [
			'name' => $gNameExperience,
			'items' => $experience,
			'type' => 'checkbox',
			'class' => 'check-experience'
		];
		get_template_part($inputSelectionPath, null, $args);
		?>
	</div>
	<div class="c-paygent-form__item c-paygent-form__item--multiline required">
		<span>受講目的</span>
		<?php
		$args = [
			'name' => $gNamePurpose,
			'items' => $purpose,
			'type' => 'checkbox',
			'class' => 'check-purpose'
		];
		get_template_part($inputSelectionPath, null, $args);
		?>
	</div>

	<div class="c-paygent-form__item c-paygent-form__item--multiline required">
		<span>MERCを知ったきっかけ</span>
		<?php
		$args = [
			'name' => $gNameTrigger,
			'items' => $trigger,
			'type' => 'radio',
			'class' => 'check-trigger'
		];
		get_template_part($inputSelectionPath, null, $args);
		?>
	</div>

	<div class="c-paygent-form__item c-paygent-form__item--multiline required">
		<span>弊社無料カウンセリングの経験</span>
		<?php
		$args = [
			'name' => $gNameCounseling,
			'items' => $counseling,
			'type' => 'radio',
		];
		get_template_part($inputSelectionPath, null, $args);
		?>
	</div>
	<label class="c-paygent-form__item">
		<span>その他・問い合わせ</span>
		<textarea name="<?php echo $gNameOther; ?>" id="" cols=" 30" rows="3"></textarea>
	</label>
	<div class="c-paygent-form__item-term">
		<label>
			<input id="terms" type="checkbox" name="<?php echo $gNameTerms; ?>" value="同意します">
			<span><a href="<?php echo home_url('term'); ?>" target="_blank">利用規約</a>へ同意</span>
		</label>
	</div>
	<div>
		<div class="c-paygent-form__button">
			<button id="submitButton" type="button">
				<span>送</span>
				<span>信</span>
			</button>
		</div>
		<p class="c-paygent-form__button-text">
			当社との利用契約が成立した場合には、当社からメールでご連絡させていただきます。<br>
			支払い方法で「クレジットカード」を選択いただいたお客様は、決済画面に遷移します。
		</p>
	</div>
</form>
<!-- PAYGENT用フォーム -->
<form id="paygentForm" method="post" action="<?php echo $paygentAction; ?>">
	<input id="trading_id" type="hidden" name="trading_id" />
	<input type="hidden" name="payment_type" value="02" />
	<input type="hidden" name="payment_class" value="1" />
	<input id="id" type="hidden" name="id" />
	<input id="merchant_id" type="hidden" name="seq_merchant_id" value="<?php echo $paygentMerchantId; ?>" />
	<input type="hidden" name="return_url" value="<?php echo $paygentReturnUrl; ?>">
	<input type="hidden" name="finish_disable" value="1">
	<input type="hidden" name="sales_flg" value="1">
	<input id="hc" type="hidden" name="hc">
</form>

<script>
	const FORM_URL = <?php echo json_encode($googleFormAction); ?>;
	const ERROR_URL = "<?php echo home_url('/error'); ?>";
	const THANKS_URL = <?php echo json_encode($thanks_page); ?>;
</script>
<script src="<?php echo getChildThemePath('/dist/js/paygent.js') ?>">
</script>
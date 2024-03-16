<?php
$imgPath = getChildThemePath('/assets/img');
?>
<footer class="c-footer">
	<div class="c-footer__inner">
		<div class="c-footer__top">
			<div class="c-footer-outline">
				<div class="c-footer-outline__name"><span>MERC Education</span> 事務局</div>
				<div class="c-footer-outline__txt">講座、教育プログラムなどお気軽にお問い合わせください</div>
			</div>
			<div class="c-footer-contact">
				<div class="c-footer-contact__mail"><img src="<?php echo $imgPath; ?>/icon/icon_mail.svg" alt=""><a href="mailto:education@merc-m.co.jp">education@merc-m.co.jp</a></div>
				<div class="c-footer-contact-tel">
					<div class="c-footer-contact-tel__number"><img src="<?php echo $imgPath; ?>/icon/icon_tel.svg" alt=""><a href="tel:0367746911">03-6774-6911</a></div>
					<div class="c-footer-contact-tel__time">受付時間：11時〜18時　※土日祝日を除く</div>
				</div>
			</div>
		</div>
		<div class="c-footer__bottom">
			<ul class="c-footer-list">
				<li class="c-footer-list__item"><a href="https://merc-m.co.jp/" target="_blank">会社概要</a></li>
				<li class="c-footer-list__item"><a href="https://merc-m.co.jp/privacy-policy/" target="_blank">プライバシーポリシー</a></li>
				<li class="c-footer-list__item"><a href="https://merc-m.co.jp/contact/" target="_blank">お問い合わせ</a></li>
				<li class="c-footer-list__item"><a href="<?php echo home_url('/legal'); ?>">特定商取引に関する法律に基づく表示</a></li>
				<li class="c-footer-list__item"><a href="<?php echo home_url('/term'); ?>">利用規約</a></li>
			</ul>
		</div>
		<div class="c-footer__copy">Copyright MERC Inc.</div>
	</div>
</footer>
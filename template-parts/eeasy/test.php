<?php
$googleFormUrl = "https://docs.google.com/forms/u/0/d/e/1FAIpQLSdxEQ_U2DyHuE2-1iwDN3TgOjpOr1PLyEIs-Pv-GK-vGBj1Lg/formResponse";
?>
<form id="eeasyForm" style="visibility: hidden;" action="<?php echo $googleFormUrl; ?>" method="POST">
	<input id="name" type="text" name="entry.1370540293" value="">
	<input id="email" type="text" name="entry.2071291639" value="">
	<input id="tel" type="text" name="entry.1648155823" value="">
	<input id="startAt" type="text" name="entry.1048227376" value="">
	<input id="endAt" type="text" name="entry.251120364" value="">
	<input id="url" type="text" name="entry.307431188" value="">
	<input id="atternders" type="text" name="entry.1340954458" value="">
	<input id="ordernum" type="text" name="entry.1494244607" value="">
	<input id="course" type="text" name="entry.952132871" value="">
	<button id="submit" type="submit">Googleフォームに送信</button>
</form>
<script src="https://js.eeasy.jp/v1"></script>
<script>
	// 注文番号作成
	const ordernum = Math.random().toString(32).substring(2)
	eeasy.load("pk-kZ721jUjVyuU3Fwj7riAmmkfpcZUnnM4OgfFxcDVRsO4w9smjG")
	// dateフォーマット
	const formatDate = (unixtime) => {
		const dateTime = new Date(unixtime * 1000);
		const date = dateTime.toLocaleDateString()
		const time = dateTime.toLocaleTimeString('ja-JP')
		return `${date} ${time}`
	}
	// eeasy実行
	const targetUrl = 'https://merc-education.eeasy.jp/y.susuki/test'
	const openUrl = window.ptengine && window.ptengine.createCrossDomainUrl && typeof window.ptengine.createCrossDomainUrl === 'function' && window.ptengine.createCrossDomainUrl(targetUrl);
	const openEeasy = (course) => {
		eeasy.openReceptionPage(targetUrl).then((res) => {
			// レスポンス取得
			const lastName = res.meeting.customer.last_name // 姓
			const firstName = res.meeting.customer.first_name // 名
			const email = res.meeting.customer.email // メールアドレス
			const tel = res.meeting.customer.tel // 電話番号
			const startAt = formatDate(new Date(res.meeting.start)) // 開始日時
			const endAt = formatDate(new Date(res.meeting.end)) // 終了日時
			const url = (res.meeting.online_meeting && res.meeting.online_meeting.url) ? res.meeting.online_meeting.url : 'その他' // MTGの種類
			const attendees = res.meeting.attendees // 担当者
			// 電話番号を文字列に変換
			const telText = tel.length > 0 ? tel.join('-') : ''
			// 担当者を文字列に変換
			const attendeesText = (() => {
				if (attendees.length > 0) {
					const arr = []
					attendees.map((attender) => {
						arr.push(attender.last_name)
					})
					return arr.join('、')
				} else {
					return ""
				}
			})()
			// フォームにvalueをセット
			document.getElementById('name').value = `${lastName} ${firstName}`
			document.getElementById('email').value = email
			document.getElementById('tel').value = telText
			document.getElementById('startAt').value = startAt
			document.getElementById('endAt').value = endAt
			document.getElementById('url').value = url
			document.getElementById('atternders').value = attendeesText
			document.getElementById('ordernum').value = ordernum
			document.getElementById('course').value = course
			// ボタンクリック
			document.getElementById('submit').click()
		})
	}

	$('#eeasyForm').submit(function(e) {
		e.preventDefault();

		const ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
		const course = document.getElementById('course').value;
		const email = document.getElementById('email').value;
		const formData = $(this).serialize();
		const googleFormUrl = '<?php echo $googleFormUrl; ?>';

		$.ajax({
			url: ajaxurl,
			type: "POST",
			data: {
				'action': 'handle_form_submission',
				'form_data': formData,
				'email_value': email,
				'google_form_url': googleFormUrl
			},
			success: function(response) {
				if (response.success) {
					if (course === "広告運用者育成講座") {
						window.location.href = `<?php echo home_url('/test-eeasy-thanks-ad'); ?>?ordernum=${ordernum}`;
					} else {
						window.location.href = `<?php echo home_url('/test-eeasy-thanks'); ?>?ordernum=${ordernum}`;
					}
				} else {
					window.location.href = "<?php echo home_url('/error'); ?>";
				}
			}
		});
	})
</script>
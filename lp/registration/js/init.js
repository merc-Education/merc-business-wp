
/*===========================================================*/
/*ハンバーガー*/
/*===========================================================*/
$(function(){
	var menuBtn = $('header button');/*headerタグの中にあるbuttonタグ*/
	var slideMenu = $('.slide_menu')/*.slide_menu はdisplay: none;で非表示中*/
	menuBtn.on('click',function(){/*buttonタグをクリックした時*/
		if(!$(this).hasClass('open')){/*buttonタグが.openを持っていない(!:否定)*/
			$(this).addClass('open');/*.openを付ける*/
			$(slideMenu).fadeIn(1000).addClass('btn_click');/*.slide_menuを10秒かけてfadeInさせ.btn_clickを付ける*/
		}else{
			$(this).removeClass('open');/*.openを外す*/
			$(slideMenu).fadeOut(500).removeClass('btn_click');/*.slide_menuを5秒かけてfadeOutさせ.btn_clickを外す*/
		}		
	});
	/*=================================*/
	/*ページ内リンクで移動する場合がある時*/
	/*=================================*/
	var slideLink = $('.slide_menu a');/*.slide_menuの中にあるaタグ*/
	$(slideLink).on('click',function(){/*aタグをクリックしたら*/
		$(menuBtn).removeClass('open');/*buttonタグの.openを外す*/
		$(slideMenu).fadeOut(500).removeClass('btn_click');/*.slide_menuを5秒かけてfadeOutさせ.btn_clickを外す*/
	});
});
/*===========================================================*/
/*クリックしたら消える*/
/*===========================================================*/
$(function() {
	// ボタンをクリックしたら発動
	var fix_box = $('.fix_box');
	$('.fix_box button').click(function() {
	  // class'show'を削除
	$(fix_box).fadeOut(500)
	});
	});
/*===========================================================*/
/*ドロップダウンメニュー（上）*/
/*===========================================================*/
//ドロップダウンの設定を関数でまとめる
function mediaQueriesWin(){
	var width = $(window).width();
	if(width <= 960) {//横幅が960px以下の場合
		$(".has-child>a").off('click');	//has-childクラスがついたaタグのonイベントを複数登録を避ける為offにして一旦初期状態へ
		$(".has-child>a").on('click', function() {//has-childクラスがついたaタグをクリックしたら
			var parentElem =  $(this).parent();// aタグから見た親要素の<li>を取得し
			$(parentElem).toggleClass('active');//矢印方向を変えるためのクラス名を付与して
			$(parentElem).children('ul').stop().slideToggle(500);//liの子要素のスライドを開閉させる※数字が大きくなるほどゆっくり開く
			return false;//リンクの無効化
		});
	}else{//横幅が960px以上の場合
		$(".has-child>a").off('click');//has-childクラスがついたaタグのonイベントをoff(無効)にし
		$(".has-child>a").removeClass('active');//activeクラスを削除
		$('.has-child').children('ul').css("display","");//スライドトグルで動作したdisplayも無効化にする
	}
}

/*===========================================================*/
/*フワッと表示*/
/*===========================================================*/
function showElementAnimation() {
	var element = document.getElementsByClassName('fadein');
	if(!element) return; // 要素がなかったら処理をキャンセル
		var showTiming = window.innerHeight > 768 ? 200 : 40; // 要素が出てくるタイミングはここで調整
		var scrollY = window.pageYOffset;
		var windowH = window.innerHeight;
	for(var i=0;i<element.length;i++) { 
		var elemClientRect = element[i].getBoundingClientRect(); 
		var elemY = scrollY + elemClientRect.top; if(scrollY + windowH - showTiming > elemY) {
			element[i].classList.add('is-show');
		} else if(scrollY + windowH < elemY) {
			// 上にスクロールして再度非表示にする場合はこちらを記述
			element[i].classList.remove('is-show');
		}
	}
}
showElementAnimation();
window.addEventListener('scroll', showElementAnimation);
/*===========================================================*/
/*アコーディオン*/
/*===========================================================*/
//アコーディオンをクリックした時の動作
	$('.accordion__title').on('click', function() {//タイトル要素をクリックしたら
		var findElm = $(this).next(".accordion__box");//直後のアコーディオンを行うエリアを取得し
		$(findElm).slideToggle();//アコーディオンの上下動作 
		if($(this).hasClass('close')){//タイトル要素にクラス名closeがあれば
			$(this).removeClass('close');//クラス名を除去し
		}else{//それ以外は
			$(this).addClass('close');//クラス名closeを付与
		}
	});

/*===========================================================*/
/*関数をまとめる*/
/*===========================================================*/
// ページがリサイズされたら動かしたい場合の記述
$(window).resize(function() {
	mediaQueriesWin();// 5-1-1 ドロップダウンメニュー（上）の関数を呼ぶ
});


// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
    TextTypingAnime();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面をスクロールをしたら動かしたい場合の記述


// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {

	TextTypingAnime();/* アニメーション用の関数を呼ぶ*/

    /*9-2-1 任意の場所をクリックすると隠れていた内容が開くの読み込み*/
	$(".open").each(function(index, element){	//openクラスを取得
		var Title =$(element).children('.accordion__title');	//openクラスの子要素のaccordion__titleクラスを取得
		$(Title).addClass('close');				//タイトルにクラス名closeを付与し
		var Box =$(element).children('.accordion__box');	//openクラスの子要素accordion__boxクラスを取得
		$(Box).slideDown(500);					//アコーディオンを開く
	});

});



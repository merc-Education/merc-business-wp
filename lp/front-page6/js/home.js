

/*
script = document.createElement( 'script' );
script.src = "https://www.youtube.com/iframe_api";
firstScript = document.getElementsByTagName( 'script' )[ 0 ];
firstScript.parentNode.insertBefore( script , firstScript );

// 動画呼び出し
function onYouTubeIframeAPIReady() {
	player = new YT.Player('ytplayer', {
		height: '285',
		width: '480',
		playerVars: {
			playsinline: 1,
			loop: 1,
			showinfo: 0,
			controls: 0,
			rel: 0,
			disablekb: 0
		},
		videoId: 'bjmBJ1Fl0cs',
		events: {
			'onReady': onPlayerReady
		}
	});

}
function onPlayerReady(e) {
	e.target.mute();
	e.target.playVideo();
}
function myMute() {
	player.mute();
}
function myUnMute() {
	player.unMute();
}
*/

const videoElement = $('.p-mv__video').get(0);

$('.p-mv-play .unmute').on('click', function(){
	videoElement.muted = false;
});
$('.p-mv-play .mute').on('click', function(){
	videoElement.muted = true;
});

$('.p-mv-play__btn').on('click',function(){
	$(this).addClass('is-current');
	$(this).siblings().removeClass('is-current');
});


$(function() {
	var cookieCheck = $.cookie('modalStatus');
	if(!cookieCheck){
		var windowWidth = $(window).width();
		var windowSm = 768;
		if (windowWidth <= windowSm) {
			$.magnificPopup.open({
				items: {
					src: '#movie01'
				},
				mainClass: 'mfp-fade01',
				removalDelay: 200,
				callbacks: {
					open: function() {
						$.cookie('modalStatus', 'modalStart');
					}
				}
			});
			$('#movie01 .mfp-close,.mfp-fade01').on('click',function(){
				$('#movie').show();
			});
		}
		
		
	} else {
		$('#movie').show();
	}
});

$(function(){
	$('.p-know-02-02-define__ttl').on('click',function(){
		if ( $(this).hasClass('is-open') ){
			$(this).removeClass('is-open');
			$(this).next().slideUp();
		} else {
			$(this).addClass('is-open');
			$(this).next().slideDown();           
		}
	});
});

$(function(){
	$('.c-accordion__btn').on('click',function(){
		if ( $(this).hasClass('is-open') ){
			$(this).removeClass('is-open');
			$(this).next().slideUp();
		} else {
			$(this).addClass('is-open');
			$(this).next().slideDown();           
		}
	});
});


const swiper = new Swiper(".p-touch-slider__inner", {
	slidesPerView: 1.15,
	spaceBetween: 20,
	loop: true,
	breakpoints: {
		768: {
			slidesPerView: 3.2,
			spaceBetween: 40,
		},
	},
	navigation: {
		nextEl: ".p-touch-slider__next",
		prevEl: ".p-touch-slider__prev"
	}
});

$(function(){
	$('.p-know-tab-menu__item').on('click', function(){
		let index = $('.p-know-tab-menu__item').index(this);
		$('.p-know-tab-menu__item').removeClass('is-active');
		$(this).addClass('is-active');
		$('.p-know-tabs__inner').removeClass('is-active');
		$('.p-know-tabs__inner').eq(index).addClass('is-active');
	});
}); 

$(function(){
	$('.p-buy-tab__link').on('click', function(){
		let index = $('.p-buy-tab__link').index(this);
		$('.p-buy-tab__item').removeClass('is-active');
		$('.p-buy-tab__item .btn').removeClass('is-active');
		$(this).addClass('is-active');
		if ( $(this).hasClass('btn') ){
			$(this).parents('.p-buy-tab__item').addClass('is-active');
		}
		$('.p-buy-tabs__item').removeClass('is-active');
		$('.p-buy-tabs__item').eq(index).addClass('is-active');
	});
	
}); 

$(function(){
	var state = false;
	var scrollpos;
	$('.js-popup').on('click',function(){
		if ( $(this).hasClass('is-open') ){
			$(this).removeClass('is-open');
			$('#buy').removeClass('is-open');
			$('#overlay').removeClass('is-open');
			$('body').removeClass('is-fixed').css({'top': 0});
			window.scrollTo( 0 , scrollpos );
			state = false;
		} else {
			$(this).addClass('is-open');
			$('#overlay').addClass('is-open');
			scrollpos = $(window).scrollTop();
			$('body').addClass('is-fixed').css({'top': -scrollpos});
			state = true;      
		}
	});
	$('#overlay').on('click',function(){
		if ( $(this).hasClass('is-open') ){
			$(this).removeClass('is-open');
			$('#buy').removeClass('is-open');
			$('.js-popup').removeClass('is-open');
			$('body').removeClass('is-fixed').css({'top': 0});
			window.scrollTo( 0 , scrollpos );
			state = false;
		} else {
			$(this).addClass('is-open');
			$('.js-popup').addClass('is-open');
			scrollpos = $(window).scrollTop();
			$('body').addClass('is-fixed').css({'top': -scrollpos});
			state = true;      
		}
	});
});

$(function () {
	var head = $('.l-header').innerHeight();
	var mv = $('.p-mv__movie').innerHeight();
	$(window).on("scroll", function () {
		if ($(window).scrollTop() > mv ) {
			// スクロールの位置がファーストビューより下の場合にclassを付与
			$(".p-mv-play").addClass("is-scroll");
			$(".p-campaign-btn").addClass("is-scroll");
		} else {
			// スクロールの位置がファーストビューより上の場合にclassを外す
			$(".p-mv-play").removeClass("is-scroll");
			$(".p-campaign-btn").removeClass("is-scroll");
			
		}
	});
	$(window).on("scroll", function () {
		if ($(window).scrollTop() > mv + head ) {
			// スクロールの位置がファーストビューより下の場合にclassを付与
			$(".l-header").addClass("is-scroll");
		} else {
			// スクロールの位置がファーストビューより上の場合にclassを外す
			$(".l-header").removeClass("is-scroll");

		}
	});
});

$(function () {
	$('.cp_pop').magnificPopup({
		fixedContentPos: true,
		type: 'inline',
		preloader: false,
	});
});

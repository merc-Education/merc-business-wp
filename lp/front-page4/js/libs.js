$(function() {
	/* アンカー
	------------------------------*/
	// ロールオーバー
	$('.imgover').not('[src*="'+ '_ov' +'."]').hover(function() {
		$(this).stop().attr('src', $(this).attr('src').replace(/\.(gif|jpe?g|png)$/, '_ov.$1'));
	}, function() {
		$(this).stop().attr('src', $(this).attr('src').replace(/_ov\.(gif|jpe?g|png)$/, '.$1'));
	});

	// ナビゲーションのカレント表示
	if ($('#pageID').length == 1) {
		var ides = $('#pageID').val().split(',');
		for (var idx = 0; idx < ides.length; idx++) {
			var id = '#' + ides[idx];
			if ($(id).length == 1) {
				$(id).removeClass('imgover').attr('src', $(id).attr('src').replace(/\.(gif|jpe?g|png)$/, '_ov.$1'));
			}
		}
	}

	/* Functionの実行
	------------------------------*/
	responsive();
	imageWidth();
	linkTel();
});

/* リサイズ
------------------------------*/
var timer = false;
$(window).resize(function() {
	if (timer !== false) {clearTimeout(timer);}
	timer = setTimeout(function() {
		responsive();
		imageWidth();
		linkTel();
	}, 10);
});

/* Function
------------------------------*/
// ブレイクポイント
function responsive() {
	var widthCurrent = window.innerWidth ? window.innerWidth: $(window).width();
	var widthSmartphone = 768;

	if (widthCurrent < widthSmartphone) {
		modeSmartphone = true;
	} else {
		modeSmartphone = false;
	}
}

// PC・SP：画像幅切り替え
function imageWidth() {
	$('[data-width]').each(function() {
		var dataWidth = $(this).data('width');

		if (modeSmartphone) {
			$(this).css('max-width', dataWidth + 'px');
		} else {
			$(this).removeAttr('style');
		}
	});
}

// SP：電話番号にリンク付与
function linkTel() {
	$('[data-tel]').each(function() {
		var dataTel = $(this).data('tel');

		if (modeSmartphone) {
			$(this).attr('href', 'tel:' + dataTel);
		} else {
			$(this).removeAttr('href');
		}
	});
}

$(function(){
    $('a[href^="#"]').not('.c-modal').on('click',function(){
		var headerHeight = $('.l-header-head').innerHeight() - 1;
        var speed = 300;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top - headerHeight;
        $('body,html').animate({scrollTop:position}, speed, 'swing');
        return false;
    });
});


(function($) {
    $(function() {
        $('.js-toggle').on('click',function(){
			if ( $(this).hasClass('is-open') ){
				$(this).removeClass('is-open');
				$('.l-overlay').removeClass('is-active');
				$('body').removeClass('is-fixed');
			} else {
				$(this).addClass('is-open');
				$(".l-overlay").addClass("is-active");
				scrollpos = $(window).scrollTop();
				$('body').addClass('is-fixed');
			}
        });
		$('.l-header-gnavi__link').on('click',function(){
			$('.js-toggle').removeClass('is-open');
			$('.l-overlay').removeClass('is-active');
			$('body').removeClass('is-fixed');
		});
		$('.l-overlay').on('click',function(){
			$('.js-toggle').removeClass('is-open');
			$(this).removeClass('is-active');
			$('body').removeClass('is-fixed');
		});
        var currentWidth = window.innerWidth;
        var timer = '';
        window.addEventListener("resize", function() {
            if (currentWidth == window.innerWidth) {
                // ウインドウ横幅が変わっていないため処理をキャンセル。
                return;
            }
            // ウインドウ横幅が変わったのでリサイズと見なす。
            // 横幅を更新
            currentWidth = window.innerWidth;

            if (timer) {
                clearTimeout(timer);
            }
            timer = setTimeout(function(){
                if (currentWidth  < 768) {
                } else {
                    $('.js-toggle').removeClass('is-open');
					$('body').removeClass('is-fixed');
                }
            }, 200);
        });
    });
})(jQuery);


$(function() {
	var topBtn = $('.c-floating');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            topBtn.addClass('is-active');
        } else {
			topBtn.removeClass('is-active');
        }
    });
});


const setFillHeight = () => {
    const vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
}

let vw = window.innerWidth;
window.addEventListener('resize', () => {
    if (vw === window.innerWidth) {
        return;
    }
    vw = window.innerWidth;
    setFillHeight();
});

// 実行
setFillHeight();

$(function(){
	if($('.p-faq-define').length) {
		$('.p-faq-define__ttl').on('click',function(){
            if ( $(this).hasClass('is-open') ){
                $(this).removeClass('is-open');
                $(this).next().slideUp();
            } else {
                $(this).addClass('is-open');
                $(this).next().slideDown();           
            }
        });
    }
});

if($('.p-process').length) {
	$(function(){
		$('.p-process-btn__link').magnificPopup({
			type: 'image'
		});
	});
}

/*
* css swicher
*/
function css_browser_selector(u){
    var ua=u.toLowerCase(),
        is=function(t){return ua.indexOf(t)>-1},
        e='edge',g='gecko',w='webkit',s='safari',o='opera',m='mobile',
        h=document.documentElement,
        b=[
            ( !(/opera|webtv/i.test(ua)) && /msie\s(\d)/.test(ua))? ('ie ie'+RegExp.$1) :
            !(/opera|webtv/i.test(ua)) && is('trident') && /rv:(\d+)/.test(ua)? ('ie ie'+RegExp.$1) :
            is('edge/')? e:
            is('firefox/2')?g+' ff2':
            is('firefox/3.5')? g+' ff3 ff3_5' :
            is('firefox/3.6')?g+' ff3 ff3_6':is('firefox/3')? g+' ff3' :
            is('gecko/')?g:
            is('opera')? o+(/version\/(\d+)/.test(ua)? ' '+o+RegExp.$1 :
                            (/opera(\s|\/)(\d+)/.test(ua)?' '+o+RegExp.$2:'')) :
            is('konqueror')? 'konqueror' :
            is('blackberry')?m+' blackberry' :
            is('android')?m+' android' :
            is('chrome')?w+' chrome' :
            is('iron')?w+' iron' :
            is('applewebkit/')? w+' '+s+(/version\/(\d+)/.test(ua)? ' '+s+RegExp.$1 : '') :
            is('mozilla/')? g:
            '',
            is('j2me')?m+' j2me':
            is('iphone')?m+' iphone':
            is('ipod')?m+' ipod':
            is('ipad')?m+' ipad':
            is('mac')?'mac':
            is('darwin')?'mac':
            is('webtv')?'webtv':
            is('win')? 'win'+(is('windows nt 6.0')?' vista':''):
            is('freebsd')?'freebsd':
            (is('x11')||is('linux'))?'linux':
            '',
            'js'];
    c = b.join(' ');
    h.className += ' '+c;
    return c;
};
css_browser_selector(navigator.userAgent);
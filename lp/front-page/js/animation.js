//ページフェードイン
$(function(){
	$("body").fadeIn(1800);
});

$(function(){
	$('.question-content-box-heading').on('click', function() {
    $(this).toggleClass('question-content-box-heading-active');
    $(this).next('.question-content-text').toggleClass('question-content-text-active');
    $('.question-content-box-heading').not(this).removeClass('question-content-box-heading-active');
    $('.question-content-box-heading').not(this).next('.question-content-text').removeClass('question-content-text-active');
  return false;
  });
});

$(window).scroll(function (){
	$('.fadeIn').each(function(){
      //ターゲットの位置を取得
      var target = $(this).offset().top;
      //スクロール量を取得
      var scroll = $(window).scrollTop();
      //ウィンドウの高さを取得
      var windowHeight = $(window).height();
      //ターゲットまでスクロールするとフェードインする
      if (scroll > target - windowHeight){
        $(this).css('opacity','1');
        $(this).css('transform','translateY(0)');
      }
    });
});

$(window).scroll(function (){
	$('.fadeIn02').each(function(){
      //ターゲットの位置を取得
      var target = $(this).offset().top;
      //スクロール量を取得
      var scroll = $(window).scrollTop();
      //ウィンドウの高さを取得
      var windowHeight = $(window).height();
      //ターゲットまでスクロールするとフェードインする
      if (scroll > target - windowHeight){
        $(this).css('opacity','1');
      }
    });
});
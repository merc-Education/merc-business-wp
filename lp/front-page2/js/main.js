$(function(){
//ページトップ
	var topBtn = $('#pagetop');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 2000) {
        topBtn.fadeIn();
        }else {
        topBtn.fadeOut();
        }
    });
	topBtn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});

//固定ヘッダーの指定
    var headerHeight = $('header').outerHeight();

// ページ外アンカーのページ付きリンクへのスムーススクロール
    var urlHash = location.hash;
    if(urlHash) {
        $('body,html').stop().scrollTop(0);
        setTimeout(function(){
            var target = $(urlHash);
            var position = target.offset().top - headerHeight;
            $('body,html').stop().animate({scrollTop:position}, 500);
        }, 500);
    }

//画像横スクロールバーを画像の中央が表示されるように移動
    var imgLeft = $('#process .image_box .img img').offset().left;
    var imgSize = $('#process .image_box .img').width();
    imgLeft = imgLeft+(imgSize)-(imgSize / 3)+(imgSize / 28);
    $('#process .image_box .img').scrollLeft(imgLeft);
});


// ページ内アンカーのページ付きリンクへのスムーススクロール
$(function(){
    $('a[href*="#"], area[href*="#"]').not(".noScroll").click(function() {
 		$("input[name='menu-btn-check']").removeAttr("checked").prop("checked", false).change();

        var speed = 400, // ミリ秒(この値を変えるとスピードが変わる)
            href = $(this).prop("href"), //リンク先を絶対パスとして取得
            hrefPageUrl = href.split("#")[0], //リンク先を絶対パスについて、#より前のURLを取得
            currentUrl = location.href, //現在のページの絶対パスを取得
            currentUrl = currentUrl.split("#")[0]; //現在のページの絶対パスについて、#より前のURLを取得

        //#より前の絶対パスが、リンク先と現在のページで同じだったらスムーススクロールを実行
        if(hrefPageUrl == currentUrl){

            //リンク先の#からあとの値を取得
            href = href.split("#");
            href = href.pop();
            href = "#" + href;

            //スムースクロールの実装
            var headerHeight = $('header').outerHeight();
            var target = $(href == "#" || href == "" ? 'html' : href),
                position = target.offset().top - headerHeight; //targetの位置を取得
               $('body,html').stop().animate({scrollTop:position}, 500);

            return false;
        }

    });
});

//アコーディオン
$('.faq_list .question_box').click(function(){
    $(this).toggleClass('active');
    $(this).next('.answer').stop().slideToggle();
});

$('.btn_lesson').click(function(){
    $(this).toggleClass('active');
    $(this).next().stop().slideToggle();
});

//telリンク
if (navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)) {
  $(function() {
    $('.tel_link').each(function() {
      var str = $(this).html();
      if ($(this).children().is('img')) {
        $(this).html($('<a>').attr('href', 'tel:' + $(this).children().attr('alt').replace(/-/g, '')).append(str + '</a>'));
      } else {
        $(this).html($('<a>').attr('href', 'tel:' + $(this).text().replace(/-/g, '')).append(str + '</a>'));
      }
    });
  });
}
$(function () {
  $("#terms_of_use").on("change", function () {
    $(this).prop("checked")
      ? $(".js-terms-target").removeClass("inactive")
      : $(".js-terms-target").addClass("inactive");
  }),
    $(".js-tab-trigger").on("click", function () {
      $(".js-tab-trigger").removeClass("active"),
        $(this).addClass("active"),
        ($currentContent = $("#" + $(this).data("id"))),
        $(".js-tab-target").removeClass("active"),
        $currentContent.addClass("active");
    }),
    $(".js-sp-tab-trigger").on("click", function () {
      $("js-sp-tab-trigger").removeClass("active"),
        $(this).toggleClass("active"),
        $(this).next(".test0").slideToggle();
    }),
    $(".js-faq-trigger").on("click", function () {
      $(this).next("dd").slideToggle(), $(this).toggleClass("active");
    });
  var t = $(window).width();
  $(".js-cta-button").on("click", function () {
    return t <= 559
      ? void $("#form").fadeIn()
      : ($("body, html").animate({ scrollTop: 0 }, 500), !1);
  }),
    $(".js-back-buton").on("click", function () {
      $("#form").fadeOut();
    });

  $('a[href^="#"]').click(function () {
    // 移動先を0px調整する。0を30にすると30px下にずらすことができる。
    var adjust = 0;
    // スクロールの速度
    var speed = 400; // ミリ秒
    // アンカーの値取得
    var href = $(this).attr("href");
    // 移動先を取得
    var target = $(href == "#" || href == "" ? "html" : href);
    // 移動先を調整
    var position = target.offset().top + adjust;
    // スムーススクロール
    $("body,html").animate({ scrollTop: position }, speed, "swing");
    return false;
  });
});

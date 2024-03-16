function BrowserW() {
  return $(window).width();
}
function sp_maxW() {
  return BrowserW() <= 767;
}

/* humburger
---------------------------------------------------------------------------- */
$(document).ready(function () {
  var state = false;
  var scrollpos;
  $(".drawer_button").click(function () {
    if (state == false) {
      scrollpos = $(window).scrollTop();
      $("body").addClass("is-navopen").css({ top: -scrollpos });
      $(".drawer_button").addClass("active");
      $(".nav_wrapper").slideDown();
      $(".nav_wrapper").addClass("active");
      state = true;
    } else {
      $("body").removeClass("is-navopen").css({ top: 0 });
      window.scrollTo(0, scrollpos);
      $(".drawer_button").removeClass("active");
      $(".nav_wrapper").slideUp();
      $(".nav_wrapper").removeClass("active");
      state = false;
    }
  });
  $(".nav_wrapper a").click(function () {
    if (state == true) {
      $(".drawer_button").trigger("click");
    }
  });
});

/* img switch
---------------------------------------------------------------------------- */
$(function () {
  var $setElem = $(".switch"),
    pcName = "_pc",
    spName = "_sp",
    replaceWidth = 767;

  $setElem.each(function () {
    var $this = $(this);
    function imgSize() {
      if (window.innerWidth > replaceWidth) {
        $this
          .attr("src", $this.attr("src").replace(spName, pcName))
          .css({ visibility: "visible" });
      } else {
        $this
          .attr("src", $this.attr("src").replace(pcName, spName))
          .css({ visibility: "visible" });
      }
    }
    $(window).on("resize", function () {
      imgSize();
    });
    imgSize();
  });
});

/* tel link
---------------------------------------------------------------------------- */
var ua = navigator.userAgent;
if (navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/i)) {
  $(".tel-link").each(function () {
    var str = $(this).html();
    if ($(this).children().is("img")) {
      $(this).html(
        $("<a>")
          .attr(
            "href",
            "tel:" + $(this).children().attr("alt").replace(/-/g, "")
          )
          .append(str + "</a>")
      );
    } else {
      $(this).html(
        $("<a>")
          .attr("href", "tel:" + $(this).text().replace(/-/g, ""))
          .append(str + "</a>")
      );
    }
  });
}

/* smoothscroll
---------------------------------------------------------------------------- */
$(function () {
  $(".smoothscroll").click(function () {
    var href = $(this).attr("href");
    var target = $(href);
    if (target.length) {
      var position = target.offset().top + 5 + "px";
    }
    $("body,html").stop().animate({ scrollTop: position }, 700);
  });
});

/* css swicher
---------------------------------------------------------------------------- */
function css_browser_selector(u) {
  var ua = u.toLowerCase(),
    is = function (t) {
      return ua.indexOf(t) > -1;
    },
    e = "edge",
    g = "gecko",
    w = "webkit",
    s = "safari",
    o = "opera",
    m = "mobile",
    h = document.documentElement,
    b = [
      !/opera|webtv/i.test(ua) && /msie\s(\d)/.test(ua)
        ? "ie ie" + RegExp.$1
        : !/opera|webtv/i.test(ua) && is("trident") && /rv:(\d+)/.test(ua)
        ? "ie ie" + RegExp.$1
        : is("edge/")
        ? e
        : is("firefox/2")
        ? g + " ff2"
        : is("firefox/3.5")
        ? g + " ff3 ff3_5"
        : is("firefox/3.6")
        ? g + " ff3 ff3_6"
        : is("firefox/3")
        ? g + " ff3"
        : is("gecko/")
        ? g
        : is("opera")
        ? o +
          (/version\/(\d+)/.test(ua)
            ? " " + o + RegExp.$1
            : /opera(\s|\/)(\d+)/.test(ua)
            ? " " + o + RegExp.$2
            : "")
        : is("konqueror")
        ? "konqueror"
        : is("blackberry")
        ? m + " blackberry"
        : is("android")
        ? m + " android"
        : is("chrome")
        ? w + " chrome"
        : is("iron")
        ? w + " iron"
        : is("applewebkit/")
        ? w + " " + s + (/version\/(\d+)/.test(ua) ? " " + s + RegExp.$1 : "")
        : is("mozilla/")
        ? g
        : "",
      is("j2me")
        ? m + " j2me"
        : is("iphone")
        ? m + " iphone"
        : is("ipod")
        ? m + " ipod"
        : is("ipad")
        ? m + " ipad"
        : is("mac")
        ? "mac"
        : is("darwin")
        ? "mac"
        : is("webtv")
        ? "webtv"
        : is("win")
        ? "win" + (is("windows nt 6.0") ? " vista" : "")
        : is("freebsd")
        ? "freebsd"
        : is("x11") || is("linux")
        ? "linux"
        : "",
      "js",
    ];
  c = b.join(" ");
  h.className += " " + c;
  return c;
}
css_browser_selector(navigator.userAgent);

/*iPad pro */
$(function () {
  var ua = window.navigator.userAgent.toLowerCase();
  if (
    ua.indexOf("ipad") > -1 ||
    (ua.indexOf("macintosh") > -1 && "ontouchend" in document)
  ) {
    $("html").addClass("ipad");
  }
});
// android
if (navigator.userAgent.indexOf("Android") > 0) {
  $("body").addClass("android");
}

/* magnificPopup
---------------------------------------------------------------------------- */
function checkBreakPoint_modal() {
  w = $(window).width();
  if (w <= 767) {
    $(".modal-btn").click(function () {
      $(this).parents(".modal_wrap").toggleClass("open");
    });
  } else {
    $(".open-popup-link").magnificPopup({
      type: "inline",
      midClick: true,
      fixedContentPos: true,
      mainClass: "mfp-fade01",
      removalDelay: 1000,
    });
    $(document).ready(function () {
      $(".mfp-close").click(function () {
        $.magnificPopup.close();
      });
    });
  }
}
// ウインドウがリサイズする度にチェック
$(window).resize(function () {
  checkBreakPoint_modal();
});
// 初回チェック
checkBreakPoint_modal();

/* accordion
---------------------------------------------------------------------------- */
$(".acd_btn").click(function () {
  $(this).next(".acd_cnts").slideToggle();
  $(this).toggleClass("open");
});

/* SP */
$(".sp-acd__btn").click(function () {
  $(this).next(".sp-acd__cnts").slideToggle();
  $(this).toggleClass("open");
});

/* sp-slider
---------------------------------------------------------------------------- */
function checkBreakPoint() {
  w = $(window).width();
  if (w <= 767) {
    // スマホ向け（767px以下のとき）
    $(".sp-slide").not(".slick-initialized").slick({
      //スライドさせる
      slidesToShow: 1.35,
      slidesToScroll: 1,
      infinite: false,
      arrows: false,
      autoplay: false,
      dots: true,
      autoplaySpeed: 6000,
    });
  } else {
    // PC向け
    $(".sp-slide.slick-initialized").slick("unslick");
  }
}
// ウインドウがリサイズする度にチェック
$(window).resize(function () {
  checkBreakPoint();
});
// 初回チェック
checkBreakPoint();

/* sp point-box
---------------------------------------------------------------------------- */
// デバウンス関数
function debounce(func, wait, immediate) {
  var timeout;
  return function () {
    var context = this,
      args = arguments;
    var later = function () {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
}

// イベントを設定する関数
function pointBoxSetupEvents() {
  $(".sec-feature .txt-box .ttl")
    .off("click")
    .css("cursor", "pointer") // cursor: pointerを設定
    .on("click", function () {
      $(".txt-box").removeClass("delay1 delay2");
    });

  $(".sec-feature .txt-box.-blue .ttl")
    .off("click")
    .css("cursor", "pointer") // cursor: pointerを設定
    .on("click", function () {
      $(this).parents(".txt-box").toggleClass("first-active");
      $(this).parents(".txt-box").prev(".-green").removeClass("first-active");

      if (
        $(this).parents(".txt-box").prev(".-green").hasClass("first-active")
      ) {
        $(this).parents(".txt-box").prev(".-green").toggleClass("delay2");
        $(this).parents(".txt-box").toggleClass("delay1");
      } else {
        $(this).parents(".txt-box").prev(".-green").toggleClass("delay1");
        $(this).parents(".txt-box").toggleClass("delay2");
      }
    });

  $(".sec-feature .txt-box.-green .ttl")
    .off("click")
    .css("cursor", "pointer") // cursor: pointerを設定
    .on("click", function () {
      $(this).parents(".txt-box").toggleClass("first-active");
      $(this).parents(".txt-box").addClass("delay1");
      $(this).parents(".txt-box").next(".-blue").addClass("first-active");
    });
}

// イベントをクリアする関数
function pointBoxClearEvents() {
  $(".sec-feature .txt-box .ttl").off("click").css("cursor", "auto"); // カーソルスタイルをデフォルトに戻す
}

var isMobileView = $(window).width() <= 767; // 初期状態のフラグ設定
var eventsBound = false; // イベントがバインドされているかのフラグ

// イベントの設定と解除を管理する関数
function pointBoxCheckAndBindEvents() {
  var currentIsMobileView = $(window).width() <= 767;

  if (currentIsMobileView && !eventsBound) {
    pointBoxSetupEvents(); // モバイルビュー用のイベントを設定
    eventsBound = true;
  } else if (!currentIsMobileView && eventsBound) {
    pointBoxClearEvents(); // イベントをクリア
    eventsBound = false;
  }
}

// リサイズと初期ロードのイベント処理
function pointBoxInitAndResizeEvents() {
  $(document).ready(function () {
    pointBoxCheckAndBindEvents(); // 初期状態でチェック

    // リサイズ時の処理
    $(window).resize(
      debounce(function () {
        pointBoxCheckAndBindEvents(); // リサイズ時に再チェック
      }, 250)
    );
  });
}

// 関数を実行
pointBoxInitAndResizeEvents();

$(function () {
  $(window).scroll(function () {
    $(".sec-feature .txt-box").each(function () {
      var scroll = $(window).scrollTop();
      var blockPosition = $(this).offset().top;
      var windowHeihgt = $(window).height();
      if (scroll > blockPosition - windowHeihgt + 200) {
        $(this).addClass("slideIn");
        $(this).addClass("first-active");
      } else {
        //					$(this).removeClass("active")
      }
    });
  });
});

/* accordion - careerup-btn
---------------------------------------------------------------------------- */
$(".careerup-btn").on("click", function () {
  const $trigger = $(this);
  const targetId = $trigger.attr("aria-controls");
  const $target = $(`#${targetId}`);
  $trigger.toggleClass("active");
  $target.stop().slideToggle();
  toggleAttrValue($trigger, "aria-expanded", "false", "true");
  toggleAttrValue($target, "aria-hidden", "true", "false");
});

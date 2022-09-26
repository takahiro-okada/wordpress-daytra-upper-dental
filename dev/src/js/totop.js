jQuery(function () {
  // スクロールしたら「トップに戻る」ボタンが表示される
  const toTopButton = jQuery(".js-to-top");
  const scrollHeight = 100;
  toTopButton.hide();
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      toTopButton.fadeIn();
    } else {
      toTopButton.fadeOut();
    }
  });

  // 「トップに戻る」ボタンをクリックしたらスクロールで戻る
  toTopButton.click(function () {
    jQuery("body,html").animate({ scrollTop: 0 }, 800);
    return false;
  });
});

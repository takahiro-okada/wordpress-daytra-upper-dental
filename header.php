<header class="l-header">
  <div class="l-header__inner l-inner">
    <div class="l-header__logo"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/common/logo.svg"></div>

    <!-- PC -->
    <div class="l-header__main">
      <div class="l-header__contents l-header-contents">
        <div class="l-header-contents__item"><?php get_template_part( 'template-parts/icons/icon-home' ); ?><a href="" class="l-header-contents__link"><span>ホーム</span></a></div>
        <div class="l-header-contents__item"><?php get_template_part( 'template-parts/icons/icon-building' ); ?><a href="" class="l-header-contents__link"><span>当院について</span></a></div>
        <div class="l-header-contents__item"><?php get_template_part( 'template-parts/icons/icon-file' ); ?><a href="" class="l-header-contents__link"><span>診療案内</span></a></div>
        <div class="l-header-contents__item"><?php get_template_part( 'template-parts/icons/icon-staff' ); ?><a href="" class="l-header-contents__link"><span>スタッフ紹介</span></a></div>
        <div class="l-header-contents__item"><?php get_template_part( 'template-parts/icons/icon-staffblog' ); ?><a href="" class="l-header-contents__link"><span>スタッフブログ</span></a></div>
        <div class="l-header-contents__item"><?php get_template_part( 'template-parts/icons/icon-mail' ); ?><a href="" class="l-header-contents__link"><span>お問い合わせ</span></a></div>
      </div>
      <div class="l-header__cta l-header-cta">
        <div class="l-header-cta__address">〒166-0001 東京都杉並区阿佐谷北7-3-1</div>
        <div class="l-header-cta__tel"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/common/icon-tel.svg">03-1234-5678</div>
      </div>
    </div>

    <!-- SP -->
    <button class="l-header__hamburger c-hamburger" id="js-hamburger">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <div class="l-header__drawer c-drawer" id="js-drawer">
      <ul class="c-drawer__list">
        <li class="c-drawer__item"><a href="" class="c-drawer__link">About</a></li>
        <li class="c-drawer__item"><a href="" class="c-drawer__link">Service</a></li>
      </ul>
    </div>
  </div>
</header>

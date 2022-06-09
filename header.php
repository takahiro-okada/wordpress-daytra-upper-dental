<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>みなみ歯科クリニック</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>

  <?php wp_head(); ?>
</head>

<body>

<header class="l-header">
  <div class="l-header__inner">
    <div class="l-header__logo"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/common/logo.svg"></div>

    <!-- PC -->
    <div class="l-header__main">
      <div class="l-header__contents l-header-contents">
        <div class="l-header-contents__item"><a href="<?php echo home_url(); ?>" class="l-header-contents__link"><?php get_template_part( 'template-parts/icons/icon-home' ); ?><span class="l-header-contents__text">ホーム</span></a></div>
        <div class="l-header-contents__item"><a href="<?php echo home_url(); ?>/about" class="l-header-contents__link"><?php get_template_part( 'template-parts/icons/icon-building' ); ?><span class="l-header-contents__text">当院について</span></a></div>
        <div class="l-header-contents__item"><a href="<?php echo home_url(); ?>/medical" class="l-header-contents__link"><?php get_template_part( 'template-parts/icons/icon-file' ); ?><span class="l-header-contents__text">診療案内</span></a></div>
        <div class="l-header-contents__item"><a href="<?php echo home_url(); ?>/staff" class="l-header-contents__link"><?php get_template_part( 'template-parts/icons/icon-staff' ); ?><span class="l-header-contents__text">スタッフ紹介</span></a></div>
        <div class="l-header-contents__item"><a href="<?php echo home_url(); ?>/blog" class="l-header-contents__link"><?php get_template_part( 'template-parts/icons/icon-staffblog' ); ?><span class="l-header-contents__text">スタッフブログ</span></a></div>
        <div class="l-header-contents__item"><a href="<?php echo home_url(); ?>/contact" class="l-header-contents__link"><?php get_template_part( 'template-parts/icons/icon-mail' ); ?><span class="l-header-contents__text">お問い合わせ</span></a></div>
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
        <li class="c-drawer__item"><a href="<?php echo home_url(); ?>/" class="c-drawer__link">ホーム</a></li>
        <li class="c-drawer__item"><a href="<?php echo home_url(); ?>/" class="c-drawer__link">Service</a></li>
      </ul>
    </div>
  </div>
</header>

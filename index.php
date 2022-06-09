<?php get_header(); ?>

<main class="l-main">
  <!-- slider -->
  <section class="p-slider">
    <div class="p-slider__inner js-slider">
      <div class="p-slider__content">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/index/index-mv-pc_01.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/index/index-mv-sp_01.jpg">
        </picture>
      </div>
      <div class="p-slider__content">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/index/index-mv-pc_02.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/index/index-mv-sp_02.jpg">
        </picture>
      </div>
      <div class="p-slider__content">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/index/index-mv-pc_03.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/index/index-mv-sp_03.jpg">
        </picture>
      </div>
    </div>
    <div class="p-slider__text">
      <img src="<?php echo get_template_directory_uri(); ?>/dist/img/index/top-text.svg" alt="">
    </div>
  </section>

  <!-- top -->
  <section class="p-top">
    <div class="p-top__inner l-inner">
      <div class="p-top__news p-top-news">
        <div class="p-top-news__wrapper">
          <h2 class="p-top-news__title">お知らせ<span class="p-top-news__title--en">NEWS</span></h2>
          <a class="p-top-news__link">過去のお知らせはこちら</a>
        </div>
        <a class="p-top-news__post p-top-news-post">
          <date class="p-top-news-post__date">2021/01/01</date>
          <h3 class="p-top-news-post__title">年末年始の営業時間のお知らせ</h3>
        </a>
      </div>
      <div class="p-top__info">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/index/working-info.png">
      </div>
    </div>
  </section>

  <!-- featured -->
  <section class="l-featured p-featured">
    <div class="p-featured__inner">
      <div class="p-featured__contents">
        <div class="p-featured__body p-featured-body">
          <span class="p-featured-body__sub-title">CONCEPT</span>
          <h2 class="p-featured-body__title">健康的で素敵な笑顔あふれる<br>街づくりを目指して</h2>
          <p class="p-featured-body__desc">
            私たちは最新の医療技術を追求すると共に、患者様とのコミュニケーションを大事することで、気軽に通いやすく些細なことでも相談できる「街の掛かり付け医」を目指しております。<br>
            お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。
          </p>
          <div class="p-featured-body__button">
            <div class="c-button">当院について</div>
          </div>
        </div>
        <div class="p-featured__image">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/index/index-concept-img-pc.png">
        </div>
      </div>
    </div>
  </section>

  <section class="l-recommend p-recommend">
    <div class="l-inner">
      <h2 class="p-recommend__title">当院３つのおすすめ</h2>
      <ul class="p-recommend__list">
        <li class="p-recommend__item p-recommend-item">
          <h3 class="p-recommend-item__title"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/index/recommend-1.png" alt=""></h3>
          <div class="p-recommend-item__image"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/index/recommend-img-01.png" alt=""></div>
          <p class="p-recommend-item__desc">歯の治療において、小さな違和感は大きなストレスにつながります。<br>私たちは常に快適な歯科医療技術の研究を行っております。</p>
        </li>
        <li class="p-recommend__item p-recommend-item">
          <h3 class="p-recommend-item__title"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/index/recommend-2.png" alt=""></h3>
          <div class="p-recommend-item__image"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/index/recommend-img-02.png" alt=""></div>
          <p class="p-recommend-item__desc">「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。</p>
        </li>
        <li class="p-recommend__item p-recommend-item">
          <h3 class="p-recommend-item__title"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/index/recommend-3.png" alt=""></h3>
          <div class="p-recommend-item__image"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/index/recommend-img-03.png" alt=""></div>
          <p class="p-recommend-item__desc">朝から夜までお仕事をされている方のために、診療時間を見直しました。<br>
          <span class="p-recommend-item__desc--emphasis">※駆け込みでも対応可能ですが、事前にご連絡いただけるとスムーズです。</span></p>
        </li>
      </ul>
    </div>
  </section>
</main>

<?php get_footer(); ?>

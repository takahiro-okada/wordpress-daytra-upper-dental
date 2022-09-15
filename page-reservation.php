<?php
/* Template Name: 予約*/
?>

<?php get_header(); ?>

<?php
$sub_title = "RESERVATION";
get_template_part('./template-parts/sub-mv', null, $sub_title)
?>

<div class="l-inner l-breadcrums">
  <?php get_template_part('./template-parts/breadcrums') ?>
</div>

<section class="l-reservation p-reservation">
  <div class="l-inner">
    <div class="p-reservation__heading p-reservation-heading">
      <div class="p-reservation-heading__body">
        <h3 class="p-reservation-heading__title">お電話でのご予約/ご相談</h3>
        <div class="p-working-infop-footer-contents__working-time">
          <div class="p-working-info__tel"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/common/icon-tel.svg">03-1234-5678</div>
          <div class="p-working-info__time">(年中無休 AM9:00〜PM22:00)</div>
        </div>
        <p class="p-reservation-heading__text">
          お急ぎの方は電話での連絡がスムーズです。<br>
          混雑状況によっては当日受診をご利用いただけない場合がございます。<br>
          あらかじめご了承ください。
        </p>
      </div>
      <div class="p-reservation-heading__body">
        <h3 class="p-reservation-heading__title">メールでのご予約/ご相談</h3>
        <p class="p-reservation-heading__text">
          【ご予約に関しての注意点】<br>
          メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br>
          ※24時間以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。
        </p>
      </div>
    </div>

    <div class="p-reservation__form p-reservation-form">
      <h2 class="p-reservation-form__title c-section-title">予約フォーム</h2>
      <div class="p-contact-contents__form c-form">
        <dl class="c-form__item">
          <dt class="c-form__term">お名前<span class="c-form__required">必須</span></dt>
          <dd class="c-form__desc">
            <input type="text" name="" placeholder="山田 太郎" class="c-form__input">
          </dd>
        </dl>
        <dl class="c-form__item">
          <dt class="c-form__term">フリガナ<span class="c-form__required">必須</span></dt>
          <dd class="c-form__desc">
            <input type="text" name="" placeholder="ヤマダ タロウ" class="c-form__input">
          </dd>
        </dl>
        <dl class="c-form__item">
          <dt class="c-form__term">電話番号<span class="c-form__required">必須</span></dt>
          <dd class="c-form__desc">
            <input type="text" name="" inputmode="numeric" pattern="^[0-9-]+$" placeholder="000-0000-0000" class="c-form__input">
          </dd>
        </dl>
        <dl class="c-form__item">
          <dt class="c-form__term">メールアドレス<span class="c-form__required">必須</span></dt>
          <dd class="c-form__desc">
            <input type="email" name="" placeholder="xxx@example.com" class="c-form__input">
          </dd>
        </dl>
        <dl class="c-form__item">
          <dt class="c-form__term">初診/再診<span class="c-form__required">必須</span></dt>
          <dd class="c-form__desc">
            <label class="c-radio" for="radio-1">
              <input type="radio" name="radio1" value="radio1" id="radio-1" class="c-radio__input u-visually-hidden">
              <span class="c-radio__label">初診</span>
            </label>
            <label class="c-radio" for="radio-2">
              <input type="radio" name="radio1" value="radio2" id="radio-2" class="c-radio__input u-visually-hidden">
              <span class="c-radio__label">再診</span>
            </label>
          </dd>
        </dl>
        <dl class="c-form__item">
          <dt class="c-form__term">診療内容<span class="c-form__required">必須</span><span class="c-form__explain">※(複数選択可)</span></dt>
          <dd class="c-form__desc">
            <label class="c-checkbox" for="checkbox-1">
              <input type="checkbox" name="checkbox[data][]" value="checkbox1" id="checkbox-1" class="c-checkbox__input u-visually-hidden">
              <span class="c-checkbox__label">虫歯</span>
            </label>
            <label class="c-checkbox" for="checkbox-2">
              <input type="checkbox" name="checkbox[data][]" value="checkbox2" id="checkbox-2" class="c-checkbox__input u-visually-hidden">
              <span class="c-checkbox__label">被せ物がとれた</span>
            </label>
            <label class="c-checkbox" for="checkbox-3">
              <input type="checkbox" name="checkbox[data][]" value="checkbox3" id="checkbox-3" class="c-checkbox__input u-visually-hidden">
              <span class="c-checkbox__label">矯正歯科</span>
            </label>
            <label class="c-checkbox" for="checkbox-4">
              <input type="checkbox" name="checkbox[data][]" value="checkbox4" id="checkbox-4" class="c-checkbox__input u-visually-hidden">
              <span class="c-checkbox__label">咬み合わせ</span>
            </label>
            <label class="c-checkbox" for="checkbox-5">
              <input type="checkbox" name="checkbox[data][]" value="checkbox5" id="checkbox-5" class="c-checkbox__input u-visually-hidden">
              <span class="c-checkbox__label">歯周病</span>
            </label>
            <label class="c-checkbox" for="checkbox-6">
              <input type="checkbox" name="checkbox[data][]" value="checkbox6" id="checkbox-6" class="c-checkbox__input u-visually-hidden">
              <span class="c-checkbox__label">小児歯科</span>
            </label>
            <label class="c-checkbox" for="checkbox-7">
              <input type="checkbox" name="checkbox[data][]" value="checkbox7" id="checkbox-7" class="c-checkbox__input u-visually-hidden">
              <span class="c-checkbox__label">入れ歯</span>
            </label>
            <label class="c-checkbox" for="checkbox-8">
              <input type="checkbox" name="checkbox[data][]" value="checkbox8" id="checkbox-8" class="c-checkbox__input u-visually-hidden">
              <span class="c-checkbox__label">インプラント</span>
            </label>
            <label class="c-checkbox" for="checkbox-9">
              <input type="checkbox" name="checkbox[data][]" value="checkbox9" id="checkbox-9" class="c-checkbox__input u-visually-hidden">
              <span class="c-checkbox__label">その他</span>
            </label>
          </dd>
        </dl>
        <dl class="c-form__item">
          <dt class="c-form__term">ご連絡方法<span class="c-form__required">必須</span></dt>
          <dd class="c-form__desc">
            <select name="" class="c-select c-form__input" aria-label="カスタムプルダウン">
              <option value="">選択してください</option>
              <option value="mail">メール</option>
              <option value="tel">電話</option>
              <option value="line">LINE</option>
            </select>
          </dd>
        </dl>
        <dl class="c-form__item">
          <dt class="c-form__term">希望日</dt>
          <dd class="c-form__desc c-date">
            <input type="date" name="" class="c-form__input c-date__input">
            <input type="date" name="" class="c-form__input c-date__input">
            <input type="date" name="" class="c-form__input c-date__input">
          </dd>
        </dl>
        <dl class="c-form__item">
          <dt class="c-form__term">お問い合わせ内容</dt>
          <dd class="c-form__desc">
            <textarea name="" class="c-form__textarea c-textarea" placeholder="ご自由にご記入ください。"></textarea>
          </dd>
        </dl>
        <div class="c-form__button-wrapper">
          [submit class:c-form__button class:c-button class:c-button--large "送 信"]
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
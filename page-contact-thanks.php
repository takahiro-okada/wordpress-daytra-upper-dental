<?php
/* Template Name: お問い合わせ(Thanks)*/
?>

<?php get_header(); ?>


<?php
$sub_title = "CONTACT";
get_template_part('./template-parts/sub-mv', null, $sub_title)
?>

<div class="l-breadcrums">
  <?php get_template_part('./template-parts/breadcrums') ?>
</div>

<section class="l-contact-thanks">
  <div class="l-inner">
    <p class="p-contact-thanks__text">
      お問い合わせありがとうございました。<br>
      3営業日以内に返信いたしますので、しばらくお待ちいただけますと幸いです。<br>
      <span class="p-contact-thanks__text--attention">
        ※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。
      </span>
    </p>
  </div>
</section>

<?php get_footer(); ?>
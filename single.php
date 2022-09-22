<?php get_header(); ?>

<?php
$sub_title = "RESERVATION";
get_template_part('./template-parts/sub-mv', null, $sub_title)
?>

<div class="l-breadcrums">
  <?php get_template_part('./template-parts/breadcrums') ?>
</div>

<div class="p-archive">
  <div class="l-inner">
    <div class="p-archive__wrapper">
      <div class="p-archive__contents">
        <div class="p-entry">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <h1 class="p-entry__title"><?php the_title(); ?></h1>
              <div class="p-entry__meta">
                <date class="p-entry__date"><?php echo get_the_date('Y.m.d'); ?></date>
                <div class="p-entry__categories">
                  <?php
                  $categories =  get_the_category();
                  foreach ($categories as $category) {
                    echo  '<div class="p-entry__tag">' . $category->name . '</div>';
                  }
                  ?>
                </div>
              </div>
              <div class="p-entry__body">
                <div class="p-entry-content">
                  <?php
                  if (!empty($post->post_content)) {
                    echo the_content();
                  } else {
                    echo "<p>誠に申し訳ございません。本記事には、開発者の怠惰により本文がございません。<br>今後は、本文にもしっかりとダミーテキストを入れますのでお許しください。</p>";
                  }
                  ?>
                </div>
              </div>
          <?php endwhile;
          endif; ?>
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
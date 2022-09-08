<?php
/* Template Name: お知らせ一覧*/
?>

<?php get_header(); ?>

<?php
$sub_title = "NEWS";
get_template_part('./template-parts/sub-mv', null, "お知らせ")
?>

<div class="p-archive">
  <div class="l-inner">
    <div class="p-archive__wrapper">
      <div class="p-archive__contents">
        <div class="p-archive__list">
          <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
              <article class="p-archive__article p-article">
                <a class="p-article__link" href="<?php the_permalink() ?>">
                  <div class="p-article__image">
                    <?php the_post_thumbnail('thumbnail'); ?>
                  </div>
                  <div class="p-article__body">
                    <div class="p-article__tag">
                    <?php
                      $categories = get_the_category();
                      $first_category_name = $categories[0] -> name;
                      $output = "<li>{$first_category_name}</li>";
                      $output = '<div class="p-article__tag">' .$first_category_name.'</div>';
                      echo  $output;
                    ?>
                    </div>
                    <div class="p-article__title"><?php the_title(); ?></div>
                    <date class="p-article__date"> <?php the_time('Y.m.d'); ?></date>
                  </div>
                </a>
              </article>
            <?php endwhile; endif; ?>

          <?php get_template_part('./template-parts/pagination') ?>

        </div>
      </div>

      <?php get_sidebar(); ?>

    </div>
  </div>
</div>


<?php get_footer(); ?>

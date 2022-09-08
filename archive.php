<?php
/* Template Name: ブログ一覧*/
?>


<?php get_header(); ?>

<?php
$sub_title = "STAFF BLOG";
get_template_part('./template-parts/sub-mv', null, $sub_title)
?>

<div class="p-archive">
  <div class="l-inner">
    <div class="p-archive__wrapper">
      <div class="p-archive__contents">
        <div class="p-archive__list">
        <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
              <article class="p-archive__article p-article">
                <a class="p-article__link" href="<?php the_permalink() ?>">

                  <?php
                  if(is_new()){
                    echo '<span class="p-article__new-tag">NEW</span>';
                  }
                  ?>
                  <div class="p-article__image">

                    <?php the_post_thumbnail('thumbnail'); ?>
                  </div>
                  <div class="p-article__body">
                    <?php
                      if( $terms = get_the_terms($post->ID,'blog-category')){
                        echo '<div class="p-article__tag">' . $terms[0]-> name . '</div>';
                      }
                    ?>
                    <div class="p-article__title"><?php the_title(); ?></div>
                    <date class="p-article__date"> <?php the_time('Y.m.d'); ?></date>
                  </div>
                </a>
              </article>
              <?php endwhile; endif;?>

              <?php get_template_part('./template-parts/pagination') ?>

        </div>
      </div>

      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>

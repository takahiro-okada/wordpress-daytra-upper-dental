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
          <?php
          $args = array(
            'post_type' => "blog",
            'posts_per_page' => 10,
          );
          $staff_blog_query = new WP_Query( $args );
          if($staff_blog_query->have_posts() ):
            while( $staff_blog_query -> have_posts()):
            $staff_blog_query->the_post();
          ?>
              <article class="p-archive__article p-article">
                <a class="p-article__link" href="<?php the_permalink() ?>">
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
              <?php endwhile; endif; wp_reset_postdata();?>

              <?php get_template_part('./template-parts/pagination') ?>

        </div>
      </div>

      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>

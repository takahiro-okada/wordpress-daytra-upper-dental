<div class="p-sub-mv" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>')">
  <div class="p-sub-mv__contents">
    <h2 class="p-sub-mv__title"><?php the_title(); ?></h2>
    <p class="p-sub-mv__subtitle"><?php echo $args ?></p>
  </div>
</div>

<?php // 現在の投稿に隣接している前後の投稿を取得する
$prev_post = get_previous_post(); // 前の投稿を取得
$next_post = get_next_post(); // 次の投稿を取得
if ($prev_post || $next_post) : // どちらか一方があれば表示
?>
  <nav class="c-entry-pager">
    <?php if ($prev_post) : // 前の投稿があれば表示 
    ?>
      <a href="<?php echo get_permalink($prev_post->ID); ?>" class="c-entry-pager__prev-link">前の記事へ</a>
    <?php endif; ?>

    <a class="c-entry-pager__back" href="">記事一覧</a>
    <?php if ($next_post) : // 次の投稿があれば表示 
    ?>
      <a href="<?php echo get_permalink($next_post->ID); ?>" class="c-entry-pager__next-link">次の記事へ</a>
    <?php endif; ?>
  </nav>
<?php endif; ?>
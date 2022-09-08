<?php

//theme set up
function my_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}
add_action('after_setup_theme', 'my_setup');

//load CSS files
function add_styles()
{
  wp_enqueue_style('M-PLUS-Rounded-1c', 'https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500;700&display=swap', array(), '1.0.0', 'all');
  wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css', array(), '1.0.0', 'all');
  wp_enqueue_style('style', get_template_directory_uri() . '/dist/css/style.css', array(), "1.0", false);
}
add_action('wp_enqueue_scripts', 'add_styles');

//load JS files
function add_script()
{
  wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/main.js', array("jquery"), "1.0", true);
}
add_action('wp_enqueue_scripts', 'add_script');

// Custom Post
function custom_page()
{
  // 診療案内
  register_post_type(
    'plan',
    array(
      'public' => true,
      'label' => '診療',
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'excerpt', 'custom-fields', 'page-attributes'),
      'has_archive' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-admin-customizer',
      'hierarchical' => true,
      'labels' => array(
        'menu_name' => '診療',
        'all_items' => '診療',
        'add_new' => '新規ページ追加',
        'exclude_from_search' => false,
      ),
    )
  );

  register_taxonomy(
    'plan-category',
    'plan',
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カテゴリー',
      'singular_label' => 'カテゴリー',
      'public' => true,
      'show_ui' => true,
      'show_in_rest' => true
    )
  );

  // スタッフ
  register_post_type(
    'staff',
    array(
      'public' => true,
      'label' => 'スタッフ',
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'excerpt', 'custom-fields', 'page-attributes'),
      'has_archive' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-admin-customizer',
      'hierarchical' => true,
      'labels' => array(
        'menu_name' => 'スタッフ',
        'all_items' => 'スタッフ',
        'add_new' => '新規ページ追加',
        'exclude_from_search' => false,
      ),
    )
  );

  register_taxonomy(
    'staff-category',
    'staff',
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カテゴリー',
      'singular_label' => 'カテゴリー',
      'public' => true,
      'show_ui' => true,
      'show_in_rest' => true
    )
  );

  // スタッフブログ
  register_post_type(
    'blog',
    array(
      'public' => true,
      'label' => 'スタッフブログ',
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'excerpt', 'custom-fields', 'page-attributes'),
      'has_archive' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-admin-customizer',
      'hierarchical' => true,
      'labels' => array(
        'menu_name' => 'スタッフブログ',
        'all_items' => 'スタッフブログ',
        'add_new' => '新規ページ追加',
        'exclude_from_search' => false,
      ),
    )
  );

  register_taxonomy(
    'blog-category',
    'blog',
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カテゴリー',
      'singular_label' => 'カテゴリー',
      'public' => true,
      'show_ui' => true,
      'show_in_rest' => true
    )
  );
}
add_action('init', 'custom_page');

// Counting days from posting
function is_new( $days = 3){
  $days =3;
  $today = date_i18n('U');
  $entry_day = get_the_time('U');
  $time_difference = date('U',($today - $entry_day)) / 86000;
  if($days > $time_difference){
    return true;
  }
  return false;
}

// global $wp_rewrite;
// $wp_rewrite->flush_rules();

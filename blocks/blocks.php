<?php
function register_acf_block_types()
{
  acf_register_block_type(array(
    'name'              => 'slider',
    'title'             => __('Slider home'),
    'render_template'   => 'blocks/slider/slider.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#122b4f',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('slider'),
    'supports' => array('align' => false),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-slider',  get_template_directory_uri() . '/blocks/slider/slider.min.css');
      wp_enqueue_style('ra_svipeer_css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
      wp_enqueue_script('ra-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',  array(), '20130456', true);
      wp_enqueue_script('go-slider-init', get_template_directory_uri() . '/blocks/slider/slider.js', array('jquery'), '4', true);
    },
  ));

  acf_register_block_type(array(
    'name'              => 'posts',
    'title'             => __('Ostatnio dodane aktualności - slider'),
    'render_template'   => 'blocks/posts/posts.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#122b4f',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Aktualności'),
    'supports' => array('align' => false),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-posts',  get_template_directory_uri() . '/blocks/posts/posts.min.css');
      wp_enqueue_style('ra_svipeer_css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
      wp_enqueue_script('ra-swiper_js', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',  array(), '20130456', true);
      wp_enqueue_script('go-posts-init', get_template_directory_uri() . '/blocks/posts/posts.js', array('jquery'), '4', true);
    },
  ));
  acf_register_block_type(array(
    'name'              => 'posts-grid',
    'title'             => __('Posty - grid'),
    'render_template'   => 'blocks/posts-grid/posts-grid.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#122b4f',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Aktualności'),
    'supports' => array('align' => false),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-posts-grid',  get_template_directory_uri() . '/blocks/posts-grid/posts-grid.min.css');
    },
  ));
  acf_register_block_type(array(
    'name'              => 'header-klub',
    'title'             => __('Nagłówek LP Klub'),
    'render_template'   => 'blocks/header-klub/header-klub.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#122b4f',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Aktualności'),
    'supports' => array('align' => false),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-header-klub',  get_template_directory_uri() . '/blocks/header-klub/header-klub.min.css');
    },
  ));
  acf_register_block_type(array(
    'name'              => 'bullets-klub',
    'title'             => __('Bullets LP Klub'),
    'render_template'   => 'blocks/bullets-klub/bullets-klub.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#122b4f',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Aktualności'),
    'supports' => array('align' => false),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-bullets-klub',  get_template_directory_uri() . '/blocks/bullets-klub/bullets-klub.min.css');
    },
  ));
  acf_register_block_type(array(
    'name'              => 'steps-klub',
    'title'             => __('Jak się zarejestrować LP Klub'),
    'render_template'   => 'blocks/steps-klub/steps-klub.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#122b4f',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Aktualności'),
    'supports' => array('align' => false),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-steps-klub',  get_template_directory_uri() . '/blocks/steps-klub/steps-klub.min.css');
    },
  ));
  acf_register_block_type(array(
    'name'              => 'faq',
    'title'             => __('Najczęściej zadawane pytania'),
    'render_template'   => 'blocks/faq/faq.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#122b4f',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('faq'),
    'supports' => array('align' => false),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-faq',  get_template_directory_uri() . '/blocks/faq/faq.min.css');
      wp_enqueue_script('go-faq-init', get_template_directory_uri() . '/blocks/faq/faq.js', array('jquery'), '4', true);
    },
  ));
  acf_register_block_type(array(
    'name'              => 'wc-futured',
    'title'             => __('Wyróznione produkty'),
    'render_template'   => 'blocks/wc-futured/wc-futured.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#122b4f',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Wyróznione produkty'),
    'supports' => array('align' => false),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-wc-futured',  get_template_directory_uri() . '/blocks/wc-futured/wc-futured.min.css');
      // wp_enqueue_script('go-wc-futured-init', get_template_directory_uri() . '/blocks/wc-futured/wc-futured.js', array('jquery'), '4', true);
    },
  ));
  acf_register_block_type(array(
    'name'              => 'title',
    'title'             => __('Title'),
    'render_template'   => 'blocks/title/title.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#122b4f',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Title'),
    'supports' => array('align' => false),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-title',  get_template_directory_uri() . '/blocks/title/title.min.css');
    },
  ));
  acf_register_block_type(array(
    'name'              => 'wc-products',
    'title'             => __('Produkty'),
    'render_template'   => 'blocks/wc-products/wc-products.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#122b4f',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Produkty'),
    'supports' => array('align' => false),
  ));
  acf_register_block_type(array(
    'name'              => 'header',
    'title'             => __('Custome header'),
    'render_template'   => 'blocks/header/header.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#122b4f',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Custome header'),
    'supports' => array('align' => false),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-header',  get_template_directory_uri() . '/blocks/header/header.min.css');
      wp_enqueue_script('go-header-init', get_template_directory_uri() . '/blocks/header/header.js', array('jquery'), '4', true);
    },
  ));
  acf_register_block_type(array(
    'name'              => 'products-tab',
    'title'             => __('Produkty - nowości/promocje/bestsaller'),
    'render_template'   => 'blocks/wc-products-tab/products-tab.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#122b4f',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('Aktualności'),
    'supports' => array('align' => false),
    'enqueue_assets'    => function () {
      wp_enqueue_style('ra_svipeer_css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
      wp_enqueue_script('ra-swiper_js', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',  array(), '20130456', true);
      wp_enqueue_script('go-products-tab-init', get_template_directory_uri() . '/blocks/wc-products-tab/products-tab.js', array('jquery'), '4', true);
    },
  ));
  acf_register_block_type(array(
    'name'              => 'wc-category',
    'title'             => __('Kategorie produktów'),
    'render_template'   => 'blocks/wc-category/wc-category.php',
    'category'          => 'formatting',
    'icon' => array(
      'background' => '#122b4f',
      'foreground' => '#fff',
      'src' => 'ellipsis',
    ),
    'mode'            => 'preview',
    'keywords'          => array('wc-category'),
    'supports' => array('align' => false),
    'enqueue_assets'    => function () {
      wp_enqueue_style('go-wc-category',  get_template_directory_uri() . '/blocks/wc-category/wc-category.min.css');
      wp_enqueue_style('ra_svipeer_css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
      wp_enqueue_script('ra-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',  array(), '20130456', true);
      wp_enqueue_script('go-wc-category-init', get_template_directory_uri() . '/blocks/wc-category/wc-category.js', array('jquery'), '4', true);
    },
  ));
}
if (function_exists('acf_register_block_type')) {
  add_action('acf/init', 'register_acf_block_types');
}

add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point($path)
{
  // Update path
  $path = get_template_directory() . '/blocks/acf-json';
  // Return path
  return $path;
}

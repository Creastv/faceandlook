<?php
add_theme_support('post-thumbnails');
add_image_size('post-futured', 600, 370, array('center', 'center'), true);
add_image_size('person-futured', 500, 500, array('center', 'center'), true);

if (!function_exists('go_register_nav_menu')) {
	function go_register_nav_menu()
	{
		register_nav_menus(array(
			'primary_menu' => __('Primary Menu', 'go'),
			'secundary_menu' => __('Footer', 'go'),
		));
	}
	add_action('after_setup_theme', 'go_register_nav_menu', 0);
}

function go_widgets_init()
{
	register_sidebar(array(
		'name'          => __('footer one', 'go'),
		'id'            => 'footer-1',
		'before_widget' => '<div id="%1$s" class="calaps widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
	register_sidebar(array(
		'name'          => __('footer two', 'go'),
		'id'            => 'footer-2',
		'before_widget' => '<div id="%1$s" class=" widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
	register_sidebar(array(
		'name'          => __('footer tree', 'go'),
		'id'            => 'footer-3',
		'before_widget' => '<div id="%1$s" class=" widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
}
add_action('widgets_init', 'go_widgets_init');

require_once get_template_directory() . '/func/enqueue-styles.php';
require_once get_template_directory() . '/func/enqueue-scripts.php';
require get_template_directory() . '/func/clean-up.php';
require get_template_directory() . '/func/cpt.php';
require get_template_directory() . '/blocks/blocks.php';

// gutenberg editor
function add_block_editor_assets()
{
	wp_enqueue_style('block_editor_css', get_template_directory_uri() . '/src/css/go-admin.css');
}
add_action('enqueue_block_editor_assets', 'add_block_editor_assets', 10, 0);


// Paginacja
function pagination_bars()
{
	global $wp_query;

	$total_pages = $wp_query->max_num_pages;
	$big = 999999999; // need an unlikely integer
	if ($total_pages > 1) {
		$current_page = max(1, get_query_var('paged'));
		echo paginate_links(array(
			'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
			'format' => '?paged=%#%',
			'current' => $current_page,
			'total' => $total_pages,
		));
	}
}
// Excerpt changing 3 dots
function new_excerpt_more($more)
{
	return ' <a href="' . get_permalink() . '">' . esc_attr_x('Czytaj więcej ', 'go') . ' ...  </a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


function wp_example_excerpt_length($length)
{
	return 30;
}
add_filter('excerpt_length', 'wp_example_excerpt_length');

if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'Face&Look settings',
		'menu_title' => 'Face&Look settings',
		'parent_slug' => 'themes.php',
	));
}


// Dodanie zdecia wyrózniającego dla postów w tabeli
add_filter('manage_posts_columns', 'add_img_column');
add_filter('manage_posts_custom_column', 'manage_img_column', 10, 2);
add_filter('manage_pages_custom_column', 'manage_img_column', 10, 2);

function add_img_column($columns)
{
	$columns = array_slice($columns, 0, 1, true) + array("links" => "Image") + array_slice($columns, 1, count($columns) - 1, true);
	return $columns;
}

function manage_img_column($column_name, $post_id)
{
	if ($column_name == 'links') {
		echo get_the_post_thumbnail($post_id, 'thumbnail');
	}
	return $column_name;
}

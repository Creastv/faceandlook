<?php
add_theme_support('post-thumbnails');
add_image_size( 'post-futured', 600, 370, array( 'center', 'center' ), true );
add_image_size( 'person-futured', 500, 500, array( 'center', 'center' ), true );

if ( ! function_exists( 'go_register_nav_menu' ) ) {
    function go_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'go' ),
            'secundary_menu' => __( 'Footer', 'go' ),
			'tertiary_menu' => __( 'BIP', 'go' ),
        ) );
    }
    add_action( 'after_setup_theme', 'go_register_nav_menu', 0 );
}

function go_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'footer one', 'go' ),
		'id'            => 'footer-1',
		'before_widget' => '<div id="%1$s" class="calaps widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
    register_sidebar( array(
		'name'          => __( 'footer two', 'go' ),
		'id'            => 'footer-2',
		'before_widget' => '<div id="%1$s" class=" widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
    register_sidebar( array(
		'name'          => __( 'footer tree', 'go' ),
		'id'            => 'footer-3',
		'before_widget' => '<div id="%1$s" class=" widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Mega-menu-1', 'go' ),
		'id'            => 'mega-menu-1',
		'before_widget' => '<div id="%1$s" class=" widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Mega-menu-2', 'go' ),
		'id'            => 'mega-menu-2',
		'before_widget' => '<div id="%1$s" class=" widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Mega-menu-3', 'go' ),
		'id'            => 'mega-menu-3',
		'before_widget' => '<div id="%1$s" class=" widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'go_widgets_init' );

require_once get_template_directory() . '/func/enqueue-styles.php';
require_once get_template_directory() . '/func/enqueue-scripts.php';
require get_template_directory() . '/func/clean-up.php';
require get_template_directory() . '/func/cpt.php';
require get_template_directory() . '/func/footer-style.php';
require get_template_directory() . '/blocks/blocks.php';

// gutenberg editor
function add_block_editor_assets(){
  wp_enqueue_style('block_editor_css', get_template_directory_uri().'/src/css/go-admin.css');
}
add_action('enqueue_block_editor_assets','add_block_editor_assets',10,0);


// Paginacja
function pagination_bars() {
    global $wp_query;
 
    $total_pages = $wp_query->max_num_pages;
	$big = 999999999; // need an unlikely integer
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
		echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}

function filter_plugin_updates( $value ) {
	$plugins = array(
	  'advanced-custom-fields-pro/acf.php'
	);
	foreach( $plugins as $plugin ) {
	  if ( isset( $value->response[$plugin] ) ) {
		unset( $value->response[$plugin] );
	  }
	}
	return $value;
}

add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );
// Excerpt changing 3 dots
Function new_excerpt_more( $more ) {
	return ' <a href="' . get_permalink() . '">' . esc_attr_x( 'Czytaj więcej ', 'go' ) . ' ...  </a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function wp_example_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wp_example_excerpt_length');

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title' => 'Bemowskie settings',
    'menu_title' => 'Bemowskie settings',
    'parent_slug' => 'themes.php',
  ));
  acf_add_options_page(array(
    'page_title' => 'Wynajem',
    'menu_title' => 'Strona Wynajem',
    'parent_slug' => 'edit.php?post_type=mw_room',
  ));
 
  acf_add_options_page(array(
    'page_title' => 'Instruktorzy',
    'menu_title' => 'Strona instruktorzy',
    'parent_slug' => 'edit.php?post_type=mw_person',
  ));
  acf_add_options_page(array(
    'page_title' => 'Zajęcia',
    'menu_title' => 'Strona zajęcia',
    'parent_slug' => 'edit.php?post_type=mw_class',
  ));
  acf_add_options_page(array(
    'page_title' => 'Projekty',
    'menu_title' => 'Strona projekty',
    'parent_slug' => 'edit.php?post_type=mw_project',
  ));
  acf_add_options_page(array(
    'page_title' => 'Repertuarium',
    'menu_title' => 'Strona repertuarium',
    'parent_slug' => 'edit.php?post_type=mw_event',
  ));
  
}
// Zmaina logo wp-login.php
// function custom_login_logo() {
//     echo '<style type="text/css">
//         h1 a {
//           background-image: url('.get_stylesheet_directory_uri().'/src/img/logo.png) !important;
//           background-size:100%!important;
//           width: 165px!important;
//          }
//     </style>';
// }
// add_action('login_head', 'custom_login_logo');

// Dodanie zdecia wyrózniającego dla postów w tabeli
add_filter('manage_posts_columns', 'add_img_column');
add_filter('manage_posts_custom_column', 'manage_img_column', 10, 2);
add_filter('manage_pages_custom_column', 'manage_img_column', 10, 2);
  
function add_img_column($columns) {
$columns = array_slice($columns, 0, 1, true) + array("links" => "Image") + array_slice($columns, 1, count($columns) - 1, true);
return $columns;
}
  
function manage_img_column($column_name, $post_id) {
if( $column_name == 'links' ) {
echo get_the_post_thumbnail($post_id, 'thumbnail');
}
return $column_name;
}




function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyB8pMQYqHehRWSDeAVKOrv8JD9s1dR6Y2Q');
}
add_action('acf/init', 'my_acf_init');


if(!function_exists('mit_thumbnail_upscale')) {
	function mit_thumbnail_upscale( $default, $orig_w, $orig_h, $new_w, $new_h, $crop ){
	
		if ( !$crop ) return null; // let the wordpress default function handle this
	
		$aspect_ratio = $orig_w / $orig_h;
		$size_ratio = max($new_w / $orig_w, $new_h / $orig_h);
	
		$crop_w = round($new_w / $size_ratio);
		$crop_h = round($new_h / $size_ratio);
	
		$s_x = floor( ($orig_w - $crop_w) / 2 );
		$s_y = floor( ($orig_h - $crop_h) / 2 );
	
		return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
	}
}
add_filter( 'image_resize_dimensions', 'mit_thumbnail_upscale', 10, 6 );





//Remove the custom where clause before the calendar query is executed
function hubbubart_calendar_remove_posts_where() {
    remove_filter( 'posts_where', 'wpfc_temp_filter_where' );
}
add_action('wpfc_before_wp_query', 'hubbubart_calendar_remove_posts_where', 10);

function change_calendar_item_date($item, $post) {

$ini = date("Ymd", strtotime(get_field('data', $post->ID) ));
//     $fi = date("d/m/Y : ", strtotime(get_field('data', $post->ID)));
  // $ini = get_field('data', $post->ID);
  // $ini = date("d/m/Y", $ini);
   // $fi = date("d/m/Y H:i:s", strtotime(get_field('data', $post->ID)  . get_field('godzina', $post->ID)));

    $item['start'] = $ini;
    $item['end'] = $ini;

    return $item;
}

add_filter('wpfc_ajax_post', 'change_calendar_item_date', 10, 2);

add_filter( 'eventorganiser_event_tooltip', 'my_callback_function', 10, 4 );
function my_callback_function( $description, $event_id, $occurrence_id, $post ){
    return $post->post_excerpt;
};


add_shortcode( 'malform','wse2019_remove_spacer' );
function wse2019_remove_spacer( $atts ) {
    return '';
}


add_action( 'wpb_custom_cron', 'wpb_custom_cron_func' );

// function wpb_custom_cron_func() {

// $date = get_field('data', 75099);
// $now = date("d/m/Y");


// $hasRecurring = get_field('wydarzenia_powtarzalne', 75099);
// $eventsRecurring = get_field('wydarzenia', 75099);
// // $last = count($eventsRecurring);

// if($date <= $now){
//     if($hasRecurring){
//         foreach( $eventsRecurring as $ev){
//             if($ev['data'] >= $now) {
// 				$dob_str = $ev['data'];
// 				$date = DateTime::createFromFormat('d/m/Y', $dob_str);
// 				$date = $date->format('Ymd');

// 				update_field('godzina', $ev['godzina'] , 75099);
// 				update_field('formularz', $ev['formularz'] , 75099);
// 				update_field('data', $date , 75099);
// 				do_action('search_filter_update_post_cache', 75099);

//                 break;
//             }
//         }
//     }
// }
// }

function wpb_custom_cron_func() {
	$args = array(
		'numberposts' => -1,
		'post_type'   => 'mw_event',
		'order'       => 'ASC',
		'orderby'     => 'title'
	  );
	  $events = get_posts( $args );
	  
	  if ($events) : 
		foreach ( $events as $event ) : setup_postdata( $event ); 
		
		  $date = get_field('data', $event->ID);
		  $now = date("d/m/Y");
		  $hasRecurring = get_field('wydarzenia_powtarzalne', $event->ID);
		  $eventsRecurring = get_field('wydarzenia', $event->ID);
	  
		  if($date <= $now){
			  if($hasRecurring){
				  foreach( $eventsRecurring as $ev){
					  if($ev['data'] >= $now) {
						  $dob_str = $ev['data'];
						  $date = DateTime::createFromFormat('d/m/Y', $dob_str);
						  $date = $date->format('Ymd');
	  
						  update_field('godzina', $ev['godzina'] , $event->ID);
						  update_field('formularz', $ev['formularz'] , $event->ID);
						  update_field('data', $date , $event->ID);
						  do_action('search_filter_update_post_cache', $event->ID);
						  echo 'test';
						  break;
					  }
				  }
			  }
		  }
	  
		 endforeach; wp_reset_postdata();
	  endif;
}

/**
 * Custom shortcode to display the total number of entries for a form.
 *
 * Basic usage: [wpf_entries_count id="FORMID" type="TYPE"]
 *
 * Realtime counts could be delayed due to any caching setup on the site
 *
 * @link https://wpforms.com/developers/how-to-display-the-total-number-of-entries/
 */
 
function wpf_entries_count( $atts ) {
 
    // Pull ID shortcode attributes such as the type of entries to count
    $atts = shortcode_atts(
        [
            'id'   => '',
            'type' => 'all', // all, unread, read, or starred.
        ],
        $atts
    );
 
    if ( empty( $atts[ 'id' ] ) ) {
        return;
    }
 
    $args = [
        'form_id' => absint( $atts[ 'id' ] ),
    ];
 
        // What types of entries do you want to show? The read, unread, starred or all?
    if ( $atts[ 'type' ] === 'unread' ) {
        $args[ 'viewed' ] = '0';
    } elseif( $atts[ 'type' ] === 'read' ) {
        $args[ 'viewed' ] = '1';
    } elseif ( $atts[ 'type' ] === 'starred' ) {
        $args[ 'starred' ] = '1';
    }
 
    return wpforms()->entry->get_entries( $args, true );
     
}
add_shortcode( 'wpf_entries_count', 'wpf_entries_count' );

<?php 
//////////////////////////////////////////////////////////////Wydarzenia

// function go_post_types_wydarzenia() {

// 	$labels = array(
// 		'name'               => 'Wydarzenia',
// 		'singular_name'      => 'Wydarzenia',
// 		'menu_name'          => 'Wydarzenia',
// 		'name_admin_bar'     => 'Wydarzenia',
// 		'all_items'          => 'Wydarzenia',
// 	);

// 	$args = array( 
// 	    'public' => true,
// 		'has_archive' => true,
// 		'show_in_rest' => true,
// 		'hierarchical'      => true,
// 		'labels'            => $labels,
// 		'show_ui'           => true,
// 		'show_admin_column' => true,
// 		'query_var'         => true,
// 		'publicly_queryable' => true,
// 		'show_in_rest' => true,
// 		"rewrite"             => array( "slug" => "wydarzenia", "with_front" => true ),
// 		'supports'      => array( 'title', 'page-attributes', 'thumbnail', 'editor', 'excerpt', 'author', 'custom-fields' ),
// 		// , 'editor' 
// 	);
//     register_post_type( 'mw_event', $args );

// }
// add_action( 'init', 'go_post_types_wydarzenia' );



// add_action( 'init', 'go_taxonomy_cat', 0 );  
// function go_taxonomy_cat() {
//   $labels = array(
//     'name' => _x( 'Kategoria', 'go' ),
//     'singular_name' => _x( 'Kategoria', 'go' ),
//     'search_items' =>  __( 'Szukaj Typ' ),
//     'all_items' => __( 'Wszystkie Typy' ),
//     'menu_name' => __( 'Kategoria' ),
//   );    
//   register_taxonomy('class_cat',array("mw_event", 'mw_class'), array(
//     'hierarchical' => true,
//     'labels' => $labels,
//     'show_ui' => true,
//     'show_in_rest' => true,
//     'show_admin_column' => true,
//     'query_var' => true,
//     'rewrite' => array( 'slug' => 'event_cat' ),
//   ));
// }
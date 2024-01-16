<?php 
//////////////////////////////////////////////////////////////Wynajem
function go_post_types_wynajem() {

	$labels = array(
		'name'               => 'Wynajem',
		'singular_name'      => 'Wynajem',
		'menu_name'          => 'Wynajem',
		'name_admin_bar'     => 'Wynajem',
		'all_items'          => 'Wynajem',
	);

	$args = array( 
	    'public' => true,
		'has_archive' => true,
		'show_in_rest' => true,
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		"rewrite"             => array( "slug" => "wynajem", "with_front" => true ),
		'supports'      => array( 'title', 'page-attributes', 'thumbnail', 'editor', 'excerpt', 'author' ),
		// , 'editor' 
	);
    register_post_type( 'mw_room', $args );

}
add_action( 'init', 'go_post_types_wynajem' );


//////////////////////////////////////////////////////////////Wydarzenia

function go_post_types_wydarzenia() {

	$labels = array(
		'name'               => 'Wydarzenia',
		'singular_name'      => 'Wydarzenia',
		'menu_name'          => 'Wydarzenia',
		'name_admin_bar'     => 'Wydarzenia',
		'all_items'          => 'Wydarzenia',
	);

	$args = array( 
	    'public' => true,
		'has_archive' => true,
		'show_in_rest' => true,
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		"rewrite"             => array( "slug" => "wydarzenia", "with_front" => true ),
		'supports'      => array( 'title', 'page-attributes', 'thumbnail', 'editor', 'excerpt', 'author', 'custom-fields' ),
		// , 'editor' 
	);
    register_post_type( 'mw_event', $args );

}
add_action( 'init', 'go_post_types_wydarzenia' );



add_action( 'init', 'go_taxonomy_cat', 0 );  
function go_taxonomy_cat() {
  $labels = array(
    'name' => _x( 'Kategoria', 'go' ),
    'singular_name' => _x( 'Kategoria', 'go' ),
    'search_items' =>  __( 'Szukaj Typ' ),
    'all_items' => __( 'Wszystkie Typy' ),
    'menu_name' => __( 'Kategoria' ),
  );    
  register_taxonomy('class_cat',array("mw_event", 'mw_class'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'event_cat' ),
  ));
}

add_action( 'init', 'go_taxonomy_lokalizacja', 0 );  
function go_taxonomy_lokalizacja() {
  $labels = array(
    'name' => _x( 'Lokalizacja', 'go' ),
    'singular_name' => _x( 'Lokalizacja', 'go' ),
    'search_items' =>  __( 'Szukaj Typ' ),
    'all_items' => __( 'Wszystkie Typy' ),
    'menu_name' => __( 'Lokalizacja' ),
  );    
  register_taxonomy('class_place', array("mw_event", 'mw_class'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'class_place' ),
  ));
}

add_action( 'init', 'go_taxonomy_instructor', 0 );  
function go_taxonomy_instructor() {
  $labels = array(
    'name' => _x( 'Instruktor', 'go' ),
    'singular_name' => _x( 'Instruktor', 'go' ),
    'search_items' =>  __( 'Szukaj Typ' ),
    'all_items' => __( 'Wszystkie Typy' ),
    'menu_name' => __( 'Instruktor' ),
  );    
  register_taxonomy('class_instructor', array("mw_event", 'mw_class'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'class_instructor' ),
  ));
}




//////////////////////////////////////////////////////////////Projekty
function go_post_types_prjekty() {
	$labels = array(
		'name'               => 'Projekty',
		'singular_name'      => 'Projekty',
		'menu_name'          => 'Projekty',
		'name_admin_bar'     => 'Projekty',
		'all_items'          => 'Projekty',
	);	

	$args = array( 
	    'public' => true,
		'has_archive' => true,
		'show_in_rest' => true,
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		"rewrite"             => array( "slug" => "projekty", "with_front" => true ),
		'supports'      => array( 'title', 'page-attributes', 'thumbnail', 'editor', 'excerpt' ),
		// , 'editor' 
	);
    register_post_type( 'mw_project', $args );

}
add_action( 'init', 'go_post_types_prjekty' );

//////////////////////////////////////////////////////////////Instruktorzy
function go_post_types_instruktorzy() {
	$labels = array(
		'name'               => 'Instruktorzy',
		'singular_name'      => 'Instruktorzy',
		'menu_name'          => 'Instruktorzy',
		'name_admin_bar'     => 'Instruktorzy',
		'all_items'          => 'Instruktorzy',
	);	

	$args = array( 
	    'public' => true,
		'has_archive' => true,
		'show_in_rest' => true,
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		"rewrite"             => array( "slug" => "instruktorzy", "with_front" => true ),
		'supports'      => array( 'title', 'page-attributes', 'thumbnail', 'editor', 'excerpt' ),
		// , 'editor' 
	);
    register_post_type( 'mw_person', $args );

}
add_action( 'init', 'go_post_types_instruktorzy' );

add_action( 'init', 'go_taxonomy_group_osob', 0 );  
function go_taxonomy_group_osob() {
  $labels = array(
    'name' => _x( 'Grupy osób', 'go' ),
    'singular_name' => _x( 'Grupy osób', 'go' ),
    'search_items' =>  __( 'Szukaj Typ' ),
    'all_items' => __( 'Wszystkie' ),
    'menu_name' => __( 'Grupy osób' ),
  );    
  register_taxonomy('person_group',array('mw_person'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    
    'rewrite' => array( 'slug' => 'person_group' ),

  ));
}


//////////////////////////////////////////////////////////////Instruktorzy
function go_post_types_zajecia() {
	$labels = array(
		'name'               => 'Zajęcia',
		'singular_name'      => 'Zajęcia',
		'menu_name'          => 'Zajęcia',
		'name_admin_bar'     => 'Zajęcia',
		'all_items'          => 'Zajęcia',
	);	

	$args = array( 
	    'public' => true,
		'has_archive' => true,
		'show_in_rest' => true,
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		"rewrite"             => array( "slug" => "zajecia", "with_front" => true ),
		'supports'      => array( 'title','thumbnail','excerpt', 'editor' ),
		// , 'editor' 
	);
    register_post_type( 'mw_class', $args );

}
add_action( 'init', 'go_post_types_zajecia' );

add_action( 'init', 'go_taxonomy_group', 0 );  
function go_taxonomy_group() {
  $labels = array(
    'name' => _x( 'Grupy wiekowe', 'go' ),
    'singular_name' => _x( 'Grupy wiekowe', 'go' ),
    'search_items' =>  __( 'Szukaj Typ' ),
    'all_items' => __( 'Wszystkie Typy' ),
    'menu_name' => __( 'Grupy wiekowe' ),
  );    
  register_taxonomy('class_group',array('mw_class'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    
    'rewrite' => array( 'slug' => 'class_group' ),
  ));
}
add_action( 'init', 'go_taxonomy_type', 0 );  
function go_taxonomy_type() {
  $labels = array(
    'name' => _x( 'Rodzaj ', 'go' ),
    'singular_name' => _x( 'Rodzaj', 'go' ),
    'search_items' =>  __( 'Szukaj Typ' ),
    'all_items' => __( 'Wszystkie Typy' ),
    'menu_name' => __( 'Rodzaj' ),
  );    
  register_taxonomy('class_type',array('mw_class', "mw_event"), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    
    'rewrite' => array( 'slug' => 'class_type' ),

  ));
}


//////////////////////////////////////////////////////////////bip
function go_post_types_bip() {
	$labels = array(
		'name'               => 'BIP',
		'singular_name'      => 'BIP',
		'menu_name'          => 'BIP',
		'name_admin_bar'     => 'BIP',
		'all_items'          => 'BIP',
	);	

	$args = array( 
	    'public' => true,
		'has_archive' => false,
		'show_in_rest' => true,
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		"rewrite"             => array( "slug" => "bip", "with_front" => true ),
		'supports'      => array( 'title', 'page-attributes', 'thumbnail', 'editor', 'excerpt' ),
		// , 'editor' 
	);
    register_post_type( 'bip', $args );

}
add_action( 'init', 'go_post_types_bip' );


// //////////////////////////////////////////////////////////////Projects
function go_post_types_projects() {

	$labels = array(
		'name'               => 'Miejsca',
		'singular_name'      => 'Miejsca',
		'menu_name'          => 'Miejsca',
		'name_admin_bar'     => 'Miejsca',
		'all_items'          => 'Miejsca',
	);

	$args = array( 
	    'public' => true,
		'has_archive' => false,
		'show_in_rest' => true,
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		"rewrite"             => array( "slug" => "lokalizacja", "with_front" => true ),
		'supports'      => array( 'title', 'page-attributes', 'thumbnail', 'editor' ),
		// , 'editor' 
	);
    register_post_type( 'mw_place', $args );

}
add_action( 'init', 'go_post_types_projects' );



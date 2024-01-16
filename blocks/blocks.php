<?php
function register_acf_block_types() {
          acf_register_block_type(array(
            'name'              => 'bip-ogloszenie',
            'title'             => __('Bip ogloszenie'),
            'render_template'   => 'blocks/bip-ogloszenie/bip-ogloszenie.php',
            'category'          => 'formatting',
            'icon' => array(
              'background' => '#122b4f',
              'foreground' => '#fff',
              'src' => 'ellipsis',
            ),
          'mode'            => 'preview', 
          'keywords'          => array( 'bip-ogloszenie' ),
          'supports' => array( 'align' =>false ),
          'enqueue_assets'    => function(){
              wp_enqueue_style( 'go-bip-ogloszenie',  get_template_directory_uri() . '/blocks/bip-ogloszenie/bip-ogloszenie.css' );
          },
        ));
          acf_register_block_type(array(
            'name'              => 'bip-zarzadzanie',
            'title'             => __('Bip zarządzanie'),
            'render_template'   => 'blocks/bip-zarzadzanie/bip-zarzadzanie.php',
            'category'          => 'formatting',
            'icon' => array(
              'background' => '#122b4f',
              'foreground' => '#fff',
              'src' => 'ellipsis',
            ),
          'mode'            => 'preview', 
          'keywords'          => array( 'bip-zarzadzanie' ),
          'supports' => array( 'align' =>false ),
          'enqueue_assets'    => function(){
              wp_enqueue_style( 'go-bip-zarzadzanie',  get_template_directory_uri() . '/blocks/bip-zarzadzanie/bip-zarzadzanie.css' );
          },
        ));
        acf_register_block_type(array(
            'name'              => 'bip-archive',
            'title'             => __('Bip archiva'),
            'render_template'   => 'blocks/bip-archive/bip-archive.php',
            'category'          => 'formatting',
            'icon' => array(
              'background' => '#122b4f',
              'foreground' => '#fff',
              'src' => 'ellipsis',
            ),
          'mode'            => 'preview', 
          'keywords'          => array( 'bip-archive' ),
          'supports'		=> [
            'align'			=> false,
            'anchor'		=> true,
            'customClassName'	=> true,
            'jsx' 			=> true,
          ],
          'enqueue_assets'    => function(){
              wp_enqueue_style( 'go-bip-archive',  get_template_directory_uri() . '/blocks/bip-archive/bip-archive.css' );
              wp_enqueue_script('go-bip-archive-init', get_template_directory_uri() . '/blocks/bip-archive/bip-archive.js', array( 'jquery' ),'4', true );
          },
        ));
          acf_register_block_type(array(
          'name'              => 'schedule',
          'title'             => __('Plan lekcji'),
          'render_template'   => 'blocks/schedule/schedule.php',
          'category'          => 'formatting',
          'icon' => array(
            'background' => '#122b4f',
            'foreground' => '#fff',
            'src' => 'ellipsis',
          ),
        'mode'            => 'preview', 
        'keywords'          => array( 'schedule' ),
        'supports' => array( 'align' =>false ),
        'enqueue_assets'    => function(){
            wp_enqueue_style( 'go-schedule',  get_template_directory_uri() . '/blocks/schedule/schedule.css' );
            wp_enqueue_script('go-schedule', get_template_directory_uri() . '/blocks/schedule/schedule.js', array( 'jquery' ),'4', true );
        },
      ));
      acf_register_block_type(array(
          'name'              => 'nav-anchor',
          'title'             => __('Nawigacja do kotwic'),
          'render_template'   => 'blocks/nav-anchor/nav-anchor.php',
          'category'          => 'formatting',
          'icon' => array(
            'background' => '#122b4f',
            'foreground' => '#fff',
            'src' => 'ellipsis',
          ),
        'mode'            => 'preview', 
        'keywords'          => array( 'nav-anchor' ),
        'supports' => array( 'align' =>false ),
        'enqueue_assets'    => function(){
            wp_enqueue_style( 'go-nav-anchor',  get_template_directory_uri() . '/blocks/nav-anchor/nav-anchor.css' );
        },
      ));
      acf_register_block_type(array(
        'name'              => 'anchor',
        'title'             => __('Kotwica'),
        'render_template'   => 'blocks/anchor/anchor.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#122b4f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'anchor' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-anchor',  get_template_directory_uri() . '/blocks/anchor/anchor.css' );
      },
    ));
      acf_register_block_type(array(
        'name'              => 'group',
        'title'             => __('Grupa'),
        'render_template'   => 'blocks/group/group.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#122b4f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'group' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-group',  get_template_directory_uri() . '/blocks/group/group.css' );
      },
    ));
    acf_register_block_type(array(
        'name'              => 'title',
        'title'             => __('Tytuł'),
        'render_template'   => 'blocks/title/title.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#122b4f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'title' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-title',  get_template_directory_uri() . '/blocks/title/title.css' );
      },
    ));
    acf_register_block_type(array(
        'name'              => 'events',
        'title'             => __('Eventsc - grid'),
        'render_template'   => 'blocks/events/events.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#122b4f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'events' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-events',  get_template_directory_uri() . '/blocks/events/events.css' );
      },
    ));
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
      'keywords'          => array( 'slider' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-slider',  get_template_directory_uri() . '/blocks/slider/slider.css' );
          wp_enqueue_style( 'ra_svipeer_css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' );
          wp_enqueue_script('ra-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',  array(), '20130456', true );
          wp_enqueue_script('go-slider-init', get_template_directory_uri() . '/blocks/slider/slider.js', array( 'jquery' ),'4', true );

      },
    ));
    acf_register_block_type(array(
        'name'              => 'atut',
        'title'             => __('Atut'),
        'render_template'   => 'blocks/atut/atut.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#122b4f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'atut' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-atut',  get_template_directory_uri() . '/blocks/atut/atut.css' );
      },
    )); 
    acf_register_block_type(array(
        'name'              => 'locals',
        'title'             => __('Lokale'),
        'render_template'   => 'blocks/locale/locale.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#122b4f',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Lokale', 'mapa' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-locale',  get_template_directory_uri() . '/blocks/locale/locale.css' );
          wp_enqueue_script('go-locale', 'https://maps.google.com/maps/api/js?key=AIzaSyB8pMQYqHehRWSDeAVKOrv8JD9s1dR6Y2Q', array( 'jquery' ),'4', true );
          wp_enqueue_script('go-locale-init', get_template_directory_uri() . '/blocks/locale/locale.js', array( 'jquery' ),'4', true );
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
      'keywords'          => array( 'Aktualności' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-posts',  get_template_directory_uri() . '/blocks/posts/posts.css' );
          wp_enqueue_style( 'ra_svipeer_css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' );
          wp_enqueue_script('ra-swiper_js', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',  array(), '20130456', true );
          wp_enqueue_script('go-posts-init', get_template_directory_uri() . '/blocks/posts/posts.js', array( 'jquery' ),'4', true );
	
      },
    ));
    acf_register_block_type(array(
      'name'              => 'posty__list',
      'title'             => __('Aktualności - po kategorii - lista'),
      'render_template'   => 'blocks/posty-list/posty-list.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#122b4f',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'aktualności' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-posty-list',  get_template_directory_uri() . '/blocks/posty-list/posty-list.css' );

      },
    ));
    acf_register_block_type(array(
      'name'              => 'instruktorzy__list',
      'title'             => __('Instruktorzy - po kategorii - lista'),
      'render_template'   => 'blocks/instruktorzy-list/instruktorzy-list.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#122b4f',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Instruktorzy' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-instruktorzy-list',  get_template_directory_uri() . '/blocks/instruktorzy-list/instruktorzy-list.css' );

      },
    ));
    acf_register_block_type(array(
      'name'              => 'zajecia__list',
      'title'             => __('Zajecia - po kategorii - lista'),
      'render_template'   => 'blocks/zajecia-list/zajecia-list.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#122b4f',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Zajecia' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-zajecia-list',  get_template_directory_uri() . '/blocks/zajecia-list/zajecia-list.css' );

      },
    ));
    acf_register_block_type(array(
      'name'              => 'wydarzenia__list',
      'title'             => __('Wydarzenia - po kategorii - lista'),
      'render_template'   => 'blocks/wydarzenia-list/wydarzenia-list.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#122b4f',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'wydarzenia' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-wydarzenia-list',  get_template_directory_uri() . '/blocks/wydarzenia-list/wydarzenia-list.css' );

      },
    ));
    acf_register_block_type(array(
      'name'              => 'wydazenia_zajecia_ins',
      'title'             => __('Wydarzenia/Zajęcia - po instruktorze'),
      'render_template'   => 'blocks/wydarzenia-instruktor/wydarzenia-instruktor.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#122b4f',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'wydarzenia' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-wydarzenia-instruktor-list',  get_template_directory_uri() . '/blocks/wydarzenia-instruktor/wydarzenia-instruktor.css' );

      },
    ));
    acf_register_block_type(array(
      'name'              => 'instruktorzy',
      'title'             => __('Instruktorzy - slider'),
      'render_template'   => 'blocks/persons/persons.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#122b4f',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Instruktorzy' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          // wp_enqueue_style( 'go-persons',  get_template_directory_uri() . '/blocks/persons/persons.css' );
          wp_enqueue_style( 'ra_svipeer_css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' );
          wp_enqueue_script('ra-swiper_js', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',  array(), '20130456', true );
          wp_enqueue_script('go-persons-init', get_template_directory_uri() . '/blocks/persons/persons.js', array( 'jquery' ),'4', true );

      },
    ));
    acf_register_block_type(array(
      'name'              => 'projekty',
      'title'             => __('Projekty - slider'),
      'render_template'   => 'blocks/projects/projects.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#122b4f',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'projekty' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-projects',  get_template_directory_uri() . '/blocks/projects/projects.css' );
          wp_enqueue_style( 'ra_svipeer_css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' );
          wp_enqueue_script('ra-swiper_js', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',  array(), '20130456', true );
          wp_enqueue_script('go-projects-init', get_template_directory_uri() . '/blocks/projects/projects.js', array( 'jquery' ),'4', true );

      },
    ));

    
        
}
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}

add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
function my_acf_json_save_point( $path ) {
    // Update path
    $path = get_template_directory() . '/blocks/acf-json';
    // Return path
    return $path;
}


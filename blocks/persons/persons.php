<?php
$persons = new WP_Query( array(
        'post_type' => 'mw_person',
        'posts_per_page' => 8,
        'order' => 'DESC',
        // 'year'                   => '2022',
));
$title = get_field('tytul_sekcji');
$des = get_field('opis');
$link = get_field('link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;

$id = 'local-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$className = 'last-persons';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
?>
<div id="<?php echo esc_attr($id); ?>" class=" <?php echo esc_attr($className); ?>" >
    <div class="container">
    <div class="last-persons__wrap">
        <?php echo  $title ? '<h3>' . $title . '</h3>' : false; ?>
        <?php echo  $des ? ' <div class="desc">' . $des . '</div>' : false; ?>
        <div class="desc-wrap">
        <?php    
            $terms = get_terms('person_group');
            if ( !empty( $terms ) && !is_wp_error( $terms ) ){
                echo "<ul>";
                foreach ( $terms as $term ) {
                echo '<li> <a href=" ' . home_url().'/instruktorzy/#' . str_replace(' ', '-', $term->name) . '"> ' . $term->name . ' </a></li>';
                }
                echo "</ul>";
            } ?>
        <?php if($link){ ?>
            <a class="btn-revers " href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php } ?>
        </div>
        <div class="swiper js-persons">
            <div class="swiper-wrapper">
                    <?php while ( $persons->have_posts() ) : $persons->the_post(); ?>
                    <div class="swiper-slide">
                    <?php   get_template_part( 'templates-parts/content/content', 'mw_person' );  ?>
                    </div>
                    <?php endwhile; wp_reset_query();?>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination--persons"></div>
        </div>
    </div>
</div>
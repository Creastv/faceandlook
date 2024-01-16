<?php
$project = new WP_Query( array(
        'post_type' => 'mw_project',
        'posts_per_page' => 8,
        'order' => 'DESC',
        'orderby' => 'date',
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

$id = 'last-projects-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$className = 'last-projects';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
?>
<div id="<?php echo esc_attr($id); ?>" class=" <?php echo esc_attr($className); ?>" >
    <!-- <div class="container-narrow"> -->
    <div class="container">
        <?php echo  $title ? '<h2 class="section-tite">' . $title . '</h2>' : false; ?>
            <div class="desc-wrap">
            <?php echo  $des ? ' <div class="desc">' . $des . '</div>' : false; ?>
            <?php if($link){ ?>
                <a class="btn-revers " href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php } ?>
            </div>
    </div>
    <div class="last-projects__wrap">
   
        <div class="swiper js-projects">
            <div class="swiper-wrapper">
                    <?php while ( $project->have_posts() ) : $project->the_post(); ?>
                    <div class="swiper-slide">
                    <?php   get_template_part( 'templates-parts/content/content', 'post' );  ?>
                    </div>
                    <?php endwhile; wp_reset_query();?>
                </div>
            </div>
            
        </div>
</div>
<div class="container scrol-wrap">
    <div class="swiper-scrollbar"></div>
</div>
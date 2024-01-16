<?php
$obecny = get_the_ID();

$persons = new WP_Query( array(
        'post_type' => 'mw_person',
        'posts_per_page' => 8,
        'order' => 'DESC',
        'orderby'        => 'rand',
        // 'category_name' => $category_name,
        'post__not_in' => array($obecny)
));
$groupFields = get_field('rekomendowane_person', 'options');
if($groupFields){
$title = $groupFields['tytu'];
$desc = $groupFields['krotki_opis'];
}
?>
<div class="recommended-posts">
    <div class="container">
    <div class="recommended-posts__wrap">
    <?php if($groupFields) : ?>
        <?php if($title) : ?>
                <h3><?php echo $title; ?></h3>
            <?php endif; ?>
            <?php if($desc ) : ?>
                <div class="desc">
                <p><?php echo $desc; ?></p>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <div class="swiper recomended">
            <div class="swiper-wrapper">
                    <?php while ( $persons->have_posts() ) : $persons->the_post(); ?>
                    <div class="swiper-slide">
                    <?php   get_template_part( 'templates-parts/content/content', 'mw_person' );  ?>
                    </div>
                    <?php endwhile;?>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
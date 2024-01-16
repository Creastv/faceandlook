<?php
$obecny = get_the_ID();

$project = new WP_Query( array(
        'post_type' => 'mw_class',
        'posts_per_page' => 8,
        'order' => 'DESC',
        // 'category_name' => $category_name,
        'orderby'        => 'rand',
        'post__not_in' => array($obecny)
));
$groupFields = get_field('rekomendowane_class', 'options');
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
                <?php while ( $project->have_posts() ) : $project->the_post(); ?>
                <div class="swiper-slide">
                <?php   get_template_part( 'templates-parts/content/content', 'mw_class' );  ?>
                </div>
                <?php endwhile; wp_reset_query();?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    </div>
</div>
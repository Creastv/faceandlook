<?php
$obecny = get_the_ID();

$project = new WP_Query( array(
        'post_type' => 'mw_room',
        'posts_per_page' => 3,
        'order' => 'DESC',
        // 'category_name' => $category_name,
        'orderby'        => 'rand',
        'post__not_in' => array($obecny)
));

$groupFields = get_field('rekomendowane', 'options');
if($groupFields) { 
$title = $groupFields['tytu'];
$desc = $groupFields['krotki_opis'];
}
?>
<div class="recommended-posts ">
    <div class="container">
    <div class="recommended-posts__wrap">
       <?php if($groupFields) : ?>
            <?php if($title) : ?>
                <h3><?php echo $title; ?></h3>
            <?php endif; ?>
            <?php if($desc) : ?>
                <div class="desc">
                <p><?php echo $desc; ?></p>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <div class="posts-wraper posts-wraper--suggested posts-wraper--room">
                <?php while ( $project->have_posts() ) : $project->the_post(); ?>
                <?php   get_template_part( 'templates-parts/content/content', 'mw_room' );  ?>
                <?php endwhile; wp_reset_query();?>
            </div>
        </div>
    </div>
</div>
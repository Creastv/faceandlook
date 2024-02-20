<?php
$pozycja = get_field('pozycja');
$class = 'lewo';
if ($pozycja == 'Prawo') {
    $class = 'prawo';
}
$po = array(
    'post_type' => 'post',
    'posts_per_page' => 1,
    'ignore_sticky_posts' => 1,
);
$query_posts_one = new WP_Query($po);
$po2 = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'offset' => 1,
    'ignore_sticky_posts' => 1,
);
$query_posts_two = new WP_Query($po2);
?>
<div class="posts-grid">
    <div class="posts-grid__wrap  <?php echo $class; ?>">
        <div class="col">
            <?php while ($query_posts_one->have_posts()) {
                $query_posts_one->the_post();
                $term_list = wp_get_post_terms(get_the_id(), 'category', array("fields" => "names"));
            ?>
                <div class="post">
                    <div class="post__img">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('post-futured'); ?>
                        </a>
                    </div>
                    <div class="post__content">

                        <div class="entry-term">
                            <span> <?php echo $term_list[0]; ?></span>
                        </div>
                        <h2>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            <?php }
            wp_reset_postdata(); ?>
        </div>
        <div class="col">
            <?php while ($query_posts_two->have_posts()) {
                $query_posts_two->the_post();
                $term_list = wp_get_post_terms(get_the_id(), 'category', array("fields" => "names"));
            ?>
                <div class="post-vertical">
                    <div class="post__img">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('post-futured-grid'); ?>
                        </a>
                    </div>
                    <div class="post__content">
                        <h2>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <div class="entry-term">
                            <span> <?php echo $term_list[0]; ?></span>
                        </div>
                    </div>
                </div>
            <?php }
            wp_reset_postdata(); ?>
        </div>
    </div>
</div>
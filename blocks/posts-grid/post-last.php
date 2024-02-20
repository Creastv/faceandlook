<?php
$po = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'ignore_sticky_posts' => 1,
);
$query_posts_one = new WP_Query($po);

?>
<div class="posts-grid">
    <div class="posts-grid__wrap posts-grid__wrap--style-one">

        <?php while ($query_posts_one->have_posts()) {
            $query_posts_one->the_post();
            $term_list = wp_get_post_terms(get_the_id(), 'category', array("fields" => "names"));
        ?>
            <div class="col">
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
            </div>
        <?php }
        wp_reset_postdata(); ?>
    </div>
</div>
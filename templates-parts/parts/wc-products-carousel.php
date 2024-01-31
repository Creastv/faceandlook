<?php
// $viewed_products = isset($_SESSION['viewed_products']) ? $_SESSION['viewed_products'] : array();
$args = array(
    'post_type'      => 'product',
    'posts_per_page' => 4,
    // 'post__in'       => $viewed_products,
);

$custom_query = new WP_Query($args);
?>
<?php if ($custom_query->have_posts()) : ?>
    <div class="wc-products-wraper">
        <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
            <?php get_template_part('woocommerce/content-product'); ?>
        <?php endwhile;
        wp_reset_postdata(); ?>
    </div>
<?php endif;

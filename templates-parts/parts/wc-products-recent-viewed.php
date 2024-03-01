<?php
// if (!session_id()) {
//     session_start();
// }

$viewed_products = isset($_SESSION['viewed_products']) ? $_SESSION['viewed_products'] : array();

if (!empty($viewed_products)) {
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 5,
        'post__in'       => $viewed_products,
    );
    $recently_viewed_query = new WP_Query($args);


?>
<?php if ($recently_viewed_query->have_posts()) : ?>
<div class="container wc-product">
    <div class="wc-product-block">
        <div class="text-center ">
            <p class="h2">Ostatnio oglądane produkty</h3>
            </p>
            <div class="swiper new-slider recent-viewed-slider">
                <div class="swiper-wrapper">
                    <?php while ($recently_viewed_query->have_posts()) : $recently_viewed_query->the_post(); ?>
                    <div class="swiper-slide">
                        <?php get_template_part('woocommerce/content-product'); ?>
                    </div>
                    <?php endwhile;
                            wp_reset_postdata(); ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php }
<?php
$products_on_sale = wc_get_product_ids_on_sale();
$promo = array(
    'post_type'      => 'product',
    'posts_per_page' => 10,
    'post__in'       => $products_on_sale,
);

$promo_query = new WP_Query($promo);

$new = array(
    'post_type'      => 'product',
    'posts_per_page' => 10,
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$new_query = new WP_Query($new);
$bestsalle = array(
    'post_type'      => 'product',
    'posts_per_page' => 10,
    'meta_key'       => 'total_sales', // Sortuj wg liczby sprzedanych egzemplarzy
    'orderby'        => 'meta_value_num',
);

$bestsalle_query = new WP_Query($bestsalle);
?>

<div class="tabs">
    <div class="tab">
        <a href="#" class="tablinks h2  active" onclick="tabs(event, 'nowosci')">Nowości</a>
        <a href="#" class="tablinks h2" onclick="tabs(event, 'promocje')">Promocje</a>
        <a href="#" class="tablinks h2" onclick="tabs(event, 'bestseller')">Bestseller</a>
    </div>
    <div id="promocje" class="tabcontent">
        <?php if ($promo_query->have_posts()) : ?>
        <div class="swiper new-slider tab-swiper">
            <div class="swiper-wrapper">
                <?php while ($promo_query->have_posts()) : $promo_query->the_post(); ?>
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
        <?php endif; ?>
    </div>

    <div id="nowosci" class="tabcontent active">
        <?php if ($new_query->have_posts()) : ?>
        <div class="swiper new-slider tab-swiper">
            <div class="swiper-wrapper">
                <?php while ($new_query->have_posts()) : $new_query->the_post(); ?>
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
        <?php endif; ?>
    </div>

    <div id="bestseller" class="tabcontent">
        <?php if ($bestsalle_query->have_posts()) : ?>
        <div class="swiper new-slider tab-swiper">
            <div class="swiper-wrapper">
                <?php while ($bestsalle_query->have_posts()) : $bestsalle_query->the_post(); ?>
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
        <?php endif; ?>
    </div>
</div>
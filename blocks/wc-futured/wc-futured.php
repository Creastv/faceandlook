<?php
$post_per_page = get_field('ilosc_wyswietlanych_produktow');

$args = array(
    'post_type' => 'product',
    'posts_per_page' => $post_per_page,
    'tax_query' => array(
        array(
            'taxonomy' => 'product_visibility',
            'field'    => 'name',
            'terms'    => 'featured',
        ),
    ),
);

$futured = new WP_Query($args);

if ($futured->have_posts()) :
    echo '<div class="wc-recent-viewed">';
    echo '<div class="wc-products-wraper">';
    while ($futured->have_posts()) : $futured->the_post();
        global $product;
        get_template_part('woocommerce/content-product');
    // Dodatkowe informacje o produkcie można dodać w podobny sposób
    endwhile;
    echo '</div>';
    wp_reset_postdata();
    echo '</div>';
endif;

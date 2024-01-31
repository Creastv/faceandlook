<?php
// if (!session_id()) {
//     session_start();
// }

$viewed_products = isset($_SESSION['viewed_products']) ? $_SESSION['viewed_products'] : array();

if (!empty($viewed_products)) {
    echo '<div class="wc-recent-viewed">';
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 5,
        'post__in'       => $viewed_products,
    );

    $recently_viewed_query = new WP_Query($args);

    if ($recently_viewed_query->have_posts()) :

        echo '<div class="text-center"><h3>Ostatnio oglądane produkty</h3></div>';
        echo '<div class="wc-products-wraper">';

        while ($recently_viewed_query->have_posts()) : $recently_viewed_query->the_post();
            global $product;
            get_template_part('woocommerce/content-product');
        // Dodatkowe informacje o produkcie można dodać w podobny sposób
        endwhile;
        echo '</div>';
        wp_reset_postdata();
    endif;
    echo '</div>';
}

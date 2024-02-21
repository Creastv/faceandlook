<?php
$post_per_page = get_field('ilosc_wyswietlanych_produktow');
$type = get_field('wyswietlaj_po');

if ($type == 1) {
    $cat = get_field('kategoria');
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => $post_per_page,
        'ignore_sticky_posts' => 1,
        'cat' => $cat
    );
}
if ($type == 2) {
    $products_on_sale = wc_get_product_ids_on_sale();
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => $post_per_page,
        'post__in'       => $products_on_sale,
    );
}
if ($type == 3) {
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => $post_per_page,
    );
}
if ($type == 4) {
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => $post_per_page,
        'meta_key'       => 'total_sales', // Sortuj wg liczby sprzedanych egzemplarzy
        'orderby'        => 'meta_value_num',
    );
}

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

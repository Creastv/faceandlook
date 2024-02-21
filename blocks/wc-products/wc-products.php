<?php
$post_per_page = get_field('ilosc_wyswietlanych_produktow');
$type = get_field('wyswietlaj_po');

if ($type == 1) {
    $cat = get_field('kategoria');
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => $post_per_page,
        'tax_query' => array(array(
            'taxonomy'         => 'product_cat',
            'field'            => 'term_id', // Or 'term_id' or 'name'
            'terms'            => $cat, // A slug term
        )),
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
if ($type == 5) {
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
}

if ($type == 6) {
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
}
if ($type != 6) :

    $products = new WP_Query($args);

    if ($products->have_posts()) :
        echo '<div class="wc-recent-viewed">';
        echo '<div class="wc-products-wraper">';
        while ($products->have_posts()) : $products->the_post();
            global $product;
            get_template_part('woocommerce/content-product');
        // Dodatkowe informacje o produkcie można dodać w podobny sposób
        endwhile;
        echo '</div>';
        wp_reset_postdata();
        echo '</div>';
    endif;


else :

    $selectedProducts = get_field('wybrane_produkty');
    if ($selectedProducts) :
        echo '<div class="wc-recent-viewed">';
        echo '<div class="wc-products-wraper">';
        foreach ($selectedProducts as $post) :
            setup_postdata($post);
            get_template_part('woocommerce/content-product');
        // Dodatkowe informacje o produkcie można dodać w podobny sposób
        endforeach;
        echo '</div>';
        echo '</div>';
        wp_reset_postdata();
    endif;

endif;
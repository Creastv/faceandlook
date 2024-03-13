<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
    return;
}
$term_list = wp_get_post_terms($post->ID, 'producent', array("fields" => "names"));
?>
<div <?php wc_product_class('card-product', $product); ?>>
    <div class="card-product-top">
        <?php if ($product->is_on_sale() && is_object($product) && $product->is_type('simple') && $product->is_featured()) {
            echo '<div class="labels">';
        } ?>
        <?php if ($product->is_on_sale()) {
            // Pobieramy etykietę promocji
            $sale_label = get_post_meta(get_the_ID(), '_sale_price_dates_to', true) ? __('Sale!', 'woocommerce') : __('Sale!', 'woocommerce');
            // Wyświetlamy etykietę promocji
            echo '<span class="label-prod label-prod--sale">' . esc_html($sale_label) . '</span>';
        } ?>
        <?php if (is_object($product) && $product->is_type('simple') && $product->is_featured()) {
            // Produkt jest wyróżniony
            echo '<span class="label-prod label-prod--futured">Wyróżniony produkt</span>';
        } ?>
        <?php if ($product->is_on_sale() && is_object($product) && $product->is_type('simple') && $product->is_featured()) {
            echo '</div>';
        } ?>
        <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail($post->ID)) : ?>
            <?php the_post_thumbnail('', array('alt' => get_the_title())); ?>
            <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/thumbnail.png" alt="<?php the_title(); ?> ">
            <?php endif; ?>
        </a>
        <div class="card-product-top-buttons">
            <?php do_action('woocommerce_after_shop_loop_item'); ?>
        </div>
    </div>
    <h2 class="entry-title ">
        <a href="<?php the_permalink(); ?>">
            <?php echo mb_strimwidth(get_the_title(), 0, 70, '...'); ?>
        </a>
    </h2>
    <?php if (!empty($term_list)) : ?>
    <div class="entry-term">
        <span> <?php echo $term_list[0]; ?></span>
    </div>
    <?php endif; ?>

    <div class="entry-price">
        <div class="price"><?php echo $product->get_price_html(); ?></div>
        <?php
        echo apply_filters(
            'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
            sprintf(
                '<a href="%s" data-quantity="%s" class="%s btn-revers" %s>%s</a>',
                esc_url($product->add_to_cart_url()),
                esc_attr(isset($args['quantity']) ? $args['quantity'] : 1),
                esc_attr(isset($args['class']) ? $args['class'] : ''),
                isset($args['attributes']) ? wc_implode_html_attributes($args['attributes']) : '',
                // esc_html( $product->add_to_cart_text() )
                '<svg xmlns="http://www.w3.org/2000/svg" width="9.628" height="10.089" viewBox="0 0 9.628 10.089">
                <path id="Trazado_39" data-name="Trazado 39" d="M2561.179-490.223h-1.513a.632.632,0,0,0-.621.524l-.242,1.412a.253.253,0,0,1-.249.21h-5.3a1.023,1.023,0,0,0-1.023,1.022,1.017,1.017,0,0,0,.03.246l.661,2.636a1.494,1.494,0,0,0,1.45,1.135h3.558a1.5,1.5,0,0,0,1.477-1.268l.759-4.446a.253.253,0,0,1,.248-.21h.768a.633.633,0,0,0,.675-.586.632.632,0,0,0-.586-.675.59.59,0,0,0-.089,0Zm-7.943,9.078a1.009,1.009,0,0,0,1.009,1.009,1.009,1.009,0,0,0,1.009-1.009,1.009,1.009,0,0,0-1.009-1.009h0A1.009,1.009,0,0,0,2553.235-481.145Zm4.035,0a1.009,1.009,0,0,0,1.009,1.009,1.008,1.008,0,0,0,1.009-1.009,1.008,1.008,0,0,0-1.009-1.009h0A1.009,1.009,0,0,0,2557.271-481.145Z" transform="translate(-2552.227 490.225)" fill="#c2995e" />
            </svg>
            Kup',
            ),
            $product,
            $args
        );

        ?>
    </div>
</div>
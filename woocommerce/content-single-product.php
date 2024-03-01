<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

$faq = get_field('wylacz_faq', $product->id);
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class('product-top', $product); ?>>
    <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
    <?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action('woocommerce_before_single_product_summary');
	?>

    <div class="summary entry-summary">

        <div class="entry-summary__wrap">
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
            <?php

			/**
			 * Hook: woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			do_action('woocommerce_single_product_summary');

			?>


        </div>
        <?php get_template_part('templates-parts/parts/wc-product-info'); ?>

    </div>

    <?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action('woocommerce_after_single_product_summary');
	?>
</div>
<?php get_template_part('templates-parts/parts/wc-product', 'banner'); ?>
<div class="content">
    <?php the_content(); ?>
</div>

<br>
<?php get_template_part('templates-parts/parts/wc-product', 'reviews'); ?>
<?php if (!$faq || $faq == null) : ?>
<?php get_template_part('templates-parts/parts/wc-product', 'faq'); ?>
<?php endif; ?>
<?php get_template_part('templates-parts/parts/wc-products', 'carousel'); ?>


<?php do_action('woocommerce_after_single_product'); ?>

<script>
jQuery(function($) {

    mobile = $(window).width();
    if (mobile <= 768) {
        jQuery(".product_title.entry-title").insertBefore(".rank-math-breadcrumb");
    }

});
</script>
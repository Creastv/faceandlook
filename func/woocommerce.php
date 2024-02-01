<?php
global $product;
// Support Woocommerce
function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');


// Remove sidebar woocommerce
function remove_woocommerce_sidebar()
{
    if (is_product()) {
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
    }
}

add_action('wp', 'remove_woocommerce_sidebar');

// Remove breadcrumbs ...
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);

remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);


// Enable Gutenberg editor for WooCommerce
function restored_activate_gutenberg_product($can_edit, $post_type)
{
    if ($post_type == 'product') {
        $can_edit = true;
    }
    return $can_edit;
}
add_filter('use_block_editor_for_post_type', 'restored_activate_gutenberg_product', 10, 2);

// Enable taxonomy fields for woocommerce with gutenberg on
function restored_enable_taxonomy_rest($args)
{
    $args['show_in_rest'] = true;
    return $args;
}
add_filter('woocommerce_taxonomy_args_product_cat', 'restored_enable_taxonomy_rest');
add_filter('woocommerce_taxonomy_args_product_tag', 'restored_enable_taxonomy_rest');
// Dodaj ten kod do pliku functions.php swojego motywu lub do pliku custom plugin'a.

remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10);


/**
 * Remove tabs from woocommerce
 */
add_filter('woocommerce_product_tabs', 'woo_remove_product_tabs', 98);

function woo_remove_product_tabs($tabs)
{
    unset($tabs['description']);          // Remove the description tab
    unset($tabs['reviews']);             // Remove the reviews tab
    unset($tabs['additional_information']);      // Remove the additional information tab
    return $tabs;
}

// Dodaj poniższy kod do pliku functions.php Twojego motywu:
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
// Minimum CSS to remove +/- default buttons on input field type number

add_action('wp_footer', 'custom_quantity_fields_script');
function custom_quantity_fields_script()
{
?>
<script type='text/javascript'>
jQuery(function($) {
    if (!String.prototype.getDecimals) {
        String.prototype.getDecimals = function() {
            var num = this,
                match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
            if (!match) {
                return 0;
            }
            return Math.max(0, (match[1] ? match[1].length : 0) - (match[2] ? +match[2] : 0));
        }
    }
    // Quantity "plus" and "minus" buttons
    $(document.body).on('click', '.plus, .minus', function() {
        var $qty = $(this).closest('.quantity').find('.qty'),
            currentVal = parseFloat($qty.val()),
            max = parseFloat($qty.attr('max')),
            min = parseFloat($qty.attr('min')),
            step = $qty.attr('step');

        // Format values
        if (!currentVal || currentVal === '' || currentVal === 'NaN') currentVal = 0;
        if (max === '' || max === 'NaN') max = '';
        if (min === '' || min === 'NaN') min = 0;
        if (step === 'any' || step === '' || step === undefined || parseFloat(step) === 'NaN') step = 1;

        // Change the value
        if ($(this).is('.plus')) {
            if (max && (currentVal >= max)) {
                $qty.val(max);
            } else {
                $qty.val((currentVal + parseFloat(step)).toFixed(step.getDecimals()));
            }
        } else {
            if (min && (currentVal <= min)) {
                $qty.val(min);
            } else if (currentVal > 0) {
                $qty.val((currentVal - parseFloat(step)).toFixed(step.getDecimals()));
            }
        }

        // Trigger change event
        $qty.trigger('change');
    });
});
</script>
<?php
}

// gallery
add_theme_support('wc-product-gallery-zoom');
add_theme_support('wc-product-gallery-lightbox');
add_theme_support('wc-product-gallery-slider');

// wrap gallery
add_action('woocommerce_before_single_product_summary', 'my_unique_named_function', 19);

function my_unique_named_function()
{
    echo '<div class="wrap-product-gallery">';
}

add_action('woocommerce_before_single_product_summary', 'my_unique_named_functionn', 21);

function my_unique_named_functionn()
{
    echo '</div>';
}

function dodaj_taxonomie_producenta()
{
    $args = array(
        'hierarchical' => false,
        'labels' => array(
            'name' => 'Producenci',
            'singular_name' => 'Producent',
        ),
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'producent'),
    );

    register_taxonomy('producent', 'product', $args);
}

add_action('init', 'dodaj_taxonomie_producenta');


// Dodaj ten kod do pliku functions.php swojego motywu lub do pliku custom plugin'a.

// function dostosuj_liczbe_produktow_na_stronie($query)
// {
//     if (is_shop() || is_archive()) {
//         $query->set('posts_per_page', 4); // Zmiana liczby produktów na stronie
//     }
// }

// add_action('pre_get_posts', 'dostosuj_liczbe_produktow_na_stronie');

// Dodaj ten kod do pliku functions.php swojego motywu lub do pliku custom plugin'a.

function dodaj_nowa_sekcje_przed_krokiem_opisem()
{
    global $post;
    $term_list = wp_get_post_terms($post->ID, 'producent', array("fields" => "names"));
    echo '<p> Producent: <b>' . $term_list[0] . '</b></p>';
}

add_action('woocommerce_single_product_summary', 'dodaj_nowa_sekcje_przed_krokiem_opisem', 5);
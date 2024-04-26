<?php
add_role('klubowiczki', __('Klubowiczki'), array());
add_action('init', 'blockusers_init');
function blockusers_init()
{
    if (is_admin() && !current_user_can('administrator') && !(defined('DOING_AJAX') && DOING_AJAX)) {
        // wp_redirect(home_url());
        exit;
    }
}

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar()
{
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}


// Change user role based on points
add_action('wp_head', 'userChangeRole');

function userChangeRole()
{
    $user = new WP_User(get_current_user_id());
    $u = new WP_User($user->ID);
    $uR = $u->roles;
    $points = getUserPoints();
    if (in_array('klubowiczki', $uR, true) || in_array('customer', $uR, true)) {
        if ($points > 100) {
            $u->set_role('klubowiczki');
        } else {
            $u->set_role('customer');
        }
    }
}
// User role
function userRole()
{
    $user = new WP_User(get_current_user_id());
    $u = new WP_User($user->ID);
    $points = getUserPoints();
    return $u->roles[0];
}
function userRoleName()
{
    $user = new WP_User(get_current_user_id());
    $u = new WP_User($user->ID);
    $u = $u->roles;
    if (in_array('klubowiczki', $u, true)) {
        return 'klubowiczki';
    } elseif (in_array('customer', $u, true)) {
        return 'customer';
    }
}

// function getUserPoints()
function getUserPoints()
{
    global $wpdb;
    $users = $wpdb->get_results("SELECT id, earn_total_point, points, user_email FROM fandl_wlr_users ");
    $user = wp_get_current_user();
    $user_email = $user->user_email;
    foreach ($users as $user) {
        if (strtolower($user->user_email) === strtolower($user_email)) {
            return $user->points;
        }
    }
};

// // Applying conditionally a discount for a specific user role
add_action('woocommerce_cart_calculate_fees', 'discount_based_on_user_role', 20, 1);
function discount_based_on_user_role($cart)
{

    $role = userRoleName();
    if (is_admin() && !defined('DOING_AJAX')) return; // Exit
    if ($role == 'klubowiczki') {
        $percentage = 10;
        $discount = $cart->get_subtotal() * $percentage / 100; // Calculation
        // Applying discount
        $cart->add_fee(sprintf(__("Rabat dla klubowicza (%s)", "woocommerce"), $percentage . '%' . $price . ''), -$discount, true);
        return;
    }
    return;
}

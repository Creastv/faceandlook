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
function userRole()
{
    $user_id = get_the_author_meta('ID'); //assume we are in The Loop
    $user_obj = get_userdata($user_id);
    $points = getUserPoints();
    if (!empty($user_obj->roles)) {
        foreach ($user_obj->roles as $role) {
            echo '<br>';
            echo $role;
            echo '<br>';
            echo $points;
        }
    }
}
add_action('wp_head', 'userChangeRole');

function userChangeRole()
{
    $user_id = get_the_author_meta('ID'); //assume we are in The Loop
    $user_obj = get_userdata($user_id);
    $points = getUserPoints();
    if (!empty($user_obj->roles)) {

        if ($points > 1000) {
            $user_obj->set_role('klubowiczki');
        } else {
            $user_obj->set_role('customer');
        }
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

<?php

/**
 * Template Name: Custom Tab
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!-- <div class="dev-element">
    <h4>Już wkrótce</h4>
</div> -->
<?php


// $users = $wpdb->get_results("SELECT id, earn_total_point, points, user_email FROM fandl_wlr_users ");
// $user = wp_get_current_user();
// $user_email = $user->user_email;
// echo $user_email;
// echo $users[0]->user_email;
// // get total points

// function getUserPoints($email, $users)
// {
//     foreach ($users as $user) {
//         if (strtolower($user->user_email) === strtolower($email)) {
//             return $user->points;
//         }
//     }
//     return null;
// };

?>



<?php if (getUserPoints() > 1000) : ?>
    <h1>Gratulacje! Jesteś w klubie!</h1>
    <h1>Twoje punkty: <?php echo getUserPoints(); ?></h1>
<?php else : ?>
    <h1>Niestety, nie masz wystarczająco punktów, aby dołączyć do klubu</h1>
    <h1>Twoje punkty: <?php echo getUserPoints(); ?></h1>

<?php endif; ?>

<?php
userRole();
// userChangeRole()
?>
<?php

/**
 * Template Name: Custom Tab
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<?php if (getUserPoints() > 100) : ?>
    <h1>Gratulacje! Jesteś w klubie!</h1>
    <h1>Twoje punkty: <?php echo getUserPoints(); ?></h1>
<?php else : ?>
    <h1>Niestety, nie masz wystarczająco punktów, aby dołączyć do klubu</h1>
    <h1>Twoje punkty: <?php echo getUserPoints(); ?></h1>

<?php endif; ?>

<div class="dev-element">
    <h4>Już wkrótce odkryjemy dodatkowe opcje dla Ciebie</h4>
</div>
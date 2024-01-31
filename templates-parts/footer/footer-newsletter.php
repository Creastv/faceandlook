<?php
$displayNewsletter = get_field('newsletter');
$opis = get_field('opis', 'options');

?>
<?php if ($displayNewsletter === NULL || $displayNewsletter == true) : ?>
    <div class="f-newsletter">
        <?php echo do_shortcode('[contact-form-7 id="f7391fd" title="Newsletter"]'); ?>
    </div>
<?php endif; ?>
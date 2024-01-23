<?php
$displayNewsletter = get_field('newsletter');
$opis = get_field('opis', 'options');

?>
<?php if($displayNewsletter === NULL || $displayNewsletter == true) : ?>
<div class="f-newsletter">
    <div class="container-narrow ">

    </div>
</div>
<?php endif; ?>
<?php
$displayNewsletter = get_field('newsletter');
$opis = get_field('opis', 'options');

?>
<?php if($displayNewsletter === NULL || $displayNewsletter == true) : ?>
<div class="f-newsletter">
    <div class="container-narrow ">
        <div class="row">
        <?php if($opis) : ?>
        <div class="col">
            <?php echo $opis; ?>
        </div>
        <?php endif; ?>
        <div class="col">
        <iframe title="newsletter" id="fm-fc-f-jjcrhr2lpa" data-height="130" src="https://forms.freshmail.io/f/4szblvg8no/jjcrhr2lpa/index.html"   style="min-height: 170px"></iframe>
        </div>
        </div>
    </div>
</div>
<?php endif; ?>
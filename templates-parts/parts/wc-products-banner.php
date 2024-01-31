<?php
$banner = get_field('baner_wyswietlajacy_sie_na_podstronie_listowania', 'options');
?>
<?php if ($banner) : ?>
<div class="container">
    <div class="row">
        <div class="wc-banner">
            <a href="#">
                <?php if ($banner['banner']) {
                echo wp_get_attachment_image($banner['banner'], 'full');
            } ?>
            </a>
        </div>
    </div>
</div>

<?php endif ?>
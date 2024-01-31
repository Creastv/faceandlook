<?php
$banner = get_field('baner_wyswietlajacy_sie_na_podstronie_produktu', 'options');
?>
<?php if ($banner) : ?>
    <div class="wc-banner">
        <a href="#">
            <?php if ($banner['baner']) {
                echo wp_get_attachment_image($banner['baner'], 'full');
            } ?>
        </a>
    </div>
<?php endif ?>
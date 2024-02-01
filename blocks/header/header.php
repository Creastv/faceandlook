<?php
$title = get_field('tytul');
$desc = get_field('opis_pod_tytulem');
$img = get_field('zdjecie_wyrozniajace_kategorii');
?>

<div class="custome-header">
    <div class="custome-header__wrap">
        <div class="desc">
            <h1><?php echo $title; ?></h1>
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
            <?php echo $desc ?  $desc : false; ?>
        </div>
        <div class="img" style="background-image: url('<?php echo $img; ?>')"></div>
    </div>
</div>
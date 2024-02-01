<?php
$term = get_queried_object();
$display = get_field('wyswietlaj_custome_header', $term);
$image = get_field('zdjecie_wyrozniajace_kategorii', $term);
$desc = get_field('opis_pod_tytulem', $term);
$longDesc = get_field('dlugi_opis_pod_listowaniem_produktow', $term); ?>

<!-- <div class="post-cat-header">
    <div class="post-cat-header__wrap">
        <div class="desc">
            <h1><?php the_title(); ?></h1>
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
            <?php echo $desc ? '<p>' . $desc . '</p>' : false; ?>
        </div>
        <div class="img" style="background-image: url('<?php echo $image; ?>')"></div>
    </div>
</div> -->

<div class="post-cat-header">
    <div class="post-cat-header__wrap">
        <div class="col">
            <div class="banner">
                <p>banner</p>
            </div>
            <div class="post">
                <p>post</p>
            </div>
        </div>
        <div class="col">
            <div class="post">
                <p>post</p>
            </div>
            <div class="banner">
                <p>banner</p>
            </div>
        </div>
    </div>
</div>
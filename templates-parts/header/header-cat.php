<?php
$term = get_queried_object();
$display = get_field('wyswietlaj_custome_header', $term);
$image = get_field('zdjecie_wyrozniajace_kategorii', $term);
$desc = get_field('opis_pod_tytulem', $term);
$longDesc = get_field('dlugi_opis_pod_listowaniem_produktow', $term);

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 2,
    'cat' => $term->term_id
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    echo '<div class="post-cat-header">';
    echo '<div class="post-cat-header__wrap">';
    $counter = 0;
    while ($query->have_posts()) {
        $query->the_post();
        if ($counter % 2 == 0) {
            echo '<div class="col">';
            echo '<div class="post">';
            echo '<div class="post__content">';
            echo '<h2>';
            echo '<a href="' . get_the_permalink() . '">';
            echo the_title();
            echo '</a>';
            echo '</h2>';
            echo '<p>';
            echo the_excerpt();
            echo '</p>';
            echo '</div>';
            echo '<div class="post__img">';
            the_post_thumbnail('post-futured');
            echo '</div>';
            echo '</div>';
            echo '<div class="banner">banner</div>';
            echo '</div>';
        } else {
            echo '<div class="col">';
            echo '<div class="banner">banner</div>';
            echo '<div class="post">';
            echo '<div class="post__content">';
            echo '<h2>';
            echo '<a href="' . get_the_permalink() . '">';
            echo the_title();
            echo '</a>';
            echo '</h2>';
            echo '<p>';
            echo the_excerpt();
            echo '</p>';
            echo '</div>';
            echo '<div class="post__img">';
            the_post_thumbnail('post-futured');
            echo '</div>';
            echo '</div>';

            echo '</div>';
        }
        $counter++;
    }
    wp_reset_postdata();
    echo '</div>';
    echo '</div>';
}

<?php
$term = get_queried_object();
$display = get_field('wyswietlaj_custome_header', $term);
$baner = get_field('banner_1', $term);
$baner2 = get_field('banner_2', $term);
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
        if ($baner['link']) :
            $baner_url = $baner['link']['url'];
            $baner_title = $baner['link']['title'];
            $baner_target = $baner['link']['target'] ? $baner['link']['target'] : '_self';
        endif;
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
            echo '<div class="banner">';

            echo '<div class="banner__content">';
            echo '<p class="h4">';
            echo $baner['tytul'];
            echo '</p>';
            echo '<p>';
            echo $baner['opis'];
            echo '</p>';
            echo '<a class="btn" href="' . esc_url($baner_url) . '" target=" ' . esc_attr($baner_target) . ' "> ' . esc_html($baner_title) . '</a>';
            echo '</div>';
            echo '<div class="banner__img">';
            echo wp_get_attachment_image($baner['zdjecie'], 'post-futured');
            echo '</div>';
            echo '</div>';
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

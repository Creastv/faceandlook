<?php
$term = get_queried_object();
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'cat' => $term->term_id
);
$query_cat = new WP_Query($args);

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


<?php if ($query_cat->have_posts()) { ?>
    <div class="header-cat-wrap">
        <div class="header-cat-slider">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php while ($query_cat->have_posts()) {
                        $query_cat->the_post();
                    ?>
                        <div class="swiper-slide">
                            <div class="post">
                                <div class="post__img">
                                    <?php the_post_thumbnail(''); ?>
                                </div>
                                <div class="post__content">
                                    <h2>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink(); ?>" class="btn-revers">Czytaj wiecej</a>
                                </div>
                            </div>
                        </div>
                    <?php  }
                    wp_reset_postdata(); ?>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="swiper-scrollbar"></div>
        </div>

    </div>

<?php } ?>




<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: "auto",
        spaceBetween: 10,

        scrollbar: {
            el: ".swiper-scrollbar",
            hide: true,
        },
        autoplay: {
            delay: 5500,
            disableOnInteraction: false,
        },
        breakpoints: {
            400: {
                // slidesPerView: 2,
                spaceBetween: 20,

            },
            640: {
                // slidesPerView: 2,
                spaceBetween: 20,

            }

        }
    });
</script>
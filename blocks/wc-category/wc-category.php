<?php
$terms = get_field('kategorie_produktow');

if ($terms) : ?>
    <div class="b-wc-cats">
        <div class="swiper  wc-cats">
            <div class="swiper-wrapper">
                <?php foreach ($terms as $term) :
                    $term_name = $term->name;  // Term name
                    $term_slug = $term->slug;  // Term slug
                    $term_id = $term->term_id;

                    $cat_thumb_id = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true);
                    $shop_catalog_img = wp_get_attachment_image_src($cat_thumb_id, 'thumbnail');

                    $term_url = get_term_link($term_id); // Get term URL
                ?>
                    <div class="swiper-slide">
                        <div class="b-wc-cats-item">
                            <a href="<?php echo esc_url($term_url); ?>">
                                <div class="img">
                                    <?php if ($shop_catalog_img) : ?>
                                        <img src="<?php echo $shop_catalog_img[0]; ?>" alt="<?php echo esc_html($term_name); ?>">
                                    <?php endif; ?>
                                </div>
                                <span> <?php echo esc_html($term_name); ?></span>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php

$slides = get_field('slides');

$id = 'home-slider-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}
$className = 'home-slider';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
?>
<div id="<?php echo esc_attr($id); ?>" class=" <?php echo esc_attr($className); ?>">
    <div class="home-slider__wrap">
        <?php if ($slides) : ?>
        <div class="swiper js-home-slider">
            <div class="swiper-wrapper">
                <?php foreach ($slides as $slide) : ?>
                <div class="swiper-slide">
                    <div class="slide">
                        <?php if ($slide['img']) {
                                    echo wp_get_attachment_image(
                                        $slide['img'],
                                        'full',
                                        false,
                                        array('class' => 'slide-img-md')
                                    );
                                } ?>
                        <?php if ($slide['img_mobile']) {
                                    echo wp_get_attachment_image(
                                        $slide['img_mobile'],
                                        'full',
                                        false,
                                        array('class' => 'slide-img-sm')
                                    );
                                } ?>
                        <div class="slide__content">
                            <<?php echo $slide['tag']; ?> class="slider__content_title tag-special"
                                style="color:<?php echo $slide['kolor_czcionki']; ?>;"><?php echo $slide['tytul']; ?>
                            </<?php echo $slide['tag']; ?>>
                            <p style="color:<?php echo $slide['kolor_czcionki']; ?>;"><?php echo $slide['opis']; ?></p>
                            <?php 
                            $link = $slide['link'];
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                            <a class="btn-revers  btn-big" href="<?php echo esc_url( $link_url ); ?>"
                                target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="autoplay-progress">
            <svg viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20"></circle>
            </svg>
            <span></span>
        </div>
        <!-- <div class="swiper-pagination"></div> -->
        <div class="swiper-pagination swiper-pagination--slider"></div>
    </div>
    <?php endif; ?>
</div>
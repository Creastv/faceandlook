<?php
// $title = get_field('tytul_sekcji');
// $des = get_field('opis');
// $link = get_field('link');
// if( $link ): 
//     $link_url = $link['url'];
//     $link_title = $link['title'];
//     $link_target = $link['target'] ? $link['target'] : '_self';
// endif;

$slides = get_field('sllides');

$id = 'home-slider-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$className = 'home-slider';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
?>
<div id="<?php echo esc_attr($id); ?>" class=" <?php echo esc_attr($className); ?>" >
    <div class="home-slider__wrap">
        <?php if($slides) : ?>
        <div class="swiper js-home-slider">
            <div class="swiper-wrapper">
                <?php foreach($slides as $slide) : ?>
                    <div class="swiper-slide" data-swiper-autoplay="<?php echo $slide['czas_zmiany_slidu_']; ?>000">
                        <div class="slide">
                            <div class="copy">
                               <?php if($slide['data_wydarzenia']) : ?>
                                <div class="time">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="43.914" height="43.859" viewBox="0 0 43.914 43.859">
                                        <path data-name="Kształt 10" d="M188.651,263a28.256,28.256,0,0,1-2.93-.743,10.3,10.3,0,0,1-6.439-11.214,9.929,9.929,0,0,1,7.036-8.232,10.337,10.337,0,0,1,13.09,12.794,10.008,10.008,0,0,1-8.165,7.232c-.292.058-.586.109-.879.163Zm.839-17.3a6.937,6.937,0,1,0,.021,0Zm-27.4,17.3a.9.9,0,0,0-.191-.077,6.66,6.66,0,0,1-5.219-3.871,15.261,15.261,0,0,1-.675-2.135V228.649a14.4,14.4,0,0,1,.715-2.219,6.667,6.667,0,0,1,5.936-3.851c.765-.041,1.535-.006,2.348-.006,0-.552,0-1.061,0-1.57a1.718,1.718,0,1,1,3.426-.015c0,.511,0,1.022,0,1.556h7.716c0-.569-.019-1.147,0-1.725a1.708,1.708,0,0,1,3.415.012c.016.555,0,1.112,0,1.7h7.8c0-.569-.021-1.148,0-1.727a1.7,1.7,0,0,1,2.615-1.395,1.653,1.653,0,0,1,.8,1.432c.014.554,0,1.111,0,1.725.5,0,.983.009,1.463,0a8.416,8.416,0,0,1,3.16.436,6.8,6.8,0,0,1,4.444,6.15c.05,3.34.023,6.681.014,10.021a1.71,1.71,0,1,1-3.418-.04c-.01-3.17,0-6.339,0-9.508a3.369,3.369,0,0,0-1.939-3.261,3.434,3.434,0,0,0-1.268-.338c-.794-.052-1.594-.014-2.449-.014,0,.517,0,1.025,0,1.533a1.72,1.72,0,1,1-3.427,0c0-.5,0-1,0-1.523h-7.8c0,.471,0,.937,0,1.4,0,1.2-.67,1.984-1.7,1.989a1.745,1.745,0,0,1-1.723-1.968c0-.469,0-.937,0-1.429h-7.716c0,.565.018,1.143,0,1.721a1.709,1.709,0,0,1-3.418-.048c-.012-.553,0-1.105,0-1.743a21.866,21.866,0,0,0-2.934.168,3.329,3.329,0,0,0-2.633,3.229c-.006.114-.005.229-.005.343q0,13.106,0,26.211a3.342,3.342,0,0,0,1.943,3.3,4.273,4.273,0,0,0,1.734.362c4.213.03,8.427.019,12.64.013a1.9,1.9,0,0,1,1.445.521,1.706,1.706,0,0,1-.492,2.739c-.128.06-.258.113-.387.17Zm27.309-8.668a1.642,1.642,0,0,1-1.587-1.607q-.046-1.837,0-3.676a1.7,1.7,0,0,1,3.406-.005c.027.608.005,1.22.005,1.885.338,0,.609-.015.878,0a1.708,1.708,0,0,1,1.608,1.729,1.687,1.687,0,0,1-1.616,1.675q-.668.024-1.338.025T189.393,254.332Zm-22.729-.587a1.712,1.712,0,1,1,.046,0Zm5.792-1.719a1.711,1.711,0,1,1,1.713,1.719A1.719,1.719,0,0,1,172.457,252.026Zm0-7.445a1.711,1.711,0,1,1,1.721,1.711h-.01A1.719,1.719,0,0,1,172.457,244.581Zm-5.749,1.711a1.71,1.71,0,1,1,1.715-1.716,1.72,1.72,0,0,1-1.715,1.716Zm14.9-7.452a1.712,1.712,0,1,1,.02,0Zm-14.907,0a1.711,1.711,0,1,1,.015,0Zm5.76-1.71a1.711,1.711,0,1,1,1.722,1.71h-.01A1.72,1.72,0,0,1,172.457,237.13Zm14.911-.009a1.711,1.711,0,1,1,1.713,1.719A1.719,1.719,0,0,1,187.368,237.121Z" transform="translate(-156 -219.141)" fill="#d54d27"/>
                                    </svg>
                                    <span>
                                    <?php echo $slide['data_wydarzenia']; ?><br>
                                    <?php echo $slide['godzina_wydarzenia']; ?>
                                    </span>     
                                </div>
                                <?php endif; ?>
                                <?php if($slide['tytul']) : ?>
                                <<?php echo $slide['tag_tytulu']; ?> class="copy__title"><?php echo $slide['tytul']; ?></<?php echo $slide['tag_tytulu']; ?>>
                                <?php endif; ?>
                                <div class="desc">
                                <?php if($slide['opis']) : ?>
                                <p><?php echo $slide['opis']; ?></p>
                                <?php endif; ?>
                                <?php if( $slide['link'] ): ?>
                                <a href="<?php echo $slide['link']['url']; ?>" class="btn btn-big"><?php echo $slide['link']['title']; ?></a>
                                <?php endif; ?>
                                </div>
                            </div>
                            <div class="img">
                                <?php if($slide['wyswietlaj'] == 2) : ?>
                                    <?php echo wp_get_attachment_image( $slide['zdjecie_w_tle'], 'full' ); ?>
                                <?php elseif($slide['wyswietlaj'] == 1): ?>
                                    <video class="video-js vjs-playing" autoplay muted loop poster="<?php echo wp_get_attachment_image_url( $slide['zdjecie_w_tle'], 'full' ); ?>" >
                                        <?php if($slide['wideo']['mp4']) { ?>
                                            <source src="<?php echo $slide['wideo']['mp4']; ?>" type="video/mp4" >
                                        <?php } ?>
                                        <?php if($slide['wideo']['mp4']) { ?>
                                            <source src="<?php echo $slide['wideo']['mp4']; ?>" type="video/webm" >
                                        <?php } ?>
                                        <?php if($slide['wideo']['ogg']) { ?>
                                            <source src="<?php echo $slide['wideo']['ogg']; ?>" type="video/ogg" >
                                        <?php } ?>   
                                     </video>
                                <?php endif; ?>
                                
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination--slider"></div>
        </div>
        <?php endif; ?>
</div>
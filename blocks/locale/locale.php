<?php 
$title = get_field('tytul_sekcji');
$des = get_field('opis');
$locs= get_field('miejsca_na_mapie');
$className = 'testimonial';

$id = 'local-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$className = 'local';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
?>

<div id="<?php echo esc_attr($id); ?>" class=" <?php echo esc_attr($className); ?>">
    <div class="container">
    <div class="local_wrap">
        <div class="local_head">
            <?php echo  $title ? '<h2>' . $title . '</h2>' : false; ?>
            <div class="desc-wrap">
            <?php echo  $des ? ' <div class="desc">' . $des . '</div>' : false; ?>
            </div>
        </div>
        <div class="local_map">
        <div id="map" style="width: 100%; height: 400px;"></div>
        
        <script type="text/javascript">
            var pin = '<?php echo get_template_directory_uri() ?>/blocks/locale/pin.png';
            console.log(pin);
            var locations = [
                // ['Bondi Beach', -33.890542, 151.274856, 4],
                <?php $index = 1; foreach($locs as $loc) : ?>
                    ['<?php echo $loc['lokalizacja']['address']; ?>', <?php echo $loc['lokalizacja']['lat']; ?>, <?php echo $loc['lokalizacja']['lng']; ?>, <?php echo $index; ?>],
                <?php  $index++; endforeach; ?>
            ];
        </script>
        </div>
    </div>
    </div>
</div>
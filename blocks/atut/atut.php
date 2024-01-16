<?php 
$zdj = get_field('zdjcie');
$style = get_field('ulozenie_zdjecia');
 $des = get_field('opis');
$class="";
$style == 1 ? $class= 'right' : $class = 'left';
?>

<div class="atut">
    <div class="atut_wrap <?php echo $class; ?>">
        <div class="img">
            <?php echo wp_get_attachment_image( $zdj, 'full' ); ?>
        </div>
        <div class="desc">
            <div class="desc_wrap">
                <?php echo $des; ?>
            </div>
        </div>
    </div>
</div>
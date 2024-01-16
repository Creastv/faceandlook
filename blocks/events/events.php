<?php
$title = get_field('tytul_sekcji');
$des = get_field('opis');

$id = 'b-events-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$className = 'b-events';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
?>

<div id="<?php echo esc_attr($id); ?>" class=" <?php echo esc_attr($className); ?>" >
<div class="container">
    <?php echo  $title ? '<h2 class="section-tite">' . $title . '</h2>' : false; ?>
        <div class="desc-wrap">
        <?php echo  $des ? ' <div class="desc">' . $des . '</div>' : false; ?>
    </div>
    <?php get_template_part('templates-parts/parts/grid', 'mw_events-2'); ?> 
</div>

</div>
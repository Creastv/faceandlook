<?php
$group = get_field('grupa');

$id = 'group-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$className = 'group';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
?>

<div id="<?php echo esc_attr($id); ?>" class=" <?php echo esc_attr($className); ?>" >
<div class="group__container">
<div class="spacer-log"></div>
<div class="group__wrap">
    
    <?php if($group) : ?>
    <div class="logos">
        <?php foreach($group as $item) : ?>
            <div class="logo">
            <?php echo $item['link'] ? '<a href="' . $item['link'] . '">' : false; ?>
            <?php echo wp_get_attachment_image( $item['logo'], 'full' ); ?>
            <?php if($item['nazwa']) : ?>
                <span ><?php echo $item['nazwa']; ?></span>
            <?php endif; ?>
            <?php echo $item['link'] ? '</a>' : false; ?>
            </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
   
</div>
</div>
</div>
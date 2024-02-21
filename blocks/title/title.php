<?php
$title = get_field('tytul');
$link = get_field('link');
if ($link) :
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;
?>

<div class="bc-title">
    <div class="bc-title__wrap">
        <h1 class="bc-title__title"><?php echo $title; ?></h1>
        <a class="btn-revers" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
    </div>
</div>
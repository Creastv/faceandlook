<?php
$title = get_field('title');
$tag = get_field('tag');
?>
<?php if($title) : ?>
<div class="title">
    <?php echo $title ? '<' . $tag . ' class="title__tag" >' . $title . '</' . $tag . '>': false ; ?>
</div>
<?php endif; ?>
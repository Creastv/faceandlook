<?php
$nav = get_field('nawigacja');
?>

<div class="nav-anchor">
    <ul>
        <?php foreach($nav as $item) : ?>
        <li><a href="<?php echo $item['nazwa_kotwicy']; ?>"><?php echo $item['tytu'] ;?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
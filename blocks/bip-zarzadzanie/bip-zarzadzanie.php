<?php 
$lata = get_field('lata');
?>
<?php if($lata) : ?>
    <div class="bip-years">
        <div class="bip-years__wraper">
        <?php foreach($lata as $item) : ?>
            <div class="bip-year">
                <?php echo $item['link_do_podstrony'] ? '<a href="' . $item['link_do_podstrony'] . '">': false; ?>
                    <?php echo $item['rok'] ? $item['rok'] : false; ?>
                <?php echo $item['link_do_podstrony'] ? '</a>': false; ?>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>
<?php
$faq = get_field('faq', 'options');
$colOne = $faq['col_one'];
$colTwo = $faq['col_two'];
$title = $faq['title_section'];
?>
<div id="faq">
    <?php echo $title ? '<p class="h2 text-center">' . $title . '</p>' : false; ?>
    <div class="faq js">
        <div class="faq__wraper">
            <?php if ($colOne) { ?>
                <div class="col">
                    <?php foreach ($colOne['accordion'] as $acc) { ?>
                        <div class="accordion js">
                            <h3 class="question h5">
                                <span><?php echo $acc['accordion_name']; ?></span>
                            </h3>
                            <div class="answer">
                                <div>
                                    <?php echo $acc['accordion_content']; ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <?php if ($colTwo) { ?>
                <div class="col">
                    <?php foreach ($colTwo['accordion'] as $acc) { ?>
                        <div class="accordion js">
                            <h3 class="question h5">
                                <span><?php echo $acc['accordion_name']; ?></span>
                            </h3>
                            <div class="answer">
                                <div>
                                    <?php echo $acc['accordion_content']; ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>

    </div>
</div>
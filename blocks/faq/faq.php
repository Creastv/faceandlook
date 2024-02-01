<?php
$colOne = get_field('col_one');
$colTwo = get_field('col_two');
?>
<div id="faq">
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
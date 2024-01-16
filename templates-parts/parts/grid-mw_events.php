<?php 
$customeposts = get_field('wybrane_wydarzenia', 'options');
// if($customeposts){
$postsColLeft = get_field('wydarzenia_lewa_kolumna', 'options');
$postsColRight = get_field('wydarzenia_prawa_kolumna', 'options');
// }
$event= new WP_Query( array(
    'post_type' => 'mw_event',
    'posts_per_page' => 6,
    'order' => 'DESC',
    // 'year'                   => '2022',
    
));
$event2= new WP_Query( array(
    'post_type' => 'mw_event',
    'posts_per_page' => 6,
    'order' => 'DESC',
    'offset' => -3
    // 'year'                   => '2022',
));
$i= 1;
$ii= 1;

?>
<?php if($customeposts){ ?>

<div class="events-recommended">
    <div class="events-recommended__wrap">
    <div class="col col-1 ">
        <div class="grid">
        <?php foreach( $postsColLeft as $post ):  ?>
            <?php if ($i == 1) { ?>  
                <div class="one"> <?php get_template_part( 'templates-parts/content/content', 'mw-event-grid' );  ?></div>
            <?php } elseif($i == 2) { ?>
                <div class="two"><?php get_template_part( 'templates-parts/content/content', 'mw-event-grid' );  ?></div>
            <?php } elseif($i == 3) { ?>
                <div class="tree"><?php get_template_part( 'templates-parts/content/content', 'mw-event-grid' );  ?></div>
            <?php } ?>

            <?php $i++; endforeach;    wp_reset_postdata();?> 
        </div>    
    </div>
    <div class="col col-2">
        <div class="grid">
   
        <?php foreach( $postsColRight as $post ): ?>
        
            <?php if ($ii == 1) { ?>  
                <div class="one"> <?php get_template_part( 'templates-parts/content/content', 'mw-event-grid' );  ?></div>
            <?php } elseif($ii == 2) { ?>
                <div class="two"><?php get_template_part( 'templates-parts/content/content', 'mw-event-grid' );  ?></div>
            <?php } elseif($ii == 3) { ?>
                <div class="tree"><?php get_template_part( 'templates-parts/content/content', 'mw-event-grid' );  ?></div>
            <?php } ?>
         <?php $ii++;  endforeach;    wp_reset_postdata();?> 
        </div>
    </div>
    </div>
</div>

<?php } else { ?>  

<div class="events-recommended">
    <div class="events-recommended__wrap">
    <div class="col col-1 ">
        <div class="grid">
            <?php while ( $event->have_posts() ) : $event->the_post(); ?>
            <?php if ($i == 1) { ?>  
                <div class="one"> <?php get_template_part( 'templates-parts/content/content', 'mw-event-grid' );  ?></div>
            <?php } elseif($i == 2) { ?>
                <div class="two"><?php get_template_part( 'templates-parts/content/content', 'mw-event-grid' );  ?></div>
            <?php } elseif($i == 3) { ?>
                <div class="tree"><?php get_template_part( 'templates-parts/content/content', 'mw-event-grid' );  ?></div>
            <?php } ?>

            <?php $i++; endwhile; wp_reset_query();?>
        </div>    
    </div>
    <div class="col col-2">
        <div class="grid">

    <?php while ( $event2->have_posts() ) : $event2->the_post(); ?>
    <?php if ($ii == 1) { ?>  
                <div class="one"> <?php get_template_part( 'templates-parts/content/content', 'mw-event-grid' );  ?></div>
            <?php } elseif($ii == 2) { ?>
                <div class="two"><?php get_template_part( 'templates-parts/content/content', 'mw-event-grid' );  ?></div>
            <?php } elseif($ii == 3) { ?>
                <div class="tree"><?php get_template_part( 'templates-parts/content/content', 'mw-event-grid' );  ?></div>
            <?php } ?>
    <?php $ii++;  endwhile; wp_reset_query();?>
        </div>
    </div>
    </div>
</div>
<?php } ?>